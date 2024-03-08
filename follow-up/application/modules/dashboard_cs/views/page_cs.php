<style>
    table
    {
        font-size:12px;
    }
</style>
<!--<div class="panel panel-primary">-->
<form id="formSearch" name="formSearch" action="<?php echo '$action_search' ?>" role="form" method="POST">
    <table>
        <tr>
            <td width="200"><?php echo '$ip_number' ?></td>
            <td width='30'><button style="height:30px" class="btn btn-primary btn_space btn-sm" type="submit"><span style="height:30px" class="glyphicon glyphicon-search"></span> Filter</button></td>
        </tr>
    </table>
    <br>
</form>
<!--</div>-->
<div class="container col-md-4">

    <div class="panel panel-primary">
        <div class="panel-heading">Kanal</div>
        <div class="panel-body" >
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="data_percakapan" style="border-top:1px solid;border-bottom:1px solid">
                <thead>
                    <tr>
                        <th width="300">Kanal</th>
                        <th width="200">No.HP</th>
                        <th width="150">Pesan</th>
                        <th width="150">Time</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($mst_kanal as $p) {
                        ?>
                        <tr class="record" id="record<?php echo $p->id; ?>">
                            <td><?php echo $p->kanal; ?></td>
                            <td><?php echo $p->no_wa_petugas; ?></td>
							<td><?php echo $p->no_wa_user; ?></td>
							<td><?php echo $p->sts_aktif; ?></td>
                            <td></td>
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

<div class="container col-md-4">

    <div class="panel panel-primary">
        <div class="panel-heading">Percakapan</div>
        <div class="panel-body" >
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="data_percakapan" style="border-top:1px solid;border-bottom:1px solid">
                <thead>
                    <tr>
                        <th width="300">Kanal</th>
                        <th width="200">No.HP</th>
                        <th width="150">Pesan</th>
                        <th width="150">Time</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($percakapan as $p) {
                        ?>
                        <tr class="record" id="record<?php echo $p->id; ?>">
                            <td><?php echo $p->id_kanal; ?></td>
                            <td><?php echo $p->no_telpon; ?></td>
							<td><?php echo $p->posisi; ?></td>
							<td><?php echo $p->pesan; ?></td>
                            <td><?php echo format_date($p->tgl_percakapan); ?></td>
                            <td></td>
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
<div class="container col-md-4">

    <div class="panel panel-primary">
        <div class="panel-heading">PesanMasuk</div>
        <div class="panel-body" >
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="data_pesanmasuk" style="border-top:1px solid;border-bottom:1px solid">
                <thead>
                    <tr>
                        <th width="300">Kanal</th>
                        <th width="200">No.HP</th>
                        <th width="150">Pesan</th>
                        <th width="150">Time</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($pesanmasuk as $p) {
                        ?>
                        <tr class="record" id="record<?php echo $p->id; ?>">
                            <td><?php echo $p->Pengirim; ?></td>
							<td><?php echo $p->Pesan; ?></td>
                            <td><?php echo format_date($p->Tanggal); ?></td>
                            <td></td>
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

<div class="container col-md-12">

    <div class="panel panel-primary">
        <div class="panel-heading">SPI List</div>
        <div class="panel-body" >
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="basic-datatable" style="border-top:1px solid;border-bottom:1px solid">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th width="300">Importir</th>
                        <th width="200">IP Number</th>
                        <th width="150">IP Date</th>
                        <th width="150">IP.Exp</th>
                        <th></th>
                        <th width="120" style="text-align: center; background-color: silver">
                            <a class="green" href="<?php echo $action_add; ?>">
                                <i class="ace-icon fa fa-plus bigger-130 text-primary" ></i>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($percakapan as $p) {
                        ?>
                        <tr class="record" id="record<?php echo $p->ip_number; ?>">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $p->importer_name; ?></td>
                            <td><?php echo $p->ip_number; ?></td>
                            <td><?php echo format_date($p->ip_date); ?></td>
                            <td><?php echo format_date($p->ip_expiry_date); ?></td>
                            <td></td>
                            <td style="text-align: left; background-color: gainsboro">
                                <div class="action-buttons">
                                    <a class="green" href="<?php echo site_url() . "/" . $form . "/modify/" . $p->ip_number; ?>">
                                        <i class="ace-icon fa fa-pencil bigger-130 text-success"></i>
                                    </a>

                                    
                                    <a class="green" href="javascript:;" onclick="return hapus('<?php echo $p->ip_number; ?>');">
                                        <i class="ace-icon fa fa-trash-o bigger-130 text-danger" ></i>
                                    </a>

                                    <a class="green <?php echo $p->hidden_01; ?>" href="<?php echo base_url() . $p->path. $p->file_01; ?>" target="_blank">
                                        <i class="ace-icon fa fa-download bigger-130 text-success"></i>
                                    </a>
                                    
                                    <a class="green <?php echo $p->hidden_02; ?>" href="<?php echo base_url() . $p->path. $p->file_02; ?>" target="_blank">
                                        <i class="ace-icon fa fa-download bigger-130 text-success"></i>
                                    </a>

                                    <a class="green <?php echo $p->hidden_03; ?>" href="<?php echo base_url() . $p->path. $p->file_03; ?>" target="_blank">
                                        <i class="ace-icon fa fa-download bigger-130 text-success"></i>
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
</div> 

<script>
    $(document).ready(function () {
        $('#data_pesanmasuk').dataTable();
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
        function send_to_word() {
            var tgl = document.getElementById("tgl_pengajuan").value;
            $.post('<?php echo site_url() . '/ob_pengajuan/send_to_word/'; ?>', {tgl: tgl}, function () {
            });
        }
    </script>

    <script>
        function saveas()
        {

        }
    </script>

    <script>
        $(".my_select_boxxx").chosen({
            search_contains: true
        });
    </script>