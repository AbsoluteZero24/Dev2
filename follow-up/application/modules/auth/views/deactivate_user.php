<div class='mainInfo'>

	
    <div class="pageTitleBorder"></div>
	<p>Apakah user <?php echo $user->username; ?> tersebut akan dinonaktifkan ? </p>
	
    <?php echo form_open("auth/deactivate/".$user->id);?>
    	
      <p>
      	<label for="confirm">Ya</label>
		<input type="radio" name="confirm" value="yes" checked="checked" />
      	<label for="confirm">Tidak</label>
		<input type="radio" name="confirm" value="no" />
      </p>
      
      <?php echo form_hidden($csrf); ?>
      <?php echo form_hidden(array('id'=>$user->id)); ?>
      
      <p><?php echo form_submit('submit', 'Submit');?></p>

    <?php echo form_close();?>

</div>
