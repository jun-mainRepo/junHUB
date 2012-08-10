<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title></title>
  <style type="text/css">
  #introContainer{
 position: absolute;
 width: 100%;
 height: 100%;
 top: 0;
 left: 0;
 background: -webkit-gradient(linear, left top, left bottom, from(#0086B2), to(#00BFFF));
 display: none;
}

#introContent{
 position: absolute;
 width: 100%;
 top: 30%;
 text-align: center;
 background-color:white;
 font-family:Courier New;
 font-weight:bold;
 color:blue;


}

span.w_name{

color:red;

}


  </style>
        <script type="text/javascript" src="jquery-1.6.2.min.js"></script>
        <script>
        jQuery(document).ready(function(){

 $('div#introContainer').show();
 window.setTimeout(function() {
     $('div#introContainer').fadeOut('slow');
     window.location.replace("index.php");
   }, 2000);



}); </script>

</head>

<body>
      <div id="introContainer">
<div id="introContent">
 <?php echo"<h1>Welcome <span class='w_name'>".$_SESSION['f_name']."</span> to RDI SITE</br>Have a great day!</h1> "?>
<?php echo $_SESSION['division'];  ?>

</div>
</div>
</body>

</html>