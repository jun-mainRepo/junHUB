<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>

<?php
/**
 * The logout file
 * destroys the session
 * expires the cookie
 * redirects to login.php
  include_once ('db1.php');
 */

  include_once ('db1.php');  
session_start();
$query1=mysql_query("insert into visitors_table values('','".$_SESSION['log_fname']."','".$_SESSION['log_lname']."','".$_SESSION['log_position']."','".$_SESSION['log_division']."','".$_SESSION['log_username']."','Logout',now() )") or die(mysql_error());
session_destroy();
setcookie('username', '', time() - 1*24*60*60);
setcookie('password', '', time() - 1*24*60*60);
header("location: login.php");

?>