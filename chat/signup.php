<?php 
$conn= mysqli_connect("localhost","root","","chat");
$user=$_POST['username'];
$email=$_POST['Email'];
$pass=$_POST['password'];
$sql="select * from users where email='$email'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if ($num==1) {
	echo "email already existing";
}else{
	$reg="insert into users(username,Email,password) VALUES('$user','$email','$pass')";
	mysqli_query($conn,$reg);
	header('location:login.php');
}




 ?>