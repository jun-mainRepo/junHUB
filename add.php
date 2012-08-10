  <?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>


<?php

     include_once ('db1.php');
    $sector = $_POST['country'];
    $subsector = $_POST['subsectors'];
    $classes = $_POST['state'];
    $indicator = $_POST['city'];
    $t_period = $_POST['time_period'];
    $a_id = $_POST['area_id'];
    $a_name = $_POST['area_name'];
    $d_value = $_POST['data_value'];
    $unit = $_POST['unit1'];
    $s_group = $_POST['sub_group'];
    $source = $_POST['source1'];
      echo "para ni sa add lang";

    if($sector=="Select Sectors" || $subsector=="Sub-Sector"|| $t_period=="")
    {
       echo "Please input empty field/s!" ;

    }


    else
    {
    //send output back to page.
    echo $_SESSION['log_username'];

    echo "Hello $source $unit $s_group  $d_value  $subsector $classes   $indicator $t_period $a_id $a_name. Todays date is .";
    $query=mysql_query("insert into tbl_data values('','$sector','$subsector','$classes','$t_period',' $a_id ',' $a_name','$indicator',' $d_value',' $unit','$s_group','$source' )") or die(mysql_error());
    $last_id=mysql_insert_id();

    $query1=mysql_query("insert into visitors_table values('','".$_SESSION['log_fname']."','".$_SESSION['log_lname']."','".$_SESSION['log_position']."','".$_SESSION['log_division']."','".$_SESSION['log_username']."','Adding Record-$last_id',now() )") or die(mysql_error());


 }
    ?>