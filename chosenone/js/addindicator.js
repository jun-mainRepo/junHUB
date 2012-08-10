
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
document.getElementById('myspan1').innerHTML = result;
} else {
alert(http_request.status);
}
}
}






function getindicatornow(obj)
 {

var poststr = "myindicator=" + encodeURI( document.getElementById("myindicator").value ) +
"&subsectorsin=" + encodeURI( document.getElementById("subsectorsin").value )
 +
"&statein=" + encodeURI( document.getElementById("statein").value ) +
"&cityin=" + encodeURI( document.getElementById("cityin").value )
 +
"&time_periodin=" + encodeURI( document.getElementById("time_periodin").value )
 +
"&area_idin=" + encodeURI( document.getElementById("area_idin").value )
+
"&area_namein=" + encodeURI( document.getElementById("area_namein").value )
+
"&data_valuein=" + encodeURI( document.getElementById("data_valuein").value )
+
"&unit1in=" + encodeURI( document.getElementById("unit1in").value )
+
"&sub_groupin=" + encodeURI( document.getElementById("sub_groupin").value )
+
"&source1in=" + encodeURI( document.getElementById("source1in").value ) ;


makePOSTRequest('addindicator.php', poststr);
}


function getindicatorupdated(obj) {




var poststr = "myindicator=" + encodeURI( document.getElementById("myindicator").value ) +
"&subsectorsin=" + encodeURI( document.getElementById("subsectorsin").value )
 +
"&statein=" + encodeURI( document.getElementById("statein").value ) +
"&cityin=" + encodeURI( document.getElementById("cityin").value )
 +
"&time_periodin=" + encodeURI( document.getElementById("time_periodin").value )
 +
"&area_idin=" + encodeURI( document.getElementById("area_idin").value )
+
"&area_namein=" + encodeURI( document.getElementById("area_namein").value )
+
"&data_valuein=" + encodeURI( document.getElementById("data_valuein").value )
+
"&unit1in=" + encodeURI( document.getElementById("unit1in").value )
+
"&sub_groupin=" + encodeURI( document.getElementById("sub_groupin").value )
+
"&source1in=" + encodeURI( document.getElementById("source1in").value )
+
"&Idindicator=" + encodeURI( document.getElementById("Idindicator").value ) ;


makePOSTRequest('addindicatorupdated.php', poststr);
}
