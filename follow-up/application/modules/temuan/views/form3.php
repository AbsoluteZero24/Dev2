<!-- Main content -->
<section class="content">
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
                    <!-- Font Awesome Icons -->
                    <div class="tab-pane active" id="dokumen">
                        <section id="medical">
                            <h4 class="page-header">Dokumen</h4>

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
                                            <td style="vertical-align: middle; text-align: right">Quantity</td>
                                            <td><?php echo $jml_kuantitas; ?></td>
                                        </tr>
                                    </table>                            
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane" id="client">
                        <section >
                            <h4 class="page-header">Client</h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped table-bordered" style="margin-bottom: 0px">
                                        <tr>
                                            <td width='20%' style="vertical-align: middle; text-align: right">Nama</td>
                                            <td><?php echo $no; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle; text-align: right">Alamat</td>
                                            <td><?php echo $tgl; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle; text-align: right">Kota</td>
                                            <td><?php echo $jml_kalori; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle; text-align: right">Propinsi</td>
                                            <td><?php echo $jml_kuantitas; ?></td>
                                        </tr>
                                    </table>                            
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane" id="pekerjaan">
                        <section>
                            <h4 class="page-header">Medical Icons2</h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped table-bordered" style="margin-bottom: 0px">
                                        <tr>
                                            <td width='20%' style="vertical-align: middle; text-align: right">Komoditi</td>
                                            <td><?php echo $teks; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle; text-align: right">HS</td>
                                            <td><?php echo $teks; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle; text-align: right">Deskripsi</td>
                                            <td><?php echo $teks; ?></td>
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
                    <div class="tab-pane" id="pembayaran">
                        <section id="medical">
                            <h4 class="page-header">Medical Icons2</h4>

                            <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered" style="margin-bottom: 0px">
                                    <tr>
                                        <td width='20%' style="vertical-align: middle; text-align: right">Kualitas</td>
                                        <td><?php echo $number; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Jumlah</td>
                                        <td><?php echo $number; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: right">Royalti</td>
                                        <td><?php echo $number; ?></td>
                                    </tr>
                                </table>                            
                            </div>
                            </div>
                        </section>
                    </div>


                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
<button type="submit" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-danger" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>
</section>
<!-- /.content -->
