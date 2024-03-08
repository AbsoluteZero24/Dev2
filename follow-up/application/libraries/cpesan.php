<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cpesan extends CI_Model {

    //protected $CI;

    public $table = '';
    public $status = '';
    public $keterangan = '';
    public $inbox = [];

    function __construct() {
        parent::__construct();
    }

    public function database($database) {
        $this->db = $this->load->database($database, TRUE);
    }
    
    public function pesan($pesan='')
    {
        switch($pesan){
            case 'sambutan': $result = '<salam>, Ada yang bisa kami bantu ?'; break;
        }
        $this->reply = $result;
        return $result;
    }


}
