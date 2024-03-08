<style>
    div.dataTables_wrapper {
        margin-bottom: 3em;
    }
</style>

<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Source
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <?php $this->load->view('page_source'); ?>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Transaction
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <?php $this->load->view('page_transaction'); ?>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    Result
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <?php $this->load->view('page_result'); ?>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#summary" href="#collapseFour">
                    Summary
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse in">
            <div class="panel-body">
                <?php $this->load->view('page_summary'); ?>

            </div>
        </div>
    </div>
</div>


<div class="row hidden">

    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default clearfix dashboard-stats rounded">
            <span id="dashboard-stats-sparkline1" class="sparkline transit"></span>
            <i class="fa fa-shopping-cart bg-danger transit stats-icon"></i>
            <h3 class="transit">1547 <small class="text-green"><i class="fa fa-caret-up"></i> 8%</small></h3>
            <p class="text-muted transit">Last week sales</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default clearfix dashboard-stats rounded">
            <span id="dashboard-stats-sparkline2" class="sparkline transit"></span>
            <i class="fa fa-tags bg-info transit stats-icon"></i>
            <h3 class="transit">91% <small class="text-red"><i class="fa fa-caret-down"></i> 6%</small></h3>
            <p class="text-muted transit">Transactions</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default clearfix dashboard-stats rounded">
            <span id="dashboard-stats-sparkline3" class="sparkline transit"></span>
            <i class="fa fa-user bg-success transit stats-icon"></i>
            <h3 class="transit">2,014 <small class="text-green"><i class="fa fa-caret-up"></i> 9%</small></h3>
            <p class="text-muted transit">Total Users</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default clearfix dashboard-stats rounded">
            <span id="dashboard-stats-sparkline4" class="sparkline transit"></span>
            <i class="fa fa-warning bg-warning transit stats-icon"></i>
            <h3 class="transit">-344 <small class="text-red"><i class="fa fa-caret-down"></i> 20%</small></h3>
            <p class="text-muted transit">Churned Users</p>
        </div>
    </div>

</div>

<script>
    $(document).ready(function () {
        $('table.display').DataTable();
    });
</script>