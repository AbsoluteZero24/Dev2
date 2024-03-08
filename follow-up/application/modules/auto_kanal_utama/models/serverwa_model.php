<?php

class serverwa_model extends My_Model {

    public $inbox = [];
    public $sql = '';
    public $result = '';
    public $_database = '';

    function __construct() {
        parent::__construct();
    }

    public function database($database) {
        $this->db = $this->load->database($database, TRUE);
    }

    function read_inbox($status= '') {
//        if ($status== '') {
            $result = $this->db
                    ->select('a.*')
                    ->where("id not in (select id_pesan from pesanmasuk_status)")
                    
                    ->order_by('tanggal asc')
                    ->limit(1)
                    ->get('pesanmasuk a')
                    ->result_array();
//        } else {
//            $result = $this->db
//                    ->select('a.*')
//                    ->where("id", 1) // demo
//                    ->order_by('id asc')
//                    ->get('pesanmasuk a')
//                    ->result_array();
//        }
        return $result;
    }

    function get_admin($info = '') {
        $result = $this->db
                ->select('a.*')
                ->where('info', $info)
                ->get('admin_server a')
                ->result_array();
        return $result;
    }

    function get_staf_it($nm_petugas = '') {
        $this->dbx = $this->load->database('serverwa-kso', TRUE);
        $result = $this->dbx
                ->select('a.*')
                ->where('nm_petugas_it', $nm_petugas)
                ->limit(1)
                ->get('ref_petugas_it a')
                ->row_array();
        return $result;
    }

    function send_message($nomor = '', $pesan = '') {

        // demo
        //$this->result = 'WHATSAPP ('.$nomor.'): '. PHP_EOL.$pesan;
        //return;


        $new['notelp'] = $nomor;
        $new['pesan'] = $pesan;
        $new['status'] = '0';
        $this->db->insert('outbox', $new);
    }

}
