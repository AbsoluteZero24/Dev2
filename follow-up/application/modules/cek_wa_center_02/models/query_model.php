<?php

class query_model extends My_Model {

    function __construct() {
        parent::__construct();
    }

    function send_message($phone='',$message='') {
		$this->db = $this->load->database('ab2', true);

        $ssql = "call SendMessage('".$phone."','".$message."');";
        $result = $this->db->query($ssql)->result();
        return $result;
    }

    function send_message_ab1($phone='',$message='') {
		$this->db = $this->load->database('ab1', true);

        $ssql = "call SendMessage('".$phone."','".$message."');";
        $result = $this->db->query($ssql)->result();
        return $result;
    }
    
    
}

?>