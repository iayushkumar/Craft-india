<?php
session_start(); 
$con = mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'userregistration');
$name = $_POST['user']; 
$password = $_POST['password']; 

$s = "select * from usertable where name = '$name' && '$password'"; 

$result = mysqli_query($con,$s); 
$num = mysqli_num_rows($result); 

if($num == 1){

    header("location:index.php");
}
else {
   header("location:login.php");
}
?>