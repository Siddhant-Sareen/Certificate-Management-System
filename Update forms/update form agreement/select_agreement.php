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

$sql = "SELECT * from agreement where email='$a1' OR number='$a1' OR reg_id='$a1'";
$result = $conn->query($sql);
$rows = $result->num_rows;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
<input type='hidden' id="new_name" value="<?php  echo $row["name"];?>" >
<input type='hidden' id="new_phone" value="<?php  echo $row["number"];?>" >
<input type='hidden' id="new_email" value="<?php  echo $row["email"];?>" >
<input type='hidden' id="new_start" value="<?php  echo $row["day1"];?>" >
<input type='hidden' id="new_end" value="<?php  echo $row["day2"];?>" >
<input type='hidden' id="new_registeration_id" value="<?php  echo $row["reg_id"];?>" >
<input type='hidden' id="new_certificate_category" value="<?php  echo $row["certificate_category"];?>" >

	<?php
	}
} else {
    echo "no";
}
$conn->close();
?>