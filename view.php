
<?php
$con = mysqli_connect('localhost','root','','practice');

	if(isset($_POST['insert_post'])){

	$from_date = $_POST['from_date'];
	$to_date = $_POST['to_date'];
	$value = $_POST['value'];

	$form = "INSERT INTO date1 (from_date,to_date,value) values ('$from_date','$to_date','$value')";

	$insert_pro = mysqli_query($con, $form);
	}

?>
<!DOCTYPE html>

<html>
<head>
	<title>View Value</title>
</head>
<body>

<table align="center" width="700" border="2">
	<tr>
		<td>From_date</td>
		<td>To_date</td>
		<td>Value</td>
	</tr>
	
	<?php
	$sn = 1;
	$get_pro = "select * from date1";
	$run_pro = mysqli_query($con,$get_pro);

	while($row_pro = mysqli_fetch_array($run_pro))
	{
		
	?>

	<tr>
		<td><?php echo $row_pro['from_date']; ?></td>
		<td><?php echo $row_pro['to_date']; ?></td>
		<td><?php echo $row_pro['value']; ?></td>
	</tr>
	<?php 
	$sn++;}

	?>
</table>

</body>
</html>