<?php

class outbox_model extends My_Model {

    public $primary_key = 'id';
    public $_database = '';

    function __construct() {
        parent::__construct();
    }

}

?>