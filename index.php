<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title>Smart Home</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript"src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">

</script>
	<script src="jquery/jquery-2.2.0.min.js"></script>
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

</head>
<body>
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch"
<?php  
$query3=mysql_query("select * from choice where id=1");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";
}
?> />



	
	
<label class="onoffswitch-label" for="myonoffswitch">
<div class="onoffswitch-inner"></div>
<div class="onoffswitch-switch"></div>
</label>
</div>

<div id="display"><img src="picOff.jpg" border="0">
</div>
	
	
	
	
	

	
	
	
	
	
	<?php
	$link_address = 'house.php';
echo "<a href='$link_address'>View House</a>";
?>

</body>
</html>