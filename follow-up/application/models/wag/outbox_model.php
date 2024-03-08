<?php

class outbox_model extends My_Model {

    public $primary_key = 'id';

    function __construct() {
        $this->db = $this->load->database('db_wa', TRUE);
        parent::__construct();
    }

}

?>