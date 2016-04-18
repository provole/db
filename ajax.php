<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);
if(isset($_POST['value']))
{
$value=$_POST['value'];
mysql_query("update choice set choice='$value' where id='1'");

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

