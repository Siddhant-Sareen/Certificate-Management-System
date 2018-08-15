<?php
// Here we get all the information from the fields sent over by the form.
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['email'];
$d = $_POST['phone'];
$e = $_POST['job_title'];
$f = $_POST['appointing_officer'];
$g = $_POST['officer_designation'];
$h = $_POST['place_posting'];
$i = $_POST['work1'];
$j = $_POST['work2'];
$k = $_POST['date'];
$n = $_POST['reg_id'];
$l = $_POST['salary'];
$m = $_POST['date_of_printing'];
$o = $_POST['certificate_category'];


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


  
$sql= mysqli_query($con,"insert into certificate(name,address,email,number,job_title,appointing_officer,officer_designation,place_of_posting,work1,work2,date,reg_id,salary,date_of_printing,certificate_category) values ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$n','$l','$m','$o')") 

or die('Opps.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
  
  

echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";
mysqli_close($con);





?>




