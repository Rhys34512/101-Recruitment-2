<html>
 <head>
 <link rel="stylesheet" href="styles/style.css">
 </head>
 <body>
  <?php 
    require_once"Settings.php";
    
	if($conn)
    {
		$target_jobNum = "All";
		
		if(isset($_POST["jobNumber"]))
		{
			$target_jobNum = $_POST["jobNumber"];
		}

        $query = "SELECT * FROM eoi";
        $result = mysqli_query($conn, $query);
     
		$rows = mysqli_num_rows($result);
		if($result)
			{
			$append = ($rows > 1) ? "s": "";
			echo "<p>$rows record$append retrieved for $target_jobNum</p>";
		
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
					
					if($target_jobNum == "All" || $numJOB == $target_jobNum)
					{
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
					echo "<h3>$numJOB - Applicant Details for: $txtFname $txtLname</h3>";
					echo "<table border=\"0\" align=\"left\" width=\"1000px\">\n";
		
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
			}
			echo "</div>";
			
			echo "<aside class=\"jobSidebar\">";
				echo "<form method=\"post\" action=\"manage.php\">";
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
					
					echo "<input type=\"submit\" id=\"submit\" value=\"Update Display\">";
					echo "<br>";
					echo "<input type=\"submit\" id=\"submit\" value=\"Delete Displayed Jobs\">";
					echo "<br>";
					echo "<input type=\"submit\" id=\"submit\" value=\"Display Specific Applicant\">";
				
					echo "</form>";
				echo "</fieldset>";
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
 </body>
</html>

<!-- 
 Create a web page manage.php that allows a manager to make the following queries of
 the eoi table and returns a web page with the appropriate results.
  • List all EOIs. done
  • List all EOIs for a particular position (given a job reference number). done
  • Delete all EOIs with a specified job reference number
  • List all EOIs for a particular applicant given their first name, last name or both.
  • Change the Status of an EOI.
 -->
