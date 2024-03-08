<?php
class map_datalink_model extends My_Model
{
	public $primary_key = 'id';
	function __construct()
	{
		parent::__construct();
	}
	
	function query()
	{
		return $this->db->query("select * from view")->result();
	}
}
?>