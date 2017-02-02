<!DOCTYPE html>

<?php

session_start();
$con = mysqli_connect('localhost','root','','practice')

?>

<html>
<head>
	<title>form</title>
	
</head>
<body>

<form action="view.php" method="post" enctype="multipart/form-data">

<h4>From-date:</h4>
<input type="date" name="from_date" size="30">

<h4>To-Date:</h4>
<input type="date" name="to_date" size="30">

<input type="submit" name="" value="Submit" />

<h5>Value:</h5>
<input type="text" name="value" size="30">



</form>

</body>
</html>



