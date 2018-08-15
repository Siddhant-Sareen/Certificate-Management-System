<?php
$a1=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
	
{
	
$sql1 = "SELECT * from experience where email='$a1'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc()
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Experience</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="wt.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  .content{
  border-style:solid;
  border-width:1px;
  border-color:grey;
  padding:7%;
  margin-left:4%;
  margin-right:4%;
  text-align:justify;
  
  
  }
  </style>

  </head>
  <body>
  <div class="content">
  <br>
  <header>
  <center><h4 style="color:#008081;"><b><b>WT SOLUTIONS (P) Ltd</b></b></h4>
  <h7><b><i style="color:#FDA400;">Ensure success on web</i></b></h7></center>
  </header><br><br><br>
  <tr>
  <table style="width:100%;">
  <tr>
  <td style="align:left"><strong>SUB: Experience Letter</strong></td>
  <td style="text-align:right"><strong>Date: 
  <b>
  <?php
  echo $row1['date_of_printing'];
  ?>
  </b>
  <br>Ref:WTER18/</strong></td>
  </tr>
  </table>

  <br><br><br><br>
  <center><h3><b>TO WHOM IT MAY CONCERN</b></h3></center>
  <br><br><br>
  <p><h5>This is to certify that<b>
<?php
  echo $row1['name'];
  ?>
  </b> was employed with<b> WT IT Solutions(P) Ltd</b> From
  <?php
  echo $row1['time_period_from'];
  ?>
  to 
  <?php
  echo $row1['time_period_to'];
  ?>
  as a Public 
  Relations Officer(P.R.O.) for a period of <b>
 <?php
  echo $row1['duration'];
  ?>
  .</b>
  <br><br><br><br>
  His remuneration during the tenure was 
  <b>
<?php
  echo $row1['salary'];
  ?>
  </b>
  per month + consolidated.
  <br><br><br><br>
  During his tenure, he has carried out all his duties in a professional and sincere manner.
  <br><br><br><br>
  His sincere approach towards work and his friendly personality has set a high example among our other staff.
  <br><br><br><br><br>
  We wish that he succeeds in all his future endeavours
  </h5>
  </p>
  <br><br><br>
  <h6>
  <div class="row">
      <div class="col-sm-6 bg">
<p>Warm Regards,</p>
</div>
<div class="col-sm-6 bg">
<p style="text-align:right;"><b>Mr.Ankit Sharma<b></p>
<p style="text-align:right;">HR Manager</p>
</div>
</div>
  <br><br><br><br><br><br>
  
  
  
   <footer>
  <center><h7><b>WT IT Solutions Pvt. Ltd<br>
  (An ISO 9001:2008 Certified Company)<br>
  Office:158/7/2 Officers Enclave, Rajpur Road<br>
  Near Pacific Mall, Dehradun, Uttarakhand<br>
  Tel:+917055333321<br>
  Email:info@wtsolutions.cc<br>
  www.wtsolutions.cc</b></h7></center>
  </footer>
  </div>
  </body>
  </html>
  <?php
}
  ?>
  