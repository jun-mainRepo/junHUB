    <?php

     include_once ('db1.php');



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




 if($t_period== "" || $indicator=="" || $a_id=="" || $a_name=="" || $d_value=="" || $unit=="" || $s_group=="" || $source=="")
    {
       echo "Please input empty field/s!" ;
    }

    else
    {
    //send output back to page.
    echo "Hello $source $unit $s_group  $d_value $sector $subsector $classes   $indicator $t_period $a_id $a_name. Todays date is .";
    $query=mysql_query("insert into tbl_data values('','$sector','$subsector','$classes','$t_period',' $a_id ',' $a_name','$indicator',' $d_value',' $unit','$s_group','$source' )") or die(mysql_error());
    }

    ?>