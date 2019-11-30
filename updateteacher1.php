
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin Login</title>
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
          <li class="active"><a href="teachermain.html"><span>Home Page</span></a></li>         
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
          <p class="infopost style3">Update Teacher Details</p>
          <div class="clr"></div>
          <p>&nbsp;</p>
          
		
          <div class="post_content">
            <p align="justify"> 
            <form action="c.php" method="post">
              <table width="92%">
                 <?php
					if(isset($_GET['uid'])){
					$uid=$_GET['uid'];
					echo "<tr>";
                    echo "<td width='175' height='48'><span class='style1 style4' ><strong>{$uid} </strong></span></td></tr>";
					}
                  ?>
				  
				  <tr>
                    <td width="175" height="48"><span class="style1 style4" ><strong>Name </strong></span></td>
                    <td width="251"><input id="txt1" name="name" type="text"  /></td>
                  </tr>
                  <tr>
                    <td height="44"><span class="style1 style5"><strong>Phone</strong> </span></td>
                    <td><input type="text" id="txt2" name="phone" class="text"  /></td>
                  </tr>
				  
				  <tr>
                    <td width="175" height="48"><span class="style1 style4" ><strong> Salary </strong></span></td>
                    <td width="251"><input id="txt3" name="salary" type="text" /></td>
                  </tr>
                  <tr>
                    <td height="44"><span class="style1 style5"><strong>Designation</strong> </span></td>
                    <td><input type="text" id="finalm" name="designation" class="text"  /></td>
                  </tr>
				  
                  <tr>
                    <td height="51"></td>
                    <td><input name="imageField" type="submit"  id="imageField" value="submit" />
                      <input name="Reset" type="reset" value="Reset" /></td>
                  </tr>
         </table>
         <input type="hidden" value="<?=$uid?>" name="tuserid">
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
              <li><a href="teachermain.html">Home</a></li>
            <li><a href="tviewtime.php">View Time Table</a></li>  
			<li><a href="tedittime.php">Edit Teacher Table</a></li> 
			<li><a href="teacherlist.php">View Teacher List</a></li>
                        <li><a href="updatemarks.php">Update Student Marks</a></li>
                        <li><a href="viewstudentmarks.php">View Students Marks</a></li>
			
			
            <li><a href="teacherlogin.php">Logout</a></li>
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






 


