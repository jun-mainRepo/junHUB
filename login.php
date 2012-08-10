


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Login to admin</title>
        <link href="style1.css" rel="stylesheet" type="text/css" />

     <script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
     <script type="text/javascript">

$(document).ready(function(){

    $("div#container").animate({height:500},"slow");
    $("div#container").animate({width:400},"fast");
    $("div#container").animate({height:350},"fast");
    $("div#container").animate({width:500},"fast");


    var cont_left = $("#containers").position().left;
        $("a img").hover(function() {
            // hover in
            $(this).parent().parent().css("z-index", 1);
            $(this).animate({
               height: "250",
               width: "250",
               left: "-=50",
               top: "-=50"
            }, "fast");
        }, function() {
            // hover out
            $(this).parent().parent().css("z-index", 0);
            $(this).animate({
                height: "100",
                width: "100",
                left: "+=50",
               top: "+=50"
            }, "fast");
        });

        $(".img").each(function(index) {
            var left = (index * 160) + cont_left;
            $(this).css("left", left + "px");
        });


  });




</script>

 <script type="text/javascript">

        function validateForm() {



			//Get the controls

            var nameControl = document.getElementById("username");

			var passControl = document.getElementById("password");

		   //	var ageControl = document.getElementById("age");

			//Get the error spans

			var nameError = document.getElementById("nameError");

			var passError = document.getElementById("passError");

		   //	var ageError = document.getElementById("ageError");



			//Create expressions

			var isNumeric = /^[0-9]+$/;

			var isLetters = /^[a-zA-Z]+$/;

			var isEmail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;



			//Cheack each one and if it fails, set an appropriate error message



			//If name is empty or invalid

			if(nameControl.value == "")

				nameError.innerHTML = " * Username is empty";

			/*else if(nameControl.value.search(isLetters))

				nameError.innerHTML = " * Name must only contain letters"; */

			else

				nameError.innerHTML = "";



			//If mail is empty or invalid

			if(passControl.value == "")

				passError.innerHTML = " * Password is empty";

		  /*	else if(mailControl.value.search(isEmail))

				mailError.innerHTML = " * Email is not valid";   */

			else

				passError.innerHTML = "";



			//If age is empty or invalid

		/*	if(ageControl.value == "")

				ageError.innerHTML = " * Age is empty";

		   else if(ageControl.value.search(isNumeric))

				ageError.innerHTML = " * Age must only contain numbers";

			else

				ageError.innerHTML = "";        */



			//If any errors occurred, return false, otherwise true

			if(nameError.innerHTML == "" && passError.innerHTML == "")

				return true;

			else

				return false;



        };

    </script>


<style type="text/css">
        #containers {
            text-align: center;
            position: absolute;
            left: 260px;
            margin-top: 350px;
            width: 790px;

        }
        .img {
            position: fixed;
            z-index: 0;

        }
        .end {
            margin-right: 0;
        }
        .clear {
            clear: both;
        }
        .img a img {
            position: relative;
            border: 0 solid #fff;
            left:-650px;
        }

        .error {

			color: #ff0000;

			font-weight: bold;

		}

    </style>

    </head>
    <body>


    <div id="containers">
            <div class="img"><a href="http://www.denr.gov.ph" target="_blank"><img src="images/denr.jpg" height="100" width="100" title="DENR WEBSITE"/></a></div>
        <div class="img"><a href="http://www.dpwh.gov.ph" target="_blank"><img src="images/dpwh.jpg" height="100" width="100" title="DPWH WEBSITE"/></a></div>
        <div class="img"><a href="http://www.deped.gov.ph" target="_blank"><img src="images/deped.png" height="100" width="100" title="DEPED WEBSITE"/></a></div>
          <div class="img"><a href="http://caraga.neda.gov.ph" target="_blank"><img src="images/Logo_NEDA.jpg" height="100" width="100" title="NEDA CARAGA WEBSITE" /></a></div>
         <div class="img"><a href="http://www.ched.gov.ph" target="_blank"><img src="images/ched.jpg" height="100" width="100" title="CHED WEBSITE"/></a></div>
          <div class="img"><a href="http://www.da.gov.ph" target="_blank"><img src="images/da.gif" height="100" width="100" title="Dept. of Agriculture WEBSITE"/></a></div>
        <div class="img end"><a href="http://www.dar.gov.ph" target="_blank"><img src="images/DAR.jpg" height="100" width="100" title="Dept. of Agrarian Reform WEBSITE"/></a></div>
        <div class="clear"></div>
    </div>


   <div id="clock1"> <iframe src="http://free.timeanddate.com/clock/i36wa8pb/n2361/szw110/szh110/hoc000/hbw0/hfc09f/cf100/hnc07c/hwc000/facfff/fnu2/fdi76/mqcfff/mqs4/mql18/mqw4/mqd60/mhcfff/mhs4/mhl5/mhw4/mhd62/mmv0/hhcfff/hhs1/hhb10/hmcfff/hms1/hmb10/hscfff/hsw3" frameborder="0" width="112" height="112"></iframe></div>

     <div id="clock"><center><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="220" height="300"><param name="movie" value="http://www.addcode.net/image/flash-clock-calendar/clock-calendar-001.swf"><param name="quality" value="high"><embed src="http://www.addcode.net/image/flash-clock-calendar/clock-calendar-001.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="220" height="300"></embed></object></center>
</div>

    <div id="container" style=";height:0px;width:0px;background:#98bf21">
    <div id="key"><img src="images/encrypted-icon.png" alt="" /></div>
    <div id="logo_neda"></div>
    <div id="flag"><img src="images1/p_flag1.PNG" alt=""/></div>


  <center><h1>Good day!Welcome to NEDA Caraga </h1></center>
  <div id="body">
		<h3>Please Login</h3>
	</div>

    <div id="login_form">
    <form action="login-action.php" method="post" name="myForm" onsubmit="return validateForm();">

                <ul>
         <li>
                    <p>
                       <label><strong><span>*</span>Username:</strong></label>
                        <input class="a" type="text" name="username" id="username" value="" />
                        	<p id="nameError" class="error"></p>
                    </p>


        </li>

               </ul>

                <ul>
        <li>
                     <p>
                       <label><strong><span>*</span>Password:</strong></label>
                        <input class="b" type="password" name="password" id="password" value="" />
                        <p id="passError" class="error"></p>
                    </p>


        </li>
                </ul>

                <ul>
        <li>
                    <p>
                        <label for="remember">
                            <input type="checkbox" name="remember" id="remember" value="1" /> Remember me
                        </label>
                    </p>

        </li>
                </ul>


               <ul>
        <li>
            <p>
                <input type="submit" value="Submit" /> <input type="reset" value="Reset" />
            </p>

        </li>
               </ul>

        </form>


          </div>

            <p class="warning"><strong><span>*</span>All fields are REQUIRED</strong></p>

	              <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>

        </div>
    </body>
</html>
