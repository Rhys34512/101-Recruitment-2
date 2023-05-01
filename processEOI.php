<?php
include ("settings.php")
?>
<?php
   $conn
if(isset($_POST['Submit'])){
    if(!empty($_POST['Reference_Number']) && !empty($_POST['First_Name']) && !empty($_POST['Last_Name']) && !empty($_POST['Date_of_Birth']) && !empty($_POST['Gender']) && !empty($_POST['Street_Address']) && !empty($_POST['Suburb_Town']) && !empty($_POST['Postcode']) && !empty($_POST['State']) && !empty($_POST['email']) && !empty($_POST['Phone_Number']) && !empty($_POST['Skills'])){
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
}
}
?>
<?php
    function sanitise_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
if(isset($_POST["Reference_Number"])){
    $Reference_Number = $_POST["Reference_Number"];
    $Reference_Number = sanitise_input($Reference_Number);

if (empty ($_POST["Reference_Number"])) {  
    $errMsg = "<p>Error: You didn't enter the Reference Number.</p>";  
             echo $errMsg;  
} else {  
    $Reference_Number = $_POST["Reference_Number"];  
}  
if(!preg_match("/[A-Za-z0-9]+/",$Reference_Number)){
    $errMsg = "<p>Error: Only letters and numbers allowed in the Reference Number.</p>";
                echo $errMsg;
} else {
    $Reference_Number = $_POST["Reference_Number"];
}
if(strlen($Reference_Number) > 5){
    $errMsg = "<p>Error: You have exceeded the maximum characters in the Reference Number.</p>";
                echo $errMsg;
} else {
    $Reference_Number = $_POST["Reference_Number"];
}
if(strlen($Reference_Number) < 5){
    $errMsg = "<p>Error: You have entered an invalid amount of characters in the Reference Number.</p>";
                echo $errMsg;
} else {
    $Reference_Number = $_POST["Reference_Number"];
}
}
if(isset($_POST["First_Name"])){
    $First_Name = $_POST["First_Name"];
    $First_Name = sanitise_input($First_Name);

if (empty ($_POST["First_Name"])) {  
    $errMsg = "<p>Error: You didn't enter your First Name.</p>";  
             echo $errMsg;  
} else {  
    $First_Name = $_POST["First_Name"];  
}  
if(strlen($First_Name) > 20){
    $errMsg = "<p>Error: You have exceeded the maximum character in the First Name.</p>";
                echo $errMsg;
} else {
    $First_Name = $_POST["First_Name"];
}
if(!preg_match("/^[a-zA-Z]*$/",$First_Name)){
    $errMsg = "<p>Error: Only letters allowed in First Name.</p>";
                echo $errMsg;
} else {
    $First_Name = $_POST["First_Name"];
}
}
if(isset($_POST["Last_Name"])){
    $Last_Name = $_POST["Last_Name"];
    $Last_Name = sanitise_input($Last_Name);

if (empty ($_POST["Last_Name"])) {  
    $errMsg = "<p>Error: You didn't enter your Last Name.</p>";  
             echo $errMsg;  
} else {  
    $Last_Name = $_POST["Last_Name"];  
}  
if(strlen($Last_Name) > 20){
    $errMsg = "<p>Error! You have exceeded the maximum character in the Last Name.</p>";
                echo $errMsg;
} else {
    $Last_Name = $_POST["Last_Name"];
}
if(!preg_match("/^[a-zA-Z]*$/",$Last_Name)){
    $errMsg = "<p>Error: Only letters allowed in Last Name.</p>";
            echo $errMsg;
} else {
    $Last_Name = $_POST["Last_Name"];
}
}
if(isset($_POST["Gender"])){
    $Gender = $_POST["Gender"];
    $Gender = sanitise_input($Gender);

if(empty($_POST['Gender'])){
    $errMsg = "Error: No Gender was Selected.";
            echo $errMsg;
} else {
    $Gender = $_POST["Gender"];
}
}
if(isset($_POST["Street_Address"])){
    $Street_Address = $_POST["Street_Address"];
    $Street_Address = sanitise_input($Street_Address);

if (empty ($_POST["Street_Address"])) {  
    $errMsg = "<p>Error: You didn't enter your Street Address.</p>";  
             echo $errMsg;  
} else {  
    $Street_Address = $_POST["Street_Address"];  
}  
if(strlen($Street_Address) > 40){
    $errMsg = "<p>Error: You have exceeded the maximum character in the Street Address.</p>";
                echo $errMsg;
} else {
    $Street_Address = $_POST["Street_Address"];
}
}
if(isset($_POST["Suburb_Town"])){
    $Suburb_Town = $_POST["Suburb_Town"];
    $Suburb_Town = sanitise_input($Suburb_Town);

if (empty ($_POST["Suburb_Town"])) {  
    $errMsg = "<p>Error: You didn't enter your Suburb/Town.</p>";  
             echo $errMsg;  
} else {  
    $Suburb_Town = $_POST["Suburb_Town"];  
}  
if(strlen($Suburb_Town) > 40){
    $errMsg = "<p>Error: You have exceeded the maximum character in the Suburb/Town.</p>";
                echo $errMsg;
} else {
    $Suburb_Town = $_POST["Suburb_Town"];
}
}
if(isset($_POST["Postcode"])){
    $Postcode = $_POST["Postcode"];
    $Postcode = sanitise_input($Postcode);

if (empty ($_POST["Postcode"])) {  
    $errMsg = "<p>Error: You didn't enter your Postcode.</p>";  
             echo $errMsg;  
} else {  
    $Postcode = $_POST["Postcode"];  
}  
if(strlen($Postcode) > 4){
    $errMsg = "<p>Error: You have exceeded the maximum characters in the Postcode.</p>";
                echo $errMsg;
} else {
    $Postcode = $_POST["Postcode"];
}
if(strlen($Postcode) < 4){
    $errMsg = "<p>Error: You have entered an invalid amount of characters in the Postcode.</p>";
                echo $errMsg;
} else {
    $Postcode = $_POST["Postcode"];
}
if(!preg_match("/[0-9-]+/",$Postcode)){
    $errMsg = "<p>Error: Only numbers allowed in the Postcode.</p>";
                echo $errMsg;
} else {
    $Postcode = $_POST["Postcode"];
}
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
    $email = sanitise_input($email);

if (empty ($_POST["email"])) {  
    $errMsg = "<p>Error: You didn't enter your Email.</p>";  
             echo $errMsg;  
} else {  
    $email = $_POST["email"];  
}  
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errMsg = "<p>Error: Invalid Email format was entered</p>";
                echo $errMsg;
} else {
    $email = $_POST["email"];
}
}
if(isset($_POST["Phone_Number"])){
    $Phone_Number = $_POST["Phone_Number"];
    $Phone_Number = sanitise_input($Phone_Number);

if (empty ($_POST["Phone_Number"])) {  
    $errMsg = "<p>Error: You didn't enter your Phone Number.</p>";  
             echo $errMsg;  
} else {  
    $Phone_Number = $_POST["Phone_Number"];  
}  
if(strlen($Phone_Number) > 12){
    $errMsg = "<p>Error: You have exceeded the maximum characters in the Phone Number.</p>";
                echo $errMsg;
} else {
    $Phone_Number = $_POST["Phone_Number"];
}
if(strlen($Phone_Number) < 8){
    $errMsg = "<p>Error: You have entered an invalid amount of characters in the Reference Number.</p>";
                echo $errMsg;
} else {
    $Phone_Number = $_POST["Phone_Number"];
}
if(!preg_match("/[0-9\s]+/",$Phone_Number)){
    $errMsg = "<p>Error: Only numbers and spaces allowed in the Phone Number.</p>";
                echo $errMsg;
} else {
    $Phone_Number = $_POST["Phone_Number"];
}
}

?>
