    <?php

     include_once ('db1.php');

    $id = $_POST['u_id'];
    $uname= $_POST['uname'];

    $fname= $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mi'];
    $division = $_POST['division'];
    $position= $_POST['position'];
    $pass1 = $_POST['pass'];
    $query=mysql_query("Select * from user_info where user_id='".$id."' ");
    $row=mysql_fetch_array($query);
    $password=$row['password'];

    if($password==$pass1)
    {
     $pass = $_POST['pass'];

    }
    else
    {

     $pass = sha1($_POST['pass']);
    }









    mysql_query("update user_info set username='$uname',password='$pass',fname='$fname',lname=' $lname ',mname='$mname ',division='$division',position='$position' where user_id='".$id."'  ") or die(mysql_error());



    ?>