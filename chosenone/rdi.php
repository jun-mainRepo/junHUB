

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Neda Regional Development Indicator</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="sliding.form.js"></script>
<script type="text/javascript" src="js/addindicator.js"></script>
<script type="text/javascript" src="js/add.js"></script>
<script type="text/javascript" src="js/addsub.js"></script>
<script type="text/javascript" src="js/addclass.js"></script>

 <script>
function PopupCenter(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>

<script type="text/javascript" language="javascript">


function reset()
{

$("#source1").val()="";

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
a.neda_text:link {color:#ff0000;}
a.neda_text:visited {color:#0000ff;}
a.neda_text:hover {background:#66ff66;}

  



</style>


</head>

<body>

<div id="logo"><p class="text"><a class="neda_text" href="index.php"><img src="images/neda_logo.png" title="Neda Regional Development Indicator" alt="Neda Regional Development Indicator" width="90" height="90" border="0"/>Neda Regional Development Indicator</a></p></div>

<div id="topPan">
<ul>
	   	<li><a href="index.php">HOME</a></li>
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
     <div id="content">
     <div id="myspan"></div>


            <div id="wrapper">
                <div id="steps">
                    <form  id="myform" action="javascript:get(document.getElementById('myform'));" name="myform" method="post">
                        <fieldset class="step">
                            <legend>RDI General Registration Form</legend>
                            <p>
                                <label for="username">Sectors</label>
                                <select name="country" id="country" onChange="getSectors(this.value)">
                                <option value="">Select Sectors</option>
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
                               	<option>Select Sub-Sector</option>
                                </select>
                            </p>
                            </div>
                            <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <select name="state" id="state">
                            	<option>Select Classes </option>
                                </select>
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                <select name="city" id="city">
                             	<option>Select Indicator</option>
                                </select>

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input class="in" id="time_period" name="time_period" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input class="in" id="area_id" name="area_id" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input class="in" id="area_name" name="area_name" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input class="in" id="data_value" name="data_value" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input class="in" id="unit1" name="unit1" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input class="in" id="sub_group" name="sub_group" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input class="in" id="source1" name="source1" type="text" AUTOCOMPLETE=OFF />

                            </p>
                               <p>


                               <input id="add" name="add" type="image" src="images/save.png" />&nbsp;&nbsp;&nbsp;&nbsp;
                               <input id="add" name="add" type="image" src="images/cancel.png" onclick="reset()"  />

                            </p>
                        </fieldset>

                        </form>


                         <form id="myform_sub" action="javascript:getsub(document.getElementById('myform_sub'));" name="myform_sub" method="post">
                        <fieldset class="step">
                           <legend>RDI Registration Form for New Sub-Sectors</legend>
                            <p>
                                <label for="username">Sectors</label>
                                <select name="countrysub" id="countrysub" onChange="getSectors(this.value)">
                                <option value="">Select Sectors</option>
                                <option value="Development Administration">Development Administration</option>
                                <option value="Economic">Economic</option>
                                <option value="Infrastructure">Infrastructure</option>
                                <option value="Social">Social</option>

                               </select>
                            </p>
                             <div id="subdiv">
                            <p>
                                <label for="email">Sub-Sectors</label>
                                <input class="in" id="subsectorssub" name="subsectorssub" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>
                            <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <input class="in" id="statesub" name="statesub" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                 <input class="in" id="citysub" name="citysub" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input class="in" id="time_periodsub" name="time_periodsub" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input class="in" id="area_idsub" name="area_idsub" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input class="in" id="area_namesub" name="area_namesub" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input class="in" id="data_valuesub" name="data_valuesub" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input class="in" id="unit1sub" name="unit1sub" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input class="in" id="sub_groupsub" name="sub_groupsub" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input class="in" id="source1sub" name="source1sub" type="text" AUTOCOMPLETE=OFF />

                            </p>
                               <p>


                               <input id="add1" name="add1" type="image" src="images/save.png"  />&nbsp;&nbsp;&nbsp;&nbsp;
                               <input id="add1" name="add1" type="image" src="images/cancel.png" onclick="reset()"  />

                            </p>
                        </fieldset>
                        </form>
                         <form id="myform_class" action="javascript:getclass(document.getElementById('myform_class'));" name="myform_class" method="post">
                        <fieldset class="step">
                            <legend>RDI Registration Form for New Classes</legend>
                            <p>
                                <label for="username">Sectors</label>
                                <select name="countryc" id="countryc" onChange="getmeclass(this.value)">
                                <option value="">Select Sectors</option>
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
                               	<option>Select Sub-Sector</option>
                                </select>
                            </p>
                            </div>
                             <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <input class="in" id="statec" name="statec" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                 <input class="in" id="cityc" name="cityc" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input class="in" id="time_periodc" name="time_periodc" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input class="in" id="area_idc" name="area_idc" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input class="in" id="area_namec" name="area_namec" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input class="in" id="data_valuec" name="data_valuec" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input class="in" id="unit1c" name="unit1c" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input class="in" id="sub_groupc" name="sub_groupc" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input class="in" id="source1c" name="source1c" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            <p>


                               <input id="add2" name="add2" type="image" src="images/save.png"  />&nbsp;&nbsp;&nbsp;&nbsp;
                               <input id="add2" name="add2" type="image" src="images/cancel.png"  onclick="reset()" />

                            </p>
                        </fieldset>
                        </form>

                         <form id="myform_indicator" action="javascript:getindicatornow(document.getElementById('myform_indicator'));" name="myform_indicator" method="post">
                        <fieldset class="step">
                            <legend>RDI Registration Form for New Indicator</legend>
                            <p>
                                <label for="username">Sectors</label>
                                <select name="myindicator"   id="myindicator" onChange="getyouin(this.value)">
                                <option value="myindicator">Select Sectors</option>
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
                               	<option>Select Sub-Sector</option>
                                </select>
                            </p>
                            </div>
                            <div id="statedivision">
                            <p>
                                <label for="password">Classes</label>

                                <select name="statein" id="statein" >
                            	<option>Select Classes </option>
                                </select>
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                <input class="in" id="cityin" name="cityin" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input class="in" id="time_periodin" name="time_periodin" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input class="in" id="area_idin" name="area_idin" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input class="in" id="area_namein" name="area_namein" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input class="in" id="data_valuein" name="data_valuein" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input class="in" id="unit1in" name="unit1in" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input class="in" id="sub_groupin" name="sub_groupin" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input class="in" id="source1in" name="source1in" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            <p>


                               <input id="add3" name="add3" type="image" src="images/save.png"  />&nbsp;&nbsp;
                               <input id="add3" name="add3" type="image" src="images/cancel.png" onclick="reset()"  />

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
            </div>

        </div>

</div>

</div>



<div id="footerPan">

</div>
</body>
</html>
