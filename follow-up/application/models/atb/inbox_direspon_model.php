<?php

class inbox_direspon_model extends My_Model {

    public $primary_key = 'id';

    function __construct() {
        $this->db = $this->load->database('db_wa', true);
        parent::__construct();
    }

}

?>