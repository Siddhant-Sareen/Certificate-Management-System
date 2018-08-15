<?php
// Here we get all the information from the fields sent over by the form.
$a = $_POST['name'];
$b = $_POST['f_name'];
$c = $_POST['email'];
$d = $_POST['phone'];
$e = $_POST['job_title'];
$k = $_POST['date_of_joining'];
$k1= $_POST['gross_salary'];
$l = $_POST['net_pay'];
$m = $_POST['reg_id'];
$o = $_POST['date_of_printing'];
$n = $_POST['certificate_category'];

?>
<?php
sleep(1);
$con= mysqli_connect("localhost", "root", "","wt");
if(mysqli_connect_errno()){
  die("Unable to connect to the database server!".mysqli_connect_error()); 
}
 $roh= mysqli_select_db($con,"wt");
 
 //  die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");} 


  
$sql= "insert into salary(name,f_name,email,phone,job_title,date_of_joining,gross_salary,net_pay,reg_id,date_of_printing,certificate_category) values ('$a','$b','$c','$d','$e','$k','$k1','$l','$m','$o','$n')";
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