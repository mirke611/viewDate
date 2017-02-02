<?php
$con = mysqli_connect("localhost", "root", "","practice");



?>

<!DOCTYPE html>

<html>
<head>
	<title>Form</title>
	
</head>
<body>


<form name="form1" action="#" method="post">

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

	<input type="submit" name="insert_post" value="Submit" />

</form>
<h4>List of Values</h4>


	<table align="" width="700" border="2">
		<tr>
			<th>Date</th>
			<th>Value</th>
			
		</tr>
		<tr>
		<?php
		if ($_POST) {
		# code...
		if ($_POST['strt'] < $_POST['end']) {
			# code...
			$str = $_POST['strt'];
			$end = $_POST['end'];
			$result1 = mysqli_query($con,"SELECT * FROM datelist WHERE date_now >= $str && date_now <= $end");
			while($row = mysqli_fetch_array($result1))
			{
			?>
			<td><?php echo $row['date'];?></td>

			<?php
			}
		}

	}	
			?>
		</tr>
		
		

	
	</table>	





</body>
</html>