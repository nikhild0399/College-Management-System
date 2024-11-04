<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE studinfo set roll_no='" . $_POST['roll_no'] . "', username='" . $_POST['username'] . "', father_name='" . $_POST['father_name'] . "', mother_name='" . $_POST['mother_name'] . "' ,dob='" . $_POST['dob'] . "', phone_no='" . $_POST['phone_no'] . "', email='" . $_POST['email'] . "' ,gender='" . $_POST['gender'] . "' ,account='" . $_POST['account'] . "' ,ifsc='" . $_POST['ifsc'] . "' ,bank_name='" . $_POST['bank_name'] . "' ,aadhar='" . $_POST['aadhar'] . "' ,pan='" . $_POST['pan'] . "' ,vaccination='" . $_POST['vaccination'] . "',blood='" . $_POST['blood'] . "' , district='" . $_POST['district'] . "', pincode='" . $_POST['pincode'] . "' ,state='" . $_POST['state'] . "', branch='" . $_POST['branch'] . "', semester='" . $_POST['semester'] . "', admission_year='" . $_POST['admission_year']. "' WHERE roll_no='" . $_POST['roll_no'] . "'");
$message = "Record Modified Successfully";

}
$result = mysqli_query($conn,"SELECT * FROM studinfo WHERE roll_no='" . $_GET['roll_no'] . "'");
$row= mysqli_fetch_array($result);
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
    <div class="title">Update Records</div>
    <div class="content">
        <form name ="forml" action=""  method="post"> 
        <div class="user-details">
<br>
<input type="hidden" name="roll_no" class="txtField" value="<?php echo $row['roll_no']; ?>">
<div class="input-box">
          <span class="details">Roll No.</span>
            <input type="text" name ="roll_no" placeholder="Enter Student Roll Number"  required=""value="<?php echo $row['roll_no']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Student Name </span>
<input type="text" name ="username" placeholder="Enter Student Name " required=""value="<?php echo $row['username']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Father's Name</span>
            <input type="text" name ="father_name" placeholder="Enter Student Father's Name " required=""value="<?php echo $row['father_name']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Mother's Name</span>
<input type="text" name ="mother_name" placeholder="Enter Student Mother's Name " required=""value="<?php echo $row['mother_name']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Date Of Birth </span>
            <input type="date" name ="dob" required=""value="<?php echo $row['dob']; ?>">
          </div>
       
          <div class="input-box">
            <span class="details">Phone Number </span>
<input type="text" name ="phone_no" placeholder="Enter Phone Number" required=""Pattern="[0-9]+" title="Only numbers format"maxlength="10"value="<?php echo $row['phone_no']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter Student Email" required=""value="<?php echo $row['email']; ?>">
          </div>
          <div class="input-box">
          <span class="details">Gender</span>
          <select name="gender" >
<option name="gender" value="male">Male</option>
<option name="gender" value="female">female</option>
<option  name="gender" value="other">Other</option></select>
</div>
<div class="input-box">
            <span class="details">Bank Account Number</span>
<input type="text" name ="account" placeholder="Enter Bank Account Number"required=""maxlength="18"value="<?php echo $row['account']; ?>">
</div>
<div class="input-box">
            <span class="details">IFSC Code</span>
<input type="text" name ="ifsc" placeholder="Enter Bank IFSC code"required=""maxlength="12"value="<?php echo $row['ifsc']; ?>">
</div>
<div class="input-box">
            <span class="details">Bank Name</span>
<input type="text" name ="bank_name" placeholder="Enter Bank Name"required=""value="<?php echo $row['bank_name']; ?>">
</div>
<div class="input-box">
            <span class="details">Aadhaar Card Number</span>
<input type="text" name ="aadhar" placeholder="Enter Aadhar Number"required=""maxlength="12"Pattern="[0-9]+" title="Use only numbers"value="<?php echo $row['aadhar']; ?>">
</div>
<div class="input-box">
            <span class="details">PAN Card Number</span>
<input type="text" name ="pan" placeholder="Enter PAN Number"required=""maxlength="10"value="<?php echo $row['pan']; ?>">
</div>
<div class="input-box">
          <span class="details">Vaccination</span>
          <select name="vaccination" >
<option name="vaccination" value="yes">Yes(both doses)</option>
<option name="vaccination" value="no">No</option>
<option  name="vaccination" value="first">Only First Dose</option></select>
</div>
<div class="input-box">
            <span class="details">Blood Group</span>
            <input type="text" name ="blood" placeholder="Enter Student Blood Group" required=""value="<?php echo $row['blood']; ?>">
          </div>
<div class="input-box">
            <span class="details">Address</span>
            <input type="text" name ="address" placeholder="Enter Student Address" required=""value="<?php echo $row['address']; ?>">
          </div>
          <div class="input-box">
            <span class="details">District</span>
<input type="text" name ="district" placeholder="Enter Student District" required=""value="<?php echo $row['district']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Pincode</span>
            <input type="text" name ="pincode" placeholder="Enter Student Pincode" required=""value="<?php echo $row['pincode']; ?>">
          </div>
          <div class="input-box">
            <span class="details">State</span>
<input type="text" name ="state" placeholder="Enter Student State " required=""value="<?php echo $row['state']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Branch</span>
            <input type="text" name ="branch" placeholder="Enter Student Branch " required=""value="<?php echo $row['branch']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Semester </span>
            <input type="text" name ="semester" placeholder="Enter Student Semester " required=""Pattern="[0-9]+" title="Only numbers format"value="<?php echo $row['semester']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Admission Year</span>
<input type="date" name ="admission_year" placeholder="Enter Student Admission Year" required=""value="<?php echo $row['admission_year']; ?>">
</div></div>
<div class="button">
<input type="submit" name="submit" value="Submit" class="button">
</div>
<div class="button">
<a href="updatestudent.php"><input type="Back" name="Back" value="Back" class="button"></a>
</div>
</form>
</div>
</div>

</body>
</html>