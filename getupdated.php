
 <?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
  include_once ('db1.php');
    //get the function
?>





<?php

     include_once ('db1.php');
    $id = $_POST['Id'];
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



    $_SESSION['id'] = $id;

      echo "para ni sa add lang";

    if($sector=="Select Sectors" || $subsector=="Sub-Sector"|| $t_period=="")
    {
       echo "Please input empty field/s!" ;

    }


    else
    {
    //send output back to page.
    echo "Hello $source $unit $s_group  $d_value  $subsector $classes   $indicator $t_period $a_id $a_name. Todays date is .";



    mysql_query("update tbl_data set Sectors='$sector',SubSectors='$subsector',Classes='$classes',Indicator=' $indicator ',Time_Period='$t_period ',Area_ID='$a_id',Area_Name='$a_name',Data_Value='$d_value',Unit='$unit',Subgroup='$s_group',Source='$source' where Id='".$id."'  ") or die(mysql_error());
     $query1=mysql_query("insert into visitors_table values('','".$_SESSION['log_fname']."','".$_SESSION['log_lname']."','".$_SESSION['log_position']."','".$_SESSION['log_division']."','".$_SESSION['log_username']."','Edit Record-$id',now() )") or die(mysql_error());
    }
    ?>