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
            <input type="text" name ="teacher_id" placeholder="Enter Teacher Id"required="">
          </div></div>
          <div class="button">
          <input type="submit" name="submit" value="Search">
</div>
  </form>
</div>
</body>
</html>


<?php

$con = new PDO("mysql:host=localhost;dbname=staffinfo",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["teacher_id"];
	$sth = $con->prepare("SELECT * FROM `staff` WHERE teacher_id = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table border=3 cellspacing=5>
        <tr>
<td>Teacher Id no</td>
		<td>Name</td>
		<td>Father's Name</td>
		<td>Date of Birth</td>
    <td>Appointment date</td>
		<td>Aadhaar Card Number</td>
    <td>PAN Card Number</td>
    <td>Phone Number</td>
		<td>Email</td>
    <td>Bank Account Number</td>
    <td>IFSC Code</td>
    <td>Bank Name</td>
		<td>Education Qualification</td>
		<td>Designation</td>
		<td>Department</td>
		<td>Gender</td>
		<td>Permanent Residence</td>
    <td>Current Residence</td>
		<td>Height (in feet)</td>
		<td>Weight (in kg)</td>
		<td>Nominee Name</td>
		<td>Nominee Date Of Birth</td>
		<td>Nomiee Residence</td>
		<td>Nomiee Bank Account Number</td>
		<td>IFSC Code</td>
		<td>Bank Name</td>
        <td>Update/Edit</td>
</tr>
			<tr>
				<td><?php echo $row->teacher_id; ?></td>
				<td><?php echo $row->name;?></td>
        <td><?php echo $row->fname; ?></td>
        <td><?php echo $row->dob; ?></td>
				<td><?php echo $row->appoint_date;?></td>
        <td><?php echo $row->aadhar;?></td>
        <td><?php echo $row->pan; ?></td>
				<td><?php echo $row->phone_no;?></td>
        <td><?php echo $row->email; ?></td>
				<td><?php echo $row->account;?></td>
        <td><?php echo $row->ifsc; ?></td>
        <td><?php echo $row->bank_name; ?></td>
				<td><?php echo $row->education_qualification;?></td>
				<td><?php echo $row->designation;?></td>
        <td><?php echo $row->department;?></td>
        <td><?php echo $row->gender;?></td>
        <td><?php echo $row->address;?></td>
        <td><?php echo $row->caddress;?></td>
        <td><?php echo $row->height;?></td>
        <td><?php echo $row->weight;?></td>
        <td><?php echo $row->nominee;?></td>
        <td><?php echo $row->ndob;?></td>
        <td><?php echo $row->naddress;?></td>
        <td><?php echo $row->naccount;?></td>
        <td><?php echo $row->nifsc;?></td>
        <td><?php echo $row->nbank_name;?></td>
                <td><a href="staffupdate.php?teacher_id=<?php echo $row->teacher_id;?>">Update</a></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>

