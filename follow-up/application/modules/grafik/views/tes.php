<script>
    $(function(){ 

        var chart1 = new FusionCharts("Pie3D", "c01", 300, 300);
        chart1.setDataURL("<?php echo site_url() . '/xdashboard/pie01'; ?>");
        chart1.render("p01");

        var chart1 = new FusionCharts("Pie3D", "c01", 600, 300);
        chart1.setDataURL("<?php echo site_url() . '/xdashboard/g01'; ?>");
        chart1.render("g01");

    });
</script> 

<div class="warper container-fluid">

    <div class="page-header"><h3>Survey Report<small> based on Unit </small></h3></div>
    <div class="row">

        <div class="col-md-12">
            <table>
                <tr>
                    <td><div id="p01" class="col-md-2"></div></td>
                    <td><div id="g01" class="col-md-2"></div></td>
                </tr>
            </table>
        </div>
    </div>
</div>