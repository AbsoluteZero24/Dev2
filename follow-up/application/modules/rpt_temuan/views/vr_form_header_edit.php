<div class="col-lg-12 col-md-12 col-sm-12 " style="padding-left:5; padding-right:5;">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">List</h3>
        </div>
        <div class="box-body">

            <form class="form-horizontal" role="form" action="<?php echo $action_modify_vr; ?>" method="post">
                <div class="box box-primary">
                    <!--    <div class="box-header with-border">
                            <h3 class="box-title">Pengajuan Pemeriksaan</h3>
                        </div>-->
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" >
                                        <tr>
                                            <td colspan="2" style="background-color: #8d82b5; color: white; font-weight: bold; border-radius: 5px; border-style: none">VR</td>
                                        </tr>
                                        <tr>
                                            <td>VR No</td>
                                            <td><?php echo $vr_submit_no; ?></td>
                                        </tr>
                                        <tr>
                                            <td>DI Number</td>
                                            <td><?php echo $di_number; ?></td>
                                        </tr>
                                        <tr>
                                            <td>VR Submit Date</td>
                                            <td><?php echo $vr_submit_date; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Transporter Name</td>
                                            <td><?php echo $transporter_name; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Commodity Code</td>
                                            <td><?php echo $commodity_code; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Importer ID</td>
                                            <td><?php echo $importer_id; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Exporter Name</td>
                                            <td><?php echo $exporter_name; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Exporter Contact</td>
                                            <td><?php echo $exporter_contact; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Exporter Telp</td>
                                            <td><?php echo $exporter_telp; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Exporter fax</td>
                                            <td><?php echo $exporter_fax; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Exporter email</td>
                                            <td><?php echo $exporter_email; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Transportation Mode</td>
                                            <td><?php echo $transportation_mode; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Port Loading Code</td>
                                            <td><?php echo $port_code_load; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Port Loading Discharge</td>
                                            <td><?php echo $port_code_discharge; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shipment Date</td>
                                            <td><?php echo $shipment_date; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Invoice No</td>
                                            <td><?php echo $invoice_no; ?></td>
                                        </tr>
                                        <tr>
                                            <td>SPI/E</td>
                                            <td><?php echo $import_license_no; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Value</td>
                                            <td><?php echo $total_value; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Curr</td>
                                            <td><?php echo $curr_code; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Incoterm</td>
                                            <td><?php echo $incoterm; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tot Net Weight</td>
                                            <td><?php echo $tot_net_weight; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Partial</td>
                                            <td><?php echo $partial; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="background-color: #8d82b5; color: white; font-weight: bold; border-radius: 5px; border-style: none">Supplier</td>
                                        </tr>
                                        <tr>
                                            <td>Supplier</td>
                                            <td><?php echo $supplier_name; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Supplier Contact</td>
                                            <td><?php echo $supplier_contact; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Supplier Address</td>
                                            <td><?php echo $supplier_addr; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Supplier Telp</td>
                                            <td><?php echo $supplier_telp; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Supplier Telp</td>
                                            <td><?php echo $supplier_telp; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Supplier HP</td>
                                            <td><?php echo $supplier_cell; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Supplier Fax</td>
                                            <td><?php echo $supplier_fax; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Supplier Email</td>
                                            <td><?php echo $supplier_email; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Supplier Country</td>
                                            <td><?php echo $supplier_country; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="background-color: #8d82b5; color: white; font-weight: bold; border-radius: 5px; border-style: none">Object</td>
                                        </tr>
                                        <tr>
                                            <td>Exporter Country Code</td>
                                            <td><?php echo $exporter_country_code; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Package Type</td>
                                            <td><?php echo $package_type; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Net Weight Unit</td>
                                            <td><?php echo $tot_net_weight_unit; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Exporter City</td>
                                            <td><?php echo $exporter_city; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Remarks</td>
                                            <td><?php echo $remarks; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Revisi</td>
                                            <td><?php echo $revision_nr; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Flag Compare</td>
                                            <td><?php echo $flag_compare; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Flag Cek Doc</td>
                                            <td><?php echo $flag_cek_doc; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><?php echo $status; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Cancel</td>
                                            <td><?php echo $status_cancel; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Path</td>
                                            <td><?php echo $path; ?></td>
                                        </tr>
                                        <tr>
                                            <td>File 01</td>
                                            <td><?php echo $file_01; ?></td>
                                        </tr>
                                        <tr>
                                            <td>File 02</td>
                                            <td><?php echo $file_02; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align: center">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>

                                            </td>
                                        </tr>
                                    </table>
<div class="col-lg-12 col-md-12 col-sm-12 " style="padding-left:5; padding-right:5;">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Detail</h3>
        </div>
        <div class="box-body">
        <table class="table table-striped table-hover table-responsive table-condensed table-bordered" style="border-top:1px solid;border-bottom:1px solid; border-color: black">
            <thead>
                <tr>
                    <th rowspan="2" width="30">No</th>
                    <th rowspan="2" width="70">HS Code</th>
                    <th rowspan="2" >HS Description</th>
                    <th rowspan="2" width="100">Quantity</th>
                    <th rowspan="2" width="50">Unit</th>
                    <th rowspan="2" width="50">Weight<br>KGS</th>
                    <th rowspan="2" width="50">Unit Net</th>
                    <th colspan="6" width="50" style="background-color: #84AFC9; color: white;text-align: center; ">SPI/E Balance</th>
                    <th colspan="2" width="50" style="background-color: #84AFC9; color: white;text-align: center; ">Kemendag</th>
                    <th rowspan="2" width="50" style="text-align: right; ">
                        <div class="action-buttons">
                            <a class="green" href="<?php echo site_url() . "/" . $form . "/modify_detail/" . $p->vr_submit_no . '/'; ?>">
                                <button style="height:30px" class="btn btn-green btn_space btn-sm" >
                                    <i class="ace-icon fa fa-plus bigger-130 "></i>
                                </button>
                            </a>
                        </div>

                    </th>
                </tr>
                <tr>
                    <th width="50" style="background-color: #84AFC9; color: white;text-align: right; ">Quota</th>
                    <th width="50" style="background-color: #84AFC9; color: white">Unit</th>
                    <th width="50" style="background-color: #84AFC9; color: white;text-align: right;">VR</th>
                    <th width="50" style="background-color: #84AFC9; color: white;text-align: right;">LS</th>
                    <th width="50" align="right" style="background-color: #84AFC9; color: white;text-align: right;">Quota VR</th>
                    <th width="50" style="background-color: #84AFC9; color: white;text-align: right;">Quota LS</th>
                    <th width="50" style="background-color: #84AFC9; color: white">Vol</th>
                    <th width="50" style="background-color: #84AFC9; color: white;text-align: right; ">Unit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($detail as $d) {
                    ?>
                    <tr class="record" id="record<?php echo $d->vr_submit_detail_id; ?>">
                        <td><?php echo $i; ?></td>
                        <td data-label="HS Code"><?php echo $d->hs_code; ?><p style='color:red'><?php echo $d->ip_found ?></p></td>
                        <td data-label="Description"><?php echo $d->hs_description; ?></td>
                        <td data-label="Quantity"><?php echo number_format($d->quantity, 0); ?></td>
                        <td data-label="Unit" ><?php echo $d->unit; ?></td>
                        <td data-label="Weight" ><?php echo number_format($d->weight_kgs, 0); ?></td>
                        <td data-label="Unit" ><?php echo $d->unit_net; ?></td>
                        <td data-label="SPI/E Quota" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d->quota_qty, 0); ?></td>
                        <td data-label="SPI/E Unit" style="background-color: #84AFC9; color: white"><?php echo $d->ip_unit; ?></td>
                        <td data-label="VR Submission" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d->penggunaan_vr, 0); ?></td>
                        <td data-label="LS Realisation" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d->penggunaan_ls, 0); ?></td>
                        <td data-label="Usage" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d->quota_vr, 0); ?></td>
                        <td data-label="SPI/E Balance" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d->quota_ls, 0); ?></td>
                        <td data-label="Vol" style="background-color: #84AFC9; color: white"><?php echo number_format($d->quota_volume, 0); ?></td>
                        <td data-label="Unit" style="background-color: #84AFC9; color: white"><?php echo $d->quota_unit; ?></td>
                        <td style="text-align: right; ">
                            <div class="action-buttons">
                                <a class="green" href="<?php echo site_url() . "/" . $form . "/modify_detail/" . $p->vr_submit_no . '/' . $d->vr_submit_detail_id; ?>">
                                    <button style="height:30px" class="btn btn-primary btn_space btn-sm" >
                                        <i class="ace-icon fa fa-pencil bigger-130 "></i>
                                    </button>
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

                    <div class="box-footer">
                        Periksa kembali data yang diinput agar tidak terjadi kesalahan proses data
                    </div>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>
            </form>
        </div>
    </div>
</div>