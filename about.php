<!DOCTYPE html>
<html>
  <head>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <link href="style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Consilio Design</title>
  </head>
  <body>
    <?php
include('navigation.php');
$nav_classes = ["div"=>["nav", "home"], #Key: <tag name>: <list of classes>
                "li"=>["menuitem"]];
display_menu($navigation_elements, $filename, $nav_classes);
?>

    <div class="formHeader" style="background:url(./images/aboutus.jpg); background-position: 50%;background-size:100%;background-repeat:no-repeat;">
			<div class="formOverlay">
			<h1 class="headingText">
				About Us...
			</h1>
		</div>
		</div>
<h1 class="aboutText" style="font-size:2em;margin-top:5vh;	font-weight:bold;">We are Consilio</h1><br>
    <p class="aboutText"> ...a web design and development company based in Stoke on Trent.  <br><br>

Our team is comprised of qualified, skilled and creative designers and developers that build beautiful, quality websites for all types of business.  <br><br>

Furthermore, we can update and offer security packages for existing sites, as well as creating modern graphics whatever your needs. <br><br>

When making a website, our aim is to create something that is sleek, looks great and represents your business.</p>

<h2 class="aboutTitle">What we Use</h2>

<div class="container">
  <div class="row align-items-start">
    <div class="col-md-3">
        <img class="appImg" src="./images/svg/html5.svg">
      <p class="appTitle">HTML5</p>
    </div>
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/css3.svg" style="margin-left:15%;margin-right:auto;">
      <p class="appTitle">CSS3</p>
    </div>
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/javascript.svg">
      <p class="appTitle">Javascript</p>
    </div>
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/jquery.svg">
      <p class="appTitle">JQuery</p>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/bootstrap.svg">
      <p class="appTitle">Bootstrap</p>
    </div>
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/wordpress.svg">
      <p class="appTitle">Wordpress</p>
    </div>
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/mongodb.svg">
      <p class="appTitle">MongoDB</p>
    </div>
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/mysql.svg">
      <p class="appTitle">MySQL</p>
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/php.svg" style="margin-bottom:25%">
      <p class="appTitle">PHP7</p>
    </div>
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/illustrator.svg">
      <p class="appTitle">Illustrator</p>
    </div>
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/photoshop.svg">
      <p class="appTitle">Photoshop</p>
    </div>
    <div class="col-md-3">
      <img class="appImg" src="./images/svg/indesign.svg">
      <p class="appTitle">Indesign</p>
    </div>
  </div>
</div>

<h2 class="aboutTitle">Meet Our Team</h2>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img class="avatar" src="./images/svg/joel.svg">
      <p class="teamMember">Joel Winterton</p>
      <p class="teamSubTitle">Lead Developer</p>
      <p class="teamDescription">Joel is a talented web designer and developer, who has worked with a range of industries to create their ideal website. Joel is also Consilio's graphics designer, and creates graphical assets for businesses around the world.</p>


    </div>
    <div class="col-md-6">
      <img class="avatar" src="./images/svg/dylan.svg">
      <p class="teamMember">Dylan Poole</p>
      <p class="teamSubTitle">Lead Designer</p>
      <p class="teamDescription">Dylan is a skilled creative from Stoke on Trent with experience in web design and graphics, who works to
create websites that are high quality and fully responsive. Dylan   </p>

    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-12" style="margin-left:25%;">
      <img class="avatar" src="./images/svg/nathan.svg">
      <p class="teamMember">Nathan Winterton</p>
      <p class="teamSubTitle">Marketing Manager and Customer Care</p>
      <p class="teamDescription">Nathan is our customer care manager who arranges our projects with clients and ensure all our customers are delighted with the finished work. He also handles all marketing at Consilio.</p>

    </div>
  </div>
</div>
<?
include('footer.php');
?>


</html>
