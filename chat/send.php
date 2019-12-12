<?php 
$conn=mysqli_connect('localhost','root','','chat');
$msg=$_POST['msg'];
$sql="insert into posts(msg)values('$msg',)";
mysqli_query($conn,$sql);



 ?>