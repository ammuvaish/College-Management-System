<?php

$id=$_POST['id'];

/*echo $id."<br>".$marks1."<br>".$marks2."<br>".$marks3."<br>".$finalM ; */

if(isset($_POST['imageField']))
{	
	$connection = mysqli_connect('localhost','root','','collegedb');
	
	if(mysqli_connect_errno())
	{
		echo "Failed to connect: " , mysqli_connect_errno;
	}

	$sql="DELETE from student where userid='$id';";
	$query=mysqli_query($connection,$sql);
	if (!$query)
	{
	die('Error: ' . mysqli_error($connection));
	}
	else
	{
			echo "Success";
			header("Location:deletestudent.php");
	}
}

?>