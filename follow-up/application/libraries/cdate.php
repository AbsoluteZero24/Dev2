<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cdate extends CI_Model{
    //protected $CI;
    
    public $date = '';
	public $date_error = '';
	public $hour_number = '';
	public $hour_string = '';
    public $date_result = '';
	public $date_mdy = '';
	public $date_ymd = '';
	public $date_dmy = '';
	public $date_zoom = '';
	public $date_object;
	
    function __construct() {
        parent::__construct();
    }

		
	function pengecekan_tanggal($tanggal=''){
		$tanggal = strtolower($tanggal);
		$tanggal = str_replace('desember', 'December', $tanggal);
		$tanggal = str_replace('nopember', 'November', $tanggal);
		$tanggal = str_replace('januari', 'january', $tanggal);
		$tanggal = str_replace('pebruari', 'february', $tanggal);
		$tanggal = str_replace('maret', 'march', $tanggal);
		$tanggal = str_replace('mei', 'may', $tanggal);
		$tanggal = str_replace('juni', 'june', $tanggal);
		$tanggal = str_replace('juli', 'july', $tanggal);
		$tanggal = str_replace('agustus', 'agust', $tanggal);
		
		$dateObj = DateTime::createFromFormat('d/m/y', $tanggal);
		if(!$dateObj){
			$dateObj = DateTime::createFromFormat('d/n/y', $tanggal);
			if(!$dateObj){
				$dateObj = DateTime::createFromFormat('j/m/y', $tanggal);
				if(!$dateObj){
					$dateObj = DateTime::createFromFormat('j/n/y', $tanggal);
					if(!$dateObj){
						$dateObj = DateTime::createFromFormat('d/m/Y', $tanggal);
						if(!$dateObj){
							$dateObj = DateTime::createFromFormat('d M Y', $tanggal);
						}
					}
				}
			}
		}
			
        if ($dateObj != false) {
            $this->date_result=$dateObj->format('d/m/Y');
			$this->date_string=$dateObj->format('d M Y');
			$this->date_mdy=$dateObj->format('m/d/Y');
			$this->date_dmy=$dateObj->format('d/m/Y');
			$this->date_ymd=$dateObj->format('Y/m/d');
			$this->date_zoom=$dateObj->format('Y-m-d');
			$this->date_object = $dateObj;
        } else {
			$this->date_error=$tanggal;
            $this->date_result=-1;
        }
		
		
	}
	

}
