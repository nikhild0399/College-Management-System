<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Introduction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}
    
 .container {
      width: 100%;
   height: 100vh;
   background:linear-gradient(135deg,  #2235e4 ,#d64fa9);
   background-position:center;
background-size:cover;
    }
    .row{
    display: flex;
    height:88%;
    align-items:center;
  }
  .col{
    flex-basis: 50%;
  }
  .card{
    width:220px;
    height:230px;
    display:inline-block;
      border-radius:30px;
  
      padding: 15px 20px;
      box-sizing:border-box;
      cursor:pointer;
      margin:10px 15px;
     
      background-position:center;
      background-size:cover;
      transition: 0.5s;
  }
  .card1{
    background-image:url("https://i.ibb.co/fv0wZQ3/istockphoto-1256096552-612x612.jpg");
  }
  .card2{
    background-image:url("https://i.ibb.co/tY6Stsq/89484375.webp");
  }
  .card3{
    background-image:url("https://i.ibb.co/ZmRD3Y1/icon-256x256.png");
  }
  .card4{
    background-image:url("https://i.ibb.co/6mJpwn9/png-clipart-creative-learning-and-career-some-ideas-about-not-getting-a-job-information-logo-design.png");
  }
  .card5{
    background-image:url("https://i.ibb.co/7gFL8xG/education-design-vector-4215801.jpg");
  }
  .card6{
    background-image:url("https://i.ibb.co/n8d1LqR/226-2261312-employee-clipart-employee-icon-employee-management-system-logo.png");
  }

  .card:hover{
      transform:translateY(-30px);
  }
  h5{
      color:black;
      text-shadow:3px 2px 5px #999;
    font-size: 23px;
   


  }
  .card p{
    text-shadow:0 0 15px #000;
    font-size:8px;

  }
  
    h1 { 
    color:white;
    font-size: 80px;
    text-shadow:2px 2px 5px black;
    font-family:'open Sans';
  }
    
 

  

.circles{
    position:sticky;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles i{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles i:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles i:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles i:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles i:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles i:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles i:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles i:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles i:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles i:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles i:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
    </style>
</head>
<body>
<div class="container">
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

            <div class="circles">
          
    
<i></i><div class="row">
<div class="col">
<h1><b>GOVERNMENT POLYTECHNIC COLLEGE PANNA</b></h1>

</div>
<i></i>
<a href="about.php">
<div class="col">
<div class="card card1">

</div></a>
<i></i>
<a href="contact.php">
<div class="card card2">

</div>
<i></i>
<a href="gallery1.html">
<div class="card card3">

</div>
<i></i>
<a href="info.php">
<div class="card card4">

</div>
<i></i>
<a href="scorner.php">
<div class="card card5">
 
</div>
<i></i>
<a href="staffcorner.php">
<div class="card card6">
  
</div>
<i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
</div> 
</body>
    </html>
    <?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>