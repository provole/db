<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);
if(isset($_POST['value']) && isset($_POST['name']))
{
$value=$_POST['value'];
$name=$_POST['name'];
mysql_query("update choice set choice='$value' where name='$name'");
}



if($value =="off")
{
	echo "<img src=\"picOff.jpg\" border=0>"; 
}
if($value =="on")
{
	echo "<img src=\"picOn.png\" border=0>";
}



?>

