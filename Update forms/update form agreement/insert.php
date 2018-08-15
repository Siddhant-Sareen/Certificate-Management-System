<?php
// Here we get all the information from the fields sent over by the form.
$a = $_POST['name'];
$b = $_POST['number'];
$c = $_POST['day1'];
$d = $_POST['day2'];
$e = $_POST['certificate_category'];
$f=  $_POST['email'];
$g = $_POST['reg_id'];



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


  
$sql= mysqli_query($con,"insert into agreement(name,number,day1,day2,certificate_category,email,reg_id) values ('$a','$b','$c','$d','$e','$f','$g')") 

or die('Opps.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
  
  

echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";
mysqli_close($con);





?>




