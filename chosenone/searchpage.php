
 <?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
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
width:100%;
border-collapse:collapse;

margin-top: 60px;
}
#customers td, #customers th
{
font-size:10px;
border:1px solid #EEEEEE;
padding:3px 7px 2px 7px;
}
#customers th
{
font-size:.80em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#444444;
color:#FFFFFF;
}
#customers tr.alt td
{
color:#222222;
background-color:#DDDDDD;
}
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




  #logo{

position:relative;
margin-left:50px;


}

#logo img{

position:fixed;
margin-left:-150px;
top:10px;


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
		<li><a href="#">Search RDI</a></li>
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
<div id="audio"><table cellpadding="0" cellspacing="0"><TR VALIGN="MIDDLE"><TD style="background-image: url(http://beemp3.com/player/corner-topleft2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: bottom;"></td><TD style="background-image: url(http://beemp3.com/player/bkgnd-top2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: middle;"> Jamie Grace.mp3</td><TD style="background-image: url(http://beemp3.com/player/corner-topright2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: bottom;"></td></TR><TR VALIGN="MIDDLE"><TD WIDTH="16" style="width: 16px;background-image:url(http://beemp3.com/player/left-ltrow2.gif);"/> </TD><TD style="background-image: url(http://beemp3.com/player/light2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 11px;vertical-align: bottom;"><audio autoplay loop controls="controls">
  <source src="hold_me.ogg" type="audio/ogg" />
  <source src="hold_me.mp3" type="audio/mp3" />
  Your browser does not support the audio element.
</audio> <img style="padding:0;border:0;vertical-align:bottom" src="http://beemp3.com/player/logo_small.gif"/> </td><TD WIDTH="16" style="width: 16px;background-image:url(http://beemp3.com/player/right-ltrow2.gif);"/></TD></TR><TR><TD WIDTH="16"><IMG style="padding:0;border:0;" SRC="http://beemp3.com/player/corner-bottomleft2.gif"></TD><TD style="background-image: url(http://beemp3.com/player/bkgnd-bottom2.gif);background-repeat: repeat-x;font-family: Arial, Helvetica, sans-serif;font-size: 11px;vertical-align: top;text-align: center;padding:0;border: 0;margin:0;">Found at <a href="http://beemp3.com/download.php?file=9162493&song=Get+Back+Up">bee mp3 search engine</a></TD><TD WIDTH="16"><IMG style="padding:0;border:0;" SRC="http://beemp3.com/player/corner-bottomright2.gif"></TD></TR></table></div>

  <div><table cellpadding="0" cellspacing="0"><TR VALIGN="MIDDLE"><TD style="background-image: url(http://beemp3.com/player/corner-topleft2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: bottom;"></td><TD style="background-image: url(http://beemp3.com/player/bkgnd-top2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: middle;"></td><TD style="background-image: url(http://beemp3.com/player/corner-topright2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: bottom;"></td></TR><TR VALIGN="MIDDLE"><TD WIDTH="16" style="width: 16px;background-image:url(http://beemp3.com/player/left-ltrow2.gif);"/> </TD><TD style="background-image: url(http://beemp3.com/player/light2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 11px;vertical-align: bottom;"><form name="search" action="searchpage.php" method="get">
              <h4 class="search_txt">SEARCH A KEYWORD:</h4>  <input type="text" value="" maxlength="100" name="searchBox"  class="a">
                 <input type="submit" value="GO" maxlength="100" name="searchbutton" class="b">
                 </form> <img style="padding:0;border:0;vertical-align:bottom" src="http://beemp3.com/player/logo_small.gif"/> </td><TD WIDTH="16" style="width: 16px;background-image:url(http://beemp3.com/player/right-ltrow2.gif);"/></TD></TR><TR><TD WIDTH="16"><IMG style="padding:0;border:0;" SRC="http://beemp3.com/player/corner-bottomleft2.gif"></TD><TD style="background-image: url(http://beemp3.com/player/bkgnd-bottom2.gif);background-repeat: repeat-x;font-family: Arial, Helvetica, sans-serif;font-size: 11px;vertical-align: top;text-align: center;padding:0;border: 0;margin:0;"> <a href="http://beemp3.com/download.php?file=11379287&song=hold+me+featuring+tobymac"></a></TD><TD WIDTH="16"><IMG style="padding:0;border:0;" SRC="http://beemp3.com/player/corner-bottomright2.gif"></TD></TR></table></div>



            <div class="record">
            <?php



      if(isset($_GET['searchbutton']))
      {




    //connect to the database
    include_once ('db1.php');
    //get the function
    include_once ('function.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 5;
    	$startpoint = ($page * $limit) - $limit;

           $query = mysql_query("SELECT * FROM tbl_data where Sectors Like '%".$_GET['searchBox']."%' OR SubSectors Like '%".$_GET['searchBox']."%' OR Classes Like '%".$_GET['searchBox']."%' OR Indicator Like '%".$_GET['searchBox']."%' OR Time_Period Like '".$_GET['searchBox']."' OR Data_Value Like '%".$_GET['searchBox']."%' OR Area_Name Like '%".$_GET['searchBox']."%' OR Unit Like '%".$_GET['searchBox']."%'  OR Subgroup Like '%".$_GET['searchBox']."%' OR Source Like '%".$_GET['searchBox']."%'");

           $numrows=mysql_num_rows($query);

           if($numrows<0)
           {


           ?>








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
              </form>
            </tbody>

            </table>


    </div>
    <br /><br />

<?php
}


  else{

   echo"No record found!";

   }



  }


?>

  </div>
</div>

<div id="footermainPan">
  <div id="footerPan">
  	<ul>
  	<li><a href="index.php">Home</a>| </li>
  	<li><a href="rdi.php">RDI</a> | </li>
  	<li><a href="useraccounts.php">User Account</a>| </li>
  	<li><a href="searchpage.php">Search RDI</a> | </li>
  	<li><a href="logout.php">Logout</a> |</li>
   </ul>

	<div id="footerPanhtml"><a href="#" target="_blank">html</a></div>
    <div id="footerPancss"><a href="#" target="_blank">css</a></div>
	<ul class="templateworld">
  	<li>Design By:</li>
	<li><a href="http://www.templateworld.com" target="_blank">Template World</a></li>
  </ul>
  </div>
</div>


</body>
</html>
