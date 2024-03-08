<?php

class query_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->tables = $this->config->item('tables', 'ion_auth');
    }

    function database($database = '') {
        $this->db = $this->load->database($database, TRUE);
    }

function get_list() {

//        $query = $this->db->select('a.*, b.nama nm_jns_kegiatan')
//                ->left('tbl_jns_kegiatan b','b.id=a.id_jns_kegiatan')
//                ->like($filter)
//                ->order_by('a.id','desc')
//                ->get('trx_kegiatan a');
//        return $query->result_array();

        $sql = "SELECT a.*, concat(substr(aspek_temuan,1,40),'...') judul,
                case 
                when sts_progres = 'B' then 'Belum'
                when sts_progres = 'P' then 'Proses'
                when sts_progres = 'S' then 'Selesai'
                when sts_progres = 'L' then 'Lanjut' end sts_progres_text
                
                
                from mst_temuan a 
                
                order by id";
        return $this->db->query($sql)->result_array();
    }


}
