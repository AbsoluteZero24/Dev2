<?php

echo '<ul class="sidebar-menu" data-widget="tree">';
$this->load->model('auth/auth_menus_model');
$menu = $this->auth_menus_model->get_main(10, 0);

foreach ($menu as $row) {
    if ($row->level == 0) {
        echo '<li class="header">Work Flow</li>';

        $menu_01 = $this->auth_menus_model->get_parent(10, $row->id);

        foreach ($menu_01 as $row_01) {
            if ($row_01->level == 1) {
                if (is_null($row_01->ref) || empty($row_01->ref) || $row_01->ref == '') {
                    $ref = '';
                } else {
                    $ref = site_url() . '/' . $row_01->ref;
                }

                if ($row_01->jml_child == 0) {
                    echo '<li class="treeview">
                        <a href="#">
                            <i class="' . $row_01->icon . '"></i> <span>' . $row_01->label . '</span>
                        </a>
                    </li>
                    ';
                } else {
                    $menu_02 = $this->auth_menus_model->get_parent(10, $row_01->id);
                    echo '<li class="treeview">
                                <a href="#">
                                    <i class="' . $row_01->icon . '"></i> <span>' . $row_01->label . '</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">';
                    foreach ($menu_02 as $row_02) {
                        if (is_null($row_02->ref) || empty($row_02->ref) || $row_02->ref == '') {
                            $ref = '';
                        } else {
                            $ref = site_url() . '/' . $row_02->ref;
                        }
                        echo '<li><a href = "'.$ref.'"><i class = "' . $row_02->icon . '"></i> ' . $row_02->label . '</a></li>';
                    }
                    echo
                    '</ul></li>';
                }
            }
        }
    }
}
echo '</ul>
</nav>

';
?>
