<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Wac extends CI_Model{

    public $database='wa';
    public $table='outbox';
    public $phone='';
    public $message='';

    function __construct() {
        parent::__construct();
    }
    

    function send_message() {

        $new['notelp'] = $this->phone;
        $new['pesan'] = $this->message;
        $new['status'] = '0';
        $this->dbwa = $this->load->database($this->database, TRUE);
        $this->dbwa->insert($this->table, $new);
    }
    
}

?>