<!-- Standard Meta Tags -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="A page providing a detailed description of the enhancements included on the website as a part of Assignment 2">
        <meta name="keywords" content="Enhancements Description">
        <meta name="author" content="Louis">
        <link rel="stylesheet" href="styles/style.css">
        <title>Enhancements 2 | 101 Recruitment</title>
      </head>
<body>
<!-- Container which holds the navigation bar -->
     
	<?php include_once("menu.inc"); ?>
	
	<div class="sec">
	<!-- div being used to seperate the content within it using the class "sec" which is used for various pages to be styled consistently throughout the website -->
   <h2 id="enhancements-header">Enhancements - Part 2</h2> <!-- Header of the page having an id so it can be styled in CSS-->
   <hr> <!--hr for seperation of the header and the content-->
    <div class="enhancement"> 
    <!-- div for the content so in CSS the text can be aligned to the left-->
   <p>Alike with Part 1 of the Assignment, we have incorporated a variety of enhancements to improve both the usability, effectiveness and attractiveness of our website.</p>
   <h2><a href="login.php">Manager Sign Up Page</a></h2>
   <p>An enhancement which incorporates a fully-fledged login system system that is to be used by those wishing to access the 'manage.php' page. The enhancement is comprised of numerous pages, with the main ones being "signup.php" and "login.php". Upon accessing them, you are prompted to enter a series of credentials which allow you to either create a new account or sign into an existing one. The Enhancement utilises a separate 'users' table in the MySQL datbase in order to store this data.</p>
   <p>Upon submitting the Sign Up/Log In form, the data is validated and processed by the corresponding 'signup-check.php' and 'login-check.php' files, which execute MySQL queries that verify the integrity of the data submitted. Once the data entered has been successfully validated, the user is redirected to 'manage.php'.</p>
	   <p> 
	   <p>Enhancement Author: Rhys</p>	
    </div> 
	<div class="enhancement">
   <h2><a href="careers.php">Careers Portal</a></h2>
   <p>An enhancement that is comrpised of a page (careers.php) allowing for those who have previously submitted a job application to check its status. Due to the fact that there is no existing mechanism to do so, the page provides an easy way that would circumvent applicants from having to manually contact our website's administrators.</p>
   <p>Upon entering the details of the application, the page will return a table that consists of the user's Full Name, EOI Number, the Application Status as well as the Job in which they applied for.</p>
   <p>Because the page itself is only intended for those who have already submitted an application, should incorrect details be entered, a prompt will appear notifying the user that this is the case. This is implemented through a piece of code checking whether an executed SQL command successfully returned a result.</p>
		<p>Enhancement Author: Louis</p>	
    </div>
	<div class="enhancement">
   <h2><a href=".php">Frequently Asked Questions</a></h2>
   <p>This enhancement is a page (FAQ.php) that conists of an index of questions in which those who are using the website (e.g., Prospective employees, Managers, etc.) may have, as well as their corresponding answers. This serves to provide a level of clarity for those using the website, and is especially designed for those who are unfamiliar with it and its interface.</p>
   <p>Whilst the answer to each question displayed is initially hidden, the page utilises CSS in order to  display it upon the question being clicked, doing so with a collapse-like effect. This is to ensure that the page is easy to navigate and does not appear too cluttered.</p>
		<p>Enhancement Author: Ruhul</p>	
    </div>
	</div>
<!--- The footer is broken down into 4 'div' tags to demonstrate:
 		brand identity, 
		a smaller version of the navigation above to serve as a sitemap, 
		a physical address, 
		and a set of social media links.
 -->
	
	<?php include_once("footer.inc"); ?>
	
</body>
</html>
