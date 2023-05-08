<html>
    <head>
 <link rel="stylesheet" href="styles/style.css">
 </head>
 <body>
  <?php 
    require_once"Settings.php";
    
	if($conn)
    {
        $query = "SELECT * FROM eoi";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            $record = mysqli_fetch_assoc($result);
            if($record)
            {
				echo "<p>At least 1 record retrieved</p>";
				
				$display = new Result();
				$display->set_details_job($record["idEOI"], $record['numJob'], $record['txtStatus']);
				
				$txtStatus= $record['txtStatus'];
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
				
		
				$display->set_details_applicant($txtFname, $txtLname, $txtBirthDate, $txtGender);
				$display->set_details_contact($txtAddress, $txtState, $numPostcode, $txtEmail, $txtPhone);
				$display->set_details_skills ($txtSkills, $txtOtherSkills);
				
				$display->display_applicant();				
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
	}
     mysqli_close($conn);
  ?>
  
  
  <?php
   class Result
   {
    public $idEOI;
    public $numJOB;
    public $txtFname;
    public $txtLname;
    public $txtBirthDate;
    public $txtGender;
    public $txtAddress;
    public $txtState;
    public $numPostcode;
    public $txtEmail;
    public $txtPhone;
    public $txtSkills;
    public $txtOtherSkills;
    public $txtStatus;
    
    function set_details_job($idEOI, $numJOB, $txtStatus)
    {
     $this->idEOI = $idEOI;
     $this->numJOB = $numJOB;
    }
    
    function set_details_applicant($txtFname, $txtLname, $txtBirthDate, $txtGender)
    {
      $this->txtFname = $txtFname;
      $this->txtLname = $txtLname;
      $this->txtBirthDate = $txtBirthDate;
      $this->txtGender = $txtGender;
    }
    
    function set_details_contact($txtAddress, $txtState, $numPostcode, $txtEmail, $txtPhone)
    {
      $this->txtAddress = $txtAddress;
      $this->txtState = $txtState;
      $this->numPostcode = $numPostcode;
      $this->txtEmail = $txtEmail;
      $this->txtPhone = $txtPhone;
    }
    
    function set_details_skills ($txtSkills, $txtOtherSkills)
    {
      $this->txtSkills = $txtSkills;
      $this->txtOtherSkills = $txtOtherSkills;
    }
    
    function display_applicant()
    {
		echo "<table border=\"0\">\n";
		
		echo "<tr>\n"
			."<td> Expression of Interest #</td>"
			."<td> $this->idEOI </td>"
			."<td> Job Number #</td>"
			."<td> $this->numJOB </td>"
			."</tr>\n";
		
		echo "<tr>\n"
			."<td> First Name:</td>"
			."<td> $this->txtFname </td>"
			."<td> Last Name:</td>"
			."<td> $this->txtLname </td>"
			."</tr>\n";
		
		echo "<tr>\n"
			."<td> Birth date::</td>"
			."<td> $this->txtBirthDate </td>"
			."<td> Gender:</td>"
			."<td> $this->txtGender </td>"
			."</tr>\n";
		
		echo "<tr>\n"
			."<td> </td>"
			."<td> </td>"
			."<td> </td>"
			."<td> </td>"
			."</tr>\n";

		echo "<tr>\n"
			."<td> Address:</td>"
			."<td> $this->txtAddress, $this->txtState $this->numPostcode</td>"
			."</tr>\n";
			
		echo "<tr>\n"
			."<td> </td>"
			."<td> </td>"
			."<td> </td>"
			."<td> </td>"
			."</tr>\n";
			
		echo "<tr>\n"
			."<td> Contact Phone:</td>"
			."<td> $this->txtPhone </td>"
			."<td> E-mail:</td>"
			."<td> $this->txtEmail </td>"
			."</tr>\n";	
			
		echo "</table>";
	}
   }
  ?>
 
 </body>
</html>

<!-- 
 Create a web page manage.php that allows a manager to make the following queries of
 the eoi table and returns a web page with the appropriate results.
  • List all EOIs.
  • List all EOIs for a particular position (given a job reference number).
  • List all EOIs for a particular applicant given their first name, last name or both.
  • Delete all EOIs with a specified job reference number
  • Change the Status of an EOI.
 -->
