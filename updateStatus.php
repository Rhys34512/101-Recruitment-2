<?php
	require_once"Settings.php";
		
	$array = unserialize($_POST["jobStatus"]);
	
	$idEOI = $array[0];
	$jobStatus = $array[1];
	
	$query = "UPDATE eoi SET txtStatus = \"" . $jobStatus ."\" WHERE idEOI = ". $idEOI;
	
	echo $query;
	$result = mysqli_query($conn, $query);
	
	mysqli_close($conn);
	header('Location: /cos10026/s104443353/101-Recruitment-main/101-Recruitment-main/manage.php');
?>
