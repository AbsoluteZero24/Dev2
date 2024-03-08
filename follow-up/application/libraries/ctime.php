<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctime extends CI_Model{
    //protected $CI;
    
    public $time = '';
	public $time_error = '';
	public $hour_number = '';
	public $hour_string = '';
    public $time_result = '';
	
    function __construct() {
        parent::__construct();
    }

	function pengecekan_jam($time=''){
		$jam=$time;
		
		$jam = str_replace('.', ':', $jam);
		$jam = str_replace(' ', ':', $jam);
		$jam = str_replace('jam', '', $jam);
		$jam = str_replace('men', '', $jam);

		$jam = preg_replace("/[^0-9:][^:]/", "", $jam);
		
		$jml_tanda = substr_count($jam,':');
		if($jml_tanda==0){
			$jam = $jam.':00';
		}
		if($jml_tanda>1){
			$posisi=strpos($jam,':');
			$posisi=strpos($jam,':',$posisi+1);
			
			$jam = substr($jam,0,$posisi);
		}
		
        $dateObj = DateTime::createFromFormat('H:i', $jam);

        if ($dateObj !== false && $dateObj && $dateObj->format('G') == intval($jam)) {
            $this->time_result=$dateObj->format('H:i');
			$this->hour_number=(int) $dateObj->format('H');
			$this->hour_string=$dateObj->format('H');
        } else {
			$this->time_error=$jam;
            $this->time_result=-1;
        }
		
		
	}
		
	

}
