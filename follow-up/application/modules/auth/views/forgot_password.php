<h1>Lupa Password</h1>
<p>Silahkan masukan Email dan kami akan mengirimkan password Anda.</p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>Alamat Email<br />
      <?php echo form_input($email);?>
      </p>
      
      <p><?php echo form_submit('submit', 'Submit');?></p>
      
<?php echo form_close();?>