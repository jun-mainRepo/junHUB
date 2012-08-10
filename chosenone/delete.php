

<?php


$country=$_GET['q'];


$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('rdi_final');


mysql_query("delete from tbl_data where Id='".$country."'") or die(mysql_error());

echo "data deleted";

?>