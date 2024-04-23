<?php
include('connect.php');

$name=$_POST['name'];
$lname=$_POST['last_name'];
$em=$_POST['email'];
$count=$_POST['country'];
$dob=$_POST['dob'];
$gend=$_POST['gender'];
$sql="INSERT INTO `students`(`Name`, `Last name`, `Email address`, `Country`, `DOB`, `Gender`)VALUES ('$name','$lname','$em','$count','$dob','$gend')";
if(mysqli_query($conn,$sql))
{
echo"Data has been successfully stored in database";

}
?>