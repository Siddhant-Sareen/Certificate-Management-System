<?php
// Here we get all the information from the fields sent over by the form.
$search=$_POST['search'];
$a = $_POST['name'];
$b = $_POST['phone'];
$c = $_POST['start'];
$d = $_POST['end'];
$e = $_POST['certificate_category'];
$f=  $_POST['email'];
$g = $_POST['registeration_id'];



?>
<?php
sleep(1);
$con= mysqli_connect("localhost", "root", "","wt");
 //or die("Unable to connect to the database server!"); 
 if (mysqli_connect_errno())
  {
   die ("Failed to connect to MySQL: " . mysqli_connect_error());
  }
 $roh= mysqli_select_db($con,"wt");
  //or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>"); 


  

$sql= "update agreement set name='$a',number='$b',day1='$c',day2='$d',certificate_category='$e',email='$f',reg_id='$g' where email='$search' OR reg_id='$search' OR number='$search'";

if(mysqli_query($con,$sql)) {
	echo "successful";
}
else
{
 die('Ooppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
}
echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";


mysqli_close($con);





?>




