<?php

class Generic_model extends CI_Model{

    function __construct() {
       parent::__construct();        
        $this->primary_key = 'id';
		$this->id = 'id';
    }
	
	function add($table,$post){				
		$this->db
		->insert($table, $post);
		return $this->db->insert_id();
	}
	
	function delete($table,$id){				
		return $this->db
		->where('id',$id)
		->delete($table);
	}
	function update($table,$post,$id){				
		return $this->db
		->where('id',$id)
		->update($table, $post);		
	}	
  
	function get_all($table) {
        return $this->db
		->get($table)
		->result();
    }
	
	function get_all_filter($table, $filter = null, $limit = null, $id='id', $order='DESC') {
		$lmt = ($limit != null)? " LIMIT $limit " : '';
		$dbQuery = "SELECT * FROM $table $filter ORDER BY $id $order $lmt";	
		$data = $this->db->query($dbQuery)->result();
        return $data;		
    }
	
	function get_all_filter_paging($table,$filter='',$limit=array(), $id='id', $order='DESC'){
	if($limit == null){	
		return $this->db->query("SELECT * FROM $table $filter ORDER BY $id $order")->result();
	 }
	 else{
	  	if($limit['offset'] == NULL){
		   $limit['offset'] =0;
		}
		return $this->db->query("SELECT * FROM $table $filter ORDER BY $id $order LIMIT ".$limit['offset'].' , '.$limit['perpage'])->result();
	 }
	}
	
	function get_detail_filter($table, $filter = null, $limit = null, $id='id') {
		$lmt = ($limit != null)? " LIMIT $limit " : '';
		$dbQuery = "SELECT * FROM $table $filter ORDER BY $id DESC $lmt";	
		$data = $this->db->query($dbQuery)->row();
        return $data;		
    }
	function get_where_id($table,$id) {
        return $this->db		
		->where('id',$id)
		->get($table)
		->result();
    }
	
	function detail($table,$id,$pk='id') {		
        return $this->db
		->where($pk,$id)
		->get($table)
		->row();
    }
	
	function get_sum($table,$field='id',$filter='') {
		$dbQuery = "SELECT sum($field) as total FROM $table $filter";	
		return $this->db->query($dbQuery)->row()->total;
    }
	
	function get_count($table,$field='id',$filter='') {
		$dbQuery = "SELECT count($field) as total FROM $table $filter";	
		return $this->db->query($dbQuery)->row()->total;
    }
	/* SBNP */
	function get_where_by_sbnp_main($table,$id) {		
		$data = $this->db
		->where('id_main',$id)		
		->limit(1)
		->order_by('id','DESC')
		->get($table)
		->row();
		
		if ($data != null) {
			return $data;
		}else{
			return null;
		}
    }	 
	 /**/
	
}
