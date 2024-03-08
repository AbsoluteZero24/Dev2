<!-- Base Styling  -->
<script src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/template/brio/js/jquery/jquery-2.1.0.js"></script>

<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.js"></script>
<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.charts.js"></script>
<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.widgets.js"></script>
<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.powercharts.js"></script>
<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/fusioncharts.gantt.js"></script>

<script type="text/javascript" src="http://ver-migas.com/cifw4dm1n4pp5w3b/assets/chart/js/themes/fusioncharts.theme.ocean.js"></script>
<script>
    const dataSource = {
        chart: {
            caption: "Countries with Highest Deforestation Rate",
            subcaption: "For the year 2017",
            yaxisname: "Deforested Area{br}(in Hectares)",
            decimals: "1",
            theme: "candy"
        },
        data: [
            {
                label: "Brazil",
                value: "1466000"
            },
            {
                label: "Indonesia",
                value: "1147800"
            },
            {
                label: "Russian Federation",
                value: "532200"
            },
            {
                label: "Mexico",
                value: "395000"
            },
            {
                label: "Papua New Guinea",
                value: "250200"
            },
            {
                label: "Peru",
                value: "224600"
            },
            {
                label: "U.S.A",
                value: "215200"
            },
            {
                label: "Bolivia",
                value: "135200"
            },
            {
                label: "Sudan",
                value: "117807"
            },
            {
                label: "Nigeria",
                value: "82000"
            }
        ]
    };

    FusionCharts.ready(function () {
        var myChart = new FusionCharts({
            type: "column3d",
            renderAt: "chart-container",
            width: "25%",
            height: "200px",
            dataFormat: "json",
            dataSource
        }).render();
    });

    FusionCharts.ready(function () {
        var myChart = new FusionCharts({
            type: "column3d",
            renderAt: "chart-container2",
            width: "25%",
            height: "200px",
            dataFormat: "json",
            dataSource
        }).render();
    });
</script>

<div id="chart-container"></div>
<div id="chart-container2"></div>

<?php
foreach ($data_cabang as $row_cabang) {
	echo $row_cabang['id_cabang'].' - '.$row_cabang['nm_cabang'].' - '.$row_cabang['nm_pimpinan'].' - '.$row_cabang['id_kode'];
	echo '<br>';
}
?>