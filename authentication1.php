<?php
$suc=array();
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if($_POST['submit'])
{
	include_once("connection.php");
	$username=strip_tags($_POST['username']);
	$password=strip_tags($_POST['password']);
	if(!$username){
      
      echo "user name cannot be empty";
      
  	}
  	else if(!$password){
      echo "password cannot be empty";
     
 	 }
 	else{
		$sql="SELECT * FROM `student` WHERE `userid`='$username' AND`password`='$password';";
		$query=mysqli_query($connection,$sql);
		if($query)
		{
			$row=mysqli_fetch_row($query);
			$usn=$row[2];
			$dbuserid=$row[0];
			$dbpassword=$row[1];
		}
		if ($username == $dbuserid && $password == $dbpassword)
		{
			$_SESSION['userid']=$username;
			$_SESSION['usn']=$usn;
			header('LOCATION:studentmain.jsp');
		}
		else
		{
			echo "Incorrect username or password";
		}
	}

}

?>

