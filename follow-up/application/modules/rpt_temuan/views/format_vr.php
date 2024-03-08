<div style="padding: 20px 20px 10px 20px; font-family:helvetica,arial,verdana,sans; font-size:8px;">
    <div style="text-indent: 0px; margin-bottom: 8px; color: navy;"><i>Refer to the terms and conditions of "<b>KETENTUAN VERIFIKASI ATAU PENELUSURAN TEKNIS {if $dataCompany.flag_imp eq 'I'}IMPOR{else}EKSPOR{/if} {$dataCompany.comodity}  </b>" that we have already read and understood, herewith we are submitting the VR as follows :</i></div>
    <br />
    <div id="divForm1" style="display: inline-block; border: solid 0px gray; margin-right: 8px;font-family:helvetica,arial,verdana,sans; font-size:8px;">
        <table width="100%" style="font-family:helvetica,arial,verdana,sans; font-size:8px;">
            <tr>
                <td width="20%"><b>Commodity</b></td>
                <td width="1%">:</td>
                <td colspan="5" style="border-bottom:1px dotted black;"><b>{$dataCompany.comodity|default:'-'}</b></td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%"><b>VR. Submission No.</b></td>
                <td width="1%">:</td>
                <td colspan="5" style="border-bottom:1px dotted black;"><b>{$vr_submission_no|default:'-'}</b></td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%"><b>VR. Submission Date.</b></td>
                <td width="1%">:</td>
                <td colspan="5" style="border-bottom:1px dotted black;"><b>{$dataDetail.vr_submit_date|default:'-'}</b></td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td colspan="3" style="color: navy;border-bottom:1px solid black;border-top:1px solid black;"><b><i>{if $dataCompany.flag_imp eq 'I'}IMPORTER{else}EXPORTER{/if}</i></b></td>
                <td width="5%">&nbsp;</td>
                <td colspan="3"  style="color: navy;border-bottom:1px solid black;border-top:1px solid black;"><b><i>{if $dataCompany.flag_imp eq 'I'}EXPORTER{else}IMPORTER{/if}</i></b></td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">NPWP</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataCompany.npwp|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Name</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.exporter_name|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Name</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataCompany.COMPANY_NAME|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Contact</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.exporter_contact|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Contact</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataCompany.contact_name|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Address</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.exporter_addr|replace:"^":"'"|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Address</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataCompany.address1|replace:"^":"'"|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Telephone</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.exporter_telp|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%"></td>
                <td width="1%"></td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataCompany.zip_code|default:'-'} - {$dataCompany.city|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%"></td>
                <td width="1%"></td>
                <td width="25%" ></td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%"></td>
                <td width="1%"></td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataCompany.prov|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%"></td>
                <td width="1%"></td>
                <td width="25%" ></td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Telephone</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataCompany.phone|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Fax</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.exporter_fax|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Fax</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataCompany.fax|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Email</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.exporter_email|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Email</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataCompany.email_address|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Invoice No.</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.invoice_no|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%"></td>
                <td width="1%"></td>
                <td width="25%"></td>
                <td width="5%">&nbsp;</td>
                <td width="20%">{if $dataCompany.flag_imp eq 'I'}SPI{else}SPE{/if}</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.import_license_no|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td colspan="7" style="color: navy; border-bottom:1px solid black;border-top:1px solid black;"><b><i>SUPPLIER</i></b></td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Name</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_name|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Contact</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_contact|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Address</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_addr|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Country</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_country|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Telephone</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_telp|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Mobile Phone</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_cell|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Fax</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_fax|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Email</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_email|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>
            {*
            <tr>
                <td width="20%">Name</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_name|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Contact</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.supplier_contact|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>
            *}
            <tr>
                <td width="20%">Mode of Transport</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{if $dataDetail.transportation_mode eq 'SEA'}{$dataDetail.transportation_mode|default:'-'} ({$dataDetail.package_type|default:'-'}){elseif $dataDetail.transportation_mode eq 'AIR' }{$dataDetail.transportation_mode|default:'-'}{elseif $dataDetail.transportation_mode eq 'PIPE'}PIPELINE{/if}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">{if $dataCompany.flag_imp eq 'I'}Port of Loading{else}Port of Discharge{/if}</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.port|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">{if $dataCompany.flag_imp eq 'I'}Port of Discharge{else}Port of Loading{/if}</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.port_name|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Date of Shipment</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.shipment_date|date_format:"%d - %m - %Y"|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Total Value</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">
                    {if $dataDetail.curr_code eq 'IDR'}
                    {$dataDetail.total_value|number_format:2:",":"."|default:0}
                    {else}
                    {$dataDetail.total_value|number_format:2:".":","|default:0}
                    {/if}

                </td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Currency</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.curr_code|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Incoterm</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.incoterm|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%">Total Net Weight</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.tot_net_weight|number_format:2:".":","|default:0}&nbsp;&nbsp; {$dataDetail.tot_net_weight_unit|default:'-'}</td>
                <td width="3%">&nbsp;</td>
            </tr>

            <tr>
                <td width="20%">Partial Shipment</td>
                <td width="1%">:</td>
                <td width="25%" style="border-bottom:1px dotted black;">{$dataDetail.partial|default:'-'}</td>
                <td width="5%">&nbsp;</td>
                <td width="20%"></td>
                <td width="1%"></td>
                <td width="25%" ></td>
                <td width="3%">&nbsp;</td>
            </tr>
        </table>




        <br /><br /><br />
        <span style="color:navy;border-bottom:1px solid black;border-top:1px solid black;width:100%;display:block"><b><i>DETAIL</i></b></span><br />
        <table style="font-family:helvetica,arial,verdana,sans; font-size:8px; margin-top: 10px; width:100%">
            <tr>
                <th style="border-bottom:1px solid black;" width="4%">NO</th>
                <th style="border-bottom:1px solid black;" width="10%">HS CODE</th>
                <th style="border-bottom:1px solid black;" width="23.28%">Goods Description</th>
                <th style="border-bottom:1px solid black;" width="9%">Origin</th>
                {if $dataCompany.commodity_code eq '18'}
                <th style="border-bottom:1px solid black;" width="14.28%">Net Weight</th>
                {elseif $dataCompany.commodity_code eq '02' || $dataCompany.commodity_code eq '26' || $dataCompany.commodity_code eq '29'}
                <th style="border-bottom:1px solid black;" width="14.28%">Quantity</th>
                {else}
                <th style="border-bottom:1px solid black;" width="14.28%">Quantity</th>
                <th style="border-bottom:1px solid black;" width="14.28%">Net Weight</th>
                {/if}
                <th style="border-bottom:1px solid black;" width="8%">Pref. Facility</th>
                <th style="border-bottom:1px solid black;" width="14%">License No.</th>
            </tr>
            {assign var=no_na value=0} 


            {foreach from=$detailSubmission item=rows}
            <tr>
                <td style="border-bottom:1px dotted black;padding:5px;" align="center" width="4%">{assign var=no_na value=$no_na+1}{$no_na}</td>
                <!--desciption-->
                <td style="border-bottom:1px dotted black;padding:5px;" align="center" width="10%">{$rows.hs_code}</td>
                {if $dataCompany.commodity_code eq '20' || $dataCompany.commodity_code eq '29'}
                <td style="border-bottom:1px dotted black;padding:5px;" width="23.28%">{$rows.hs_description}<br>BPOM RI:&nbsp;{$rows.bpom_na_number|default:"-"}<br>Item Code:&nbsp;{$rows.item_code|default:"-"}</td>
                {elseif $dataCompany.commodity_code eq '15' || $dataCompany.commodity_code eq '16'}
                <td style="border-bottom:1px dotted black;padding:5px;" width="23.28%">{$rows.hs_description}<br>BPOM RI:&nbsp;{$rows.bpom_na_number|default:"-"}<br>SPPT SNI:&nbsp;{$rows.sppt_sni|default:"-"}</td>
                {elseif $dataCompany.commodity_code eq '02' || $dataCompany.commodity_code eq '14' || $dataCompany.commodity_code eq '26'}
                <td style="border-bottom:1px dotted black;padding:5px;" width="23.28%">{$rows.hs_description}<br>SPPT SNI:&nbsp;{$rows.sppt_sni|default:"-"}</td>	
                {elseif $dataCompany.commodity_code eq '30' || $dataCompany.commodity_code eq '31' }
                <td style="border-bottom:1px dotted black;padding:5px;" width="23.28%">{$rows.hs_description}<br>SKPLBI:&nbsp;{$rows.skplbi|default:"-"}<br>SPPT SNI:&nbsp;{$rows.sppt_sni|default:"-"}</td>
                {elseif $dataCompany.commodity_code eq '18'}
                <td style="border-bottom:1px dotted black;padding:5px;" width="23.28%">{$rows.hs_description}{if $rows.quantity neq ""}, {$rows.quantity|number_format:3:".":","}{/if} &nbsp;{$rows.unit}</td>
                {else}
                <td style="border-bottom:1px dotted black;padding:5px;" width="23.28%">{$rows.hs_description}</td>
                {/if}
                <!--end of desciption-->

                <td style="border-bottom:1px dotted black;padding:5px;" width="9%">{$rows.country_name}</td>
                <!--QTY and Net Weight-->
                {if $dataCompany.commodity_code eq '18'}
                <td style="border-bottom:1px dotted black;padding:5px;" align="center" width="14.28%">{$rows.weight_kgs|number_format:3:".":","|default:0}&nbsp;{$rows.unit_net}</td>
                {elseif $dataCompany.commodity_code eq '02' || $dataCompany.commodity_code eq '26' || $dataCompany.commodity_code eq '29'}
                <td style="border-bottom:1px dotted black;padding:5px;" align="center" width="14.28%">{$rows.quantity|number_format:3:".":","|default:0} &nbsp;{$rows.unit}</td>
                {else}
                <td style="border-bottom:1px dotted black;padding:5px;" align="center" width="14.28%">{$rows.quantity|number_format:3:".":","|default:0}&nbsp;{$rows.unit}</td>
                <td style="border-bottom:1px dotted black;padding:5px;" width="14.28%" align="center">{$rows.weight_kgs|number_format:3:".":","|default:0}&nbsp;{$rows.unit_net}</td>
                {/if}
                <!--end of QTY and Net Weight-->
                <td style="border-bottom:1px dotted black;padding:5px;" width="8%">{$rows.pref_facility}</td>
                <td style="border-bottom:1px dotted black;padding:5px;" width="14%">{$rows.license_no}</td>
            </tr>

            {/foreach}
        </table>
        {if $dataCompany.commodity_code eq '25'}
        <br /><br /><span style="color:navy;border-bottom:1px solid black;border-top:1px solid black;width:100%;display:block"><b><i>DETAIL SPESIFICATION</i></b></span><br />
        <table style="font-family:helvetica,arial,verdana,sans; font-size:8px; margin-top: 10px; width:100%">
            <tr><th style="border-bottom:1px solid black;" width="12.5%">Merk</th>
                <th style="border-bottom:1px solid black;" width="16.5%">Model</th>
                <th style="border-bottom:1px solid black;" width="12.5%">No Certificate</th>
                <th style="border-bottom:1px solid black;" width="12.5%">No TPP&nbsp;</th>
                <th style="border-bottom:1px solid black;" width="8.5%">Quantity</th>
                <th style="border-bottom:1px solid black;" width="12.5%">Manufacturing Years</th>
                <th style="border-bottom:1px solid black;" width="12.5%">Made In</th>
                <th style="border-bottom:1px solid black;" width="12.5%">Port Of Discharge</th>
            </tr>

            {foreach from=$dataDetailSpec item=rows}
            <tr>
                <td style="border-bottom:1px dotted black;padding:5px;" width="12.5%">{$rows.merk}</td>
                <td style="border-bottom:1px dotted black;padding:5px;" width="16.5%">{$rows.model} ({$rows.qty_simcard|default:'1'} SIM)</td>
                <td style="border-bottom:1px dotted black;padding:5px;" align="center" width="12.5%">{$rows.no_certificate}</td>
                <td style="border-bottom:1px dotted black;padding:5px;" align="center" width="12.5%">{$rows.no_tpp}&nbsp;</td>
                <td style="border-bottom:1px dotted black;padding:5px;" align="center" width="8.5%">{$rows.qty}</td>
                <td style="border-bottom:1px dotted black;padding:5px;" align="center" width="12.5%">{$rows.year_manufacture}</td>
                <td style="border-bottom:1px dotted black;padding:5px;" width="12.5%">{$rows.make_country}</td>
                <td style="border-bottom:1px dotted black;padding:5px;" width="12.5%">{$rows.anchorage}</td>
            </tr>
            {/foreach}
        </table>
        {*
        <br /><br /><span style="color:navy;border-bottom:1px solid black;border-top:1px solid black;width:100%;display:block"><b><i>DETAIL SPESIFICATION IMEI</i></b></span><br />
        <table style="font-family:helvetica,arial,verdana,sans; font-size:8px; margin-top: 10px; width:100%">
            <tr><th style="border-bottom:1px solid black;" width="40%">Merk</th>
                <th style="border-bottom:1px solid black;" width="30%">Model</th>
                <th style="border-bottom:1px solid black;" width="30%">Imei Code</th>

            </tr>

            {foreach from=$dataDetailImei item=rows}
            <tr>
                <td style="border-bottom:1px dotted black;padding:5px;">{$rows.merk}</td>
                <td style="border-bottom:1px dotted black;padding:5px;">{$rows.model}</td>
                <td style="border-bottom:1px dotted black;padding:5px;" align="center">{$rows.imei_code}</td>
            </tr>
            {/foreach}

        </table>
        *}
        {/if}
    </div>
    <br />
    <br />
    <div>
        Remarks : {$dataDetail.remarks|replace:"^":"'"|default:'-'}
    </div>
    <br /><br /><br />
    <div style="text-indent: 0px; margin-bottom: 8px; color: navy;">
        I herewith notify:<br />
        We understand and agree to pay 50% of inspection fee in advance when submitting Verification Request (transfer payment is attached) and will be completed the payment before or when collected the LS or deposit payment

    </div>
    <br /> <br /> <br />
    <table width="100%" style="font-family:helvetica,arial,verdana,sans; font-size:8px;">
        <tr>
            <td width="14.28%">&nbsp;</td>
            <td width="2.28%">&nbsp;</td>
            <td width="26.28%" ></td>
            <td width="14.28%">&nbsp;</td>
            <td width="14.28%">Name&nbsp;</td>
            <td width="2.28%">:&nbsp;</td>
            <td width="26.28%" style="border-bottom:1px solid black;">{$dataCompany.PIC}</td>
        </tr>

        <tr>
            <td width="14.28%" >&nbsp;</td>
            <td width="2.28%">&nbsp;</td>
            <td width="26.28%" >&nbsp;</td>
            <td width="14.28%">&nbsp;</td>
            <td width="14.28%">&nbsp;</td>
            <td width="2.28%">&nbsp;</td>
            <td width="26.28%">&nbsp;</td>
        </tr>
    </table>


</div>
