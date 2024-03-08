<form class="form-horizontal" role="form" action="<?php echo $action_modify_vr; ?>" method="post">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" >
        <tr>
            <td colspan="2" style="background-color: #8d82b5; color: white; font-weight: bold; border-radius: 5px; border-style: none">VR</td>
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
            <td colspan="2" style="text-align: center">
                <button type="submit" class="btn btn-primary">Save</button>
                       <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo $back_button ?>'">Cancel</button>

            </td>
        </tr>
    </table>
</form>