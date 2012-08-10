    <?php

     include_once ('db1.php');
     $id = $_POST['Idindicator'];

    $sector = $_POST['myindicator'];
    $subsector = $_POST['subsectorsin'];
    $classes = $_POST['statein'];
    $indicator = $_POST['cityin'];
    $t_period = $_POST['time_periodin'];
    $a_id = $_POST['area_idin'];
    $a_name = $_POST['area_namein'];
    $d_value = $_POST['data_valuein'];
    $unit = $_POST['unit1in'];
    $s_group = $_POST['sub_groupin'];
    $source = $_POST['source1in'];

    echo $sector;
    echo $subsector;
    echo $classes;
    if($sector=="Select Sectors" || $subsector=="Sub-Sector"|| $t_period=="")
    {
       echo "Please input empty field/s!" ;
    }


    else
    {
    //send output back to page.
    echo "Hello $source $unit $s_group  $d_value  $subsector $classes   $indicator $t_period $a_id $a_name. Todays date is .";
   mysql_query("update tbl_data set Sectors='$sector',SubSectors='$subsector',Classes='$classes',Indicator=' $indicator ',Time_Period='$t_period ',Area_ID='$a_id',Area_Name='$a_name',Data_Value='$d_value',Unit='$unit',Subgroup='$s_group',Source='$source' where Id='".$id."'  ") or die(mysql_error());
    }


    ?>