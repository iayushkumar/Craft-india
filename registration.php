<?php
session_start(); 
header('location:login.php');
$con = mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'userregistration');
$name = $_POST['user']; 
$password = $_POST['password'];
$email = $_POST['email'];
$contact = $_POST['contact'];  

$s = "select * from usertable where name = '$name'"; 

$result = mysqli_query($con,$s); 
$num = mysqli_num_rows($result); 

if($num == 1){
    echo "username already taken"; 

}
else {
    $reg = "insert into usertable(name,password,email,contact) values ('$name','$password','$email','$contact')"; 
    mysqli_query($con,$reg); 
    echo "Registration Successful"; 
}
?>