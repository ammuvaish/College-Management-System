<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect('localhost','root','','collegedb');
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['userid'];
// SQL Query To Fetch Complete Information Of User

$ses_sql=mysqli_query("SELECT * FROM `student` WHERE `userid`='$user_check'", $connection);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['userid'];

if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: studentusermarks.php'); // Redirecting To Home Page
}
?>