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