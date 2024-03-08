<form class="form-horizontal" role="form" action="<?php echo $action_modify; ?>" method="post">
    <div class="box box-primary">
        <div class="box-body" >
            <div class="form-group ">
                <div class="col-md-12">
                    <label class="label-control" style="color:black">Mulai</label>
                </div>
                <div class="col-md-2">
                    <?php echo $tgl_mulai ?>
                </div>
                <div class="col-md-2">
                    <?php echo $jam_mulai ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="label-control" style="color:black">Selesai</label>
                </div>
                <div class="col-md-2">
                    <?php echo $tgl_selesai ?>
                </div>
                <div class="col-md-2">
                    <?php echo $jam_selesai ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="label-control" style="color:black">Jenis Kegiatan</label>
                </div>
                <div class="col-md-6">
                    <?php echo $id_jns_kegiatan ?>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label class="label-control" style="color:black">Nama Kegiatan</label>
                <?php echo $nm_kegiatan ?>
            </div>
            <div class="form-group col-md-12">
                <label class="label-control" style="color:black">Tempat</label>
                <?php echo $lokasi ?>
            </div>
            <div class="form-group col-md-12">
                <label class="label-control" style="color:black">Yang Diundang</label>
                <?php echo $undangan ?>
            </div>
            <div class="form-group col-md-12">
                <label class="label-control" style="color:black">PIC <a href="javascript:;" onclick="return pic_add();"><i class="fa fa-plus" style="color:green"></i></a></label>

                <div class="table-responsive">
                    <table class='table' width="100%">
                        <thead class="text-primary">
                            <tr>
                                <th></th>
                                <th width="20"></th>
                            </tr>
                        </thead>

                        <tbody id="tbody">
                            <?php
                            foreach ($row_pic as $key => $pic) {
                                ?>
                                <tr <?php echo 'id=pic' . $key . '' ?>>
                                    <td style="vertical-align: middle"><?php echo $pic['id_pic']; ?></td>
                                    <td style="vertical-align: middle"><?php echo $pic['delete']; ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-green">Save</button>
        <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>
    </div>

</form>




<div class="col-md-6" hidden>
    <div id="sliderRegular" class="slider"></div>
    <div id="sliderDouble" class="slider slider-info"></div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        //demo.initFormExtendedDatetimepickers();
        $('.timepicker').datetimepicker({
            //          format: 'H:mm',    // use this format if you want the 24hours timepicker
            format: 'H:mm', //use this format if you want the 12hours timpiecker with AM/PM toggle
            stepping: '15',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });

        $('.datepicker').datetimepicker({
            format: 'DD-MM-YYYY',
            showTodayButton: true,
            tooltips: {
                today: 'Go to today',
                clear: 'Clear selection',
                close: 'Close the picker',
                selectMonth: 'Select Month',
                prevMonth: 'Previous Month',
                nextMonth: 'Next Month',
                selectYear: 'Select Year',
                prevYear: 'Previous Year',
                nextYear: 'Next Year',
                selectDecade: 'Select Decade',
                prevDecade: 'Previous Decade',
                nextDecade: 'Next Decade',
                prevCentury: 'Previous Century',
                nextCentury: 'Next Century',
                pickHour: 'Pick Hour',
                incrementHour: 'Increment Hour',
                decrementHour: 'Decrement Hour',
                pickMinute: 'Pick Minute',
                incrementMinute: 'Increment Minute',
                decrementMinute: 'Decrement Minute',
                pickSecond: 'Pick Second',
                incrementSecond: 'Increment Second',
                decrementSecond: 'Decrement Second',
                togglePeriod: 'Toggle Period',
                selectTime: 'Select Time'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });

    });
</script>

<script>
    function pic_new_del(id) {
        $("#pic_new" + id).fadeOut('slow').slideUp(300);
        $("#pic_new" + id).remove();
        return false;
    }
</script>

<script>
    function pic_delete(id) {
        $("#pic" + id).fadeOut('slow').slideUp(300);
        $.post('<?php echo site_url() . '/' . $form . '/pic_delete/'; ?>', {id: id}, function () {});
    }
</script>

<script>
    function pic_add() {
        var rownum = $("#tbody > tr").length + 1;
        $.post('<?php echo site_url() . '/' . $form . '/pic_add/'; ?>', {no_urut: rownum},
                function (result) {
                    $('#tbody').append(result);
                });
    }
</script>


<script>
    $(function () {
        //Date range picker
        $("[name='data[tgl_mulai]']").datepicker({autoclose: true, format: 'dd-mm-yyyy'})
        $("[name='data[tgl_selesai]']").datepicker({autoclose: true, format: 'dd-mm-yyyy'})



        //Date range picker with time picker
        //$("[name='data[jam_mulai]']").timepicker({autoclose:true})
        //$("[name='data[jam_selesai]']").timepicker({autoclose:true})

    })
</script>