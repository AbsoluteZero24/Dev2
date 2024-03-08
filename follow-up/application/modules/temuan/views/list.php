<style>
    th{
        font-weight: bold;
    }
    td
    {
        padding:1px;
    }
</style>
<div class="box box-body box-danger">
    <!--                <h3 class="box-title">Pengajuan Pemeriksaan</h3>-->
    <div class="box-tools pull-right">
        <a href="<?php echo site_url() . "/" . $form . "/modify/"; ?>">
            <button type = "button" class = "btn btn-danger btn-sm">
                <i class="ace-icon fa fa-plus "></i>
                New
            </button>
        </a>
        <a hidden href="<?php echo site_url() . "/" . $form . "/ekspor/"; ?>">
            <button type = "button" class="btn btn-facebook btn-sm" >
                <i class="ace-icon fa fa-book "></i>
                Ekspor
            </button>
        </a>
        <a hidden href="<?php echo site_url() . "/" . $form . "/download/"; ?>">
            <button type = "button" class="btn btn-facebook btn-sm" >
                <i class="ace-icon fa fa-download"></i>
                Download
            </button>
        </a>
    </div>


    <br><hr>


    <div class="col-md-12">
        <div class="card" style="margin-top:0px">
            <div class="card-content">
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%" border="1">
                        <thead class="thead-light">
                            <tr style="background-color: #a0d0e0">
                                <th style="font-weight: bold" class="hidden-xs">No</th>
                                <th style="font-weight: bold" width="100">Tgl<br>Audit</th>
                                <th style="font-weight: bold" width="100">Unit<br>Kerja</th>
                                <th style="font-weight: bold">Aspek Temuan</th>
                                <th style="font-weight: bold" class="hidden-xs">Status</th>
                                <th style="font-weight: bold" class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data as $r) {
                                ?>
                                <tr style="height:50px; padding:1px" <?php echo "id='record" . $r['id'] . "'" ?>>
                                    <td class="hidden-xs"><?php echo $i ?></td>
                                    <td><?php echo $r['thn_audit'] ?><br></td>
                                    <td><?php echo $r['unit_kerja'] ?><br></td>
                                    <td><?php echo $r['aspek_temuan'] ?><br></td>
                                    <td><?php echo $r['sts_progres'] ?><br></td>
                                    <td style="text-align: right; ">
                                        <a hidden href="<?php echo site_url() . "/" . $form . "/view/" . $r['id']; ?>">
                                            <button class="btn btn-facebook btn-sm" >
                                                <i class="ace-icon fa fa-search bigger-130 "></i>
                                            </button>
                                        </a>
                                        <a href="<?php echo site_url() . "/" . $form . "/modify/" . $r['id']; ?>">
                                            <button class="btn btn-facebook btn-xs" >
                                                <i class="ace-icon fa fa-pencil bigger-130 "></i>
                                            </button>
                                        </a>
                                        <a class="green" href="javascript:;" onclick="return hapus('<?php echo $r['id']; ?>');">
                                            <button class="btn btn-danger btn-xs" >
                                                <i class="ace-icon fa fa-trash-o" ></i>
                                            </button>
                                        </a>
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
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
</div>

<script>
    $(document).ready(function () {
        $('#basic-datatable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });


        $('.card .material-datatables label').addClass('form-group');
    });
</script>

<script>
    function hapus(id) {
        var agree = confirm("Apakah Anda akan menghapus ?");
        if (agree) {
            $("#record" + id).fadeOut('slow').slideUp(300);
            $.post('<?php echo site_url() . '/' . $form . '/delete/'; ?>', {id: id}, function () {
            });
        } else {
            return false;
        }
    }
</script>

