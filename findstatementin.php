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
$query="SELECT  Distinct subsector FROM tbl_newdata WHERE sector='".$country."'";
$result=mysql_query($query);

?>  <p>
 <label for="password">Sub-Sectors</label>
<select name="subsectorsin" id="subsectorsin" onchange="getStatein(this.value)">
<option>Select Sub-Sectors</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['subsector'];?>"><?php echo $row['subsector'] ;?></option>
<?php } ?>
</select> </p>
