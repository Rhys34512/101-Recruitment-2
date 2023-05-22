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
    
    <h2 class="h2">Login</h2><!--Title of the page-->
    <form action="login-check.php" method="post">
      <!--Link provided for the form is where the data collected from the form will be returned and echoed back the user.-->

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<div class="form-container">
			<label for="firstname">User Name<input type="text" name="uname" size="40" placeholder="Username"></label>
			<br>
			<label for="lastname">Password<input type="password" name="password" size="40" placeholder="Password"></label>
		</div><br>
        <br>
        <br>





  
        
		<div id="submission">
        <p id="enhancement1">
        <label for="submit"><input type="submit" id="submit2" value="Login">
     	</label>&nbsp;
		</div>
		
		<div id="submission2">
        <a href="signup.php" class="ca">Create an Account</a>
        </p>
		
		</div>        
        
 
          
        
        
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
