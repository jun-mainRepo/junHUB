    <?php

     include_once ('db1.php');
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

    if($t_period=="" || $indicator=="" || $a_id=="" || $a_name=="" || $d_value=="" || $unit=="" || $s_group=="" || $source=="" || $classes==""  )
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