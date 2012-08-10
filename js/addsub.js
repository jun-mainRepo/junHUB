
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



function getsub(obj) {

var poststr = "countrysub=" + encodeURI( document.getElementById("countrysub").value ) +
"&subsectorssub=" + encodeURI( document.getElementById("subsectorssub").value )
 +
"&statesub=" + encodeURI( document.getElementById("statesub").value ) +
"&citysub=" + encodeURI( document.getElementById("citysub").value );

makePOSTRequest('addsub.php', poststr);
}

function getsubupdated(obj) {

var poststr = "countrysub=" + encodeURI( document.getElementById("countrysub").value ) +
"&subsectorssub=" + encodeURI( document.getElementById("subsectorssub").value )
 +
"&statesub=" + encodeURI( document.getElementById("statesub").value ) +
"&citysub=" + encodeURI( document.getElementById("citysub").value )
 +
"&time_periodsub=" + encodeURI( document.getElementById("time_periodsub").value )
 +
"&area_idsub=" + encodeURI( document.getElementById("area_idsub").value )
+
"&area_namesub=" + encodeURI( document.getElementById("area_namesub").value )
+
"&data_valuesub=" + encodeURI( document.getElementById("data_valuesub").value )
+
"&unit1sub=" + encodeURI( document.getElementById("unit1sub").value )
+
"&sub_groupsub=" + encodeURI( document.getElementById("sub_groupsub").value )
+
"&source1sub=" + encodeURI( document.getElementById("source1sub").value )
+
"&Idsub=" + encodeURI( document.getElementById("Idsub").value ) ;



makePOSTRequest('getsubupdated.php', poststr);
}





//for class entry


