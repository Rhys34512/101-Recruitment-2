<html>
    <head>
<!-- 
 Create a web page manage.php that allows a manager to make the following queries of
 the eoi table and returns a web page with the appropriate results.
  • List all EOIs.
  • List all EOIs for a particular position (given a job reference number).
  • List all EOIs for a particular applicant given their first name, last name or both.
  • Delete all EOIs with a specified job reference number
  • Change the Status of an EOI.
 -->
 </head>
 <body>
  <?php 
    require_once"Settings.php";
    $dbconn = @mysqli_connect($host, $user, $pwd,$sql_db);
    if(dbconn)
    {
        $query = "SELECT * FROM eoi";
        $result = mysqli_query($dbconn, $query);
        if($result)
        {
            $record = mysqli_fetch_assoc($results);
            if($record)
            {
                echo "<p>At least 1 record retrieved</p>";
                
                echo "<p> $idEOI: " $record['idEOI'] ", $numJOB, $txtFname, $txtLname, $txtBirthDate, $txtGender, $txtAddress, $txtState, $numPostcode, $txtEmail, $txtPhone, $txtSkills, $txtOtherSkills, $txtStatus;
    
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
  mysqli_close($dbconn);
  }
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
     
    }
   }
  ?>
 
 </body>
</html>
