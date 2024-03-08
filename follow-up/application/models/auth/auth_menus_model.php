<?php

class auth_menus_model extends My_Model {

    public $primary_key = 'id';

    function __construct() {
        parent::__construct();
    }

    function get_menu($id_module) {
        $menu = $this->db
                ->select('a.*, b.jml')
                ->join('(select id_parent, count(*) jml from auth_menus group by id_parent) b', 'b.id_parent=a.id', 'LEFT')
                ->where('id_module', $id_module)
                ->or_where('level', 0)
                ->or_where('level', 1)
                ->get('auth_menus a')
                ->result();
        return $menu;
    }

    function get_submenu($id) {
        $menu = $this->db
                ->select('a.*')
                ->where('id_parent', $id)
                ->get('auth_menus a')
                ->result();
        return $menu;
    }

    function get_main($id_module, $level) {
        $sql = "SELECT `a`.*, `b`.`jml` jml_child
FROM (`auth_menus` a)
LEFT JOIN (select id_parent, ifnull(count(*),0) jml from auth_menus group by id_parent) b ON `b`.`id_parent`=`a`.`id`
WHERE `id_module` =  " . $id_module . " 
AND `level` =  " . $level . " 
";
        return $this->db->query($sql)->result();

        $menu = $this->db
                ->select('a.*, b.jml jml_child')
                ->join('(select id_parent, ifnull(count(*),0) jml from auth_menus group by id_parent) b', 'b.id_parent=a.id', 'LEFT')
                ->where('id_module', $id_module)
                ->where('level', $level)
                ->get('auth_menus a')
                ->result();
        return $menu;
    }

    function get_parent($id_module, $parent) {
        $sql = "SELECT `a`.*, `b`.`jml` jml_child
FROM (`auth_menus` a)
LEFT JOIN (select id_parent, ifnull(count(*),0) jml from auth_menus group by id_parent) b ON `b`.`id_parent`=`a`.`id`
WHERE `id_module` =  " . $id_module . " 
AND a.id_parent =  " . $parent . " 
";
        return $this->db->query($sql)->result();
        $menu = $this->db
                ->select('a.*, b.jml jml_child')
                ->join('(select id_parent, ifnull(count(*),0) jml from auth_menus group by id_parent) b', 'b.id_parent=a.id', 'LEFT')
                ->where('id_module', $id_module)
                ->where('a.id_parent', $parent)
                ->get('auth_menus a')
                ->result();
        return $menu;
    }

}
?>	
