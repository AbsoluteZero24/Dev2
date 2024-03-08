
<form class="form-horizontal" role="form" action="<?php echo $action_modify_vr; ?>" method="post">
    <div class="box box-primary">
        <!--    <div class="box-header with-border">
                <h3 class="box-title">Pengajuan Pemeriksaan</h3>
            </div>-->
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div id="divForm111" style="display: inline-block; border: solid 0px gray; margin-right: 100px; margin-left:20px" class='col-sm-5'>
                            <table style="vertical-align: top">
                                <tr>
                                    <td width='150px'>Commodity</td><td width='20px' align='center'>:</td>
                                    <td><b><label id="lblComm"><?php echo $commodity_code ?></label></b></td>
                                </tr>
                                <tr>
                                    <td>VR Submission No.</td><td align='center'>:</td>
                                    <td><b><label id="lblVRSubNo">-</label></b></td>
                                </tr>
                                <tr>
                                    <td>VR Submission Date</td><td align='center'>:</td>
                                    <td><b><label id="lblVRSubDate"><?php echo $vr_submit_date ?></label></b></td>
                                </tr>
                                <tr>
                                    <td>DI Number</td><td align='center'>:</td>
                                    <td><b><label id="lblVRSubDate"><?php echo $di_number ?></label></b></td>
                                </tr>
                            </table>	
                        </div>
                        <div id="divForm12" style="display: inline-block; border: solid 0px gray; margin-right: 100px; margin-left:20px; *zoom: 1;*display: inline; vertical-align: top" class='col-sm-5'>
                            <table style="margin-top: 10px; vertical-align: top">
                                <tr>
                                    <td colspan="3" style="color: navy;"><b><i><?php echo $posisi_01 ?></i></b></td>
                                </tr>
                                <tr>
                                    <td>Name</td><td align='center'>:</td>
                                    <td><label id="lblImpName"><b><?php echo $importer_id ?></b></label></td>
                                </tr>
                                <tr>
                                    <td width='150px'>NPWP</td><td width='20px' align='center'>:</td>
                                    <td id="lblImpNPWP"></td>
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td align='center'>:</td>
                                    <td id="lblImpContact" style="vertical-align: top"></td>
                                </tr>
                                <tr>
                                    <td valign='top'>Address</td><td align='center' valign='top'>:</td>
                                    <td><label id="lblImpAddr" style="height: 100px;"></label></td>
                                </tr>
                                <tr>
                                    <td id='phone'>Telephone</td>
                                    <td align='center'>:</td>
                                    <td><label id="lblImpTelp"></label></td>
                                </tr>
                                <tr>
                                    <td>Fax</td><td align='center'>:</td>
                                    <td><label id="lblImpFax"></label></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td align='center'>:</td>
                                    <td><label id="lblImpEmail"></label></td>
                                </tr>
                            </table>
                            <table style="margin-top: 10px;"><tr><td colspan="3" style="color: navy;"><b><i>SUPPLIER</i></b></td></tr>
                                <tr>
                                    <td width='150px'>ID</td>
                                    <td width='20px' align='center'>:</td>
                                    <td width='150px'><?php echo $supplier_id ?></td>
                                </tr>
                                <tr>
                                    <td width='150px'>Name</td>
                                    <td width='20px' align='center'>:</td>
                                    <td>
                                        <?php echo $supplier_name ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td align='center'>:</td>
                                    <td>
                                        <?php echo $supplier_contact ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign='top'>Address</td>
                                    <td align='center' valign='top'>:</td>
                                    <td><textarea name="supplier_addr" style="border: 1px solid #99BBE8; font-size: 12px; font-family: arial,sans-serif; width: 250px; overflow:vertical; resize:none;"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $supplier_country ?></td>
                                </tr>
                                <tr>
                                    <td>Telephone</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $supplier_telp ?></td>
                                </tr>
                                <tr>
                                    <td>Mobile Phone</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $supplier_cell ?></td>
                                </tr>
                                <tr>
                                    <td>Fax</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $supplier_fax ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $supplier_email ?></td>
                                </tr>
                            </table>		
                            <table style="margin-top: 27px; vertical-align: top">
                                <tr>
                                    <td width='150px'>Mode of Transport</td>
                                    <td width='20px' align='center'>:</td>
                                    <td>
                                        <?php echo $transportation_mode; ?>
                                        <?php echo $package_type; ?>
                                        <input type="radio" name="grpTrsMode" id="chbAir" value="AIR" style="cursor: pointer;" onclick="$('#cbModeTrsp').removeClass();$('#cbModeTrsp').val('');" >&nbsp;Air&nbsp;&nbsp;
                                        <input type="radio" name="grpTrsMode" id="chbSea" value="SEA" style="cursor: pointer;" class="easyui-validatebox" onclick="$('#cbModeTrsp').addClass('easyui-validatebox');" checked >&nbsp;Sea&nbsp;
                                        <select id='cbModeTrsp' style="width: 169px; border: 1px solid #99bbe8;" class="easyui-validatebox form-control">
                                            <option value="">-- Please Select--</option>
                                            <option value="FCL" >FCL</option>
                                            <option value="LCL">LCL</option>
                                            <option value="BULK" >BULK</option>
                                        </select><br>
                                        <input type="radio" name="grpTrsMode" id="chbPipe" value="PIPE" style="cursor: pointer;" onclick="$('#cbModeTrsp').removeClass();$('#cbModeTrsp').val('');" >&nbsp;Pipeline				
                                    </td>
                                </tr>
                                <tr>
                                    <td width='150px'><?php echo $port_01 ?></td>
                                    <td width='20px' align='center'>:</td>
                                    <td><?php echo $port_name_load ?></td>
                                </tr>
                                <tr>
                                    <td width='150px'></td>
                                    <td width='20px' align='center'></td>
                                    <td><?php echo $port_code_load ?></td>
                                </tr>
                                <tr>
                                    <td width='150px'><?php echo $port_02 ?></td>
                                    <td width='20px' align='center'>:</td>
                                    <td><?php echo $port_code_discharge ?></td>
                                </tr>
                                <tr>
                                    <td>Date of Shipment</td>
                                    <td align='center'>:</td>
                                    <td hidden>
                                        <input type="date" name="edShipDate" id='edShipDate' class='form-control'/>
                                        <?php echo $shipment_date ?>
                                    </td>
                                    <td>
                                        <?php echo $shipment_date ?>
                                    </td>
                                </tr>
                            </table>	
                        </div>
                        <div id="divForm2" style="display: inline-block; border: solid 0px gray;" class='col-sm-5'>		
                            <table style="margin-top: 10px; vertical-align: top">
                                <tr>
                                    <td colspan="3" style="color: navy;"><b><i><?php echo $posisi_02 ?></i></b></td>
                                </tr>
                                <tr>
                                    <td width='150px'>Name</td>
                                    <td width='20px' align='center'>:</td>
                                    <td>
                                        <label id="lblImpName"><b><?php echo $exporter_id ?></b></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $exporter_contact; ?></td>
                                </tr>
                                <tr>
                                    <td valign='top'>Address</td>
                                    <td align='center' valign='top'>:</td>
                                    <td><?php echo $exporter_addr; ?></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td align='center'>:</td>
                                    <td>
                                        <?php echo $exporter_country_code; ?>
<!--                                        <input id='countryName' type='text' style="width: 227px; border: 1px solid #99bbe8;" onkeydown="return false;" class="easyui-validatebox" onClick="loadCountry()" />
                                        <input id='edCountry' type='hidden' class="easyui-validatebox" />
                                        <input type='button' style="height: 21px; cursor: pointer" value="..."  onClick="loadCountry()" />-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $exporter_city; ?></td>
                                </tr>
                                <tr>
                                    <td>Telephone</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $exporter_telp; ?></td>
                                </tr>
                                <tr>
                                    <td>Fax</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $exporter_fax; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $exporter_email; ?></td>
                                </tr>
                            </table>	
                            <table style="margin-top: 27px;">
                                <tr>
                                    <td width='150px'>Order/Invoice No.</td>
                                    <td width='20px' align='center'>:</td>
                                    <td><?php echo $invoice_no ?></td>
                                </tr>

                                <tr>
                                    <td valign='top'><?php echo $ip_name ?></td>
                                    <td align='center' valign="top">:</td>
                                    <td width= "150px;"><?php echo $import_license_no ?></td>
                                </tr>
                            </table>

                            <table style="margin-top: 27px;">
                                <tr>
                                    <td width='150px'>Total Value</td>
                                    <td width='20px' align='center'>:</td>
                                    <td><?php echo $total_value ?></td>
                                </tr>
                                <tr>
                                    <td>Currency</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $curr_code ?></td>
                                </tr>
                                <tr>
                                    <td>Incoterm</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $incoterm ?></td>
                                </tr>
                                <tr>
                                    <td>Total Net</td>
                                    <td align='center'>:</td>
                                    <td><?php echo $tot_net_weight . $tot_net_weight_unit ?> </td>
                                </tr>
                                <tr>
                                    <td>Partial Shipment</td>
                                    <td align='center'>:</td>
                                    <td>
                                        <input style="cursor: pointer;" type="radio" name="grpPartShip" id="grpPartShip" class="easyui-validatebox">&nbsp;Allowed&nbsp;&nbsp;
                                        <input style="cursor: pointer;" type="radio" name="grpPartShip" id="grpPartShip2" checked class="easyui-validatebox">&nbsp;Not Allowed
                                    </td>
                                </tr>
                            </table>
                            <table style="margin-top: 27px;">
                                <tr>
                                    <td width='150px' valign='top'>Remark</td>
                                    <td width='20px' align='center' valign='top'>:</td>
                                    <td>
                                        <textarea id="edRemark" style="border: 1px solid #99BBE8; font-size: 12px; font-family: arial,sans-serif; width: 250px; overflow:vertical; resize:none;"></textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box box-primary">
        <!--    <div class="box-header with-border">
                <h3 class="box-title">Pengajuan Pemeriksaan</h3>
            </div>-->
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div id="divForm4" style="display: inline-block; border: solid 0px gray;" class='col-sm-12'>		
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-responsive" style="border-top:1px solid;border-bottom:1px solid">
                        <thead>
                            <tr>
                                <th rowspan="2" width="50">No</th>
                                <th rowspan="2" width="70">HS Code</th>
                                <th rowspan="2" >HS Description</th>
                                <th rowspan="2" width="50">Country</th>
                                <th rowspan="2" width="100">Quantity</th>
                                <th rowspan="2" width="50">Unit</th>
                                <th rowspan="2" width="50">Weight<br>KGS</th>
                                <th rowspan="2" width="50">Unit Net</th>
                                <th colspan="6" width="50" style="background-color: #84AFC9; color: white;text-align: center; ">SPI/E Balance</th>
                                <th rowspan="2" width="50" style="text-align: right; ">
                                    <div class="action-buttons">
                                        <a class="green" href="<?php echo site_url() . "/" . $form . "/modify_detail/" . $vr_submit_no . '/'; ?>">
                                            <button style="height:30px" class="btn btn-green btn_space btn-sm" >
                                                <i class="ace-icon fa fa-plus bigger-130 "></i>
                                            </button>
                                        </a>
                                    </div>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($detail as $key => $rows) {
                                ?>
                                <tr class="record" id="record<?php echo $d->vr_submit_detail_id; ?>">
                                    <td><?php echo $i; ?></td>
                                    <td data-label="HS Code"><?php echo $d->hs_code; ?><p style='color:red'><?php echo $d->ip_found ?></p></td>
                                    <td data-label="Description"><?php echo $d->hs_description; ?></td>
                                    <td data-label="Country"><?php echo $d->country_code; ?></td>
                                    <td data-label="Quantity"><?php echo number_format($d->quantity, 0); ?></td>
                                    <td data-label="Unit" ><?php echo $d->unit; ?></td>
                                    <td data-label="Weight" ><?php echo number_format($d->weight_kgs, 0); ?></td>
                                    <td data-label="Unit" ><?php echo $d->unit_net; ?></td>
                                    <td style="text-align: right; ">
                                        <div class="action-buttons">
                                            <a class="green" href="<?php echo site_url() . "/" . $form . "/modify_detail/" . $p->vr_submit_no . '/' . $d->vr_submit_detail_id; ?>">
                                                <button style="height:30px" class="btn btn-primary btn_space btn-sm" >
                                                    <i class="ace-icon fa fa-pencil bigger-130 "></i>
                                                </button>
                                            </a>
                                        </div>

                                    </td>

                                </tr>

                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>        
                </div>	
            </div>
        </div>
    </div>


    <div class="box-footer">
        Periksa kembali data yang diinput agar tidak terjadi kesalahan proses data
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>

</form>


<div id="win_portload">
    <div style="padding: 5px;">
        <table id="cntPortloadList"></table>
    </div>
</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
            </div>
            <div class="modal-body">
                <?php $this->load->view('search_port'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    function load_loading_port()
    {
        //result = $('#loading_port').val();
        alert('loading port');
    }
</script>
<script>
    function loadCountry() {
        $('#win_country').window({
            closed: false,
            onOpen: function () {
                gridSuppList = $('#cntCountryList').datagrid({
                    title: '',
                    height: 220,
                    nowrap: false,
                    autoRowHeight: false,
                    pagination: true,
                    striped: true,
                    collapsible: false,
                    remoteSort: true,
                    singleSelect: true,
                    url: host + 'vreq/loadSelectData/country',
                    autoload: false,
                    columns: [[
                            {field: 'country', title: 'COUNTRY', width: 150, sortable: true},
                            {field: 'code', title: 'CODE', width: 150, sortable: true},
                            {rowspan: 2, width: 150, title: '<a id="kountry" class="l-btn l-btn-plain" style="float: left;" onclick="searchCount()" href="javascript:void(0)"><span class="l-btn-left"><span class="l-btn-text zoom" style="padding-left: 20px;">Find</span></span></a>'}
                        ], [
                            {title: '<input type="text" id="conlist" style="width:130px">'},
                            {title: '<input type="text" id="concode" style="width:130px">'}
                        ]],
                    onClickRow: function (rowIndex, data) {
                        $('#countryName').val(data['country']);
                        $('#edCountry').val(data['code']);
                        $('#win_country').window('close');
                    }
                });
            }
        });
    }

</script>


<script>
    function upd_pos_01()

    {
        $.ajax({
            url: "<?php echo site_url() . '/' . $form . '/'; ?>get_importer",
            data: {importer_id: $("#importer_id").val()},
            type: "POST",
            success: function (result) {
                var data = JSON.parse(result);
                $("#lblImpNPWP").text(data['npwp']);
                $("#lblImpContact").text(data['contact_name']);
                $("#lblImpTelp").text(data['phone']);
                $("#lblImpFax").text(data['fax']);
                $("#lblImpEmail").text(data['email_address']);
                $("#lblImpAddr").text(data['address1'] + ' ' + data['zip_code'] + ' ' + data['city'] + ' ' + data['prov']);
            }
        });


        $.ajax({
            url: "<?php echo site_url() . '/' . $form . '/'; ?>get_ip",
            data: {importer_id: $("#importer_id").val()},
            type: "POST",
            success: function (result) {
                $('#import_license_no').html('ddddddddddddddd');
                // not yet
            }
        });

        $.ajax({
            url: "<?php echo site_url() . '/' . $form . '/'; ?>get_supplier",
            data: {importer_id: $("#importer_id").val()},
            type: "POST",
            success: function (result) {
                $('#supplier_list').html(result);
            }
        });

    }
</script>
<script>
    function upd_pos_02()
    {
        $.ajax({
            url: "<?php echo site_url() . '/' . $form . '/'; ?>get_exporter",
            data: {exporter_id: $("#exporter_id").val()},
            type: "POST",
            success: function (result) {
                var data = JSON.parse(result);
                //$("#exporter_fax").val(data['contact_name']);
                $("#edExpContact").val(data['contact_name']);
//                $("#edExpTelp").val('12121');
//                $("#edExpCity").val('4435435353');
                //document.getElementsByName("data[exporter_fax]").value=data['contact_name'];
                //alert(document.getElementsByName("data[exporter_fax]").value);
                //document.getElementsByName("data[exporter_fax]").val('1111111');
                //alert(document.getElementsByName("data[exporter_fax]").value);
                //document.getElementsByName('edExpTelp').val('1122121');
                $("[name='data[exporter_fax]']").val(data['fax']);
                $("[name='data[exporter_addr]']").val(data['address']);
                $("[name='data[exporter_contact]']").val(data['contact_name']);
                $("[name='data[exporter_city]']").val(data['city']);
                $("[name='data[exporter_telp]']").val(data['phone']);
                $("[name='data[exporter_email]']").val(data['email_address']);
                $("[name='data[exporter_country_code]']").val(data['exporter_country_code']);

                //var test = $("[name='data[exporter_fax]']");
                //alert (test);
            }
        });
    }
</script>
<script>
    function upd_suppl()
    {
        $.ajax({
            url: "<?php echo site_url() . '/' . $form . '/'; ?>get_supplier",
            data: {importer_id: $("#importer_id").val()},
            type: "POST",
            success: function (result) {
                var data = JSON.parse(result);
            }
        });
    }
</script>
<script>
    function load_ip()
    {
        $.ajax({
            url: "<?php echo site_url() . '/' . $form . '/'; ?>get_ip",
            data: {importer_id: $("#importer_id").val()},
            type: "POST",
            success: function (result) {
                var data = JSON.parse(result);
            }
        });
    }
</script>

<script>
    function transportation_onchange()
    {
        //alert('transportation click');

        var e = $("#id_transportation");
        var strUser = e.();
        alert(strUser);

        //alert($("[name='data[package_type]']").value);
        if ($("[name='data[package_type]']").val() != 'SEA')
        {
            $("[name='data[package_type]']").val("");
            $("[name='data[package_type]']").hide;
        } else
        {
            $("[name='data[package_type]']").show;
        }

    }
</script>
<script>
    function get_port_loading_row()
    {
        alert('dfasdf');
        port_name = $('#port_name_load').val();
        alert(port_name);

        $.ajax({
            type: "POST",
            url: "<?php echo site_url() . '/' . $form . '/'; ?>get_port_loading",
            data: {port_name: port_name},
            success: function (result) {
                $('#port_code_load').html(result);
            }
        });


    }
</script>

<script>
    function loadExp() {
        $('#win_exporters').window({
            closed: false,
            onOpen: function () {
                gridExpList = $('#cntExpList').datagrid({
                    title: '',
                    height: 175,
                    nowrap: false,
                    autoRowHeight: false,
                    striped: true,
                    collapsible: false,
                    remoteSort: true,
                    singleSelect: true,
                    rownumbers: true,
                    url: host + 'vreq/getExporters',
                    autoload: false,
                    frozenColumns: [[
                            {field: 'ck', checkbox: true},
                            {field: 'name', title: (sts_imp == 'E' ? 'Importer' : 'Exporter'), width: 150, sortable: true}
                        ]],
                    columns: [[
                            {field: 'address', title: 'Address', width: 250, sortable: true},
                            {field: 'city', title: 'City', width: 125, sortable: true},
                            {field: 'country_name', title: 'Ccountry', width: 125, sortable: true},
                            {field: 'contact_name', title: 'Contact Name', width: 125, sortable: true}
                        ]],
                    onLoadSuccess: function (d) {
                        gridExpList.datagrid('selectRow', 0);
                    }
                });
            }
        });
    }

    function loadSupp() {
        $('#win_suppliers').window({
            closed: false,
            onOpen: function () {
                gridSuppList = $('#cntSuppList').datagrid({
                    title: '',
                    height: 175,
                    nowrap: false,
                    autoRowHeight: false,
                    striped: true,
                    collapsible: false,
                    remoteSort: true,
                    singleSelect: true,
                    rownumbers: true,
                    url: host + 'vreq/getSuppliers',
                    autoload: false,
                    columns: [[
                            {field: 'ck', checkbox: true},
                            {field: 'name', title: 'Supplier', width: 150, sortable: true},
                            {field: 'address', title: 'Address', width: 350, sortable: true}
                        ]],
                    onLoadSuccess: function (d) {
                        gridSuppList.datagrid('selectRow', 0);
                    }
                });
            }
        });
    }

    function loadSPI() {
        $('#win_portload').window({
            closed: false,
            title: (sts_imp == 'E' ? 'Data SPE' : 'Data SPI'),
            //title:'DATA IP/IT/SPI',
            onOpen: function () {
                gridSuppList = $('#cntPortloadList').datagrid({
                    title: '',
                    height: 220,
                    nowrap: false,
                    autoRowHeight: false,
                    striped: true,
                    pagination: true,
                    collapsible: false,
                    remoteSort: true,
                    singleSelect: true,
                    url: host + 'vreq/loadSelectData/spi',
                    autoload: false,
                    columns: [[
                            {field: 'ip_number', title: (sts_imp == 'E' ? 'SPE' : 'SPI'), width: 150, sortable: true},
                            {field: 'ip_date', title: 'Date', width: 150, sortable: true},
                            {field: 'ip_expiry_date', title: 'Expiry Date', width: 150, sortable: true},
                        ]],
                    onClickRow: function (rowIndex, data) {
                        $('#edLicenseNo').val(data['ip_number']);
                        $('#win_portload').window('close');
                    }
                });
            }
        });
    }

    function loadPl() {
        $('#win_portload').window({
            closed: false,
            onOpen: function () {
                gridSuppList = $('#cntPortloadList').datagrid({
                    title: '',
                    height: 220,
                    nowrap: false,
                    autoRowHeight: false,
                    striped: true,
                    pagination: true,
                    collapsible: false,
                    remoteSort: true,
                    singleSelect: true,
                    url: host + 'vreq/loadSelectData/loadingport',
                    autoload: false,
                    columns: [[
                            {field: 'port', title: 'PORT', width: 150, sortable: true},
                            {field: 'country', title: 'COUNTRY', width: 150, sortable: true},
                            {field: 'code', title: 'CODE', width: 150, sortable: true},
                            {width: 150, rowspan: 2, title: '<a class="l-btn l-btn-plain" style="float: left;" onclick="searchPl()" href="javascript:void(0)"><span class="l-btn-left"><span class="l-btn-text zoom" style="padding-left: 20px;">Find</span></span></a>'}
                        ], [
                            {width: 150, title: '<input type="text" id="loadport" style="width:130px">'},
                            {width: 150, title: '<input type="text" id="loadcont" style="width:130px">'},
                            {width: 150, title: '<input type="text" id="loadcode" style="width:130px">'}
                        ]],
                    onClickRow: function (rowIndex, data) {
                        $('#portLoad').val(data['port'] + ' - ' + data['country']);
                        $('#edLoad').val(data['code']);
                        $('#win_portload').window('close');
                    }
                });
            }
        });
    }

    function searchPl() {
        $('#cntPortloadList').datagrid('reload', {
            'loadport': $('#loadport').val(),
            'loadcont': $('#loadcont').val(),
            'loadcode': $('#loadcode').val()
        });
    }

    function loadPd() {
        $('#win_portdis').window({
            closed: false,
            onOpen: function () {
                gridSuppList = $('#cntPortDisList').datagrid({
                    title: '',
                    height: 220,
                    nowrap: false,
                    autoRowHeight: false,
                    pagination: true,
                    striped: true,
                    collapsible: false,
                    remoteSort: true,
                    singleSelect: true,
                    url: host + 'vreq/loadSelectData/dischport',
                    autoload: false,
                    columns: [[
                            {field: 'port', title: 'PORT', width: 150, sortable: true},
                            {field: 'code', title: 'CODE', width: 150, sortable: true},
                            {rowspan: 2, width: 150, title: '<a id="pordis" class="l-btn l-btn-plain" style="float: left;" onclick="searchPd()" href="javascript:void(0)"><span class="l-btn-left"><span class="l-btn-text zoom" style="padding-left: 20px;">Find</span></span></a>'}
                        ], [
                            {width: 150, title: '<input type="text" id="disport" style="width:130px">'},
                            {width: 150, title: '<input type="text" id="diskode" style="width:130px">'}
                        ]],
                    onClickRow: function (rowIndex, data) {
                        $('#discPort').val(data['port']);
                        $('#edDis').val(data['code']);
                        $('#win_portdis').window('close');
                    }
                });
            }
        });
    }

    function searchPd() {
        $('#cntPortDisList').datagrid('reload', {
            'disport': $('#disport').val(),
            'diskode': $('#diskode').val()
        });
    }

    function loadCountry() {
        $('#win_country').window({
            closed: false,
            onOpen: function () {
                gridSuppList = $('#cntCountryList').datagrid({
                    title: '',
                    height: 220,
                    nowrap: false,
                    autoRowHeight: false,
                    pagination: true,
                    striped: true,
                    collapsible: false,
                    remoteSort: true,
                    singleSelect: true,
                    url: host + 'vreq/loadSelectData/country',
                    autoload: false,
                    columns: [[
                            {field: 'country', title: 'COUNTRY', width: 150, sortable: true},
                            {field: 'code', title: 'CODE', width: 150, sortable: true},
                            {rowspan: 2, width: 150, title: '<a id="kountry" class="l-btn l-btn-plain" style="float: left;" onclick="searchCount()" href="javascript:void(0)"><span class="l-btn-left"><span class="l-btn-text zoom" style="padding-left: 20px;">Find</span></span></a>'}
                        ], [
                            {title: '<input type="text" id="conlist" style="width:130px">'},
                            {title: '<input type="text" id="concode" style="width:130px">'}
                        ]],
                    onClickRow: function (rowIndex, data) {
                        $('#countryName').val(data['country']);
                        $('#edCountry').val(data['code']);
                        $('#win_country').window('close');
                    }
                });
            }
        });
    }

    function searchCount() {
        $('#cntCountryList').datagrid('load', {
            'conlist': $('#conlist').val(),
            'concode': $('#concode').val()
        });
    }

</script>
<script>
    function get_supplier_name()
    {
        $.ajax({
            url: "<?php echo site_url() . '/' . $form . '/'; ?>get_supplier_detail",
            data: {io_number: $('#supplier_list').val()},
            type: "POST",
            success: function (result) {
                var data = JSON.parse(result);
                //$("#exporter_fax").val(data['contact_name']);
                $("#edExpContact").val(data['contact_name']);
//                $("#edExpTelp").val('12121');
//                $("#edExpCity").val('4435435353');
                //document.getElementsByName("data[exporter_fax]").value=data['contact_name'];
                //alert(document.getElementsByName("data[exporter_fax]").value);
                //document.getElementsByName("data[exporter_fax]").val('1111111');
                //alert(document.getElementsByName("data[exporter_fax]").value);
                //document.getElementsByName('edExpTelp').val('1122121');
                $("[name='data[supplier_name]']").val(data['name']);
                $("[name='data[supplier_addr]']").val(data['address']);
                $("[name='data[supplier_contact]']").val(data['contact']);
                $("[name='data[supplier_telp]']").val(data['phone']);
                $("[name='data[supplier_cell]']").val(data['mobile_phone']);
                $("[name='data[supplier_fax]']").val(data['fax']);
                $("[name='data[supplier_email]']").val(data['email_address']);
                //$("[name='data[supplier_country]']").val(data['supplier_country']);

                //var test = $("[name='data[exporter_fax]']");
                //alert (test);
            }
        });
    }
</script>
