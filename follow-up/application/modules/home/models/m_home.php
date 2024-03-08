<?php

/**
 * Description of m_user
 *
 * @author rofiq@buditama.com
 */
class M_home extends CI_Model

{

    function __construct()
    {
        parent::__construct();
        $this->table = 'profil_kependudukan';
        $this->primary_key = 'id_kependudukan';
    }
			
}

?>
