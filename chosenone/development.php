
 <?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>
<?php


/**
 * @link: http://www.Awcore.com/dev
 */
    //connect to the database
    include_once ('db1.php');
    //get the function
    include_once ('function.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 20;
    	$startpoint = ($page * $limit) - $limit;

        //to make pagination
         $statement = "`tbl_data` where `Sectors` = 'Development Administration'";

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


#customers tr:hover {background-color:#FF6666; background: -webkit-gradient(linear, left top, left bottom, from(#00FFFF), to(#FFFFFF));}

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




<div id="logo"><p class="text"><a class="neda_text" href="index.php"><img src="images/neda_logo.png" title="Neda Regional Development Indicator" alt="Neda Regional Development Indicator" width="90" height="90" border="0"/>Neda Regional Development Indicator</a></p></div>
<div id="topPan">
	<ul>
		<li><a href="index.php">Home</a></li>
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
<div><table cellpadding="0" cellspacing="0"><TR VALIGN="MIDDLE"><TD style="background-image: url(http://beemp3.com/player/corner-topleft2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: bottom;"></td><TD style="background-image: url(http://beemp3.com/player/bkgnd-top2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: middle;"> Jamie Grace.mp3</td><TD style="background-image: url(http://beemp3.com/player/corner-topright2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: bottom;"></td></TR><TR VALIGN="MIDDLE"><TD WIDTH="16" style="width: 16px;background-image:url(http://beemp3.com/player/left-ltrow2.gif);"/> </TD><TD style="background-image: url(http://beemp3.com/player/light2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 11px;vertical-align: bottom;"><audio autoplay loop controls="controls">
  <source src="hold_me.ogg" type="audio/ogg" />
  <source src="hold_me.mp3" type="audio/mp3" />
  Your browser does not support the audio element.
</audio> <img style="padding:0;border:0;vertical-align:bottom" src="http://beemp3.com/player/logo_small.gif"/> </td><TD WIDTH="16" style="width: 16px;background-image:url(http://beemp3.com/player/right-ltrow2.gif);"/></TD></TR><TR><TD WIDTH="16"><IMG style="padding:0;border:0;" SRC="http://beemp3.com/player/corner-bottomleft2.gif"></TD><TD style="background-image: url(http://beemp3.com/player/bkgnd-bottom2.gif);background-repeat: repeat-x;font-family: Arial, Helvetica, sans-serif;font-size: 11px;vertical-align: top;text-align: center;padding:0;border: 0;margin:0;">Found at <a href="http://beemp3.com/download.php?file=9162493&song=Get+Back+Up">bee mp3 search engine</a></TD><TD WIDTH="16"><IMG style="padding:0;border:0;" SRC="http://beemp3.com/player/corner-bottomright2.gif"></TD></TR></table></div>

            <div class="record">

        <?php
            //show records
            $query = mysql_query("SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");


        ?>
          <center>


           <h3><marquee scrollamount="20" bgcolor="">Regional  Development Indicator  for Development Administration</marquee> </h3>
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
            <td><input type="submit" value="Delete" name="delede" id="delede"></td>
            </tr>
            </form>

            </tbody>

            </table>      </center>


    </div>
    <br /><br />
<?php
	echo pagination($statement,$limit,$page);
?>
  <a class="csv" href="export_development.php" >Export Dev't(RDI)Excel File</a>
  </div>
</div>

<div id="footerPan">

</div>
</body>
</html>
