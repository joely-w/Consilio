<!DOCTYPE html>
<html>
   <head>
      <link href="style.css" rel="stylesheet">
      <title>Consilio Design</title>
   </head>
   <body>
      <?php
         include 'navigation.php';
         $nav_classes = ['div' => ['nav', 'home'], #Key: <tag name>: <list of classes>
                         'li' => ['menuitem']];
         display_menu($navigation_elements, $filename, $nav_classes);
         ?>
      <div class="formHeader" id="header" style="background:url(./images/getaquote.jpg);height:100vh !important;background-size:100%;background-position:40% 70%;">
         <div class="formOverlay">
            <h1 style="margin-top:20%; font-size:4em !important;" class="headingText">
               Get a Quote
            </h1>
         </div>
         <br>
         <a style="top:55% !important;" onclick="document.getElementById('header').remove();document.getElementById('pricediag').style.display = 'inline-block';" class="cta" id="one-off" href="#question1">Let's go!</a>

      </div>
      <div class="section">
         <form class="quote" method="post" action="">
            <div class="question" id="question1">
               <span>How many pages do you need?</span><br>
               <label><input type="radio" onchange="updatePrice(this)" name="pages" value="5">5 pages</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="pages" value="10">10 pages</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="pages" value="15">15 pages</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="pages" value="20">20+ pages</label><br>
               <br><a class="cta-black" href="#">Back</a><a class="cta-black" href="#question2">Next</a>
            </div>
            <div class="question" id="question2">
               <span>How should the user login?:</span><br>
               <label><input type="radio" onchange="updatePrice(this)" name="login" value="email">Email</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="login" value="social">Social</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="login" value="none"> They shouldn't</label><br>
               <br><a class="cta-black" href="#question1">Back</a><a class="cta-black" href="#question3">Next</a>
            </div>
            <div class="question" id="question3">
               <span>Blog?</span><br>
               <label><input type="radio" onchange="updatePrice(this)" name="cms" value="simple">Simple One-page blog</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="cms" value="advanced">Advanced blog</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="cms" value="none">None</label><br>
               <br><a class="cta-black" href="#question2">Back</a><a class="cta-black" href="#question4">Next</a>
            </div>
            <div class="question" id="question4">
              <span> Have you got content written?</span><br>
               <label><input type="radio" onchange="updatePrice(this)" name="content" value="none">Already written</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="content" value="some">Need some</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="content" value="all"> Need all</label><br>
               <br><a class="cta-black" href="#question3">Back</a><a class="cta-black" href="#question5">Next</a>
            </div>
            <div class="question" id="question5">
              <span> Do you need any graphics?</span><br>
               <label><input type="radio" onchange="updatePrice(this)" name="graphics" value="logo">Just a logo </label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="graphics" value="full">Full graphics package</label><br>
               <label><input type="radio" onchange="updatePrice(this)" name="graphics" value="none"> None</label><br>
               <br><a class="cta-black" href="#question4">Back</a><a class="cta-black" href="#question">Buy it!</a>
            </div>
         </form>
         <div style="display: none;" id="pricediag" class="pricediag">
            <h1 id="price">£0</h1>
         </div>
      </div>
      <?
      include('footer.php');
      ?>

   </body>
   <script>
      prices = {login:{email:3,social:3,none:0},cms:{simple:2,advanced:4, none:0}, content:{none:0,some:2,all:5}, graphics:{logo:5, full:10, none:0}, pages:{5:8,10:13,15:15, 20:25}};
      total = 0;
      hourly_rate = 17;
      inprices = {}
      function ammendPrice(value){
        document.getElementById("price").innerHTML = "£" + 25*value
      }
      function updatePrice(element){
        if (element.name in inprices){
          total -= inprices[element.name];
          inprices[element.name] = prices[element.name][element.value];
          total += prices[element.name][element.value];
        }
        else{
        total += prices[element.name][element.value];
        inprices[element.name] =prices[element.name][element.value];
        }
        ammendPrice(total);
      }

   </script>
</html>
