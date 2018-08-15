<?php
// Here we get all the information from the fields sent over by the form.
$a = $_POST['name'];
$b = $_POST['branch'];
$c = $_POST['college'];
$d = $_POST['city'];
$e = $_POST['work1'];
$f = $_POST['work2'];
$g = $_POST['date'];
$h = $_POST['training_officer'];
$i = $_POST['department_of_work'];
$j = $_POST['certificate_category'];
$k= $_POST['email'];
$l= $_POST['phone'];
$m= $_POST['reg_id'];
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


  
$sql= mysqli_query($con,"insert into internship(name,branch,college,city,work1,work2,date,training_officer,department_of_work,certificate_category,email,number,reg_id) values ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')") 

or die('Opps.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
  
  

echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";
mysqli_close($con);





?>




