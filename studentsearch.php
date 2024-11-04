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
  </style><link rel="stylesheet" type="text/css" href="display.css">
  <style>
 
  </style>
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

    <center>
    <div class="container">
    <div class="title">Search</div>
    <div class="content">
        <form name ="forml" action=""  method="post"> 
        <div class="user-details">
          <div class="input-box">
            <span class="details">Roll No.</span>
            <input type="text" name ="roll_no" placeholder="Enter Student Roll Number"required="">
          </div>

<div class="button">
<input type="submit" name="submit5" value="search">
</div>


</table>
</form>
</body>
</html>

<?php

if (isset ($_POST["submit5"]))
{
$res=mysqli_query($link,"SELECT * from studinfo where roll_no='$_POST[roll_no]' ");
echo"<table border=1>";
echo"<center>";
echo"<tr>";
echo"<th>";  echo"Roll No.";  echo"</th>";
echo"<th>";  echo"Student Name";  echo"</th>";
echo"<th>";  echo"Father's Name";  echo"</th>";
echo"<th>";  echo"Mother's Name";  echo"</th>";
echo"<th>";  echo"Date Of Birth";  echo"</th>";
echo"<th>";  echo"Phone No.";  echo"</th>";
echo"<th>";  echo"Email";  echo"</th>";
echo"<th>";  echo"Gender";  echo"</th>";
echo"<th>";  echo"Bank Account  Number";  echo"</th>";
echo"<th>";  echo"IFSC Code";  echo"</th>";
echo"<th>";  echo"Bank Name";  echo"</th>";
echo"<th>";  echo"Aadhaar Card Number";  echo"</th>";
echo"<th>";  echo"PAN Card Number";  echo"</th>";
echo"<th>";  echo"Vaccination";  echo"</th>";
echo"<th>";  echo"Blood Group ";  echo"</th>";
echo"<th>";  echo"Address";  echo"</th>";
echo"<th>";  echo"District";  echo"</th>";
echo"<th>";  echo"Pincode";  echo"</th>";
echo"<th>";  echo"State";  echo"</th>";
echo"<th>";  echo"Branch";  echo"</th>";
echo"<th>";  echo"Semester";  echo"</th>";
echo"<th>";  echo"Admission Year";  echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_array($res) )
{
    echo"<tr>";
    echo"<td>";  echo $row["roll_no"];  echo"</td>";
    echo"<td>";  echo $row["username"];  echo"</td>";
    echo"<td>";  echo $row["father_name"];  echo"</td>";
    echo"<td>";  echo $row["mother_name"];  echo"</td>";
    echo"<td>";  echo $row["dob"];  echo"</td>";
    echo"<td>";  echo $row["phone_no"];  echo"</td>";
    echo"<td>";  echo $row["email"];  echo"</td>";
    echo"<td>";  echo $row["gender"];  echo"</td>";
    echo"<td>";  echo $row["account"];  echo"</td>";
    echo"<td>";  echo $row["ifsc"];  echo"</td>";
    echo"<td>";  echo $row["bank_name"];  echo"</td>";
    echo"<td>";  echo $row["aadhar"];  echo"</td>";
    echo"<td>";  echo $row["pan"];  echo"</td>";
    echo"<td>";  echo $row["vaccination"];  echo"</td>";
    echo"<td>";  echo $row["blood"];  echo"</td>";
    echo"<td>";  echo $row["address"];  echo"</td>";
    echo"<td>";  echo $row["district"];  echo"</td>";
    echo"<td>";  echo $row["pincode"];  echo"</td>";
    echo"<td>";  echo $row["state"];  echo"</td>";
    echo"<td>";  echo $row["branch"];  echo"</td>";
    echo"<td>";  echo $row["semester"];  echo"</td>";
    echo"<td>";  echo $row["admission_year"];  echo"</td>";
    echo"</tr>";echo"</center>";
}
echo"</table>";
}
?>