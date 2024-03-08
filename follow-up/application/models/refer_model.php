<?php
class Refer_model extends CI_Model{
	function __construct(){
        parent::__construct();
       
    }
	
	
	
	function month_in_roman($num='1'){
        $n = intval($num);
		$res = '';
 
		/*** roman_numerals array  ***/
		$roman_numerals = array(
					'M'  => 1000,
					'CM' => 900,
					'D'  => 500,
					'CD' => 400,
					'C'  => 100,
					'XC' => 90,
					'L'  => 50,
					'XL' => 40,
					'X'  => 10,
					'IX' => 9,
					'V'  => 5,
					'IV' => 4,
					'I'  => 1);
	 
		foreach ($roman_numerals as $roman => $number) 
		{
			/*** divide to get  matches ***/
			$matches = intval($n / $number);
	 
			/*** assign the roman char * $matches ***/
			$res .= str_repeat($roman, $matches);
	 
			/*** substract from the number ***/
			$n = $n % $number;
		}
	 
		/*** return the res ***/
		return $res;
		
    }
	
	function days_in_month($month, $year) { 
		// calculate number of days in a month 
		return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31); 
		} 
	function get_referer($table,$id='id',$field,$key){	
		$sqry = "select $field from $table where `$id` = '$key' ORDER by $id DESC LIMIT 1";
		$query = $this->db->query($sqry);
		if ($query->num_rows() > 0) {
			 $data = $query->row()->$field;
			 return $data;
		}else {
			return ' - ';
		}
	}
	
	function get_referer2($table,$id='id',$field,$key){	
		$sqry = "select $field from $table where `$id` = '$key'";
		$query = $this->db->query($sqry);
		if ($query->num_rows() > 0) {
			 $data = $query->row()->$field;
			 return $data;
		}else {
			return ' - ';
		}
	}
	function get_referer_counting($table,$filter){	
		$sqry = "select count(*) as jumlah from $table $filter";
		$query = $this->db->query($sqry);
		if ($query->num_rows() > 0) {
			 $data = $query->row()->jumlah;
			 return $data;
		}else {
			return ' - ';
		}
	}
    
	function date_to_day($tgl){
		$unix = strtotime($tgl);
		$hari = date("D", $unix); // hasilnya 3 huruf nama hari bahasa inggris
		$hari = str_replace('Sun', 'Minggu', $hari);
		$hari = str_replace('Mon', 'Senin', $hari);
		$hari = str_replace('Tue', 'Selasa', $hari);
		$hari = str_replace('Wed', 'Rabu', $hari);
		$hari = str_replace('Thu', 'Kamis', $hari);
		$hari = str_replace('Fri', 'Jum\'at', $hari);
		$hari = str_replace('Sat', 'Sabtu', $hari);
		return $hari;
	}
    function get_config($id){return $this->get_referer('apps_config','nama', 'isi', $id);
	function get_poli($id){return $this->get_referer('mtr_poli','id', 'poli', $id); } 
	function get_agama($id){return $this->get_referer('mtr_agama','id', 'agama', $id); }  } 
	function get_bulan_kode($id){return $this->get_referer('mtr_bulan','kode', 'bulan', $id); } 
	function get_bulan($id){return $this->get_referer('mtr_bulan','id', 'bulan', $id); } 

	function get_obat_id($id){return $this->get_referer('mtr_obat','nama_obat', 'id', $id); } 
	function get_satuan_id($id){return $this->get_referer('mtr_satuan','satuan', 'id', $id); } 

	function get_jenis_kelamin($id){return $this->get_referer('mtr_jenis_kelamin','kode', 'jenis_kelamin', $id); } 
	
	function get_distrik($id){return $this->get_referer('masnav_distrik','id_distrik', 'ket_distrik', $id); } 
	function get_jenis_dasar_hukum($id){return $this->get_referer('web_produk_hukum_jenis','id', 'jenis_produk_hukum', $id); } 
	
	
	function get_username($id){return $this->get_referer('auth_users','id', 'username', $id); } 
	function get_usernamefull($id){return $this->get_referer('auth_users','id', 'first_name', $id); } 
	
	
}



