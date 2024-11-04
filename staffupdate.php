<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "staffinfo";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE staff set teacher_id='" . $_POST['teacher_id'] . "', name='" . $_POST['name'] . "', fname='" . $_POST['fname'] . "', dob='" . $_POST['dob'] . "', appoint_date='" . $_POST['appoint_date'] . "' ,aadhar='" . $_POST['aadhar'] . "' ,pan='" . $_POST['pan'] . "' , phone_no='" . $_POST['phone_no'] . "' , email='" . $_POST['email'] . "' , account='" . $_POST['account'] . "', ifsc='" . $_POST['ifsc'] . "', bank_name='" . $_POST['bank_name'] . "', education_qualification='" . $_POST['education_qualification']. "', designation='" . $_POST['designation']. "', department='" . $_POST['department'] . "',gender='" . $_POST['gender'] . "',address='" . $_POST['address'] . "' ,caddress='" . $_POST['caddress'] . "', height='" . $_POST['height'] . "',weight='" . $_POST['weight'] . "', nominee='" . $_POST['nominee'] . "',ndob='" . $_POST['ndob'] . "',naddress='" . $_POST['naddress'] . "',naccount='" . $_POST['naccount'] . "',nifsc='" . $_POST['nifsc'] . "',nbank_name='" . $_POST['nbank_name'] . "' WHERE teacher_id='" . $_POST['teacher_id'] . "'");
$message = "Record Modified Successfully";

}
$result = mysqli_query($conn,"SELECT * FROM staff WHERE teacher_id='" . $_GET['teacher_id'] . "'");
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
<input type="hidden" name="teacher_id" class="txtField" >
<div class="input-box">
            <span class="details">Teacher Id</span>
<input type="text" name ="teacher_id" placeholder="Enter Teacher id"required=""value="<?php echo $row['teacher_id']; ?>">
</div>
<div class="input-box">
            <span class="details">Name</span>
<input type="text" name ="name" placeholder="Enter Staff Name"value="<?php echo $row['name']; ?>">
</div>
<div class="input-box">
            <span class="details">Father's Name</span>
<input type="text" name ="fname" placeholder="Enter Father's Name"value="<?php echo $row['fname']; ?>">
</div>

<div class="input-box">
            <span class="details">Date Of Birth </span>
<input type="date" name ="dob"value="<?php echo $row['dob']; ?>">
</div>
<div class="input-box">
            <span class="details">Appointed Date</span>
<input type="date" name ="appoint_date" value="<?php echo $row['appoint_date']; ?>">
</div>
<div class="input-box">
            <span class="details">Aadhaar Card Number</span>
<input type="text" name ="aadhar" placeholder="Enter Aadhar Number"maxlength="12"Pattern="[1-9]+" title="Only numbers format"value="<?php echo $row['aadhar']; ?>">
</div>
<div class="input-box">
            <span class="details">PAN Card Number</span>
<input type="text" name ="pan" placeholder="Enter PAN Number"maxlength="10"value="<?php echo $row['pan']; ?>">
</div>
<div class="input-box">
            <span class="details">Phone Number </span>
<input type="text" name ="phone_no" placeholder="Enter Staff Phone No"maxlength="10"Pattern="[1-9]+" title="Only numbers format"value="<?php echo $row['phone_no']; ?>">
</div>
<div class="input-box">
            <span class="details">Email</span>
<input type="email" name ="email" placeholder="Enter Staff Email"value="<?php echo $row['email']; ?>">
</div>
<div class="input-box">
            <span class="details">Bank Account Number</span>
<input type="text" name ="account" placeholder="Enter Bank Account Number"maxlength="18"value="<?php echo $row['account']; ?>">
</div>
<div class="input-box">
            <span class="details">IFSC Code</span>
<input type="text" name ="ifsc" placeholder="Enter Bank IFSC code"maxlength="12"value="<?php echo $row['ifsc']; ?>">
</div>
<div class="input-box">
            <span class="details">Bank Name</span>
<input type="text" name ="bank_name" placeholder="Enter Bank Name"value="<?php echo $row['bank_name']; ?>">
</div>
<div class="input-box">
            <span class="details">Educatiom Qualification</span>
<input type="text" name ="education_qualification" placeholder="Enter Staff Education Qualification"value="<?php echo $row['education_qualification']; ?>">
</div>
<div class="input-box">
            <span class="details">Designation</span>
<input type="text" name ="designation" placeholder="Enter Staff Designation"value="<?php echo $row['designation']; ?>">
</div>
<div class="input-box">
            <span class="details">Department</span>
<input type="text" name ="department" placeholder="Enter Staff Department"value="<?php echo $row['department']; ?>">
</div>
<div class="input-box">
          <span class="details">Gender</span>
          <select name="gender" >
<option name="gender" value="male">Male</option>
<option name="gender" value="female">female</option>
<option  name="gender" value="other">Other</option></select>
</div>
<div class="input-box">
            <span class="details">Permanent Residence</span>
<input type="text" name ="address" placeholder="Enter Permanent Residence"value="<?php echo $row['address']; ?>">
</div>
<div class="input-box">
            <span class="details">Current Residence</span>
<input type="text" name ="caddress" placeholder="Enter Current Residence"value="<?php echo $row['caddress']; ?>">
</div>
<div class="input-box">
            <span class="details">Height (in feet)</span>
<input type="text" name ="height" placeholder="Enter Your Height"value="<?php echo $row['height']; ?>">
</div>
<div class="input-box">
            <span class="details">Weight (in kg)</span>
<input type="text" name ="weight" placeholder="Enter Your Weight"value="<?php echo $row['weight']; ?>">
</div>
<div class="input-box">
            <span class="details">Nominee Name</span>
<input type="text" name ="nominee" placeholder="Enter Nominee Name"value="<?php echo $row['nominee']; ?>">
</div>
<div class="input-box">
            <span class="details">Nominee Date Of Birth </span>
<input type="date" name ="ndob"value="<?php echo $row['ndob']; ?>">
</div>
<div class="input-box">
            <span class="details">Nominee Residence</span>
<input type="text" name ="naddress" placeholder="Enter Nominee Residence"value="<?php echo $row['naddress']; ?>">
</div>
<div class="input-box">
            <span class="details">Nominee Bank Account Number</span>
<input type="text" name ="naccount" placeholder="Enter Bank Account Number"maxlength="18"value="<?php echo $row['naccount']; ?>">
</div>
<div class="input-box">
            <span class="details">IFSC Code</span>
<input type="text" name ="nifsc" placeholder="Enter Bank IFSC code"maxlength="12"value="<?php echo $row['nifsc']; ?>">
</div>
<div class="input-box">
            <span class="details">Bank Name</span>
<input type="text" name ="nbank_name" placeholder="Enter Bank Name"value="<?php echo $row['nbank_name']; ?>">
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