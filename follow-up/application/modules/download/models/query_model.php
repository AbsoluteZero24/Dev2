<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class query_model extends My_Model {

    function __construct() {
        parent::__construct();
    }

    function get_data($jenis, $start = '', $end = '') {
        $sql = "select 0";
        switch ($jenis) {
            case 'vr':
                $sql = "SELECT
                        h.vr_submit_no,
                        day(vr_submit_date) vr_hari,
                        month(vr_submit_date) vr_bln,
                        year(vr_submit_date) vr_thn,
                        i.company_name,
                        flag_imp,
                        port_code_load,
                        port_code_discharge,
                        invoice_no,
                        import_license_no,
                        curr_code,
                        total_value,
                        tot_net_weight,
                        io_number,
                        registration_number,
                        tot_net_weight_unit,
                        hs_code,
                        hs_description,
                        country_code,	
                        quantity,
                        unit,
                        weight_kgs,
                        unit_net,
                        h.status, 
                        status_cancel
                FROM
                        vpti2_vr_submission_header h
                        left join vpti2_importer i on i.id=h.importer_id
                        left join vpti2_vr_submission_detail d on d.vr_submit_no=h.vr_submit_no
                WHERE
                        vr_submit_date>='" . $start . "' AND vr_submit_date<'" . $end . "' and status_cancel!='Y'";
                break;
            case "ip":
                $sql = "select i.importer_name, ip_no, 
convert(varchar, ip_date, 105) ip_date, 
convert(varchar, ip_expiry_date, 105) ip_expiry_date, ip_or_it, seq_no, hs_code, goods_description, d.quota_qty, d.real_qty, d.ballance, d.units, destination_port
from vpti_ip_header h
left join vpti_ip_detail d on d.ip_number=h.ip_number
left join vpti_importer i on i.importer_id=h.importer_id
where ip_no != ''
order by i.importer_name, d.hs_code, d.seq_no";
                break;
            case 'recon':
                $sql = "SELECT
                            h.ip_number,
                            CONVERT(varchar(12),ip_date,105) ip_date,
                            CONVERT(varchar(12),ip_expiry_date,105) ip_expiry_date,
                            importer_name,
                            seq_no,
                            d.hs_code,
                            goods_description,
                            d.quota_qty,
                            d.real_qty,
                            d.ballance,
                            d.units,
                      destination_port,
                            r.ls_number,
                            CONVERT(varchar(12),r.ls_date,105) ls_date,
                            r.quota_qty quota_qty_tx,
                            r.real_qty real_qty_tx,
                            r.quota_ballance quota_ballance_tx,
                            CONVERT(varchar(12),r.real_date,105) real_date
                    FROM
                            vpti_ip_header h
                    left join vpti_importer i on i.importer_id=h.importer_id
                    left join vpti_ip_detail d on d.ip_number=h.ip_number
                    left join vpti_ip_realisation r on r.ip_number=d.ip_number and r.seq_number=d.seq_no
                    ";
                break;
            case "ls":
                $sql = "sen_rpt_ls '" . $start . "', '" . $end . "'";
                //$sql = "sen_rpt_ls '2018-01-01', '2020-01-30'";
                break;
            case "ls_with_quota":
                $sql = "sen_rpt_ls_with_quota '" . $start . "', '" . $end . "'";
                break;
            case "sla":
                $sql = "sen_rpt_sla '" . $start . "', '" . $end . "'";
                break;
            case "angga02":
                $ssql = "SELECT
	io_number,
	h.create_date,
	pdf_creator,
	h.importer_id,
	net_weight,
	unit,
	i.importer_name,
	h.cancel
FROM
	vpti_io_header h
left join vpti_importer i on i.importer_id=h.importer_id	
where 
h.create_date>='" . $start . "' AND h.create_date<'" . $end . "' 
h.cancel='N'";
                break;
            case "angga":
                $sql = "SELECT
                            a.io_number,
                            ls_number,
                            day(ls_date) ls_day,
                            month(ls_date) ls_month,
                            year(ls_date) ls_year,
                            a.importer_name,
                            qty,
                            a.net_weight,
                            sub_cont,
                            a.loading_port,
                            a.discharge_port,
                            b.hs_code,
                            b.description,
                            d.pdf_creator,
                            a.bl_awb_no,
                            a.bl_awb_date, 
				a.
                        FROM
                            vpti_ls_header a
                        left join vpti_ls_detail b on b.ls_id=a.ls_id
                        left join vpti_io_transfer c on c.io_number=a.io_number
                        left join vpti_io_header d on d.io_number=a.io_number
                        WHERE
                            status != 'C' and 
                           ls_date>='" . $start . "' AND ls_date<'" . $end . "' 
                        order by ls_number
                        ";

                $ssql = "
SELECT     TOP (100) PERCENT a.io_number, a.ls_number, DAY(a.ls_date) AS ls_day, MONTH(a.ls_date) AS ls_month, YEAR(a.ls_date) AS ls_year, a.importer_name, b.qty, a.net_weight, c.sub_cont, a.loading_port, a.discharge_port, b.hs_code, b.description, d.pdf_creator, a.bl_awb_no, 
                  a.bl_awb_date, a.invoice_no, a.invoice_date, dbo.vpti2_vr_submission_header.vr_submit_no
FROM        dbo.vpti_ls_header AS a INNER JOIN
                  dbo.vpti2_vr_submission_header ON a.io_number = dbo.vpti2_vr_submission_header.io_number LEFT OUTER JOIN
                  dbo.vpti_ls_detail AS b ON b.ls_id = a.ls_id LEFT OUTER JOIN
                  dbo.vpti_io_transfer AS c ON c.io_number = a.io_number LEFT OUTER JOIN
                  dbo.vpti_io_header AS d ON d.io_number = a.io_number
                        WHERE
                            status != 'C' and 
                           ls_date>='" . $start . "' AND ls_date<'" . $end . "' 
                        order by ls_number

";
                $sql = "
SELECT TOP
	( 100 ) PERCENT a.io_number,
	a.ls_number,
	DAY ( a.ls_date ) AS ls_day,
	MONTH ( a.ls_date ) AS ls_month,
	YEAR ( a.ls_date ) AS ls_year,
	a.importer_name,
	b.qty,
	a.net_weight,
	c.sub_cont,
	a.loading_port,
	a.discharge_port,
	b.hs_code,
	b.description,
	d.pdf_creator,
	a.bl_awb_no,
	a.bl_awb_date,
	a.invoice_no,
	a.invoice_date,
	dbo.vpti2_vr_submission_header.vr_submit_no,
		remarks1,
		remarks2,
		remarks3,
		remarks4,
		remarks5 
FROM
	dbo.vpti_ls_header AS a
	INNER JOIN dbo.vpti2_vr_submission_header ON a.io_number = dbo.vpti2_vr_submission_header.io_number
	LEFT OUTER JOIN dbo.vpti_ls_detail AS b ON b.ls_id = a.ls_id
	LEFT OUTER JOIN dbo.vpti_io_transfer AS c ON c.io_number = a.io_number
	LEFT OUTER JOIN dbo.vpti_io_header AS d ON d.io_number = a.io_number 
	inner join (
SELECT
	ls_id,
	MAX ( remarks1 ) remarks1,
	MAX ( remarks2 ) remarks2,
	MAX ( remarks3 ) remarks3,
	MAX ( remarks4 ) remarks4,
	MAX ( remarks5 ) remarks5 
FROM
	(
	SELECT
		ls_id,
		remarks remarks1,
		'' remarks2,
		'' remarks3,
		'' remarks4,
		'' remarks5 
	FROM
		vpti_ls_remarks 
	WHERE
		seq_no = 1 UNION ALL
	SELECT
		ls_id,
		'',
		remarks,
		'' remarks3,
		'' remarks4,
		'' remarks5 
	FROM
		vpti_ls_remarks 
	WHERE
		seq_no = 2 UNION ALL
	SELECT
		ls_id,
		'',
		'',
		remarks,
		'' remarks4,
		'' remarks5 
	FROM
		vpti_ls_remarks 
	WHERE
		seq_no = 3 UNION ALL
	SELECT
		ls_id,
		'',
		'',
		'',
		remarks,
		'' remarks5 
	FROM
		vpti_ls_remarks 
	WHERE
		seq_no = 4 UNION ALL
	SELECT
		ls_id,
		'',
		'',
		'',
		'',
		remarks 
	FROM
		vpti_ls_remarks 
	WHERE
		seq_no = 5 
	) a 
GROUP BY
	ls_id	
	) r on r.ls_id=a.ls_id
WHERE
	a.status = 'I' and 
	ls_date>='" . $start . "' AND ls_date<'" . $end . "' 
ORDER BY
	ls_number
                                ";

                break;
            case "bima":
                $sql = "SELECT
	a.importer_name,
	a.transporter_name,
	ls_number,
	ls_date,
	a.io_number,
	qty,
	d.pdf_creator,
	sub_cont,
	a.net_weight,
	a.loading_port,
	a.discharge_port,
	b.hs_code,
	b.description,
	a.bl_awb_date
	
FROM
	vpti_ls_header a
left join vpti_ls_detail b on b.ls_id=a.ls_id
left join vpti_io_transfer c on c.io_number=a.io_number
left join vpti_io_header d on d.io_number=a.io_number
WHERE
	status != 'C' and ls_date>='" . $start . "' AND ls_date<'" . $end . "' 
order by ls_number
";
                break;
            case "mapping":
                $sql = "SELECT
 	a.vr_submit_no vr_vr_submit_no,
	a.registration_number vr_reg_number,
	a.io_number vr_io_number,
	ai.importer_name vr_importer_id,
	b.registration_number reg_reg_number,
	ri.importer_name reg_importer_name,
	c.io_number ioh_io_number,
	c.pdf_creator surveyor,
	iohi.importer_name ioh_importer_name,
	d.io_number lsh_io_number,	
	d.ls_number lsh_ls_number,
	d.importer_name lsh_importer_name
FROM
	vpti2_vr_submission_header a
left join vpti_importer ai on ai.importer_id=a.importer_id
LEFT JOIN vpti_register b ON b.registration_number = a.registration_number
left join vpti_importer ri on ri.importer_id=b.importer_id
LEFT JOIN vpti_io_header c ON c.io_number = a.io_number
left join vpti_importer iohi on iohi.importer_id=c.importer_id
left join vpti_ls_header d on d.io_number = c.io_number
where vr_submit_date>='" . $start . "' AND vr_submit_date<'" . $end . "' 
order by a.vr_submit_no desc";
                break;
        }
        return $this->db->query($sql)->result();
    }

//    function bak_get_data($jenis, $tahun, $bulan, $hari) {
//        $sql = "select 0";
//        switch ($jenis) {
//            case 'vr':
//                $sql = "SELECT
//                        h.vr_submit_no,
//                        day(vr_submit_date) vr_hari,
//                        month(vr_submit_date) vr_bln,
//                        year(vr_submit_date) vr_thn,
//                        i.company_name,
//                        flag_imp,
//                        port_code_load,
//                        port_code_discharge,
//                        invoice_no,
//                        import_license_no,
//                        curr_code,
//                        total_value,
//                        tot_net_weight,
//                        io_number,
//                        registration_number,
//                        tot_net_weight_unit,
//                        hs_code,
//                        hs_description,
//                        country_code,	
//                        quantity,
//                        unit,
//                        weight_kgs,
//                        unit_net,
//                        h.status, 
//                        status_cancel
//                FROM
//                        vpti2_vr_submission_header h
//                        left join vpti2_importer i on i.id=h.importer_id
//                        left join vpti2_vr_submission_detail d on d.vr_submit_no=h.vr_submit_no
//                WHERE
//                        month(vr_submit_date)=" . $bulan . " AND year(vr_submit_date)=" . $tahun . " and status_cancel!='Y'";
//                break;
//            case "ip":
//                $sql = "select i.importer_name, ip_no, 
//convert(varchar, ip_date, 105) ip_date, 
//convert(varchar, ip_expiry_date, 105) ip_expiry_date, ip_or_it, seq_no, hs_code, goods_description, d.quota_qty, d.real_qty, d.ballance, d.units, destination_port
//from vpti_ip_header h
//left join vpti_ip_detail d on d.ip_number=h.ip_number
//left join vpti_importer i on i.importer_id=h.importer_id
//where ip_no != ''
//order by i.importer_name, d.hs_code, d.seq_no";
//                break;
//            case 'recon':
//                $sql = "SELECT
//                            h.ip_number,
//                            CONVERT(varchar(12),ip_date,105) ip_date,
//                            CONVERT(varchar(12),ip_expiry_date,105) ip_expiry_date,
//                            importer_name,
//                            seq_no,
//                            d.hs_code,
//                            goods_description,
//                            d.quota_qty,
//                            d.real_qty,
//                            d.ballance,
//                            d.units,
//                      destination_port,
//                            r.ls_number,
//                            CONVERT(varchar(12),r.ls_date,105) ls_date,
//                            r.quota_qty quota_qty_tx,
//                            r.real_qty real_qty_tx,
//                            r.quota_ballance quota_ballance_tx,
//                            CONVERT(varchar(12),r.real_date,105) real_date
//                    FROM
//                            vpti_ip_header h
//                    left join vpti_importer i on i.importer_id=h.importer_id
//                    left join vpti_ip_detail d on d.ip_number=h.ip_number
//                    left join vpti_ip_realisation r on r.ip_number=d.ip_number and r.seq_number=d.seq_no
//                    ";
//                break;
//            case "ls":
//                $sql = "sen_rpt_ls '" . $tahun . "', '" . $bulan . "','" . $hari . "'; ";
//                break;
//            case "ls_with_quota":
//                $sql = "sen_rpt_ls_with_quota '" . $tahun . "', '" . $bulan . "','" . $hari . "'; ";
//                break;
//            case "sla":
//                $sql = "sen_rpt_sla '" . $tahun . "', '" . $bulan . "','" . $hari . "'; ";
//                break;
//            case "angga":
//                $sql = "SELECT
//                            a.io_number,
//                            ls_number,
//                            day(ls_date) ls_day,
//                            month(ls_date) ls_month,
//                            year(ls_date) ls_year,
//                            a.importer_name,
//                            qty,
//                            a.net_weight,
//                            sub_cont,
//                            a.loading_port,
//                            a.discharge_port,
//                            b.hs_code,
//                            b.description,
//                            d.pdf_creator,
//                            a.bl_awb_no,
//                            a.bl_awb_date
//                        FROM
//                            vpti_ls_header a
//                        left join vpti_ls_detail b on b.ls_id=a.ls_id
//                        left join vpti_io_transfer c on c.io_number=a.io_number
//                        left join vpti_io_header d on d.io_number=a.io_number
//                        WHERE
//                            status != 'C' and year(ls_date)=" . $tahun . " and month(ls_date)=" . $bulan . "
//                        order by ls_number
//                        ";
//                break;
//            case "bima":
//                $sql = "SELECT
//	a.importer_name,
//	a.transporter_name,
//	ls_number,
//	ls_date,
//	a.io_number,
//	qty,
//	d.pdf_creator,
//	sub_cont,
//	a.net_weight,
//	a.loading_port,
//	a.discharge_port,
//	b.hs_code,
//	b.description,
//	a.bl_awb_date
//	
//FROM
//	vpti_ls_header a
//left join vpti_ls_detail b on b.ls_id=a.ls_id
//left join vpti_io_transfer c on c.io_number=a.io_number
//left join vpti_io_header d on d.io_number=a.io_number
//WHERE
//	status != 'C' and year(ls_date)=" . $tahun . " and month(ls_date)=" . $bulan . "
//order by ls_number
//";
//                break;
//            case "mapping":
//                $sql = "SELECT
// 	a.vr_submit_no vr_vr_submit_no,
//	a.registration_number vr_reg_number,
//	a.io_number vr_io_number,
//	ai.importer_name vr_importer_id,
//	b.registration_number reg_reg_number,
//	ri.importer_name reg_importer_name,
//	c.io_number ioh_io_number,
//	c.pdf_creator surveyor,
//	iohi.importer_name ioh_importer_name,
//	d.io_number lsh_io_number,	
//	d.ls_number lsh_ls_number,
//	d.importer_name lsh_importer_name
//FROM
//	vpti2_vr_submission_header a
//left join vpti_importer ai on ai.importer_id=a.importer_id
//LEFT JOIN vpti_register b ON b.registration_number = a.registration_number
//left join vpti_importer ri on ri.importer_id=b.importer_id
//LEFT JOIN vpti_io_header c ON c.io_number = a.io_number
//left join vpti_importer iohi on iohi.importer_id=c.importer_id
//left join vpti_ls_header d on d.io_number = c.io_number
//where year(a.vr_submit_date)=" . $tahun . "
//order by a.vr_submit_no desc";
//                break;
//        }
//        return $this->db->query($sql)->result();
//    }

    function get_query_yunan_recon($periode) {

        $query = $this->db
                ->select('	
                    h.ip_number,
                    CONVERT(varchar(12),ip_date,105) ip_date,
                    CONVERT(varchar(12),ip_expiry_date,105) ip_expiry_date,
                    importer_name,
                    seq_no,
                    d.hs_code,
                    goods_description,
                    d.quota_qty,
                    d.real_qty,
                    d.ballance,
                    d.units,
                    destination_port,
                    r.ls_number,
                    CONVERT(varchar(12),r.ls_date,105) ls_date,
                    r.quota_qty quota_qty_tx,
                    r.real_qty real_qty_tx,
                    r.quota_ballance quota_ballance_tx,
                    CONVERT(varchar(12),r.real_date,105) real_date')
                ->join('vpti_importer i', 'i.importer_id=h.importer_id')
                ->join('vpti_ip_detail d', 'd.ip_number=h.ip_number')
                ->join('vpti_ip_realisation r', 'r.ip_number=d.ip_number and r.seq_number=d.seq_no')
                ->where($periode)
                ->order_by('ip_number', 'asc')
                ->get('vpti_ip_header h');
        return $this->db->query($sql)->result();
    }

}

?>