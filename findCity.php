<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<?php
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://php-ajax-guru.blogspot.com
?>

<?php $countryId=$_GET['country'];

$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('rdi_final');
$query="SELECT distinct indicator FROM tbl_newdata WHERE classes='".$countryId."' ";
$result=mysql_query($query);

?>   <p>
 <label for="password">Indicator</label>
<select name="city" id="city">
<option>Select Indicator</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['indicator'];?>"><?php echo $row['indicator'] ;?></option>
<?php } ?>
</select>  </p>
