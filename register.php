<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label style="display: block; text-align: center;">Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="display: block; text-align: center;">Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="display: block; text-align: center;">Password</label>
  	  <input type="password" name="password">
  	</div>
  <!--	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
-->  	<div class="input-group" style="display: block; text-align: center;">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p style="display: block; text-align: center;">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>