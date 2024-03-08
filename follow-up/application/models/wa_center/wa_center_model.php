<?php

class wa_center_model extends My_Model {

    public $primary_key = 'id';

    function __construct() {
        $this->dbwa = $this->load->database('serverwa-kso', TRUE);
        $this->load->helper('phone_helper');
        parent::__construct();
    }

    function send_message($phone = '', $message = '') {

        $new['notelp'] = $phone;
        $new['pesan'] = $message;
        $new['status'] = '0';
        $this->dbwa = $this->load->database('serverwa-kso', TRUE);
        $this->dbwa->insert('outbox', $new);
    }
    
}

?>