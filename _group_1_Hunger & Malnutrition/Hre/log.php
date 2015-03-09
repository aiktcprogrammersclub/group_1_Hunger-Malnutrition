<?php
session_start();
$con=new mysqli('localhost','root','','blog');
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];




/*$sql="select password from users where username='$uname'";
$result=$con->query($sql) or die($this->con->error);

if($result->num_rows==0)
{
echo "fail";
}
else
{
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 if((strnatcmp($pass,$row["password"]))!=0)
 echo "fail";
 else
 header('Location:signup.html');
 
}
}
*/

$sql="select * from users where username='$uname' and password='$pass'";
$result=$con->query($sql) or die($this->con->error);

if($result->num_rows>0)
{
$row = mysql_fetch_array($result);
 $_SESSION['id']=$row['id'];
echo $row['id'];
}
 
else
{
echo "fail";
}

?>