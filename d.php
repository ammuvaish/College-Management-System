<?php

 
//if(isset($_POST['uid'])){
	//$uid=$_POST['userid'];
	$marks1=$_POST['name'];
    $marks2=$_POST['address'];
	$marks3=$_POST['phone'];
	$marks4=$_POST['salary'];
	$finalM=$_POST['designation'] ;
	echo $uid."<br>".$marks1."<br>".$marks2."<br>".$marks3."<br>".$marks4."<br>".$finalM ; 


if(isset($_POST['imageField']))
{	
	$connection = mysqli_connect('localhost','root','','collegedb');
	
	if(mysqli_connect_errno())
	{
		echo "Failed to connect: " , mysqli_connect_errno;
	}

	$sql="UPDATE student SET name=$marks1,address=$marks2,phone=$marks3,dob=$marks4, sex=$finalM where userid='$uid'";
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