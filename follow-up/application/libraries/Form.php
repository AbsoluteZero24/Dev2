<?php

/*
 * Form Library V.2.0 for Codeigniter
 */

/**
 * @author cheyuz
 */
class Form {

    function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->helper(array('form', 'inflector'));
    }

    function create($action = '', $attributes = '', $js = '') {
        $s = '';
        if (isset($attributes['id']) != '')
        /* {
          if($js=='js')
          {
          $s .= '\<script\>
          $valid_'.$attributes['id'].' = jQuery.noConflict();
          $valid_'.$attributes['id'].'().ready(function(){
          $valid_'.$attributes['id'].'("#' . $attributes['id'] . '").validate({
          rules: {
          "data[u][password]": {
          minlength: 5
          },
          confirm_password: {
          minlength: 5,
          equalTo: "#password"
          }
          }
          });
          });
          \<\/script\>';
          }else{
          $s .= '<script>
          $valid_'.$attributes['id'].' = jQuery.noConflict();
          $valid_'.$attributes['id'].'().ready(function(){
          $valid_'.$attributes['id'].'("#' . $attributes['id'] . '").validate({
          rules: {
          password: {
          minlength: 5
          },
          confirm_password: {
          minlength: 5,
          equalTo: "#password"
          }
          }
          });
          });
          </script>';
          }
          } */ { {
                /* $s .= '<script>
                  var $valid_ = jQuery.noConflict();
                  $valid_().ready(function(){
                  $valid_("#' . $attributes['id'] . '").validate();
                  });
                  </script>'; */
            }
        }
        return $s . form_open($action, $attributes);
    }

    function input($name = '', $attributes = '', $div = '') {
        $data = $attributes;
        $data['name'] = $name;
        $value = isset($attributes['value']) ? $attributes['value'] : '';
        $label = isset($attributes['label']) ? $attributes['label'] : humanize($name);

        if ($div == '') {
            return ''
                    . '<div class="input text">'
                    . '<label>' . $label . '</label>'
                    . form_input($data, $value)
                    . '</div>';
        } else {
            return ''
                    . '<label>' . $label . '</label>'
                    . form_input($data, $value);
        }
    }

    function password($name = '', $attributes = '') {
        $data = $attributes;
        $data['name'] = $name;
        $value = isset($attributes['value']) ? $attributes['value'] : '';
        $label = isset($attributes['label']) ? $attributes['label'] : humanize($name);

        return ''
                . '<div class="input text">'
                . '<label>' . $label . '</label>'
                . form_password($data, $value)
                . '</div>';
    }

    function textarea($name = '', $attributes = '') {
        $data = $attributes;
        $data['name'] = $name;
        $value = isset($attributes['value']) ? $attributes['value'] : '';
        $label = isset($attributes['label']) ? $attributes['label'] : humanize($name);

        return ''
                . '<div class="input textarea">'
                . '<label>' . $label . '</label>'
                . form_textarea($data, $value)
                . '</div>';
    }

    function select($name = '', $options = array(), $attributes = '', $div = '') {
        $selected = isset($attributes['value']) ? $attributes['value'] : '';
        $label = isset($attributes['label']) ? $attributes['label'] : humanize($name);
        $default = array(
            'name' => $name,
        );
        if ($div == '') {
            return ''
                    . '<div class="input select">'
                    . form_dropdown($name, $options, $selected, _parse_attributes($attributes))
                    . '</div>';
        } else {
            return ''
                    . form_dropdown($name, $options, $selected, _parse_attributes($attributes));
        }
    }

    function submit($value, $attributes = '') {
        $data = $attributes;
        return ''
                . '<div class = "input submit">'
                . form_submit($value, $value, _parse_attributes($attributes))
                . '</div>';
    }

    function close() {
        return form_close();
    }

    private function _parse_attributes($attr) {
        $s = '';
        foreach ($attr as $key => $val) {
            $s .= ' ' . $key . ' = "s' . $val . '" ';
        }
        return $s;
    }

}

?>
