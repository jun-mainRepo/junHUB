    <?php

     include_once ('db1.php');
    $sector = $_POST['countrysub'];
    $subsector = $_POST['subsectorssub'];
    $classes = $_POST['statesub'];
    $indicator = $_POST['citysub'];
    $t_period = $_POST['time_periodsub'];
    $a_id = $_POST['area_idsub'];
    $a_name = $_POST['area_namesub'];
    $d_value = $_POST['data_valuesub'];
    $unit = $_POST['unit1sub'];
    $s_group = $_POST['sub_groupsub'];
    $source = $_POST['source1sub'];

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
    $query=mysql_query("insert into tbl_data values('','$sector','$subsector','$classes','$t_period',' $a_id ',' $a_name','$indicator',' $d_value',' $unit','$s_group','$source' )") or die(mysql_error());
    }
    ?>