<?php
$servername="localhost";
$username="root";
$passward ="";
$dbname="staffinfo";
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
    </style><link rel="stylesheet" type="text/css" href="css1.css">
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
    <div class="title">Search</div>
    <div class="content">
        <form name ="forml" action=""  method="post"> 
        <div class="user-details">
          <div class="input-box">
            <span class="details">Teacher Id</span>
<input type="text" name ="teacher_id" placeholder="Enter Teacher id"required="">
</div></div>
<div class="button">
<input type="submit" name="submit5" value="search">
</div>
</table>
</form>
</body>
</html>

<?php


if (isset ($_POST["submit4"]))
{
$res=mysqli_query($link,"SELECT * from staff");
echo"<table border=5>";
echo"<tr>";
echo"<th>";  echo"Teacher Id";  echo"</th>";
echo"<th>";  echo"Name";  echo"</th>";
echo"<th>";  echo"Father's Name";  echo"</th>";
echo"<th>";  echo"Husband's Name";  echo"</th>";
echo"<th>";  echo"Date of Brith";  echo"</th>";
echo"<th>";  echo"Appointed Date";  echo"</th>";
echo"<th>";  echo"Aadhaar Card Number";  echo"</th>";
echo"<th>";  echo"PAN Card Number";  echo"</th>";
echo"<th>";  echo"Phone No.";  echo"</th>";
echo"<th>";  echo"Email";  echo"</th>";
echo"<th>";  echo"Bank Account Number";  echo"</th>";
echo"<th>";  echo"IFSC Code";  echo"</th>";
echo"<th>";  echo"Bank Name";  echo"</th>";
echo"<th>";  echo"Education Qualification";  echo"</th>";
echo"<th>";  echo"Designation";  echo"</th>";
echo"<th>";  echo"Dapartment";  echo"</th>";
echo"<th>";  echo"Gender";  echo"</th>";
echo"<th>";  echo"Permanent Residence";  echo"</th>";
echo"<th>";  echo"Current Residence";  echo"</th>";
echo"<th>";  echo"Height";  echo"</th>";
echo"<th>";  echo"Weight";  echo"</th>";
echo"<th>";  echo"blood Group";  echo"</th>";
echo"<th>";  echo"vaccination";  echo"</th>";
echo"<th>";  echo"Nominee Name";  echo"</th>";
echo"<th>";  echo"Nominee Date Of Birth";  echo"</th>";
echo"<th>";  echo"Nominee Residence";  echo"</th>";
echo"<th>";  echo"Nominee Bank Account Number";  echo"</th>";
echo"<th>";  echo"IFSC Code";  echo"</th>";
echo"<th>";  echo"Bank Name";  echo"</th>";


echo"</tr>";
while($row=mysqli_fetch_array($res) )
{
echo"<tr>";
echo"<td>";  echo $row["teacher_id"];  echo"</td>";
echo"<td>";  echo $row["name"];  echo"</td>";
echo"<td>";  echo $row["fname"];  echo"</td>";
echo"<td>";  echo $row["hname"];  echo"</td>";
echo"<td>";  echo $row["dob"];  echo"</td>";
echo"<td>";  echo $row["appoint_date"];  echo"</td>";
echo"<td>";  echo $row["aadhar"];  echo"</td>";
echo"<td>";  echo $row["pan"];  echo"</td>";
echo"<td>";  echo $row["phone_no"];  echo"</td>";
echo"<td>";  echo $row["email"];  echo"</td>";
echo"<td>";  echo $row["account"];  echo"</td>";
echo"<td>";  echo $row["ifsc"];  echo"</td>";
echo"<td>";  echo $row["bank_name"];  echo"</td>";
echo"<td>";  echo $row["education_qualification"];  echo"</td>";
echo"<td>";  echo $row["designation"];  echo"</td>";
echo"<td>";  echo $row["department"];  echo"</td>";
echo"<td>";  echo $row["gender"];  echo"</td>";
echo"<td>";  echo $row["address"];  echo"</td>";
echo"<td>";  echo $row["caddress"];  echo"</td>";
echo"<td>";  echo $row["height"];  echo"</td>";
echo"<td>";  echo $row["weight"];  echo"</td>";
echo"<td>";  echo $row["blood"];  echo"</td>";
echo"<td>";  echo $row["vaccination"];  echo"</td>";
echo"<td>";  echo $row["nominee"];  echo"</td>";
echo"<td>";  echo $row["ndob"];  echo"</td>";
echo"<td>";  echo $row["naddress"];  echo"</td>";
echo"<td>";  echo $row["naccount"];  echo"</td>";
echo"<td>";  echo $row["nifsc"];  echo"</td>";

echo"</tr>";
}
echo"</table>";
}
if (isset ($_POST["submit5"]))
{
$res=mysqli_query($link,"SELECT * from staff where teacher_id='$_POST[teacher_id]' ");
echo"<table border=5>";
echo"<tr bgcolor=white>";
echo"<th>";  echo"Teacher Id";  echo"</th>";
echo"<th>";  echo"Name";  echo"</th>";
echo"<th>";  echo"Father's Name";  echo"</th>";
echo"<th>";  echo"Husband's Name";  echo"</th>";
echo"<th>";  echo"Date of Brith";  echo"</th>";
echo"<th>";  echo"Appointed Date";  echo"</th>";
echo"<th>";  echo"Aadhaar Card Number";  echo"</th>";
echo"<th>";  echo"PAN Card Number";  echo"</th>";
echo"<th>";  echo"Phone No.";  echo"</th>";
echo"<th>";  echo"Email";  echo"</th>";
echo"<th>";  echo"Bank Account Number";  echo"</th>";
echo"<th>";  echo"IFSC Code";  echo"</th>";
echo"<th>";  echo"Bank Name";  echo"</th>";
echo"<th>";  echo"Education Qualification";  echo"</th>";
echo"<th>";  echo"Designation";  echo"</th>";
echo"<th>";  echo"Dapartment";  echo"</th>";
echo"<th>";  echo"Gender";  echo"</th>";
echo"<th>";  echo"Permanent Residence";  echo"</th>";
echo"<th>";  echo"Current Residence";  echo"</th>";
echo"<th>";  echo"Height";  echo"</th>";
echo"<th>";  echo"Weight";  echo"</th>";
echo"<th>";  echo"Nominee Name";  echo"</th>";
echo"<th>";  echo"Nominee Date Of Birth";  echo"</th>";
echo"<th>";  echo"Nominee Residence";  echo"</th>";
echo"<th>";  echo"Nominee Bank Account Number";  echo"</th>";
echo"<th>";  echo"IFSC Code";  echo"</th>";
echo"<th>";  echo"Bank Name";  echo"</th>";


echo"</tr>";
while($row=mysqli_fetch_array($res) )
{
echo"<tr bgcolor=white>";
echo"<td>";  echo $row["teacher_id"];  echo"</td>";
echo"<td>";  echo $row["name"];  echo"</td>";
echo"<td>";  echo $row["fname"];  echo"</td>";
echo"<td>";  echo $row["hname"];  echo"</td>";
echo"<td>";  echo $row["dob"];  echo"</td>";
echo"<td>";  echo $row["appoint_date"];  echo"</td>";
echo"<td>";  echo $row["aadhar"];  echo"</td>";
echo"<td>";  echo $row["pan"];  echo"</td>";
echo"<td>";  echo $row["phone_no"];  echo"</td>";
echo"<td>";  echo $row["email"];  echo"</td>";
echo"<td>";  echo $row["account"];  echo"</td>";
echo"<td>";  echo $row["ifsc"];  echo"</td>";
echo"<td>";  echo $row["bank_name"];  echo"</td>";
echo"<td>";  echo $row["education_qualification"];  echo"</td>";
echo"<td>";  echo $row["designation"];  echo"</td>";
echo"<td>";  echo $row["department"];  echo"</td>";
echo"<td>";  echo $row["gender"];  echo"</td>";
echo"<td>";  echo $row["address"];  echo"</td>";
echo"<td>";  echo $row["caddress"];  echo"</td>";
echo"<td>";  echo $row["height"];  echo"</td>";
echo"<td>";  echo $row["weight"];  echo"</td>";
echo"<td>";  echo $row["nominee"];  echo"</td>";
echo"<td>";  echo $row["ndob"];  echo"</td>";
echo"<td>";  echo $row["naddress"];  echo"</td>";
echo"<td>";  echo $row["naccount"];  echo"</td>";
echo"<td>";  echo $row["nifsc"];  echo"</td>";

echo"</tr>";
}
echo"</table>";
}
?>