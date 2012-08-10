    <?php

     include_once ('db1.php');
    $sector = $_POST['countryc'];
    $subsector = $_POST['subsectorsc'];
    $classes = $_POST['statec'];
    $indicator = $_POST['cityc'];


    if($indicator=="" || $classes==""  )
    {
       echo "Please input empty field/s!" ;
    }

    else
    {
    //send output back to page.
    echo "Hello $subsector $classes   $indicator . Todays date is .";
    $query=mysql_query("insert into tbl_newdata values('$sector','$subsector','$classes','$indicator' )") or die(mysql_error());
    }
    ?>