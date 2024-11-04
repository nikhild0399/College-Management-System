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
    </style><link rel="stylesheet" type="text/css" href="css.css">
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
    <div class="title">Registration</div>
    <div class="content">
        <form name ="forml" action=""  method="post"> 
        <div class="user-details">
          <div class="input-box">
            <span class="details">Teacher Id</span>
<input type="text" name ="teacher_id" placeholder="Enter Teacher id"required="">
</div>
<div class="input-box">
            <span class="details">Name</span>
<input type="text" name ="name" placeholder="Enter Staff Name"required="">
</div>
<div class="input-box">
            <span class="details">Father's Name/Husband's Name</span>
<input type="text" name ="fname" placeholder="Enter Father's Name"required="">
</div>
<div class="input-box">
            <span class="details">Date Of Birth </span>
<input type="date" name ="dob"required="">
</div>
<div class="input-box">
            <span class="details">Appoinment Date</span>
<input type="date" name ="appoint_date"required="">
</div>
<div class="input-box">
            <span class="details">Aadhaar Card Number</span>
<input type="text" name ="aadhar" placeholder="Enter Aadhar Number"required=""maxlength="12"Pattern="[0-9]+" title="Use only numbers">
</div>
<div class="input-box">
            <span class="details">PAN Card Number</span>
<input type="text" name ="pan" placeholder="Enter PAN Number"required=""maxlength="10">
</div>
<div class="input-box">
            <span class="details">Phone Number </span>
<input type="text" name ="phone_no" placeholder="Enter Staff Phone No"required=""maxlength="10"Pattern="[0-9]+" title="Use only numbers">
</div>
<div class="input-box">
            <span class="details">Email</span>
<input type="email" name ="email" placeholder="Enter Staff Email"required="">
</div>
<div class="input-box">
            <span class="details">Bank Account Number</span>
<input type="text" name ="account" placeholder="Enter Bank Account Number"required=""maxlength="18">
</div>
<div class="input-box">
            <span class="details">IFSC Code</span>
<input type="text" name ="ifsc" placeholder="Enter Bank IFSC code"required=""maxlength="12">
</div>
<div class="input-box">
            <span class="details">Bank Name</span>
<input type="text" name ="bank_name" placeholder="Enter Bank Name"required="">
</div>
<div class="input-box">
            <span class="details">Educatiom Qualification</span>
<input type="text" name ="education_qualification" placeholder="Enter Staff Education Qualification"required="">
</div>
<div class="input-box">
            <span class="details">Designation</span>
<input type="text" name ="designation" placeholder="Enter Staff Designation"required="">
</div>
<div class="input-box">
            <span class="details">Department</span>
<input type="text" name ="department" placeholder="Enter Staff Department"required="">
</div>
<div class="input-box">
          <span class="details" required="">Gender</span>
          <select name="gender" >
<option name="gender" value="male">Male</option>
<option name="gender" value="female">female</option>
<option  name="gender" value="other">Other</option></select>
</div>
<div class="input-box">
            <span class="details">Permanent Residence</span>
<input type="text" name ="address" placeholder="Enter Permanent Residence"required="">
</div>
<div class="input-box">
            <span class="details">Current Residence</span>
<input type="text" name ="caddress" placeholder="Enter Current Residence"required="">
</div>
<div class="input-box">
            <span class="details">Height (in cm)</span>
<input type="text" name ="height" placeholder="Enter Your Height"required=" title="Only numbers format">
</div>
<div class="input-box">
            <span class="details">Weight (in kg)</span>
<input type="text" name ="weight" placeholder="Enter Your Weight"required=""Pattern="[0-9]+" title="Only numbers format">
</div>
<div class="input-box">
            <span class="details">Blood Group</span>
<input type="text" name ="blood" placeholder="Enter Staff Blood Group"required="">
</div>
<div class="input-box">
          <span class="details" required="">Vaccination</span>
          <select name="vaccination" >
<option name="vaccination" value="yes">yes</option>
<option name="vaccination" value="no">no</option>
<option name="vaccination" value="first">first</option></select>
</div>
<div class="input-box">
            <span class="details">Nominee Name</span>
<input type="text" name ="nominee" placeholder="Enter Nominee Name"required="">
</div>
<div class="input-box">
            <span class="details">Nominee Date Of Birth </span>
<input type="date" name ="ndob"required="">
</div>
<div class="input-box">
            <span class="details">Nominee Residence</span>
<input type="text" name ="naddress" placeholder="Enter Nominee Residence"required="">
</div>
<div class="input-box">
            <span class="details">Nominee Bank Account Number</span>
<input type="text" name ="naccount" placeholder="Enter Bank Account Number"required=""maxlength="18">
</div>
<div class="input-box">
            <span class="details">IFSC Code</span>
<input type="text" name ="nifsc" placeholder="Enter Bank IFSC code"required=""maxlength="12">
</div>
<div class="input-box">
            <span class="details">Bank Name</span>
<input type="text" name ="nbank_name" placeholder="Enter Bank Name"required="">


</div></div>
<div class="button">
            <input type="submit" name="submit1" value="insert">
        </div>

</table>
</form>
</body>
</html>

<?php
if (isset ($_POST["submit1"]))
{
mysqli_query($link,"insert into staff values('$_POST[teacher_id]','$_POST[name]','$_POST[fname]','$_POST[dob]','$_POST[appoint_date]','$_POST[aadhar]','$_POST[pan]','$_POST[phone_no]','$_POST[email]','$_POST[account]','$_POST[ifsc]','$_POST[bank_name]','$_POST[education_qualification]','$_POST[designation]','$_POST[department]','$_POST[gender]','$_POST[address]','$_POST[caddress]','$_POST[height]','$_POST[weight]','$_POST[blood]','$_POST[vaccination]','$_POST[nominee]','$_POST[ndob]','$_POST[naddress]','$_POST[naccount]','$_POST[nifsc]','$_POST[nbank_name]')");
echo "Record inserted successfully ";
}

?>