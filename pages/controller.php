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
        <link rel="stylesheet" type="text/css" href="../css/sidenav.css">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

	<script src="../jquery/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="../jquery/script.js"></script>








        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            /*
 * Style tweaks
 * --------------------------------------------------
 */
body {
  padding-top: 50px;
 
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
@media screen and (max-width: 768px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -33%;
  }

  .row-offcanvas-left.active {
    left: 33%;
  }

  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 33%;
    margin-left: 10px;
  }
}


/* Sidebar navigation */

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
		<div class="col-sm- col-md-3" id="sidebar" role="navigation">
     
           	<ul class="nav nav-sidebar">
		           
				        <li class="active"><a href="#">Overview</a></li>
              	<li><a href="kitchen.php"><img src="../source_files/kitchen.png" height="25" width="30" /> Kitchen</a></li>
              	<li><a href="lounge.php"><img src="../source_files/lounge.png" height="25" width="30" /> Lounge</a></li>
              	 <li><a href="bathroom.php"><img src="../source_files/bathroom.png" height="25" width="30" /> Bathroom</a></li>
             	  <li><a href="garage.php"><img src="../source_files/garage.png" height="25" width="30" /> Garage</a></li>
	               <li><a href="house.php"><img src="../source_files/house.png" height="25" width="30" /> House</a></li>
             	  <li><a href="bedroom.php"><img src="../source_files/bedroom.png" height="25" width="30" /> Bedroom</a></li> 
            </ul>
		</div><!--/span-->
        
<div class="col-sm- col-md-8 main">
 			<p class="visible-xs">
            	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><a href="../index.php"><i class="glyphicon glyphicon-chevron-left"></i></a></button>
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
             						<h3 class="left">Status</h3>
									<hr align="left" width="80%"/>
									<img src="../source_files/security.png" class="security" width="70" height="70">
									<p align="center">Security is 
					<?php  
$query3=mysql_query("select * from choice where id=4");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "OFF";
}
						else{
							echo "ON";
						}
						
						?>
<div class="security">
<input type="checkbox" name="security" class="security-checkbox" id="mysecurity"
<?php  
$query3=mysql_query("select * from choice where id=4");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";
}
?> />

      <?php
      $query3=mysql_query("select * from choice where id=8");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "\n<br/> Back door is unlocked";
}
      
?>

</div>
          
								</div><!--/row-->
								</div>
								</div><!--/.container-->
						</div>
		  </div>    
			</div>
		</div>
		</section>
	</div>
		
		
		</div></div><!--/span--></div></div>
        
    </body>
</html>