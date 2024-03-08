<?php $this->load->view('body/dashboard-mini', $data); ?>

<div class="col-lg-12 col-md-12 col-sm-12">
    <form id="formSearch" name="formSearch" action="<?php echo $action_search ?>" role="form" method="POST">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Filter</a></li>
                <li><a href="#tab_2" data-toggle="tab">Search</a></li>
                <li><a href="#tab_3" data-toggle="tab">History</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group input-group-sm">
                                <?php echo $filter ?>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-flat">
                                        <span style="height:30px" class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group input-group-sm">
                                <?php echo $vr_submit_no ?>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-flat">
                                        <span style="height:30px" class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                                <?php echo $vr_submit_no ?>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-flat">
                                        <span style="height:30px" class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                            <div class="input-group input-group-sm">
                                <?php echo $vr_submit_no ?>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-flat">
                                        <span style="height:30px" class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group input-group-sm">
                                <?php echo $year ?>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-flat">
                                        <span style="height:30px" class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
    </form>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 " style="padding-left:5; padding-right:5;">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">List</h3>
            <div class="action-buttons pull-right">
                <a class="green" href="<?php echo site_url() . "/" . $form . "/new_export/"; ?>">
                    <button style="height:30px" class="btn btn-primary btn-sm" >
                        <i class="ace-icon fa fa-plus bigger-130 "></i> New Export
                    </button>
                </a>
                <a class="green" href="<?php echo site_url() . "/" . $form . "/new_export/"; ?>">
                    <button style="height:30px" class="btn btn-primary btn-sm" >
                        <i class="ace-icon fa fa-plus bigger-130 "></i> New Import
                    </button>
                </a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-striped table-hover table-responsive table-bordered" id="basic-datatable" style="border-top:1px solid;border-bottom:1px solid">
                <thead>
                    <tr style="border:1px solid">
                        <th width="30" class="hidden-xs sorting_none">No</th>
                        <th width="70" >VR<br>Submit No.</th>
                        <th width="110" class="hidden-xs">VR<br>Submit Date</th>
                        <th width="70" class="hidden-xs">Reg. No.</th>
                        <th width="100" class="hidden-xs">Reg. Date</th>
                        <th>Importir</th>
                        <th width="110" class="hidden-xs">SPI/E</th>
                        <th width="30">Status</th>
                        <th width="30" style="text-align: right;" > 
                        </th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($data as $p) {
                        ?>
                        <tr class="record" id="record<?php echo $p->vr_submit_no; ?>">
                            <td class="hidden-xs"><?php echo $i; ?></td>
                            <td><?php echo $p->vr_submit_no; ?></td>
                            <td class="hidden-xs"><?php echo format_date($p->vr_submit_date); ?></td>
                            <td><?php echo $p->registration_number; ?></td>
                            <td class="hidden-xs"><?php echo format_date($p->vr_print_date); ?></td>
                            <td><?php echo $p->importer_name; ?></td>
                            <td class="hidden-xs">
                                <a href = "<?php echo site_url() . "/ip/view/" . $p->import_license_no; ?>" target="_blank"><?php echo $p->import_license_no; ?></a>
                                <a href = "<?php echo base_url() . "uploads/document/spi/" . $p->import_license_no . '.pdf'; ?>" target="_blank">
                                    <i class="ace-icon fa fa-file-pdf-o text-danger"></i>
                                </a>

                            </td>
                            <td><?php echo $p->status; ?></td>
                            <td style="text-align: right;">
                                <div class="action-buttons">
                                    <a class="green" href="<?php echo site_url() . "/" . $form . "/view/" . $p->vr_submit_no; ?>">
                                        <button style="height:30px" class="btn btn-primary btn_space btn-sm" >
                                            <i class="ace-icon fa fa-search bigger-130"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>            

    <script>
        function proses_vr(vr_submit_no)
        {
            $.ajax({
                url: "<?php echo site_url() . '/' . $form . '/proses_vr/' ?>",
                type: "POST",
                data: {vr_submit_no: vr_submit_no},
                success: function (data)
                {
                    alert('Success, file created');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });

        }
    </script>

    <script>
        $(function () {
            $('#basic-datatable').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>