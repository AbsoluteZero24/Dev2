<?php

class query_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->tables = $this->config->item('tables', 'ion_auth');
    }

    function get_list($filter) {

        $query = $this->db->select('h.*, i.importer_name')
                ->join('vpti_importer i', 'i.importer_id=h.importer_id')
                ->like($filter)
                ->limit(10)
                ->get('vpti_ip_header h');


        return $query->result();
    }

    function get_indikator_kegiatan_vpte($filter) {

        $query = $this->db->select('h.*, i.importer_name')
                ->join('vpti_importer i', 'i.importer_id=h.importer_id')
                ->like($filter)
                ->limit(10)
                ->get('vpti_ip_header h');


        return $query->result();
    }

    function get_ls_bulanan($filter) {

        $sql = "SELECT
	YEAR (ls_date) tahun,
	MONTH (ls_date) bulan,
	t.sub_cont,
	COUNT (*) jml,
	SUM (fob_per_invoice) fob_per_invoice
        FROM
                vpti_ls_header h
        LEFT JOIN vpti_io_transfer t ON t.io_number = h.io_number
        WHERE
                YEAR (ls_date) = 2018 and month(ls_date)=6
        AND status != 'C'
        GROUP BY
	YEAR (ls_date),
	MONTH (ls_date),
	t.sub_cont
";


        return $this->db->query($sql)->result();
    }

    function get_ls_bulanan_sampai_dengan($filter) {

        $sql = "SELECT
	YEAR (ls_date) tahun,
	MONTH (ls_date) bulan,
	t.sub_cont,
	COUNT (*) jml,
	SUM (fob_per_invoice) fob_per_invoice
        FROM
                vpti_ls_header h
        LEFT JOIN vpti_io_transfer t ON t.io_number = h.io_number
        WHERE
                YEAR (ls_date) = 2018 
        AND status != 'C'
        GROUP BY
	YEAR (ls_date),
	MONTH (ls_date),
	t.sub_cont
";


        return $this->db->query($sql)->result();
    }

    function get_rekap_sampai_dengan($filter) {

        $sql = "SELECT
	YEAR (ls_date) tahun,
	t.sub_cont,
	COUNT (*) jml,
	SUM (fob_per_invoice) fob_per_invoice
        FROM
                vpti_ls_header h
        LEFT JOIN vpti_io_transfer t ON t.io_number = h.io_number
        WHERE
                YEAR (ls_date) = 2018 
        AND status != 'C'
        GROUP BY
	YEAR (ls_date),
	t.sub_cont
";


        return $this->db->query($sql)->result();
    }

    function ip_aktif() {
        $sql = 'SELECT
	h.importer_id,
	i.importer_name,
	flag_status,
	ip_date,
	ip_expiry_date,
	DATEDIFF(m, getdate(), ip_expiry_date) umur
FROM
	vpti_ip_header h
left join vpti_importer i on i.importer_id=h.importer_id
WHERE
	flag_status = 1
AND DATEDIFF(m, getdate(), ip_expiry_date) > 0
ORDER BY
	DATEDIFF(m, getdate(), ip_expiry_date);
';
        return $this->db->query($sql)->result();
    }

    function ip_saldo() {
        $sql = 'SELECT
	h.importer_id,
	i.importer_name,
	h.ip_number,
	d.quota_qty,
	d.real_qty,
	d.ballance
FROM
	vpti_ip_header h
left join vpti_importer i on i.importer_id=h.importer_id
left join vpti_ip_detail d on d.ip_number=h.ip_number
WHERE
	flag_status = 1 and quota_qty>0
AND DATEDIFF(m, getdate(), ip_expiry_date) > 0
ORDER BY
	DATEDIFF(m, getdate(), ip_expiry_date);
';
        return $this->db->query($sql)->result();
    }

    function ls_qty() {
        $sql = "select ip_no, sum(qty) total from vpti_ls_header h left join vpti_ls_detail d on d.ls_id=h.ls_id where year(ls_date)=2018 and status!='C' group by ip_no; ";
        return $this->db->query($sql)->result();
    }

    function ip_vs_ls() {
        $sql = "

SELECT
	h.importer_id,
	i.importer_name,
	h.ip_number,
	d.hs_code,
	d.quota_qty,
	d.real_qty,
	d.ballance, 
	u.total
FROM
	vpti_ip_header h
left join vpti_importer i on i.importer_id=h.importer_id
left join vpti_ip_detail d on d.ip_number=h.ip_number
left join (select ip_no, d.hs_code, sum(qty) total from vpti_ls_header h left join vpti_ls_detail d on d.ls_id=h.ls_id where status!='C' group by ip_no, d.hs_code) u on u.ip_no=h.ip_number and u.hs_code=d.hs_code
WHERE
	flag_status = 1 and quota_qty>0
AND DATEDIFF(m, getdate(), ip_expiry_date) > 0
ORDER BY
	h.ip_number, hs_code;
";
        return $this->db->query($sql)->result();
    }

}
