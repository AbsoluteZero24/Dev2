<?php

class ocev_cart_model extends My_Model {

    public $primary_key = 'cart_id';
    

    function __construct() {
        parent::__construct();
        $this->_database  = $this->load->database('waserda', TRUE);
    }

}

?>