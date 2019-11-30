<?php
		$cid=$_POST['cid'];
		$tid=$_POST['tid'];
/*echo $id."<br>".$marks1."<br>".$marks2."<br>".$marks3."<br>".$finalM ; */

if(isset($_POST['imageField']))
{	
	$connection = mysqli_connect('localhost','root','','collegedb');
	
	if(mysqli_connect_errno())
	{
		echo "Failed to connect: " , mysqli_connect_errno;
	}

	$sql="UPDATE course set teacher='$tid' where ccode='$cid'";
	$query=mysqli_query($connection,$sql);
	if (!$query)
	{
	die('Error: ' . mysqli_error($connection));
	}
	else
	{
			echo "Success";
			header("Location:asscrtr.php");
	}
}


?>