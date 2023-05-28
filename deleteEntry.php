<?php
	require_once"settings.php";
	
	$jobNumber = $_POST["jobStatus"];
	
	$query = "DELETE FROM eoi WHERE numJob = ". $jobNumber;
	
	echo $query;
	$result = mysqli_query($conn, $query);
	
	mysqli_close($conn);
	header('Location: /manage.php');
?>
