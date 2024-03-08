<script>
    function create_username() {
        var username = $("input#first_name").val() + '.' + $("input#last_name").val();
        $("input#username").val(username);
        $("input#email").val(username + '@');
    }
</script>
<div class='mainInfo'>

    <h1>Tambah Pengguna</h1>
    <p>Silahkan Masukan Data Pengguna </p>


    <?php echo form_open("auth/create_user"); ?>
    <table class="standard detail"> 	
        <tr>
            <th>Nama Depan</th>
            <td><?php echo form_input($first_name); ?></td>
        </tr>
        <tr>
            <th>Nama Belakang</th>
            <td><?php echo form_input($last_name); ?></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><?php echo form_input($username); ?></td>
        </tr>
        <tr>
            <th>NIP</th>
            <td><?php echo form_input($nip); ?></td>
        </tr>
        <tr>
            <th>User Grup</th>
            <td><?php echo form_dropdown('user_group', $this->reference_model->get_groups(), array('selected' => '2')); ?></td>
        </tr>
        <tr>
            <th>Unit Kerja</th>
            <td><?php echo form_dropdown('user_place', $this->reference_model->get_places(), array('selected' => '1')); ?></td>
        </tr>
        <tr>
            <th>Module</th>
            <td><?php echo form_dropdown('user_module', $this->reference_model->get_modules(), array('selected' => '1')); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo form_input($email); ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo form_input($password); ?></td>
        </tr>
        <tr>
            <th>Konfirmasi Password</th>
            <td><?php echo form_input($password_confirm); ?></td>
        </tr>
        <tr>		
            <td colspan="2"><?php echo form_submit('submit', 'Simpan', 'class="btn btn-little btn-primary"'); ?></td>
        </tr>
        <!--
        <p>Phone:<br />
        <?php echo form_input($phone1); ?>-<?php echo form_input($phone2); ?>-<?php echo form_input($phone3); ?>
        </p>
        -->


    </table>
    <?php echo form_close(); ?>
    <div id="infoMessage"><?php echo $message; ?></div>

</div>
