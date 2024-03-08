<?php

class trx_percakapan_model extends My_Model {

    public $primary_key = 'id';
	
    function __construct() {
        $this->db = $this->load->database('cc', true);
        parent::__construct();
    }
	public function database($database){
		$this->db = $this->load->database($database, true);
	}
}

?>