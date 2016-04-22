<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Bootply snippet - Bootstrap Dashboard with Off-canvas Sidebar</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Example of the Bootstrap dashboard teplate with a  collapsible offcanvas sidebar. The left sidebar collaspes on smaller screens and can be toggled." />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        
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
.nav-sidebar {
  background-color: #f5f5f5;
  margin-right: -15px;
  margin-bottom: 20px;
  margin-left: -15px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a {
  color: #fff;
  background-color: #428bca;
}
			.nav-sidebar> li > .indicator{
				font-size: 20px;
				color: #111212;
				font-weight: bold;
			}
/*
 * Main content
 */

.main {
  padding: 20px;
  background-color: #fff;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}

        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        <div class="bgColor">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
</nav>

<div class="container-fluid">
	<div class="row row-offcanvas row-offcanvas-left">
		<div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
           	<ul class="nav nav-sidebar">
				<li><a class="indicator" href="#">Room</a></li>
				<li class="active"><a href="#">Overview</a></li>
              	<li><a href="http://bootstrapzero.com" target="_ext">Kitchen</a></li>
              	<li><a href="http://bootstrap.theme.cards" target="_ext">Lounge</a></li>
              	<li><a href="https://wrapbootstrap.com?ref=skelly" target="_ext">Bathroom</a></li>
            
             	 <li><a href="">Garage</a></li>
             	 <li><a href="">Bedroom</a></li>
	              <li><a href="">House</a></li>
             	
            </ul>
		</div><!--/span-->
        
<div class="col-sm- col-md-8 main">
 			<p class="visible-xs">
            	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
			</p>
          
		  <h1 class="page-header">
            Dashboard
            <p class="lead">(<a href="http://www.bootply.com/128936">with off-canvas sidebar</a>)</p>
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
		
		
		</div><div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
           	<ul class="nav nav-sidebar">
				<li><a class="indicator" href="#">Category</a></li>
				<li class="active"><a href="#">Overview</a></li>
              	<li><a href="http://bootstrapzero.com" target="_ext">Lighting</a></li>
              	<li><a href="http://bootstrap.theme.cards" target="_ext">Security</a></li>
              	<li><a href="https://wrapbootstrap.com?ref=skelly" target="_ext">Energy</a></li>
            
             	 <li><a href="">Monitoring</a></li>
             	 <li><a href="">Shading</a></li>
	      
            </ul>
		</div><!--/span--></div></div>
        
    </body>
</html>