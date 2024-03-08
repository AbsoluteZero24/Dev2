<?php

class Home_basic_model extends CI_Model{

    function __construct() {
       parent::__construct();        
        $this->primary_key = 'id';
    }

   function get_all($table) {
        return $this->db
		->get( $table)
		->result();
    }

	function get_all_filter($table, $filter = null, $limit = 5) {	
		$dbQuery = "SELECT * FROM $table $filter ORDER BY id DESC LIMIT $limit";	
		$data = $this->db->query($dbQuery)->result();
        return $data;		
    }		
		
  function get_detail($table,$id) {
        return $this->db
		->where('id',$id)
		->get( $table)
		->row();
    }
	
   function get_detail_stp($table,$id) {
        return $this->db
		->where('id_main_stp',$id)
		->get( $table)
		->row();
    }

	function get_jumlah($nama_table, $return, $filter = null) {	
		$dbQuery = "SELECT COUNT(*) AS $return FROM $nama_table $filter";	
		$data = $this->db->query($dbQuery)->row();
        return $data;		
    }
	
	function get_all_marahabaya($filter = null) {	
		$dbQuery = "SELECT * FROM dash_marabahaya $filter ORDER BY id DESC LIMIT 5";	
		$data = $this->db->query($dbQuery)->result();
        return $data;		
    }
	
	function get_all_bmkg($filter = null) {	
		$dbQuery = "SELECT * FROM dash_bmkg $filter ORDER BY id DESC LIMIT 5";	
		$data = $this->db->query($dbQuery)->result();
        return $data;		
    }
}