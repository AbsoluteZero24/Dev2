<style>
    /* FROM HTTP://WWW.GETBOOTSTRAP.COM
     * Glyphicons
     *
     * Special styles for displaying the icons and their classes in the docs.
     */

    .bs-glyphicons {
        padding-left: 0;
        padding-bottom: 1px;
        margin-bottom: 20px;
        list-style: none;
        overflow: hidden;
    }

    .bs-glyphicons li {
        float: left;
        width: 25%;
        height: 115px;
        padding: 10px;
        margin: 0 -1px -1px 0;
        font-size: 12px;
        line-height: 1.4;
        text-align: center;
        border: 1px solid #ddd;
    }

    .bs-glyphicons .glyphicon {
        margin-top: 5px;
        margin-bottom: 10px;
        font-size: 24px;
    }

    .bs-glyphicons .glyphicon-class {
        display: block;
        text-align: center;
        word-wrap: break-word; /* Help out IE10+ with class names */
    }

    .bs-glyphicons li:hover {
        background-color: rgba(86, 61, 124, .1);
    }

    @media (min-width: 768px) {
        .bs-glyphicons li {
            width: 12.5%;
        }
    }
</style>

<!-- Main content -->
<div class="row">
    <div class="col-xs-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#dokumen" data-toggle="tab">Dokumen</a></li>
                <li><a href="#client" data-toggle="tab">Client</a></li>
                <li><a href="#pekerjaan" data-toggle="tab">Pekerjaan</a></li>
                <li><a href="#pembayaran" data-toggle="tab">Pembayaran</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="dokumen">
                    <section id="new">
                        <h4 class="page-header">Dokumen</h4>
                        <!-- /.box-header -->
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered" style="margin-bottom: 0px">
                                    <tr>
                                        <td width='20%' style="vertical-align: middle; text-align: right">No. Pengajuan</td>
                                        <td><?php echo $no; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Tgl. Pengajuan</td>
                                        <td><?php echo $tgl; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Kalori</td>
                                        <td><?php echo $jml_kalori; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Quantity</td>
                                        <td><?php echo $jml_kuantitas; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Royalti</td>
                                        <td><?php echo $nil_royalti; ?></td>
                                    </tr>
                                </table>                            
                            </div>
                        </div>
                    </section>
                </div>
                <div role="tabpanel" class="tab-pane" id="client">
                    <section id="medical">
                        <h4 class="page-header">Data Client</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered" style="margin-bottom: 0px">
                                    <tr>
                                        <td width='20%' style="vertical-align: middle; text-align: right">Nama</td>
                                        <td><?php echo $no_pengajuan; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Alamat</td>
                                        <td><?php echo $no_pengajuan; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Kota</td>
                                        <td><?php echo $no_pengajuan; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Propinsi</td>
                                        <td><?php echo $no_pengajuan; ?></td>
                                    </tr>
                                </table>                            
                            </div>
                        </div>
                    </section>
                </div>
                <div role="tabpanel" class="tab-pane" id="pekerjaan">
                    <section id="medical">
                        <h4 class="page-header">Data Pekerjaan</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered" style="margin-bottom: 0px">
                                    <tr>
                                        <td width='20%' style="vertical-align: middle; text-align: right">Komoditi</td>
                                        <td><?php echo $jml_kalori; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">HS</td>
                                        <td><?php echo $jml_kalori; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Deskripsi</td>
                                        <td><?php echo $jml_kalori; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Quantity</td>
                                        <td><?php echo $jml_kalori; ?></td>
                                    </tr>
                                </table>                            
                            </div>
                        </div>
                    </section>
                </div>
                <div role="tabpanel" class="tab-pane" id="pembayaran">
                    <section id="medical">
                        <h4 class="page-header">Data Pembayaran</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered" style="margin-bottom: 0px">
                                    <tr>
                                        <td width='20%' style="vertical-align: middle; text-align: right">Kualitas</td>
                                        <td><?php echo $jml_kalori; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Jumlah</td>
                                        <td><?php echo $jml_kalori; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Royalti</td>
                                        <td><?php echo $jml_kalori; ?></td>
                                    </tr>
                                </table>                            
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SELECT2 EXAMPLE -->
<button type="submit" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-danger" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>


<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'})
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>