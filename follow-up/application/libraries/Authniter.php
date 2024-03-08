<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Catatan :
 * Library yang harus disimpan pada autoload : Session
 * Helper yang harus disimpan pada autoload : Url
 */
class Authniter{

    var $CI;
    var $table_users = 'authniter_users';

    function Authniter()
    {
        $this->CI = & get_instance();
        $this->CI->lang->load('authniter');
    }

    function filter()
    {
        $uri = $this->CI->uri->uri_string();
        $rule = $this->get_rule();

        $uri = empty($uri) ? "/" : $uri;
        if ($this->_areGroupsAllowed($uri, $rule))
        {
            
        }
        else
        {
            $this->CI->session->set_flashdata('notification', $this->CI->lang->line('access_denied'));
            redirect();
        }
    }

    function register($data)
    {
        $data['password'] = md5($data['password']);
        return $this->CI->db->insert($this->table_users, $data);
    }

    function is_logged()
    {
        return ((int) $this->CI->session->userdata('authniter_logged') == 1);
    }

    function is_user($user)
    {
        $cek = $this->get_username();
        if ($cek == $user)
            return TRUE;
        else
            return FALSE;
    }

    function logout()
    {
        $this->destroy_data();
        $this->CI->session->set_flashdata('notification', $this->CI->lang->line('user_has_logout'));
        redirect();
    }

    function login($username='', $password='', $url='/')
    {

        if ($this->is_logged())
        {
            $this->CI->session->set_flashdata('notification', $this->CI->lang->line('user_has_login_before'));
            redirect($this->CI->session->userdata('authniter_previous_url'));
        }
        else
        {
           // $qry = "SELECT * FROM authniter_users WHERE CONCAT(username,'@',password)=CONCAT(?,'@',md5(?))";
		   //$qry = "SELECT u.*,nama_satker FROM authniter_users u LEFT JOIN mtr_satker s on u.id_satker = s.id_satker WHERE CONCAT(username,'@',password)=CONCAT(?,'@',md5(?))";
			$qry = "xSELECT u.*,s.id_satker,s.nama_satker FROM authniter_users u LEFT JOIN authniter_user_satker aus on aus.id_user = u.id LEFT JOIN mtr_satker s on aus.id_satker =s.id_satker  WHERE CONCAT(username,'@',password)=CONCAT(?,'@',md5(?))";
			

            $data = $this->CI->db->query($qry, array($username, $password));
            if ($data->num_rows() > 0)
            {
                $user = $data->row();
                if ($user->aktif == 0)
                {
                    $this->CI->session->set_flashdata('notification', $this->CI->lang->line('account_is_not_verified'));
                    redirect($this->CI->session->userdata('authniter_previous_url'));
                }
                else
                {
                    //print_r($data->row_array());
                    $groups_id = $this->_getListGroups($user->id);
                    $groups_name = $this->_getListGroupsName($groups_id);
                    //$rule = $this->_getListUserRule($groups_id);

                    $listUserData = Array(
                        'authniter_logged' => 1,
                        'authniter_user_id' => $user->id,
                        'authniter_groups_id' => $groups_id,
                        'authniter_groups_name' => $groups_name,
                        'authniter_username' => $user->username,
						'id_satker' => $user->id_satker,
						'nama_satker' => $user->nama_satker,
						'nama' => $user->nama,
						'nip' => $user->nip
                    );

                    $this->CI->session->set_userdata($listUserData);
                    redirect($url);
                }
            }
            else
            {
                $this->CI->session->set_flashdata('notification', $this->CI->lang->line('username_and_password_mismatch'));
                redirect($this->CI->session->userdata('authniter_previous_url'));
            }
        }
    }

    function destroy_data()
    {
        $listUserData = Array(
            'authniter_logged' => '',
            'authniter_member_id' => '',
            'authniter_user_id' => '',
            'authniter_groups_id' => '',
            'authniter_groups_name' => '',
            'authniter_username' => '',
            'authniter_user_rule' => '',
			'id_satker' => '',
			'nama_satker'=> '',
			'nama'=> '',
			'nip'=> ''
        );

        $this->CI->session->unset_userdata($listUserData);
    }

    function get_user_id()
    {
        return $this->CI->session->userdata('authniter_user_id');
    }

    function get_username()
    {
        return $this->CI->session->userdata('authniter_username');
    }

    function get_profile_id()
    {
        return $this->CI->session->userdata('authniter_member_id');
    }
	
	function get_satker_id()
    {
        return $this->CI->session->userdata('id_satker');
    }
	
	function get_satker_name()
    {
        return $this->CI->session->userdata('nama_satker');
    }
	function get_fullname()
    {
        return $this->CI->session->userdata('nama');
    }
	function get_nip()
    {
        return $this->CI->session->userdata('nip');
    }
    function is_member_of($group_id=-1)
    {
        $listGroup = $this->getGroupsId();
        if (is_array($listGroup))
        {
            return in_array($group_id, $listGroup);
        }
        else
        {
            return 0;
        }
    }

    function get_groups_id()
    {
        return $this->CI->session->userdata('authniter_groups_id');
    }

    function get_groups_name()
    {
        return $this->CI->db_session->userdata('authniter_groups_name');
    }

    function get_rule()
    {
        //return $this->CI->db_session->userdata('authniter_user_rule');
        $groups_id = $this->get_groups_id();
        if (empty($groups_id))
            $groups_id = array(0);

        return $this->_getListUserRule($groups_id);
    }

    function _getListGroups($userid=-1)
    {
        $qry = "SELECT agu.group_id FROM authniter_groups_users agu WHERE agu.user_id=?";
        $data = $this->CI->db->query($qry, array($userid));
        $lstGroup = array(0);
        foreach ($data->result() as $group)
            $lstGroup[] = $group->group_id;
        return $lstGroup;
    }

    function _getListGroupsName($list_groups=array())
    {
        $str = implode(',', $list_groups);
        $qry = "SELECT g.name FROM authniter_groups g WHERE g.id in ($str)";
        $data = $this->CI->db->query($qry);
        $lstGroupName = array();
        foreach ($data->result() as $group)
            $lstGroupName[] = $group->name;
        return $lstGroupName;
    }

    function _getListUserRule($list_groups=array())
    {
        $str = implode(',', $list_groups);
        $qry = "SELECT r.action,r.permission FROM authniter_rules r WHERE r.group_id in ($str) ORDER BY `order`";
        $data = $this->CI->db->query($qry);

        $rule = $data->result_array();
        foreach ($rule as $id => $detail)
        {
            $rule[$id]['action'] = str_replace(array('/', '*', ' or '), array('\/', '.*', '|'), $detail['action']);
        }

        return $rule;
    }

    // Function to check the access for the controller / action
    function _areGroupsAllowed($url = "", $rules)
    { // $checkStr: "/name/action/" $group_ids: check again thess groups
        $allow = false;
        foreach ($rules as $data)
        {
            if (preg_match("/^({$data['action']})$/i", $url, $matches))
            {
                $allow = $data['permission'];
                if ($allow == 'Deny')
                    $allow = false;
                else
                    $allow = true;
            }
        }
        return $allow;
    }

    function isAllowed($url="")
    {
        $rule = $this->get_rule();
        return $this->_areGroupsAllowed($url, $rule);
    }

}

?>