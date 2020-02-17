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
    require $_SERVER['DOCUMENT_ROOT'].'/blog/backend/wp-load.php';
include('navigation.php');
$nav_classes = ["div"=>["nav", "home"], #Key: <tag name>: <list of classes>
                "li"=>["menuitem"]];
display_menu($navigation_elements, $filename, $nav_classes);
?>

    <div class="formHeader" style="background:url(images/blog.jpg);background-size:100%;background-position:50% 70%;background-repeat:no-repeat;">
			<div class="formOverlay">
			<h1 class="headingText">
				Blog
			</h1>
		</div>
		</div>

<div class="container blog">
  <div class="row">
    <?php
    //instantiate a WP_Query and get the latest 10 posts
    $wp_query = new \WP_Query();
    $wp_query->query('showposts=10');

    //Iterate through the returned posts. The starts the WP "Loop"
    while ($wp_query->have_posts()) :
       $wp_query->the_post();
    ?>
    <div class="post col-md-4">
      <img src="<?php the_post_thumbnail_url("medium") ?>" class="thumbnail">
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    <?php the_excerpt(); ?>
    </div>
    <?php endwhile; ?>
<!-- Footer -->
</div></div>
<?
include('footer.php');
?>


</html>
