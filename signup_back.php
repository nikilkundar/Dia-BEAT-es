<?php
include('conn.php');

if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gridRadios'];
$age=$_POST['age'];
$diabetesType=$_POST['type'];


$query1="INSERT INTO `user`(`username`, `phone_no`, `email`, `password`,`gender`,`age`,`dia_type`) VALUES ('$username',$phone,'$email','$password','$gender','$age','$diabetesType')";

$res1=mysqli_query($conn,$query1);


echo('<script>alert("Registered successfully now please login")</script>');

echo('<script>window.location="login.html"</script>');

}else{
    echo('<script>alert("Not a correct way to come here")</script>');
    echo('<script>window.location="index.html"</script>');

}



?>