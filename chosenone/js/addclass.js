
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



function getclass(obj) {




var poststr = "countryc=" + encodeURI( document.getElementById("countryc").value ) +
"&subsectorsc=" + encodeURI( document.getElementById("subsectorsc").value )
 +
"&statec=" + encodeURI( document.getElementById("statec").value ) +
"&cityc=" + encodeURI( document.getElementById("cityc").value )
 +
"&time_periodc=" + encodeURI( document.getElementById("time_periodc").value )
 +
"&area_idc=" + encodeURI( document.getElementById("area_idc").value )
+
"&area_namec=" + encodeURI( document.getElementById("area_namec").value )
+
"&data_valuec=" + encodeURI( document.getElementById("data_valuec").value )
+
"&unit1c=" + encodeURI( document.getElementById("unit1c").value )
+
"&sub_groupc=" + encodeURI( document.getElementById("sub_groupc").value )
+
"&source1c=" + encodeURI( document.getElementById("source1c").value ) ;


makePOSTRequest('addclass.php', poststr);
}



function getclassupdated(obj) {




var poststr = "countryc=" + encodeURI( document.getElementById("countryc").value ) +
"&subsectorsc=" + encodeURI( document.getElementById("subsectorsc").value )
 +
"&statec=" + encodeURI( document.getElementById("statec").value ) +
"&cityc=" + encodeURI( document.getElementById("cityc").value )
 +
"&time_periodc=" + encodeURI( document.getElementById("time_periodc").value )
 +
"&area_idc=" + encodeURI( document.getElementById("area_idc").value )
+
"&area_namec=" + encodeURI( document.getElementById("area_namec").value )
+
"&data_valuec=" + encodeURI( document.getElementById("data_valuec").value )
+
"&unit1c=" + encodeURI( document.getElementById("unit1c").value )
+
"&sub_groupc=" + encodeURI( document.getElementById("sub_groupc").value )
+
"&source1c=" + encodeURI( document.getElementById("source1c").value )
+
"&Idclass=" + encodeURI( document.getElementById("Idclass").value ) ;


makePOSTRequest('addclassupdated.php', poststr);
}