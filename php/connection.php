<?php

$conn= mysqli_connect("localhost", "root", "","wt");
if(mysqli_connect_errno()){
  die("Unable to connect to the database server!".mysqli_connect_error()); 
}
 $roh= mysqli_select_db($conn,"wt");
 
  ?>