<!--Standard Meta Tags-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="View your 101 Recruitment Job Application Status">
  <meta name="keywords" content="Job Application, Careers, Employment">
  <meta name="author" content="Louis S.">
  <link rel="stylesheet" href="styles/style.css">
  <title>Careers Portal | 101 Recruitment</title>
</head>
<body>
  
  <?php include_once("menu.inc"); ?>
  
  <div class="sec">
    <h2 class="h2">Careers Portal</h2>
	<hr>
	<?php
		
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST))	{
    	require_once ('settings.php');
		
		$JobNumber = $_POST["Application_Number"];
		$EmailAddress = $_POST["Email_Address"];
		$PhoneNumber = $_POST["Phone_Number"];

		$conn = @mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		else {
						
		$sql = "SELECT numJob, txtFname, txtLname, txtStatus FROM eoi WHERE idEOI = '$JobNumber' AND txtEmail = '$EmailAddress' AND txtPhone = '$PhoneNumber'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<p>The details of your application are displayed below.</p>';
				echo '<p>If you would like to browse for more available positions, please visit our <a class="careers-link" href="jobs.php">Job Openings</a> page.</p>';
				echo '<h3>Application Status</h3>';
				echo '<table class="careers-table">
						<tr class="careers-tr">
							<th class="careers-th">Job Application ID (EOINumber)</th>
							<th class="careers-th">Job Listing ID</th>
							<th class="careers-th">Location</th>
							<th class="careers-th">Full Name</th>
							<th class="careers-th">Application Status</th>
						</tr>
						<tr class="careers-tr">
							<td>';
				echo $JobNumber;
				echo '</td><td>';
				echo $row["numJob"];
				echo '</td><td>Melbourne, Australia</td><td>';
				echo $row["txtFname"];
				echo ' ';
				echo $row["txtLname"];
				echo '</td><td>';
				echo $row["txtStatus"];
				echo '</td>
						</tr>
					</table>';
		$conn->close();
			}
		
			}
			
		else {
			echo '<p>The credentials you have entered do not correspond to any submitted Job Applications. Please ensure that they are correct and try again.</p>';
			echo '<a href="">Go Back</a>';
		}
		
		
		}
		
	}

	
	else {
		
		echo '<p>Welcome to the official 101 Recruitment Careers Portal. To get started, please enter your credentials in the form below.</p>
		<p id="careers-description">This page is intended for use only by individuals who have previously submitted a Job Application. If you would like to browse available positions, please visit our <a class="careers-link" href="jobs.php">Job Openings</a> page.</p>
		<form action="" method="post">
				<fieldset>
					<legend>Job Application Details</legend>
					<p><label for="referencenumber">Job Application ID (EOINumber) <input type="text" id="referencenumber" name="Application_Number" size="35" pattern="[A-Za-z0-9]+" maxlength="5" required="required"></label></p><!--Job Reference Number Label were the user will only be able to enter a maxmimum amount of 5 Alphanumeric Characters-->
					<p><label for="email">Email<input type="text" id="email" name="Email_Address" size="40" placeholder="name@domain.com" pattern="^.+@.+\..{2,3}$" required="required"></label></p>
					<p><label for="phone_number">Phone Number <input type="text" id="phone_number" name="Phone_Number" size="30" maxlength="12" pattern="[0-9\s]+" required="required"></label></p>
				</fieldset>
				<div id="submission">
					<p id="enhancement1"><label for="submit"><input type="submit" id="submit" value="Submit"></label>&nbsp;<label for="reset"><input type="reset" id="reset" value="Reset"></label></p>
				</div>
			</form>';
		
		
	}

	?>

    
  </div>
  
  <?php include_once("footer.inc"); ?>
  
</body>
</html>
