<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "placement";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE placed set username='" . $_POST['username'] . "', father_name='" . $_POST['father_name'] . "',dob='" . $_POST['dob'] . "', phone_no='" . $_POST['phone_no'] . "', email='" . $_POST['email'] . "' ,gender='" . $_POST['gender'] . "' ,date_join='" . $_POST['date_join'] . "' ,duration='" . $_POST['duration'] . "' ,company='" . $_POST['company'] . "' , address='" . $_POST['address'] . "', branch='" . $_POST['branch'] . "', passout_year='" . $_POST['passout_year'] . "', percentage='" . $_POST['percentage']. "', placement='" . $_POST['placement']. "' WHERE roll_no='" . $_POST['roll_no'] . "'");
$message = "Record Modified Successfully";

}
$result = mysqli_query($conn,"SELECT * FROM placed WHERE roll_no='" . $_GET['roll_no'] . "'");
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
<input type="hidden" name="roll_no" class="txtField" >
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
            <span class="details">Date Of Joining</span>
            <input type="text" name ="date_join" placeholder="Enter Date Of Joining "value="<?php echo $row['date_join']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Duration</span>
            <input type="text" name ="duration" placeholder="Enter Duration " value="<?php echo $row['duration']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Company Name</span>
            <input type="text" name ="company" placeholder="Enter Company Name " value="<?php echo $row['company']; ?>">
          </div>
<div class="input-box">
            <span class="details">Address</span>
            <input type="text" name ="address" placeholder="Enter Student Address" required=""value="<?php echo $row['address']; ?>">
          </div>
         
          <div class="input-box">
            <span class="details">Branch</span>
            <input type="text" name ="branch" placeholder="Enter Student Branch " required=""value="<?php echo $row['branch']; ?>">
          </div>
          
          <div class="input-box">
            <span class="details">Passout Year</span>
<input type="date" name ="passout_year" placeholder="Enter Student Passout Year" required=""value="<?php echo $row['passout_year']; ?>">
</div>
<div class="input-box">
            <span class="details">final percentage</span>
            <input type="text" name ="percentage" placeholder="Enter Student percentage" required=""value="<?php echo $row['percentage']; ?>">
          </div>
<div class="input-box">
          <span class="details">Placement</span>
          <select name="placement" value="<?php echo $row['percentage']; ?>">
          <option name="placement"></option>
<option name="placement" value="yes">Yes</option>
<option name="placement" value="no">No</option>
<option name="placement" value="higher_education">Higher Education</option>
</select>
</div>
</div>

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