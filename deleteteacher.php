<?php

if(isset($_GET['uid'])){
    $uid=$_GET['uid'];	
	$connection = mysqli_connect('localhost','root','','collegedb');
	if(mysqli_connect_errno())
	{
		echo "Failed to connect: " , mysqli_connect_errno;
	}

	$sql="DELETE from teacher where tuserid='$uid'";
	$query=mysqli_query($connection,$sql);
	if (!$query)
	{
        echo "ok";
	    die('Error: ' . mysqli_error($connection));
	}
	else
	{
			echo "Success"
			header("Location:updateteacher.php");
	}
}
?>