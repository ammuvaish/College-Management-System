<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

if($_POST['imageField'])
{
	include_once("connect.php");
	$sql="INSERT INTO subject VALUES ('$_POST[code]','$_POST[name]','$_POST[teacher]');";
	$query=mysqli_query($connection,$sql);
	if (!query)
	{
	die('Error: ' . mysql_error());
	}
	else
		echo "1 record added";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>



<p align="justify"> <form action="addsubteach.php" method="post">
              <table width="92%">
					<tr>
                    <td width="175" height="48"><span class="style1 style4" ><strong>Subject Code </td>
                    <td width="251"><input id="date" name="code" type="text" /></td>
                  </tr>
                   <tr>
                    <td width="175" height="48"><span class="style1 style4" ><strong>Subject Name </td>
                    <td width="251"><input id="date" name="name" type="text" /></td>
                  </tr>
                   <tr>
                    <td width="175" height="48"><span class="style1 style4" ><strong>Teacher Name </td>
                    <td width="251"><input id="date" name="teacher" type="text"  /></td>
                  </tr>
				 

                  <tr>
                    <td height="51"></td>
                    <td><input name="imageField" type="submit"  id="imageField" value="submit" />
                      
                  </tr>

         </table>
		<a href='adminmain.html'>Back</a>
      </form></p>
	
	
</html>
</head>


