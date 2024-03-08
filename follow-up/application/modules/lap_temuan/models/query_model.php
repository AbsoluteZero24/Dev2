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

    function list_kegiatan($filter) {
        
//        $query = $this->db->select('a.*, b.nama nm_jns_kegiatan')
//                ->left('tbl_jns_kegiatan b','b.id=a.id_jns_kegiatan')
//                ->like($filter)
//                ->order_by('a.id','desc')
//                ->get('trx_kegiatan a');
//        return $query->result_array();
        
        $sql = "SELECT a.*, b.nama nm_jns_kegiatan, if(jam_mulai!='','<br>','') br1, if(jam_selesai!='','<br>','') br2 FROM trx_kegiatan a 
                left join tbl_jns_kegiatan b on b.id=a.id_jns_kegiatan 
                order by tgl_mulai";
        return $this->db->query($sql)->result_array();
    }
    
    function get_data()
    {
        $sql = "
SELECT d.nm_pegawai, a.*, b.nama nm_jns_kegiatan FROM trx_kegiatan a 
left join tbl_jns_kegiatan b on b.id=a.id_jns_kegiatan
left join trx_kegiatan_pic c on c.id_kegiatan=a.id
left join mst_personel d on d.id=c.id_pic
order by d.nm_pegawai            
                " ;
        return $this->db->query($sql)->result_array();
    }
    
    

}
