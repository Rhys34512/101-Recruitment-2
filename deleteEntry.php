<?php
	require_once"settings.php";
		
	$array = unserialize($_POST["jobStatus"]);
	
	$idEOI = $array[0];
	$jobNumber = $array[1];
	
	$query = "DELETE WHERE numJob = ". $jobnumber;
	
	echo $query;
	$result = mysqli_query($conn, $query);
	
	mysqli_close($conn);
	header('Location: /manage.php');
?>
