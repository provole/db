<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Bedroom | Smart Home</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Example of the Bootstrap dashboard teplate with a  collapsible offcanvas sidebar. The left sidebar collaspes on smaller screens and can be toggled." />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
         <link rel="stylesheet" type="text/css" href="../css/sidenav.css">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

	<script src="../jquery/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="../jquery/script.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>







        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            /*
 * Style tweaks
 * --------------------------------------------------
 */
body {
  padding-top: 50px;
  margin: 0;

  
}
footer {
  padding-left: 15px;
  padding-right: 15px;
  background-color: #fff;
}
			.navbar-inverse{
				background: -moz-linear-gradient(220deg, rgba(142,184,247,1) 24%, rgba(30,57,115,1) 100%); 
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(30,57,115,1)), color-stop(76%, rgba(142,184,247,1)));  safari4+,chrome 
background: -webkit-linear-gradient(220deg, rgba(142,184,247,1) 24%, rgba(30,57,115,1) 100%); 
background: -o-linear-gradient(220deg, rgba(142,184,247,1) 24%, rgba(30,57,115,1) 100%); 
background: linear-gradient(230deg, rgba(142,184,247,1) 24%, rgba(30,57,115,1) 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e3973', endColorstr='#8eb8f7',GradientType=1 );  
			}
/*
 * Off Canvas
 * --------------------------------------------------
 */

        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        <div class="bgColor">
       <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="slide-nav">
  <div class="container">
   <div class="navbar-header">
    <a class="navbar-toggle"> 
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </a>

   </div>
   <div id="slidemenu">
     
    
    <ul class="nav navbar-nav">
    <a href="../index.php"><li class="active"><img src="../source_files/homeicon.png" height="30" alt="home"/></li></a> 
     <a href="controller.php"><li class="active"><img src="../source_files/offbtnn.png" height="30" alt="controls"/></li></a> 
     <a href="controls.php"><li class="active"><img src="../source_files/eye.png" height="30" alt="controls"/></li></a> 
    
    
    </ul>
          
   </div>
  </div>
 </div>
<div class="container-fluid">
  <div class="row row-offcanvas row-offcanvas-left">
    <div class="col-sm- col-md-3" id="sidebar" role="navigation">
     
            <ul class="nav nav-sidebarTwo">
               
                <li class="active"><a href="#">Room</a></li>
                <li><a href="controllerTwo.php">Category</a></li>

                
            </ul>
    </div><!--/span-->
    </div>
    </div>
<div class="container-fluid">
	<div class="row row-offcanvas row-offcanvas-left">
		<div class="col-sm-3 col-md-3" id="sidebar" role="navigation">
           	<ul class="nav nav-sidebar">
               
           
                <li><a href="kitchen.php"><img src="../source_files/kitchen.png" height="25" width="30" /> Kitchen</a></li>
                <li><a href="lounge.php"><img src="../source_files/lounge.png" height="25" width="30" /> Lounge</a></li>
                 <li><a href="bathroom.php"><img src="../source_files/bathroom.png" height="25" width="30" /> Bathroom</a></li>
                <li><a href="garage.php"><img src="../source_files/garage.png" height="25" width="30" /> Garage</a></li>
   
                <li class="active"><a href="#"><img src="../source_files/bedroom.png" height="25" width="30" /> Bedroom</a></li> 
            </ul>
		</div><!--/span-->
        
<div class="col-sm- col-md-8 main">
 			<p class="visible-xs">
            	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
			</p>
          
		  <h3 class="page-header">
            Bedroom
           
          </h3>
          <i>Welcome to the bedroom. To turn off/on lights use the switch. To open blinds click turn. If you wish to set a timer to set lights on/off input the amount in the text field. </i>
          <hr width="80%";

          <div class="row placeholders">
  
       

          	<section id="dashboard" class="dashboard">
    			<div class="container">
      				<div class="row">
        				<div class="col-lg-10 col-lg-offset-1 text-center">

          					<div class="row">
            					<div class="col-md-4">            
              						<div class="thumbnail">
                					<div class="caption">
                  <!-- DISPLAYS STATUS IF ANYTHING IS UNLOCKED-->
										
             					 <hr align="left" width="80%"/>
					 <p>Bedroom light is
					  
					  <?php  
$query3=mysql_query("select * from choice where id=5");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo 'OFF <input type="hidden" id="lightOppositeValue" value="on">';
echo "<img class='security' src='../source_files/lightoff.png' width='40' height='40' align='left'>";
}
						else{
							echo 'ON <input type="hidden" id="lightOppositeValue" value="off">';
              echo "<img class='security' src='../source_files/lighton.png' width='40' height='40' align='left'>";
						}
?>
					 
					  
					  
					  
					  
					  </p><div class="bedroom">
<input type="checkbox" name="bedroom" class="bedroom-checkbox" id="mybedroom"
<?php  
$query3=mysql_query("select * from choice where id=5");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";
}
?> />

<div id="countdown"></div>
<div id="notifier"></div>

<script type="text/javascript">
function startTimer() {
  userInput = document.getElementById('userTime').value;
    if(userInput.length == 0){
    alert("Please enter a value");
  } else {
  var numericExpression = /^[0-9]+$/;
  if(!userInput.match(numericExpression)){
  alert("Please enter a number")
  } else {

   function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }
        
  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + x%60;
  }
        
  function setTimer( remain, actions ) {
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));         
       actions[remain] && actions[remain]();
       (remain -= 1) >= 0 && setTimeout(arguments.callee, 1000);
    })();
  }

  setTimer(userInput, {
    10: function () { display("notifier", "Just 10 seconds to go"); },
     5: function () { display("notifier", "5 seconds left");        },
     0: function () { 
          display("notifier", "Time is up");

          $.ajax({
            type: "POST",
            url: "../ajax.php",
            data: "value="+$('#lightOppositeValue').val()+"&name=bedroom"
            });
        }
     
  }); 
}  
}
}
</script>
Please Enter A Number: <input type="text" id="userTime" />
<input type="button" value="Go" onclick="startTimer()" />	
	
<label class="bedroom-label" for="mybedroom">
<div class="bedroom-inner"></div>
<div class="bedroom-switch"></div>
</label>
</div>
	  <style>
  .toggler {
    width: 500px;
    height: 200px;
  }
  #button {
    padding: .5em 1em;
    text-decoration: none;
  }
  #effect {
    position: relative;
    width: 240px;
    height: 135px;
    padding: 0.4em;
  }
  #effect h3 {
    margin: 0;
    padding: 0.4em;
    text-align: center;
  }
  </style>
										

										
										
										
										
										
										
										
										
										
    <h3>Blinds</h3>										
<div class="toggler">
  <div id="effect" class="ui-widget-content ui-corner-all">

   <img src="../source_files/blinds.png"  height="150" width="150"/>
  </div>
</div>
 
<select name="effects" id="effectTypes">
  <option value="blind">Blind</option>

</select>
 
<button id="button" class="ui-state-default ui-corner-all">Switch</button>
          
								</div><!--/row-->
								</div>
								</div>
						
          
                </div>
                </div>

																				 <script>
  $(function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();
 
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 0 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }
 
      // run the effect
      $( "#effect" ).toggle( selectedEffect, options, 500 );
    };
 
    // set effect from select menu value
    $( "#button" ).click(function() {
      runEffect();
    });
  });
  </script>
          
						</div>
		  </div>    
			</div>
					
					<div class="row">
						<div class="col-md-4">
							
						</div>
					</div>
					
					
					
		</div>
		</section>
	</div>
		
		
		</div><!--/span--></div></div>
        
    </body>
</html>