

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
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<link href="footer_index.css" rel="stylesheet" type="text/css" />
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

 <script type="text/javascript">

        function validateForm() {



			//Get the controls

            var nameControl = document.getElementById("uname");

			var passControl = document.getElementById("pass");

			var fnameControl = document.getElementById("fname");

            var lnameControl = document.getElementById("lname");

            var posControl = document.getElementById("position");



			//Get the error spans

			var nameError = document.getElementById("nameError");

			var passError = document.getElementById("passError");

			var fnameError = document.getElementById("fnameError");

            var lnameError = document.getElementById("lnameError");

            var posError = document.getElementById("posError");



			//Create expressions

			var isNumeric = /^[0-9]+$/;

			var isLetters = /^[a-zA-Z]+$/;

			var isEmail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;



			//Cheack each one and if it fails, set an appropriate error message



			//If name is empty or invalid

			if(nameControl.value == "")

				nameError.innerHTML = " * Name is empty";

		   /*	else if(nameControl.value.search(isLetters))

				nameError.innerHTML = " * Name must only contain letters";   */

			else

				nameError.innerHTML = "";



			//If mail is empty or invalid

			if(passControl.value == "")

				passError.innerHTML = " * Password is empty";

		   /*	else if(mailControl.value.search(isEmail))

				mailError.innerHTML = " * Email is not valid";    */

			else

				passError.innerHTML = "";



			//If age is empty or invalid

			if(fnameControl.value == "")

			   fnameError.innerHTML = " * Firstname field is empty";

			else if(fnameControl.value.search(isLetters))

				fnameError.innerHTML = " * Firstname field must only contain letters";

			else

				fnameError.innerHTML = "";



            if(lnameControl.value == "")

			   lnameError.innerHTML = " * Lastname field is empty";

			else if(lnameControl.value.search(isLetters))

				lnameError.innerHTML = " * Lastname field must only contain letters";

			else

				lnameError.innerHTML = "";



            if(posControl.value == "")

			   posError.innerHTML = " * Position field is empty";

		 /*	else if(fnameControl.value.search(isNumeric))

				fnameError.innerHTML = " * Firstname field must only contain numbers";     */

			else

				posError.innerHTML = "";



			//If any errors occurred, return false, otherwise true

			if(nameError.innerHTML == "" && passError.innerHTML == "" && fnameError.innerHTML == "" && lnameError.innerHTML == "" && posError.innerHTML == "")

				return true;

			else

				return false;



        };

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

.error {

			color: #ff0000;

			font-weight: bold;

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
               <div id="gollum"><center><div id="apple"><script src="acac1.js" type="text/javascript"></script><script>ac1init_doc('',0);</script></div>  </center>  </div>
  <div id="rightPan">
  <div><table cellpadding="0" cellspacing="0"><TR VALIGN="MIDDLE"><TD style="background-image: url(http://beemp3.com/player/corner-topleft2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: bottom;"></td><TD style="background-image: url(http://beemp3.com/player/bkgnd-top2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: middle;">Jamie Grace(Come to Me).mp3</td><TD style="background-image: url(http://beemp3.com/player/corner-topright2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 12px;vertical-align: bottom;"></td></TR><TR VALIGN="MIDDLE"><TD WIDTH="16" style="width: 16px;background-image:url(http://beemp3.com/player/left-ltrow2.gif);"/> </TD><TD style="background-image: url(http://beemp3.com/player/light2.gif);background-repeat: repeat;font-family: Arial, Helvetica, sans-serif;font-size: 11px;vertical-align: bottom;"><audio autoplay loop controls="controls">
  <source src="come_to_me.ogg" type="audio/ogg" />
  <source src="come_to_me.mp3" type="audio/mp3" />
  Your browser does not support the audio element.
</audio> <img style="padding:0;border:0;vertical-align:bottom" src="http://beemp3.com/player/logo_small.gif"/> </td><TD WIDTH="16" style="width: 16px;background-image:url(http://beemp3.com/player/right-ltrow2.gif);"/></TD></TR><TR><TD WIDTH="16"><IMG style="padding:0;border:0;" SRC="http://beemp3.com/player/corner-bottomleft2.gif"></TD><TD style="background-image: url(http://beemp3.com/player/bkgnd-bottom2.gif);background-repeat: repeat-x;font-family: Arial, Helvetica, sans-serif;font-size: 11px;vertical-align: top;text-align: center;padding:0;border: 0;margin:0;">Found at <a href="http://beemp3.com/download.php?file=9162493&song=Get+Back+Up">bee mp3 search engine</a></TD><TD WIDTH="16"><IMG style="padding:0;border:0;" SRC="http://beemp3.com/player/corner-bottomright2.gif"></TD></TR></table></div>

     <div id="content">
     <div id="myspan"></div>


            <div id="wrapper">



                <div id="steps">





                         <form id="user_register_form" action="javascript:getuserregister(document.getElementById('register_user_form'));" name="register_user_form" method="post" onsubmit="return validateForm();">
                        <fieldset class="step">
                            <legend>User Registration Form</legend>


                             <div id="subdivide">
                            <p>
                                <label for="username">User Name</label>
                                <input class="in" id="uname" name="uname" value="" type="text" AUTOCOMPLETE=OFF />
                                	<p id="nameError" class="error"></p>
                            </p>
                            </div>

                              <div id="citydiv">
                           <p>
                                <label for="password">Password</label>

                                <input class="in" id="pass" name="pass" value="" type="password" AUTOCOMPLETE=OFF />
                                	<td><p id="passError" class="error"></p></td>

                            </p>
                            </div>



                           <p>
                                <label for="fname">First Name</label>

                                <input class="in" id="fname" name="fname" value="" type="text" AUTOCOMPLETE=OFF />
                                	<td><p id="fnameError" class="error"></p></td>

                            </p>

                           <p>
                                <label for="fname">Last Name</label>

                                <input class="in" id="lname" name="lname" value="" type="text" AUTOCOMPLETE=OFF />
                                 	<td><p id="lnameError" class="error"></p></td>

                            </p>


                            <p>
                                <label for="username">Middle Initial</label>
                                <select name="middle" id="middle">

                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                 <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">G</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                                <option value="L">L</option>
                                 <option value="M">M</option>
                                <option value="N">N</option>
                                <option value="O">O</option>
                                <option value="P">P</option>
                                 <option value="Q">Q</option>
                                <option value="R">R</option>
                                <option value="S">S</option>
                                <option value="T">T</option>
                                 <option value="U">U</option>
                                <option value="V">V</option>
                                <option value="W">W</option>
                                <option value="X">X</option>
                                 <option value="Y">Y</option>
                                <option value="Z">Z</option>






                               </select>
                            </p>







                             <p>
                                <label for="division">Division</label>
                                <select class="in" name="division"   id="division">
                                 <option value="">------------------Select-------------------</option>
                                 <option value="KMD">KMD</option>
                                 <option value="PDIPBD">PDIPBD</option>
                                 <option value="PMED">PMED</option>
                                 <option value="PPFD">PPFD</option>

                               </select>
                            </p>

                            <p>
                                <label for="position">Position</label>

                               <input class="in" id="position" name="position" value="" type="text" AUTOCOMPLETE=OFF />
                               	<td><p id="posError" class="error"></p></td>

                            </p>


                            <p>


                               <input id="add3" name="add3" type="image" src="images/document_save.ico" height ="60" width ="60" title="save" />&nbsp;&nbsp;
                               <input id="add3" name="add3" type="image" src="images/cancel.ico" onclick="reset()" height ="60" width ="60" title="cancel"/>

                            </p>

                        </fieldset>
                        </form>


                </div>


            </div>

        </div>
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



<div id="footerPan">

</div>
</body>
</html>
