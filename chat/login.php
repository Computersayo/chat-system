<?php 
session_start();
header('location:index.php');
$conn= mysqli_connect("localhost","root","","chat");
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="select * from users where username='$user' && password='$pass'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if ($num==1) {
	header ("location:index.php");
}else{
	$_SESSION['name']=$_POST['username'];
	header("location:home.php");
	
}




 ?>