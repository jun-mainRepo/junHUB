<?
//collect information...
$browser  =$_SERVER['HTTP_USER_AGENT']; // get the browser name
$curr_page=$_SERVER['PHP_SELF'];// get page name
$ip  =  $_SERVER['REMOTE_ADDR'];   // get the IP address
$from_page = $_SERVER['HTTP_REFERER'];//  page from which visitor
came
$page=$_SERVER['PHP_SELF'];//get current page
//Insert the data in the table...
$query_insert  ="INSERT INTO stattracker
(browser,ip,date_visited,page,from_page) VALUES
('$browser','$ip',now(),'$page','$from_page')" ;
$result=mysql_query ( $query_insert);
if(!$result){
die(mysql_error());
}

//remove this section when attaching the script to a webpage
//I include it only because of it's debug value.
$query="Select Count(*) from stattracker WHERE page = '$curr_page'";
$result=mysql_query($query);
$viewed = mysql_result($result,0,'count(*)');
echo "This page was viewed $viewed times";


$query = "SELECT COUNT(*) FROM stattracker GROUP by ip";
$result=mysql_query($query);
$number_of_views = mysql_num_rows($result);

 ?>

