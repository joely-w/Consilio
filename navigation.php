<?php

$filename = basename($_SERVER['PHP_SELF']); #Filename of page calling script
$navigation_elements = ['Home' => 'index.php','About Us' => 'about.php', 'Services' => 'services.php', 'Portfolio' => 'portfolio.php', 'Contact Us' => 'contact.php']; #Key: "Page Name"=> "filename"
$navigation_length = sizeof($navigation_elements); #Number of pages on navigation menu

function display_menu($index, $active, $classes) #Arguments: Active filename, array of classes to apply to div
{
    $class = '';
		foreach($classes as $selector=>$style){ #Create class variable for each tag in array. Key: class_<tag name>
			${"class_".$selector} = '';
			foreach($style as $item){
				${"class_".$selector} .=$item . " "; #Insert all classes into tag class variable
			}
		}
		echo'<div class="'.$class_div.'"><ul>'; #Initiate navigation
		$menu_element = '<li class="%1$s"><a href="%2$s">%3$s</a></li>'; #Generate template for each menu element

		foreach($index as $name=>$filename){
			printf($menu_element,$class_li,$filename,$name); #Format template string with values for each page
		}
		echo'</ul></div>'; #Close navigation
		}
?>
