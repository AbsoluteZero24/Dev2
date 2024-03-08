<!DOCTYPE html>
<html>
    <head>
        <title>VR</title>
        <style>
            table { width:100%; }
        </style>
    </head>
    <body>
        <div id='content'>
            <div id='header'>
                <table width="100%" style='padding-top:1px;' border="0">
                    <tr>
                        <td style="color: #00000; text-align: center; " valign="top">
                            <div style="font-family:arial; font-weight:normal; font-size:12px;">		
                                <table>
                                    <tr>
                                        <td style="padding-left: 0">
                                            <img src='<?php echo base_url() ?>/images/sucofindo_logo_pdf.png' border="0" width="77" height="35" /> 
                                        </td>
                                        <td>
                                            <div style="font-family:arial; font-weight:normal; font-size:12px;">		
                                                ARRANGEMENT FOR THE IMPORTATION OF OIL, GAS, AND OTHER FORM OF FUEL
                                                <br>
                                                DETAILS OF VERIFICATION REQUEST (VR)
                                            </div>
                                        </td>
                                        <td>
                                            <img src='<?php echo base_url() ?>/images/ptsi_logo_pdf.png' border="0" width="77" height="35"/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td >&nbsp;</td>
                    </tr>
                    <tr>
                        <td ><hr style="margin-top:1px; margin-bottom:0px;"/></td>
                    </tr>
                </table>
            </div> 

            <table width="100%" style="margin-bottom:5px;  font-family:courier; font-size:10px; vertical-align: top;" border="0">	
                <tr>
                    <td colspan="7" width="10%"><div style="text-indent: 0px; margin-bottom: 8px; font-size:9px ">Refer to the terms and conditions of "<b>KETENTUAN VERIFIKASI ATAU PENELUSURAN TEKNIS <?php echo $jenis ?> <?php echo $description ?>  </b>" that we have already read and understood, herewith we are submitting the VR as follows :</div></td>
                </tr>
                <tr>
                    <td width="22%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                    <td width="25%">&nbsp;</td>
                    <td width="6%">&nbsp;</td>
                    <td width="15%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                    <td width="28%">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%">VR No.</td>
                    <td width="2%">:</td>
                    <td width='25%' style=""><?php echo $registration_number ?></td>
                    <td width="6%">&nbsp;</td>
                    <td width="15%">VR Web No.</td>
                    <td width="2%">:</td>
                    <td width="30%"><?php echo $vr_submit_no ?></td>
                </tr>
                <tr>
                    <td>Date Of Registration</td>
                    <td>:</td>
                    <td><?php echo format_date($vr_submit_date, 'd/m/Y H:i:s') ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>VO No.</td>
                    <td>:</td>
                    <td><?php echo $io_number ?></td>
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
                <tr>
                    <td style="font-family:arial; font-size:12px;" ><b><?php echo $tipe_01 ?></b></td>
                    <td></td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td style="font-family:arial; font-size:12px;" ><b><?php echo $tipe_02 ?></b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><?php echo $importer_type . ' ' . $importer_name ?></td>
                    <td>&nbsp;</td>
                    <td>Name</td>
                    <td>:</td>
                    <td><?php echo $exporter_name ?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>:</td>
                    <td><?php echo $importer_contact ?></td>
                    <td>&nbsp;</td>
                    <td>Contact</td>
                    <td>:</td>
                    <td><?php echo $exporter_contact ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><?php echo $importer_address . '</br>' . $importer_address1 ?></td>
                    <td>&nbsp;</td>
                    <td>Address</td>
                    <td>:</td>
                    <td><?php echo $exporter_addr ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td >:</td>
                    <td><?php echo $importer_city . '  ' . $importer_zipcode ?></td>
                    <td >&nbsp;</td>
                    <td >City</td>
                    <td>:</td>
                    <td><?php echo $exporter_city ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td><?php echo $importer_phone ?></td>
                    <td>&nbsp;</td>
                    <td>Country</td>
                    <td>:</td>
                    <td><?php echo $exporter_country_code ?></td>
                </tr>
                <tr>
                    <td>Fax</td>
                    <td>:</td>
                    <td><?php echo $importer_fax ?></td>
                    <td>&nbsp;</td>
                    <td>Phone</td>
                    <td>:</td>
                    <td><?php echo $exporter_telp ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $importer_email ?></td>
                    <td>&nbsp;</td>
                    <td>Fax</td>
                    <td>:</td>
                    <td><?php echo $exporter_fax ?></td>
                </tr>
                <tr>
                    <td>NPWP</td>
                    <td >:</td>
                    <td><?php echo $npwp ?></td>
                    <td >&nbsp;</td>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $exporter_email ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?php echo $importer_status ?></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>API</td>
                    <td>:</td>
                    <td><?php echo $importer_api ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td >&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="font-family:arial; font-size:12px;"><b>SUPPLIER</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><?php echo $supplier_name ?></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>:</td>
                    <td><?php echo $supplier_contact ?></td>
                    <td>&nbsp;</td>
                    <td valign='top'></td>
                    <td valign='top'></td>
                    <td valign='top'></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td >:</td>
                    <td><?php echo $supplier_addr ?></td>
                    <td >&nbsp;</td>
                    <td ></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td >:</td>
                    <td><?php echo $supplier_country ?></td>
                    <td >&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Telp.</td>
                    <td>:</td>
                    <td><?php echo $supplier_telp ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Mobile Phone</td>
                    <td>:</td>
                    <td><?php echo $supplier_cell ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Fax.</td>
                    <td>:</td>
                    <td><?php echo $supplier_fax ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $supplier_email ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
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
                <tr>
                    <td>Mode of Transportation</td>
                    <td>:</td>
                    <td><?php echo $transportation_mode . '-' . $package_type ?></td>
                    <td>&nbsp;</td>
                    <td>Total Value</td>
                    <td>:</td>
                    <td><?php echo number_format($total_value, 2) ?></td>
                </tr>
                <tr>
                    <td><?php echo $port_type_01 ?></td>
                    <td>:</td>
                    <td><?php echo $port_code_01 . ' ' . $port_name_01 ?></td>
                    <td >&nbsp;</td>
                    <td>Currency</td>
                    <td>:</td>
                    <td><?php echo $curr_code ?></td>
                </tr>
                <tr>
                    <td><?php echo $port_type_02 ?></td>
                    <td>:</td>
                    <td><?php echo $port_code_02 . ' ' . $port_name_02 ?></td>
                    <td>&nbsp;</td>
                    <td>Inco Term</td>
                    <td>:</td>
                    <td><?php echo $incoterm ?></td>
                </tr>
                <tr>
                    <td>Date Shipment</td>
                    <td>:</td>
                    <td><?php echo format_date($shipment_date, 'd/m/Y') ?></td>
                    <td >&nbsp;</td>
                    <td>Total Net Weight</td>
                    <td>:</td>
                    <td><?php echo number_format($tot_net_weight, 2) . '  ' . $tot_net_weight_unit; ?></td>
                </tr>
                <tr>
                    <td>Date Discharge</td>
                    <td>:</td>
                    <td><?php echo format_date($discharge_date) ?></td>
                    <td >&nbsp;</td>
                    <td>Partial Shipment</td>
                    <td>:</td>
                    <td><?php echo $partial ?></td>
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
                <tr>
                    <td >&nbsp;</td>
                    <td >&nbsp;</td>
                    <td >&nbsp;</td>
                    <td >&nbsp;</td>
                    <td >&nbsp;</td>
                    <td >&nbsp;</td>
                    <td >&nbsp;</td>
                </tr>		  
                <tr>
                    <td colspan="7">
                        <table style="margin-left:0px; font-size:9px; vertical-align: top">
                            <tr>
                                <th width="5.28%">No.</th>
                                <th width="8%" align="left">HS Code</th>
                                <th width="15%" align="left">Goods Description</th>
                                <th width="5%" align="left">Origin</th>
                                <th width="15%" style="text-align: right">QTY</th>
                                <th width="15%" style="text-align: right">Net Weight</th>
                                <th width="15%" >Pref.Faciliy</th>
                                <th align="left" width="15%" >License No.</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($detail as $row) {
                                ?>
                                <tr>
                                    <td style="" align="center" ><?php echo $no ?></td>
                                    <td style="" align="left" ><?php echo $row['hs_code'] ?></td>
                                    <td style="" align="left" ><?php echo $row['hs_description'] ?></td>
                                    <td style="" align="left" ><?php echo $row['country_code'] ?></td>
                                    <td style="text-align: right"><?php echo number_format($row['quantity'], 3) . ' ' . $row['unit'] ?></td>
                                    <td style="text-align: right"><?php echo number_format($row['weight_kgs'], 3) . ' ' . $row['unit_net'] ?></td>
                                    <td ><?php echo $row['pref_facility'] ?></td>
                                    <td ><?php echo $row['license_no'] ?></td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>

                        </table>

                    </td>
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
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan='7'>&nbsp;</td>
                </tr>
                <tr>
                    <td>Order No./Invoice No.</td>
                    <td>:</td>
                    <td><?php echo $invoice_no ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Import License No.</td>
                    <td>:</td>
                    <td><?php echo $import_license_no ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                </tr>
                <tr>
                    <td>Remarks</td>
                    <td>:</td>
                    <td colspan="5"><?php echo $remarks ?></td>

                </tr>
                <tr>
                    <td colspan='7'>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan='7'>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan='7'>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan='7'>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="7">
                        <br>
                        <div style='width:100%; float:right; text-align:right; font-family:arial; font-size:10px;'>
                            <table width='100%' style="font-family:arial; font-size:10px;">
                                <tr>
                                    <td width='100%' align='right'>
                                        Name : <?php echo $pic ?> <br /> <br />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
