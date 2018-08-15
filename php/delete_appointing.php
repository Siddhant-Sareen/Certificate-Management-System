<?php
// Here we get all the information from the fields sent over by the form.
$form = $_POST['search'];
/*$a = $_POST['name'];
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
$n = $_POST['registration_id'];
$l = $_POST['salary'];
$m = $_POST['date_printing'];*/



?>
<?php
sleep(1);

include('connection.php');

  
$sql= "delete from certificate where email='$form' or number='$form'or reg_id='$form'";
if(mysqli_query($conn,$sql)) {
	echo "successful";
}
else
{
 die('Ooppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($conn).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
}
  
  

echo"Data sucessfully deleted.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";


mysqli_close($conn);


?>