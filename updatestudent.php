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
          </div></div>
          <div class="button">
          <input type="submit" name="submit" value="Search">
</div>
  </form>
</div>
</body>
</html>



<?php

$con = new PDO("mysql:host=localhost;dbname=studentinfo",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["roll_no"];
	$sth = $con->prepare("SELECT * FROM `studinfo` WHERE roll_no = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table border=3 cellspacing=5>
        <tr>
<td>Roll no</td>
		<td>student Name</td>
		<td>father Name</td>
		<td>mother</td>
		<td>dob</td>
		<td>phone</td>
		<td>email</td>
		<td>gender</td>
		<td>account no</td>
		<td>ifsc</td>
		<td>aadhar</td>
		<td>pan</td>
		<td>vacc</td>
		<td>blood</td>
		<td>adress</td>
		<td>dist</td>
		<td>pin</td>
		<td>state</td>
		<td>branch</td>
		<td>sem</td>
		<td>addmission</td>
        <td>Update/Edit</td>
</tr>
			<tr>
				<td><?php echo $row->roll_no; ?></td>
				<td><?php echo $row->username;?></td>
                <td><?php echo $row->father_name; ?></td>
				<td><?php echo $row->mother_name;?></td>
                <td><?php echo $row->dob; ?></td>
				<td><?php echo $row->phone_no;?></td>
                <td><?php echo $row->gender; ?></td>
				<td><?php echo $row->account;?></td>
                <td><?php echo $row->ifsc; ?></td>
				<td><?php echo $row->bank_name;?></td>
                <td><?php echo $row->aadhar; ?></td>
				<td><?php echo $row->pan;?></td>
                <td><?php echo $row->vaccination; ?></td>
				<td><?php echo $row->blood;?></td>
                <td><?php echo $row->address; ?></td>
				<td><?php echo $row->district;?></td>
                <td><?php echo $row->pincode; ?></td>
				<td><?php echo $row->state;?></td>
                <td><?php echo $row->branch; ?></td>
				<td><?php echo $row->semester;?></td>
				<td><?php echo $row->admission_year;?></td>
                <td><a href="update-process.php?roll_no=<?php echo $row->roll_no;?>">Update</a></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>
