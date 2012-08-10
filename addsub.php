    <?php

     include_once ('db1.php');
    $sector = $_POST['countrysub'];
    $subsector = $_POST['subsectorssub'];
    $classes = $_POST['statesub'];
    $indicator = $_POST['citysub'];



    if($sector=="Select Sectors" || $subsector=="Sub-Sector")
    {
       echo "Please input empty field/s!" ;
    }


    else
    {
    //send output back to page.
   
    $query=mysql_query("insert into tbl_newdata values('$sector','$subsector','$classes','$indicator' )") or die(mysql_error());
    }
    ?>