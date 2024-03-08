<script>		
	function create_username(){
		var aDm = ' <?php echo $this->ion_auth->is_admin(); ?>'; 
		var username = $("input#first_name").val() + '.' + $("input#last_name").val();
		if (aDm == 1) { $("input#username").val(username);}
		$("input#email").val(username + '@');
		
	}
</script>
<h1>Edit Data Pengguna</h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_user/".$id);?>
<table class="standard detail"> 	
      <tr>
		<th>Nama Depan</th>
		<td><?php echo form_input($first_name);?></td>
      </tr>
	  <tr>
		<th>Nama Belakang</th>
		<td><?php echo form_input($last_name);?></td>
      </tr>
	  
	  <tr>
		<th>Username</th>
		<td><?php echo form_input($username);?></td>
      </tr>
	  
	  <tr>
		<th>NIP</th>
		<td><?php echo form_input($nip);?></td>
      </tr>
	  <?php if($this->ion_auth->is_admin()): ?>
	  <tr>
		<th>User Grup</th>
		<td><?php 
				$groups = $this->ion_auth->get_users_groups($id)->result();
				$group1 = (!empty($groups['0']->id)) ? $groups['0']->id : 100 ;	//100 adalah nilai default for no groups di db			
				echo form_dropdown('user_group',$this->reference_model->get_groups(),$group1,array()); ?></td>
      </tr>
	  <tr>
		<th>Unit Kerja</th>
		<td><?php 
				$places = $this->ion_auth->get_users_places($id)->result();				
				$place1 = (!empty($places['0']->id)) ? $places['0']->id : 1 ;		
				echo form_dropdown('user_place',$this->reference_model->get_places(),$place1,array()); ?></td>
      </tr>
	   <tr>
		<th>Modules</th>
		<td><?php 
				$modules = $this->ion_auth->get_users_modules($id)->result();				
				$module1 = (!empty($modules['0']->id)) ? $modules['0']->id : 100 ;		
				echo form_dropdown('user_module',$this->reference_model->get_modules(),$module1,array()); ?></td>
      </tr>
	  <?php endif; ?>
	  <tr>
		<th>Email</th>
		<td><?php echo form_input($email);?></td>
      </tr>
	  <tr>
		<th>Password Baru (*)</th>
		<td><?php echo form_input($password);?></td>
      </tr>
	  <tr>
		<th></th>
		<td><span style="font-size:9px;">* Jika tidak akan mengubah password <br/> biarkan tetap kosong</span></td>
      </tr>
	 
       <tr>		
		<td colspan="2"> 
			<?php echo form_input($user_id);?>
			<?php echo form_submit('submit', 'Simpan', array('style'=>'class="btn btn-little btn-primary"'));?></td>
      </tr>
</table>     
      
     
      
      
<?php echo form_close();?>
