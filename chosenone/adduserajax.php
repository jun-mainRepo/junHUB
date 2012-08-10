    <?php

    include_once ('db1.php');
    $uname= $_POST['uname'];
    $pass = sha1($_POST['pass']);
    $fname= $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['middle'];
    $ac_level = $_POST['ac_level'];
    $email = $_POST['email'];
    $division = $_POST['division'];
    $position= $_POST['position'];



    if($uname=="" || $pass=="" || $fname=="" || $lname=="" || $mname=="" || $ac_level=="" || $email=="")
     {


     echo "please do not empty field/s!!!";
     }

     else
     {
        echo "User Information Successfully Registered!";
        $query=mysql_query("insert into user_info values('','$uname','$pass','$fname','$lname','$mname',' $ac_level','$email',' $division',' $position' )") or die(mysql_error());
     }
    ?>