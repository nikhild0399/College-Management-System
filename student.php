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
            <span class="details">Mother's Name</span>
<input type="text" name ="mother_name" placeholder="Enter Student Mother's Name " required="">
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
            <span class="details">Aadhaar Card Number</span>
<input type="text" name ="aadhar" placeholder="Enter Aadhar Number"required=""maxlength="12"Pattern="[0-9]+" title="Use only numbers">
</div>
<div class="input-box">
            <span class="details">PAN Card Number</span>
<input type="text" name ="pan" placeholder="Enter PAN Number"required=""maxlength="10">
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
            <input type="text" name ="blood" placeholder="Enter Student Blood Group" required="">
          </div>
<div class="input-box">
            <span class="details">Address</span>
            <input type="text" name ="address" placeholder="Enter Student Address" required="">
          </div>
          <div class="input-box">
            <span class="details">District</span>
<input type="text" name ="district" placeholder="Enter Student District" required="">
          </div>
          <div class="input-box">
            <span class="details">Pincode</span>
            <input type="text" name ="pincode" placeholder="Enter Student Pincode" required="">
          </div>
          <div class="input-box">
            <span class="details">State</span>
<input type="text" name ="state" placeholder="Enter Student State " required="">
          </div>
          <div class="input-box">
            <span class="details">Branch</span>
            <input type="text" name ="branch" placeholder="Enter Student Branch " required="">
          </div>
          <div class="input-box">
            <span class="details">Semester </span>
            <input type="text" name ="semester" placeholder="Enter Student Semester " required=""Pattern="[0-9]+" title="Only numbers format">
          </div>
          <div class="input-box">
            <span class="details">Admission Year</span>
<input type="date" name ="admission_year" placeholder="Enter Student Admission Year" required="">
</div></div>
<div class="button">
            <input type="submit" name="submit1" value="insert">
        </div>

      </form>
    

</body>
</html>
<?php
if (isset ($_POST["submit1"]))
{
mysqli_query($link,"insert into studinfo values('$_POST[roll_no]','$_POST[username] ','$_POST[father_name]','$_POST[mother_name]','$_POST[dob]','$_POST[phone_no]','$_POST[email]','$_POST[gender]','$_POST[account]','$_POST[ifsc]','$_POST[bank_name]','$_POST[aadhar]','$_POST[pan]','$_POST[vaccination]','$_POST[blood]','$_POST[address]','$_POST[district]','$_POST[pincode]','$_POST[state]','$_POST[branch]','$_POST[semester]','$_POST[admission_year]')");
echo "Record inserted successfully ";
}
if (isset ($_POST["submit2"]))
{
mysqli_query($link,"delete from studinfo where roll_no='$_POST[roll_no] ' ");
echo "Record deleted successfully ";
}
if (isset ($_POST["submit3"]))
{
mysqli_query($link,"update studinfo set username='$_POST[city] ' where username='$_POST[username]' ");
}

if (isset ($_POST["submit4"]))
{
$res=mysqli_query($link,"SELECT * from studinfo");
echo"<table border=5>";
echo"<tr>";
echo"<th >";  echo"Roll No.";  echo"</th>";
echo"<th>";  echo"Student Name";  echo"</th>";
echo"<th>";  echo"Father's Name";  echo"</th>";
echo"<th>";  echo"Mother's Name";  echo"</th>";
echo"<th>";  echo"Date Of Birth";  echo"</th>";
echo"<th>";  echo"Age";  echo"</th>";
echo"<th>";  echo"Phone No.";  echo"</th>";
echo"<th>";  echo"Email";  echo"</th>";
echo"<th>";  echo"Gender";  echo"</th>";
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
echo"<td>";  echo $row["age"];  echo"</td>";
echo"<td>";  echo $row["phone_no"];  echo"</td>";
echo"<td>";  echo $row["email"];  echo"</td>";
echo"<td>";  echo $row["gender"];  echo"</td>";
echo"<td>";  echo $row["address"];  echo"</td>";
echo"<td>";  echo $row["district"];  echo"</td>";
echo"<td>";  echo $row["pincode"];  echo"</td>";
echo"<td>";  echo $row["state"];  echo"</td>";
echo"<td>";  echo $row["branch"];  echo"</td>";
echo"<td>";  echo $row["semester"];  echo"</td>";
echo"<td>";  echo $row["admission_year"];  echo"</td>";
echo"</tr>";
}
echo"</table>";
}
if (isset ($_POST["submit5"]))
{
$res=mysqli_query($link,"SELECT * from studinfo where roll_no='$_POST[roll_no]' ");
echo"<table border=1>";
echo"<tr>";
echo"<th>";  echo"Roll No.";  echo"</th>";
echo"<th>";  echo"Student Name";  echo"</th>";
echo"<th>";  echo"Father's Name";  echo"</th>";
echo"<th>";  echo"Mother's Name";  echo"</th>";
echo"<th>";  echo"Date Of Birth";  echo"</th>";
echo"<th>";  echo"Age";  echo"</th>";
echo"<th>";  echo"Phone No.";  echo"</th>";
echo"<th>";  echo"Email";  echo"</th>";
echo"<th>";  echo"Gender";  echo"</th>";
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
    echo"<td>";  echo $row["age"];  echo"</td>";
    echo"<td>";  echo $row["phone_no"];  echo"</td>";
    echo"<td>";  echo $row["email"];  echo"</td>";
    echo"<td>";  echo $row["gender"];  echo"</td>";
    echo"<td>";  echo $row["address"];  echo"</td>";
    echo"<td>";  echo $row["district"];  echo"</td>";
    echo"<td>";  echo $row["pincode"];  echo"</td>";
    echo"<td>";  echo $row["state"];  echo"</td>";
    echo"<td>";  echo $row["branch"];  echo"</td>";
    echo"<td>";  echo $row["semester"];  echo"</td>";
    echo"<td>";  echo $row["admission_year"];  echo"</td>";
    echo"</tr>";
}
echo"</table>";
}
?>