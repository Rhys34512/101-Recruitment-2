<!DOCTYPE html>
<html lang="en">
<head>
    <title>Application Confirmation</title>
    <meta charset="utf-8"/>
    <meta name="description" content="Echo from data entered"/>
    <meta name="author" content="Tafadzwa Mudavanhu"/>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php include_once("menu.inc"); ?>
    <h1 class='h2'>Job Application Confirmation</h1>
    <div class="sec">
    <?php
$Skills = "";
require_once('settings.php');
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS eoi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numJob VARCHAR(5) NOT NULL,
    txtFname VARCHAR(20) NOT NULL,
    txtLname VARCHAR(20) NOT NULL,
    txtBirthDate DATE NOT NULL,
    txtGender VARCHAR(10) NOT NULL,
    txtAddress VARCHAR(100) NOT NULL,
    txtState VARCHAR(10) NOT NULL,
    numPostcode VARCHAR(4) NOT NULL,
    txtEmail VARCHAR(100) NOT NULL,
    txtPhone VARCHAR(12) NOT NULL,
    lstSkills VARCHAR(100) NOT NULL,
    txtOtherSkills TEXT,
    txtStatus ENUM('New', 'Current', 'Final') NOT NULL DEFAULT 'New'
)";

if (mysqli_query($conn, $sqlCreateTable)) {
} else {
    echo "Error creating EOI table: " . mysqli_error($conn);
}
$conn = @mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!isset($_SERVER['HTTP_REFERER'])) {
    header('Location: apply.php');
    exit;
}
$Reference_Number = $_POST["Reference_Number"];
$First_Name = $_POST["First_Name"];
$Last_Name = $_POST["Last_Name"];
$Date_of_Birth = $_POST["Date_of_Birth"];
if (isset($_POST["Gender"])) {
    $Gender = $_POST["Gender"];
} else {
    $Gender = "";
}
$Street_Address = $_POST["Street_Address"];
$Suburb_Town = $_POST["Suburb_Town"];
$Postcode = $_POST["Postcode"];
$State = $_POST["State"];
$email = $_POST["email"];
$Phone_Number = $_POST["Phone_Number"];
$other = $_POST["other"];
$link = $_SERVER["HTTP_REFERER"];

$selectedSkills = [];

if (isset($_POST["Skills"]) && in_array("Html", $_POST["Skills"])) $selectedSkills[] = "Html";
if (isset($_POST["Skills"]) && in_array("JavaScript", $_POST["Skills"])) $selectedSkills[] = "JavaScript";
if (isset($_POST["Skills"]) && in_array("CSS", $_POST["Skills"])) $selectedSkills[] = "CSS";
if (isset($_POST["Skills"]) && in_array("XML", $_POST["Skills"])) $selectedSkills[] = "XML";
if (isset($_POST["Skills"]) && in_array("PHP", $_POST["Skills"])) $selectedSkills[] = "PHP";
if (isset($_POST["Skills"]) && in_array("MySQL", $_POST["Skills"])) $selectedSkills[] = "MySQL";
if (isset($_POST["Skills"]) && in_array("Other Skills", $_POST["Skills"])) $selectedSkills[] = "Other Skills";

if (!empty($selectedSkills)) {
    $Skills = implode(", ", $selectedSkills);
} else {
    $Skills = ""; // Set an empty string if no skills are selected
}


echo "<table>
<tr>
    <th>Reference Number</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Date of Birth</th>
    <th>Gender</th>
    <th>Street Address</th>
    <th>Suburb/Town</th>
    <th>Postcode</th>
    <th>State</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Skills</th>
    <th>Other Skills</th>
</tr>
<tr>
    <td>$Reference_Number</td>
    <td>$First_Name</td>
    <td>$Last_Name</td>
    <td>$Date_of_Birth</td>
    <td>$Gender</td>
    <td>$Street_Address</td>
    <td>$Suburb_Town</td>
    <td>$Postcode</td>
    <td>$State</td>
    <td>$email</td>
    <td>$Phone_Number</td>
    <td>$Skills</td>
    <td>$other</td>
</tr>
</table>";

function sanitise_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$valid_postcodes = array(
    "NSW" => range(2000, 2999),
    "VIC" => range(3000, 3999), 
    "QLD" => range(4000, 4999),
    "SA" => range(5000, 5999),
    "WA" => range(6000, 6999),
    "TAS" => range(7000, 7999),
    "NT" => range("0800", "0999"),
    "ACT" => range(2600, 2920)
);

$errMsg = "";
if ($Reference_Number == "") {
    $errMsg .= "<p>You must enter the Reference Number.</p>";
}
if (!preg_match("/^[A-Za-z0-9 ]+$/", $Reference_Number)) {
    $errMsg .= "<p>Only alphanumeric characters and spaces are allowed in the Reference Number.</p>";
}
if (strlen($Reference_Number) != 5) {
    $errMsg .= "<p>Reference Number must be exactly 5 characters</p>";
}
if ($First_Name == "") {
    $errMsg .= "<p>You must enter the First Name.</p>";
}
if (strlen($First_Name) > 20){
    $errMsg .= "<p>You have exceeded the First Name Character Limit of 20";
}
if (!preg_match("/^[A-Za-z ]+$/", $First_Name)) {
    $errMsg .= "<p>Only alphabetic characters and spaces are allowed in the First Name.</p>";
}
if ($Last_Name == "") {
    $errMsg .= "<p>You must enter the Last Name.</p>";
}
if (!preg_match("/^[A-Za-z ]+$/", $Last_Name)) {
    $errMsg .= "<p>Only alphabetic characters and spaces are allowed in the Last Name.</p>";
}
if (strlen($Last_Name) > 20){
    $errMsg .= "<p>You have exceeded the Last Name Character Limit of 20</p>";
}
if ($Date_of_Birth == "") {
    $errMsg .= "<p>You must enter the Date of Birth.</p>";
}
$minAge = 15;
$maxAge = 80;

$today = new DateTime();
$inputDate = new DateTime($Date_of_Birth);
$ageInterval = $inputDate->diff($today);
$age = $ageInterval->y;

if ($age < $minAge || $age > $maxAge) {
    $errMsg.= "Invalid age range. You must be between $minAge and $maxAge years old.";
}
if ($Gender == "") {
    $errMsg .= "<p>You must select the Gender.</p>";
}
if ($Street_Address == "") {
    $errMsg .= "<p>You must enter the Street Address.</p>";
}
if(strlen($Street_Address) > 40) {
    $errMsg .= "<p>You have exceeded the Street Address Character Limit of 40</p>";
}
if ($Suburb_Town == "") {
    $errMsg .= "<p>You must enter the Suburb/Town.</p>";
}
if(strlen($Suburb_Town) > 40) {
    $errMsg .= "<p>You have exceeded the Suburb/Town Character limit of 40</p>";
}
if (!preg_match("/^[A-Za-z ]+$/", $Suburb_Town)) {
    $errMsg .= "<p>Only alphabetic characters and spaces are allowed in the Suburb/Town.</p>";
}
if ($Postcode == "") {
    $errMsg .= "<p>You must enter the Postcode.</p>";
}
if (!preg_match("/^\d{4}$/", $Postcode)) {
    $errMsg .= "<p>Postcode must be a 4-digit number.</p>";
}
if ($State == "") {
    $errMsg .= "<p>You must select the State.</p>";
}
if ($email == "") {
    $errMsg .= "<p>You must enter the Email.</p>";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errMsg .= "<p>Invalid email format.</p>";
}
if ($Phone_Number == "") {
    $errMsg .= "<p>You must enter the Phone Number.</p>";
}
if ($Skills =="") {
    $errMsg .= "<p>Please select at least one Skill.</p>";
}
if (!preg_match("/^[\d]{8,12}$/", $Phone_Number)) {
    $errMsg .= "<p>Phone Number must be between 8 to 12 digits.</p>";
}
if (!in_array($Postcode, $valid_postcodes[$State])) {
    $errMsg .= "<p>The Postcode entered does not match the selected State</p>";
}

if (isset($_POST['Skills']) && in_array("Other Skills", $_POST['Skills']) && empty($_POST['other'])) {
    $errMsg .= "<p>Please specify your other skills.</p>";
}

if ($errMsg != "") {
    echo "<h2>There are errors. Please enter all the required fields correctly.</h2>";
    echo $errMsg;
    echo "<hr>";
    echo '<button id="back" onclick="history.back()">Go Back</button>';
} else {
    $Reference_Number = sanitise_input($Reference_Number);
    $First_Name = sanitise_input($First_Name);
    $Last_Name = sanitise_input($Last_Name);
    $Date_of_Birth = sanitise_input($Date_of_Birth);
    $Gender = sanitise_input($Gender);
    $Street_Address = sanitise_input($Street_Address);
    $Suburb_Town = sanitise_input($Suburb_Town);
    $Postcode = sanitise_input($Postcode);
    $State = sanitise_input($State);
    $email = sanitise_input($email);
    $Phone_Number = sanitise_input($Phone_Number);
    $other = sanitise_input($other);
    $Reference_Number = mysqli_real_escape_string($conn, $Reference_Number);
    $First_Name = mysqli_real_escape_string($conn, $First_Name);
    $Last_Name = mysqli_real_escape_string($conn, $Last_Name);
    $Date_of_Birth = mysqli_real_escape_string($conn, $Date_of_Birth);
    $Gender = mysqli_real_escape_string($conn, $Gender);
    $Street_Address = mysqli_real_escape_string($conn, $Street_Address);
    $Suburb_Town = mysqli_real_escape_string($conn, $Suburb_Town);
    $Postcode = mysqli_real_escape_string($conn, $Postcode);
    $State = mysqli_real_escape_string($conn, $State);
    $email = mysqli_real_escape_string($conn, $email);
    $Phone_Number = mysqli_real_escape_string($conn, $Phone_Number);
    $Skills = mysqli_real_escape_string($conn, $Skills);
    $other = mysqli_real_escape_string($conn, $other);

    $status = 'New';
    $sql = "INSERT INTO eoi (numJob, txtFname, txtLname, txtBirthDate, txtGender, txtAddress, txtState, numPostcode, txtEmail, txtPhone, lstSkills, txtOtherSkills, txtStatus) VALUES ('$Reference_Number', '$First_Name', '$Last_Name', '$Date_of_Birth', '$Gender', '$Street_Address, $Suburb_Town', '$State', '$Postcode', '$email', '$Phone_Number', '$Skills', '$other', '$status')";
    if (mysqli_query($conn, $sql)) {
        $insertedID = mysqli_insert_id($conn); // Get the last inserted ID
        echo "<h3>Data inserted successfully! Your EOInumber is: $insertedID</h3>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</div>
<?php include_once("footer.inc"); ?>
</body>
</html>


