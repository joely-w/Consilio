<!DOCTYPE html>
<html>

<head>
	<link href="style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Consilio - Our Services</title>
</head>

<body>
			<?php
include('navigation.php');
$nav_classes = ["div"=>["nav", "home"], #Key: <tag name>: <list of classes>
                "li"=>["menuitem"]];
display_menu($navigation_elements, $filename, $nav_classes);?>

<div class="formHeader" style="background:url(./images/services.jpg);background-size:cover;background-postion:20% 0%;background-repeat:no-repeat;">
	<div class="formOverlay">
	<h1 class="headingText">
		Our Services
	</h1>
</div>
</div>

		<div class="leftalign">
			<img src="./images/design.jpg">
			<span class="element">At Consilio, we create beautiful, bespoke websites that attract and engage customers.<br>
				All our websites are mobile-friendly and responsive. <br>
				Every website is expertly tailored to your company's needs, and our skilled team of designers<br>
				and programmers are available round-the clock to edit and maintain your website.</span>
		</div>
		<div class="rightalign">
			<img src="./images/maintenance.jpg">
			<span class="element">Keeping a website updated improves search engine results and keeps your business active on the web.
				<br>With our website maintenance packages, we look after your website for you. Our team will update and improve your website,<br>
				as well as hosting and doing regular backups of your site.</span>
		</div>
		<div class="leftalign">
			<img src="./images/development.jpeg">
			<span class="element">Want a Content Management Systems that is efficient and intuitive?<br>
				Our skilled team uses a range of software and programming languages to implement systems that stand out from the crowd.<br>
				From blogs to contact forms, we do it all! </span>

		</div>
		<div class="rightalign">
			<img src="./images/graphics.jpg">
			<span class="element">We create stunning graphics for all types of businesses. Having impressive design<br>
				improves your brand image and creates a great first impression for new customers.<br>
				Whether you need a logo, a banner, an advert design or anything in between, we offer to design <br>
				your idea using the latest, cutting edge technology.</span>
		</div>
	<?
	include('footer.php');
	?>

</body>

</html>
