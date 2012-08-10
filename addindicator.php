    <?php

     include_once ('db1.php');



    $sector = $_POST['myindicator'];
    $subsector = $_POST['subsectorsin'];
    $classes = $_POST['statein'];
    $indicator = $_POST['cityin'];
   



 if( $indicator=="" || $sector=="" || $subsector=="")
    {
       echo "Please input empty field/s!" ;
    }

    else
    {
    //send output back to page.
    echo "Hello   $sector $subsector $classes   $indicator . Todays date is .";
    $query=mysql_query("insert into tbl_newdata values('$sector','$subsector','$classes','$indicator' )") or die(mysql_error());
    }

    ?>