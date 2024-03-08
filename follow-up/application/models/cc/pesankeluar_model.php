<?php

class pesankeluar_model extends My_Model {

    public $primary_key = 'id';
	public $_database='';
	
    function __construct() {
        parent::__construct();
    }
	public function database($database){
		$this->db = $this->load->database($database, true);
	}
}

?>