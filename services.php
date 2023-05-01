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
    <title>Services | 101 Recruitment</title>
</head>
<body>
<!-- Container to hold the navigation bar -->
	
     <?php include_once("menu.inc"); ?>
    
	<div id="sec-services"> <!-- div to section the content to allow styling -->

  <h2>Our Services:</h2>  <!-- h2 for the title of the page -->
  <p>101 IT prides itself on the wide range of servies we offer at competitive prices. See the services we provide that make running your webpage easy!</p>
  <p>Please note that all prices are in Australian Dollars.</p>



<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">$ 9.99 / year</li>
    <li>10GB Storage</li>
    <li>10 Emails</li>
    <li>10 Domains</li>
    <li>1GB Bandwidth</li>
    <li><input type="button" class="button-tier" value="Coming Soon" title="This product is currently unavailable."></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Pro</li>
    <li class="grey">$ 24.99 / year</li>
    <li>25GB Storage</li>
    <li>25 Emails</li>
    <li>25 Domains</li>
    <li>2GB Bandwidth</li>
    <li><input type="button" class="button-tier" value="Coming Soon" title="This product is currently unavailable."></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">$ 49.99 / year</li>
    <li>50GB Storage</li>
    <li>50 Emails</li>
    <li>50 Domains</li>
    <li>5GB Bandwidth</li>
    <li><input type="button" class="button-tier" value="Coming Soon" title="This product is currently unavailable."></li>
  </ul>
</div>

	
<div class="columns"> <!-- div being in class="columns" allowing the ul to be styled -->
  <ul class="price">
    <li class="header">Unlimited</li>
    <li class="grey">$ 64.99 / year</li>
    <li>100GB Storage</li>
    <li>75 Emails</li>
    <li>75 Domains</li>
    <li>15GB Bandwidth</li>
    <li><input type="button" class="button-tier" value="Coming Soon" title="This product is currently unavailable."></li>
  </ul>
</div>	
</div>
<!-- this the footer which will be at the bottom of the page which is broken into 4 divs, main including company logo,
links for the different pages within the website,
location of our headquaters and our socials -->
	
	<?php include_once("footer.inc"); ?>
	
</body>
</html>
