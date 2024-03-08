<div class="box box-primary">
    <div class="box-body">
        <div class="col-lg-12">
            <table width="100%" style="margin-bottom:5px;  vertical-align: top;" border="0">	
                <tr>
                    <td style='min-width:150px' width="20%">VR Web No.</td>
                    <td width="2%">:</td>
                    <td width='35%' style=""><?php echo $vrh['vr_submit_no'] ?></td>
                    <td width="6%">&nbsp;</td>
                    <td width="15%"></td>
                    <td width="2%"></td>
                    <td width="20%"></td>
                </tr>
                <tr>
                    <td width="20%">VR No.</td>
                    <td width="2%">:</td>
                    <td width='25%' style=""><?php echo $vrh['registration_number'] ?></td>
                    <td width="6%">&nbsp;</td>
                    <td width="15%"></td>
                    <td width="2%"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td>Date Of Registration</td>
                    <td>:</td>
                    <td><?php echo format_date($vrh['vr_submit_date'], 'd/m/Y H:i:s') ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>VO No.</td>
                    <td>:</td>
                    <td><?php echo $vrh['io_number'] ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
        <div class='row'>
            <div class="col-lg-6" >
                <table width="100%" style="margin-bottom:5px;  vertical-align: top;" border="0">	
                    <tr style="border-top: 1px solid #ddd">
                        <td width='20%' style="font-size:12px;" ><b><?php echo $vrh['tipe_01'] ?></b></td>
                        <td width='5%' ></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><?php echo $vrh['importer_type'] . ' ' . $vrh['importer_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td>:</td>
                        <td><?php echo $vrh['importer_contact'] ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td><?php echo $vrh['importer_address'] . '</br>' . $vrh['importer_address1'] ?></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td >:</td>
                        <td><?php echo $vrh['importer_city'] . '  ' . $vrh['importer_zipcode'] ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td><?php echo $vrh['importer_phone'] ?></td>
                    </tr>
                    <tr>
                        <td>Fax</td>
                        <td>:</td>
                        <td><?php echo $vrh['importer_fax'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $vrh['importer_email'] ?></td>
                    </tr>
                    <tr>
                        <td>NPWP</td>
                        <td >:</td>
                        <td><?php echo $vrh['npwp'] ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><?php echo $vrh['importer_status'] ?></td>
                    </tr>

                    <tr>
                        <td>API</td>
                        <td>:</td>
                        <td><?php echo $vrh['importer_api'] ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-6" >

                <table width="100%" style="margin-bottom:5px;  vertical-align: top;" >	
                    <tr style="border-top: 1px solid #ddd">
                        <td width='20%' style="font-family:arial; font-size:12px;" ><b><?php echo $vrh['tipe_02'] ?></b></td>
                        <td width='5%' ></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><?php echo $vrh['exporter_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td>:</td>
                        <td><?php echo $vrh['exporter_contact'] ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td><?php echo $vrh['exporter_addr'] ?></td>
                    </tr>
                    <tr>
                        <td >City</td>
                        <td>:</td>
                        <td><?php echo $vrh['exporter_city'] ?></td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td>:</td>
                        <td><?php echo $vrh['exporter_country_code'] ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td><?php echo $vrh['exporter_telp'] ?></td>
                    </tr>
                    <tr>
                        <td>Fax</td>
                        <td>:</td>
                        <td><?php echo $vrh['exporter_fax'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $vrh['exporter_email'] ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class='row'>
            <div class="col-lg-6" >
                <table width="100%" style="margin-bottom:5px;  vertical-align: top;" border="0">	
                    <tr style="border-top: 1px solid #eee">
                        <td width='20%' style="font-family:arial; font-size:12px;"><b>SUPPLIER</b></td>
                        <td width='5%' ></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><?php echo $vrh['supplier_name'] ?></td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td>:</td>
                        <td><?php echo $vrh['supplier_contact'] ?></td>
                        <td>&nbsp;</td>
                        <td valign='top'></td>
                        <td valign='top'></td>
                        <td valign='top'></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td >:</td>
                        <td><?php echo $vrh['supplier_addr'] ?></td>
                        <td >&nbsp;</td>
                        <td ></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td >:</td>
                        <td><?php echo $vrh['supplier_country'] ?></td>
                        <td >&nbsp;</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Telp.</td>
                        <td>:</td>
                        <td><?php echo $vrh['supplier_telp'] ?></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Mobile Phone</td>
                        <td>:</td>
                        <td><?php echo $vrh['supplier_cell'] ?></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Fax.</td>
                        <td>:</td>
                        <td><?php echo $vrh['supplier_fax'] ?></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $vrh['supplier_email'] ?></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class='row'>
            <div class="col-lg-6" >
                <table width="100%" style="margin-bottom:5px;  vertical-align: top;" border="0">	
                    <tr style="border-top: 1px solid #ddd">
                        <td width='20%'>Mode of Transportation</td>
                        <td width='5%'>:</td>
                        <td><?php echo $vrh['transportation_mode'] . '-' . $vrh['package_type'] ?></td>
                        <td>&nbsp;</td>
                        <td>Total Value</td>
                        <td>:</td>
                        <td><?php echo number_format($vrh['total_value'], 2) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $vrh['port_type_01'] ?></td>
                        <td>:</td>
                        <td><?php echo $vrh['port_code_01'] . ' ' . $vrh['port_name_01'] ?></td>
                        <td >&nbsp;</td>
                        <td>Currency</td>
                        <td>:</td>
                        <td><?php echo $vrh['curr_code'] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $vrh['port_type_02'] ?></td>
                        <td>:</td>
                        <td><?php echo $vrh['port_code_02'] . ' ' . $vrh['port_name_02'] ?></td>
                        <td>&nbsp;</td>
                        <td>Inco Term</td>
                        <td>:</td>
                        <td><?php echo $vrh['incoterm'] ?></td>
                    </tr>
                    <tr>
                        <td>Date Shipment</td>
                        <td>:</td>
                        <td><?php echo format_date($vrh['shipment_date'], 'd/m/Y') ?></td>
                        <td >&nbsp;</td>
                        <td>Total Net Weight</td>
                        <td>:</td>
                        <td><?php echo number_format($vrh['tot_net_weight'], 2) . '  ' . $vrh['tot_net_weight_unit']; ?></td>
                    </tr>
                    <tr>
                        <td>Date Discharge</td>
                        <td>:</td>
                        <td><?php echo format_date($vrh['discharge_date']) ?></td>
                        <td >&nbsp;</td>
                        <td>Partial Shipment</td>
                        <td>:</td>
                        <td><?php echo $vrh['partial'] ?></td>
                    </tr>
                    <tr>
                        <td colspan='7'>&nbsp;</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class='row'>
            <div class="col-lg-12 col-md-12 col-sm-12 " style="padding-left:5; padding-right:5;">
                <table class="table table-striped table-hover table-responsive table-condensed table-bordered" style="border-top:1px solid;border-bottom:1px solid; border-color: black">
                    <thead>
                        <tr>
                            <th rowspan="2" width="30">No</th>
                            <th rowspan="2" width="70">HS Code</th>
                            <th rowspan="2" >HS Description</th>
                            <th rowspan="2" width="30">Origin</th>
                            <th rowspan="2" width="100">Quantity</th>
                            <th rowspan="2" width="30">Unit</th>
                            <th rowspan="2" width="50">Weight<br>KGS</th>
                            <th rowspan="2" width="50">Unit Net</th>
                            <th colspan="6" width="50" style="background-color: #84AFC9; color: white;text-align: center; ">SPI/E Balance</th>
                            <th rowspan="2" width="50" style="text-align: right; ">
                                <div class="action-buttons">
                                    <a class="green" href="<?php echo site_url() . "/" . $form . "/modify_detail/" . $vrh['vr_submit_no'] . '/'; ?>">
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($detail as $d) {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td data-label="HS Code"><?php echo $d['hs_code']; ?><p style='color:red'><?php echo $d['ip_found'] ?></p></td>
                                <td data-label="Description"><?php echo $d['hs_description']; ?></td>
                                <td data-label="Description"><?php echo $d['country_code']; ?></td>
                                <td data-label="Quantity"><?php echo number_format($d['quantity'], 3); ?></td>
                                <td data-label="Unit" ><?php echo $d['unit']; ?></td>
                                <td data-label="Weight" ><?php echo number_format($d['weight_kgs'], 3); ?></td>
                                <td data-label="Unit" ><?php echo $d['unit_net']; ?></td>
                                <td data-label="SPI/E Quota" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d['quota_qty'], 0); ?></td>
                                <td data-label="SPI/E Unit" style="background-color: #84AFC9; color: white"><?php echo $d['ip_unit']; ?></td>
                                <td data-label="VR Submission" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d['penggunaan_vr'], 0); ?></td>
                                <td data-label="LS Realisation" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d['penggunaan_ls'], 0); ?></td>
                                <td data-label="Usage" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d['quota_vr'], 0); ?></td>
                                <td data-label="SPI/E Balance" style="background-color: #84AFC9; color: white;text-align: right;"><?php echo number_format($d['quota_ls'], 0); ?></td>
                                <td style="text-align: right; ">
                                    <div class="action-buttons">
                                        <a class="green" href="<?php echo site_url() . "/" . $form . "/modify_detail/" . $d['vr_submit_no'] . '/' . $d['vr_submit_detail_id']; ?>">
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
        <div class='row'>

            <div class="col-lg-6">
                <table width="100%" style="margin-bottom:5px;  vertical-align: top;" border="0">	
                    <tr style="border-top: 1px solid #ddd">
                        <td width='20%'>Order No./Invoice No.</td>
                        <td width='5%'>:</td>
                        <td><?php echo $vrh['invoice_no'] ?></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Import License No.</td>
                        <td>:</td>
                        <td><?php echo $vrh['import_license_no'] ?></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>

                    </tr>
                <!--    <a href = "<?php echo base_url() . "uploads/document/spi/" . $p->import_license_no . '.pdf'; ?>" target="_blank">
                                                    <i class="ace-icon fa fa-file-pdf-o text-danger"></i>
                                                </a>-->
                    <tr>
                        <td>Remarks</td>
                        <td>:</td>
                        <td colspan="5"><?php echo $vrh['remarks'] ?></td>

                    </tr>
                    <tr>
                        <td colspan="7">
                            <br>
                            <div style='width:100%; float:right; text-align:right; font-family:arial; font-size:10px;'>
                                <table width='100%' style="font-family:arial; font-size:10px;">
                                    <tr>
                                        <td width='100%' align='right'>
                                            Name : <?php echo $vrh['pic'] ?> <br /> <br />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
