<div class="col-lg-6">
    <div class="panel panel-primary">
        <div class="panel-heading">LS Bulan Berjalan</div>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-responsive" id="basic-datatable" style="border-top:1px solid;border-bottom:1px solid">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th width="100" >Tahun</th>
                    <th width="150" >Bulan</th>
                    <th width="150" class="hidden-xs">SLN</th>
                    <th width="200" class="hidden-xs">Jml</th>
                    <th style="text-align: right" width="200" class="hidden-xs">FOB per Invoice</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($sln as $p) {
                    ?>
                    <tr">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $p->tahun; ?></td>
                        <td><?php echo $p->bulan; ?></td>
                        <td><?php echo $p->sub_cont; ?></td>
                        <td><?php echo $p->jml; ?></td>
                        <td style="text-align: right"><?php echo number_format($p->fob_per_invoice, 2, ",", "."); ?></td>
                        <td></td>
                    </tr>

                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>

        <div class="panel-body">
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Rekap Bulanan Sampai Dengan</div>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-responsive" id="basic-datatable" style="border-top:1px solid;border-bottom:1px solid">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th width="100" >Tahun</th>
                    <th width="150" class="hidden-xs">SLN</th>
                    <th width="200" class="hidden-xs">Jml</th>
                    <th style="text-align: right" width="200" class="hidden-xs">FOB per Invoice</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($rekap_sampai_dengan as $p) {
                    ?>
                    <tr">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $p->tahun; ?></td>
                        <td><?php echo $p->sub_cont; ?></td>
                        <td><?php echo $p->jml; ?></td>
                        <td style="text-align: right"><?php echo number_format($p->fob_per_invoice, 2, ",", "."); ?></td>
                        <td></td>
                    </tr>

                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>

        <div class="panel-body">
        </div>
    </div>
</div>        
<div class="col-lg-6">
    <div class="panel panel-primary">
        <div class="panel-heading">LS Sampai Dengan</div>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-responsive" id="basic-datatable" style="border-top:1px solid;border-bottom:1px solid">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th width="100" >Tahun</th>
                    <th width="150" >Bulan</th>
                    <th width="150" class="hidden-xs">SLN</th>
                    <th width="200" class="hidden-xs">Jml</th>
                    <th style="text-align: right" width="200" class="hidden-xs">FOB per Invoice</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($sln_sampai_dengan as $p) {
                    ?>
                    <tr">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $p->tahun; ?></td>
                        <td><?php echo $p->bulan; ?></td>
                        <td><?php echo $p->sub_cont; ?></td>
                        <td><?php echo $p->jml; ?></td>
                        <td style="text-align: right"><?php echo number_format($p->fob_per_invoice, 2, ",", "."); ?></td>
                        <td></td>
                    </tr>

                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>

        <div class="panel-body">
        </div>
    </div>
</div>


<div class="col-lg-8">

    <div class="panel panel-default">
        <div class="panel-heading clean">
            Statistics 
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm btn-circle" data-toggle="dropdown">Monthly <span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Daily</a></li>
                        <li><a href="#">Weekly</a></li>
                        <li class="active"><a href="#">Monthly</a></li>
                        <li><a href="#">Yearly</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Specific Time</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-default btn-sm btn-circle">GO</button>
            </div>
        </div>
        <div class="panel-body">
            <div id="splineArea-chart" style="height:280px;"></div>
        </div>
    </div>

</div>
<div class="col-lg-4">

    <div class="panel panel-default" data-ng-controller="TodoCtrl">
        <div class="panel-heading un-bold"><h4>ToDo List <small class="text-gray">{{remaining()}} of {{todos.length}} remaining</small>  <a href="" data-ng-click="archive()" class="pull-right"><small>archive</small></a></h4></div>

        <div class="panel-footer">
            <form data-ng-submit="addTodo()" role="form">
                <div class="input-group">
                    <input type="text" data-ng-model="todoText" class="form-control" placeholder="add new todo here">
                    <span class="input-group-btn">
                        <button class="btn-primary btn" type="submit" >Add</button>
                    </span>
                </div>
            </form>
        </div>


    </div>

</div>
