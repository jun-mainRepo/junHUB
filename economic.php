
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
    	$limit = 5;
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
	<link href="css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="css/A_red.css" rel="stylesheet" type="text/css" />
    <link href="footer_index.css" rel="stylesheet" type="text/css" />  




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
font-size:20px;


}

</style>
</head>

<body>




<div id="topPan"><a href="index.php"><img src="" title="Neda Regional Development Indicator" alt="Neda Regional Development Indicator" width="204" height="57" border="0"/></a>
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
           <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		</div>
        <div id="possib">
			<h2>Sub-Sectors</h2>
        <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		</div>
		<div id="solution">
			<h2>Classes</h2>
          <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		</div>

        	<div id="indicator">
			<h2>Indicator</h2>
           <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		</div>

        <div id="timeperiod">
			<h2>Time-Period</h2>
		   <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		    </div>

        	<div id="areaname">
			<h2>Area-Name</h2>
		   <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		    </div>



            <div id="areaid">
			<h2>Area-ID</h2>
		    <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		    </div>

            <div id="unit">
			<h2>Unit</h2>
		   <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		    </div>

             <div id="subgroup">
			<h2>Sub-Group</h2>
		   <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		    </div>

             <div id="source">
			<h2>Source</h2>
		  <a href="javascript:void(0);" onclick="PopupCenter('rdi.php', 'myPop1',400,400);"><p>Click Description</p></a>
		    </div>



  </div>


</div>

<div id="bodyPan">


  <div id="rightPan">
    <script src="acac1.js" type="text/javascript"></script><script>ac1init_doc('',0);</script>

            <div class="record">

        <?php
            //show records
            $query = mysql_query("SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");


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


            <?php } ?>
             </tr>
            <tr><td><input type="submit" value="Edit" name="editecon" id="editecon"></td>
            <td><input type="submit" value="Delete" name="delecon" id="delecon"></td>
            </tr>
                </form>
            </tbody>

            </table>


    </div>
    <br /><br />
<?php
	echo pagination($statement,$limit,$page);
?>
   <div id="footermainPan">
  <div id="footerPan">
  	<ul>
  	<li><a href="#">Home</a>| </li>
  	<li><a href="#">About us</a> | </li>
  	<li><a href="#">Network</a>| </li>
  	<li><a href="#">Submission</a> | </li>
  	<li><a href="#">Archives</a> |</li>
	<li><a href="#">Finance</a> |</li>
	<li><a href="#">Contact</a></li>
	</ul>
	<p class="copyright">©gconsultant all right reaserved</p>

	<div id="footerPanhtml"><a href="http://validator.w3.org/check?uri=referer" target="_blank">html</a></div>
    <div id="footerPancss"><a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">css</a></div>
	<ul class="templateworld">
  	<li>Design By:</li>
	<li><a href="http://www.templateworld.com" target="_blank">Template World</a></li>
  </ul>
  </div>
</div>
  </div>
</div>


</body>
</html>
