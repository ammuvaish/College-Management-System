<?php

 
//if(isset($_POST['uid'])){
	$uid=$_POST['uid'];
	$marks1=$_POST['marks1'];
	$marks1=$_POST['marks1'];
	$marks2=$_POST['marks2'];
	$marks3=$_POST['marks3'];
	$finalM=$_POST['finalM'] ;
	echo $uid."<br>".$marks1."<br>".$marks2."<br>".$marks3."<br>".$finalM ; 


if(isset($_POST['imageField']))
{	
	$connection = mysqli_connect('localhost','root','','collegedb');
	
	if(mysqli_connect_errno())
	{
		echo "Failed to connect: " , mysqli_connect_errno;
	}

	$sql="UPDATE iamarks SET marks1=$marks1,marks2=$marks2,marks3=$marks3,finaliat=$finalM where studentid='$uid'";
	$query=mysqli_query($connection,$sql);
	if (!$query)
	{
	die('Error: ' . mysqli_error($connection));
	}
	else
	{
			echo("1 record added");
			header("Location:smarksedit1.php");
	}
//}
}

?>