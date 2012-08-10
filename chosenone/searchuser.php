    <?php

    include_once ('db1.php');
    $search= $_POST['search'];



    if($search=="")
     {


     echo "please do not empty field/s!!!";
     }

     else
     {


            //show records
            $query = mysql_query("SELECT * FROM user_info where fname='$search'");

            ?>
        <center>

         <h3><marquee scrollamount="20" bgcolor="">Regional  Development Indicator  for Economic Sector</marquee> </h3>
        <table id="customers">


            <thead>
            <tr>

           <th scope="col"> Select</th>
            <th scope="col">User Name</th>
            <th scope="col">Password</th>
            <th scope="col">First name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Middle Initial</th>
            <th scope="col">Access Level</th>
            <th scope="col">E-mail</th>
            <th scope="col">Division</th>
            <th scope="col">Position</th>


            </tr>
            </thead>

            <tbody>



             <form name="transaction" action="update_user.php" method="POST">

            <?php 	while ($row = mysql_fetch_assoc($query)) { ?>

            <tr>


            <td><input type=checkbox name=check  value="<?php echo $row['user_id'];?>"></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo  $row['password']; ?></td>
            <td><?php echo  $row['fname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo  $row['mname']; ?></td>
            <td><?php echo  $row['access_level']; ?></td>

            <td><?php echo  $row['email']; ?></td>
            <td><?php echo  $row['division']; ?></td>
            <td><?php echo $row['position']; ?></td>

            <td><input type="submit" value="view" name="view" id="view"></td>


            <?php } ?>
            </tr>

            <tr><td><input type="submit" value="Edit" name="editecon" id="editecon"></td>

           <td><input type="submit" value="Delete" name="delecon" id="delecon" onclick="check()"></td>
            </tr>
             </form>
            </tbody>

            </table>    </center>



     <?php  }
               ?>