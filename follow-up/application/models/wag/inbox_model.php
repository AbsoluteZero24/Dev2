<?php

class inbox_model extends My_Model {

    public $primary_key = 'id';

    function __construct() {
        $this->db = $this->load->database('db_wa', true);
        parent::__construct();
    }

    function read_all_inbox($key = []) {
        // next step, baca hanya inbox last 2 days
        $sql = 'select * from inbox where id not in (select id_inbox from inbox_proses) limit 1';
        
        return $this->db->query($sql)->row_array();
    }
    
    function read_keyword_inbox($key = []) {
        $sql = 'select * from inbox where message in ("' . implode('","', $key) . '")';
        
        return $this->db->query($sql)->result_array();
    }

    function read_respon_in_inbox($key = []) {
        $sql = 'select * from inbox where message not in ("' . implode('","', $key) . '")';
        
        return $this->db->query($sql)->result_array();
    }
    
}

?>