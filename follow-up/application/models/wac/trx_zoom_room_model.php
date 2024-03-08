<?php

class trx_zoom_room_model extends My_Model {

    public $_primary_key = 'id';
	
    function __construct() {
		$this->db = $this->load->database('serverwa', true);
        parent::__construct();
    }
	function database($database){
		$this->db = $this->load->database($database, true);
	}
}

?>