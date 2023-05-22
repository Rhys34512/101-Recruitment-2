<!--Standard Meta Tags-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Page for application to job with 101 Recruitment">
  <meta name="keywords" content="Apply, Application, Job Application">
  <meta name="author" content="Tafadzwa Mudavanhu">
  <link rel="stylesheet" href="styles/style.css">
  <title>Submit Application | 101 Recruitment</title>
</head><!-- Container to hold the navidgation bar-->
<body>
  
  <?php include_once("menu.inc"); ?>
  
  <div class="sec2">
    <!--starting of the div classified as "sec" to section out the content of the page, so in CSS, styling can be done easier-->
    <h2 class="h2">Sign Up</h2><!--Title of the page-->
    <!--<form action="processEOI.php" method="post"> -->
      <!--Link provided for the form is where the data collected from the form will be returned and echoed back the user.-->
      

<!--        <p><label for="referencenumber">Job Reference Number <input type="text" id="referencenumber" name="Reference_Number" size="35" pattern="[A-Za-z0-9]+" maxlength="5" required="required"></label></p> -->
        
             <form action="signup-check.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
			
		<div class="form-container2">
		<div>
			<label for="name">Name</label>
			<?php if (isset($_GET['name'])) { ?>
			<input type="text" name="name" placeholder="Name" size="40" value="<?php echo $_GET['name']; ?>">
			<?php } else { ?>
			<input type="text" name="name" size="40" placeholder="Name">
			<?php } ?>
		</div>

		<div>
			<label for="uname">User Name</label>
			<?php if (isset($_GET['uname'])) { ?>
			<input type="text" name="uname" size="40" placeholder="User Name" value="<?php echo $_GET['uname']; ?>">
			<?php } else { ?>
			<input type="text" name="uname" size="40" placeholder="User Name">
			<?php } ?>
		</div>

		<div>
			<label for="password">Password</label>
			<input type="password" name="password" size="40" placeholder="Password">
		</div>

		<div>
			<label for="re_password">Re-enter Password</label>
			<input type="password" name="re_password" size="40" placeholder="Re_Password">
		</div>
		</div>
	


    



        
      <hr>

		
		
		
		<div id="submission">
        <p id="enhancement1">
        <label for="submit"><input type="submit" id="submit" value="Sign Up">
     	</label>&nbsp;
        <a href="login.php" class="ca">Already have an Account?</a>
        </p>
		<!--Submit button which will allow users to submit their data, if every required data box is filled out with expected input, if not they will be notified to make changes. The data will then be returned to them and echoed on the PHP page.
		
	
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
