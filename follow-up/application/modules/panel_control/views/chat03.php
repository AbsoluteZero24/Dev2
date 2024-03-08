<div class="col-md-6" style='padding-left:3px'>
    <div class="box box-primary" >
        <div class="box-header with-border">
            <h3 class="box-title">Kirim Pesan</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            Kirim Pesan

            <form action="<?php echo $action_balas_pesan_cs03 ?>" role="form" method="POST">
                <table>
                    <tr>
                        <td width="100"><?php echo $cs03_no_wa ?></td>
                        <td width="300"><?php echo $cs03_respon ?></td>
                        <td width='30'>
                            <span class="input-group-btn">
                                <button class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-log-in"></span></button>
                            </span>
                        </td>
                    </tr>
                </table>
                <br>
            </form>            
        </div>
    </div>		
</div>

<div class="row"></div>

<div class="col-md-6" style='padding-left:3px'>
    <div class="box box-primary" >
        <div class="box-header with-border">
            <h3 class="box-title">Pesan Masuk <small>Pesan Dari Klien</small></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="expand"><i class="fa fa-chevron-up"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i></button>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="table_pesanmasuk_cs03" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
                <thead>
                    <tr>
                        <th width="100">DateTime</th>
                        <th width="100">Pengirim</th>
                        <th >Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($data_pesanmasuk_cs03 as $m) {
                        $backgroundcolor = 'lightgrey';
                        ?>
                        <tr >
                            <td style='padding-top:3px; padding-bottom:3px'><small><?php echo $m['Tanggal']; ?></small></td>
                            <td style='padding-top:3px; padding-bottom:3px'><small><?php echo $m['Pengirim']; ?></small></td>
                            <td style='padding-top:3px; padding-bottom:3px'><?php echo $m['Pesan']; ?></td>
                        </tr>

                        <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-6" style='padding-left:3px'>
    <div class="box box-primary" >
        <div class="box-header with-border">
            <h3 class="box-title">Pesan - Mode Chat</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="table_chat_cs03" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
                <thead>
                    <tr>
                        <th width="75px">DateTime</th>
                        <th >Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($data_chat_cs03 as $p) {
                        if ($p['jenis'] == 'in') {
                            $align = 'right';
                            $backgroundcolor = '#FF0000';
                            $backgroundcolor = 'yellowgreen';
                        } else {
                            $align = 'left';
                            $backgroundcolor = '#00FF00';
                            $backgroundcolor = 'lightgrey';
                        }
                        ?>
                        <tr >
                            <td style='padding:0px;background-color:<?php echo $backgroundcolor ?>'><small><?php echo $p['tanggal']; ?></small></td>
                            <td style='padding:0px;text-align:<?php echo $align ?>;background-color:<?php echo $backgroundcolor ?>'><?php echo $p['pesan']; ?></td>
                        </tr>

                        <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div> 
    </div> 
</div> 
<div class="row"></div>
<div class="col-md-6" style='padding-left:3px'>

    <!-- PRODUCT LIST -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Pesan Keluar <small>Pesan Terkirim ke Petugas</small></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="table_pesankeluar_cs03" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
                <thead>
                    <tr>
                        <th width="100">DateTime</th>
                        <th width="100">Pengirim</th>
                        <th >Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($data_pesankeluar_cs03 as $m) {
                        $backgroundcolor = 'lightgrey';
                        ?>
                        <tr >
                            <td style='padding-top:3px; padding-bottom:3px' ><small><?php echo $m['Tanggal']; ?></small></td>
                            <td style='padding-top:3px; padding-bottom:3px'><small><?php echo $m['Tujuan']; ?></small></td>
                            <td style='padding-top:3px; padding-bottom:3px'><?php echo $m['Pesan']; ?></td>
                        </tr>

                        <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-6" style='padding-left:3px'>
    <!-- PRODUCT LIST -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Outbox <small>Kirim Pesan ke CS</small></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="table_outbox_cs03" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
                <thead>
                    <tr>
                        <th width="150">DateTime</th>
                        <th width="100">Tujuan</th>
                        <th >Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($data_outbox_cs03 as $m) {
                        $backgroundcolor = 'lightgrey';
                        ?>
                        <tr >
                            <td style='padding-top:3px; padding-bottom:3px' ><?php echo $m['tgl_create']; ?></td>
                            <td style='padding-top:3px; padding-bottom:3px'><?php echo $m['NoTelp']; ?></td>
                            <td style='padding-top:3px; padding-bottom:3px'><?php echo $m['Pesan']; ?></td>
                        </tr>

                        <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <!-- /.box-footer -->
    </div>
</div>
<!-- /.box -->
<script>
    $(document).ready(function () {
        $('#table_pesanmasuk_cs03').dataTable();
        $('#table_pesankeluar_cs03').dataTable();
        $('#table_chat_cs03').dataTable();
        $('#table_outbox_cs03').dataTable();
    });

</script>


