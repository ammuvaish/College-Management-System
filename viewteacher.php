<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>home page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-900.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<style type="text/css">

.style2 {color: #0099FF}
.style3 {
	font-size: 36px;
	font-weight: bold;

}

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
          <li><a href="adminlogin.jsp"><span>Admin</span></a></li>
         
        </ul>
      </div>
         <h1 class="style2"> College Management System </h1>
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
          <div class="clr"></div>
          <p>
		  <table width="450" border="3"  cellpadding="0" cellspacing="0"  style="border-collapse: collapse;  margin:5px 5px 5px 5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;">
           

        

<html>
<style type="text/css">

.style3 {color: #0000FF; font-weight: bold; font-size: 18px; }
.style4 {
	font-size: 24px;
	font-weight: bold;
	color: #FF6600;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 15px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
  background-color: #C2185B;
  color: #C2185B;
}
</style>

<body bgcolor=#FFFFFF >
<p align="center" class="style4">Teachers List</p>
<?php
$connection = mysqli_connect('localhost','root','','collegedb');

if(mysqli_connect_errno())
{
	echo "Failed to connect: " , mysqli_connect_errno;
}
$sql="SELECT * from teacher;";
$result=mysqli_query($connection,$sql);

echo "<table width='600' border='1' align='center'>";
echo "<tr><td width='241'><div align='center'><span class='style3'>ID</span></div></td><td width='241'><div align='center'><span class='style3'>Name</span></div></td><td width='241'><div align='center'><span class='style3'>Phone</span></div></td><td width='241'><div align='center'><span class='style3'>Salary</span></div></td><td width='241'><div align='center'><span class='style3'>Designation</span></div></td>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr><td width='241'><div align='center'><span class='style3'>{$row['tuserid']}</span></div></td><td width='241'><div align='center'><span class='style3'>{$row['tname']}</span></div></td><td width='241'><div align='center'><span class='style3'>{$row['tphone']}</span></div></td><td width='241'><div align='center'><span class='style3'>{$row['salary']}</span></div></td><td width='241'><div align='center'><span class='style3'>{$row['designation']}</span></div></td>";
}
echo"</table>";

?>
</body>
</html>

          <div class="img"></div>
          </div>
        <div class="article">
         <p align="right"><a href="adminmain.html">Back</a></p>
		
		

          <div class="clr"></div>
        </div>
        </div>
      <div class="sidebar">
       
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="adminmain.html">Home</a></li>
			<li><a href="addsubteach.php">Add Subject & Teacher</a></li> 
                        <li><a href="viewtime.php">View Time Table</a></li>  
			<li><a href="teacherlist.php">View Teacher List</a></li> 
			<li><a href="addstudent.php">Add Student</a></li>
			<li><a href="updatestudent.jsp">Update Student</a></li>
			<li><a href="deletestudent.php">Delete Student</a></li>
			<li><a href="addteacher.php">Add Teacher</a></li>
			<li><a href="updateteacher.jsp">Update Teacher</a></li>
			<li><a href="deleteteacher.php">Delete Teacher</a></li>
			<li><a href="adddept.php">Add Department</a></li>
			<li><a href="addcourse.php">Add Courses</a></li>
			<li><a href="addsec.php">Add Section</a></li>
			<li><a href="asscrtr.php">Assigns course to teacher</a></li>
			<li><a href="assstsec.php">Assigns students to section</a></li>
			<li><a href="asstrdept.php">Assigns teacher to department</a></li>
			<li><a href="asstrsec.php">Assigns teacher to a section</a></li>
                        <li><a href="viewstudent.php">View Students</a></li>
                        <li><a href="viewteacher.php">View teacher</a></li>
                        <li><a href="viewdepartment.php">View Departments</a></li>
                        <li><a href="viewsection.php">View Sections</a></li>
                        <li><a href="viewcourse.php">View Courses</a></li>
                        <li><a href="viewsubjects.php">View Subjects</a></li>
			
			
            <li><a href="index.html">Logout</a></li>
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

