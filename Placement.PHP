<?php
$servername="localhost";
$username="root";
$passward ="";
$dbname="placement";
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
<a href="*" class="arrow left"></a>
  <div class="container">
    
    <div class="title">Registration</div>
    <div class="content">
        <form name ="forml" action=""  method="post"> 
        <div class="user-details">
          <div class="input-box">
            <span class="details">Roll No.</span>
            <input type="text" name ="roll_no" placeholder="Enter Student Roll Number"  required="">
          </div>
          <div class="input-box">
            <span class="details">Student Name </span>
<input type="text" name ="username" placeholder="Enter Student Name " required="">
          </div>
          <div class="input-box">
            <span class="details">Father's Name</span>
            <input type="text" name ="father_name" placeholder="Enter Student Father's Name " required="">
          </div>
         
          <div class="input-box">
            <span class="details">Date Of Birth </span>
            <input type="date" name ="dob" required="">
          </div>
          
          <div class="input-box">
            <span class="details">Phone Number </span>
<input type="text" name ="phone_no" placeholder="Enter Phone Number" required=""Pattern="[0-9]+" title="Only numbers format"maxlength="10">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter Student Email" required="">
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
            <input type="text" name ="date_join" placeholder="Enter Date Of Joining ">
          </div>
          <div class="input-box">
            <span class="details">Duration</span>
            <input type="text" name ="duration" placeholder="Enter Duration " >
          </div>
          <div class="input-box">
            <span class="details">Company Name</span>
            <input type="text" name ="company" placeholder="Enter Company Name " >
          </div>
<div class="input-box">
            <span class="details">Address</span>
            <input type="text" name ="address" placeholder="Enter Student Address" required="">
          </div>
         
          <div class="input-box">
            <span class="details">Branch</span>
            <input type="text" name ="branch" placeholder="Enter Student Branch " required="">
          </div>
          
          <div class="input-box">
            <span class="details">Passout Year</span>
<input type="date" name ="passout_year" placeholder="Enter Student Passout Year" required="">
</div>
<div class="input-box">
            <span class="details">final percentage</span>
            <input type="text" name ="percentage" placeholder="Enter Student percentage" required="">
          </div>
<div class="input-box">
          <span class="details">Placement</span>
          <select name="placement" >
<option name="placement" value="yes">Yes</option>
<option name="placement" value="no">No</option>
<option name="placement" value="higher_education">Higher Education</option>
</select>
</div>
</div>


        
<div class="button">
            <input type="submit" name="submit1" value="insert">
        </div>

      </form>
    

</body>
</html>
<?php
if (isset ($_POST["submit1"]))
{
mysqli_query($link,"insert into placed values('$_POST[roll_no]','$_POST[username] ','$_POST[father_name]','$_POST[dob]','$_POST[phone_no]','$_POST[email]','$_POST[gender]','$_POST[date_join] ','$_POST[duration]','$_POST[company] ','$_POST[address]','$_POST[branch]','$_POST[passout_year]','$_POST[percentage]','$_POST[placement]')");
echo "Record inserted successfully ";
}


?>