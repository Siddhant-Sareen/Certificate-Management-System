<?php
// Here we get all the information from the fields sent over by the form.
$a = $_POST['name'];
$a1= $_POST['number'];
$b = $_POST['position_of_responsibility'];
$c = $_POST['time_period_from'];
$d = $_POST['time_period_to'];
$e = $_POST['duration'];
$f = $_POST['salary'];
$g = $_POST['date_of_printing'];
$h = $_POST['certificate_category'];
$i= $_POST['email'];
$j= $_POST['reg_id'];


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


  
$sql= mysqli_query($con,"insert into experience(name,number,position_of_responsibility,time_period_from,time_period_to,duration,salary,date_of_printing,certificate_category,email,reg_id) values ('$a','$a1','$b','$c','$d','$e','$f','$g','$h','$i','$j')") 

or die('Oppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
  
  

echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";

mysqli_close($con);



?>