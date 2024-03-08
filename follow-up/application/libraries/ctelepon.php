<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctelepon extends CI_Model{
    //protected $CI;
    
    public $table = '';
    public $layanan = '';
    public $noformulir = '';
    public $notelp = '';
    public $proses= '';
    public $deskripsi = '';
    public $data = '';
    public $result = '';
	public $source = '';
    public $tgl_create = '';
    
    public $phone='';
    public $message='';
	public $inbox=[];
	public $sql='';
    
    function __construct() {
        parent::__construct();
    }
	
	public function database($database){
		$this->db = $this->load->database($database, TRUE);
	}
    
	public function convert($notelp=''){
		//$notelp = preg_replace("/[^0-9:][^:]/", "", $notelp);
		$notelp = str_replace('+', '', $notelp);
		$notelp = str_replace(' ', '', $notelp);
		$notelp = str_replace('-', '', $notelp);
		
		$this->no_wa =$notelp;
	}
	
	

}
