<?php

class query_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_list() {
        
//        $query = $this->db->select('a.*, b.nama nm_jns_kegiatan')
//                ->left('tbl_jns_kegiatan b','b.id=a.id_jns_kegiatan')
//                ->like($filter)
//                ->order_by('a.id','desc')
//                ->get('trx_kegiatan a');
//        return $query->result_array();
        
        $sql = "SELECT a.*,
                case 
                when sts_progres = 'B' then 'Belum'
                when sts_progres = 'P' then 'Proses'
                when sts_progres = 'S' then 'Selesai'
                when sts_progres = 'L' then 'Lanjut' end sts_progres
                
                
                from mst_temuan a order by id";
        return $this->db->query($sql)->result_array();
    }
    
    function get_pic($id)
    {
        $sql = "SELECT a.*, b.kd_pegawai FROM trx_kegiatan_pic a left join mst_personel b on b.id=a.id_pic where id_kegiatan=" . $id;
        return $this->db->query($sql)->result_array();
    }
    
    

}
