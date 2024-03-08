<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cdurasi extends CI_Model{
    //protected $CI;
    
    public $durasi = '';
	public $durasi_error = '';
	public $durasi_number = '';
	public $total_durasi='';
	public $hour_string = '';
    public $durasi_result = '';
	public $error_msg = '';
	public $durasi_jam='';
	public $durasi_menit='';
	
    function __construct() {
        parent::__construct();
    }

	function validasi_old($durasi){
		if($durasi==''){
			return 'no data';
		}
		
		$durasi = str_replace('.', ':', $durasi);
		$durasi = str_replace(' ', ':', $durasi);
		$durasi = str_replace('jam', '', $durasi);
		$durasi = str_replace('men', '', $durasi);
		$durasi = preg_replace("/[^0-9:][^:]/", "", $durasi);
		
		$jml_tanda = substr_count($durasi,':');
		if($jml_tanda==0){
			$durasi = $durasi.':00';
		}
		if($jml_tanda>1){
			$posisi=strpos($durasi,':');
			$posisi=strpos($durasi,':',$posisi+1);
			
			$durasi = substr($durasi,0,$posisi);
		}
		
        $dateObj = DateTime::createFromFormat('H:i', $durasi);

        if ($dateObj !== false && $dateObj && $dateObj->format('G') == intval($durasi)) {
			
			$this->durasi_jam=(int) $dateObj->format('H');
			$this->durasi_menit=(int) $dateObj->format('i');
			
			
			if($this->durasi_menit>0){
				$this->durasi_result=$this->durasi_jam.' jam '. $this->durasi_menit . ' menit';
			}else{
				$this->durasi_result=$this->durasi_jam.' jam';
			}
			$this->hour_string=$dateObj->format('H');
			
            $this->total_durasi = ($this->durasi_jam * 60) + $this->durasi_menit;

			
        } else {
			$this->durasi_error=$durasi;
            $this->durasi_result=-1;
			$this->total_durasi=-1;
        }
	}
		
	function validasi($durasi){
		if($durasi==''){
			return 'no data';
		}
		$durasi = str_replace('jam', '', $durasi);
		$durasi = str_replace('.', ':', $durasi);
		$durasi = str_replace(' ', ':', $durasi);
		$durasi = str_replace('men', '', $durasi);
		$durasi = preg_replace("/[^0-9:][^:]/", "", $durasi);
		
		$jml_tanda = substr_count($durasi,':');
		if($jml_tanda==0){
			$durasi = $durasi.':00';
		}
		if($jml_tanda>1){
			$posisi=strpos($durasi,':');
			$posisi=strpos($durasi,':',$posisi+1);
			
			$durasi = substr($durasi,0,$posisi);
		}
		$posisi_menit = strpos($durasi,':');
		if(substr($durasi, $posisi_menit+1)==''){
			$durasi = $durasi.'00';
		}
		
        $dateObj = DateTime::createFromFormat('H:i', $durasi);

        if ($dateObj !== false && $dateObj && $dateObj->format('G') == intval($durasi)) {
			
			$this->durasi_jam=(int) $dateObj->format('H');
			$this->durasi_menit=(int) $dateObj->format('i');
			
			if($this->durasi_menit>0){
				$this->durasi_result=$this->durasi_jam.' jam '. $this->durasi_menit . ' menit';
			}else{
				$this->durasi_result=$this->durasi_jam.' jam';
			}
			$this->hour_string=$dateObj->format('H');
			
            $this->total_durasi = ($this->durasi_jam * 60) + $this->durasi_menit;

			
        } else {
			$this->durasi_error=$durasi;
            $this->durasi_result=-1;
        }
	}
	

}
