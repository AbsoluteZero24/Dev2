<?php

function reformat_main_row_array($table, $header = '', $required_list = []) {
    // bisa dilakukan tanpa $field, yaitu dengan langsung mengubah isi $header
    $fields = $table->get_fields_name();

    foreach ($fields as $key) {
        if (!isset($data[$key])) {
            $required = '';
            if (array_keys($required_list,$key)) {
                $required = "required";
            }
            $atribut = 'style="width:100%" class="form-control" autocomplete="off"';
            //$atribut = '';
            if (strpos($key, 'tmp', 0) !== false) {
                $atribut = '';
            }
            if (strpos($key, 'qty', 0) !== false) {
                $atribut = 'style="width:100px"';
            }
            if (strpos($key, 'lat', 0) !== false) {
                $atribut = 'style="width:100px"';
            }
            if (strpos($key, 'long', 0) !== false) {
                $atribut = 'style="width:100px"';
            }
            if (strpos($key, 'no', 0) !== false) {
                $atribut = 'style="width:150px" class="form-control"';
            }
            if (strpos($key, 'jam', 0) !== false) {
                $atribut = 'style="width:150px" placeholder="hh:mm" class="form-control timepicker" autocomplete="off"';
            }
            if (strpos($key, 'nm', 0) !== false) {
                $atribut = 'style="width:100%" class="form-control" autocomplete="off"';
            }
            if (strpos($key, 'nama', 0) !== false) {
                $atribut = 'style="width:100%" class="form-control" autocomplete="off"';
            }
            if (strpos($key, 'nm_', 0) !== false) {
                $atribut = 'style="width:100%" class="form-control" autocomplete="off"';
            }
            if (strpos($key, 'tgl', 0) !== false || strpos($key, 'date', 0) !== false) {
                $atribut = 'style="width:150px" placeholder="dd-mm-yyyy" class="form-control datepicker" autocomplete="off"';
            }
            if (strpos($key, 'jml', 0) !== false || strpos($key, 'jumlah', 0) !== false || strpos($key, 'qty', 0) !== false) {
                $atribut = 'style="width:100px" class="form-control"';
            }
            if (strpos($key, 'deskripsi', 0) !== false || strpos($key, 'ket_', 0) !== false || strpos($key, 'keterangan', 0) !== false) {
                $atribut = 'style="width:400px"';
            }
            $atribut = $atribut . ' ' . $required;

            if (isset($header) && !empty($header)) {
                if (empty($header[$key]) || is_null($header[$key])) {
                    $data[$key] = form_input('data[' . $key . ']', '', $atribut);
                } else {
                    if (substr($key, 0, 3) == "id_" || $key == 'id') {
                        $data[$key] = $header[$key];
                    } else {
                        if (strpos($key, 'tgl', 0) !== false || strpos($key, 'date') !== false) {
                            $data[$key] = form_input('data[' . $key . ']', date('d-m-Y', strtotime($header[$key])), $atribut);
                        } else {
                            $data[$key] = form_input('data[' . $key . ']', $header[$key], $atribut);
                        }
                    }
                }
            } else {
                if (substr($key, 0, 3) == "id_" || $key == 'id') {
                    $data[$key] = '';
                } else {
                    if ($header[$key] = '') {
                        if (strpos($key, 'tgl', 0) !== false || strpos($key, '_date') !== false) {
                            $data[$key] = form_input('data[' . $key . ']', date('d-m-Y', strtotime($header[$key])), $atribut);
                        } else {
                            $data[$key] = form_input('data[' . $key . ']', $header[$key], $atribut);
                        }
                    } else {
                        $data[$key] = form_input('data[' . $key . ']', '', $atribut);
                    }
                }
            }
        }
    }
    return($data);
}

function print_value(&$item1, $key, $source) {
    $item1 = "name='data[" . $key . "]' value='" . $item1 . "' type='text'" . '<br>';
    echo $item1;
}

function prepare_detail_field(&$item1, $key, $prefix) {
    if ($key == 'id_propinsi') {
        return;
    }
    if ($key == 'id_surveyor') {
        return;
    }
    if ($key == 'id') {
        return;
    }
    if ($key == 'id_cuaca') {
        return;
    }
    if ($key == 'no_order') {
        return;
    }

//            jika ada kata jam tambahkan placeholder="hh:mm"
//            jika ada kata tgl tambahkan placeholder="dd-mm-yy"
    if (strpos($key, 'tgl', 0) !== false) {
        $tgl = date('d-m-Y', strtotime($item1));
        $item1 = "name='" . $prefix[0] . "[" . $prefix[1] . "][" . $key . "]' value='" . $tgl . "' placeholder='dd-mm-yyyy' type='text'";
        return;
    }
    if (strpos($key, 'jam', 0) !== false) {
        $item1 = "name=" . $prefix[0] . "[" . $prefix[1] . "][" . $key . "]' value='" . $item1 . "' placeholder='hh:mm' type='text'";
        return;
    }
    $item1 = "name='" . $prefix[0] . "[" . $prefix[1] . "][" . $key . "]' value='" . $item1 . "' type='text'";
}

function reformat_main_row_object($table, $header = '', $is_save = 0, $is_mobile = false) {

    foreach ($table->field_data() as $field) {
        $key = $field->name;
        $flags = ''; //$field->null;
        if (!isset($data[$key])) {
            $prop = array();
            $required = '';
            $prop['name'] = 'data[' . $key . ']';
            $prop['class'] = 'form-control';
            if ($flags == 'NO') {
                $required = 'required';
            }

            //$atribut = '';
            if (strpos($key, 'tmp', 0) !== false) {
                $prop['style'] = '';
            }
            if (strpos($key, 'qty', 0) !== false) {
                $prop['type'] = 'tel';
                $prop['class'] = 'form-control mask';
                $prop['style'] = 'width:120px"; autocomplete="off"';
                $prop['data-inputmask'] = "'alias' : 'decimal', 'rightAlignNumerics' : true";
            }
            if (strpos($key, 'lat', 0) !== false) {
                $prop['type'] = 'tel';
                $prop['class'] = 'form-control mask';
                $prop['style'] = 'width:120px"; autocomplete="off"';
                $prop['data-inputmask'] = "'alias' : 'decimal', 'rightAlignNumerics' : true";
            }
            if (strpos($key, 'long', 0) !== false) {
                $prop['type'] = 'tel';
                $prop['class'] = 'form-control mask';
                $prop['style'] = 'width:120px"; autocomplete="off"';
                $prop['data-inputmask'] = "'alias' : 'decimal', 'rightAlignNumerics' : true";
            }
            if (strpos($key, 'jml', 0) !== false || strpos($key, 'jumlah', 0) !== false) {
                $prop['class'] = 'form-control mask';
                $prop['style'] = 'width:120px"; autocomplete="off"';
                $prop['data-inputmask'] = "'alias' : 'decimal', 'rightAlignNumerics' : true";
            }
            if (strpos($key, 'no', 0) !== false) {
                //$style = 'style="width:150px"';

                $prop['class'] = 'form-control';
            }
            if (strpos($key, 'jam', 0) !== false) {
                $prop['type'] = 'tel';
                $prop['class'] = 'form-control mask';
                $prop['data-inputmask'] = "'alias' : 'hh:mm' ";
                $prop['style'] = 'width:100px"; placeholder="hh:mm"; autocomplete="off"';
            }
            if (strpos($key, 'nm', 0) !== false) {
                $prop['style'] = 'width:400px"; autocomplete="off"';
                $prop['class'] = 'form-control';
            }
            if (strpos($key, 'tgl', 0) !== false) {
                $prop['type'] = 'tel';
                $prop['class'] = 'form-control mask';
                $prop['style'] = 'width:95px"; autocomplete="off"';
                $prop['data-inputmask'] = "'alias' : 'dd-mm-yyyy' ";
            }
            if (strpos($key, 'deskripsi', 0) !== false || strpos($key, 'ket_', 0) !== false || strpos($key, 'keterangan', 0) !== false) {
                $prop['style'] = 'width:400px"; autocomplete="off"';
                $prop['class'] = 'form-control';
            }

            if (isset($header) && !empty($header)) {
                if (!empty($header->$key) && !is_null($header->$key)) {
                    if (strpos($key, 'tgl', 0) !== false) {
                        $prop['value'] = date('d-m-Y', strtotime($header->$key));
                    } else {
                        $prop['value'] = $header->$key;
                    }
                }
            }

            if (substr($key, 0, 3) == "id_" || $key == 'id') {
                $data[$key] = '';
                if (isset($header) && !empty($header)) {
                    if (!empty($header->$key) && !is_null($header->$key)) {
                        $data[$key] = $header->$key;
                    }
                }
            } else {
                $prop['class'] .= 'form-control';
                $data[$key] = form_input($prop, '', $required);
            }
        }
    }
    return($data);
}

function preparing_ref_field($table, $header = '') {
    $fields = $table->get_fields_name();

    foreach ($fields as $key) {
        if (!isset($data[$key])) {
            $atribut = 'style="width:300px" readonly';
            if (strpos($key, 'tmp', 0) !== false) {
                $atribut = 'autocomplete="off"';
            }
            if (strpos($key, 'qty', 0) !== false) {
                $atribut = 'style="width:100px" autocomplete="off"';
            }
            if (strpos($key, 'lat', 0) !== false) {
                $atribut = 'style="width:100px"';
            }
            if (strpos($key, 'long', 0) !== false) {
                $atribut = 'style="width:100px"';
            }
            if (strpos($key, 'no', 0) !== false) {
                $atribut = 'style="width:150px"';
            }
            if (strpos($key, 'jam', 0) !== false) {
                $atribut = 'style="width:50px"';
            }
            if (strpos($key, 'nm', 0) !== false) {
                $atribut = 'style="width:400px"';
            }
            if (strpos($key, 'tgl', 0) !== false) {
                $atribut = 'style="width:150px" placeholder="dd-mm-yyyy" form-control );';
            }
            if (strpos($key, 'jml', 0) !== false || strpos($key, 'jumlah', 0) !== false) {
                $atribut = 'style="width:100px"';
            }
            if (strpos($key, 'deskripsi', 0) !== false || strpos($key, 'ket_', 0) !== false || strpos($key, 'keterangan', 0) !== false) {
                $atribut = 'style="width:400px" autocomplete="off"';
            }
            if (empty($header->$key) || is_null($header->$key)) {
                if (strpos($key, 'tgl', 0) !== false) {
                    $data[$key] = form_input('data[' . $key . ']', '', $atribut);
                } else {
                    $data[$key] = form_input('data[' . $key . ']', '', $atribut);
                }
            } else {
                if (strpos($key, 'tgl', 0) !== false) {
                    $data[$key] = form_input('', date('d-m-Y', strtotime($header->$key)), $atribut);
                } else {
                    $data[$key] = form_input('', $header->$key, $atribut);
                }
            }
        }
    }
    return($data);
}

function fill_field($table, $header = '') {
    $fields = $table->get_fields_name();
    $data = array();

    foreach ($fields as $key) {
        if (!isset($data[$key])) {
            if (empty($header->$key) || is_null($header->$key)) {
                $data[$key] = NULL; //sementara saja, aslinya kosongkan saja
            } else {
                if (strpos($key, 'tgl', 0) !== false) {
                    $data[$key] = date('d-m-Y', strtotime($header->$key));
                } else {
                    $data[$key] = $header->$key;
                }
            }
        }
    }
    return($data);
}

function fill_field_from_array($table, $header = '') {
    $fields = $table->get_fields_name();

    $data = array();
    foreach ($fields as $key) {
        if (!isset($header[$key])) {
            $data[$key] = null;
        } else {
            if (strpos($key, 'tgl', 0) !== false) {
                $data[$key] = date('d-m-Y', strtotime($header[$key]));
            } else {
                $data[$key] = $header[$key];
            }
        }
    }
    return($data);
}

function verify_main_input_array($post) {
    foreach ($post as $key => $value) {
        // auto 
        if (strpos($key, 'tgl', 0) !== false || strpos($key, 'date', 0) !== false) {
            if (!empty($value) && $value != '00-00-0000' && $value != '') {
                $post[$key] = date('Y-m-d', strtotime($value)); //mm-dd-yyyy
            } else {
                $post[$key] = NULL;
            }
        }
        // custom
        // custom
        if ($value == '') {
            if ($key == 'invoice_value') {
                $post[$key] = 0;
            }
            if ($key == 'gross_weight') {
                $post[$key] = 0;
            }
            if ($key == 'net_weight') {
                $post[$key] = 0;
            }
            if ($key == 'fob_per_invoice') {
                $post[$key] = 0;
            }
            if ($key == 'freight_per_invoice') {
                $post[$key] = 0;
            }
            if ($key == 'insurance_per_invoice') {
                $post[$key] = 0;
            }
            if ($key == 'cif_per_invoice') {
                $post[$key] = 0;
            }
        }
    }

    return($post);
}

function format_date($tanggal = '', $format = 'd-m-Y') {
    if ($tanggal == '' || $tanggal == '0000-00-00' || is_null($tanggal)) {
        return '';
    } else {
        return(date($format, strtotime($tanggal)));
    }
}

function verify_submain_input_array($post, $primary_key, $secondary_key, $primary_id, $secondary_id = -1) {

    if (count($post) > 0) {
        foreach ($post as $key => $row) {
            foreach ($row as $field => $value) {
                if ($field == $secondary_key && empty($value)) {
                    unset($post[$key]);
                }
                if (strpos($field, 'tgl', 0) !== false) {
                    $tgl = NULL;
                    if ($value != '00-00-0000' && !is_null($value) && $value != '1970-01-01') {
                        $tgl = date('Y-m-d', strtotime($value));
                    } else {
                        $tgl = NULL;
                    }
                    $post[$key][$field] = $tgl;
                }
//                if (isset($post['dok_kontrak'])) {
//                    $post['dok_kontrak'] = 1;
//                } else {
//                    $post['dok_kontrak'] = 0;
//                }
            }
            $post[$key][$primary_key] = $primary_id;
            if ($secondary_id == 0) {
                $post[$key]['id'] = 0;
            } else {
                $post[$key]['id'] = $key;
            }
        }
    }
    return $post;
}
