<!--<div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Pengajuan Pemeriksaan</h3>
        </div>
     /.box-header 
    <div class="box-body">-->
<form id="formSearch" name="formSearch" action="<?php echo $action_search_port ?>" role="form" method="POST">
    <table>
        <tr>
            <td width="200"><?php echo $port_name ?></td>
            <td width='30'><button style="height:30px" class="btn btn-primary btn_space btn-sm" type="submit"><span style="height:30px" class="glyphicon glyphicon-search"></span> Filter</button></td>
        </tr>
    </table>
</form>
<br>
<!--    </div>
</div>-->
<!--</div>-->
<!--<div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Pengajuan Pemeriksaan</h3>
        </div>
     /.box-header 
    <div class="box-body">-->
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-responsive" id="basic-datatable" style="border-top:1px solid;border-bottom:1px solid">
    <thead>
        <tr>
            <th width="30px">No</th>
            <th width="70">Port</th>
            <th width="110">Country</th>
            <th>Code</th>
            <th style="text-align: right;" width="50px"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($search_list as $p) {
            ?>
            <tr id="record<?php echo $p->vr_submit_no; ?>">
                <td><?php echo $i; ?></td>
                <td><?php echo $p->vr_submit_no; ?></td>
                <td><?php echo format_date($p->vr_submit_date); ?></td>
                <td><?php echo $p->importer_name; ?></td>
                <td>
                    <a href = "<?php echo site_url() . "/ip/view/" . $p->import_license_no; ?>" target="_blank"><?php echo $p->import_license_no; ?></a>
                    <a href = "<?php echo base_url() . "uploads/document/spi/" . $p->import_license_no . '.pdf'; ?>" target="_blank">
                        <i class="ace-icon fa fa-file-pdf-o text-danger"></i>
                    </a>

                </td>

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
<!--    </div>
</div>            -->
