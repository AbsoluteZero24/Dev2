<?php

/**
 * Description of m_user
 *
 * @author rofiq@buditama.com
 */
class User_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'authniter_users';
    }

    function get_all()
    {
        $group = $this->db->get('authniter_groups')->result();
        foreach ($group as $g)
        {
            $user[$g->id]->name = $g->name;
            $user[$g->id]->users = $this->db
                            ->select('u.id, u.username, u.email')
                            ->join('authniter_users u', 'u.id = gu.user_id')
                            ->join('authniter_groups g', 'g.id = gu.group_id')
                            ->where('g.id', $g->id)
                            ->get('authniter_groups_users gu')
                            ->result();
			foreach($user[$g->id]->users as $u)
			{
				$u->lokasi = $this->db
							->select('l.nama_lokasi')
							->join('lokasi l','l.id_lokasi = pu.id_lokasi')
							->join('authniter_users u','u.id = pu.id_user')
							->where('pu.id_user',$u->id)
							->get('penempatan_user pu')
							->result();
			}
        }
        return $user;
    }

    function add($data)
    {
	print_r($data);
        $u = $data;
        $u['password'] = md5($data['password']);
        unset($u['group_id']);
		unset($u['lokasi']);
        $u['aktif'] = 1;
        $this->db->insert($this->table,$u);
        $user_id = $this->db->insert_id();
        $this->db->insert('authniter_groups_users',array('user_id'=>$user_id,'group_id'=>$data['group_id']));
		foreach($data['lokasi'] as $l)
		{
			$this->db->insert('penempatan_user',array('id_user'=>$user_id,'id_lokasi'=>$l['id_lokasi']));
		}
    }

}

?>
