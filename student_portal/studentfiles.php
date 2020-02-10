<?php
session_start();

if ($_GET['cid']) {
  $_SESSION['cid']=$_GET['cid'];
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  -->
 <style>
 body {
   background-image: url('.jpeg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: 100% 700px;
   justify-content: center;
   }
 .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:#51b5a4;
    color: white;
    text-align: center;
 }
   .jumbotron {
     background-color: #lightblue;
     color: #fff;
     padding: 100px 25px;
   }
   .container-fluid {
     padding: 60px 50px;
   }
   .bg-grey {
     background-color: #lightblue;
   }
   .logo-small {
     color: #lightblue;
     font-size: 50px;
   }
   .logo {
     color: #lightblue;
     font-size: 200px;
   }
   .thumbnail {
     padding: 0 0 15px 0;
     border: none;
     border-radius: 0;
   }
   .thumbnail img {
     width: 100%;
     height: 100%;
     margin-bottom: 10px;
   }
   .carousel-control.right, .carousel-control.left {
     background-image: none;
     color: #f4511e;
   }
   .carousel-indicators li {
     border-color: #f4511e;
   }
   .carousel-indicators li.active {
     background-color: #f4511e;
   }
   .item h4 {
     font-size: 19px;
     line-height: 1.375em;
     font-weight: 400;
     font-style: italic;
     margin: 70px 0;
   }
   .item span {
     font-style: normal;
   }
   .panel {
     border: 1px solid #f4511e;
     border-radius:0 !important;
     transition: box-shadow 0.5s;
   }
   .panel:hover {
     box-shadow: 5px 0px 40px rgba(0,0,0, .2);
   }
   .panel-footer .btn:hover {
     border: 1px solid #f4511e;
     background-color: #fff !important;
     color: #f4511e;
   }
   .panel-heading {
     color: #fff !important;
     background-color: #51b5a4;
     padding: 25px;
     border-bottom: 1px solid transparent;
     border-top-left-radius: 0px;
     border-top-right-radius: 0px;
     border-bottom-left-radius: 0px;
     border-bottom-right-radius: 0px;
   }
   .panel-footer {
     background-color: white !important;
   }
   .panel-footer h3 {
     font-size: 32px;
   }
   .panel-footer h4 {
     color: #aaa;
     font-size: 14px;
   }
   .panel-footer .btn {
     margin: 15px 0;
     background-color: #51b5a4;
     color: #fff;
   }
   .navbar {
     margin-bottom: 0;
     background-color: #51b5a4;
     z-index: 9999;
     border: 0;
     font-size: 12px !important;
     line-height: 1.42857143 !important;
     letter-spacing: 4px;
     border-radius: 0;
   }
   .navbar li a, .navbar .navbar-brand {
     color: #fff !important;
     margin-top: 5px;
   }
   .navbar-nav li a:hover, .navbar-nav li.active a {
     color: #51b5a4 !important;
     background-color: #fff !important;
   }
   .navbar-default .navbar-toggle {
     border-color: transparent;
     color: #fff !important;
   }
   @media screen and (max-width: 768px) {
     .col-sm-4 {
       text-align: center;
       margin: 25px 0;
     }
   }
     /*starting point*/

     .dropbtn {
       background-color: #51b5a4;
       color: black;
       padding: 7px;
       font-size: 16px;
       font-weight: bold;
       border: none;
       cursor: pointer;
       color: white;
     }
     .dropdown {
       position: relative;
        display: inline-block;
     }
     .dropdown-content {
       display: none;
       position: absolute;
       background-color: #51b5a4;
       min-width: 150px;
       box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
       z-index: 1;
     }
     .dropdown-content a {
       color: white;
       padding: 5px 10px;
       text-decoration: none;
       display: block;
       font-weight: bold;
     }
     .dropdown-content a:hover {
       background-color: #f1f1f1;
       color: black;
     }
     .dropdown:hover .dropdown-content {
       display: block;
     }
     .dropdown:hover .dropbtn {
        background-color: white;
        color: black;
        border-radius: 3px;
     }
     /*ending point*/
 </style>
 </head>
 <body>

 <!-- navigation start -->
 <nav class="navbar navbar-default navbar-fixed-top">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <img src="images/logo.jpg" style="height: 60px; width: 150px;margin-top: 0px;">
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar nav-pills" style="margin-left: 50px;">
              <li ><a href="studenthome.php">HOME</a></li>
         <li ><a href="scholarpageO.php">SCHOLARSHIP</a></li>
            <li><a href="studentclass.php">CLASSES</a></li>

         <li><a href="cntc1.php">CONTACT</a></li>

         <li><a href="aboutus.php">ABOUT</a></li>
       </ul>
       <div class="navbar-nav ml-auto" style="margin-top:13px; margin-left: 25%; ">
         <div class="dropdown">
           <button class="dropbtn"><?php echo $_SESSION['student_email']; ?>&nbsp <span class="glyphicon glyphicon-chevron-down"></span></button>
           <div class="dropdown-content">

             <a href="clientinfo.php">Settings</a>
             <a href="studentclass.php?logout='1'">Logout</a>
           </div>
         </div>
       </div>

     </div>
 </nav>
 <!-- navigation end --><br><br>
 <div style="width:1000px;">
 <div style="float:left; margin-left:100px;">
 <?php
 $conn = mysqli_connect('localhost','root','','student_portal');
 $classkey=$_GET['cid'];

 $query="SELECT `file_id`, `class_id`, `file_name`, `file_path`, `file_type` FROM `files` WHERE class_id='$classkey'";
 $result=mysqli_query($conn, $query);
if (mysqli_num_rows($result)>0) {
   while($row= mysqli_fetch_assoc($result)){
   $file=$row['file_name'];
   $filepath=$row['file_path'];
   $i=1;
   if ($i==1) {
     echo "<br><br>";
     $i=2;
   }
    echo '<a href="openfile.php?open='.$filepath.'">'.$file.'</a>';
   }
} else {
  echo "<div class='alert alert-warning  text-center font-weight-bold h3' style='margin-top: 20px'>Sorry! No File are Uploaded on this Class.</div>";
}
  ?>
</div>
<div style="height:150px;width:170px; background-color:grey;float:right;margin-left:55%; margin-top:50px;  border-radius:5px;">
  <form method="post" action="">
    <div class="form-group">
      <label style="color:white; margin-top:10px;margin-left:30%;">Mid Term</label>
      <?php
      $stdemail=  $_SESSION['student_email'];
      $classid=$_SESSION['cid'];
      $query1="SELECT `mid` FROM `keytable` WHERE unique_key='$classid' AND student_email='$stdemail'";
      $result1=mysqli_query($conn,$query1);
      $no=1;
      $row1=mysqli_fetch_assoc($result1);

      echo "<h3 style='color:white; margin-left:30%;'>".$row1['mid']."</h3>";
      ?>

    </div>
    </form>
</div>
<div style="height:150px;width:170px; background-color:grey;float:right;margin-left:55%; margin-top:50px;  border-radius:5px;">
  <form method="post" action="">
    <div class="form-group">
      <label style="color:white; margin-top:10px;margin-left:30%;">Final Term</label>
      <?php
      $stdemail=  $_SESSION['student_email'];
      $classid=$_SESSION['cid'];
      $query1="SELECT `final` FROM `keytable` WHERE unique_key='$classid' AND student_email='$stdemail'";
      $result1=mysqli_query($conn,$query1);
      $no=1;
      $row1=mysqli_fetch_assoc($result1);

      echo "<h3 style='color:white; margin-left:30%;'>".$row1['final']."</h3>";
      ?>

    </div>
    </form>
</div>
<div style="height:150px;width:170px; background-color:grey;float:right;margin-left:55%; margin-top:50px;  border-radius:5px;">
  <form method="post" action="">
    <div class="form-group">
      <label style="color:white; margin-top:10px;margin-left:30%;">Internal</label>
      <?php
      $stdemail=  $_SESSION['student_email'];
      $classid=$_SESSION['cid'];
      $query1="SELECT `internal` FROM `keytable` WHERE unique_key='$classid' AND student_email='$stdemail'";
      $result1=mysqli_query($conn,$query1);
      $no=1;
      $row1=mysqli_fetch_assoc($result1);

      echo "<h3 style='color:white; margin-left:30%;'>".$row1['internal']."</h3>";
      ?>

    </div>
    </form>
</div>
</div>
 <br>
 <br>
 <footer class="page-footer font-small indigo" style="background-color: #51b5a4; margin-top:50%;>
   <!-- Footer Links -->
   <div class="container text-center text-md-left">
     <!-- Grid row -->
     <div class="row">
       <!-- Grid column -->
       <div class="col-md-3 mx-auto">
         <!-- Links -->
         <h5 style="color: white;" class="font-weight-bold text-uppercase mt-3 mb-4">Contact Developers</h5>
         <ul class="list-unstyled">
           <li>
             <p style="color: white;">Contact Dev Team</p>
           </li>

         </ul>
       </div>
       <!-- Grid column -->
       <hr class="clearfix w-100 d-md-none">
       <!-- Grid column -->
       <div class="col-md-3 mx-auto">
         <!-- Links -->
         <h5 style="color: white;" class="font-weight-bold text-uppercase mt-3 mb-4">Email</h5>
         <ul class="list-unstyled">
           <li>
             <p style="color: white;">maidaiftikhar5@gmail.com</p>
           </li>
           <li>
             <p style=" color: white;">sumeethassan4@gmail.com</p>
           </li>
           <li>
             <p style="color: white;">hadiqakhan566@gmail.com</p>
           </li>
           <li>
             <p style="color: white;">primekhan555@gmail.com</p>
           </li>
         </ul>
       </div>
       </div>
       </div>
     </div>
   </div>
   <!-- Footer Links -->
   <!-- Copyright -->
   <div class="footer-copyright text-center py-3 ">
     <p style="color: white;"> © 2019 Copyright <br>Student Portal 2019</p>
   </div>
   <!-- Copyright -->
 </footer>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
 </html>