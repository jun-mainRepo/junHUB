    <?php

     include_once ('db1.php');
     $id = $_POST['u_id'];
    $uname= $_POST['uname'];
    $pass = sha1($_POST['pass']);
    $fname= $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mi'];
    $ac_level = $_POST['ac_level'];
    $email = $_POST['email'];
    $division = $_POST['division'];
    $position= $_POST['position'];



    echo "User Information Successfully updated!";

    mysql_query("update user_info set username='$uname',password='$pass',fname='$fname',lname=' $lname ',mname='$mname ',access_level='$ac_level',email='$email',division='$division',position='$position' where user_id='".$id."'  ") or die(mysql_error());



    ?>