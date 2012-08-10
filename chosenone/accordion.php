<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


	<link href="css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="css/A_red.css" rel="stylesheet" type="text/css" />
  <title></title>
</head>

<body>
  <script src="acac1.js" type="text/javascript"></script><script>ac1init_doc('',0);</script>
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

            <div class="record round">

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

            </tbody>

            </table>


    </div>
    <br /><br />
<?php
	echo pagination($statement,$limit,$page);
?>

  </div>
</div>

<div id="footerPan">

</div>
</body>

</html>s