<!-- Standard Meta Tags -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Insert Description Here">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="HTML, CSS">
  <meta name="author" content="Louis S.">
  <link rel="stylesheet" href="styles/style.css">
  <title>About Us | 101 Recruitment</title>
</head>
<body>
	<!-- Container to hold the navigation bar -->
  
	<?php include_once("menu.inc"); ?>
	
  <div class="sec"> <!--starting of the div classified as "sec" to section out the content of the page, so in CSS, styling can be done easier-->
    <h2 class="h2">About Our Group</h2> <!-- Title of the Page -->
    <hr id="line">
    <div id="dl">
      <img src="styles/images/Group_pic-resized.jpg" class="group_pic" alt="Picture of 101 Recruitment" title="Our Group. From left to right: TJ, Luke, Louis, Rhys and Ruhul.">
      <dl> <!-- Definition list including details about the group -->
        <dt>Group Name:&nbsp;</dt>
        <dd>Five Guys</dd>
        <dt>Group ID:&nbsp;</dt>
        <dd>4</dd>
        <dt>Tutor's Name:&nbsp;</dt>
        <dd>Fatma Mohammed</dd>
        <dt>Course:&nbsp;</dt>
        <dd>COS10026-Computing Technology Inquiry 2023 Semester 1 Project</dd>
      </dl>
    </div>
    <h2 id="timetable-header">Timetable</h2> <!-- h2 for a new section of the page -->
      <table>
        <tr>
          <th>Day</th>
          <th>Time</th>
          <th>Subject</th>
        </tr>
        <tr>
          <td>Monday</td>
          <td>8.30am-12.30pm</td>
          <td>Computing Technology Inquiry Project</td>
        </tr>
        <tr>
          <td>Tuesday</td>
          <td>11:00am - 14.30pm</td>
          <td>Introduction to programming</td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td>4:00pm - 6:30pm</td>
          <td>Computer Systems</td>
        </tr>
        <tr>
          <td>Thursday</td>
          <td>11:00am - 12:30pm</td>
          <td>Network and Switching</td>
        </tr>
        <tr>
          <td>Friday</td>
          <td>10:00am - 12:30pm</td>
          <td>Computer System</td>
        </tr>
      </table>
    <br>
    <br>
    <p id="button"><a href="mailto:ruhulislamwasif@gmail.com">Email Us</a></p> <!-- mailto button, for when clicked it'll take the user to email the given email -->
    <h2>Group Profile:</h2> <!-- h2 for a new section of the page -->
    <p>The official home for opportunities and careers at 101 IT, the world's leading brand in technological innovation.</p>
    <hr>
    <h3>Louis</h3>
    <h4>Programming Skills:</h4>
	<p>Whilst quite limited, I have accumulated experience and knowledge in a variety of programming languages such as Visual C#, MySQL, PHP, HTML and CSS, the latter of which has been of particular help during this subject. Additionally, I have enjoyed tinkering with more hardware-oriented electronic devices such as the Arduino, which utilises a subset of the C programming language.</p>
    <h4>Working experience:</h4>
	<p>Although I have yet to hold any formal working experience when it comes to programming, I have created multiple projects in my free time such as a text-based instant messaging application, file storage website and a browser-based user account system. After advancing my programming knowledge further, I endeavour to apply it in a professional workplace setting.</p>
    <h4>Interests:</h4>
	<p>Programming has undoubtedly been my primary hobby of interest, having been introduced to it in primary school through MIT's Scratch. However, I am also highly interested in music production and want to study music theory in my free time heading into the future. Additionally, I have had a long-standing passion for geography, global culture and flags.</p>
    <hr>
    <h3>Rhys</h3>
    <h4>Programming Skills:</h4>
    <p>My Programming skills span from knowledge of HTML, CSS, Python, G-Code and Ruby. I have used these programming skills primarily with microcomputers such as raspberry pi's and arduinos to make small mechanical and electrical componenets.</p>
    <h4>Working experience:</h4>
    <p>I have some work experience using my programming knowledge. I have used my programming knowledge to make small applications for my fathers work, and also write G-code for my 3D Printers which I use to sell models and prints online.</p>
    <h4>Interests:</h4>
    <p>My interests include 3D Printing, mechanical engineering, Cars, Formula 1 and most motorsport categories. I find the mechanical side of things very interestig and how software can be implemented to accompany the mechanical aspects.</p>
    <hr> <!-- Use of hr to seperate each section -->
    <h3>Ruhul</h3>
    <h4>Programming Skills:</h4>
    <p>My programming skills are HTML and CSS, with those skills, which i learned from this  unit .</p>
    <h4>Working experience:</h4>
	<p> I have limited work experience in creating small web pages with the programming skills that I have learned. </p>  
    <h4>Interests:</h4>
	  <p> My interests are gaming and playing Futsal in free time </p>
    <hr>
    <h3>Luke</h3>
    <h4>Programming Skills:</h4>
    <p>The programming skills I have aquired and feel competent in include, C Sharp, Java, C++, HTML and CSS. These programming skills allow me to make wepages, and other projects such as small games, applications and tools to aid in the production of games and applications.</p>
    <h4>Working experience:</h4>
    <p>The experience I have gained through using the programming languages listed earlier, involve primarily making games and small applications which have accelerated my knowledge of programming and the process of making applications to suit requirements.</p>
    <h4>Interests:</h4>
    <p>One of the things I am most interested in is Gaming, that is why I have expanded my knowledge of programming video games and applications.</p>
    <hr>
    <h3>Tj</h3>
    <h4>Programming Skills:</h4>
    <p>My programming skills consist of CSS, HTML, Unity, Python and Ruby. My experience with these programs has led to me making some webpages, and simple arcade games which can be played.</p>
    <h4>Working experience:</h4>
    <p>I have some work experience using my programming skills to make programs for reading databases, and visualise data for viewers to understand it better, I have also made little arcade games.</p>
    <h4>Interests:</h4>
    <p>My interests, are sports especially basketball, and video games which was what my arcade game was made on being a sport game.</p>
  </div> <!-- Ending of the div -->
<!-- this the footer which will be at the bottom of the page which is broken into 4 divs, main including company logo,
links for the different pages within the website,
location of our headquaters and our socials -->
  
<?php include_once("footer.inc"); ?>
	
</body>
</html>
