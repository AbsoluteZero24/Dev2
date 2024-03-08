<?php

class query_model extends My_Model {

    public $inbox = [];

    function __construct() {
        parent::__construct();
    }

    public function database($database) {
        $this->db = $this->load->database($database, TRUE);
    }

    function read_inbox($status = '') {
        $result = $this->db
                ->select('a.*')
                ->where("a.id not in (select id_pesan from pesanmasuk_status)")
                ->order_by('tanggal asc')
                ->get('pesanmasuk a')
                ->result_array();
        return $result;
    }

}
