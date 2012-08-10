    <?php

     include_once ('db1.php');
     $id = $_POST['Idclass'];
     $sector = $_POST['countryc'];
    $subsector = $_POST['subsectorsc'];
    $classes = $_POST['statec'];
    $indicator = $_POST['cityc'];
    $t_period = $_POST['time_periodc'];
    $a_id = $_POST['area_idc'];
    $a_name = $_POST['area_namec'];
    $d_value = $_POST['data_valuec'];
    $unit = $_POST['unit1c'];
    $s_group = $_POST['sub_groupc'];
    $source = $_POST['source1c'];

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