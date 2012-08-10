
<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>

<?php  include_once ('db1.php');      ?>

<?php
 /*  $id=$_GET['id[]'];
//your delete query here. if delete query success
if ($id != null) {

for($i=0;$i<count($id);$i++){
$result=mysql_query("DELETE from visitors_table WHERE user_id='$id[$i]'") or die(mysql_error());
}

}
echo 1;

//if delete query failed echo something else but 1;     */



$checkbox=$_GET['check'];

if(!empty($checkbox)){
for($i=0;$i<count($checkbox);$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM visitors_table WHERE user_id='$del_id'";
$result = mysql_query($sql);

}

// if successful redirect to sucess.php



}
echo 1;

?>

