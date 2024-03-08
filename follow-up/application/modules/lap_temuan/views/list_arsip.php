
<div class="box box-info hidden">
    <div>

        <br>
        <form id="formSearch" name="formSearch" action="<?php echo $action_search ?>" role="form" method="POST">
            <table>
                <tr>
                    <td width="200"><?php echo '' ?></td>
                    <td width='30'><button style="height:30px" class="btn btn-primary btn_space btn-sm" type="submit"><span style="height:30px" class="glyphicon glyphicon-search"></span></button></td>
                </tr>
            </table>
            <br>
        </form>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="box-header">
            <!--                <h3 class="box-title">Pengajuan Pemeriksaan</h3>-->
            <div>
                <div class="box-tools pull-right">
                    <a href="<?php echo site_url() . "/" . $form . "/modify/"; ?>">
                        <button type = "button" class = "btn btn-danger">
                            <i class="ace-icon fa fa-plus "></i>
                            New
                        </button>
                    </a>
                    <a href="<?php echo site_url() . "/" . $form . "/ekspor/"; ?>">
                        <button type = "button" class="btn btn-facebook" >
                            <i class="ace-icon fa fa-book "></i>
                            Ekspor
                        </button>
                    </a>
                    <a href="<?php echo site_url() . "/" . $form . "/download/"; ?>">
                        <button type = "button" class="btn btn-facebook" >
                            <i class="ace-icon fa fa-download"></i>
                            Download
                        </button>
                    </a>

                </div>
            </div>
        </div>
        <div class="box box-danger">

            <br>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped table-responsive">
                    <thead>
                        <tr>
                            <th width="10px">No.</th>
                            <th>No.Pengajuan</th>
                            <th>Tgl.Pengajuan</th>
                            <th>Client</th>
                            <th>Jml.Kalori</th>
                            <th>Kuantitas</th>
                            <th>Royalti</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($data as $p) {
                            ?>
                            <tr>
                                <td data-label='No.Urut : ' ><?php echo $i; ?></td>
                                <td data-label='No.Pengajuan : ' scope class><?php echo $p->no; ?></td>
                                <td class="hidden-xs hidden-md"><?php echo format_date($p->tgl); ?></td>
                                <td data-label='Client : ' scope class><?php echo $p->nm_client; ?></td>
                                <td data-label='Kalori : ' scope class><?php echo $p->jml_kalori; ?></td>
                                <td data-label='Kuantitas : ' scope class><?php echo $p->jml_kuantitas; ?></td>
                                <td data-label='Royalti : ' scope class><?php echo $p->nil_royalti; ?></td>
                                <td data-label='Status : ' scope class><?php echo $p->nm_proses; ?></td>
                                <td style="text-align: right; ">
                                    <a hidden href="<?php echo site_url() . "/" . $form . "/view/" . $p->id; ?>">
                                        <button class="btn btn-facebook btn-sm" >
                                            <i class="ace-icon fa fa-search bigger-130 "></i>
                                        </button>
                                    </a>
                                    <a href="<?php echo site_url() . "/" . $form . "/modify/" . $p->id; ?>">
                                        <button class="btn btn-facebook btn-sm" >
                                            <i class="ace-icon fa fa-pencil bigger-130 "></i>
                                        </button>
                                    </a>
                                    <a href="<?php echo site_url() . "/" . $form . "/modify/" . $p->id; ?>">
                                        <button class="btn btn-danger btn-sm" >
                                            <i class="ace-icon fa fa-trash-o bigger-130 "></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++;
                        } ?>

                    </tbody>

                    <tfoot>
                    </tfoot>
                </table>
            </div>
            <!--/.box-body -->
        </div>
        <!--/.box -->
    </div>
    <!--/.col -->
</div>


<script>
    $(function () {
        $('#example1').DataTable();
        $('#example12').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
