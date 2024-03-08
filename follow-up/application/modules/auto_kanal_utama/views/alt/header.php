<h1>
    Aktivitas
    <small>Daftar aktivitas</small>
</h1>
<ol class="breadcrumb hidden-xs">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Proses Harian</a></li>
    <li class="active">Aktivitas</li>
</ol>

<style>
    @media screen and (max-width: 600px) {
        table {
            border: 0;
        }
        table caption {
            font-size: 1.3em;
        }
        table thead {
            border: none;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }
        table tr {
            border-bottom: 3px solid #ddd;
            display: block;
            margin-bottom: .625em;
        }
        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: .8em;
            text-align: right;
        }
        table td:before {
            /*
            * aria-label has no advantage, it won't be read inside a table
            content: attr(aria-label);
            */
            content: attr(data-label);
            float: left;
            font-weight: bold;

        }
        table td:last-child {
            border-bottom: 0;
        }
    }




</style>