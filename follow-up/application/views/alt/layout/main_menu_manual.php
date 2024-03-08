<style type="text/css">
.myImage
{
    margin: auto;
    display: block; 
}
</style>
<div class='center'>
    <img title="KSOSCISI" src="<?php echo base_url() ?>/images/LOGO-KSO-SCISI-2022B.png" height=75 class="myImage">
</div>
<ul class="sidebar-menu" data-widget="tree">




    <li class="header">Work Flow</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/dashboard"><i class="fa fa-pie-chart"></i> Dashboard</a></li>
            <li><a href="<?php echo site_url(); ?>/grafik"><i class="fa fa-signal"></i> Grafik</a></li>
            <li><a href="<?php echo site_url(); ?>/peta"><i class="fa fa-globe"></i> Sebaran Titik</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-copy"></i>
            <span>Temuan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/temuan"><i class="fa fa-file-text-o"></i> Findings</a></li>
            <li class='hidden'><a href="<?php echo site_url(); ?>/ip_rekap"><i class="fa fa-file-text-o"></i> Rekonsiliasi</a></li>
        </ul>
    </li>

    <li class="header">Reminder</li>
    <li><a href="<?php echo site_url(); ?>/reminder_jadwal"><i class="fa fa-table"></i> <span>Jadwal</span></a></li>    
    <li><a href="<?php echo site_url(); ?>/reminder_status"><i class="fa fa-tasks"></i> <span>Log Reminder</span></a></li>
    <li><a href="<?php echo site_url(); ?>/modgrafik"><i class="fa fa-tasks"></i> <span>Mod Grafik</span></a></li>
    <li><a href="<?php echo site_url(); ?>/modgrafik/rpt1"><i class="fa fa-tasks"></i> <span>Modgrafik Laporan</span></a></li>
    <li><a href="<?php echo site_url(); ?>/modgrafik/download"><i class="fa fa-tasks"></i> <span>Modgrafik Download</span></a></li>
    
    <li class="header">Laporan</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-clone"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/lap_temuan"><i class="fa fa-circle-o"></i> Laporan Temuan</a></li>
        </ul>
    </li>
    <li><a href="<?php echo site_url(); ?>/download"><i class="fa fa-download"></i> <span>Download</span></a></li>    

    <li class="treeview" hidden>

        <a href="#">
            <i class="fa fa-download"></i>
            <span>Download</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/download"><i class="fa fa-circle-o"></i> LS</a></li>
        </ul>
    </li>
    <li class="header">Setting</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i>
            <span>Referensi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/mst_personel"><i class="fa fa-circle-o"></i> Personel</a></li>
            <li><a href="<?php echo site_url(); ?>/cabang"><i class="fa fa-circle-o"></i> Cabang</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-cogs"></i>
            <span>System</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/ls"><i class="fa fa-circle-o"></i> Change Password</a></li>
            <li><a href="<?php echo site_url(); ?>/ls"><i class="fa fa-circle-o"></i> Profile</a></li>
        </ul>
    </li>
</ul>
