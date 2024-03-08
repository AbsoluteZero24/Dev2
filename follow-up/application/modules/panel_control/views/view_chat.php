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

<div class='row'></div>
<div class="container col-md-6" style='padding-left:3px'>
<h2 class="page-header">Customer</h2>
    <?php $this->load->view('table_chat_02'); ?>
</div>
<div class="container col-md-6" style='padding-left:3px'>
<h2 class="page-header">Officer</h2>
    <?php $this->load->view('table_chat_petugas_01'); ?>
</div>
<div class='row'></div>
<h2 class="page-header">History</h2>
<div class="container col-md-8" style='padding-left:3px'>
    <?php $this->load->view('mst_kanal_chat'); ?>
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

        <script src="https://meet.jit.si/external_api.js"></script>
        <script>
            var domain = "meet.jit.si";
            var options = {
                roomName: "JitsiMeetAPIExample",
                top:0,
                width: 700,
                height: 640,
                parentNode: undefined,
                configOverwrite: {},
                interfaceConfigOverwrite: {}
            }
            var api = new JitsiMeetExternalAPI(domain, options);
        </script>
    