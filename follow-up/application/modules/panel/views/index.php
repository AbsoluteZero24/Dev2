<style>
    * {
        box-sizing: border-box;
    }

    /* Create four equal columns that floats next to each other */
    .column {
        float: left;
        width: 25%;
        padding: 20px;
        color:black;
        height: 170px;
    }
    .column1 {
        background-color: #e74c3c;

    }
    .column2 {
        background-color: #e67e22;
    }
    .column3 {
        background-color: #f1c40f;
    }
    .column3 {
        background-color: #f1c40f;
    }
    .column4 {
        background-color: #f39c12;
    }
    .column5 {
        background-color: #9b59b6;
    }
    .column6 {
        background-color: #16a085;
    }
    .column7 {
        background-color: #2c3e50;
    }
    .column8 {
        background-color: #3498db;
    }
    .column9 {
        background-color: #27ae60;
    }
    .column10 {
        background-color: #2ecc71;
    }


    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* On screens that are 992px wide or less, go from four columns to two columns */
    @media screen and (max-width: 992px) {
        .column{
            width: 33%;
        }
    }

    @media screen and (max-width: 850px) {
        .column{
            width: 50%;
        }
    }

    /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 359px) {
        .column {
            width: 100%;
        }
    }

    .column:hover  {
        background-color: #204d74;
        color: white;
    }

    /*    .btn {
            background-color: #ddd;
            border: none;
            color: black;
            padding: 16px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            transition: 0.3s;
        }
    
        .btn:hover {
            background-color: #3e8e41;
            color: white;
        }    */
</style>


<div class="row">
    <a href="<?php echo site_url() . "/ob_01" ?>">
        <div class="column column1">
            <i class="fa fa-dollar" style="font-size: 40px; text-align: center"></i>
            <h2>e-Kupon</h2>
            <p>Some text..</p>
        </div>
    </a>
    <a href="<?php echo site_url() . "/ob_01/modify/" ?>">
        <div class="column column2">
            <i class="fa fa-money" style="font-size: 40px; text-align: center"></i>
            <h2 class="font-weight-medium ">e-Waserda</h2>
        </div>
    </a>
    <a href="<?php echo site_url() . "/ob_01" ?>">
        <div class="column column3">
            <i class="fa fa-ambulance" style="font-size: 40px; text-align: center"></i>
            <h2>e-Klaim</h2>
            <p>Klaim pengobatan rawat jalan dll</p>
        </div>
    </a>
    <a href="<?php echo site_url() . "/pj_01" ?>">
        <div class="column column4">
            <i class="fa fa-cc-visa" style="font-size: 40px; text-align: center"></i>
            <h2>e-Pinjaman</h2>
            <p>Some text..</p>
        </div>
    </a>
    <a href="<?php echo site_url() . "/ob_01/modify/" ?>">
        <div class="column column5">
            <i class="fa fa-database" style="font-size: 40px; text-align: center"></i>
            <h2>e-Simpanan</h2>
            <p>Some text..</p>
        </div>
    </a>
    <a href="<?php echo site_url() . "/ob_01/modify/" ?>">
        <div class="column column6">
            <i class="fa fa-gift" style="font-size: 40px; text-align: center"></i>
            <h2>SHU</h2>
            <p>Some text..</p>
        </div>
    </a>
    <a href="<?php echo site_url() . "/ob_01/modify/" ?>">
        <div class="column column7">
            <i class="fa fa-file-text" style="font-size: 40px; text-align: center"></i>
            <h2>S.Cuti</h2>
            <p>Some text..</p>
        </div>
    </a>
    <a href="<?php echo site_url() . "/ob_01/modify/" ?>">
        <div class="column column8">

            <i class="fa fa-file-text-o" style="font-size: 40px; text-align: center"></i>
            <h2>S.Keterangan</h2>
            <p>Some text..</p>
        </div>
    </a>
    <a href="<?php echo site_url() . "/ob_01/modify/" ?>">
        <div class="column column9">

            <i class="fa fa-moon-o" style="font-size: 40px; text-align: center"></i>
            <h2>Lembur</h2>
            <p>Some text..</p>
        </div>
    </a>
    <a href="<?php echo site_url() . "/ob_01/modify/" ?>">
        <div class="column column10">

            <i class="fa fa-list-alt" style="font-size: 40px; text-align: center"></i>
            <h2>Absensi</h2>
            <p>Some text..</p>
        </div>
    </a>

</div>









