<?php
// Here we get all the information from the fields sent over by the form.
$a = $_POST['name'];
$b = $_POST['time_period_from'];
$c = $_POST['time_period_to'];
$d = $_POST['date_of_printing'];
$e = $_POST['certificate_category'];
$f= $_POST['email'];
$g= $_POST['number'];
$h= $_POST['reg_id'];

?>
<?php
sleep(1);
$con= mysqli_connect("localhost", "root", "","wt");
if (mysqli_connect_errno())
  {
   die ("Failed to connect to MySQL: " . mysqli_connect_error());
  } 
 $roh= mysqli_select_db($con,"wt");
  //or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>"); 


  
$sql= mysqli_query($con,"insert into relieving(name,time_period_from,time_period_to,date_of_printing,certificate_category,email,number,reg_id) values ('$a','$b','$c','$d','$e','$f','$g','$h')") 

or die('Oppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
  
  

echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";

mysqli_close($con);



?>