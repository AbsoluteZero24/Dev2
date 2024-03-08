<style>
    table
    {
        font-size:12px;
    }
</style>
<div class="container col-md-6" style='padding-left:3px'>

    <h2 class="page-header">
        <button class="btn btn-primary btn-flat" onclick="return refresh_respon();">Refresh Input
            <span class="glyphicon glyphicon-log-in"></span>
        </button>
        <!--        <a class="green" href="javascript:;" onclick="return view_quota();"  id='a-check'></a>-->
        <button class="btn btn-primary btn-flat" onclick="return refresh_reply();">Refreh Output
            <span class="glyphicon glyphicon-log-in"></span>
        </button>
        <!--        <a class="green" href="javascript:;" onclick="return view_quota();"  id='a-check'></a>-->

    </h2>
</div>

<div class="row"></div>
<div class="container col-md-6" style='padding-left:3px'>
    <?php $this->load->view('master_kanal'); ?>
</div>
<div class="container col-md-6" style='padding-left:3px'>
    <?php $this->load->view('performa_cs'); ?>
</div>

<div class="container col-md-4" style='padding-left:3px'>
    <?php //$this->load->view('posisi_cs'); ?>
</div>
<div class="row"></div>
<h2 class="page-header">Interface Klien</h2>
<div class="col-md-4" style='padding-left:3px'>
    <div class="box box-primary" >
        <div class="box-header with-border">
            <h3 class="box-title">Kirim Pesan</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            Kirim Pesan

            <form action="<?php echo $action_send_message ?>" role="form" method="POST">
                <table>
                    <tr>
                        <td width="200"><?php echo $no_wa ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="200"><?php echo $kirim_pesan ?></td>
                        <td width='30'>
                            <span class="input-group-btn">
                                <button class="btn btn-primary btn-flat" onclick="return view_list();"><span class="glyphicon glyphicon-log-in"></span></button>
                                <a class="green" href="javascript:;" onclick="return view_quota();"  id='a-check'></a>
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
<div class="container col-md-6" style='padding-left:3px'>
    <?php $this->load->view('pesan_masuk'); ?>
</div>

<div class="container col-md-6" style='padding-left:3px'>
    <?php $this->load->view('outbox_klien'); ?>
</div>
<div class="container col-md-6" style='padding-left:3px'>
    <?php $this->load->view('pesan_keluar'); ?>
</div>
<div class="row"></div>

<h2 class="page-header">Pencatatan Chat</h2>
<div class="container col-md-4" style='padding-left:3px'>
    <?php $this->load->view('mst_kanal_respon'); ?>
</div>
<div class="container col-md-8" style='padding-left:3px'>
    <?php $this->load->view('mst_kanal_chat'); ?>
</div>

<h2 class="page-header">Interface CS</h2>
<div class="row">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Line 1</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Line 2</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Line 3</a></li>
                <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Line 4</a></li>
                <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">Line 5</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="box-body" style='background-color: papayawhip'>
                        <?php $this->load->view('chat01'); ?>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="box-body" style='background-color: papayawhip'>
                        <?php $this->load->view('chat02'); ?>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <div class="box-body" style='background-color: papayawhip'>
                        <?php $this->load->view('chat03'); ?>
                    </div>
                </div>
                <div class="tab-pane" id="tab_4">
                    <div class="box-body" style='background-color: papayawhip'>
                        <?php $this->load->view('chat04'); ?>
                    </div>
                </div>
                <div class="tab-pane" id="tab_5">
                    <div class="box-body" style='background-color: papayawhip'>
                        <?php $this->load->view('chat05'); ?>
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#data_pesanmasuk').dataTable();
    });

</script>
<script>
    $(document).ready(function () {
        $('#pesanmasuk').dataTable();
    });

</script>



<script>
    function hapus(id) {
        var agree = confirm("Apakah Anda akan menghapus ?");
        if (agree) {
            $("#record" + id).fadeOut('slow').slideUp(300);
            $.post('<?php echo site_url() . '/pengobatan/delete/'; ?>', {id: id}, function () {
            });
        } else {
            return false;
        }
    }
</script>

<script>
    function refresh_respon() {
        $.post('<?php echo site_url() . '/auto_kanal_utama'; ?>', {}, function () {});

    }
</script>
<script>
    function refresh_reply() {
        $.post('<?php echo site_url() . '/auto_kanal_server_03'; ?>', {}, function () {
        });
    }
</script>

