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
	
$sql1 = "SELECT * from certificate where email='$a1'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc()
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Certificate</title>
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
  <header>
  <center><h4 style="color:#008081;"><b><b>WT SOLUTIONS (P) Ltd</b></b></h4>
  <h7><b><i style="color:#FDA400;">Ensure success on web</i></b></h7></center>
  </header>
  
  
  
  <h4 ><center><u>Appointment Letter</u></center></h4><br><br>
  <b><h6 style="text-align:right;">
  <?php
  echo $row1['date_of_printing'];
  ?>
  </h6></b><br><br>
 <p><h6>
 <?php
  echo $row1['name'];
  ?>
 <br>
  <?php
  echo $row1['address'];
  ?>
  </h6></p>
  
  <br><br>
  <h6>Subject:<u>Appointment for post of Public Relation Officer</u></h6></b>
  <br><br>
  <h6>Dear 
  Mr./Mrs.
  <?php
  echo $row1['name'];
  ?>
  
  We are pleased to offer you, the position of<b> 
  
   <?php
  if($row1['job_title']=='1')
  {
	  echo "English Content Writer";
  }
  else if($row1['job_title']=='2')
  {
	  echo "Hindi Content Writer";
  }
 else if($row1['job_title']=='3')
  {
	  echo "Web Developer";
  }
  else if($row1['job_title']=='4')
  {
	  echo "Graphic Designer";
  }
  else if($row1['job_title']=='5')
  {
	  echo "Social Media Executive";
  }
  else if($row1['job_title']=='6')
  {
	  echo "Public Relations Manager";
  }
  else if($row1['job_title']=='7')
  {
	  echo "Public Relations Officer";
  }
  else if($row1['job_title']=='8')
  {
	  echo "Public Relations Manager";
  }
  ?>
  
  </b> with <b>WT IT SOLUTIONS (P) Ltd.</b> on the following terms and conditions:
  <br><br><br><br><br><br>
  <p>
  <b>1. Commencement of Employment</b><br>
  Your employment will be effective, as of<b>
  <?php
  echo $row1['date'];
  ?>
  </b>.</p>
  <br><br><br><br><br><br>
  <p>
  <b>2.Job Title</b><br>
  Your job title will be <b>
  <?php
  if($row1['job_title']=='1')
  {
	  echo "English Content Writer";
  }
  else if($row1['job_title']=='2')
  {
	  echo "Hindi Content Writer";
  }
 else if($row1['job_title']=='3')
  {
	  echo "Web Developer";
  }
  else if($row1['job_title']=='4')
  {
	  echo "Graphic Designer";
  }
  else if($row1['job_title']=='5')
  {
	  echo "Social Media Executive";
  }
  else if($row1['job_title']=='6')
  {
	  echo "Public Relations Manager";
  }
  else if($row1['job_title']=='7')
  {
	  echo "Public Relations Officer";
  }
  else if($row1['job_title']=='8')
  {
	  echo "Public Relations Manager";
  }
  ?>
  </b>.
  </p>
  <br><br><br><br><br><br>
  <p>
  <b>3.Salary</b><br>
  Your monthly compensation package on salary <b>
  INR 
  <?php
  echo $row1['salary'];
  ?>
  <b> consolidated.
  </p><br><br><br><br><br></b>
  
  <b>4.Place of Posting</b><br>
  <?php
  if($row1['place_of_posting']=='1')
  {
	  echo "Jakhan Branch";
  }
  else if($row1['place_of_posting']=='2')
  {
	  echo "Majeeri Branch";
  }
 
  ?><br><br><br><br><br><br>
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
  <br><br><br><br>
  <div class="content">
   <header>
  <center><h4 style="color:#008081;"><b><b>WT SOLUTIONS (P) Ltd</b></b></h4>
  <h7><b><i style="color:#FDA400;">Ensure success on web</i></b></h7></center>
  </header>
  <br><br><br>
  <p>You will be posted at<b>
  <?php
  if($row1['place_of_posting']=='1')
  {
	  echo "Jakhan Branch";
  }
  else if($row1['place_of_posting']=='2')
  {
	  echo "Majeeri Branch";
  }
 
  ?>
  Dehradun,Uttarakhand
  </b>. You may however be required to work
at any place of business which the company has, or may later acquire.</p></h6>
<br>
<br><br><br><br><br>
<h6><b>5.Hours of Work</b>
<p>The normal working days are <b>Monday</b> through <b>Saturday</b>
.You will be required to work for such hours as necessary for the 
proper discharge of your duties to the Company. The normal working 
hours are from <b>
<?php
  echo $row1['work1'];
  ?> 
  
  to 
  
  <?php
  echo $row1['work2'];
  ?>
</b> and you may be required to work any 
additional hours in shifts as required by the company based on the work exigencies
for the effective performance of your role.</p>
<br>
<br><br><br><br><br><br>
<b>6.Nature of duties</b>
<p>You will perform to the best of your ability all the duties as are inherent in 
your post and such additional duties as the company may call upon you 
to perform , from time to time. Your specific duties are set out in Schedule 
II hereto.</p>
<br>
<br><br><br><br><br><br>
<b>7.Company Property</b>
<p>You will always maintain in good condition Company property, which may be entrusted 
to you for official use during the course of your employment and shall return
 all such property to the Company prior to relinquishment of your charge, 
 falling which the cost of the same will be recovered from you by the Company.</p>
 <br>
 <br><br><br><br><br><br>
 <b>8.Borrowing/accepting gifts</b>
 <p>You will not borrow or accept any money, gift, reward or compensation for your personal gains from or otherwise place 
 yourself under pecuniary obligation to any pecuniary obligation to any person/client with 
 whom you may be having official dealings.</p></h7>
 <br><br>
  <footer>
  <center><h7><b>WT IT Solutions Pvt. Ltd<br>
  (An ISO 9001:2008 Certified Company)<br>
  Office:158/7/2 Officers Enclave, Rajpur Road<br>
  Near Pacific Mall, Dehradun, Uttarakhand<br>
  Tel:+917055333321<br>
  Email:info@wtsolutions.cc<br>
  www.wtsolutions.cc</b></h7></center>
  </footer></div>
  <br><br>
  <div class="content">
  
 <header>
  <center><h4 style="color:#008081;"><b><b>WT SOLUTIONS (P) Ltd</b></b></h4>
  <h7><b><i style="color:#FDA400;">Ensure success on web</i></b></h7></center>
  </header>

 
 </h6>
 <br><br><br><br><br><br>
 
  <h6><b>9.Termination</b><br>
  <p>9.1 Your appointment can be terminated by the Company, without any reason, by giving you not less than 1 month prior notice in writing or salary in lieu 
  thereof. For the purpose of this clause, salary shall mean basic salary.<br>
  9.2 You may terminate your employment with the Company, without any cause, by giving no less than 1 month prior notice or salary for unsaved period,left 
  after adjustment of pending leaves, as on date.
  <br>9.3 The Company reserves the right to terminate your employment summarily without any notice period or termination payment, if it has resonable ground to believe
  you are guilty of misconduct or negligence, or have committed any fundamental breach of contact or caused any loss to the Company.
  <br>9.4 On the termination of your employment for whatever reason, you will return to the Company all property; 
  documents and paper, both original and copies thereof, including any
  samples, literature, contracts, records, lists, drawing, blueprints, letters, notes, data and the
  like; and Confidential information, in your possession or under your control relating to your
  employment or to clients' business affairs.</p>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <b>10.Confidential Information</b>
  <p>10.1 During your employment with the company you will devote your whole time, attention
  and skill to the best of your ability for its business. You shall not, directly or indirectly, engage or
  associate yourself with, be connected with, concerned, employed or engaged in any other
  business or activities or any other post or work part time or pursue any course of study whatsoever, without the prior permission of the Company.<br>
  <br><br><br><br> <br><br><br><br><br><br><br><br>
   <footer>
  <center><h7><b>WT IT Solutions Pvt. Ltd<br>
  (An ISO 9001:2008 Certified Company)<br>
  Office:158/7/2 Officers Enclave, Rajpur Road<br>
  Near Pacific Mall, Dehradun, Uttarakhand<br>
  Tel:+917055333321<br>
  Email:info@wtsolutions.cc<br>
  www.wtsolutions.cc</b></h7></center>
  </footer><br><br><br></div>
  <br><br>
  <div class="content">
  <header>
  <center><h4 style="color:#008081;"><b><b>WT SOLUTIONS (P) Ltd</b></b></h4>
  <h7><b><i style="color:#FDA400;">Ensure success on web</i></b></h7></center>
  </header>
  <br><br>

 
  10.2 You must always maintain the highest degree of confidentiality and keep as confidential the records, 
  documents and other Confidential Information relating to the business of the Company which may be known to you or confided
  in you by any means and you will use such records, documents and information only in a duly authorized 
  manner in the interest of the Company. For the purposes of this clause 'Confidential Information' means information about the Company's business and that of its customers which is not available
  to the general public and which may be learnt by you in the course of your employment.
  This includes, but is not limited to, information relating to the organisation
  ,its customers lists, employment policies, personnel, and information about the Company's products, processes including ideas, concepts, projections, technology, manuals, drawings,
  designs, specifications, and all papers, resumes, records and other documents containing such Confidential Information.<br>
  10.3 At no time, will you remove any Confidential Information from the office 
  without permission.<br>
  10.4 Your duty to safeguard and not disclose Confidential Information will survive the expiration or termination of this Agreement and/or your employment with the Company.<br>
  10.5 Breach of the conditions of this clause will render you liable to summary dismissal under clause above in addition to any other remedy the Company may have against you in law.</p>
  <br>
  <br><br><br><br><br>
  <b>11.Notices</b>
  <p>Notices may be given by you to the Company at its registered office address.Notices may be given by the Company to you at the address intimated by you in the official records.</p>
  <br>
  <br><br><br><br><br>
  <b>12.Applicability of Company Policy</b>
  <p>The Company shall be entitled to make policy declarations from time to time pertaining to matters like leave entitlement, maternity leave, employees' benefits, working hours, transfer policies, etc., and may alter the same from time to time as its sole direction. All such policy. 
  <br><br><br><br> <br><br><br><br>
  <footer>
  <center><h7><b>WT IT Solutions Pvt. Ltd<br>
  (An ISO 9001:2008 Certified Company)<br>
  Office:158/7/2 Officers Enclave, Rajpur Road<br>
  Near Pacific Mall, Dehradun, Uttarakhand<br>
  Tel:+917055333321<br>
  Email:info@wtsolutions.cc<br>
  www.wtsolutions.cc</b></h7></center>
  </footer><br>
  </div>
  <br><br>
  <div class="content">
  
  <header>
  <center><h4 style="color:#008081;"><b><b>WT SOLUTIONS (P) Ltd</b></b></h4>
  <h7><b><i style="color:#FDA400;">Ensure success on web</i></b></h7></center>
  </header><br><br><br><br>

  decisions of the Company shall be binding on you and shall override 
this Agreement to that extent.</p>
<br>
<br>
<b>13.Governing Law/Jurisdiction</b>
<p>Your employment with the Company is subject to Indian laws. All disputes 
shall be subject to the jurisdiction of District Court Dehradun only.</p>
<br>
<br>
<b>14.Acceptance of our offer</b>
<p>Please confirm your acceptance of this Contract of Employment by signing and 
returning the duplicate copy.</p>
<br>
<br>
<p>We welcome you, and look forward to receiving your acceptance and to working with you.

</p>
<br>
<br>
<b>Yours Sincerely</b>
<br>
<br>
<br>
<b>Ankit Sharma <br>
HR Manager<br>
20/02/2018</b>
<br>
<br>
<br>
<p>I agree to accept employment on the terms and condition above mentioned.</p>
<div class="row">
      <div class="col-sm-6 bg">
<p>Place:</p>
<p>Date:</p>
</div>
<div class="col-sm-6 bg">
<p>Name:</p>
<p>Signature:</p>
</div>
</div>
</h6>
<br>
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