<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

if($_POST['imageField'])
{
	include_once("connect.php");
	$username=strip_tags($_POST['userid']);
	$password=strip_tags($_POST['pass']);
	if(!$username){
      
      echo "<script type='text/javascript'>alert(<?php echo 'username cannot be empty'; ?>);</script>";
      
  	}
  	else if(!$password){
      echo "password cannot be empty";
     
 	 }
 	else{
		$sql="SELECT * FROM `teacher` WHERE `tuserid`='$username' AND`tpass`='$password';";
		$query=mysqli_query($connection,$sql);
		if($query)
		{
			$row=mysqli_fetch_row($query);
			$dbuserid=$row[0];
			$dbpassword=$row[1];
		}
		if ($username == $dbuserid && $password == $dbpassword)
		{
			$_SESSION['tuserid']=$username;
			header('LOCATION:teachermain.html');
		}
		else
		{
			header('LOCATION:wronglogin.html');
		}
	}

}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Teacher Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-900.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<style type="text/css">
<!--
.style2 {color: #0099FF}
.style3 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div class="main">
  <div class="header">
  
    <div class="header_resize">
	 <div class="logo">
    
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html"><span>Home Page</span></a></li>         
          <li><a href="adminlogin.php"><span>Admin</span></a></li>
		  <li><a href="teacherlogin.php"><span>Teacher</span></a></li>
		  <li><a href="studentlogin.php"><span>Student</span></a></li>
         
        </ul>
      </div>
         <h1 class="style2">College Management System</h1>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> 
		    <a href="#"><img src="images/slider/3.jpg" width="934" height="307" alt="" /> </a> 
			<a href="#"><img src="images/slider/4.jpg" width="934" height="307" alt="" /> </a> 
			<a href="#"><img src="images/slider/6.jpg" width="934" height="307" alt="" /> </a> 

		</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <p class="infopost style3">Welcome to Teacher Login </p>
          <div class="clr"></div>
          <p>&nbsp;</p>
          <div class="img"><img src="images/img2.jpg" width="177" height="213" alt="" class="fl" /></div>
		
          <div class="post_content">
            <p align="justify"> <form action="teacherlogin.php" method="post">
              <table width="92%">
                 <tr>
                    <td width="175" height="48"><span class="style1 style4" ><strong>Teacher Name (<span class="style6">required</span>)</strong></span></td>
                    <td width="251"><input id="name" name="userid" type="text"  /></td>
                  </tr>
                  <tr>
                    <td height="44"><span class="style1 style5">Password (<span class="style6">required</span>)</span></td>
                    <td><input type="password" id="password" name="pass" class="text" /></td>
                  </tr>
                  <tr>
                    <td height="51"></td>
                    <td><input name="imageField" type="submit"  id="imageField" value="Login" />
                      <input name="Reset" type="reset" value="Reset" /></td>
                  </tr>
         </table>
      </form></p>
           
          </div>
        
        </div>
        <div class="article">
          <h2>&nbsp;</h2>
          <div class="clr"></div>
        </div>
        </div>
      <div class="sidebar">
       
        <div class="gadget">
          <h2 class="star"><span></span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.html">Home</a></li>          
            <li><a href="adminlogin.php"><span>Admin</span></a></li>
		  <li><a href="teacherlogin.php"><span>Teacher</span></a></li>
		  <li><a href="studentlogin.php"><span>Student</span></a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star">&nbsp;</h2>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  
 
  <div class="footer">
    <div class="footer_resize">
      <p class="rf">&nbsp;</p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center></div>
</body>
</html>
