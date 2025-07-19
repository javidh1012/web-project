<?php
$a=$_POST['Name'];
$b=$_POST['gender'];
$c=$_POST['Email_Address'];
$d=$_POST['Phone_Number'];
$e=$_POST['College_Name'];
$f=$_POST['Degree_Branch'];
$g=$_POST['Resume_Upload'];
$h=$_POST['choose_the_intern'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'codehub');
$query=("insert into internform(Name,gender,Email_Address,Phone_Number,College_Name,Degree_Branch,Resume_Upload,choose_the_intern) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')");
mysqli_query($con,$query);
include("internform.html");
mysqli_close($con);
?>