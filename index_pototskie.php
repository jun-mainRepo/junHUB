
 <?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>
<?php

  include_once ('db1.php');
$query=mysql_query("SELECT `position` FROM `user_info` WHERE `username` = '" .$_SESSION['admin_login']. "'") or die(mysql_error()) ;
        //get the username and password
 $row=mysql_fetch_array($query);
 $pos=$row['position'];


 $_SESSION['log_position'] = $pos;

/**
 * @link: http://www.Awcore.com/dev
 */
    //connect to the database

    //get the function
    include_once ('function.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 20;
    	$startpoint = ($page * $limit) - $limit;

        //to make pagination
         $statement = "`tbl_data` where `Sectors` = 'Economic'";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Neda Regional Development Indicator</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="css/pagination.css" rel="stylesheet" type="text/css" />
<link href="css/A_red.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="sliding.form.js"></script>






    <script>
function PopupCenter(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>

 <style type="text/css">

#customers
{

position:relative;
font-family:Sylfaen;
width:98%;
height:auto;
border-collapse:collapse;
margin-top: 60px;

}


#customers td, #customers th
{
font-size:10px;
border:1px solid #FF6633;


}
#customers th
{
font-size:12px;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background: -webkit-gradient(linear, left top, left bottom, from(#0086B2), to(#00BFFF));
color:#FFFFFF;
text-align: center;

}

#customers td{

font-family:Courier New;
font-weight:BOLD;
font-size:10px;
text-align: center;

}


#customers tr:hover {background-color:#FF6666;background: -webkit-gradient(linear, left top, left bottom, from(#00FFFF), to(#FFFFFF)); }

 #upperbody{


position:relative;
width:800px;
height:160px;
background-color:#F00000;

border:1px solid gray;
border-top-left-radius:2em;
border-top-right-radius:2em;
border-bottom-right-radius:2em;
border-bottom-left-radius:2em;



}

input.a{

       margin-top:30px;
       height:30px;
       width: 400px;
       margin-left:100px;
  }

input.b{

       margin-top:30px;
       height:40px;
       width: 200px;
       color:red;
       margin-left:10px;

  }

  p.text{

position:relative;
font-family:Courier New;
margin-left:-85px;
margin-top:75px;
font-weight:BOLD;
left:250px;


}



</style>
</head>

<body>

   <div id="whole">

<div id="logo"><p class="text"><a class="neda_text" href="index.php"><img src="images/neda_logo.png" title="Neda Regional Development Indicator" alt="Neda Regional Development Indicator" width="90" height="90" border="0"/>Neda Regional Development Indicator</a></p></div>
<div id="topPan">
	<ul>
		<li><a href="index.php"><img class="home" src="images/house.jpg" alt="" width="20" height="20"/></a></li>
		<li><a href="rdi.php">RDI</a></li>
		<li><a href="useraccounts.php">User Accounts</a></li>
		<li><a href="searchpage.php">Search RDI</a></li>
		<li><a href="#" onclick="javascript:window.location.href='logout.php'">Log-Out</a></li>

	</ul>
</div>

<div id="headerPan">
  <div id="headerPanleft">
  	    <div id="ourblog">
			<h2>Sectors</h2>
           <a href="javascript:void(0);" onclick="PopupCenter('sectordes.html', 'myPop1',550,650);"><p>Click Description</p></a>
		</div>
        <div id="possib">
			<h2>Sub-Sectors</h2>
        <a href="javascript:void(0);" onclick="PopupCenter('subsectordes.htm', 'myPop1',550,650);"><p>Click Description</p></a>
		</div>
		<div id="solution">
			<h2>Classes</h2>
          <a href="javascript:void(0);" onclick="PopupCenter('classdes.htm', 'myPop1',550,650);"><p>Click Description</p></a>
		</div>

        	<div id="indicator">
			<h2>Indicator</h2>
           <a href="javascript:void(0);" onclick="PopupCenter('indicator.htm', 'myPop1',550,650);"><p>Click Description</p></a>
		</div>

        <div id="timeperiod">
			<h2>Time-Period</h2>
		   <a href="javascript:void(0);" onclick="PopupCenter('time_period.htm', 'myPop1',550,650);"><p>Click Description</p></a>
		    </div>

        	<div id="areaname">
			<h2>Area-Name</h2>
		   <a href="javascript:void(0);" onclick="PopupCenter('area_name.htm', 'myPop1',550,650);"><p>Click Description</p></a>
		    </div>



            <div id="areaid">
			<h2>Area-ID</h2>
		    <a href="javascript:void(0);" onclick="PopupCenter('area_id.htm', 'myPop1',550,650);"><p>Click Description</p></a>
		    </div>

            <div id="unit">
			<h2>Unit</h2>
		   <a href="javascript:void(0);" onclick="PopupCenter('unit.htm', 'myPop1',550,650);"><p>Click Description</p></a>
		    </div>

             <div id="subgroup">
			<h2>Sub-Group</h2>
		   <a href="javascript:void(0);" onclick="PopupCenter('subgroup.htm', 'myPop1',550,650);"><p>Click Description</p></a>
		    </div>

             <div id="source">
			<h2>Source</h2>
		  <a href="javascript:void(0);" onclick="PopupCenter('source.htm', 'myPop1',550,650);"><p>Click Description</p></a>
		    </div>



  </div>


</div>

<div id="bodyPan">

       <div id="gollum"><center><div id="apple"><script src="acac1.js" type="text/javascript"></script><script>ac1init_doc('',0);</script></div>  </center>  </div>
  <div id="rightPan">


            <div class="record">

        <?php
            //show records
            $query = mysql_query("SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");


        ?>
        <center>

         <h3><marquee scrollamount="20" bgcolor="">Regional  Development Indicator  for Economic Sector</marquee> </h3>
        <table id="customers">


            <thead>
            <tr class='alt'>

            <th scope="col"> Select</th>
            <th scope="col">Sectors</th>
            <th scope="col">Sub-Sectors</th>
            <th scope="col">Classes</th>
            <th scope="col">Time Period</th>
            <th scope="col">Area ID</th>
            <th scope="col">Area Name</th>
            <th scope="col">Indicator</th>
            <th scope="col">Data Value</th>
            <th scope="col">Unit</th>
            <th scope="col">Subgroup</th>
            <th scope="col">Source</th>


            </tr>
            </thead>

            <tbody>



             <form name="transaction" action="update.php" method="POST">

            <?php 	while ($row = mysql_fetch_assoc($query)) { ?>

            <tr class="alt">


            <td><input type=checkbox name=check  value="<?php echo $row['Id'];?>"></td>
            <td><?php echo $row['Sectors']; ?></td>
            <td><?php echo  $row['SubSectors']; ?></td>
            <td><?php echo  $row['Classes']; ?></td>
            <td><?php echo $row['Time_Period']; ?></td>
            <td><?php echo  $row['Area_ID']; ?></td>
            <td><?php echo  $row['Area_Name']; ?></td>

            <td><?php echo  $row['Indicator']; ?></td>
            <td><?php echo  $row['Data_Value']; ?></td>
            <td><?php echo $row['Unit']; ?></td>
            <td><?php echo  $row['Subgroup']; ?></td>
            <td><?php echo  $row['Source']; ?></td>
            <td><input type="submit" value="view" name="view" id="view"></td>


            <?php } ?>
            </tr>

            <tr><td><input type="submit" value="Edit" name="editecon" id="editecon"></td>

           <td><input type="submit" value="Delete" name="delecon" id="delecon" onclick="check()"></td>
            </tr>
             </form>
            </tbody>

            </table>    </center>


    </div>
    <br /><br />
<?php
	echo pagination($statement,$limit,$page);
?>

<a class="csv" href="export.php" >Export Economic(RDI)Excel File </a>

  </div>
</div>

<div id="footerPan">

</div>
</div>
</body>
</html>
