<?php
session_start();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flat UI Web Form Widget and Kit :: w3layouts</title>
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat UI Web Form Widget and Kit,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<?php
if(isset($_SESSION['id']))
{
session_destroy();
unset($_SESSION['id']);
}
?>



	
	
	<script type="text/javascript">
	var c=0;
	function checkuname()
	{
	var uname=document.getElementById('uname').value;
	if(uname=="")
	document.getElementById('myform_Name_errorloc').innerHTML ="please enter a username"
	else
			c=c+1;
	}
	function checkpwd()
	{
	var pwd=document.getElementById('pwd').value;
	if(pwd=="")
	document.getElementById('myform_Email_errorloc').innerHTML ="please enter a password"
	else
	c=c+1;
    }
	function loadXMLDoc()
	{
	if(c>=2)
{
alert(c);
   var xmlhttp;
   if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  var name=document.getElementById('uname').value;
			var pwd=document.getElementById('pwd').value;
   xmlhttp.onreadystatechange=function()
  {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    if(xmlhttp.responseText=="fail")
					alert("invalid combination");
					else
					window.open("index.php","_self",true);
    }
  }
    xmlhttp.open("GET","log.php?uname="+name+"&pass="+pwd,true);
			xmlhttp.send();
   }
   
	
		}
		
		</script>

<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<!--/start-login-one-->
	<div class="login-01">
		<div class="one-login  hvr-float-shadow">
			<div class="one-login-head">
					<img src="images/top-lock.png" alt=""/>
					<h1>LOGIN</h1>
					<span></span>
			</div>
			<form>
				<li>
					<input type="text" class="text" name="Name" id='uname' onblur="checkuname()"><a href="#" class=" icon user"></a>
					<div id='myform_Name_errorloc' class="error_strings"></div>
				</li>
				<li>
					<input type="password" name="Email" id='pwd' onblur="checkpwd()" ><a href="#" class=" icon lock"></a>
					<div id="myform_Email_errorloc"></div>
				</li>
				<div class="p-container">
						<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>
						<h6><a href="#">Forgot Password ?</a> </h6>
							<div class="clear"> </div>
				</div>
				<div class="submit">
						<button type="button" onclick="loadXMLDoc()">Change Content</button>

				</div>
				
					<h5>Don't have an account ?<a href="register.html"> Sign Up </a></h5>
				</form>
		</div>
	</div>


	</body>
	</html>