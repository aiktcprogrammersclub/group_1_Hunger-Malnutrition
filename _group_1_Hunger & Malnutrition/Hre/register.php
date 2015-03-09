<?php
$uname=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
$con=new mysqli('localhost','root','','blog');
$sql="insert into users values('$uname','$pass','$email','')";
$result=$con->query($sql) or die($con->error);
echo "<h3>registered successfully</h3>";
echo '<a href="index.php" style=" text-decoration: none;border-bottom: 1px dashed #999;
		padding: 23px 0;font-size: 20px;
	font-weight: 400;
	color: #fff;
	cursor: pointer;
	outline: none;
	padding: 13px 10px;
	width: 100%;
	border: none;
	background: #ffc50c;">back to home </a>';
?>
