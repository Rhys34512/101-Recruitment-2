<!--Standard Meta Tags-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="A page in which managers can view/modify submitted job applications">
  <meta name="keywords" content="Manager, Job Records, Update Status">
  <meta name="author" content="Luke">
  <link rel="stylesheet" href="styles/style.css">
  <title>Management Portal | 101 Recruitment</title>
</head><!-- Container to hold the navidgation bar-->
<body>
<h1 id="h1-manage">Management Portal</h1>
  <?php 
    require_once"settings.php";
    
	if($conn)
    {
		//Set values
		$jobNumber = "All";
		if(isset($_POST["jobNumber"]))
			$jobNumber = $_POST["jobNumber"];
		
		$firstName = "";
		if(isset($_POST["firstName"]))
			$firstName = $_POST["firstName"];
		
		$lastName = "";
		if(isset($_POST["lastName"]))
			$lastName = $_POST["lastName"];
		
		
		//Form query from values
		$query = "SELECT * FROM eoi";
		if($firstName != "" || $lastName != "")
		{
			$query .= " WHERE";
			if($firstName != null)
			{
				$query .= " txtFname = \"$firstName\"";
			}if($lastName != null)
			{
				if($firstName != null)
					$query .= " &&";
				
				$query .= " txtLname = \"$lastName\"";
			}
		}
		else if($jobNumber != "All")
			$query .= " WHERE numJob = '". $jobNumber ."'";
				
		$result = mysqli_query($conn, $query);
		
		$rows = mysqli_num_rows($result);
		if($result)
		{
			$append = ($rows > 1) ? "s": "";
			echo "<div class=\"wrapper\">";
			echo "<div class=\"jobDescription\">";
			
			$jobIDs=array();
			
			for ($i = 0; $i < $rows; $i++)
			{
				$record = mysqli_fetch_assoc($result);
			
				if($record)
				{
					$txtStatus = $record['txtStatus'];
					$idEOI = $record["idEOI"];
					$numJOB = $record['numJob'];
				
					$txtFname = $record['txtFname'];
					$txtLname = $record['txtLname']; 	
					$txtBirthDate = $record['txtBirthDate']; 
					$txtGender = $record['txtGender']; 
				
					$txtAddress = $record['txtAddress']; 
					$txtState = $record['txtState']; 
					$numPostcode = $record['numPostcode']; 
					$txtEmail = $record['txtEmail'];
					$txtPhone = $record['txtPhone']; 
				
					$txtSkills = $record['lstSkills']; 
					$txtOtherSkills = $record['txtOtherSkills']; 
					
					$jobExists = false;
					for ($i = 0; $i < count($jobIDs); $i++)
					{
						if($jobIDs[$i] == $numJOB)
						{
							$jobExists = true;
						}
					}
					
					if($jobExists == false)
					{
						array_push($jobIDs, $numJOB);
					}
					
					echo "<section class=\"jobInfo\">";
					echo "<h4> Job Status: $txtStatus</h4>";

					echo "<form method=\"post\" action=\"/updateStatus.php\">";
						echo "<label for=\"jobStatus\">";
						echo "<select name=\"jobStatus\" id=\"jobStatus\">";
							echo "<option value=". serialize(array($idEOI, "New")) .">New</option>";
							echo "<option value=". serialize(array($idEOI, "Current")) .">Current</option>";
							echo "<option value=". serialize(array($idEOI, "Final")) .">Final</option>";
						echo "</select>";
						echo "<input type=\"submit\" id=\"newType\" value=\"Update Status\">";
					echo "</form>";
					
					echo "<h3>$numJOB - Applicant Details for: $txtFname $txtLname</h3>";
					
					echo "<table border=\"0\" align=\"left\" width=\"100%\">\n";
		
					echo "<tr>\n"
						."<td> Expression of Interest #</td>"
						."<td> $idEOI </td>"
						."<td> Job Number #</td>"
						."<td> $numJOB </td>"
						."</tr>\n";
		
					echo "<tr>\n"
						."<td> First Name:</td>"
						."<td> $txtFname </td>"
						."<td> Last Name:</td>"
						."<td> $txtLname </td>"
						."</tr>\n";
		
					echo "<tr>\n"
						."<td> Birth date::</td>"
						."<td> $txtBirthDate </td>"
						."<td> Gender:</td>"
						."<td> $txtGender </td>"
						."</tr>\n";
		
					echo "<tr>\n"
						."<td> </td>"
						."<td> </td>"
						."<td> </td>"
						."<td> </td>"
						."</tr>\n";

					echo "<tr>\n"
						."<td> Address:</td>"
						."<td colspan=\"3\"> $txtAddress, $txtState $numPostcode</td>"
						."</tr>\n";
			
					echo "<tr>\n"
						."<td> </td>"
						."<td> </td>"
						."<td> </td>"
						."<td> </td>"
						."</tr>\n";
			
					echo "<tr>\n"
						."<td> Contact Phone:</td>"
						."<td> $txtPhone </td>"
						."<td> E-mail:</td>"
						."<td> $txtEmail </td>"
						."</tr>\n";	
			
					echo "<tr>\n"
						."<td> </td>"
						."<td> </td>"
						."<td> </td>"
						."<td> </td>"
						."</tr>\n";
					echo "</table>";
					
					echo "<h3>Relevant Skills</h3>";
					echo "<p>$txtSkills</p>";
				
					echo "<h3>Other Skills</h3>";
					echo "<p>$txtOtherSkills</p>";						

					echo "</section>";
				
					echo"<hr>";
					}
				}
			
			echo "</div>";
			
			echo "<aside width=\"25%\">";
				echo "<form method=\"post\" action=\"/manage.php\">";
					echo "<fieldset>";
						echo "<legend>Job Opening Search</legend>";
						echo "<hr id=\"jobs-hr\">";
				
						echo "<label for=\"jobNumber\">";
						echo "<select name=\"jobNumber\" id=\"jobNumber\">";
						echo "<option value=\"All\">". All ."<br>";
						for ($i = 0; $i < count($jobIDs); $i++)
						{
							echo "<option value=\"$jobIDs[$i]\">". $jobIDs[$i] ."<br>";	
							echo "</option>";
						}
						echo "</select>";
					
						echo "<label for=\"firstName\"> First Name: <input type=\"text\" id=\"firstName\" name=\"firstName\" pattern=\"^[a-zA-Z]+$\" maxlength=\"20\"</label>";
						echo "<label for=\"lastName\"> Last Name: <input type=\"text\" id=\"lastName\" name=\"lastName\" pattern=\"^[a-zA-Z]+$\" maxlength=\"20\"</label>";
						echo "<input type=\"submit\" value=\"Update Display\">";
					echo "</fieldset>";
				echo "</form>";
			
				if($jobNumber != "All")
				{
					echo "<form method=\"post\" action=\"/deleteEntry.php\">";
						echo "<button type=\"submit\" name=\"jobStatus\" value=\"$numJOB\">Delete entries for $numJOB</button>";
					echo "</form>";
				}
			echo "<button><a href=\"Index.php\">Logout</a> </button>";
			echo "</aside>";
			
		}
		else
        {
			echo "<p>No records retrieved</p>";
		}
    }
    else
    {
		echo "<p>MySQL operation unsuccessful</p>"; 
	}
     mysqli_close($conn);
  ?> 
  </div>
 </body>
 <?php include_once("footer.inc"); ?>
</html>

<!-- 
 Create a web page manage.php that allows a manager to make the following queries of
 the eoi table and returns a web page with the appropriate results.
  • List all EOIs. done
  • List all EOIs for a particular position (given a job reference number). done
  • Delete all EOIs with a specified job reference number. done
  • List all EOIs for a particular applicant given their first name, last name or both. done
  • Change the Status of an EOI. done
 -->
