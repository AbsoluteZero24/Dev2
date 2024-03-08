<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class grafik extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->template = 'template_dashboard';
        $this->form = 'grafik';
        $this->load->model('query_model');
    }

    function index() {
        $data['form'] = $this->form;
        $data['ls'] = $this->query_model->get_data();
        show('index', $data, 'template');
    }

    function g01() {
        $chart = '<chart caption="Total Impor per Negara Tujuan" 
            subcaption="Tahun 2018" 
                        bgcolor="#FFFFFF" 
                        pieyscale="50" 
                        smartlinecolor="7D8892" 
                        smartlinethickness="2" 
                        showpercentvalues="0" showpercentintooltip="0" palettecolors="#91AF64,#B0BF92,#D0DFA3,#E0F0E0" showlegend="1" legendshadow="1" legendborderalpha="0" showborder="0">
                    <set value="243" label="USA" />
                    <set value="207" label="UK" />
                    <set value="82" label="Canada" />
                    <set value="65" label="France" />
                </chart>';
        echo $chart;
    }

    function g03() {
        $chart = '<chart caption="Total Impor Berdasar Pelabuhan Muat" 
            subcaption="Tahun 2018" 
                        bgcolor="#FFFFFF" 
                        pieyscale="50" 
                        smartlinecolor="7D8892" 
                        smartlinethickness="2" 
                        showpercentvalues="0" 
                        showpercentintooltip="0" 
                        palettecolors="#91AF64,#B0BF92,#D0DFA3,#E0F0E0" 
                        showlegend="1" legendshadow="1" legendborderalpha="0" showborder="0">
                    <set value="243" label="Tanjung Priuk" />
                    <set value="207" label="Tanjung Perak" />
                    <set value="82" label="Tanjung Mas" />
                    <set value="65" label="Pelindo" />
                </chart>';
        echo $chart;
    }

    function g02() {
        $chart = "
    

            <chart caption='Total Impor per HS Code' subcaption='Tahun 2018' 
                xAxisName='HS Code' 
                yAxisMaxValue='100'
                showValues='1' 
                formatNumberScale='1' 
                decimalprecision='0' 
                rotateValues='1'
                labelDisplay='rotate'
                slantLabel='1' 
                adjustDiv='1' 
                showBorder='0' 
                palette='4'
                useRoundEdges='1'
                bgColor='FFFFFF'  
                decimalSeparator=','  
                thousandSeparator='.' 
                exportEnabled='1'  
                exportShowMenuItem='1'
                palettecolors='#91AF64,#B0BF92,#D0DFA3,#E0F0E0'
                smartLineColor='790000' 
                baseFontColor='2E4A89' 
                plotGradientColor=' '>
    <colorrange minvalue='0' startlabel='Low' endlabel='High' code='#FF4411' >
        <color maxvalue='25' code='#FFDD44' displayvalue='Median' />
        <color maxvalue='100' code='#6baa01' />
    </colorrange>
            <set label='AVTUR' value='42.8571' displayValue='6' color='#f0d817' tooltext='SP:6 dari 14, 43%' />
            <set label='ETIL ALKOHOL' value='100.0000' displayValue='9' color='#0000ff' tooltext='SPI:9 dari 9, 100%' />
            <set label='BIOFUEL' value='100.0000' displayValue='15' color='#0000ff' tooltext='DSDM:15 dari 15, 100%' />
            <set label='MINYAK FEEDSTOCK' value='82.3529' displayValue='14' color='#3eb308' tooltext='DPB:14 dari 17, 82%' />
            <set label='AVGAS' value='83.3333' displayValue='10' color='#3eb308' tooltext='DP3SO:10 dari 12, 83%' />
            <set label='BBG' value='81.8182' displayValue='9' color='#3eb308' tooltext='DKA:9 dari 11, 82%' />
            <set label='KEROSENE' value='100.0000' displayValue='15' color='#0000ff' tooltext='DMF:15 dari 15, 100%' />
            <set label='BADAK CRUDE' value='100.0000' displayValue='4' color='#0000ff' tooltext='UPKBL:4 dari 4, 100%' />
            <set label='BENSIN RON 92' value='100.0000' displayValue='10' color='#0000ff' tooltext='UTI:10 dari 10, 100%' />
            <set label='BONTANG RETURN CONDENSATE' value='100.0000' displayValue='31' color='#0000ff' tooltext='SB/DB PIK:31 dari 31, 100%' />
            <set label='MINYAK DIESEL' value='100.0000' displayValue='43' color='#0000ff' tooltext='SB/DB MIGAS:43 dari 43, 100%' />
            <set label='GASOLINE 100 RON (PERTAMAX RACING)' value='73.5294' displayValue='25' color='#3eb308' tooltext='SB/DB INFRAS:25 dari 34, 74%' />
            <set label='HSFO 180 cst' value='52.0000' displayValue='13' color='#f0d817' tooltext='SB/DB MINBA:13 dari 25, 52%' />
            <set label='KERAPU CRUDE' value='100.0000' displayValue='21' color='#0000ff' tooltext='SI Pekanbaru:21 dari 21, 100%' />
            <set label='KEROSENE DISTILLATE' value='100.0000' displayValue='14' color='#0000ff' tooltext='SI Palembang:14 dari 14, 100%' />
            <set label='LPG' value='100.0000' displayValue='29' color='#0000ff' tooltext='SI Jakarta:29 dari 29, 100%' />
            <set label='LSFO/VACUUM RESIDU, DECANT OIL' value='64.0000' displayValue='16' color='#3eb308' tooltext='SI Surabaya:16 dari 25, 64%' />
            <set label='MINYAK BENSIN RON 92 (PERTAMAX)' value='77.7778' displayValue='7' color='#3eb308' tooltext='SI Balikpapan:7 dari 9, 78%' />
            <set label='MINYAK BENSIN/MOGAS RON 90' value='63.6364' displayValue='7' color='#3eb308' tooltext='SI Medan:7 dari 11, 64%' />
            <set label='MINYAK BENSIN/MOGAS RON 92' value='100.0000' displayValue='14' color='#0000ff' tooltext='SI Batam:14 dari 14, 100%' />
            <set label='MINYAK FEEDSTOCK JELAGA KARBON' value='100.0000' displayValue='6' color='#0000ff' tooltext='SI Semarang:6 dari 6, 100%' />
            <set label='MINYAK SOLAR 51 (PERTAMAX DEX)' value='100.0000' displayValue='7' color='#0000ff' tooltext='SI Makassar:7 dari 7, 100%' />
            <set label='MINYAK SOLAR CN 53' value='100.0000' displayValue='3' color='#0000ff' tooltext='SI Aceh:3 dari 3, 100%' />
            <set label='NAPHTHA' value='100.0000' displayValue='1' color='#0000ff' tooltext='SI Banjarbaru:1 dari 1, 100%' />
            <set label='PREMIUM (GASOLINE 88 RON UNLEADED)' value='100.0000' displayValue='1' color='#0000ff' tooltext='SI Singapura:1 dari 1, 100%' />
            <set label='PROPANA' value='71.4286' displayValue='20' color='#3eb308' tooltext='KSO:20 dari 28, 71%' />
            <set label='SENIPAH CONDENSATE' value='66.6667' displayValue='2' color='#3eb308' tooltext='Anak Perusahaan:2 dari 3, 67%' /></chart>";
        echo $chart;
    }

    function g04() {
        $chart = '<chart 
                    caption="Total Impor per Bulan" 
                    subcaption="Tahun 2017" 
                    showvalues="0" 
                    plotSpacePercent="50"
                    palettecolors="#91AF64,#B0BF92,#D0DFA3,#E0F0E0" 
                    plotfillalpha="95" formatnumberscale="0" showborder="0">
<categories>
<category label="Jan" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Feb" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Mar" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Apr" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="May" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Jun" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Jul" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Aug" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Sep" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Oct" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Nov" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Dec" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
</categories>
<dataset seriesname="Migas">
<set value="3040" />
<set value="2794" />
<set value="3026" />
<set value="3341" />
<set value="2800" />
<set value="2507" />
<set value="3701" />
<set value="2671" />
<set value="2980" />
<set value="2041" />
<set value="1813" />
<set value="1691" />
</dataset>
<dataset seriesname="Batubara">
<set value="1200" />
<set value="1124" />
<set value="1006" />
<set value="921" />
<set value="1500" />
<set value="1007" />
<set value="921" />
<set value="971" />
<set value="1080" />
<set value="1041" />
<set value="1113" />
<set value="1091" />
</dataset>
<dataset seriesname="Timah">
<set value="600" />
<set value="724" />
<set value="806" />
<set value="621" />
<set value="700" />
<set value="907" />
<set value="821" />
<set value="671" />
<set value="880" />
<set value="641" />
<set value="913" />
<set value="691" />
</dataset>
<dataset seriesname="Others">
<set value="965" />
<set value="771" />
<set value="732" />
<set value="611" />
<set value="700" />
<set value="607" />
<set value="621" />
<set value="751" />
<set value="800" />
<set value="741" />
<set value="813" />
<set value="791" />
</dataset>
</chart>';
        echo $chart;
    }

    function g05() {
        $chart = '<chart 
            caption="Akumulasi Nilai Impor" 
            subcaption="In Thousands 2017" 
            showvalues="0" numvdivlines="22" 
            rotatenames="0" areaalpha="45" labelstep="1" showborder="0">
<categories>
<category label="Jan" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Feb" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Mar" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Apr" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Mei" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Jun" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Jul" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Ags" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Sep" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Okt" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Nop" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Des" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />

</categories>
<dataset seriesname="Migas" color="FF0080" areabordercolor="FF0080">
<set value="98" />
<set value="1219" />
<set value="1264" />
<set value="1559" />
<set value="1823" />
<set value="1192" />
<set value="1219" />
<set value="2264" />
<set value="2433" />
<set value="3500" />
<set value="4500" />
<set value="5600" />
</dataset>
<dataset seriesname="Batubara" color="0080C0" areabordercolor="0080C0">
<set value="36" />
<set value="101" />
<set value="116" />
<set value="164" />
<set value="489" />
<set value="904" />
<set value="1482" />
<set value="2138" />
<set value="2209" />
<set value="2247" />
<set value="2301" />
<set value="2601" />
</dataset>
<dataset seriesname="Timah" color="008040" areabordercolor="008040">
<set value="23" />
<set value="40" />
<set value="62" />
<set value="118" />
<set value="158" />
<set value="503" />
<set value="687" />
<set value="973" />
<set value="1125" />
<set value="1797" />
<set value="2166" />
<set value="2197" />
</dataset>
<dataset seriesname="Others" color="808080" areabordercolor="808080">
<set value="37" />
<set value="45" />
<set value="70" />
<set value="79" />
<set value="168" />
<set value="337" />
<set value="374" />
<set value="431" />
<set value="543" />
<set value="784" />
<set value="1117" />
<set value="1415" />
</dataset>
</chart>';
        echo $chart;
    }

    function g06() {
        $data = $this->query_model->get_quarter();
        $dataset='';
        foreach ($data as $row) {
            $dataset .= '<dataset seriesname="' . $row->tahun. '"> 
                        ';
            
            $val = $row->quarter_01 / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = $row->quarter_02 / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = $row->quarter_03 / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = $row->quarter_04 / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $dataset .= '</dataset>
                    ';
            
        }

        $chart = '<chart 
            caption="Impor Migas per Tri Wulan" 
            subcaption="2017/2018" 
            xAxisName="Nilai (Jutaan)"
            showvalues="0"
            plotSpacePercent="20"
            plotfillalpha="95" 
            formatnumberscale="0" showborder="0" 
            >
        <categories>
        <category label="Q1" stepskipped="false" labeltooltext="" />
        <category label="Q2" stepskipped="false" labeltooltext="" />
        <category label="Q3" stepskipped="false" labeltooltext="" />
        <category label="Q4" stepskipped="false" labeltooltext="" />
        </categories>'.$dataset.
        '</chart>';
        echo $chart;
    }

    function g07() {
        $chart = "
    

            <chart caption='Total Impor Migas (USD)' subcaption='Tahun 2017' 
                xAxisName='Bulan' 
                showValues='0' 
                formatNumberScale='1' 
                decimalprecision='0' 
                rotateValues='1'
                labelDisplay='rotate'
                plotSpacePercent='50'
                slantLabel='1' 
                adjustDiv='1' 
                showBorder='0' 
                palette='4'
                useRoundEdges='1'
                bgColor='FFFFFF'  
                decimalSeparator=','  
                thousandSeparator='.' 
                exportEnabled='1'  
                exportShowMenuItem='1'
                palettecolors='#91AF64,#B0BF92,#D0DFA3,#E0F0E0'
                smartLineColor='790000' 
                baseFontColor='2E4A89' 
                plotGradientColor=' '>
    <colorrange minvalue='0' startlabel='Low' endlabel='High' code='#FF4411' >
        <color maxvalue='25' code='#FFDD44' displayvalue='Median' />
        <color maxvalue='100' code='#6baa01' />
    </colorrange>
            <set label='JAN' value='42,8571' displayValue='6' color='#0000ff' />
            <set label='FEB' value='120,000' displayValue='9' color='#0000ff' />
            <set label='MAR' value='140,000' displayValue='15' color='#0000ff' />
            <set label='APR' value='92,529' displayValue='14' color='#0000ff' />
            <set label='MEI' value='83,333' displayValue='10' color='#0000ff' />
            <set label='JUN' value='81,182' displayValue='9' color='#0000ff' />
            <set label='JUL' value='110,000' displayValue='15' color='#0000ff' />
            <set label='AGS' value='103,000' displayValue='4' color='#0000ff' />
            <set label='SEP' value='150,000' displayValue='10' color='#0000ff' />
            <set label='OKT' value='140,000' displayValue='31' color='#0000ff' />
            <set label='NOV' value='110,000' displayValue='43' color='#0000ff' />
            <set label='DES' value='173,294' displayValue='25' color='#0000ff' />
        </chart>";
        echo $chart;
    }

    function g08() {

        $chart = "
    

            <chart caption='Volume Impor Migas' subcaption='Tahun 2017' 
                xAxisName='Bulan' 
                showValues='0' 
                formatNumberScale='1' 
                decimalprecision='0' 
                rotateValues='1'
                labelDisplay='rotate'
                plotSpacePercent='50'
                slantLabel='1' 
                adjustDiv='1' 
                showBorder='0' 
                palette='4'
                useRoundEdges='1'
                bgColor='FFFFFF'  
                decimalSeparator=','  
                thousandSeparator='.' 
                exportEnabled='1'  
                exportShowMenuItem='1'
                palettecolors='#91AF64,#B0BF92,#D0DFA3,#E0F0E0'
                smartLineColor='790000' 
                baseFontColor='2E4A89' 
                plotGradientColor=' '>
    <colorrange minvalue='0' startlabel='Low' endlabel='High' code='#FF4411' >
        <color maxvalue='25' code='#FFDD44' displayvalue='Median' />
        <color maxvalue='100' code='#6baa01' />
    </colorrange>
            <set label='JAN' value='42,8571' displayValue='6' color='#0000ff' />
            <set label='FEB' value='120' displayValue='9' color='#0000ff' />
            <set label='MAR' value='140' displayValue='15' color='#0000ff' />
            <set label='APR' value='102' displayValue='14' color='#0000ff' />
            <set label='MEI' value='103' displayValue='10' color='#0000ff' />
            <set label='JUN' value='108' displayValue='9' color='#0000ff' />
            <set label='JUL' value='120' displayValue='15' color='#0000ff' />
            <set label='AGS' value='103' displayValue='4' color='#0000ff' />
            <set label='SEP' value='150' displayValue='10' color='#0000ff' />
            <set label='OKT' value='140' displayValue='31' color='#0000ff' />
            <set label='NOV' value='110' displayValue='43' color='#0000ff' />
            <set label='DES' value='183' displayValue='25' color='#0000ff' />
        </chart>";
        echo $chart;
    }

    function g09() {
        $chart = "<chart caption='Rencana vs Realisasi' 
            subcaption='per Pelabuhan Loading 2018'
                                                        
                                                        yAxisName='Nilai' 
showValues='0' 
formatNumberScale='2' 
decimalprecision='2' 
showBorder='0' 
palette='4' 
bgColor='FFFFFF'  
decimalSeparator=','  
thousandSeparator='.' 
exportEnabled='0' 
exportShowMenuItem='0'									
paletteColors='366bf5,c72125' 
smartLineColor='790000' 
baseFontColor='2E4A89' 
plotGradientColor=' '>
<categories><category label='AMURANG' />
<category label='ASAM ASAM' /><category label='BABEL' />
                                            <category label='BANGKA  BARU' /><category label='BARRU' /><category label='BATAM' /><category label='Bukit Asam' /><category label='ENDE  NTT ' /><category label='Galang Batang' /><category label='INDRAMAYU' /><category label='Jeranjang  Lombok ' /><category label='KENDARI' /><category label='KUPANG' /><category label='LABUAN' /><category label='LONTAR' /><category label='NAGAN RAYA' /><category label='Ombilin' /><category label='PACITAN' /><category label='PAITON BARU' /><category label='PAITON PJB' /><category label='Pangkalan Susu' /><category label='PELABUAN RATU' /><category label='REMBANG' /><category label='S LAYA BARU' /><category label='SANGAU  KALBAR  Pontianak' /><category label='Tarahan Baru' /><category label='Teluk Sirih' /><category label='TIDORE' /><category label='TJ AWAR AWAR' /><category label='TJ Balai Karimun' /></categories><dataset SeriesName='Rencana'><set value='15000' link='JavaScript:view_pltu(\"2\");\'/><set value='0' link='JavaScript:view_pltu(\"6\");\'/><set value='5000' link='JavaScript:view_pltu(\"22\");\'/><set value='0' link='JavaScript:view_pltu(\"7\");\'/><set value='37500' link='JavaScript:view_pltu(\"3\");\'/><set value='0' link='JavaScript:view_pltu(\"23\");\'/><set value='0' link='JavaScript:view_pltu(\"27\");\'/><set value='5000' link='JavaScript:view_pltu(\"10\");\'/><set value='0' link='JavaScript:view_pltu(\"26\");\'/><set value='180000' link='JavaScript:view_pltu(\"99\");\'/><set value='45000' link='JavaScript:view_pltu(\"11\");\'/><set value='27500' link='JavaScript:view_pltu(\"16\");\'/><set value='22500' link='JavaScript:view_pltu(\"18\");\'/><set value='105000' link='JavaScript:view_pltu(\"91\");\'/><set value='135000' link='JavaScript:view_pltu(\"97\");\'/><set value='126000' link='JavaScript:view_pltu(\"8\");\'/><set value='0' link='JavaScript:view_pltu(\"28\");\'/><set value='37500' link='JavaScript:view_pltu(\"115\");\'/><set value='176000' link='JavaScript:view_pltu(\"106\");\'/><set value='82500' link='JavaScript:view_pltu(\"121\");\'/><set value='45000' link='JavaScript:view_pltu(\"54\");\'/><set value='165000' link='JavaScript:view_pltu(\"117\");\'/><set value='78500' link='JavaScript:view_pltu(\"103\");\'/><set value='127500' link='JavaScript:view_pltu(\"95\");\'/><set value='10800' link='JavaScript:view_pltu(\"19\");\'/><set value='22500' link='JavaScript:view_pltu(\"1\");\'/><set value='0' link='JavaScript:view_pltu(\"9\");\'/><set value='5000' link='JavaScript:view_pltu(\"21\");\'/><set value='75500' link='JavaScript:view_pltu(\"149\");\'/><set value='16000' link='JavaScript:view_pltu(\"14\");\'/></dataset><dataset SeriesName='Realisasi' renderAs='line'  ><set value='15167.619999999999' link='JavaScript:view_pltu(\"2\");\'/><set value='0' link='JavaScript:view_pltu(\"6\");\'/><set value='4892.609' link='JavaScript:view_pltu(\"22\");\'/><set value='0' link='JavaScript:view_pltu(\"7\");\'/><set value='45330.419' link='JavaScript:view_pltu(\"3\");\'/><set value='29786.184999999998' link='JavaScript:view_pltu(\"23\");\'/><set value='16386.55' link='JavaScript:view_pltu(\"27\");\'/><set value='0' link='JavaScript:view_pltu(\"10\");\'/><set value='37126.71' link='JavaScript:view_pltu(\"26\");\'/><set value='88977.594' link='JavaScript:view_pltu(\"99\");\'/><set value='45457.765' link='JavaScript:view_pltu(\"11\");\'/><set value='37696.973' link='JavaScript:view_pltu(\"16\");\'/><set value='30290.465999999997' link='JavaScript:view_pltu(\"18\");\'/><set value='81810.89499999999' link='JavaScript:view_pltu(\"91\");\'/><set value='105315.52699999999' link='JavaScript:view_pltu(\"97\");\'/><set value='115536.23100000001' link='JavaScript:view_pltu(\"8\");\'/><set value='0' link='JavaScript:view_pltu(\"28\");\'/><set value='23327.959' link='JavaScript:view_pltu(\"115\");\'/><set value='165943.49599999998' link='JavaScript:view_pltu(\"106\");\'/><set value='39834.733' link='JavaScript:view_pltu(\"121\");\'/><set value='46036.417' link='JavaScript:view_pltu(\"54\");\'/><set value='135444.10900000003' link='JavaScript:view_pltu(\"117\");\'/><set value='61653.498999999996' link='JavaScript:view_pltu(\"103\");\'/><set value='99381.41699999999' link='JavaScript:view_pltu(\"95\");\'/><set value='6025.94' link='JavaScript:view_pltu(\"19\");\'/><set value='22814.658' link='JavaScript:view_pltu(\"1\");\'/><set value='0' link='JavaScript:view_pltu(\"9\");\'/><set value='5594.867' link='JavaScript:view_pltu(\"21\");\'/><set value='55104.706999999995' link='JavaScript:view_pltu(\"149\");\'/><set value='8754.596' link='JavaScript:view_pltu(\"14\");\'/></dataset><styles><definition><style name='LegendFont' type='FONT' size='11' color='2E4A89'/><style name='CaptionFont' type='FONT' size='12' bold='1'/><style name='LabelFont' type='FONT' color='2E4A89' bgColor='F0FBFF' bold='1' /><style name='ToolTipFont' type='FONT' bgColor='2E4A89' borderColor='2E4A89' color='FFFFFF'/></definition><application><apply toObject='LEGEND' styles='LegendFont' /><apply toObject='CAPTION' styles='CaptionFont' /><apply toObject='DATALABELS' styles='LabelFont' /><apply toObject='TOOLTIP' styles='ToolTIpFont' /></application></styles></chart>";
        echo $chart;
    }

    function g10() {
        $chart = "<chart caption='Rencana vs Realisasi' 
            subcaption='per Importir 2018'
                                                        xAxisName='Mitra' 
                                                yAxisName='Nilai' 
                                            showValues='0' 
                                            formatNumberScale='2' 
                                                decimalprecision='2' 
                                                showBorder='0' 
                                                    palette='4' 
                                                        bgColor='FFFFFF'  
                                                        decimalSeparator=','  
                                                            thousandSeparator='.' 
                                                            exportEnabled='0' 
                                                    exportShowMenuItem='0'									
                                                    paletteColors='366bf5,c72125' 
                                                            smartLineColor='790000' 
                                                            baseFontColor='2E4A89' 
                                                            plotGradientColor=' '>
                                                            <categories>
                                                                <category label='ABC' />
                                                                <category label='BE' />
                                                                <category label='BMSS' />
                                                                <category label='BPJ' />
                                                                <category label='BSS' />
                                                                <category label='CBJ' />
                                                                <category label='DLJ' />
                                                                <category label='KEA' />
                                                                <category label='KUB' />
                                                                        <category label='LK' />
                                                                        <category label='LKU' />
                                                                        <category label='PCN' />
                                                                        <category label='SBWP' />
                                                                        <category label='SRE' />
                                                                        <category label='TDM' />
                                                                                    <category label='TSJ' />
                                                <category label='UMM' />
                                                </categories>
                                            <dataset SeriesName='Rencana'>
                                        <set value='7500' link='JavaScript:view_mitra(\"190\");\'/>
                                            <set value='20000' link='JavaScript:view_mitra(\"55\");\'/>
                                                <set value='52500' link='JavaScript:view_mitra(\"83\");\'/>
                                                    <set value='52500' link='JavaScript:view_mitra(\"23\");\'/>
                                            <set value='252500' link='JavaScript:view_mitra(\"97\");\'/>
                                            <set value='52500' link='JavaScript:view_mitra(\"25\");\'/>
                                                    <set value='15000' link='JavaScript:view_mitra(\"26\");\'/>.
                                                    <set value='37500' link='JavaScript:view_mitra(\"121\");\'/>
                                                        <set value='27500' link='JavaScript:view_mitra(\"4\");\'/>
                                                        <set value='87500' link='JavaScript:view_mitra(\"2\");\'/>
                                                        <set value='8000' link='JavaScript:view_mitra(\"141\");\'/>
                                                        <set value='37500' link='JavaScript:view_mitra(\"5\");\'/>
                                                        <set value='67500' link='JavaScript:view_mitra(\"1\");\'/>
                                                        <set value='16000' link='JavaScript:view_mitra(\"109\");\'/>
                                                                <set value='33000' link='JavaScript:view_mitra(\"14\");\'/>
                                                                <set value='22500' link='JavaScript:view_mitra(\"115\");\'/>
                                                                <set value='307500' link='JavaScript:view_mitra(\"92\");\'/>
                                                                </dataset><dataset SeriesName='Realisasi' renderAs='line'>
                                                                            <set value='7869.761' link='JavaScript:view_mitra(\"190\");\'/>
                                    <set value='20419.656000000003' link='JavaScript:view_mitra(\"55\");\'/>
                                        <set value='61455.887' link='JavaScript:view_mitra(\"83\");\'/>
                                            <set value='73999.958' link='JavaScript:view_mitra(\"23\");\'/>
                                                <set value='264564.569' link='JavaScript:view_mitra(\"97\");\'/>
                                                    <set value='66992.22099999999' link='JavaScript:view_mitra(\"25\");\'/>
                                            <set value='37601.257000000005' link='JavaScript:view_mitra(\"26\");\'/>
                                            <set value='39834.733' link='JavaScript:view_mitra(\"121\");\'/>
                                                    <set value='37852.966' link='JavaScript:view_mitra(\"4\");\'/>
                                                    <set value='96362.913' link='JavaScript:view_mitra(\"2\");\'/>
                                                        <set value='9523.407' link='JavaScript:view_mitra(\"141\");\'/>
                                                        <set value='45322.23099999999' link='JavaScript:view_mitra(\"5\");\'/>
                                                        <set value='68057.47899999999' link='JavaScript:view_mitra(\"1\");\'/>
                                                        <set value='15636.608' link='JavaScript:view_mitra(\"109\");\'/>
                                                        <set value='33458.397' link='JavaScript:view_mitra(\"14\");\'/>
                                                                <set value='23327.959' link='JavaScript:view_mitra(\"115\");\'/>
                                                                <set value='307928.94800000003' link='JavaScript:view_mitra(\"92\");\'/>
                                                                </dataset>
                                                                <styles>
                                                                <definition>
                                                                            <style name='LegendFont' type='FONT' size='11' color='2E4A89'/>
                                    <style name='CaptionFont' type='FONT' size='12' bold='1'/>
                                        <style name='LabelFont' type='FONT' color='2E4A89' bgColor='F0FBFF' bold='1' />
                                            <style name='ToolTipFont' type='FONT' bgColor='2E4A89' borderColor='2E4A89' color='FFFFFF'/>
                                                </definition><application><apply toObject='LEGEND' styles='LegendFont' />
                                                    <apply toObject='CAPTION' styles='CaptionFont' /><apply toObject='DATALABELS' styles='LabelFont' />
                                            <apply toObject='TOOLTIP' styles='ToolTIpFont' /></application></styles></chart>";
        echo $chart;
    }

    function data01() {
        $data = $this->rpt_rekap_model->get_by(array('thn' => '2015', 'bln' => 'SEP'));
        $chart = '<Chart  
            origW="400" 
            origH="400" 
            bgColor="AEC0CA,FFFFFF" 
            fillAngle="45" 
            upperLimit="2000" 
            lowerLimit="0000" 
            majorTMNumber="10" 
            majorTMHeight="8" 
            showGaugeBorder="0" 
            gaugeOuterRadius="240" 
            gaugeOriginX="200" 
            gaugeOriginY="350" 
            gaugeInnerRadius="2" 
            formatNumberScale="1" 
            numberPrefix="$" 
            displayValueDistance="30" 
            decimalPrecision="2" 
            tickMarkDecimalPrecision="1" 
            pivotRadius="17" 
            showPivotBorder="1" pivotBorderColor="000000" pivotBorderThickness="5" pivotFillMix="FFFFFF,000000">
            <colorRange>
                <color minValue="0" maxValue="500" code="B41527"/>
                <color minValue="501" maxValue="1000" code="E48739"/>
                <color minValue="1001" maxValue="2000" code="399E38"/>
            </colorRange>
            <dials>
                <dial value="' . $data->pendapatan / 1000000 . '" borderAlpha="0" bgColor="000000" baseWidth="28" topWidth="1" radius="130"/>
            </dials>
            <annotations>
                <!--  Draw the background arcs  -->
                <annotationGroup xPos="200" yPos="350" autoscale="1">
                    <annotation type="circle" xPos="0" yPos="2.5" radius="150" startAngle="0" endAngle="180" fillPattern="linear" fillAsGradient="1" fillColor="dddddd,666666" fillAlpha="100,100" fillRatio="50,50" fillDegree="0" showBorder="1" borderColor="444444" borderThickness="2"/>
                    <annotation type="circle" xPos="0" yPos="0" radius="145" startAngle="0" endAngle="180" fillPattern="linear" fillAsGradient="1" fillColor="666666,ffffff" fillAlpha="100,100" fillRatio="50,50" fillDegree="0"/>
                </annotationGroup>
            </annotations>
        </Chart>';
        echo $chart;
    }

    function data02() {
        $data = $this->rpt_rekap_model->get_by(array('thn' => '2015', 'bln' => 'SEP'));
        $chart = '<Chart  
            origW="400" 
            origH="400" 
            bgColor="AEC0CA,FFFFFF" 
            fillAngle="45" 
            upperLimit="2000" 
            lowerLimit="0000" 
            majorTMNumber="10" 
            majorTMHeight="8" 
            showGaugeBorder="0" 
            gaugeOuterRadius="240" 
            gaugeOriginX="200" 
            gaugeOriginY="350" 
            gaugeInnerRadius="2" 
            formatNumberScale="1" 
            numberPrefix="$" 
            displayValueDistance="30" 
            decimalPrecision="2" 
            tickMarkDecimalPrecision="1" 
            pivotRadius="17" 
            showPivotBorder="1" pivotBorderColor="000000" pivotBorderThickness="5" pivotFillMix="FFFFFF,000000">
            <colorRange>
                <color minValue="0" maxValue="500" code="B41527"/>
                <color minValue="501" maxValue="1000" code="E48739"/>
                <color minValue="1001" maxValue="2000" code="399E38"/>
            </colorRange>
            <dials>
                <dial value="' . ($data->iol_vol_ls + $data->iol_vol_nls) / 1000000 . '" borderAlpha="0" bgColor="000000" baseWidth="28" topWidth="1" radius="130"/>
            </dials>
            <annotations>
                <!--  Draw the background arcs  -->
                <annotationGroup xPos="200" yPos="350" autoscale="1">
                    <annotation type="circle" xPos="0" yPos="2.5" radius="150" startAngle="0" endAngle="180" fillPattern="linear" fillAsGradient="1" fillColor="dddddd,666666" fillAlpha="100,100" fillRatio="50,50" fillDegree="0" showBorder="1" borderColor="444444" borderThickness="2"/>
                    <annotation type="circle" xPos="0" yPos="0" radius="145" startAngle="0" endAngle="180" fillPattern="linear" fillAsGradient="1" fillColor="666666,ffffff" fillAlpha="100,100" fillRatio="50,50" fillDegree="0"/>
                </annotationGroup>
            </annotations>
        </Chart>';
        echo $chart;
    }

    function data05() {
        $data = '<chart height="400" caption="Sales in Last Two Years" subcaption="Quarter-wise comparison" xaxisname="Quarter" yaxisname="Sales (In USD)" numberprefix="$" theme="fint">
<categories>
<category label="Q1" />
<category label="Q2" />
<category label="Q3" />
<category label="Q4" />
<category label="Q1" />
<category label="Q2" />
<category label="Q3" />
<category label="Q4" />
<category label="Q1" />
<category label="Q2" />
<category label="Q3" />
<category label="Q4" />
</categories>
<dataset seriesname="Previous Year">
<set value="10000" />
<set value="11500" />
<set value="12500" />
<set value="15000" />
<set value="10000" />
<set value="11500" />
<set value="12500" />
<set value="15000" />
<set value="10000" />
<set value="11500" />
<set value="12500" />
<set value="15000" />
</dataset>
<dataset seriesname="Current Year">
<set value="25400" />
<set value="29800" />
<set value="21800" />
<set value="26800" />
<set value="25400" />
<set value="29800" />
<set value="21800" />
<set value="26800" />
<set value="25400" />
<set value="29800" />
<set value="21800" />
<set value="26800" />
</dataset>
</chart>';
        echo $data;
    }

    function data_gn01() {
        $chart = '<chart caption="Manajemen Proyek Inventarisasi Aset PT. Pegadaian" subcaption="Planned vs Actual" dateformat="dd/mm/yyyy" outputdateformat="ddds mns yy" ganttwidthpercent="70" ganttpaneduration="50" ganttpanedurationunit="d" plottooltext="$processName{br} $label starting date $start{br}$label ending date $end" theme="fint">
<categories bgcolor="#33bdda">
<category start="1/4/2014" end="30/6/2014" label="Months" align="middle" fontcolor="#ffffff" fontsize="16" />
</categories>
<categories bgcolor="#33bdda" align="middle" fontcolor="#ffffff" fontsize="16">
<category start="1/4/2014" end="30/4/2014" label="April" />
<category start="1/5/2014" end="31/5/2014" label="May" />
<category start="1/6/2014" end="30/6/2014" label="June" />
</categories>
<categories bgcolor="#ffffff" fontcolor="#1288dd" fontsize="12" isbold="1" align="center">
<category start="1/4/2014" end="5/4/2014" label="Week 1" />
<category start="6/4/2014" end="12/4/2014" label="Week 2" />
<category start="13/4/2014" end="19/4/2014" label="Week 3" />
<category start="20/4/2014" end="26/4/2014" label="Week 4" />
<category start="27/4/2014" end="3/5/2014" label="Week 5" />
<category start="4/5/2014" end="10/5/2014" label="Week 6" />
<category start="11/5/2014" end="17/5/2014" label="Week 7" />
<category start="18/5/2014" end="24/5/2014" label="Week 8" />
<category start="25/5/2014" end="31/5/2014" label="Week 9" />
<category start="1/6/2014" end="7/6/2014" label="Week 10" />
<category start="8/6/2014" end="14/6/2014" label="Week 11" />
<category start="15/6/2014" end="21/6/2014" label="Week 12" />
<category start="22/6/2014" end="28/6/2014" label="Week 13" />
</categories>
<processes headertext="Task" fontcolor="#000000" fontsize="11" isanimated="1" bgcolor="#6baa01" headervalign="bottom" headeralign="left" headerbgcolor="#6baa01" headerfontcolor="#ffffff" headerfontsize="16" align="left" isbold="1" bgalpha="25">
<process label="Koordinasi dg PT. Pegadaian" id="1" />
<process label="Pengumpulan data" id="2" hoverbandcolor="#e44a00" hoverbandalpha="40" />
<process label="Identifikasi Lokasi" id="3" hoverbandcolor="#e44a00" hoverbandalpha="40" />
<process label="Koordinasi dg Cabang" id="4" hoverbandcolor="#e44a00" hoverbandalpha="40" />
<process label="Koordinasi dg KJPP" id="5" hoverbandcolor="#e44a00" hoverbandalpha="40" />
<process label="Persiapan SDM" id="6" hoverbandcolor="#e44a00" hoverbandalpha="40" />
<process label="Pengarahan" id="7" />
<process label="Persiapan Adm" id="8" />
<process label="Cetak Barcode" id="9" hoverbandcolor="#e44a00" hoverbandalpha="40" />
<process label="Pembuatan Aplikasi" id="10" hoverbandcolor="#e44a00" hoverbandalpha="40" />
<process label="Mob-Demob HO ke Cabang" id="11" />
<process label="Mob-Demob Cabang ke Lokasi" id="12" />
<process label="Survei " id="13" />
<process label="Entri Data" id="14" />
<process label="Pembuatan Laporan" id="15" />
<process label="Laporan Akhir" id="16" />
</processes>
<datatable showprocessname="1" namealign="left" fontcolor="#000000" fontsize="10" valign="right" align="center" headervalign="bottom" headeralign="center" headerbgcolor="#008ee4" headerfontcolor="#ffffff" headerfontsize="14">
<datacolumn bgcolor="#eeeeee" headertext="Actual{br}Start{br}Date">
<text label="9/4/2014" />
<text label="13/4/2014" />
<text label="26/4/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="4/5/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="6/5/2014" />
<text label="5/5/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="11/5/2014" />
<text label="16/5/2014" />
<text label="16/5/2014" />
<text label="21/5/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="25/5/2014" />
<text label="28/5/2014" />
<text label="4/6/2014" />
<text label="4/6/2014" />
<text label="4/6/2014" />
<text label="2/6/2014" />
<text label="5/6/2014" />
<text label="18/6/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="16/6/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="23/6/2014" />
<text label="18/6/2014" />
<text label="25/6/2014" />
</datacolumn>
<datacolumn bgcolor="#eeeeee" headertext="Actual{br}End{br}Date">
<text label="12/4/2014" />
<text label="25/4/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="4/5/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="10/5/2014" />
<text label="10/5/2014" />
<text label="11/5/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="14/5/2014" />
<text label="19/5/2014" />
<text label="21/5/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="24/5/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="27/5/2014" />
<text label="1/6/2014" />
<text label="6/6/2014" />
<text label="4/6/2014" />
<text label="4/6/2014" />
<text label="7/6/2014" />
<text label="17/6/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="20/6/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="23/6/2014" />
<text label="23/6/2014" />
<text label="23/6/2014" bgcolor="#e44a00" bgalpha="40" />
<text label="28/6/2014" />
</datacolumn>
</datatable>
<tasks>
<task label="Planned" processid="1" start="9/4/2014" end="12/4/2014" id="1-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="1" start="9/4/2014" end="12/4/2014" id="1" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="2" start="13/4/2014" end="23/4/2014" id="2-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="2" start="13/4/2014" end="25/4/2014" id="2" color="#6baa01" toppadding="56%" height="32%" />
<task label="Delay" processid="2" start="23/4/2014" end="25/4/2014" id="2-2" color="#e44a00" toppadding="56%" height="32%" tooltext="Delayed by 2 days." />
<task label="Planned" processid="3" start="23/4/2014" end="30/4/2014" id="3-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="3" start="26/4/2014" end="4/5/2014" id="3" color="#6baa01" toppadding="56%" height="32%" />
<task label="Delay" processid="3" start="3/5/2014" end="4/5/2014" id="3-2" color="#e44a00" toppadding="56%" height="32%" tooltext="Delayed by 1 days." />
<task label="Planned" processid="4" start="3/5/2014" end="10/5/2014" id="4-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="4" start="4/5/2014" end="10/5/2014" id="4" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="5" start="6/5/2014" end="11/5/2014" id="5-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="5" start="6/5/2014" end="10/5/2014" id="5" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="6" start="4/5/2014" end="7/5/2014" id="6-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="6" start="5/5/2014" end="11/5/2014" id="6" color="#6baa01" toppadding="56%" height="32%" />
<task label="Delay" processid="6" start="7/5/2014" end="11/5/2014" id="6-2" color="#e44a00" toppadding="56%" height="32%" tooltext="Delayed by 4 days." />
<task label="Planned" processid="7" start="11/5/2014" end="14/5/2014" id="7-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="7" start="11/5/2014" end="14/5/2014" id="7" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="8" start="16/5/2014" end="19/5/2014" id="8-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="8" start="16/5/2014" end="19/5/2014" id="8" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="9" start="16/5/2014" end="18/5/2014" id="9-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="9" start="16/5/2014" end="21/5/2014" id="9" color="#6baa01" toppadding="56%" height="32%" />
<task label="Delay" processid="9" start="18/5/2014" end="21/5/2014" id="9-2" color="#e44a00" toppadding="56%" height="32%" tooltext="Delayed by 3 days." />
<task label="Planned" processid="10" start="20/5/2014" end="23/5/2014" id="10-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="10" start="21/5/2014" end="24/5/2014" id="10" color="#6baa01" toppadding="56%" height="32%" />
<task label="Delay" processid="10" start="23/5/2014" end="24/5/2014" id="10-2" color="#e44a00" toppadding="56%" height="32%" tooltext="Delayed by 1 days." />
<task label="Planned" processid="11" start="25/5/2014" end="27/5/2014" id="11-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="11" start="25/5/2014" end="27/5/2014" id="11" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="12" start="28/5/2014" end="1/6/2014" id="12-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="12" start="28/5/2014" end="1/6/2014" id="12" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="13" start="4/6/2014" end="6/6/2014" id="13-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="13" start="4/6/2014" end="6/6/2014" id="13" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="14" start="4/6/2014" end="4/6/2014" id="14-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="14" start="4/6/2014" end="4/6/2014" id="14" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="15" start="4/6/2014" end="4/6/2014" id="15-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="15" start="4/6/2014" end="4/6/2014" id="15" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="16" start="2/6/2014" end="7/6/2014" id="16-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="16" start="2/6/2014" end="7/6/2014" id="16" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="17" start="5/6/2014" end="10/6/2014" id="17-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="17" start="5/6/2014" end="17/6/2014" id="17" color="#6baa01" toppadding="56%" height="32%" />
<task label="Delay" processid="17" start="10/6/2014" end="17/6/2014" id="17-2" color="#e44a00" toppadding="56%" height="32%" tooltext="Delayed by 7 days." />
<task label="Planned" processid="18" start="10/6/2014" end="12/6/2014" id="18-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Delay" processid="18" start="18/6/2014" end="20/6/2014" id="18" color="#e44a00" toppadding="56%" height="32%" tooltext="Delayed by 8 days." />
<task label="Planned" processid="19" start="15/6/2014" end="23/6/2014" id="19-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="19" start="16/6/2014" end="23/6/2014" id="19" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="20" start="23/6/2014" end="23/6/2014" id="20-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="20" start="23/6/2014" end="23/6/2014" id="20" color="#6baa01" toppadding="56%" height="32%" />
<task label="Planned" processid="21" start="18/6/2014" end="21/6/2014" id="21-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="21" start="18/6/2014" end="23/6/2014" id="21" color="#6baa01" toppadding="56%" height="32%" />
<task label="Delay" processid="21" start="21/6/2014" end="23/6/2014" id="21-2" color="#e44a00" toppadding="56%" height="32%" tooltext="Delayed by 2 days." />
<task label="Planned" processid="22" start="24/6/2014" end="28/6/2014" id="22-1" color="#008ee4" height="32%" toppadding="12%" />
<task label="Actual" processid="22" start="25/6/2014" end="28/6/2014" id="22" color="#6baa01" toppadding="56%" height="32%" />
</tasks>
<connectors>
<connector fromtaskid="1" totaskid="2" color="#008ee4" thickness="2" fromtaskconnectstart_="1" />
<connector fromtaskid="2-2" totaskid="3" color="#008ee4" thickness="2" />
<connector fromtaskid="3-2" totaskid="4" color="#008ee4" thickness="2" />
<connector fromtaskid="3-2" totaskid="6" color="#008ee4" thickness="2" />
<connector fromtaskid="7" totaskid="8" color="#008ee4" thickness="2" />
<connector fromtaskid="7" totaskid="9" color="#008ee4" thickness="2" />
<connector fromtaskid="12" totaskid="16" color="#008ee4" thickness="2" />
<connector fromtaskid="12" totaskid="17" color="#008ee4" thickness="2" />
<connector fromtaskid="17-2" totaskid="18" color="#008ee4" thickness="2" />
<connector fromtaskid="19" totaskid="22" color="#008ee4" thickness="2" />
</connectors>
<milestones>
<milestone date="2/6/2014" taskid="12" color="#f8bd19" shape="star" tooltext="Completion of Phase 1" />
</milestones>
<legend>
<item label="Planned" color="#008ee4" />
<item label="Actual" color="#6baa01" />
<item label="Slack (Delay)" color="#e44a00" />
</legend>
</chart>';
        echo $chart;
    }

    function data_pie01() {
        $data = '<chart caption="Age profile of website visitors" subcaption="" startingangle="120" showlabels="0" showlegend="1" enablemultislicing="0" slicingdistance="15" showpercentvalues="1" showpercentintooltip="0" plottooltext="Age group : $label<br>Total visit : $datavalue" theme="fint">
<set label="Teenage" value="1250400" />
<set label="Adult" value="1463300" />
<set label="Mid-age" value="1050700" />
<set label="Senior" value="491000" />
</chart>';
        echo $data;
    }

    function data_grafik_032() {
        $data = $this->rpt_rekap_model->get_all();

        $chart = "
            <chart caption='Progres Survei Bagian Timur' 
                xAxisName='AREA' 
                yAxisName='Jumlah' 
                showValues='0' 
                formatNumberScale='2' 
                decimalprecision='2' 
                showBorder='0' 
                palette='4' 
                bgColor='FFFFFF'  
                decimalSeparator=','  
                thousandSeparator='.' 
                exportEnabled='0' 
                exportShowMenuItem='0' 
                paletteColors='366bf5,c72125' 
                smartLineColor='790000' 
                baseFontColor='2E4A89' 
                plotGradientColor=' '>
                <categories>
                    <category label='AMB' />
                    <category label='BTG' />
                    <category label='GOR' />
                    <category label='JPR' />
                    <category label='KDR' />
                    <category label='MKS1' />
                    <category label='MKS2' />
                    <category label='MND1' />
                    <category label='MND2' />
                    <category label='PLP' />
                    <category label='PLU' />
                    <category label='SOR' />
                </categories>";

        $series1 = "<dataset SeriesName='CABANG'>";
        $series2 = "<dataset SeriesName='UPC'>";
        foreach ($data as $row) {
            $series1 .= "<set value='" . $row->iol_bg_vol_ls . "'/>";
            $series2 .= "<set value='" . $row->iol_bg_vol_nls . "'/>";
        }
        $series1 .= "</dataset>";
        $series2 .= "</dataset>";

        $series3 = "<dataset SeriesName='Target' renderAs='line'  >
                    <set value='5' />
                    <set value='7' />
                    <set value='5' />
                    <set value='3' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                </dataset>";

        $styles = "<styles>
                        <definition>
                            <style name='LegendFont' type='FONT' size='11' color='2E4A89'/>
                            <style name='CaptionFont' type='FONT' size='12' bold='1'/>
                            <style name='LabelFont' type='FONT' color='2E4A89' bgColor='F0FBFF' bold='1' />
                            <style name='ToolTipFont' type='FONT' bgColor='2E4A89' borderColor='2E4A89' color='FFFFFF'/>
                        </definition>
                        <application>
                            <apply toObject='LEGEND' styles='LegendFont' />
                            <apply toObject='CAPTION' styles='CaptionFont' />
                            <apply toObject='DATALABELS' styles='LabelFont' />
                            <apply toObject='TOOLTIP' styles='ToolTIpFont' />
                        </application>
                    </styles>
                </chart>";

        $grafik = $chart . $series1 . $series2 . $series3 . $styles;

        echo $grafik;
    }

    function data_grafik_031() {
        $data = $this->rpt_rekap_model->get_all();

        $chart = "
            <chart caption='Progres Survei Bagian Barat' 
                xAxisName='Kanwil' 
                yAxisName='Jumlah' 
                showValues='0' 
                formatNumberScale='2' 
                decimalprecision='2' 
                showBorder='0' 
                palette='4' 
                bgColor='FFFFFF'  
                decimalSeparator=','  
                thousandSeparator='.' 
                exportEnabled='0' 
                exportShowMenuItem='0' 
                paletteColors='#009a8c,#9cc833' 
                smartLineColor='790000' 
                baseFontColor='FFFFFF' 
                plotGradientColor=' '>
                <categories>
                    <category label='JKT1' />
                    <category label='JKT2' />
                    <category label='JKT3' />
                    <category label='BDG' />
                    <category label='MDN' />
                    <category label='PBG' />
                    <category label='PKU' />
                    <category label='SMG' />
                    <category label='SBY' />
                </categories>";

        $series1 = "<dataset SeriesName='Cabang'>";
        $series2 = "<dataset SeriesName='UPC'>";
        foreach ($data as $row) {
            $series1 .= "<set value='" . $row->pendapatan . "'/>";
            $series2 .= "<set value='" . $row->pengeluaran . "'/>";
        }
        $series1 .= "</dataset>";
        $series2 .= "</dataset>";

        $series3 = "";

        $styles = "<styles>
                        <definition>
                            <style name='LegendFont' type='FONT' size='11' color='2E4A89'/>
                            <style name='CaptionFont' type='FONT' size='12' bold='1'/>
                            <style name='LabelFont' type='FONT' color='2E4A89' bgColor='F0FBFF' bold='1' />
                            <style name='ToolTipFont' type='FONT' bgColor='2E4A89' borderColor='2E4A89' color='FFFFFF'/>
                        </definition>
                        <application>
                            <apply toObject='LEGEND' styles='LegendFont' />
                            <apply toObject='CAPTION' styles='CaptionFont' />
                            <apply toObject='DATALABELS' styles='LabelFont' />
                            <apply toObject='TOOLTIP' styles='ToolTIpFont' />
                        </application>
                    </styles>
                </chart>";
        $series3 = "<dataset SeriesName='Target' renderAs='line'  >
                    <set value='5' />
                    <set value='7' />
                    <set value='5' />
                    <set value='3' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                    <set value='5' />
                </dataset>";

        $grafik = $chart . $series1 . $series2 . $series3 . $styles;

        echo $grafik;
    }

    function data_04() {
        $grafik = ' 
        <chart 
            caption="Harrys SuperMart - Comparison of yearly sales " 
            subcaption="2015 v 2014" 
            numberprefix="$" 
            bgColor="FFFFFF"
            plotgradientcolor="" 
            divlinecolor="CCCCCC" 
            showvalues="0" 
            captionpadding="30" 
                smartLineColor="790000"
            
            palettecolors="#009a8c,#9cc833" 
            plottooltext="$seriesname Month : $label Sales : $$value" >
            <categories>
                <category label="Jan" />
                <category label="Feb" />
                <category label="Mar" />
                <category label="Apr" />
                <category label="May" />
                <category label="Jun" />
                <category label="Jul" />
                <category label="Aug" />
                <category label="Sep" />
                <category label="Oct" />
                <category label="Nov" />
                <category label="Dec" />
            </categories>
            <dataset seriesname="2015">
                <set value="22400" />
                <set value="24800" />
                <set value="21800" />
                <set value="21800" />
                <set value="24600" />
                <set value="27600" />
                <set value="26800" />
                <set value="27700" />
                <set value="23700" />
                <set value="25900" />
                <set value="26800" />
                <set value="24800" />
            </dataset>
            <dataset seriesname="2014">
                <set value="10000" />
                <set value="11500" />
                <set value="12500" />
                <set value="15000" />
                <set value="16000" />
                <set value="17600" />
                <set value="18800" />
                <set value="19700" />
                <set value="21700" />
                <set value="21900" />
                <set value="22900" />
                <set value="20800" />
            </dataset>
        </chart>
        ';
        echo $grafik;
    }

    function data_05() {
        $data = "<chart 
                    caption='Business Results 2005 v 2006' 
                    xAxisName='Month' 
                    yAxisName='Revenue' 
                    showValues='0' 
                    numberPrefix='$'
                    plotgradientcolor='' 
                    divlinecolor='CCCCCC'
                    showvalues='0' 
                    captionpadding='30' 
                    palettecolors='#f8bd19,#008ee4' 
                    theme='zune'
                    >
            <categories>
               <category label='Jan' />
               <category label='Feb' />
               <category label='Mar' />
               <category label='Apr' />
               <category label='May' />
               <category label='Jun' />
               <category label='Jul' />
               <category label='Aug' />
               <category label='Sep' />
               <category label='Oct' />
               <category label='Nov' />
               <category label='Dec' />
            </categories>

            <dataset seriesName='2006'>
               <set value='27400' />
               <set value='29800'/>
               <set value='25800' />
               <set value='26800' />
               <set value='29600' />
               <set value='32600' />
               <set value='31800' />
               <set value='36700' />
               <set value='29700' />
               <set value='31900' />
               <set value='34800' />
               <set value='24800' />
            </dataset>

            <dataset seriesName='2005'>
               <set value='10000'/>
               <set value='11500'/>
               <set value='12500'/>
               <set value='15000'/>
               <set value='11000' />
               <set value='9800' />
               <set value='11800' />
               <set value='19700' />
               <set value='21700' />
               <set value='21900' />
               <set value='22900' />
               <set value='20800' />
            </dataset>
         </chart> ";
        echo $data;
    }

    function data_chart_09() {
        $grafik = "<chart>
    <caption>Comparison of Quarterly Revenue</caption>
    <xAxisname>Quarter</xAxisname>
    <yAxisName>Revenues (In USD)</yAxisName>
    <numberPrefix>$</numberPrefix>
    <plotFillAlpha>80</plotFillAlpha>
    <paletteColors>#0075c2,#1aaf5d</paletteColors>
    <baseFontColor>#333333</baseFontColor>
    <baseFont>Helvetica Neue,Arial</baseFont>
    <captionFontSize>14</captionFontSize>
    <subcaptionFontSize>14</subcaptionFontSize>
    <subcaptionFontBold>0</subcaptionFontBold>
    <showBorder>0</showBorder>
    <bgColor>#ffffff</bgColor>
    <showShadow>0</showShadow>
    <canvasBgColor>#ffffff</canvasBgColor>
    <canvasBorderAlpha>0</canvasBorderAlpha>
    <divlineAlpha>100</divlineAlpha>
    <divlineColor>#999999</divlineColor>
    <divlineThickness>1</divlineThickness>
    <divLineIsDashed>1</divLineIsDashed>
    <divLineDashLen>1</divLineDashLen>
    <divLineGapLen>1</divLineGapLen>
    <usePlotGradientColor>0</usePlotGradientColor>
    <showplotborder>0</showplotborder>
    <valueFontColor>#ffffff</valueFontColor>
    <placeValuesInside>1</placeValuesInside>
    <showHoverEffect>1</showHoverEffect>
    <rotateValues>1</rotateValues>
    <showXAxisLine>1</showXAxisLine>
    <xAxisLineThickness>1</xAxisLineThickness>
    <xAxisLineColor>#999999</xAxisLineColor>
    <showAlternateHGridColor>0</showAlternateHGridColor>
    <legendBgAlpha>0</legendBgAlpha>
    <legendBorderAlpha>0</legendBorderAlpha>
    <legendShadow>0</legendShadow>
    <legendItemFontSize>10</legendItemFontSize>
    <legendItemFontColor>#666666</legendItemFontColor>
  </chart>
  <categories>
    <category>
      <label>Q1</label>
    </category>
    <category>
      <label>Q2</label>
    </category>
    <category>
      <label>Q3</label>
    </category>
    <category>
      <label>Q4</label>
    </category>
  </categories>
  <dataset>
    <seriesname>Previous Year</seriesname>
    <data>
      <value>10000</value>
    </data>
    <data>
      <value>11500</value>
    </data>
    <data>
      <value>12500</value>
    </data>
    <data>
      <value>15000</value>
    </data>
  </dataset>
  <dataset>
    <seriesname>Current Year</seriesname>
    <data>
      <value>25400</value>
    </data>
    <data>
      <value>29800</value>
    </data>
    <data>
      <value>21800</value>
    </data>
    <data>
      <value>26800</value>
    </data>
  </dataset>
  <trendlines>
    <line>
      <startvalue>12250</startvalue>
      <color>#0075c2</color>
      <displayvalue>Previous{br}Average</displayvalue>
      <valueOnRight>1</valueOnRight>
      <thickness>1</thickness>
      <showBelow>1</showBelow>
      <tooltext>Previous year quarterly target  : $13.5K</tooltext>
    </line>
    <line>
      <startvalue>25950</startvalue>
      <color>#1aaf5d</color>
      <displayvalue>Current{br}Average</displayvalue>
      <valueOnRight>1</valueOnRight>
      <thickness>1</thickness>
      <showBelow>1</showBelow>
      <tooltext>Current year quarterly target  : $23K</tooltext>
    </line>
  </trendlines>
  </chart>";
        echo $grafik;
    }

    function data_10() {
        $data = "

<chart>
   <categories>
      <element>
         <category>
            <element>
               <label>Q1</label>
            </element>
            <element>
               <label>Q2</label>
            </element>
            <element>
               <label>Q3</label>
            </element>
            <element>
               <label>Q4</label>
            </element>
         </category>
      </element>
   </categories>
   <chart>
      <baseFont>Helvetica Neue,Arial</baseFont>
      <baseFontColor>#333333</baseFontColor>
      <bgColor>#ffffff</bgColor>
      <canvasBgColor>#ffffff</canvasBgColor>
      <canvasBorderAlpha>0</canvasBorderAlpha>
      <caption>Comparison of Quarterly Revenue</caption>
      <captionFontSize>14</captionFontSize>
      <divLineDashLen>1</divLineDashLen>
      <divLineGapLen>1</divLineGapLen>
      <divLineIsDashed>1</divLineIsDashed>
      <divlineAlpha>100</divlineAlpha>
      <divlineColor>#999999</divlineColor>
      <divlineThickness>1</divlineThickness>
      <legendBgAlpha>0</legendBgAlpha>
      <legendBorderAlpha>0</legendBorderAlpha>
      <legendItemFontColor>#666666</legendItemFontColor>
      <legendItemFontSize>10</legendItemFontSize>
      <legendShadow>0</legendShadow>
      <numberPrefix>$</numberPrefix>
      <paletteColors>#0075c2,#1aaf5d</paletteColors>
      <placeValuesInside>1</placeValuesInside>
      <plotFillAlpha>80</plotFillAlpha>
      <rotateValues>1</rotateValues>
      <showAlternateHGridColor>0</showAlternateHGridColor>
      <showBorder>0</showBorder>
      <showHoverEffect>1</showHoverEffect>
      <showShadow>0</showShadow>
      <showXAxisLine>1</showXAxisLine>
      <showplotborder>0</showplotborder>
      <subcaptionFontBold>0</subcaptionFontBold>
      <subcaptionFontSize>14</subcaptionFontSize>
      <usePlotGradientColor>0</usePlotGradientColor>
      <valueFontColor>#ffffff</valueFontColor>
      <xAxisLineColor>#999999</xAxisLineColor>
      <xAxisLineThickness>1</xAxisLineThickness>
      <xAxisname>Quarter</xAxisname>
      <yAxisName>Revenues (In USD)</yAxisName>
   </chart>
   <dataset>
      <element>
         <data>
            <element>
               <value>10000</value>
            </element>
            <element>
               <value>11500</value>
            </element>
            <element>
               <value>12500</value>
            </element>
            <element>
               <value>15000</value>
            </element>
         </data>
         <seriesname>Previous Year</seriesname>
      </element>
      <element>
         <data>
            <element>
               <value>25400</value>
            </element>
            <element>
               <value>29800</value>
            </element>
            <element>
               <value>21800</value>
            </element>
            <element>
               <value>26800</value>
            </element>
         </data>
         <seriesname>Current Year</seriesname>
      </element>
   </dataset>
   <trendlines>
      <element>
         <line>
            <element>
               <color>#0075c2</color>
               <displayvalue>Previous{br}Average</displayvalue>
               <showBelow>1</showBelow>
               <startvalue>12250</startvalue>
               <thickness>1</thickness>
               <tooltext>Previous year quarterly target  : $13.5K</tooltext>
               <valueOnRight>1</valueOnRight>
            </element>
            <element>
               <color>#1aaf5d</color>
               <displayvalue>Current{br}Average</displayvalue>
               <showBelow>1</showBelow>
               <startvalue>25950</startvalue>
               <thickness>1</thickness>
               <tooltext>Current year quarterly target  : $23K</tooltext>
               <valueOnRight>1</valueOnRight>
            </element>
         </line>
      </element>
   </trendlines>
</chart>

";
        echo $data;
    }

    function get_year_kategori_sector_unit() {
        $rec = $this->aset_model->get_aset();

        $cr = '
                ';
        $tab = '     ';
        $data = '           <chart caption="Proyeksi Pengerjaan" 
                legendposition="right" 
                startingangle="120" 
                showlabels="1" 
                showlegend="1" 
                enablemultislicing="0" 
                slicingdistance="15" 
                showpercentvalues="0" 
                showpercentintooltip="1" theme="fint">
                ' . $cr;


        $kanwil = '';
        $nilai_aset = '';

        $link_1 = '';
        $link_2 = '';
        $link_3 = '';

        $label_1 = '';
        $label_2 = '';
        $label_3 = '';

        foreach ($rec as $row) {
            if (!is_null($row->kanwil) && is_null($row->induk)) {

                $color = '#7CFC00';

                $label_1 .= "<set label='" . $row->kanwil . "' value='" . $row->nilai_aset . "' link='newchart-xml-" . $row->kanwil . "' color='" . $color . "'/>" . $cr;
                $link_2 .= '<linkeddata id="' . $row->kanwil . '">
                    <chart caption="' . $row->kanwil . '" theme="fint" rotatevalues="0" plottooltext="$label, $dataValue">' .
                        $cr . $label_2 . $cr . $link_3 .
                        $cr . $tab .
                        '</chart>
            </linkeddata>' . $cr;
                if (is_null($row->induk)) {
                    $label_2 = '';
                }
            } else {
                if (!is_null($row->induk) && is_null($row->unit)) {
                    $label_2 .= $tab . $tab . '<set label="' . $induk . '" value="' . $row->nilai_aset . '" link="newchart-xml-' . $induk . '"/>' . $cr;
                    $link_3 .= $tab . $tab . '<linkeddata id="' . $row->induk . '">
                                <chart caption="' . $row->induk . '"  theme="ocean" rotatevalues="0" plottooltext="$label, $dataValue">' .
                            $cr . $label_3 .
                            '                </chart>
                          </linkeddata>' . $cr;
                    if (is_null($row->unit)) {
                        $label_3 = '';
                    }
                } else {
                    $label_3 .= $tab . $tab . $tab . $tab . "<set label='" . $row->unit . "' value='" . $row->nilai_aset . "' />" . $cr;
                }

                $jml = $row->jml;
                $kanwil = $row->kanwil;
                $induk = $row->induk;
                $nilai_aset = $row->nilai_aset;
            }
        }


        $data .= $cr . $label_1 . $cr . $link_2 . "</chart>";
        echo $data;
//        echo '<pre>';
//        print_r($rec);
    }

    function data_ia_02() {
        $data = $this->aset_model->get_sum_by_kanwil();

        $chart = '<chart caption="Persentase Progres" 
            subcaption="" 
            startingangle="120" 
            showlabels="1" 
            showlegend="1" 
            enablemultislicing="0" 
            slicingdistance="15" 
            showpercentvalues="1" 
            palettecolors="#91AF64,#B0BF92,#D0DFA3,#E0F0E0" 
            
            showborder="0"
            showpercentintooltip="1" 
            bgcolor="#FFFFFF" 
            theme="fint">';
        foreach ($data as $row) {
            $chart .= "<set value='" . $row->persen . "' label='" . $row->kanwil . "'/>";
        }
        $chart .= '</chart>';
        echo $chart;
    }

    function data_ia_01() {
        $data = $this->aset_model->get_status();
        $chart = '<chart 
            caption="Progress Keseluruhan" 
            bgcolor="#FFFFFF" 
            pieyscale="30" 
            smartlinecolor="7D8892" 
            smartlinethickness="2" 
            showpercentvalues="1" 
            showpercentintooltip="0" 
            startAngle="90"
            palettecolors="#91AF64,#B0BF92,#D0DFA3,#E0F0E0" 
            showlegend="1" 
            legendshadow="1" 
            legendborderalpha="0" 
            showborder="0">';
        foreach ($data as $row) {
            $chart .= "<set value='" . $row->jml . "' label='" . $row->status . "'/>";
        }
        $chart .= '</chart>';
        echo $chart;
    }

    function data_ia_03() {
        $chart = '<chart caption="Sales by country" bgcolor="#FFFFFF" pieyscale="50" smartlinecolor="7D8892" smartlinethickness="2" showpercentvalues="1" showpercentintooltip="0" palettecolors="#91AF64,#B0BF92,#D0DFA3,#E0F0E0" showlegend="1" legendshadow="1" legendborderalpha="0" showborder="0">
<set value="243" label="USA" />
<set value="207" label="UK" />
<set value="82" label="Canada" />
<set value="65" label="France" />
</chart>';
        echo $chart;
    }

    function g20() {
        $data = $this->query_model->get_ls_01();
        //print_r($data);

        $hs = '';
        $dataset = '';
        foreach ($data as $row) {

            $dataset .= '<dataset seriesname="' . $row->hs_code . '-' . $row->hs_produk . '"> 
                        ';
            $dataset .= '<set value="' . $row->nil_2015/1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->nil_2016 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->nil_2017 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->nil_2018 / 1000000 . '" />
                        ';
            $dataset .= '</dataset>
                    ';
        }
//        

        $chart = '<chart 
                    caption="Total Nilai Impor Tiap Tahun per HS Code" 
                    subcaption="dalam Juta" 
                    showvalues="0" 
                    yAxisName="Nilai Impor (dalam jutaan)" 
                    plotSpacePercent="50"
                    plotfillalpha="95" formatnumberscale="0" showborder="0">
<categories>
<category label="2015" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="2016" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="2017" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="2018" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
</categories>' . $dataset . '</chart>';
        echo $chart;
    }

    function g21() {
        $chart = '<chart 
                    caption="Total Impor per Bulan" 
                    subcaption="Tahun 2017" 
                    showvalues="0" 
                    plotSpacePercent="50"
                    palettecolors="#91AF64,#B0BF92,#D0DFA3,#E0F0E0" 
                    plotfillalpha="95" formatnumberscale="0" showborder="0">
<categories>
<category label="2015" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="2016" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="2017" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="2018" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
</categories>
<dataset seriesname="2207100000">
<set value="102028575.18" />
<set value="102028575.18" />
<set value="102028575.18" />
<set value="102028575.18" />
<set value="102028575.18" />
<set value="102028575.18" />
<set value="102028575.18" />
<set value="102028575.18" />
</dataset>
<dataset seriesname="2207201900">
<set value="154400.00" />
<set value="154400.00" />
<set value="154400.00" />
<set value="154400.00" />
<set value="154400.00" />
</dataset>
<dataset seriesname="2207209000">
<set value="635580.60" />
<set value="635580.60" />
<set value="635580.60" />
<set value="635580.60" />
</dataset>
<dataset seriesname="2709001000">
<set value="20657084692.68" />
</dataset>
</chart>';
        echo $chart;
    }

    function g22() {
        $data = $this->query_model->get_ls_02();
        //print_r($data);

        $hs = '';
        $dataset = '';
        foreach ($data as $row) {
            $dataset .= '<dataset seriesname="' . $row->hs_code . '-' . $row->hs_produk . '"> 
                        ';
            $dataset .= '<set value="' . $row->bln_01 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_02 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_03 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_04 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_05 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_06 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_07 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_08 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_09 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_10 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_11 / 1000000 . '" />
                        ';
            $dataset .= '<set value="' . $row->bln_12 / 1000000 . '" />
                        ';
            $dataset .= '</dataset>
                    ';
        }
        $chart = '<chart 
                    caption="Total Nilai Impor per Bulan Tahun 2018" 
                    subcaption="dalam Jutaan" 
                    showvalues="0" 
                    yAxisName="Nilai Impor (dalam jutaan)" 
                    plotSpacePercent="50"
                    plotfillalpha="95" formatnumberscale="0" showborder="0">
<categories>
<category label="Jan" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Feb" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Mar" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Apr" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Mei" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Jun" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Jul" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Ags" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Sep" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Okt" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Nov" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Des" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
</categories>' . $dataset . '</chart>';
        echo $chart;
    }

    function g23() {
        $data = $this->query_model->get_ls_02();
        //print_r($data);

        $hs = '';
        $dataset = '';
        foreach ($data as $row) {
            $dataset .= '<dataset seriesname="' . $row->hs_code . '-' . $row->hs_produk . '"> 
                        ';
            $val = $row->bln_01 / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($row->bln_01 + $row->bln_02) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($row->bln_01 + $row->bln_02 + $row->bln_03) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($row->bln_01 + $row->bln_02 + $row->bln_03 + $row->bln_04) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($row->bln_01 + $row->bln_02 + $row->bln_03 + $row->bln_04 + $row->bln_05) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($val + $row->bln_06) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($val + $row->bln_07) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($val + $row->bln_08) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($val + $row->bln_09) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($val + $row->bln_10) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($val + $row->bln_11) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $val = ($val + $row->bln_12) / 1000000;
            $dataset .= '<set value="' . $val . '" />
                        ';
            $dataset .= '</dataset>
                    ';
        }
        $chart = '<chart 
                    caption="Total Nilai Impor sampai dengan Bulan Tahun 2018" 
                    subcaption="Dalam Jutaan" 
                    yAxisName="Nilai Impor (dalam jutaan)" 
                    showvalues="0" 
                    plotSpacePercent="50"
                    plotfillalpha="95" formatnumberscale="0" showborder="0">
<categories>
<category label="Jan" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Feb" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Mar" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Apr" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Mei" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Jun" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Jul" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Ags" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Sep" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Okt" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Nov" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
<category label="Des" stepskipped="false" appliedsmartlabel="true" labeltooltext="" />
</categories>' . $dataset . '</chart>';
        echo $chart;
    }

}
