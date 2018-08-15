		<?php
include("connection.php");
$a1=$_GET['id'];
$sql="select * from agreement where email='$a1'";

$result = mysqli_query($conn, $sql) ;
$rowcount=mysqli_num_rows($result);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<html lang="en">
<head>
  <title>Experience</title>
  <meta charset="utf-8">
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
  <center><h4 style="color:#008081;"><b><b>WT IT SOLUTIONS (P) Ltd</b></b></h4>
  <h7><b><i style="color:#FDA400;">Ensure success on web</i></b></h7></center>
  </header>
  

  <br><br>
  <center><h5><b> INTERNSHIP AGREEMENT</b></h5></center>
  <br><br>
  <p><h6><b>This is an agreement among <u>WT IT SOLUTIONS(P.V.T) L.T.D ,  <?php echo $row['name']; ?></u><br><br>
    The purpose of this internship is for the Intern to learn about Company's business and to gain valuable insight and experience.<br><br>
    TERNS AND CONDITIONS -</b><br><br>
    The appointed Intern agrees that he will at all times faithfully, industriously, and to the best of his skill, ability, experience and talents, perform all the duties required of his position. In carrying out these duties and responsbilities, the intern should comply with all the Employer policies, procedures , rules and regulations, both written and oral, as are announced by the Employer from time to time. It is also understood and agreed to by the intern that his agreement.
    <br>
    &nbsp&nbsp<ol><b>
      <p><strong><h5>1. This internship is related to educational purpose and there is no gaurantee or expectationthat the activity will result in the employment with the Company</p></h5></strong><br><br>
      <p><strong><h5>2. The appointment of the inetrn will be official after a 7 day trial period after evaluation of his/her performance based work.</p></h5></strong><br><br>
      <p><strong><h5>3.  The education received by the Intern from the internship is for the express benefit of the Intern.</p></h5></strong><br><br>
      <p><strong><h5>4. The Intern does not replace or displace any employee of the Company.</p></h5></strong><br><br>
      <p><strong><h5>5. The Intern will get direct supervision from the the appropriate supervisor.</p></h5></strong><br><br>
      <p><strong><h5>6. The Comapany does not derive any immediate advantage from the activities performed by the Intern.</p></h5></strong><br><br>
      <p><strong><h5>7. Transportation to and from the Internship site is the reponsbility of the Intern.</p></h5></strong><br><br>
      <p><strong><h5>8. 
        The Intern agrees to be associated with the organization for maximum 3 months, later if he/she it can be negotiated by the firm and extended.
      </p></h5></strong><br><br>
      <p><strong><h5>9. Leave or off will only be entitled to the Intern with a notice of 2 days before leaving.</p></h5></strong><br><br>
</b>
<p><strong><h5>10. If the intern wants to terminate the internship before the completion of 3 months, the 
  firm and employer have to be addressed and informed a month prior date of
  termination, in a written notice with valid reason for termination.<br>
   </p></h5></strong>
   <br><br>
  <p><strong><h5>11. If the intern lives up to the expectations of the firm, and gives a good performance and
  quality work during the internship period, he/she may be appointed as a permanent
  employee at the firm.<br><br>
  </h5></strong></p>
  <br><br>
   <p><strong><h5>12. The intern is epected not to breach any confidential information that concerns
   the processes and the business of the firm. Even after the completion of the internship
   period, if the firm acknowledges any activity that concerns the breaching of
   information, legal action will be taken towards the associated intern.<br>
   </h5></strong></p>
   <br><br>
    <p><strong><h5>13. The intern is expected to have a minimum of 90% attendance during the internship
	period, on the basis of which internship certificate will be provided.<br>
	</h5></strong></p>
	<br><br>
	<p><h5>Probation Period it is understood and agreed that the first ninety days of employment shall
	constitute a probationary period during which period the Employer may, in its absolute discretion
	terminate the Intern internship, for any reason without notice or cause.</p></h5>
	<br><br>
	
	<h4><strong>I AGREE TO THE TERMS AND CONDITIONS OF THE FIRM-</STRONG></h4><br>
	<h5><strong>Name-<u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u><br>
	Number-<u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u><br>
	Date-<u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp</u><br>
	Signature-<u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u>
	</strong></h5>
	<h5 style="text-align:right;"><strong >Ankit Sharma<br>
	HR Manager<br>
	WT IT Solutions PVT LTD</strong></h5>
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
  
  