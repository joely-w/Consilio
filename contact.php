<!DOCTYPE html>
<html>

<head>
  <link href="style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Contact Us!</title>
</head>

<body>
  <?php
include('navigation.php');
$nav_classes = ["div"=>["nav", "home"], #Key: <tag name>: <list of classes>
              "li"=>["menuitem"]];
display_menu($navigation_elements, $filename, $nav_classes);
?>
  <div class="formHeader" style="background:url(./images/contactus.jpg); background-position: 50%;background-size:100%;background-repeat:no-repeat;">
    <div class="formOverlay">
    <h1 class="headingText">
      Contact Us!
    </h1>
  </div>
  </div>

<form action="process.php" type="POST" class="contactForm">

Name:<br>
<input class="textItem" type="text" name="name"><br>
Email Address<br>
<input class="textItem" type="email" name="email"><br>
Phone Number<br>
<input class="textItem" type="phone" name="phone"><br>
Message<br>
<textarea class="textItem" name="message" rows="5" cols="80"></textarea><br><br>

How did you hear about us?:<br>
<select name="exposure" class="dropdown">
  <option value="poster">Poster or Billboard</option>
  <option value="phone">Phone Call</option>
  <option value="flyer">Flyer/Leaflet</option>
  <option value="reccomendation">Reccomendation</option>
  <option value="other">Other</option>
</select><br><br>

Preferred method of Communication:<br>
<select name="communication" class="dropdown">
<option class="dropDownItem" value="email">Email</option>
<option class="dropDownItem" value="phone">Phone Call</option>
<option class="dropDownItem" value="sms">SMS Message</option>
</select><br><br>


Would you like to recieve marketing emails from us with rewards and special offers?<input class = "form-radio" type="radio" value="marketing">
<br>
<br><input type="submit" class="submitBtn">
<br>
<br>
</form>
<?
include('footer.php');
?>

</body>

</html>
