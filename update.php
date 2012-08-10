

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
  include_once ('db1.php');
    //get the function
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Neda Regional Development Indicator</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="footer_index.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="sliding.form.js"></script>
<script type="text/javascript" src="js/addindicator.js"></script>
<script type="text/javascript" src="js/add.js"></script>
<script type="text/javascript" src="js/addclass.js"></script>
<script type="text/javascript" src="js/addsub.js"></script>


 <script>
function PopupCenter(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>

<script type="text/javascript" language="javascript">


function success()
{

alert("Record has been successfully edited!");

}
</script>



<script language="javascript" type="text/javascript">





</script>

<style type="text/css">

select
{


width:200px;
position:static;
background-color: #FFCCFF;

}


input.in
{


width:200px;
position:static;
background-color: #FFCCFF;

}

#customers
{

position:relative;
font-family:Sylfaen;
width:99%;
height:auto;
border-collapse:collapse;
margin-top: 60px;
margin-left:5px;

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
letter-spacing:2px;
font-size:25px;
left:260px;
top:-2px;


}




</style>


</head>

<body>
<div id="oras"><iframe src="http://free.timeanddate.com/clock/i36wa8pb/n2361/szw110/szh110/hoc000/hbw0/hfc09f/cf100/hnc07c/hwc000/facfff/fnu2/fdi76/mqcfff/mqs4/mql18/mqw4/mqd60/mhcfff/mhs4/mhl5/mhw4/mhd62/mmv0/hhcfff/hhs1/hhb10/hmcfff/hms1/hmb10/hscfff/hsw3" frameborder="0" width="112" height="112"></iframe>        </div>
<div id="logo"><p class="text"><a class="neda_text" href="index.php"><img src="images/neda_logo.png" title="Neda Regional Development Indicator" alt="Neda Regional Development Indicator" width="90" height="90" border="0"/><span class="r">C</span>araga <span class="r">R</span>egional <span class="r">D</span>atabase</a></p><span class="neda">NEDA</span></div>
<div id="topPan">
	<ul>
		<li><a href="index.php"> <input id="add2" name="add2" type="image" src="images/home.ico" title="Home" height="100" width="100" /></a></li>
		<li><a href="rdi.php"><input id="add7" name="add2" type="image" src="images/rdi_file.ico" title="RDI Form" height="80" width="100" /></a></li>
		<li><a href="useraccounts.php"><input id="add5" name="add2" type="image" src="images/users.ico" title="UserAccount" height="80" width="100" /></a></li>
		<li><a href="searchpage.php"><input id="add6" name="add2" type="image" src="images/search_data.ico" title="Search" height="80" width="100" /></a></li>
		<li><a href="#" onclick="javascript:window.location.href='logout.php'"><input id="add4" name="add2" type="image" src="images/exit.ico" title="Logout" height="70" width="80" /></a></li>

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
      <div id="content">


           <div id="wrapper">


             <?php

             if(isset($_POST['editecon']))
             {

                 if(!isset($_POST['check']))
                  {


                 echo "<script type='text/javascript' language='javascript'>


                 alert('Please choose a record to edit!');
                 window.location = 'http://localhost/chosenone/index.php';

                   </script>";

                }

                else
                {
                 $id=$_POST['check'];

                 }


               $query=mysql_query("select * from tbl_data where Id='$id'");
               $row=mysql_fetch_array($query);


                ?>

                <div id="steps">



                    <form  id="myform" action="javascript:getupdated(document.getElementById('myform'));" name="myform" method="post">
                        <fieldset class="step">
                            <legend>RDI General Edit Form</legend>
                             <input id="Id" name="Id" value="<?php echo $row['Id']; ?> " type="hidden"  />
                            <p>
                                <label for="username">Sectors</label>
                                <select name="country" id="country" onChange="getSectors(this.value)">
                                <option value="<?php echo $row['Sectors']; ?>"><?php echo $row['Sectors']; ?></option>
                                <option value="Development Administration">Development Administration</option>
                                <option value="Economic">Economic</option>
                                <option value="Infrastructure">Infrastructure</option>
                                <option value="Social">Social</option>
                               </select>
                            </p>
                             <div id="subdiv">
                            <p>
                                <label for="subsectors">Sub-Sectors</label>
                               <select name="subsectors" id="subsectors">
                                <option value="<?php echo $row['SubSectors']; ?>"><?php echo $row['SubSectors']; ?></option>
                                </select>
                            </p>
                            </div>
                            <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <select name="state" id="state">
                                <option value="<?php echo $row['Classes']; ?>"><?php echo $row['Classes']; ?></option>
                                </select>
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                <select name="city" id="city">
                             	 <option value="<?php echo $row['Indicator']; ?>"><?php echo $row['Indicator']; ?></option>
                                </select>

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input class="in" id="time_period" name="time_period" value="<?php echo $row['Time_Period']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input class="in" id="area_id" name="area_id" value="<?php echo $row['Area_ID']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input class="in" id="area_name" name="area_name" value="<?php echo $row['Area_Name']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input class="in" id="data_value" name="data_value" value="<?php echo $row['Data_Value']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input class="in" id="unit1" name="unit1" value="<?php echo $row['Unit']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input class="in" id="sub_group" name="sub_group" value="<?php echo $row['Subgroup']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input class="in" id="source1" name="source1" value="<?php echo $row['Source']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>
                               <p>


                               <input id="add" name="add" type="image" src="images/document_save.ico"  title="save" onclick="success()" height="60"  width="60" />&nbsp;&nbsp;&nbsp;&nbsp;
                               <input id="add" name="add" type="image" src="images/cancel.ico"   title="cancel" height="60"  width="60" />

                            </p>
                        </fieldset>

                        </form>

                         <form id="myform_sub" action="javascript:getsubupdated(document.getElementById('myform_sub'));" name="myform_sub" method="post">
                        <fieldset class="step">
                           <legend>RDI Edit Form for New Sub-Sectors</legend>
                             <input id="Idsub" name="Idsub" value="<?php echo $row['Id']; ?> " type="hidden"  />
                            <p>
                                <label for="username">Sectors</label>
                                <select name="countrysub" id="countrysub" onChange="getSectors(this.value)">
                                <option value="<?php echo $row['Sectors']; ?>"><?php echo $row['Sectors']; ?></option>
                                <option value="Development Administration">Development Administration</option>
                                <option value="Economic">Economic</option>
                                <option value="Infrastructure">Infrastructure</option>
                                <option value="Social">Social</option>

                               </select>
                            </p>
                             <div id="subdiv">
                            <p>
                                <label for="email">Sub-Sectors</label>
                                <input class="in" id="subsectorssub" name="subsectorssub" value="<?php echo $row['SubSectors']; ?> " type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>
                            <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <input class="in" id="statesub" name="statesub" value="<?php echo $row['Classes']; ?> " type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                 <input class="in" id="citysub" name="citysub" value="<?php echo $row['Indicator']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input class="in" id="time_periodsub" name="time_periodsub" value="<?php echo $row['Time_Period']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input class="in" id="area_idsub" name="area_idsub" value="<?php echo $row['Area_ID']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input class="in" id="area_namesub" name="area_namesub"  value="<?php echo $row['Area_Name']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input class="in" id="data_valuesub" name="data_valuesub" value="<?php echo $row['Data_Value']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input class="in" id="unit1sub" name="unit1sub" value="<?php echo $row['Unit']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input class="in" id="sub_groupsub" name="sub_groupsub" value="<?php echo $row['Subgroup']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input class="in" id="source1sub" name="source1sub" value="<?php echo $row['Source']; ?> " type="text" AUTOCOMPLETE=OFF />

                            </p>
                               <p>


                               <input id="add1" name="add1" type="image" src="images/document_save.ico"  title="save" onclick="success()" height="60"  width="60" />&nbsp;&nbsp;&nbsp;&nbsp;
                               <input id="add1" name="add1" type="image" src="images/cancel.ico"  title="cancel" height="60"  width="60" />

                            </p>
                        </fieldset>
                        </form>

                         <form id="myform_class" action="javascript:getclassupdated(document.getElementById('myform_class'));" name="myform_class" method="post">
                        <fieldset class="step">
                            <legend>RDI Edit Form for New Classes</legend>
                             <input id="Idclass" name="Idclass" value="<?php echo $row['Id']; ?> " type="hidden"  />
                            <p>
                                <label for="username">Sectors</label>
                                <select name="countryc" id="countryc" onChange="getme(this.value)">
                                <option value="<?php echo $row['Sectors']; ?>"><?php echo $row['Sectors']; ?></option>
                                <option value="Development Administration">Development Administration</option>
                                <option value="Economic">Economic</option>
                                <option value="Infrastructure">Infrastructure</option>
                                <option value="Social">Social</option>

                               </select>
                            </p>
                             <div id="subdivision">
                            <p>
                                <label for="email">Sub-Sectors</label>
                               <select name="subsectorsc" id="subsectorsc">
                                 <option value="<?php echo $row['SubSectors']; ?>"><?php echo $row['SubSectors']; ?></option>
                                </select>
                            </p>
                            </div>
                             <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <input class="in" id="statec" name="statec" value="<?php echo $row['Classes']; ?>" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                 <input class="in" id="cityc" name="cityc"  value="<?php echo $row['Indicator']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input class="in" id="time_periodc" name="time_periodc" value="<?php echo $row['Time_Period']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input class="in" id="area_idc" name="area_idc" value="<?php echo $row['Area_ID']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input class="in" id="area_namec" name="area_namec" value="<?php echo $row['Area_Name']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input class="in" id="data_valuec" name="data_valuec" value="<?php echo $row['Data_Value']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input class="in" id="unit1c" name="unit1c" value="<?php echo $row['Unit']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input class="in" id="sub_groupc" name="sub_groupc" value="<?php echo $row['Subgroup']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input class="in" id="source1c" name="source1c" value="<?php echo $row['Source']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            <p>


                               <input id="add8" name="add2" type="image" src="images/document_save.ico"  title="save" onclick="success()" height="60"  width="60" />&nbsp;&nbsp;&nbsp;&nbsp;
                               <input id="add8" name="add2" type="image" src="images/cancel.ico"   title="cancel" height="60"  width="60"/>

                            </p>
                        </fieldset>
                        </form>
                         <form id="myform_indicator" action="javascript:getindicatorupdated(document.getElementById('myform_indicator'));" name="myform_indicator" method="post">
                        <fieldset class="step">
                            <legend>RDI Edit Form for New Indicator</legend>
                              <input id="Idindicator" name="Idindicator" value="<?php echo $row['Id']; ?> " type="hidden"  />
                            <p>
                                <label for="username">Sectors</label>
                                <select name="myindicator"   id="myindicator" onChange="getyou(this.value)">
                               <option value="<?php echo $row['Sectors']; ?>"><?php echo $row['Sectors']; ?></option>
                                <option value="Development Administration">Development Administration</option>
                                <option value="Economic">Economic</option>
                                <option value="Infrastructure">Infrastructure</option>
                                <option value="Social">Social</option>

                               </select>
                            </p>
                             <div id="subdivide">
                            <p>
                                <label for="email">Sub-Sectors</label>
                               <select name="subsectorsin"  id="subsectorsin">
                           <option value="<?php echo $row['SubSectors']; ?>"><?php echo $row['SubSectors']; ?></option>
                                </select>
                            </p>
                            </div>
                            <div id="statedivision">
                            <p>
                                <label for="password">Classes</label>

                                <select name="statein" id="statein" >
                            	<option value="<?php echo $row['Classes']; ?>"><?php echo $row['Classes']; ?></option>
                                </select>
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                <input class="in" id="cityin" name="cityin" value="<?php echo $row['Indicator']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input class="in" id="time_periodin" name="time_periodin" value="<?php echo $row['Time_Period']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input class="in" id="area_idin" name="area_idin" value="<?php echo $row['Area_ID']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input class="in" id="area_namein" name="area_namein" value="<?php echo $row['Area_Name']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input class="in" id="data_valuein" name="data_valuein" value="<?php echo $row['Data_Value']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input class="in" id="unit1in" name="unit1in" value="<?php echo $row['Unit']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input class="in" id="sub_groupin" name="sub_groupin" value="<?php echo $row['Subgroup']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input class="in" id="source1in" name="source1in" value="<?php echo $row['Source']; ?>" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            <p>


                               <input id="add3" name="add3" type="image" src="images/document_save.ico" title="save" onclick="success()" height="60"  width="60"/>&nbsp;&nbsp;
                               <input id="add3" name="add3" type="image" src="images/cancel.ico" title="cancel" height="60" width="60" />

                            </p>

                        </fieldset>
                        </form>


                </div>

                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Existing RDI</a>
                        </li>
                        <li>
                            <a href="#">New Sub-Sectors</a>
                        </li>
                        <li>
                            <a href="#">New Classes </a>
                        </li>
                        <li>
                            <a href="#">New Indicator </a>
                        </li>

                    </ul>
                </div>


           <?php  }

                if(isset($_POST['delecon']))
             {



  echo "<script type='text/javascript' language='javascript'>


var answer = confirm('Are you sure want to delete this record?')
	if (answer){
		alert('Successfully deleted!')
        window.location = 'http://localhost/chosenone/index.php';

	}
	else{
			window.location = 'http://localhost/chosenone/index.php';
	}

</script>";
  $country=$_POST['check'];
mysql_query("delete from tbl_data where Id='".$country."'") or die(mysql_error());
$query1=mysql_query("insert into visitors_table values('','".$_SESSION['log_fname']."','".$_SESSION['log_lname']."','".$_SESSION['log_position']."','".$_SESSION['log_division']."','".$_SESSION['log_username']."','Record Deletion-".$_SESSION['id']."',now() )") or die(mysql_error());




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
    </div>
</div>



</body>
</html>
