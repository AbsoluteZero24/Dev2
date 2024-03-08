<?php

class ref_tim_model extends My_Model {

    public $primary_key = 'id';
	
    function __construct() {
		$this->db = $this->load->database('serverwa', true);
        parent::__construct();
		$this->table = 'ref_tim';
    }
	function database($database){
		$this->db = $this->load->database($database, true);
	}
}

?>