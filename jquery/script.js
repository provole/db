$('.click').click(function () {
    var rawAmount = $('#request').val();
    var cleanAmount = rawAmount.split(':');
    var totalAmount = parseInt(cleanAmount[0] | 0) * 60 + parseInt(cleanAmount[1] | 0);
     $('#request').val(" ");

    var loop, theFunction = function () {

        totalAmount--;

        if (totalAmount == 0) {

            clearInterval(loop);
        }
        var minutes = parseInt(totalAmount/60);
        var seconds = parseInt(totalAmount%60);

        if(seconds < 10)
            seconds = "0"+seconds;
        $('p').text(minutes + ":" + seconds);
    };

    var loop  = setInterval(theFunction, 1000);

})


function checkLights(object) {

var a = {
	name: object.attr('name'),
	value: (object.attr("checked"))? "on": "off"
} 

$.ajax({
type: "POST",
url: "../ajax.php",
data: "value="+a.value+"&name="+a.name,
success: function(html){
$("#display").html(html).show();
}
});

}
$(document).ready(function(){
	$('#myonoffswitch').click(function(){
		checkLights($('#myonoffswitch'));
	});
	$("#mykopche").click(function() {
		checkLights($('#mykopche'));
	});
	$("#mylivingroom").click(function() {
		checkLights($('#mylivingroom'));
	});
	$("#mysecurity").click(function() {
		checkLights($('#mysecurity'));
	});
	$("#mybedroom").click(function() {
		checkLights($('#mybedroom'));
	});
	$("#myoutdoor").click(function() {
		checkLights($('#myoutdoor'));
	});
	$("#myfrontdoor").click(function() {
		checkLights($('#myfrontdoor'));
	});
	$("#mybackdoor").click(function() {
		checkLights($('#mybackdoor'));
	});
    $("#mybathroom").click(function() {
        checkLights($('#mybathroom'));
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


/* JQUERY FOR SLIDING MENU*/
$(document).ready(function () {


    //stick in the fixed 100% height behind the navbar but don't wrap it
    $('#slide-nav.navbar .container').append($('<div id="navbar-height-col"></div>'));

    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = '#page-content';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '80%';
    var menuneg = '-100%';
    var slideneg = '-80%';


    $("#slide-nav").on("click", toggler, function (e) {

        var selected = $(this).hasClass('slide-active');

        $('#slidemenu').stop().animate({
            left: selected ? menuneg : '0px'
        });

        $('#navbar-height-col').stop().animate({
            left: selected ? slideneg : '0px'
        });

        $(pagewrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });

        $(navigationwrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });


        $(this).toggleClass('slide-active', !selected);
        $('#slidemenu').toggleClass('slide-active');


        $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');


    });


    var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';


    $(window).on("resize", function () {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }


    });

});
/* END OF JQUERY FOR SLIDING MENU*/






    
















