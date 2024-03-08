<?php

class query_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_data() {
        $dbQuery = "select unit_kerja, sum(B) B, sum(P) P, sum(S) S, sum(L) L from (
select unit_kerja, count(*) B,0 P, 0 S, 0 L from mst_temuan group by unit_kerja, sts_progres having sts_progres ='B'
union all
select unit_kerja, 0 B, count(*) P, 0 S, 0 L from mst_temuan group by unit_kerja, sts_progres having sts_progres ='P'
union all
select unit_kerja, 0, 0, count(*), 0 from mst_temuan group by unit_kerja, sts_progres having sts_progres ='S'
union all
select unit_kerja, 0,0,0, count(*) from mst_temuan group by unit_kerja, sts_progres having sts_progres ='L') a
group by unit_kerja
order by unit_kerja 
";
        $data = $this->db->query($dbQuery)->result();
        return $data;
    }

    function get_detail($table, $id) {
        return $this->db
                        ->where('id', $id)
                        ->get($table)
                        ->row();
    }

    function get_detail_stp($table, $id) {
        return $this->db
                        ->where('id_main_stp', $id)
                        ->get($table)
                        ->row();
    }

    function get_jumlah($nama_table, $return, $filter = null) {
        $dbQuery = "SELECT COUNT(*) AS $return FROM $nama_table $filter";
        $data = $this->db->query($dbQuery)->row();
        return $data;
    }

    function cek_unit() {
        $query = "select a.id as id_unit,b.nama as unit from auth_users a, unit b where a.id_unit=b.id and 
		
		a.username='" . $this->session->userdata('identity') . "'";
        $data = $this->db->query($query)->result();
        foreach ($data as $d) {
            $this->session->set_userdata('id_unit', $d->id_unit);
            $this->session->set_userdata('unit', $d->unit);
        }
    }

    function get_output_result() {
        $sql = "SELECT
vpti_ls_header.io_number,
vpti_ls_header.ls_number,
vpti_ls_header.ls_date ls_date,
MONTH(vpti_ls_header.ls_date) AS ls_bln,
YEAR(vpti_ls_header.ls_date) AS ls_thn,
vpti_ls_header.ip_no,
vpti_ls_header.ip_expiry_date AS ip_date,
vpti_ls_header.loading_port,
vpti_ls_header.discharge_port,
vpti_ls_header.net_weight,
vpti_ls_header.unit,
vpti_ls_header.cif_per_invoice,
vpti_ls_detail.hs_code,
vpti_ls_detail.description,
vpti_ls_detail.origin,
vpti_ls_detail.qty,
vpti_ls_detail.unit,
vpti_ls_detail.fob_value_curr,
vpti_io_header.pdf_creator,
vpti_ls_header.loading_country,
vpti_ls_header.discharge_country,
vpti_io_transfer.sub_cont,
vpti_ls_detail.quota_no AS no_ls,
vw_cs_detail.ip_number AS no_cs,
vw_cs_detail.hs_code AS hs_cs,
vw_cs_detail.units AS satuan_cs,
nm_produk, k.kode, nm_hs
FROM
	vpti_ls_header
INNER JOIN vpti_ls_detail ON vpti_ls_header.io_number = vpti_ls_detail.io_number AND vpti_ls_header.ls_id = vpti_ls_detail.ls_id
INNER JOIN vpti_io_header ON vpti_ls_header.io_number = vpti_io_header.io_number
INNER JOIN vpti_io_transfer ON vpti_ls_header.io_number = vpti_io_transfer.io_number
LEFT JOIN (SELECT
	vpti_ip_detail.ip_number AS ip_number,
	vpti_ip_detail.hs_code AS hs_code,
	vpti_ip_detail.units AS units
FROM
	vpti_ip_detail
GROUP BY
	vpti_ip_detail.ip_number,
	vpti_ip_detail.hs_code,
	vpti_ip_detail.units) vw_cs_detail ON vpti_ls_detail.hs_code = vw_cs_detail.hs_code AND vpti_ls_detail.quota_no = vw_cs_detail.ip_number
left join vpti_ip_header on vpti_ip_header.ip_number=vpti_ls_header.ip_no
left join tbl_konversi_hs k on k.kd_hs=vpti_ls_detail.hs_code
where status='I'";
        $data = $this->db->query($dbQuery)->row();
        return $data;
    }

    function get_ls_01() {
        $dbQuery = "select * from sen_tmp_ls_01";
        $dbQuery = "select 
	k.nm_produk hs_produk, hs_code, 
	sum(if(year(ls_date)='2015',cif_per_invoice,0)) nil_2015,
	sum(if(year(ls_date)='2016',cif_per_invoice,0)) nil_2016,
	sum(if(year(ls_date)='2017',cif_per_invoice,0)) nil_2017,
	sum(if(year(ls_date)='2018',cif_per_invoice,0)) nil_2018
from vpti_ls_header h
left join vpti_ls_detail d on d.ls_id=h.ls_id
left join tbl_konversi_hs k on k.kd_hs=d.hs_code and k.tahun=year(h.ls_date)
where status in ('I','N')
group by k.nm_produk, hs_code";
        $data = $this->db->query($dbQuery)->result();
        return $data;
    }

    function get_ls_02() {
        $dbQuery = "select * from sen_tmp_ls_02";
        $dbQuery = "select 
	k.nm_produk hs_produk, hs_code, 
	sum(if(month(ls_date)=1,cif_per_invoice,0)) bln_01,
	sum(if(month(ls_date)=2,cif_per_invoice,0)) bln_02,
	sum(if(month(ls_date)=3,cif_per_invoice,0)) bln_03,
	sum(if(month(ls_date)=4,cif_per_invoice,0)) bln_04,
	sum(if(month(ls_date)=5,cif_per_invoice,0)) bln_05,
	sum(if(month(ls_date)=6,cif_per_invoice,0)) bln_06,
	sum(if(month(ls_date)=7,cif_per_invoice,0)) bln_07,
	sum(if(month(ls_date)=8,cif_per_invoice,0)) bln_08,
	sum(if(month(ls_date)=9,cif_per_invoice,0)) bln_09,
	sum(if(month(ls_date)=10,cif_per_invoice,0)) bln_10,
	sum(if(month(ls_date)=11,cif_per_invoice,0)) bln_11,
	sum(if(month(ls_date)=12,cif_per_invoice,0)) bln_12
from vpti_ls_header h
left join vpti_ls_detail d on d.ls_id=h.ls_id
left join tbl_konversi_hs k on k.kd_hs=d.hs_code and k.tahun=year(h.ls_date)
where status in ('I','N') and year(ls_date)=2018
group by k.nm_produk, hs_code
";
        $data = $this->db->query($dbQuery)->result();
        return $data;
    }

    function get_quarter() {
        $sql = "select 
	year(ls_date) tahun, 
		sum( 
			if(month(ls_date)<=3,cif_per_invoice,0)
			) quarter_01,
		sum( 
			if(month(ls_date)>=4 and month(ls_date)<=6,cif_per_invoice,0)
			) quarter_02,
		sum( 
			if(month(ls_date)>=7 and month(ls_date)<=9,cif_per_invoice,0)
			) quarter_03,
		sum( 
			if(month(ls_date)>=10 and month(ls_date)<=12,cif_per_invoice,0)
			) quarter_04
from vpti_ls_header 
where status in ('I','N') 
group by year(ls_date)
order by year(ls_date)";
        $data = $this->db->query($sql)->result();
        return $data;
    }

}
