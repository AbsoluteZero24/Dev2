<div class="col-md-12">
    <div class="box-tools pull-right">
        <a href="<?php echo site_url() . "/" . $form . "/modify/"; ?>">
            <button type = "button" class = "btn btn-danger btn-sm">
                <i class="ace-icon fa fa-plus "></i>
                New
            </button>
        </a>
        <a href="<?php echo site_url() . "/" . $form . "/ekspor/"; ?>">
            <button type = "button" class="btn btn-facebook btn-sm" >
                <i class="ace-icon fa fa-book "></i>
                Ekspor
            </button>
        </a>
        <a href="<?php echo site_url() . "/" . $form . "/download/"; ?>">
            <button type = "button" class="btn btn-facebook btn-sm" >
                <i class="ace-icon fa fa-download"></i>
                Download
            </button>
        </a>

    </div>
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="purple">
            <i class="material-icons">assignment</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Jenis Kegiatan</h4>
            <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <div class="material-datatables">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                            <th width="50">No</th>
                            <th>Nama</th>
                            <th class="disabled-sorting text-right"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($data as $p) {
                            ?>

                            <tr class="record" <?php echo 'id="record' . $p->id . '"'; ?>>

                                <td><?php echo $i; ?></td>
                                <td><?php echo $p->nama; ?></td>
                                <td style="text-align: right; ">
                                    <div >
                                        <a class="green" href="<?php echo site_url() . "/" . $form . "/modify/" . $p->id; ?>">
                                            <i class="ace-icon fa fa-pencil bigger-130 text-success"></i>
                                        </a>
                                        <a class="green" href="javascript:;" onclick="return hapus('<?php echo $p->id; ?>');">
                                            <i class="ace-icon fa fa-trash-o bigger-130 text-danger" ></i>
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
        <!-- end content-->
    </div>
    <!--  end card  -->
</div>
<!-- end col-md-12 -->


<script>

//    $(document).ready(function () {
//        $('table tr').click(function () {
//            window.location = $(this).data('href');
//        });
//    });
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

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

        //Like record
        table.on('click', '.like', function () {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>
