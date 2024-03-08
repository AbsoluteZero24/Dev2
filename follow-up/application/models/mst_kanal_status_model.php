<?php

class mst_kanal_status_model extends My_Model {

    public $primary_key = 'id';
	public $_database = '';

    function __construct() {
        $this->db = $this->load->database('serverwa_cs', TRUE);
        parent::__construct();
    }

	public function database($database){
		$this->db = $this->load->database($database, TRUE);
	}

}

?>