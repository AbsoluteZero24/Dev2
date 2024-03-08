<div class="box box-primary">
    <div class="box-body ">
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
                    <td><?= $vrh['vr_submit_date'] ?></td>
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
                        <td><?php echo $vrh['total_value'] ?></td>
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
                        <td><?php echo $vrh['tot_net_weight'] . '  ' . $vrh['tot_net_weight_unit']; ?></td>
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
                <!--    <a href = "<?php echo base_url() . "uploads/document/spi/" . $vrh['import_license_no'] . '.pdf'; ?>" target="_blank">
                                                    <i class="ace-icon fa fa-file-pdf-o text-danger"></i>
                                                </a>-->
                    <tr>
                        <td>Remarks</td>
                        <td>:</td>
                        <td colspan="5"><?php echo $vrh['remarks'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
