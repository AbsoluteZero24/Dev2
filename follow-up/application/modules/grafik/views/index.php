
<!-- Base Styling  -->
<script src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/template/brio/js/jquery/jquery-2.1.0.js"></script>

<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.js"></script>
<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.charts.js"></script>
<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.widgets.js"></script>
<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.powercharts.js"></script>
<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.gantt.js"></script>

<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/themes/fusioncharts.theme.ocean.js"></script>
<script>
    $(function () {


        var chart1 = new FusionCharts("Pie3D", "c01", 300, 300);
        chart1.setDataURL("<?php echo site_url() . '/' . $form . '/g01'; ?>");
        chart1.render("g01");

        var chart2 = new FusionCharts("column3D", "c02", 500, 400);
        chart2.setDataURL("<?php echo site_url() . '/' . $form . '/g02'; ?>");
        chart2.render("g02");

        var chart3 = new FusionCharts("Pie3D", "c03", 300, 300);
        chart3.setDataURL("<?php echo site_url() . '/' . $form . '/g03'; ?>");
        chart3.render("g03");

        var chart4 = new FusionCharts("stackedColumn3DLine", "c04", 500, 300);
        chart4.setDataURL("<?php echo site_url() . '/' . $form . '/g04'; ?>");
        chart4.render("g04");

        var chart5 = new FusionCharts("stackedColumn3DLine", "c05", 400, 300);
        chart5.setDataURL("<?php echo site_url() . '/' . $form . '/g05'; ?>");
        chart5.render("g05");

        var chart6 = new FusionCharts("MSColumnLine3D", "c06", 300, 400);
        chart6.setDataURL("<?php echo site_url() . '/' . $form . '/g06'; ?>");
        chart6.render("g06");

        var chart7 = new FusionCharts("column3D", "c07", 300, 400);
        chart7.setDataURL("<?php echo site_url() . '/' . $form . '/g07'; ?>");
        chart7.render("g07");

        var chart8 = new FusionCharts("column3D", "c08", 300, 400);
        chart8.setDataURL("<?php echo site_url() . '/' . $form . '/g08'; ?>");
        chart8.render("g08");


        var chart9 = new FusionCharts("MSColumnLine3D", "c09", 300, 400);
        chart9.setDataURL("<?php echo site_url() . '/' . $form . '/g09'; ?>");
        chart9.render("g09");

        var chart10 = new FusionCharts("MSColumnLine3D", "c10", 300, 400);
        chart10.setDataURL("<?php echo site_url() . '/' . $form . '/g10'; ?>");
        chart10.render("g10");

        var chart11 = new FusionCharts("stackedColumn3DLine", "c11", 300, 700);
        chart11.setDataURL("<?php echo site_url() . '/' . $form . '/g20'; ?>");
        chart11.render("g11");

        var chart12 = new FusionCharts("stackedColumn3DLine", "c12", 300, 700);
        chart12.setDataURL("<?php echo site_url() . '/' . $form . '/g22'; ?>");
        chart12.render("g12");

        var chart13 = new FusionCharts("stackedColumn3DLine", "c13", 300, 700);
        chart13.setDataURL("<?php echo site_url() . '/' . $form . '/g23'; ?>");
        chart13.render("g13");
    });
</script> 



<div class="row-fluid" style="padding-top:0px;" >
    <div id="headerMenu" class="span7 mainMenuPadding" style="margin-left:0">
        <ul class="nav nav-tabs" id="headerTabs">
            <li class="active" id="summary-li"><a href="#summary" data-toggle="tab">Summary</a></li>
            <li id="res-li"><a href="#residentialTab" data-toggle="tab">Migas</a></li>
        </ul>
    </div>
</div>
<div class="row-fluid navContentGap">
    <div class="span12">
        <div id="tabContainer" class="tab-content" style="overflow:hidden">
            <div class="tab-pane  active" id="summary">
                <div id="summary-top-charts" class="row-fluid" >
                    <?php $this->load->view('page_01_new'); ?>
                </div>
            </div>
            <div class="tab-pane" id="residentialTab">
                <div id="residential-content" class="row-fluid">
                    <?php $this->load->view('page_02'); ?>
                </div>
            </div>

            <div class="tab-pane" id="commercialTab">
                <div class="tab-pane active" id="commercialTab">
                    <?php $this->load->view('page_03_1'); ?>
                </div>
            </div>

            <div class="tab-pane" id="mutasiTab">
                <div class="tab-pane active" id="mutasiTab">
                    <?php $this->load->view('page_04_1'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

