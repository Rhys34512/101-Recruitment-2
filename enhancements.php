<!-- Standard Meta Tags -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="A page providing a detailed description of the enhancements included on the website">
        <meta name="keywords" content="Apply, Personal, Details">
        <meta name="author" content="Luke">
        <link rel="stylesheet" href="styles/style.css">
        <title>Enhancements | 101 Recruitment</title>
      </head>
<body>
<!-- Container which holds the navigation bar -->
     
	<?php include_once("menu.inc"); ?>
	
	<div class="sec">
	<!-- div being used to seperate the content within it using the class "sec" which is used for various pages to be styled consistently throughout the website -->
   <h2 id="enhancements-header">Enhancements</h2> <!-- Header of the page having an id so it can be styled in CSS-->
   <hr> <!--hr for seperation of the header and the content-->
    <div class="enhancement"> 
    <!-- div for the content so in CSS the text can be aligned to the left-->
   <p>Throughout our webpage we have incoroporated a variety of enhancements to improve both the usability, effectiveness and attractiveness of the webpage.</p>
   <h2>Navigational Elements - Hover Effect</h2>
   <p>This is enhancement was involved with the buttons, submit and reset input types. Which were used on both the <a href="index.html">Home page</a> and the <a href="apply.html">Applications page</a>. This enhancement goes beyond the basic assignment requirements by allowing the visual appeal to be improved for the intended audience by changing it from the generic button. Which allows the users to know what their actions have an impact, whenever their cursor goes over the button, submit or reset input type the element will change colour highlighting that it can be clicked.</p>
   <p>The code included within this enhancement was obviously the elements that was enhanced in CSS using the color for the background and text for the initial element before the cursor hovers over it, and also the transition style, which controls the animation speed when the cursor hovers over the element. Hover was also used in CSS which controls the colour change when the cursor hovers over the element.</p>
	    <p>Enhancement Author: Louis</p>	
    </div> 
	<div class="enhancement">
   <h2>Job Openings Page - Navigation Side Menu</h2>
   <p>An enhancement located on the <a href="jobs.html">Job Openings</a> page that serves as a navigation element, enabling the user to quickly locate a position of potential interest without having to needlessly scroll through the entirety of the page beforehand. To provide added readability, each listing in the menu has been highlighted in blue, a colour that is consistent with other links located on the website as a whole.</p>
   <p>Due to the length of the page itself, the menu has been made static and consistently stays in place regardless of how far the user is to scroll down. This ensures that the user is able to quickly navigate to each listing, making browsing the page as a whole more efficient.</p>
		<p>Enhancement Author: Luke</p>	
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
