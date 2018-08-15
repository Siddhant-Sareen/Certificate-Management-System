<?php
// Here we get all the information from the fields sent over by the form.
$search=$_POST['search'];
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['email'];
$d = $_POST['phone'];
$e = $_POST['job_title'];
$f = $_POST['appointing_officer'];
$g = $_POST['officer_designation'];
$h = $_POST['place_posting'];
$i = $_POST['timeIn'];
$j = $_POST['timeOut'];
$k = $_POST['date1'];
$k1=$_POST['Registeration_id'];
$l = $_POST['salary'];
$m = $_POST['date_printing'];
$a1=$_POST['search'];

?>
<?php
sleep(1);
$conn= mysqli_connect("localhost","root","","wt");
if(mysqli_connect_errno()){
  die("Unable to connect to the database server!".mysqli_connect_error()); 
}
 $row= mysqli_select_db($conn,"wt");
 
 //  die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");} 


  
$sql= "update certificate set name='$a',address='$b',email='$c',number='$d',job_title='$e',appointing_officer='$f',officer_designation='$g'
,place_of_posting='$h',work1='$i',work2='$j',date='$k',reg_id='$k1',salary='$l',date_of_printing='$m' where email='$a1' OR reg_id='$a1' OR number='$a1'";

if(mysqli_query($conn,$sql)) {
	echo "successful";
}
else
{
 die('Ooppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($conn).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
}
echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";


mysqli_close($conn);


?>