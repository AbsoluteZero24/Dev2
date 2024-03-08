<?php

class vptidatabase_model extends My_Model {

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

    function get_importer($no_wa= '') {
        $ssql = "select b.*, a.nm_pic  
                 from vpti_importer_pic a
                 left join vpti_importer b on a.importer_id=b.importer_id and a.commodity_code=b.commodity_code
                 where a.no_wa = '".$no_wa."' and a.sts_aktif=1";
        $result = $this->db->query($ssql)->row_array();
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
