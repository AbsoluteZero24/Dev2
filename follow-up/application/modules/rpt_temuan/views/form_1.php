<!--    .form-control
    {
        font-size:8px;
        height: 20px;
        padding: 10px;
        margin-bottom: 10px;
    }-->

<!--<style>
    .container {
        padding-top: 10px;
        padding-right: 10px;
        padding-left: 10px;
        margin-right: auto;
        margin-left: auto;
    }
    .panel-body
    {
        padding: 10px;
    }
    .panel {
        margin-bottom: 10px;
    }    
    .form-group {
        margin-right: -5px;
        margin-left: -5px;
        margin-bottom: 5px;
    }    
    .form-horizontal 
    .control-label {
        padding-top: 13px;
        margin-bottom: 0;
        text-align: right;
    }
    hr {
        margin-top: 2px;
        margin-bottom: 2px;
        border: 0;
        border-top: 1px solid #eee;
    }
    .well {
        min-height: 20px;
        padding: 0px;
        margin-bottom: 10px;
        margin-right: 0px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }
    .form-control {
        margin-top: 5px;
        margin-bottom: 5px;
        display: block;
        width: 100%;
        height: 25px;
        font-size: 10px;
        padding: 6px 10px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }

    table td p div
    {
        font-size:10px;
    }
    .field 
    {
        font-size:12px;
    }
    div 
    {
        font-size:10px;
    }
</style>-->

<style>
    .container {
        padding-top: 10px;
        padding-right: 10px;
        padding-left: 10px;
        margin-right: auto;
        margin-left: auto;
    }
    .panel-body
    {
        padding: 10px;
    }
    .panel {
        margin-top: 10px;
        margin-bottom: 10px;
    }    
    .form-group {
        margin-right: -5px;
        margin-left: -5px;
        margin-bottom: 5px;
    }    
    .form-horizontal 
    .control-label {
        padding-top: 3px;
        margin-bottom: 0;
        text-align: right;
    }
    hr {
        margin-top: 2px;
        margin-bottom: 2px;
        border: 0;
        border-top: 1px solid #eee;
    }

    table td p div
    {
        font-size:12px;
    }
    .field 
    {
        font-size:12px;
    }
    div 
    {
        font-size:12px;
    }
</style>

<form class="form-horizontal" role="form" action="<?php echo $action_modify; ?>" method="post">
    <div class="container col-md-12" >
        <div class="row">
            <div class="col-lg-12">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">VR No : </label>
                            <div class="col-sm-2">
                                <?php echo $registration_number ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Registration Date : </label>
                            <div class="col-sm-3">
                                <?php echo $vr_submit_date ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">IO Number : </label>
                            <div class="col-sm-3">
                                <?php echo $io_number ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">VR Web Submit No : </label>
                            <div class="col-sm-3">
                                <?php echo $vr_submit_no ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default well">
                    <div class="panel-body">
                        <b>Importer</b>
                        <hr>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-8">
                                <?php echo $exporter_name ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_contact ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_addr ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_telp ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_fax ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_email ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default well">
                    <div class="panel-body">
                        <b>Impoter</b>
                        <hr>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_name ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_contact ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_addr ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_telp ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_fax ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_email ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default well">
                    <div class="panel-body">
                        <b>Exporter 333</b>
                        <hr>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_name ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_contact ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_addr ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_telp ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_fax ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_email ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">VR No : </label>
                        <div class="col-sm-2">
                            <?php echo $vr_submit_no ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">VR No : </label>
                        <div class="col-sm-2">
                            <?php echo $vr_submit_no ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        .col-lg-6
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">VR No : </label>
                    <div class="col-sm-2">
                        <?php echo $vr_submit_no ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Registration Date : </label>
                    <div class="col-sm-3">
                        <?php echo $vr_submit_date ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">IO Number : </label>
                    <div class="col-sm-3">
                        <?php echo $io_number ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="panel-body">
                    <b>Exportir 1</b>
                    <hr>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">cccccccccccccc</label>
                        <div class="col-sm-3">
                            <?php echo $commodity_code ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="well panel panel-default">
                    <div class="panel-body">
                        <b>Importir 222</b>
                        <hr>
                        <div class="form-group col-md-5">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $importer_id ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="well panel panel-default">
                    <div class="panel-body">
                        <b>Exporter 333</b>
                        <hr>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_name ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_contact ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_addr ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_telp ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_fax ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-3">
                                <?php echo $exporter_email ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="well col-md-6">
                <b>Exportir 1</b>
                <hr>
                <div class="form-group">
                    <label class="col-sm-3 control-label">cccccccccccccc</label>
                    <div class="col-sm-3">
                        <?php echo $commodity_code ?>
                    </div>
                </div>
            </div>
            <div class="well col-lg-6">
                <b>Importir 1</b>
                <hr>
                <div class="form-group col-md-5">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-3">
                        <?php echo $importer_id ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="well col-lg-6">
            <b>E 2</b>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $exporter_name ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $exporter_contact ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $exporter_addr ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $exporter_telp ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $exporter_fax ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $exporter_email ?>
                </div>
            </div>
        </div>
        <div class="well col-md-12">
            <b>Loading/Unloading</b>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $transportation_mode ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $port_code_load ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $port_code_discharge ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $shipment_date ?>
                </div>
            </div>
        </div>
        <div class="well col-md-12">
            <b>Invoice</b>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $invoice_no ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $import_license_no ?>
                </div>
            </div>
        </div>
        <div class="well col-md-12">
            <b></b>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $total_value ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $curr_code ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $incoterm ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $tot_net_weight ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $partial ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $template_file ?>
                </div>
            </div>
        </div>
        <div class="well col-md-12">
            <b>Supplier</b>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $supplier_name ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $supplier_contact ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $supplier_addr ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $supplier_telp ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $supplier_cell ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $supplier_fax ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $supplier_email ?>
                </div>
            </div>
        </div>
        <div class="well col-md-12">
            <b>Loading/Unloading</b>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $io_number ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $registration_number ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $supplier_country ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $tot_net_weight_unit ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $exporter_city ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $exporter_country_code ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $package_type ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $discharge_date ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $remarks ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $revision_nr ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $flag_compare ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $flag_cek_doc ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $status ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $flag_quota ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $status_cancel ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $flag_conformity ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $vr_print_date ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $vr_print_by ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-3">
                    <?php echo $vessel_nm ?>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<div class="container col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Detail</div>
        <div class="panel-body" style="padding:2px;padding-bottom: 0px">
            <table class='table table-bordered' style="padding:0px;">
                <thead>
                    <tr>
                        <th class="col-sm-1" style="width:50px;background-color:#204d74; color: #93CBF9">No.</th>
                        <th class="col-sm-1" style="width:150px;background-color:#204d74; color: #93CBF9">HS.Code</th>
                        <th class="col-sm-1" style="width:200px;background-color:#204d74; color: #93CBF9">Country.Code</th>
                        <th class="col-sm-1" style="width:290px;background-color:#204d74; color: #93CBF9">Quantity</th>
                        <th class="col-sm-1" style="width:150px;background-color:#204d74; color: #93CBF9">Unit</th>
                        <th class="col-sm-1" style="width:150px;background-color:#204d74; color: #93CBF9">Pref</th>
                        <th class="col-sm-1" style="background-color:#204d74; color: #93CBF9">HS.Desc</th>
                        <th class="col-sm-1" style="width:150px;background-color:#204d74; color: #93CBF9">Weight</th>
                        <th class="col-sm-1" style="width:150px;background-color:#204d74; color: #93CBF9">Unit</th>
                        <th style="background-color:#204d74; color: #93CBF9"></th>
                    </tr>
                </thead>
                <tbody id="tb_detail">
                    <?php
                    $i = 1;
                    foreach ($row_detail as $key => $detail) {
                        ?>
                        <tr class="record" id="detail<?php echo $key; ?>">
                            <td width="30"><?php echo $i++; ?></td>
                            <td><?php echo $detail['hs_code']; ?></td>
                            <td><?php echo $detail['country_code']; ?></td>
                            <td><?php echo $detail['quantity']; ?></td>
                            <td><?php echo $detail['unit']; ?></td>
                            <td><?php echo $detail['pref_facility']; ?></td>
                            <td><?php echo $detail['hs_description']; ?></td>
                            <td><?php echo $detail['weight_kgs']; ?></td>
                            <td><?php echo $detail['unit_net']; ?></td>
                            <td><?php echo $detail['delete']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="9"></td>
                        <td><a class="red" href="javascript:;" onclick="return row_add();"><i class="ace-icon fa fa-plus-square bigger-130"></i></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="submit" value='cancel' class="btn btn-warning">Back</button>
        </div>
    </div>    
</div>
</form>