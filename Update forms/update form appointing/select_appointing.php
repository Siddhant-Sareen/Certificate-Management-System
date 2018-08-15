<?php
$a1=$_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from certificate where email='$a1' OR number='$a1' OR reg_id='$a1'";
$result = $conn->query($sql);
$rows = $result->num_rows;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
<input type='hidden' id="new_name" value="<?php  echo $row["name"];?>" >
<input type='hidden' id="new_address" value="<?php  echo $row["address"];?>" >
<input type='hidden' id="new_email" value="<?php  echo $row["email"];?>" >
<input type='hidden' id="new_phone" value="<?php  echo $row["number"];?>" >
<input type='hidden' id="new_job_title" value="<?php  echo $row["job_title"];?>" >
<input type='hidden' id="new_appointing_officer" value="<?php  echo $row["appointing_officer"];?>" >
<input type='hidden' id="new_officer_designation" value="<?php  echo $row["officer_designation"];?>" >
<input type='hidden' id="new_place_posting" value="<?php  echo $row["place_of_posting"];?>" >
<input type='hidden' id="new_timeIn" value="<?php  echo $row["work1"];?>" >
<input type='hidden' id="new_timeOut" value="<?php  echo $row["work2"];?>" >
<input type='hidden' id="new_date1" value="<?php  echo $row["date"];?>" >
<input type='hidden' id="new_salary" value="<?php  echo $row["salary"];?>" >
<input type='hidden' id="new_date_printing" value="<?php  echo $row["date_of_printing"];?>" >
<input type='hidden' id="new_Registeration_id" value="<?php  echo $row["reg_id"];?>" >
<input type='hidden' id="new_certificate_category" value="<?php  echo $row["certificate_category"];?>" >
	<?php
	}
} else {
    echo "no";
}
$conn->close();
?>