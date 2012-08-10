<!-- This Script is from www.htmlfreecodes.com, Coded by: Krishna Eydat-->

<!--<html>-->
<!--<head>-->
<!--<html>-->
<!--<head>-->
<script language="JavaScript">
var clockID = 0;
function UpdateClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
   var tDate = new Date();

   document.theClock.theTime.value = ""
                                   + tDate.getHours() + ":"
                                   + tDate.getMinutes() + ":"
                                   + tDate.getSeconds();
   clockID = setTimeout("UpdateClock()", 1000);
}
function StartClock() {
   clockID = setTimeout("UpdateClock()", 500);
}
function KillClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
}
</script>
<!--</head>-->
<body onload="StartClock()" onunload="KillClock()">
<form name="theClock">
   <input type=text name="theTime" size=8 style="text-align: center">
</form>
<!--</body>-->
<!--</html>-->
<!--</head>-->
<!--<body>-->
<!--</body>-->
<!--</html>-->

<font face="Tahoma"><a target="_blank" href="http://www.htmlfreecodes.com/"><span style="font-size: 8pt; text-decoration: none">HTML Free Code</span></a></font>
