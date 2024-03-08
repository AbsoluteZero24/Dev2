<div class="col-lg-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Umur IP</div>
        <div class="panel-body">
            <?php echo $this->load->view('ip_aktif'); ?>
        </div>
    </div>
</div>        

<div class="col-lg-9">
    <div class="panel panel-primary">
        <div class="panel-heading">Saldo SPI/E</div>
        <div class="panel-body">
            <?php echo $this->load->view('table_ip_saldo'); ?>
        </div>
    </div>
</div>        
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">IP vs LS</div>
        <div class="panel-body">
            <?php echo $this->load->view('table_ip_vs_ls'); ?>
        </div>
    </div>
</div>        
