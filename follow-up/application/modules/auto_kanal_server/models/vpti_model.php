<?php

class vpti_model extends My_Model {

    public $inbox = [];
    public $result = '';
    public $_database = '';

    function __construct() {
        parent::__construct();
    }

    public function database($database) {
        $this->db = $this->load->database($database, TRUE);
    }

    function read_inbox($status = '') {
        $result = $this->db
                ->select('a.*')
                ->where("id not in (select id_pesan from pesanmasuk_status)")
                ->order_by('tanggal asc')
                ->limit(1)
                ->get('pesanmasuk a')
                ->result_array();
        return $result;
    }

    function keyword($keyword = '') {
        //switch($keyword){
        //	case '<ls=A0216CN3304612>': //$result = cari_ls($keyword); break;
        //	case '<vo=X.33.005630>': //$result = cari_vo($keyword);break;
        //	case '<importir=UNILEVER INDONESIA TBK>': //$result = cari_importir($keyword);break;
        //}
        $keyword = strtolower($keyword);
        if (strpos($keyword, 'ls=') > 0) {
            $result = '[LS] LS No. A0216CN3304612' . PHP_EOL .
                    'No LS: xxxx' . PHP_EOL .
                    'Importir : aaaa';
            $this->result = $result;
            return;
        }
        if (strpos($keyword, 'vo=') > 0) {
            $result = '[VO] VO.No : X.33.005630' . PHP_EOL .
                    'No LS: xxxx' . PHP_EOL .
                    'Importir : aaaa';
            $this->result = $result;
            return;
        }
        if (strpos($keyword, 'importir=') > 0) {
            $result = '[Importir] PT. UNILEVER INDONESIA TBK	' . PHP_EOL .
                    'Alamat : GRAHA UNILEVER, JL.JEND.GATOT SUBROTO KAV.15 ' . PHP_EOL . 'KARET ' . PHP_EOL . 'SEMANGGI-SETIABUDI';
            $this->result = $result;
            return;
        }
        $this->result = 'unknown request ' . $keyword . '--' . strpos('importir=', $keyword);
    }

}
