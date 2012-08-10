




<?php

function checkValues($value)
{
	 // Use this function on all those values where you want to check for both sql injection and cross site scripting
	 //Trim the value
	 $value = trim($value);

	// Stripslashes
	if (get_magic_quotes_gpc()) {
		$value = stripslashes($value);
	}

	 // Convert all &lt;, &gt; etc. to normal html and then strip these
	 $value = strtr($value,array_flip(get_html_translation_table(HTML_ENTITIES)));

	 // Strip HTML Tags
	 $value = strip_tags($value);

	// Quote the value
	$value = mysql_real_escape_string($value);
	return $value;

}

include("db1.php");

$rec = checkValues($_REQUEST['val']);


      echo "hellllooooo" ;
//get table contents










?>




	<div class="each_rec">

         <?php echo "hello";?>

   </div>




