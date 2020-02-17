<<<<<<< HEAD

=======
<!DOCTYPE html>
<html>
	<head>
		<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
		<link href="style.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<title>Consilio Design</title>
	</head>
  <body>
		<?php
include('navigation.php');
$nav_classes = ["div"=>["nav", "home"], #Key: <tag name>: <list of classes>
                "li"=>["menuitem"]];
display_menu($navigation_elements, $filename, $nav_classes);
?>
		<div class="header">
			<div class="overlay">
			<h1>
				Stunning, bespoke websites to set <br> your business apart from the crowd.
			</h1>

		</div>

    <a href="#scrollTo"><img id="arrow" src="./images/svg/arrow.svg"></a>
		</div>

<div class="about">

<h2 class="aboutHeader line" id="scrollTo">We are Consilio</h2><br>

<p class="aboutDesc">A Bespoke Web Design company from Stoke-on-Trent, offering<br> affordable web design & development packages for all types of businesses.</p>
<br><br>
</div>

<div class="container">
		<!--<h2>What we offer</h2>-->
  <div class="services row display-flex">
    <div class="col-md-3 serviceContent">
      <img src="./images/design.jpg">
			<h3 class="title">Design</h3>
			<span class="element">At Consilio, we create beautiful, bespoke websites that attract and engage customers.</span><span>All our websites are mobile-friendly and responsive. </span><span> Every website is expertly tailored to your company's needs, and our skilled team of designers and programmers are available round-the clock to edit and maintain your website.</span>
      <br><div class="button">
         <a href="" class="btn center">Find out more...</a>
      </div>
    </div>
    <div class="col-md-3 serviceContent">
      <img src="./images/maintenance.jpg">
			<h3 class="title">Maintenance</h3>
			<span class="element">Keeping a website updated improves search engine results and keeps your business active on the web.</span><span>With our website maintenance packages, we look after your website for you. Our team will update and improve your website, as well as hosting and doing regular backups of your site.</span>
      <br><div class="button">
         <a href="" class="btn center">Find out more...</a>
      </div>
    </div>
    <div class="col-md-3 serviceContent">
      <img src="./images/development.jpeg">
			<h3 class="title">Development</h3>
			<span class="element">Want a Content Management Systems that is efficient and intuitive?</span><span>Our skilled team uses a range of software and programming languages to implement systems that stand out from the crowd. From blogs to contact forms, we do it all! </span>
      <br><div class="button">
         <a href="" class="btn center">Find out more...</a>
      </div>
    </div>
		<div class="col-md-3 serviceContent">
      <img src="./images/graphics.jpg">
			<h3 class="title">Graphics</h3>
			<span class="element">We create stunning graphics for all types of businesses. Having impressive graphic design improves your brand image and creates a great first impression for new customers. Whether you need a logo, a banner, an advert design or anything in between, we offer to design your idea using the latest, cutting edge technology.</span>
      <br><div class="button">
         <a href="" class="btn center">Find out more...</a>
      </div>
    </div>
  </div>

<h2 id="section2" class="subheading line">What We Use</h2>
<p class="aboutDesc">We use the latest software and cutting edge technology to deliver our exceptional web design and graphics packages.</p>

<div class="whatweuse row">
  <div class="col-md-2">
    <img class="appImg" src="./images/svg/html5.svg">
  </div>
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/css3.svg">
  </div>
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/javascript.svg">
  </div>
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/jquery.svg">
  </div>
  <div class="col-md-2">
    <img style="margin-top:20%;"src="./images/svg/bootstrap.svg">
  </div>
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/wordpress.svg">
  </div>
<div class = "whatweuse row">
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/mongodb.svg">
  </div>
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/mysql.svg">
  </div>
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/php.svg">
  </div>
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/illustrator.svg">
  </div>
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/photoshop.svg">
  </div>
  <div class="col-md-2">
    <img class="appImg"src="./images/svg/indesign.svg">
  </div>



</div>

</div>



<h2 class="subheading line">Get in Touch!</h2>

<form action="process.php" method="POST" class="indexContactForm">

<div class="row">

<div class="col-md-6">
<input class="indexInput" type="text" name="name" placeholder="Enter your Name:">
</div>

<div class="col-md-6">
<input class="indexInput" type="phone" name="phone" placeholder="Enter your Phone Number:"><br>
</div>
</div>

<div class="row">
  <div class="col-md-12">
    <input class="indexInput" type="email" name="email" placeholder="Enter your Email:">
  </div>
</div>
<div class="row">

  <div class="col-md-12">
    <textarea class="indexInput" name="message" placeholder="Enter Your Message" style="height:20vh !important;"></textarea>
  </div>
<div>

<div class="row">
  <div class="col-md-6">
    How did you hear about us?:<br>
    <select name="exposure" class="dropdown">
      <option value="poster">Poster or Billboard</option>
      <option value="phone">Phone Call</option>
      <option value="flyer">Flyer/Leaflet</option>
      <option value="reccomendation">Reccomendation</option>
      <option value="other">Other</option>
    </select><br><br>
  </div>
  <div class="col-md-6">
    Preferred method of Communication:<br>
    <select name="communication" class="dropdown">
    <option class="dropDownItem" value="email">Email</option>
    <option class="dropDownItem" value="phone">Phone Call</option>
    <option class="dropDownItem" value="sms">SMS Message</option>
    </select><br><br>
  </div>
<div>
<br>
Would you like to recieve marketing emails from us with rewards and special offers?<br><input class = "form-radio" type="radio" value="marketing">
<br>
<br><input type="submit" class="submitBtn" style="margin-top:0;">
<br>
<br>
</form>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-popout-bg">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 class="modalTitle">NEW YEAR'S OFFER:</h1>
        <h2 class="modalSubTitle">10% OFF FOR LOCAL BUSINESES</h2>
        <h2 class="modalSubTitle">CODE: <span class="code">NEWYEAR2019</span></h2>
        <button type="button" class="btn btn-primary myBtn" onclick=window.location.href="./services.php">Find out More...</button>

      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<?
include('footer.php');
?>





<div id="cookieConsent">
    <div id="closeCookieConsent">x</div>
    This website is using cookies. <a href="#" target="_blank">More info</a>. <a class="cookieConsentOK">That's Fine</a>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>


$(document).ready(function(){
    setTimeout(function () {
        $("#cookieConsent").fadeIn(200);
     }, 4000);
    $("#closeCookieConsent, .cookieConsentOK").click(function() {
        $("#cookieConsent").fadeOut(200);
    });
});

setTimeout(function isVisible(){
    $('#basicExampleModal').modal('show');
}, 8000);
</script>



</body>



</html>
>>>>>>> initial commit
