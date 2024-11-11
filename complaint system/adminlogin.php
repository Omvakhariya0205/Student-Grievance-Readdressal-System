<?php
$name=$_POST['admin'];
$pass=$_POST['admin'];

if($name==$pass)
{
	echo "<script>window.location.assign('afteradminlogin.php');</script>";
}
else
{
	readfile('adminlogin2.html');
}


?>