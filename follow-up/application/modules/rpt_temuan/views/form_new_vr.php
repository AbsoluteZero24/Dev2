<form class="form-horizontal" role="form" action="<?php echo $action_modify; ?>" method="post">
    <div class="row">
        <div class="container col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Detail</div>
                <div class="panel-body" style="padding:2px;padding-bottom: 0px">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Registration No : </label>
                            <div class="col-sm-9">
                                <?php echo $registration_number ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">VR Submit Date : </label>
                            <div class="col-sm-9">
                                <?php echo $vr_submit_date ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">IO Number : </label>
                            <div class="col-sm-9">
                                <?php echo $io_number ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">VR Web Submit No : </label>
                            <div class="col-sm-9">
                                <?php echo $vr_submit_no ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Importer</div>
                <div class="panel-body" >
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <?php echo $exporter_name ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contact</label>
                        <div class="col-sm-9">
                            <?php echo $exporter_contact ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <?php echo $exporter_addr ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">City</label>
                        <div class="col-sm-9">
                            <?php echo $exporter_city ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Country</label>
                        <div class="col-sm-9">
                            <?php echo $exporter_country_code ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9">
                            <?php echo $exporter_telp ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Fax</label>
                        <div class="col-sm-9">
                            <?php echo $exporter_fax ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <?php echo $exporter_email ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Exporter</div>
                <div class="panel-body" >
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <?php echo $exporter_name ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Contact</label>
                            <div class="col-sm-9">
                                <?php echo $exporter_contact ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <?php echo $exporter_addr ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Telp</label>
                            <div class="col-sm-9">
                                <?php echo $exporter_telp ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Fax</label>
                            <div class="col-sm-9">
                                <?php echo $exporter_fax ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <?php echo $exporter_email ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Supplier</div>
                <div class="panel-body" style="padding:2px;padding-bottom: 0px">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <?php echo $supplier_name ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Contact</label>
                            <div class="col-sm-9">
                                <?php echo $supplier_contact ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <?php echo $supplier_addr ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Telp</label>
                            <div class="col-sm-9">
                                <?php echo $supplier_telp ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mobile Phone</label>
                            <div class="col-sm-9">
                                <?php echo $supplier_cell ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Fax</label>
                            <div class="col-sm-9">
                                <?php echo $supplier_fax ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <?php echo $supplier_email ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Detail</div>
                <div class="panel-body" style="padding:2px;padding-bottom: 0px">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Transport. Method</label>
                            <div class="col-sm-5">
                                <?php echo $transportation_mode ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Loading Port</label>
                            <div class="col-sm-3">
                                <?php echo $port_code_load ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Discharge Port</label>
                            <div class="col-sm-3">
                                <?php echo $port_code_discharge ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Shipment Date</label>
                            <div class="col-sm-3">
                                <?php echo $shipment_date ?>
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
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Total Value</label>
                            <div class="col-sm-3">
                                <?php echo $total_value ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Currency</label>
                            <div class="col-sm-3">
                                <?php echo $curr_code ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Inco Term</label>
                            <div class="col-sm-3">
                                <?php echo $incoterm ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Total Net Weight</label>
                            <div class="col-sm-3">
                                <?php echo $tot_net_weight ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Partial Shipment</label>
                            <div class="col-sm-3">
                                <?php echo $partial ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Detail</div>
                <div class="panel-body" style="padding:2px;padding-bottom: 0px">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Invoice No : </label>
                            <div class="col-sm-9">
                                <?php echo $invoice_no ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">SPI/E : </label>
                            <div class="col-sm-9">
                                <?php echo $import_license_no ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="cancel" class="btn btn-danger">Back</button>
        </div>
    </div>    

</form>

<script>
    $(document).ready(function () {
        $('#basic-datatable').DataTable({
            "paging": false,
            "ordering": false,
            "info": false
        });
    });
</script>