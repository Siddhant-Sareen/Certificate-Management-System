<?php

// Here we get all the information from the fields sent over by the form.
$search_by=$_POST['search'];


include('connection.php');
$sql= mysqli_query($conn,"delete from relieving where email='$search_by' OR number='$search_by' OR reg_id='$search_by' ") 

or die('Oppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
  
  

echo"Data sucessfully Deleted.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";

mysqli_close($conn);
?>