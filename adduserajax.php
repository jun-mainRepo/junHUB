

<style type="text/css">

h1.prompt{

color:red;
background-color:yellow;

}


</style>


<?php

    include_once ('db1.php');
    $uname= $_POST['uname'];
    $pass = sha1($_POST['pass']);
    $fname= $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['middle'];
    $division = $_POST['division'];
    $position= $_POST['position'];



    if($uname=="" || $pass=="" || $fname=="" || $lname=="" || $mname=="" )
     {

     echo "<h1 class=prompt>Please do not empty field/s!!!</h1>";
     }

     else
     {
        echo "<h1 class=prompt>User Information Successfully Registered!</h1>";
        $query=mysql_query("insert into user_info values('','$uname','$pass','$fname','$lname','$mname',' $division',' $position' )") or die(mysql_error());
     }
    ?>