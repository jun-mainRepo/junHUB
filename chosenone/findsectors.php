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
$query="SELECT  Distinct SubSectors FROM tbl_data WHERE Sectors='".$country."'";
$result=mysql_query($query);

?>  <p>
 <label for="password">Sub-Sectors</label>
<select name="subsectors" id="subsectors" onchange="getState1(this.value)">
<option>Select Sub-Sectors</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['SubSectors'];?>"><?php echo $row['SubSectors'] ;?></option>
<?php } ?>
</select> </p>
