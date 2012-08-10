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
  });

</script>
    </head>
    <body>

    <div id="container" style=";height:0px;width:0px;background:#98bf21">
    <div id="logo_neda"></div>
         <div id="flag"><img src="images1/p_flag1.PNG" alt=""/></div>
  <h1>Welcome to Administrator District!</h1>
  <div id="body">
		<h3>Please Login</h3>
	</div>

    <div id="login_form">
    <form action="login-action.php" method="post" >

                <ul>
         <li>
                    <p>
                       <label><strong><span>*</span>Username:</strong></label>
                        <input class="a" type="text" name="username" id="username" value="" />
                    </p>


        </li>

               </ul>

                <ul>
        <li>
                     <p>
                       <label><strong><span>*</span>Password:</strong></label>
                        <input class="b" type="password" name="password" id="password" value="" />
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

            <p class="warning"><strong><span>*</span>All fieds are REQUIRED</strong></p>

	              <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>

        </div>
    </body>
</html>
