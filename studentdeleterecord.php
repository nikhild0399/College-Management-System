<?php
$servername="localhost";
$username="root";
$passward ="";
$dbname="studentinfo";
$link=mysqli_connect($servername,$username, $passward,$dbname);
$con=mysqli_select_db($link,$dbname);
if($con)
{
echo("");
}
else 
{
die("connection failed because".mysqli_connect_error());
}
?>




<html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
   
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </style><link rel="stylesheet" type="text/css" href="new.css">
   </head>
<body>
<div class="containe">
  <br>
  <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" >College Management System</a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
                <li class="active"><a href="about.php">About us</a></li>
                <li class="active"><a href="contact.php">Contact us</a></li>
                <li class="active"><a href="info.php">College Information</a></li>
                <li class="active"><a href="gallery1.html">Gallery</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="studentcorner.php">Student Corner
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="student.php">Insert Records</a></li>

          <li><a href="updatestudent.php">Update Records</a></li>
          <li><a href="displaystudent.php">Display Records</a></li>
          <li><a href="studentsearch.php">Search Records</a></li>
          <li><a href="studentdeleterecord.php">Move Records</a></li>

        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="staffcorner.php">Staff Corner
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="staff.php">Insert Records</a></li>

          <li><a href="updatestaff.php">Update Records</a></li>
          <li><a href="staffdisplay.php">Display Records</a></li>
          <li><a href="searchstaff.php">Search Records</a></li>
          <li><a href="staffdeleterecord.php">Move Records</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="staffcorner.php">Placement Deatil
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Placement.PHP">Insert Records</a></li>
          <li><a href="placementupdate.php">Update Records</a></li>
          <li><a href="placementsearch.php">Search Records</a></li>
        </ul>
      </li>
           
                <li class="active"><a href="frmContact1.html"><span class="glyphicon glyphicon-user"></span> Create Account</a></li>
                <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
              <li class="dropdown">     

          </ul>
    </div>
    </nav>
</center>
  <div class="container">
    <div class="title">Passout/Incomplete/Transfer Student Records</div>
    <div class="content">
        <form name ="forml" action=""  method="post"> 
        <div class="user-details">
          <div class="input-box">
            <span class="details">Roll No.</span>
            <input type="text" name ="roll_no" placeholder="Enter Student Roll Number"required="">
          </div>
         
        <div class="button">
        <input type="submit" name="submit2" value="Incomplete">
        </div>&nbsp;&nbsp;&nbsp;
        <div class="button">
        <input type="submit" name="submit3" value="Transferred">
        </div>&nbsp;&nbsp;&nbsp;
        <div class="button">
        <input type="submit" name="submit4" value="Passout">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
<?php

if (isset ($_POST["submit2"]))
{
$query = mysqli_query($link,"INSERT INTO incomplete  SELECT * from studinfo where roll_no='$_POST[roll_no]'");
if($query)
{

  $del=mysqli_query($link,"DELETE from studinfo where roll_no='$_POST[roll_no] '");
}
echo "Your Record has been Successfully Transfer to Incomplete Records";
}
if (isset ($_POST["submit3"]))
{
$query = mysqli_query($link,"INSERT INTO transfer  SELECT * from studinfo where roll_no='$_POST[roll_no]'");
if($query)
{

  $del=mysqli_query($link,"DELETE from studinfo where roll_no='$_POST[roll_no] '");
}
echo "Your Record has been Successfully Transfer to Transfer Records";
}
if (isset ($_POST["submit4"]))
{
$query = mysqli_query($link,"INSERT INTO exstudent  SELECT * from studinfo where roll_no='$_POST[roll_no]'");
if($query)
{

  $del=mysqli_query($link,"DELETE from studinfo where roll_no='$_POST[roll_no] '");
}
echo "Your Record has been Successfully Transfer to Passout Records";
}
?>