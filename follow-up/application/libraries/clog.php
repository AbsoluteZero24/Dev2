<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clog extends CI_Model{
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
    
	public function inbox($inbox=[]){
		$this->inbox=$inbox;
		$this->data='';
		$this->result='';
	}
	
    public function save() {
            //$this->clog->layanan = 'cek saldo';
            //$this->clog->noformulir = $inbox['NoFormulir'];
            //$this->clog->notelp = $inbox['NoTelp'];
            //$this->clog->data = '';
		
        $data['layanan'] = $this->layanan;
        $data['noformulir'] = $this->inbox['NoFormulir']; //$this->noformulir;
        $data['notelp'] = $this->inbox['NoTelp']; //$this->notelp;
        $data['proses'] = $this->proses;
        $data['deskripsi'] = $this->deskripsi;
        $data['data'] = $this->data;
		$data['source'] = $this->source;
        $data['result'] = $this->result;
        $data['tgl_create'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
        $this->db->insert($this->table, $data);
        $this->proses = '';
        $this->deskripsi = '';
        $this->data = '';
        $this->result = '';
        $this->source = '';
		$this->sql = '';
    }
    
	function preview()
	{
		echo '<br>'.$this->table.'<br>';
        $result = $this->db
                ->select('*')
                ->get($this->table)
                ->result_array();
		foreach($result as $r){
			echo $r['proses'].' <br> '.$r['deskripsi'].' <br> '.$r['result'].'<br>--------------<br>';
			
		}
		
		
        return $result;
	}
	
	function clear_log(){
		$this->db->truncate($this->table);
	}
	

}
