<div class="col-lg-12 col-md-12 col-sm-12 " style="padding-left:5; padding-right:5;">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">List</h3>
        </div>
        <div class="box-body">
<form class="form-horizontal" role="form" action="<?php echo $action_modify; ?>" method="post">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" >
        <tr>
            <td colspan="2" style="background-color: #8d82b5; color: white; font-weight: bold; border-radius: 5px; border-style: none">VR</td>
        </tr>
        <tr>
            <td width='30%' style="border-top-style: none; ">VR Submit No</td>
            <td style="border-top-style: none; "><?php echo $vr_submit_no; ?></td>
        </tr>
        <tr>
            <td>HS Code</td>
            <td><?php echo $hs_code?></td>
        </tr>
        <tr>
            <td>HS Description</td>
            <td><?php echo $hs_description?></td>
        </tr>
        <tr>
            <td colspan="2" style="background-color: #8d82b5; color: white; font-weight: bold; border-radius: 5px; border-style: none">Object</td>
        </tr>
        <tr>
            <td style="border-top-style: none;">Country Code</td>
            <td style="border-top-style: none;"><?php echo $country_code ?></td>
        </tr>
        <tr>
            <td style="border-top-style: none;">Quantity</td>
            <td style="border-top-style: none;"><?php echo $quantity ?></td>
        </tr>
        <tr>
            <td style="border-top-style: none;">Unit</td>
            <td style="border-top-style: none;"><?php echo $unit ?></td>
        </tr>
                <tr>
            <td style="border-top-style: none;">Pref.Facility</td>
            <td style="border-top-style: none;"><?php echo $pref_facility ?></td>
        </tr>
        <tr>
            <td style="border-top-style: none;">Weight.Kgs</td>
            <td style="border-top-style: none;"><?php echo $weight_kgs ?></td>
        </tr>
        <tr>
            <td style="border-top-style: none;">Unit Net</td>
            <td style="border-top-style: none;"><?php echo $unit_net ?></td>
        </tr>
        <tr>
            <td style="border-top-style: none;">SPI/E</td>
            <td style="border-top-style: none;"><?php echo $license_no ?></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo $back_button ?>'">Cancel</button>

            </td>
        </tr>
    </table>
</form>
