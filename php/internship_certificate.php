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
	
$sql1 = "SELECT * from internship where email='$a1'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc()
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Internship</title>
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
  <td style="align:left"><strong>Ref:WTINC045/05/18</strong></td>
  <td style="text-align:right"><strong>Date: 25/05/2018</strong></td>
  </tr>
  </table>

  <br><br><br><br><br>
  <center><h3><b>TO WHOM IT MAY CONCERN</b></h3></center>
  <br><br>
  <p><h5>This is to certify that<b>
  <?php
  echo $row1['name'];
  ?>
  </b> student of B.Sc Animation & Gaming
  fromGraphic Era Hill University; Dehradun has successfully
  completed
	<?php
  echo $row1['date'];
  ?>
  internship program at<b> WT IT Solutions(P) Ltd</b>.
  <br><br><br><br>
  During the period of his internship programme <b>
  <?php
  echo $row1['name'];
  ?>
  </b>
  has closely worked as a part of our social media, graphic
  designing team. He has made valuable contributions to our team by successfully implementing his creative ideas
  for our key products.<br><br><br><br>
  During this tenure he was punctual, hardworking and inquisitive. We
  wish him good luck for all the future endeavors.</h5>
  </p>
  <br><br><br><br><br><br>
  <h6> Regards,<br><br>
  Ankit Sharma<br>
  HR Manager</h6>
  <br><br><br><br><br><br>
  
  
  <br>
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