<?php
$search_by=$_POST['search'];
include('connection.php');
$sql="select * from internship where email='$search_by' OR number='$search_by' OR reg_id='$search_by' ;";
$result=mysqli_query($conn,$sql);

    	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if($row>0)
		{
        
			?>
			<input type='hidden' id="new_name" value="<?php  echo $row["name"]; ?>">
			<input type='hidden' id="new_email" value="<?php  echo $row["email"]; ?>">
			<input type='hidden' id="new_phone" value="<?php  echo $row["number"]; ?>">
			<input type='hidden' id="new_reg_id" value="<?php  echo $row["reg_id"]; ?>">
			<input type='hidden' id="new_college" value="<?php  echo $row["college"]; ?>">
			<input type='hidden' id="new_branch" value="<?php  echo $row["branch"]; ?>">
			<input type='hidden' id="new_department_of_work" value="<?php  echo $row["department_of_work"]; ?>">
			<input type='hidden' id="new_training_officer" value="<?php  echo $row["training_officer"]; ?>">
			
			
    
    <?php
    
    


		mysqli_close($conn);
		}
		else
		{
			 echo "No"; 
		
			mysqli_close($conn);
		}

?>