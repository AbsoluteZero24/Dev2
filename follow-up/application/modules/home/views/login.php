<style>
	.notification{color:red;}
</style>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<form method="post" action="<?php echo site_url().'/home/login'?>" class="login">
<p>
  <label for="login">User:</label>
  <input type="text" name="login[username]" id="login" value="">
</p>
<p>
  <label for="password">Password:</label>
  <input type="password" name="login[password]" id="password" value="">
</p>
<p class="login-submit">
  <button type="submit" class="login-button">Login</button>
</p>

</form>
<?php echo flashdata() ?>