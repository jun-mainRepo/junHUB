

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
	   	<li><a href="index.php">HOME</a></li>
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
               <div id="gollum"><center><div id="apple"><script src="acac1.js" type="text/javascript"></script><script>ac1init_doc('',0);</script></div>  </center>  </div>
  <div id="rightPan">

     <div id="content">
     <div id="myspan"></div>


            <div id="wrapper">



                <div id="steps">





                         <form id="user_register_form" action="javascript:getuserregister(document.getElementById('register_user_form'));" name="register_user_form" method="post">
                        <fieldset class="step">
                            <legend>User Registration Form</legend>


                             <div id="subdivide">
                            <p>
                                <label for="username">User Name</label>
                                <input class="in" id="uname" name="uname" value="" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>

                              <div id="citydiv">
                           <p>
                                <label for="password">Password</label>

                                <input class="in" id="pass" name="pass" value="" type="password" AUTOCOMPLETE=OFF />

                            </p>
                            </div>



                           <p>
                                <label for="fname">First Name</label>

                                <input class="in" id="fname" name="fname" value="" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="fname">Last Name</label>

                                <input class="in" id="lname" name="lname" value="" type="text" AUTOCOMPLETE=OFF />

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

                            <div id="statedivision">
                            <p>
                                <label for="access level">Access Level</label>

                                <select name="ac_level" id="ac_level" >
                                <option value="full">Full</option>
                                <option value="limited">Limited</option>
                                </select>
                            </p>
                            </div>


                           <p>
                                <label for="email">E-mail</label>

                                <input class="in" id="email" name="email" value="" type="text" AUTOCOMPLETE=OFF />

                            </p>


                             <p>
                                <label for="division">Division</label>
                                <select class="in" name="division"   id="division">
                                 <option value="">------------------Select-------------------</option>
                                 <option value="KMD">KMD</option>
                                 <option value="ORD">ORD</option>
                                 <option value="OD">OD</option>
                                 <option value="PPFD">PPFD</option>

                               </select>
                            </p>

                            <p>
                                <label for="position">Position</label>

                               <input class="in" id="position" name="position" value="" type="text" AUTOCOMPLETE=OFF />

                            </p>


                            <p>


                               <input id="add3" name="add3" type="image" src="images/save.png"  />&nbsp;&nbsp;
                               <input id="add3" name="add3" type="image" src="images/cancel.png"   />

                            </p>

                        </fieldset>
                        </form>


                </div>


            </div>

        </div>

</div>

</div>



<div id="footerPan">

</div>
</body>
</html>
