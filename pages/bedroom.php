<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Example of the Bootstrap dashboard teplate with a  collapsible offcanvas sidebar. The left sidebar collaspes on smaller screens and can be toggled." />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/nav.css">
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
	font-family: serif;
  
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
    <a class="navbar-brand" href="#">Project name</a>
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
		<div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
           	<ul class="nav nav-sidebar">
				<li><a class="indicator" href="#">Room</a></li>
				<li><a href="overview.php">Overview</a></li>
              	<li><a href="#" target="_ext">Kitchen</a></li>
              	<li><a href="http://bootstrap.theme.cards" target="_ext">Lounge</a></li>
              	<li><a href="https://wrapbootstrap.com?ref=skelly" target="_ext">Bathroom</a></li>
            
             	 <li><a href="">Garage</a></li>
             	 <li class="active"><a href="">Bedroom</a></li>
	              <li><a href="">House</a></li>
             	
            </ul>
		</div><!--/span-->
        
<div class="col-sm- col-md-8 main">
 			<p class="visible-xs">
            	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
			</p>
          
		  <h1 class="page-header">
            Dashboard
           
          </h1>

          <div class="row placeholders">
  
       

          	<section id="portfolio" class="portfolio">
    			<div class="container">
      				<div class="row">
        				<div class="col-lg-10 col-lg-offset-1 text-center">

          					<div class="row">
            					<div class="col-md-4">            
              						<div class="thumbnail">
                					<div class="caption">
                  <!-- DISPLAYS STATUS IF ANYTHING IS UNLOCKED-->
										
             					 <hr align="left" width="80%"/>
					<img class="security" src="../source_files/lightoff.png" width="40" height="40" align="left"> <p>Bedroom light is
					  
					  <?php  
$query3=mysql_query("select * from choice where id=5");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "OFF";
}
						else{
							echo "ON";
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

<hr>

	
	
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
						
          <div class="col-md-4">            
                          <div class="thumbnail">
                          <div class="caption">
                  <!-- DISPLAYS STATUS IF ANYTHING IS UNLOCKED-->
                    
                       <hr align="left" width="80%"/>
          <img class="security" src="../source_files/lightoff.png" width="40" height="40" align="left"> <p>Bedroom light is
            
            <?php  
$query3=mysql_query("select * from choice where id=5");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "OFF";
}
            else{
              echo "ON";
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


                </div><!--/row-->
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