<?php

class servicedesk_model extends My_Model {

    public $inbox = [];

    function __construct() {
        parent::__construct();
    }
	
	public function database($database){
		$this->db = $this->load->database($database, TRUE);
	}

    function save_request_to_database($data) {
		// demo
		//return 'temporary save to service desk';
		// mendapatkan nomor layanan
        $nomor = $this->get_nomor_layanan();
        $data['nomor'] = $nomor;

		// insert ke tabel
        $result = $this->db->insert('kso_permohonan_layanan', $data);

		// insert ke tabel wa ref, agar tidak dikirim wa dobel
        $wa_ref['nomor'] = $nomor;
        $wa_ref['noformulir'] = $this->inbox['NoFormulir'];
        $result = $this->db->insert('kso_permohonan_wa_ref', $wa_ref);

		// mengupdate nomor terakhir
        $this->db->where('propname', 'counter_permohonan')->update('kso_properties', ['propvalue' => $nomor]);

        return $result;
    }

    function get_user($pegawai) {
		$email = $pegawai['email'];
		$user = $this->db
				->select('*')
				->where('user_email', $email)
				->or_where('user_id', str_replace('@scisi.com', '', $pegawai['email']))
				->limit(1)
				->get('tbl_user')
				->row_array();

//print_r($user);				
		if (empty($user)) {
			//print_r($pegawai);
			$user = array();
			$user['user_id'] = str_replace('@scisi.com', '', $pegawai['email']);
			$user['user_passwd'] = '12345';
			$user['user_passwd_plain'] = '12345';
			$user['user_displayname'] = $pegawai['nama'];
			$user['user_type'] = 'USR';
			$user['div_code'] = 0;
			$user['subdiv_code'] = 0;
			$user['is_login'] = '1';
			$user['last_login'] = NULL;
			$user['user_created_by'] = 'wa-center';
			$user['pimpinan'] = '';
			$user['pimpinan_divisi'] = '';
			$user['user_email'] = $pegawai['email'];
			$this->db->insert('tbl_user', $user);
		}

        return $user;
    }


    function get_nomor_layanan() {
        $result = $this->db
                ->select('a.*')
                ->where('propname', 'counter_permohonan')
                ->limit(1)
                ->get('kso_properties a')
                ->row_array();
        return $result['propvalue'] + 1;
    }

}
