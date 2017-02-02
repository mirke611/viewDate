<?php
$con = mysqli_connect("localhost", "root", "","practice");



?>

<!DOCTYPE html>

<html>
<head>
	<title>Form</title>
	
</head>
<body>


<form name="form1" action="" method="post">

		<h4>From-date:</h4>
		<select name="strt">
			<?php
			$result1 = mysqli_query($con,"SELECT * FROM datelist");
			while($row = mysqli_fetch_array($result1))
			{
			?>
			
			<option><?php echo $row["date_now"]; ?></option>
			
			<?php
			}
			?>

		</select>
 
		<h4>To-date:</h4>
		<select name="end">
			<?php
			$result2 = mysqli_query($con,"SELECT * FROM datelist");
			while($row = mysqli_fetch_array($result2))
			{
			?>
			
			<option><?php echo $row["date_now"]; ?></option>
			
			<?php
			}
			?>

		</select></br></br>

	<input type="submit" name="submit" value="Submit" />

</form>


<h4>List of Values</h4>


	<table align="" width="700" border="2">
		<tr>
			<th>Date</th>
			<th>Value</th>
			
		</tr>
		
		<?php
		if(isset($_POST['submit']))
		 {
			$str = $_POST['strt'];
			$end = $_POST['end']; 
		
		if ($str < $end) {
			
			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
				}
				
				$sql = "SELECT * FROM datelist WHERE date_now >= '$str' && date_now <= '$end'";
				
				$result = mysqli_query($con, $sql); //query the databasee and save all the rows in the $result var

				if (mysqli_num_rows($result) > 0) { //count the no of rows returned
    // output data of each row
					while($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
					<td> <?php echo 
					$row["date_now"]; ?></td>
					
					<td>
						<?php echo  $row["value"]; ?> </td></tr>;<?php
							}
			
			}
		}
		
		else {
		echo "please select the date";
	}

	}	
	
			?>
		
		
		

	
	</table>	





</body>
</html>