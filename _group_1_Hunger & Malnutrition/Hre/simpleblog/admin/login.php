<?php
//include config
require_once('../includes/config.php');


//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>

  <link rel="stylesheet" href="../style/login.css">
</head>
<body>
	<div class="body"></div>

		<div class="header">
			<div>Ball-o<span>Sphere</span></div>
		</div>
	</div>
<div id="login">

	<?php

	//process login form if submitted
	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		if($user->login($username,$password)){ 

			//logged in return to index page
			header('Location: index.php');
			exit;
		

		} else {
			$message = '<p class="error">Wrong username or password</p>';
		}

	}//end if submit

	if(isset($message)){ echo $message; }
	?>
	     <video muted autoplay loop poster="MyMovie.jpg" id="bgvid">
			<source src="MyMovie.mp4" type="video/mp4">
		</video>
	<div class="login">
		<form action="" method="post">
		<input type="text" name="username" placeholder="Username"value=""  />
		<input type="password" name="password" placeholder="Password "value=""  />
		<input type="submit" name="submit" value="Login"  />
		</form>
	</div>
</div>
</body>
</html>