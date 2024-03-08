<?php

class mst_tender_model extends My_Model {

    public $primary_key = 'id';

    function __construct() {
        parent::__construct();
    }

    function get_list($filter = null) {

        foreach ($filter as $key => $value) {
            if (empty($value))
                unset($filter[$key]);
        }
        $where = '';

        if (!empty($filter)) {
            foreach ($filter as $key => $value) {
                if ($value === "") {
                    unset($filter[$key]);
                }

                $where .= $key . " like '%" . $value . "%' or ";
            };
            $where = substr($where, 0, strlen($where) - 3);
            $where = 'where ' . $where . " ";
        } else {
            $where = 'where false';
        }

        $dbQuery = "select * from vw_vpti_io " .
                $where .
                " limit 100  ";
        //return $this->db->query($dbQuery)->result();
        return $this->db->query($dbQuery)->result();
    }

    function get_list_02($filter = null) {

        foreach ($filter as $key => $value) {
            if (empty($value))
                unset($filter[$key]);
        }
        $where = '';

        if (!empty($filter)) {
            foreach ($filter as $row) {
                $where .= $row;
            };
            $where = substr($where, 0, strlen($where) - 3);
            $where = 'where ' . $where . " ";
        } else {
            $where = 'where false';
        }

        $dbQuery = "select * from vw_list_pengobatan " . $where;
        return $this->db->query($dbQuery)->result();
    }

    function get_data($tgl) {
        $sql = "select * from vw_list_pengobatan where tgl_pengajuan='" . $tgl . "'";
        //return $this->db->query($dbQuery)->result();
        return $this->db->query($sql)->result();
    }

    function get_list_vo() {
        $sql = "SELECT
	registration_number,
	vr_submit_date,
	h.importer_id,
	vr_submit_no,
	h.commodity_code,
	h.status,
	remarks,
	vr_print_by,
	vr_print_date,
	importer_name
FROM
	vpti2_vr_submission_header h
inner join vpti_importer i on i.importer_id=h.importer_id
WHERE h.io_number IS NULL
AND h.status_cancel = 'P' and registration_number is not null 
ORDER BY h.io_number DESC";
        //return $this->db->query($dbQuery)->result();
        return $this->db->query($sql)->result();
    }

}

?>