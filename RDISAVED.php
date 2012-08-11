<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Neda Regional Development Indicator</title>
<link href="style.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 <script type="text/javascript" src="sliding.form.js"></script>

 <style>

        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>

<script language="javascript" type="text/javascript">



function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{
			try{
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}

		return xmlhttp;
    }

	function getState(countryId) {



		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('statediv').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}
	}
	function getCity(countryId) {
		var strURL="findCity.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('citydiv').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}

	}

    	function getSectors(countryId) {
		var strURL="findsectors.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('subdiv').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}

	}
</script>


</head>

<body>
<div id="topPan"><a href="index.html"><img src="images/logo.gif" title="Neda Regional Development Indicator" alt="Neda Regional Development Indicator" width="204" height="57" border="0"/></a>
	<ul>
	   	<li><a href="index.html">Home</a></li>
		<li><a href="rdi.php">RDI</a></li>
		<li><a href="#">User Accounts</a></li>
		<li><a href="#">Search RDI</a></li>
		<li><a href="#">Log-Out</a></li>
	</ul>
</div>

<div id="headerPan">
  <div id="headerPanleft">
  	    <div id="ourblog">
			<h2>Sectors</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		</div>
        <div id="possib">
			<h2>Sub-Sectors</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		</div>
		<div id="solution">
			<h2>Classes</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		</div>

        	<div id="indicator">
			<h2>Indicator</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		</div>

        <div id="timeperiod">
			<h2>Time-Period</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		    </div>

        	<div id="areaname">
			<h2>Area-Name</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		    </div>



            <div id="areaid">
			<h2>Area-ID</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		    </div>

            <div id="unit">
			<h2>Unit</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		    </div>

             <div id="subgroup">
			<h2>Sub-Group</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		    </div>

             <div id="source">
			<h2>Source</h2>
			<p>Desktop publishing</p>
			<a href="#">&nbsp;</a>
		    </div>



  </div>


</div>

<div id="bodyPan">

  <div id="rightPan">
  	<div id="rightbodyPan">
     <div id="content">
            <h1>RDI REGISTRATION TABLE FORM</h1>
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="" method="post">
                        <fieldset class="step">
                            <legend>RDI General Registration Form</legend>
                            <p>
                                <label for="username">Sectors</label>
                                <select name="country" onChange="getSectors(this.value)">
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
                               <select name="subsectors">
                               	<option>Select Sub-Sector</option>
                                </select>
                            </p>
                            </div>
                            <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <select name="state" >
                            	<option>Select Classes </option>
                                </select>
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                <select name="city">
                             	<option>Select Indicator</option>
                                </select>

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input id="time_period" name="time_period" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input id="area_id" name="area_id" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input id="area_name" name="area_name" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input id="data_value" name="data_value" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input id="unit" name="unit" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input id="sub_group" name="sub_group" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input id="source" name="source" type="text" AUTOCOMPLETE=OFF />

                            </p>

                        </fieldset>
                        <fieldset class="step">
                           <legend>RDI Registration Form for New Sub-Sectors</legend>
                            <p>
                                <label for="username">Sectors</label>
                                <select name="country" onChange="getSectors(this.value)">
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
                                <input id="subsectors" name="subsectors" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>
                            <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <input id="state" name="state" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                 <input id="city" name="city" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input id="time_period" name="time_period" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input id="area_id" name="area_id" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input id="area_name" name="area_name" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input id="data_value" name="data_value" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input id="unit" name="unit" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input id="sub_group" name="sub_group" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input id="source" name="source" type="text" AUTOCOMPLETE=OFF />

                            </p>

                        </fieldset>
                        <fieldset class="step">
                            <legend>RDI Registration Form for New Classes</legend>
                            <p>
                                <label for="username">Sectors</label>
                                <select name="country" onChange="getSectors(this.value)">
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
                               <select name="subsectors">
                               	<option>Select Sub-Sector</option>
                                </select>
                            </p>
                            </div>
                             <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <input id="state" name="state" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                 <input id="city" name="city" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input id="time_period" name="time_period" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input id="area_id" name="area_id" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input id="area_name" name="area_name" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input id="data_value" name="data_value" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input id="unit" name="unit" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input id="sub_group" name="sub_group" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input id="source" name="source" type="text" AUTOCOMPLETE=OFF />

                            </p>

                        </fieldset>
                        <fieldset class="step">
                            <legend>RDI Registration Form for New Indicator</legend>
                            <p>
                                <label for="username">Sectors</label>
                                <select name="country" onChange="getSectors(this.value)">
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
                               <select name="subsectors">
                               	<option>Select Sub-Sector</option>
                                </select>
                            </p>
                            </div>
                            <div id="statediv">
                            <p>
                                <label for="password">Classes</label>

                                <select name="state" >
                            	<option>Select Classes </option>
                                </select>
                            </p>
                            </div>
                            <div id="citydiv">
                           <p>
                                <label for="password">Indicator</label>

                                <input id="city" name="city" type="text" AUTOCOMPLETE=OFF />

                            </p>
                            </div>

                             <p>
                                <label for="password">Time Period</label>

                               <input id="time_period" name="time_period" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Area ID</label>

                               <input id="area_id" name="area_id" type="text" AUTOCOMPLETE=OFF />

                            </p>

                           <p>
                                <label for="password">Area Name</label>

                               <input id="area_name" name="area_name" type="text" AUTOCOMPLETE=OFF />

                            </p>

                          <p>
                                <label for="password">Data Value</label>

                               <input id="data_value" name="data_value" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Unit</label>

                               <input id="unit" name="unit" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Sub-Group</label>

                               <input id="sub_group" name="sub_group" type="text" AUTOCOMPLETE=OFF />

                            </p>

                            <p>
                                <label for="password">Source</label>

                               <input id="source" name="source" type="text" AUTOCOMPLETE=OFF />

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
                            <a href="#">New Classes</a>
                        </li>
                        <li>
                            <a href="#">New Indicator</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
</div>
</div>
</div>

<div id="footerPan">
	<div id="footernextPan">
	<ul>
  <li><a href="#">Home </a>| </li>
  <li><a href="#">About us</a> | </li>
  <li><a href="#">Support </a>| </li>
  <li><a href="#">Clients</a> | </li>
  <li><a href="#">Contact </a> </li>
  </ul>


   <div id="footerPanhtml"><a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML</a></div>
   <div id="footerPancss"><a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">CSS</a></div>
	</div>
</div>
</body>
</html>
