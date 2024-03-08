<?php

class lime_survei_model extends My_Model {

    public $primary_key = 'id';

    function __construct() {
        parent::__construct();
    }

    function get_cube($parameter) {
        $parameter = func_get_args();
        $field = '';
        foreach ($parameter[0] as $row) {
            $field.=$row . ',';
        }
        $field = substr($field, 0, strlen($field) - 1);

        $query = '
                select ' . $field . ', count(*) jml
        from
	(
		SELECT
			967199X17X170 UNIT,
			967199X17X171 JABATAN,
			967199X17X172 USIA,
			967199X17X314 JENKEL
		FROM
			lime_survey_967199 a
		WHERE
			lastpage = 5
	) a
        GROUP BY ' . $field . '
        ORDER BY ' . $field;

        // yang null dibuang
        return $this->db->query($query)->result();
    }

    function get_partisipan_by_unit() {


        $ssql = " 
                SELECT
                    967199X17X170 unit,
                    id,
                    967199X17X171 jabatan,
                    967199X17X172 lamakerja,
                    967199X17X314 jenkel,
                    count(*) jml
            FROM
                    lime_survey_967199 a
            WHERE
                    967199X17X170 != ''
            AND 967199X17X170 IS NOT NULL
            AND lastpage = 5
            GROUP BY
                    unit
            ORDER BY
                    unit";
        $row = $this->db->query($ssql)->result();


        $cr = '
                ';
        $tab = '     ';
        $data = '           <chart caption="Proyeksi Revenue" 
                legendposition="right" 
                color = "#0"
                startingangle="120" 
                showlabels="1" 
                showlegend="1" 
                enablemultislicing="0" 
                slicingdistance="15" 
                showpercentvalues="0" 
                showpercentintooltip="1" theme="ocean">
                ' . $cr;

        $kategori = '';
        $estimasi_revenue = '';

        $link_1 = '';
        $link_2 = '';
        $link_3 = '';

        $label_1 = '';
        $label_2 = '';
        $label_3 = '';

        foreach ($rec as $row) {
            $label_1.="<set label='" . $row->unit . "' value='" . $row->jml . "' link='newchart-xml-" . $row->unit . "' />" . $cr;
        }


        $data.=$cr . $label_1 . $cr . $link_2 . "</chart>";


        return $data;
    }

    
    function grafik01() {
        $column='';

        $ssql = "select id, kode, nama, jml_tetap, sum(partisipan) jml, sum(partisipan)/jml_tetap*100 persen from (
        select a.id, a.kode, jml_tetap, a.nama, IF(isnull(b.unit),0,1) partisipan from tbl_unit_kerja a
        left join vw_hasil_survei b on b.unit=a.kode) a
        where jml_tetap>0 
        group by nama
        order by id";
        $data = $this->db->query($ssql)->result();
        foreach ($data as $row) {
            if($row->persen<=100) $color='#3eb308';
            if($row->persen<60) $color='#f0d817';
            if($row->persen<30) $color='#e20d0d';
            
#e20d0d	(226,13,13)
#f0d817	(240,216,23)
#3eb308	(62,179,8)            
            
            $palettecolors="#0075c2,#f45b00,#8e0000" ;
            $column.="<set label='" . $row->kode . "' value='" . $row->persen . "' color='".$color."' tooltext='".$row->nama.":". $row->jml." dari ".$row->jml_tetap.", ".round($row->persen,0)."%' />";
        }

         


        $header = '<chart caption="Monthly revenue for last year" subcaption="Harry&#39;s SuperMart" xaxisname="Month" yaxisname="Revenues (In USD)" palettecolors="#0075c2" valuefontcolor="#ffffff" basefont="Helvetica Neue,Arial" captionfontsize="14" subcaptionfontsize="14" subcaptionfontbold="0" placevaluesinside="1" rotatevalues="1" showshadow="0" divlinecolor="#999999" divlinedashed="1" divlinethickness="1" divlinedashlen="1" canvasbgcolor="#ffffff">';
        $header="            <chart caption='Jumlah Kuesioner Terisi' subcaption='dalam persen' 
                xAxisName='Unit Kerja' 
                yAxisName='Pegawai (%)' 
                yAxisMaxValue='100'
                showValues='0' 
                formatNumberScale='1' 
                decimalprecision='0' 
                adjustDiv='1' 
                showBorder='0' 
                palette='4' 
                bgColor='FFFFFF'  
                decimalSeparator=','  
                thousandSeparator='.' 
                exportEnabled='1'  
                exportShowMenuItem='1'
                paletteColors='366bf5,c72125' 
                smartLineColor='790000' 
                baseFontColor='2E4A89' 
                plotGradientColor=' '>
    <colorrange minvalue='0' startlabel='Low' endlabel='High' code='#FF4411' >
        <color maxvalue='25' code='#FFDD44' displayvalue='Median' />
        <color maxvalue='100' code='#6baa01' />
    </colorrange>
                
";
        
        return $header.$column.'</chart>';
    }


    function grafik02() {
        $grafik = "<chart caption='' 
            xAxisName='SAMPLE' 
            yAxisName='Quantity (MT)' 
            showValues='0' 
            formatNumberScale='2' 
            decimalprecision='2' showBorder='0' palette='4' bgColor='FFFFFF'  decimalSeparator=','  thousandSeparator='.' exportEnabled='0' exportShowMenuItem='0'									paletteColors='366bf5,c72125' smartLineColor='790000' baseFontColor='2E4A89' plotGradientColor=' '>
            <categories>
                <category label='JAN' />
                <category label='FEB' />
                <category label='MAR' />
                <category label='APR' />
                <category label='MEI' />
                <category label='JUN' />
                <category label='JUL' />
                <category label='AUG' />
                <category label='SEP' />
                <category label='OKT' />
                <category label='NOP' />
                <category label='DES' />
                </categories>
                <dataset SeriesName='Rencana'>
                    <set value='37500' link='JavaScript:view_pltu(\"115\");\'/>
                    <set value='176000' link='JavaScript:view_pltu(\"106\");\'/>
                    <set value='82500' link='JavaScript:view_pltu(\"121\");\'/>
                    <set value='45000' link='JavaScript:view_pltu(\"54\");\'/>
                    <set value='165000' link='JavaScript:view_pltu(\"117\");\'/>
                    <set value='78500' link='JavaScript:view_pltu(\"103\");\'/>
                    <set value='127500' link='JavaScript:view_pltu(\"95\");\'/>
                    <set value='10800' link='JavaScript:view_pltu(\"19\");\'/>
                    <set value='22500' link='JavaScript:view_pltu(\"1\");\'/>
                    <set value='5000' link='JavaScript:view_pltu(\"21\");\'/>
                    <set value='75500' link='JavaScript:view_pltu(\"149\");\'/>
                    <set value='16000' link='JavaScript:view_pltu(\"14\");\'/>
                </dataset>
                <dataset SeriesName='Realisasi' renderAs='line'  >
                    <set value='30290.465999999997' link='JavaScript:view_pltu(\"18\");\'/>
                    <set value='81810.89499999999' link='JavaScript:view_pltu(\"91\");\'/>
                    <set value='105315.52699999999' link='JavaScript:view_pltu(\"97\");\'/>
                    <set value='115536.23100000001' link='JavaScript:view_pltu(\"8\");\'/>
                    <set value='23327.959' link='JavaScript:view_pltu(\"115\");\'/>
                    <set value='165943.49599999998' link='JavaScript:view_pltu(\"106\");\'/>
                    <set value='39834.733' link='JavaScript:view_pltu(\"121\");\'/>
                    <set value='46036.417' link='JavaScript:view_pltu(\"54\");\'/>
                    <set value='135444.10900000003' link='JavaScript:view_pltu(\"117\");\'/>
                    <set value='61653.498999999996' link='JavaScript:view_pltu(\"103\");\'/>
                    <set value='99381.41699999999' link='JavaScript:view_pltu(\"95\");\'/>
                    <set value='6025.94' link='JavaScript:view_pltu(\"19\");\'/>
                </dataset>
                <styles>
                    <definition>
                    <style name='LegendFont' type='FONT' size='11' color='2E4A89'/>
                    <style name='CaptionFont' type='FONT' size='12' bold='1'/>
                    <style name='LabelFont' type='FONT' color='2E4A89' bgColor='F0FBFF' bold='1' />
                    <style name='ToolTipFont' type='FONT' bgColor='2E4A89' borderColor='2E4A89' color='FFFFFF'/></definition>
        <application>
            <apply toObject='LEGEND' styles='LegendFont' />
            <apply toObject='CAPTION' styles='CaptionFont' />
            <apply toObject='DATALABELS' styles='LabelFont' />
            <apply toObject='TOOLTIP' styles='ToolTIpFont' />
        </application></styles></chart>";
        return $grafik;
    }

    function pie01() {
        $ssql = "select sum(jml_tetap) total, sum(jml) pengisi, sum(jml)/sum(jml_tetap)*100 persen from tbl_unit_kerja a
        left join (
        select unit, count(*) jml from vw_hasil_survei 
        group by unit) b on b.unit=a.kode
        ";
        $data = $this->db->query($ssql)->result();
        
        $label='';
        foreach ($data as $row) {
            $label.='<set label="Pengisi" value="'.$row->persen.'" />';
            $pengisi=$row->persen;
        }
        $total=100-$pengisi;
        $label.='<set label="Belum mengisi" value="'. $total.'" />';

        $grafik = '<chart caption="Kepesertaan Pegawai"
                    subcaption="2016" 
                    palettecolors="#0075c2,#f45b00,#8e0000" 
                    bgcolor="#ffffff" 
                    showborder="0" 
                    use3dlighting="0" 
                    showshadow="0" 
                    enablesmartlabels="0" 
                    startingangle="0" 
                    showpercentvalues="1" 
                    showpercentintooltip="0" 
                    decimals="1" 
                    exportEnabled="1"  
                    exportShowMenuItem="1"
                    captionfontsize="14" subcaptionfontsize="14" 
                    subcaptionfontbold="0" tooltipcolor="#ffffff" 
                    showhovereffect="1" showlegend="1" legendbgcolor="#ffffff" 
                    legendborderalpha="0" legendshadow="0" legenditemfontsize="10" 
                    legenditemfontcolor="#666666" usedataplotcolorforlabels="1">'.$label.
                    '</chart>';
        return $grafik;
    }

    function pie02() {
        $grafik = '<chart caption="Split of Visitors by Age Group" subcaption="Last year" palettecolors="#0075c2,#1aaf5d,#f2c500,#f45b00,#8e0000" bgcolor="#ffffff" showborder="0" use3dlighting="0" showshadow="0" enablesmartlabels="0" startingangle="0" showpercentvalues="1" showpercentintooltip="0" decimals="1" captionfontsize="14" subcaptionfontsize="14" subcaptionfontbold="0" tooltipcolor="#ffffff" tooltipborderthickness="0" tooltipbgcolor="#000000" tooltipbgalpha="80" tooltipborderradius="2" tooltippadding="5" showhovereffect="1" showlegend="1" legendbgcolor="#ffffff" legendborderalpha="0" legendshadow="0" legenditemfontsize="10" legenditemfontcolor="#666666" usedataplotcolorforlabels="1">
                        <set label="Teenage" value="1250400" />
                        <set label="Adult" value="1463300" />
                        <set label="Mid-age" value="1050700" />
                        <set label="Senior" value="491000" />
                    </chart>';
        return $grafik;
    }

    function pie03() {
        $grafik = '<chart caption="Split of Visitors by Age Group" subcaption="Last year" palettecolors="#0075c2,#1aaf5d,#f2c500,#f45b00,#8e0000" bgcolor="#ffffff" showborder="0" use3dlighting="0" showshadow="0" enablesmartlabels="0" startingangle="0" showpercentvalues="1" showpercentintooltip="0" decimals="1" captionfontsize="14" subcaptionfontsize="14" subcaptionfontbold="0" tooltipcolor="#ffffff" tooltipborderthickness="0" tooltipbgcolor="#000000" tooltipbgalpha="80" tooltipborderradius="2" tooltippadding="5" showhovereffect="1" showlegend="1" legendbgcolor="#ffffff" legendborderalpha="0" legendshadow="0" legenditemfontsize="10" legenditemfontcolor="#666666" usedataplotcolorforlabels="1">
                        <set label="Teenage" value="1250400" />
                        <set label="Adult" value="1463300" />
                        <set label="Mid-age" value="1050700" />
                        <set label="Senior" value="491000" />
                    </chart>';
        return $grafik;
    }

}

?>


