<?php
	require_once"settings.php";
	
	$jobNumber = $_POST["jobStatus"];
	
	$query = "DELETE FROM eoi WHERE numJob = ". $jobNumber;
	
	echo $query;
	$result = mysqli_query($conn, $query);
	
	mysqli_close($conn);
	header('Location: /cos10026/s104443353/101-Recruitment-main/101-Recruitment-main/manage.php');
?>
