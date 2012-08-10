
var http_request = false;
function makePOSTRequest(url, parameters) {
http_request = false;
if (window.XMLHttpRequest) { // Mozilla, Safari,...
http_request = new XMLHttpRequest();
if (http_request.overrideMimeType) {
// set type accordingly to anticipated content type
//http_request.overrideMimeType('text/xml');
http_request.overrideMimeType('text/html');
}
} else if (window.ActiveXObject) { // IE
try {
http_request = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
try {
http_request = new ActiveXObject("Microsoft.XMLHTTP");
} catch (e) {}
}
}
if (!http_request) {
alert('Cannot create XMLHTTP instance');
return false;
}
http_request.onreadystatechange = alertContents;
http_request.open('POST', url, true);
http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
http_request.setRequestHeader("Content-length", parameters.length);
http_request.setRequestHeader("Connection", "close");
http_request.send(parameters);
}
function alertContents() {
if (http_request.readyState == 4) {
if (http_request.status == 200) {
//alert(http_request.responseText);
result = http_request.responseText;
document.getElementById('myspan').innerHTML = result;
} else {
alert(http_request.status);
}
}
}

function get(obj) {

var poststr = "country=" + encodeURI( document.getElementById("country").value ) +
"&subsectors=" + encodeURI( document.getElementById("subsectors").value )
 +
"&state=" + encodeURI( document.getElementById("state").value ) +
"&city=" + encodeURI( document.getElementById("city").value )
 +
"&time_period=" + encodeURI( document.getElementById("time_period").value )
 +
"&area_id=" + encodeURI( document.getElementById("area_id").value )
+
"&area_name=" + encodeURI( document.getElementById("area_name").value )
+
"&data_value=" + encodeURI( document.getElementById("data_value").value )
+
"&unit1=" + encodeURI( document.getElementById("unit1").value )
+
"&sub_group=" + encodeURI( document.getElementById("sub_group").value )
+
"&source1=" + encodeURI( document.getElementById("source1").value ) ;


makePOSTRequest('add.php', poststr);
}



function getupdated(obj) {

var poststr = "country=" + encodeURI( document.getElementById("country").value ) +
"&subsectors=" + encodeURI( document.getElementById("subsectors").value )
 +
"&state=" + encodeURI( document.getElementById("state").value ) +
"&city=" + encodeURI( document.getElementById("city").value )
 +
"&time_period=" + encodeURI( document.getElementById("time_period").value )
 +
"&area_id=" + encodeURI( document.getElementById("area_id").value )
+
"&area_name=" + encodeURI( document.getElementById("area_name").value )
+
"&data_value=" + encodeURI( document.getElementById("data_value").value )
+
"&unit1=" + encodeURI( document.getElementById("unit1").value )
+
"&sub_group=" + encodeURI( document.getElementById("sub_group").value )
+
"&source1=" + encodeURI( document.getElementById("source1").value )
+
"&Id=" + encodeURI( document.getElementById("Id").value ) ;


makePOSTRequest('getupdated.php', poststr);
}


function getuserupdated(obj) {

var poststr = "uname=" + encodeURI( document.getElementById("uname").value ) +
"&pass=" + encodeURI( document.getElementById("pass").value )
 +
"&fname=" + encodeURI( document.getElementById("fname").value ) +
"&lname=" + encodeURI( document.getElementById("lname").value )
 +
"&mi=" + encodeURI( document.getElementById("mi").value )
 +
"&division=" + encodeURI( document.getElementById("division").value )
+
"&position=" + encodeURI( document.getElementById("position").value )
+
"&u_id=" + encodeURI( document.getElementById("u_id").value );



makePOSTRequest('getuserupdated.php', poststr);
}


function getuserregister(obj) {

var poststr = "uname=" + encodeURI( document.getElementById("uname").value )
 +
"&pass=" + encodeURI( document.getElementById("pass").value )
 +
"&fname=" + encodeURI( document.getElementById("fname").value )
 +
"&lname=" + encodeURI( document.getElementById("lname").value )
 +
"&middle=" + encodeURI( document.getElementById("middle").value )
 +
"&division=" + encodeURI( document.getElementById("division").value )
+
"&position=" + encodeURI( document.getElementById("position").value );



makePOSTRequest('adduserajax.php', poststr);
}


function getusersearch(obj) {

var poststr = "search=" + encodeURI( document.getElementById("search").value )

makePOSTRequest('searchuser.php', poststr);
}



//for class entry





//for new indicator




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

	function getState1(countryId) {



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

    function getState(countryId) {



		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('statedivision').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}
	}



     function getStatein(countryId) {



		var strURL="findstatein.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('statedivision').innerHTML=req.responseText;
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



    	function getme(countryId) {


		var strURL="findsectors.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('subdivision').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}

	}

    	function getmeclass(countryId) {


		var strURL="findsectorsclass.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('subdivision').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}

	}


	function getyou(countryId) {


		var strURL="findstatement.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('subdivide').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}

	}


    function getyouin(countryId) {


		var strURL="findstatementin.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('subdivide').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}

	}


 //FOR VALIDATION

 function validate()
 {

 var a=document.forms['myform']['time_period'].value;


  if(a==null || a=="")
  {


  alert("Please input time period field!");
  document.myform.time_period.focus();
  }
   var b=document.forms['myform']['area_id'].value;
   if(b==null || b=="")
  {


  alert("Please input area id field!");
  document.myform.area_id.focus();
  }

   var c=document.forms['myform']['area_name'].value;

   if(c==null || c=="")
  {


  alert("Please input area name field!");
  document.myform.area_name.focus();
  }
  var d=document.forms['myform']['data_value'].value;
   if(d==null || d=="")
  {


  alert("Please input data value field!");
  document.myform.data_value.focus();
  }
  var e=document.forms['myform']['unit1'].value;
  if(e==null || e=="")
  {


  alert("Please input unit field!");
  document.myform.unit1.focus();
  }
  var f=document.forms['myform']['subgroup'].value;
 if(f==null || f=="")
  {


  alert("Please input subgroup field!");
  document.myform.subgroup.focus();
  }


  var g=document.forms['myform']['source1'].value;
  if(g==null || g=="")
  {


  alert("Please input source field!");
  document.myform.source1.focus();
  }

  }

