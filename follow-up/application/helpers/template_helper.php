<?php

if (!function_exists('element')) {

    function show($view, $data = array(), $template = 'template', $string = FALSE) {
        $ci = &get_instance();

        $data['view'] = $view;
        if ($string)
            return $ci->load->view(THEMES . '/' . $template, $data, TRUE);
        else
            $data = $ci->load->view(THEMES . '/' . $template, $data);
    }

}
/* End of file template_helper.php */
/* Location: ./system/helpers/template_helper.php */