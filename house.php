<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title>Smart Home</title>
<script type="text/javascript"src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
<script src="jquery/jquery-2.2.0.min.js"></script>
</script>
	
<script type="text/javascript">
$(document).ready(function(){
$('#myonoffswitch').click(function(){
var myonoffswitch=$('#myonoffswitch').val();
if ($("#myonoffswitch:checked").length == 0)
{
var a=myonoffswitch;
}
else
{
var a="off";
}

$.ajax({
type: "POST",
url: "ajax.php",
data: "value="+a ,

	success: function(html){
	$("#display").html(html).show();
}
	
});

});
});
</script>

<script type="text/javascript">
$(document).ready( function(){
			$(".cb-enable").click(function(){
					var parent = $(this).parents('.switch');
					$('.cb-disable',parent).removeClass('selected');
					$(this).addClass('selected');
					$('.checkbox',parent).attr('checked', true);
			});
			$(".cb-disable").click(function(){
					var parent = $(this).parents('.switch');
					$('.cb-enable',parent).removeClass('selected');
					$(this).addClass('selected');
					$('.checkbox',parent).attr('checked', false);
			});
});
</script>
	
<style type="text/css">
	
.onoffswitch {
	position: relative; width: 90px;
	-webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
	
.onoffswitch-checkbox {
	display: none;
}
	
.onoffswitch-label {
	display: block; overflow: hidden; cursor: pointer;
	border: 2px solid #999999; border-radius: 20px;
}
	
.onoffswitch-inner {
	width: 200%; margin-left: -100%;
	-moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
	-o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}
	
.onoffswitch-inner:before, .onoffswitch-inner:after {
	float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
	font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
	-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}
	
.onoffswitch-inner:before {
	content: "OFF";
	padding-left: 10px;
	background-color: #2FCCFF; color: #FFFFFF;
}
	
.onoffswitch-inner:after {
	content: "ON";
	padding-right: 10px;
	background-color: #EEEEEE; color: #999999;
	text-align: right;
}
	
.onoffswitch-switch {
	width: 18px; margin: 6px;
	background: #FFFFFF;
	border: 2px solid #999999; border-radius: 20px;
	position: absolute; top: 0; bottom: 0; right: 56px;
	-moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
	-o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s;
}
	
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
	margin-left: 0;
}
	
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
	right: 0px;
}
	
</style>

</head>
<body>


<div id="display"></div>
	
	
<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freeze";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, choice FROM choice";
$result = $conn->query($sql);



$row = $result->fetch_assoc();
if($row["choice"] =="off")
{
	echo "<img src=\"picOff.jpg\" border=0>"; 
}
if($row["choice"] =="on")
{
	echo "<img src=\"picOn.png\" border=0>";
}



?>


</body>
</html>