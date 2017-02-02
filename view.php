<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"intern");


?>

<!DOCTYPE html>

<html>
<head>
	<title>Form</title>
	
</head>
<body>


<form name="form1" action="index.php" method="post">

<h4>From-date:</h4>
<select>
	<?php
	$result1 = mysqli_query($con,"SELECT * FROM datelist");
	while($row = mysqli_fetch_array($result1))
	{
	?>
	
	<option><?php echo $row["date"]; ?></option>
	
	<?php
	}
	?>

</select>
 
<h4>To-date:</h4>
<select>
	<?php
	$result2 = mysqli_query($con,"SELECT * FROM dateList");
	while($row = mysqli_fetch_array($result2))
	{
	?>
	
	<option><?php echo $row["date"]; ?></option>
	
	<?php
	}
	?>

</select></br></br>

<input type="submit" name="insert_post" value="Submit" />

<h4>List of Values</h4>


<table align="" width="700" border="2">
	<tr>
		<th>Date</th>
		<th>Value</th>
		
	</tr>


</form>

</body>
</html>