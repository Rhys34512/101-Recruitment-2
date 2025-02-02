<!--Standard Meta Tags-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Page for application to job">
  <meta name="keywords" content="Apply, Application, Job Application">
  <meta name="author" content="Tafadzwa Mudavanhu">
  <link rel="stylesheet" href="styles/style.css">
  <title>Submit Application | 101 Recruitment</title>
</head><!-- Container to hold the navidgation bar-->
<body>
<?php include_once("menu.inc"); ?>
  <div class="sec">
    <!--starting of the div classified as "sec" to section out the content of the page, so in CSS, styling can be done easier-->
    <h2 class="h2">Job Application</h2><!--Title of the page-->
    <form action="processEOI.php" method="post" novalidate="novalidate">
      <!--Link provided for the form is where the data collected from the form will be returned and echoed back the user.-->
      <fieldset>
        <legend>Job Type</legend>
        <p><label for="referencenumber">Job Reference Number <input type="text" id="referencenumber" name="Reference_Number" size="35" pattern="[A-Za-z0-9]+" required="required"></label></p><!--Job Reference Number Label were the user will only be able to enter a maxmimum amount of 5 Alphanumeric Characters-->
      </fieldset><!--Using fieldset to seperate different sections on the form-->
      <hr>
      <fieldset>
        <legend>Personal Details</legend><br>
        <div style="float:left;margin-right:20px;">
          <label for="firstname">First Name <input type="text" id="firstname" name="First_Name" size="40" pattern="^[a-zA-Z]+$" required="required"></label>
        </div>&nbsp;&nbsp;&nbsp;
        <div style="float:left;">
          <label for="lastname">Last Name <input type="text" id="lastname" name="Last_Name" size="40" pattern="^[a-zA-Z]+$" required="required"></label>
        </div><br>
        <br>
        <br>
        <br>
        <br>
        <!--First Name and Last Name labels placed next to each other using float and margin functions, which will only allow alphabetic characters to be input at max length of 20-->
        <p><label for="dateofbirth">Date of Birth <input type="date" id="dateofbirth" name="Date_of_Birth" required="required"></label></p><!--Date of Birth label will use the input type "Date" user can enter date using calendar.-->
      </fieldset>
      <hr>
      <!--hr also being used as a seperator between the different sections of the form-->
      <fieldset>
        <legend>Gender</legend><br>
        <label for="Male"><input type="radio" id="Male" name="Gender" value="Male"> Male</label>&nbsp;&nbsp;<label for="Female"><input type="radio" id="Female" name="Gender" value="Female">Female</label>&nbsp;&nbsp;<label for="Other"><input type="radio" id="Other" name="Gender" value="Other" required="required">Other</label> <!--Gender label function will display a radio input type, if no input entered alert will appear asking user to enter an input-->
      </fieldset>
      <hr>
      <fieldset>
        <legend>Contact Details</legend><br>
        <label for="Street_Address">Street Address <input type="text" id="Street_Address" name="Street_Address" size="40" required="required"></label><br>
        <p><label for="suburb/town">Suburb/town <input type="text" id="suburb/town" name="Suburb_Town" size="40" required="required"></label></p>
        <div style="float:left;margin-right:20px;">
          <label for="postcode">Postcode <input type="text" id="postcode" name="Postcode" pattern="[0-9-]+" required="required"></label>
        </div>&nbsp;&nbsp;
        <div style="float:left;">
          <label for="State">State</label> <select name="State" id="State">
            <option value="VIC">
              VIC
            </option>
            <option value="NSW">
              NSW
            </option>
            <option value="QLD">
              QLD
            </option>
            <option value="NT">
              NT
            </option>
            <option value="WA">
              WA
            </option>
            <option value="SA">
              SA
            </option>
            <option value="TAS">
              TAS
            </option>
            <option value="ACT">
              ACT
            </option>
          </select>
        </div><!--For the State select function will be used-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div style="float:left;margin-right:20px;">
          <label for="email">Email <input type="text" id="email" name="email" size="40" placeholder="name@domain.com" pattern="^.+@.+\..{2,3}$" required="required"></label>
        </div>&nbsp;&nbsp; <!--Email will use a placeholder to allow users to see what format is expecte to be entered, pattern is also used to make sure users enter the expected input-->
        <div style="float:left;">
          <label for="phone_number">Phone Number <input type="text" id="phone_number" name="Phone_Number" size="30" pattern="[0-9\s]+" required="required"></label>
        </div><!--Phone Number will allow input data of numbers and spaces, with the max length of 12 characters -->
      </fieldset>
      <hr>
      <fieldset id='Skills'>
        <legend>Skill List</legend><br>
        <label for="Html"><input type="checkbox" id="Html" name="Skills[]" value="Html" checked>HTML</label> <label for="javascript"><input type="checkbox" id="javascript" name="Skills[]" value="JavaScript">JavaScript</label> <label for="css"><input type="checkbox" id="css" name="Skills[]" value="CSS">CSS</label> <label for="XML"><input type="checkbox" id="XML" name="Skills[]" value="XML">XML</label> <label for="PHP"><input type="checkbox" id="PHP" name="Skills[]" value="PHP">PHP</label> <label for="MySQL"><input type="checkbox" id="MySQL" name="Skills[]" value="MySQL">MySQL</label> <label for="otherskills"><input type="checkbox" id="otherskills" name="Skills[]" value="Other Skills">Other Skills</label>
        <p><label for="textarea">Other Skills<br>
        <textarea placeholder="Please enter other skills...." id="textarea" name="other" rows="10" cols="50"></textarea></label></p><!--Skill list will use input type a checkbox where different options will be available for selection. Textarea also used for the "other skills" using a placeholder to inform users that they can type inside.-->
      </fieldset>
      <hr>
      <div id="submission">
        <p id="enhancement1"><label for="submit"><input type="submit" id="submit" name="submit" value="Apply"></label>&nbsp;<label for="reset"><input type="reset" id="reset" value="Reset"></label></p><!--Submit button which will allow users to submit their data, if every required data box is filled out with expected input, if not they will be notified to make changes. The data will then be returned to them and echoed on the PHP page.
    The reset button will just clear all of the data that has been input.-->
      </div>
    </form><!--Ending of the form-->
  </div><!--Ending of the div-->
  <!-- this the footer which will be at the bottom of the page which is broken into 4 divs, main including company logo,
links for the different pages within the website,
location of our headquaters and our socials -->
  <?php include_once("footer.inc"); ?>
</body>
</html>
