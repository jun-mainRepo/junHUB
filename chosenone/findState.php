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
$query="SELECT Distinct Classes FROM tbl_data WHERE SubSectors='".$country."'";
$result=mysql_query($query);

?> <p>
 <label for="password">Classes</label>
<select name="state" id="state" onchange="getCity(this.value)">
<option>Select Classes</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['Classes'];?>"><?php echo $row['Classes'] ;?></option>
<?php } ?>
</select> </p>
