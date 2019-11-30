<?php

 
//if(isset($_POST['uid'])){
	$uid=$_POST['tuserid'];
	$marks1=$_POST['name'];
	$marks2=$_POST['phone'];
	$marks3=$_POST['salary'];
	$finalM=$_POST['designaton'] ;
	echo $tuserid."<br>".$marks1."<br>".$marks2."<br>".$marks3."<br>".$finalM ; 


if(isset($_POST['imageField']))
{	
	$connection = mysqli_connect('localhost','root','','collegedb');
	
	if(mysqli_connect_errno())
	{
		echo "Failed to connect: " , mysqli_connect_errno;
	}

	$sql="UPDATE teacher SET tname=$marks1,tphone=$marks2,salary=$marks3,designation=$finalM where tuserid='$tuserid'";
	$query=mysqli_query($connection,$sql);
	if (!$query)
	{
	die('Error: ' . mysqli_error($connection));
	}
	else
	{
			echo("1 record added");
			header("Location:updateteacher1.php");
	}
//}
}

?>