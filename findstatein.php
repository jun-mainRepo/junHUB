<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<?php

?>

<?php $country=$_GET['country'];
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('rdi_final');
$query="SELECT Distinct classes FROM tbl_newdata WHERE subsector='".$country."'";
$result=mysql_query($query);

?> <p>
 <label for="password">Classes</label>
<select name="statein" id="statein" onchange="getCity(this.value)">
<option>Select Classesin</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['classes'];?>"><?php echo $row['classes'] ;?></option>
<?php } ?>
</select> </p>
