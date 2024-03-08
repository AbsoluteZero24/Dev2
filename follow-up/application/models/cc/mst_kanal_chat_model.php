<?php

class mst_kanal_chat_model extends My_Model {

    public $primary_key = 'id';
    public $_database = 'id';

    function __construct() {
        parent::__construct();
    }

    public function database($database) {
        $this->db = $this->load->database($database, true);
    }

}

?>