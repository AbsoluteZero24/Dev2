	<a href="<?php echo site_url('auth/create_user');?>" class="btn btn-little btn-primary">Tambah User</a>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
	<table class="standard full detail">
		<tr>
			<th>Nama</th>			
			<th>Username</th>
			<th>Email</th>
			<th>Grup User</th>
			<th>Distrik</th>
			<th>Modules</th>
			<?php if ($this->ion_auth->is_admin()): ?>
			<th>Status</th>
			<?php endif ?>
			<th>Aksi</th>
		</tr>
		<?php foreach ($users as $user):?>
			<tr>
				<td><?php echo $user->first_name. ' '. $user->last_name;?></td>
				<td><?php echo $user->username;?></td>
				<td><?php echo $user->email;?></td>
				<td>
					<?php foreach ($user->groups as $group):?>
						<?php echo $group->description;?><br />
	                <?php endforeach?>
				</td>
				<td>
					<?php foreach ($user->places as $place):?>
						<?php echo $place->description;?><br />
	                <?php endforeach?>
				</td>
				<td>
					<?php foreach ($user->modules as $module):?>
						<?php echo $module->description;?><br />
	                <?php endforeach?>
				</td>
				<?php if ($this->ion_auth->is_admin()): ?>
				<td>
					<?php if ($user->id != 1 ) {
						echo ( $user->active) ? anchor("auth/deactivate_without_confirm/".$user->id, 'Aktif') : anchor("auth/activate/". $user->id, 'Tidak Aktif');
						}
						?>
				</td>
				<?php endif ?>
				<td>
					<?php 
					echo anchor("auth/change_user/".$user->id,'Ganti Password', array('class'=>'edit'));
					if ($this->ion_auth->is_admin()):
						if ($user->id != 1 ) {
						echo anchor("auth/delete_user/".$user->id,'Hapus', array('class'=>'hapus'));
						}
					endif; 
					?>
				</td>
			</tr>
		<?php endforeach;?>
	</table>
	
	
	

