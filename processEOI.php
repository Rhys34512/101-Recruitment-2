<!DOCTYPE html>
<html lang="en">
<head>
	<title>Application Confirmation</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Echo from data entered"/>
	<meta name="author" content="Tafadzwa Mudavanhu"/>
</head>
<body>
    <h1>Job Application Confrimation</h1>

<?php 
require_once ('settings.php');
$conn = @mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!isset($_SERVER['HTTP_REFERER'])){
    header('Location: apply.php');
    exit;
}
$Reference_Number = $_POST["Reference_Number"];
$First_Name = $_POST["First_Name"];
$Last_Name = $_POST["Last_Name"];
$Date_of_Birth = $_POST["Date_of_Birth"];
$Gender = $_POST["Gender"];
$Street_Address = $_POST["Street_Address"];
$Suburb_Town = $_POST["Suburb_Town"];
$Postcode = $_POST["Postcode"];
$State = $_POST["State"];
$email = $_POST["email"];
$Phone_Number = $_POST["Phone_Number"];
$Skills = $_POST["Skills"];
$other = $_POST["other"];
$link = "apply.php";


echo "<table border='1'>
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
?> 
<?php
if(isset ($_POST["Reference_Number"])){
    $Reference_Number = $_POST["Reference_Number"];
    $Reference_Number = sanitise_input($Reference_Number);
}
if(isset ($_POST["First_Name"])){
    $First_Name = $_POST["First_Name"];
    $First_Name = sanitise_input($First_Name);
}
if(isset ($_POST["Last_Name"])){
    $Last_Name = $_POST["Last_Name"];
    $Last_Name = sanitise_input($Last_Name);
}
if(isset ($_POST["Date_of_Birth"])){
    $Date_of_Birth = $_POST["Date_of_Birth"];
    $Date_of_Birth = sanitise_input($Date_of_Birth);
}
if(isset ($_POST["Gender"])){
    $Gender = $_POST["Gender"];
    $Gender = sanitise_input($Gender);
}
if(isset ($_POST["Street_Address"])){
    $Street_Address = $_POST["Street_Address"];
    $Street_Address = sanitise_input($Street_Address);
}
if(isset ($_POST["Suburb_Town"])){
    $Suburb_Town = $_POST["Suburb_Town"];
    $Suburb_Town = sanitise_input($Suburb_Town);
}
if(isset ($_POST["Postcode"])){
    $Postcode = $_POST["Postcode"];
    $Postcode = sanitise_input($Postcode);
}
if(isset ($_POST["State"])){
    $State = $_POST["State"];
    $State = sanitise_input($State);
}
if(isset ($_POST["email"])){
    $email = $_POST["email"];
    $email = sanitise_input($email);
}
if(isset ($_POST["Phone_Number"])){
    $Phone_Number = $_POST["Phone_Number"];
    $Phone_Number = sanitise_input($Phone_Number);
}
if(isset ($_POST["Skills"])){
    $Skills = $_POST["Skills"];
    $Skills = sanitise_input($Skills);
    
}
$valid_postcodes = array(
    "NSW" => range(2000, 2999),
    "VIC" => range(3000, 3999), 
    "QLD" => range(4000, 4999),
    "SA" => range(5000, 5999),
    "WA" => range(6000, 6999),
    "TAS" => range(7000, 7999),
    "NT" => range("0800", "0999")
);
function sanitise_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$startdate ='2008-01-01';
$enddate = '1943-01-01';
$errMsg = "";
if ($Reference_Number=="") {
    $errMsg .= "<p>You must enter the Reference Number.</p>";
}
if (!preg_match("/^[A-Za-z0-9 ]+$/", $Reference_Number)) {
    $errMsg .= "<p>Only alphanumeric characters and spaces are allowed in the Reference Number.</p>";
}

if (strlen($Reference_Number) != 5){
    $errMsg .= "<p>Reference Number must be exactly 5 characters</p>";
}
if ($First_Name=="") {
    $errMsg .= "<p>You must enter your First Name.</p>";
}
else if (!preg_match("/^[a-zA-Z]*$/",$First_Name)) {
        $errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
}
else if (strlen($First_Name) > 20) {
        $errMsg .= "<p>Maximum of 20 characters allowed in the First Name";
}
if ($Last_Name=="") {
    $errMsg .= "<p>You must enter your Last Name.</p>";
}
else if (!preg_match("/^[a-zA-Z]*$/",$Last_Name)) {
        $errMsg .= "<p>Only alpha letters allowed in your Last Name.</p>";
}
if ($Date_of_Birth==""){
    $errMsg .= "<p>You must enter your Date of Birth</p>";
}
if ($Date_of_Birth >= $startdate && $Date_of_Birth <= $enddate){
} else{
    $errMsg .= "<p>You dont meet the age requirements for the Jobs</p>";
}
if ($Gender==""){
    $errMsg .= "<p>You must select a Gender</p>";
}
if ($Street_Address==""){
    $errMsg .= "<p>You must enter your Street Address</p>";
}
else if(strlen($Street_Address) > 40 ) {
    $errMsg .= "<p> Maximum of 40 characters allowed in Street Address";
}
if ($Suburb_Town==""){
    $errMsg .= "<p>You must enter your Suburb/Town</p>";
}
else if(strlen($Suburb_Town) > 40 ) {
    $errMsg .= "<p> Maximum of 40 characters allowed in Suburb/Town";
}
if ($State==""){
    $errMsg .= "<p>You must select your state</p>";
}
if ($email==""){
    $errMsg .= "<p>You must enter your email</p>";
} 
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errMsg .= "<p>Invalid Email format was entered</p>";
}
if ($Phone_Number==""){
    $errMsg .= "<p>You must enter your Phone Number</p>";
} 
if (!preg_match("/^[0-9\s]+$/", $Phone_Number)) {
    $errMsg .= "<p>Only numbers and spaces are allowed in the Phone Number</p>";
}
if (!preg_match("/^\d{8,12}$/", $Phone_Number)) {
    $errMsg .= "<p>Only 8 to 12 digits allowed in Phone Number";
}
if ($Postcode==""){
    $errMsg .= "<p>Pleae enter your Postcode</p>";
}
if (!preg_match('/^\d{4}$/', $Postcode)) {
    $errMsg .= "<p>Postcode should be exactly 4 digits</p>";
}
if ($Skills==""){
    $errMsg .= "<p>Please select at least one Skill</p>";
}
if (isset($_POST['Skills']) && $_POST['Skills'] == 'Other Skills' && empty($_POST['other'])) {
    $errMsg .= "<p>Please specify the 'Other Skills'.</p>";
  }
  if (!in_array($Postcode, $valid_postcodes[$State])) {
    $errMsg .= "<p>The Postcode entered does not match the selected State</p>";
}
if ($errMsg != ""){
	echo "<p>$errMsg</p>";
    echo "<p>Please return to the <a href='$link'>Apply Page</a></p>";}else{
        $Reference_Number = mysqli_real_escape_string($conn, $_POST['Reference_Number']);
        $First_Name = mysqli_real_escape_string($conn, $_POST['First_Name']);
        $Last_Name = mysqli_real_escape_string($conn, $_POST['Last_Name']);
        $Date_of_Birth = mysqli_real_escape_string($conn, $_POST['Date_of_Birth']);
        $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
        $Street_Address = mysqli_real_escape_string($conn, $_POST['Street_Address']);
        $Suburb_Town = mysqli_real_escape_string($conn, $_POST['Suburb_Town']);
        $Postcode = mysqli_real_escape_string($conn, $_POST['Postcode']);
        $State = mysqli_real_escape_string($conn, $_POST['State']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $Phone_Number = mysqli_real_escape_string($conn, $_POST['Phone_Number']);
        $Skills = mysqli_real_escape_string($conn, $_POST['Skills']);
        $other = mysqli_real_escape_string($conn, $_POST['other']);
        
        $sql = "INSERT INTO eoi (numJob, txtFname, txtLname, txtBirthDate, txtGender, txtAddress, txtState, numPostcode, txtEmail, txtPhone, lstSkills, txtOtherSkills) VALUES ('$Reference_Number', '$First_Name', '$Last_Name', '$Date_of_Birth', '$Gender', '$Street_Address, $Suburb_Town', '$State', '$Postcode', '$email', '$Phone_Number', '$Skills', '$other')";
        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }}

?>
</body>
</html>
