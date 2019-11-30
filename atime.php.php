<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">]
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
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.active {
  background-color: green;
  color: white;
}
.dropdown-btn {
  padding: 4px 8px 4px 0px;
  text-decoration: none;
  color: #585757;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
 .dropdown-btn:hover {
  color: #67eb00;
    }
.dropdown-container {
  display: none;
  
  padding-left: 8px;
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
          <li><a href="adminlogin.php"><span>Admin</span></a></li>
         
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
<!--
.style3 {color: #0000FF; font-weight: bold; font-size: 18px; }
.style4 {
	font-size: 24px;
	font-weight: bold;
	color: #FF6600;
}
-->
</style>

<body bgcolor=#FFFFFF >
<p align="center" class="style4">Time Table</p>
<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
$sql="SELECT day,p1,p2,p3,p4,p5,p6,p7 from timetable;";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<table width='600' border='1 align='center>
  <tr>
    <td width='241'><div align='center'><span class='style3'>DAY</span></div></td>
    <td width='168'><div align='center'><span class='style3'>8:45 - 9:45</span></div></td>
    <td width='109'><div align='center'><span class='style3'>9:45 - 10:45</span></div></td>
    <td width='109'><div align='center'><span class='style3'>10:45 - 11:45</span></div></td>
	<td width='109'><div align='center'><span class='style3'>11:45 - 12:45</span></div></td>
	<td width='109'><div align='center'><span class='style3'>12:45 - 01:30</span></div></td>
    <td width='109'><div align='center'><span class='style3'>01:30 - 02:30</span></div></td>
	<td width='109'><div align='center'><span class='style3'>02:30 - 03:30</span></div></td>
      </tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"<td><div align='center'>".$row['day']"</div></td>""<td><div align='center'>".$row['p1']"</div></td>""<td><div align='center'>".$row['p2']"</div></td>""<td><div align=center'>".$row['p3']"</div></td>""<td><div align='center'>".$row['p4']"</div></td>""<td><div align='center'>".$row['p5']"</div></td>""<td><div align='center'>".$row['p6']"</div></td>""<td><div align='center'>".$row['p7']"</div></td>";
    }
    echo "</table>";
}
?>
</body>
</html>
<div class="img"></div>
          </div>
        <div class="article">
         <p align="right"><a href="adminmain.php">Back</a></p>
		
		

          <div class="clr"></div>
        </div>
        </div>
      <div class="sidebar">
       
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="adminmain.html">Home</a></li>
              <button class="dropdown-btn">Teacher
              <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-container">
                <ul>
			     <li><a href="addsubteach.php">Add Subject and Teacher</a></li> 
                 <li><a href="viewtime.php">View Time Table</a></li>  
			     <li><a href="teacherlist.php">View Teacher List</a></li> 
                 <li><a href="addteacher.php">Add Teacher</a></li>
			     <li><a href="updateteacher.php">Update Teacher</a></li>
			     <li><a href="deleteteacher.php">Delete Teacher</a></li>
			     <li><a href="viewteacher.php">View teacher</a></li>
                <li><a href="asscrtr.php">Assigns course to teacher</a></li>
                <li><a href="asstrdept.php">Assigns teacher to department</a></li>
			    <li><a href="asstrsec.php">Assigns teacher to a section</a></li>
                  </ul></div>
            
            <button class="dropdown-btn">Student
              <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-container">
                <ul>
                 <li><a href="addstudent.php">Add Student</a></li>
			     <li><a href="updatestudent.php">Update Student</a></li>
			     <li><a href="deletestudent.php">Delete Student</a></li>
                 <li><a href="viewstudent.php">View Students</a></li>
			     <li><a href="assstsec.php">Assigns students to section</a></li>
                  </ul></div>
            
            <button class="dropdown-btn">Others
              <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-container">
                <ul>
                    <li><a href="adddept.php">Add Department</a></li>
                    <li><a href="addcourse.php">Add Courses</a></li>
			        <li><a href="addsec.php">Add Section</a></li>
                    <li><a href="viewdepartment.php">View Departments</a></li>
                    <li><a href="viewsection.php">View Sections</a></li>
                    <li><a href="viewcourse.php">View Courses</a></li>
                    <li><a href="viewsubjects.php">View Subjects</a></li>
                  </ul></div>
             
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
<script>
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
    </script>
</html>

