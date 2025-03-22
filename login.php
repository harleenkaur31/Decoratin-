<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group" >
  		<label style="display: block; text-align: center;">Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group" >
  		<label style="display: block; text-align: center;">Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group" style="display: block; text-align: center;">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p  style="display: block; text-align: center;">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>