<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Lighting | Smart Home</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Example of the Bootstrap dashboard teplate with a  collapsible offcanvas sidebar. The left sidebar collaspes on smaller screens and can be toggled." />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/nav.css">
        <link rel="stylesheet" type="text/css" href="../css/sidenav.css">
        <link rel="stylesheet" type="text/css" href="../css/button.css">
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
               
                <li><a href="controller.php">Room</a></li>
                <li class="active"><a href="#">Category</a></li>

                
            </ul>
    </div><!--/span-->
    </div>
    </div>

</div>
<div class="container-fluid">
	<div class="row row-offcanvas row-offcanvas-left">
		<div class="col-sm-3 col-md-3" id="sidebar" role="navigation">
     
           	<ul class="nav nav-sidebar">
		           
				     
              	<li><a href="heating.php"><img src="../source_files/heating.png" height="25" width="30" /> Heating</a></li>
                <li class="active"><a href="lighting.php"><img src="../source_files/lights.png" height="25" width="30" /> Lighting</a></li>
                 <li><a href="access.php"><img src="../source_files/bathroom.png" height="25" width="30" /> Access</a></li>
                <li><a href="alarm.php"><img src="../source_files/alarm.png" height="25" width="30" /> Alarm</a></li>
                 <li><a href="energy.php"><img src="../source_files/energ.png" height="25" width="30" /> Energy</a></li>
                <li><a href="monitoring.php"><img src="../source_files/monitoring.png" height="25" width="30" /> Monitoring</a></li> 
        
            </ul>
		</div><!--/span-->
        
<div class="col-sm- col-md-8 main">
 			<p class="visible-xs">
            	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><a href="../index.php"><i class="glyphicon glyphicon-chevron-left"></i></a></button>
			</p>
          
		  <h1 class="page-header">
            Lighting
           
          </h1>

          <div class="row placeholders">
  
       

          	<section id="dashboard" class="dashboard">
    			<div class="container">
      				           <div class="row">

                

                  <div class="col-md-4">            
                <div class="thumbnail">
                  <div class="caption">
             
                   <h3 class="left">Lighting</h3>
  


                   <hr align="left" width="80%"/>
           <p align="left">Kitchen light is
            
            <?php  
$query3=mysql_query("select * from choice where id=2");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "OFF";
echo "<img src='../source_files/lightoff.png' height='40' width='40' align='right'";
}
            else{
              echo "ON";
              echo "<img src='../source_files/lighton.png' height='40' width='40' align='right'";
            }
?>
            
            
            
            
            
            </p><div class="kopche">
<input type="checkbox" name="kopche" class="kopche-checkbox" id="mykopche"
<?php  
$query3=mysql_query("select * from choice where id=2");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";
}
else{
  $query3=mysql_query("select * from choice where id=12");
    $query4=mysql_fetch_array($query3);
    if($query4['choice']=="off"){
      echo "checked";
      

    }

}
?> />



  
  
<label class="button-label" for="mykopche">
<div class="button-inner"></div>
<div class="button-switch"></div>
</label>
</div>
  
            <hr align="left" width="80%"/>
            
               <p align="left">Living room light is 
 <?php  
$query3=mysql_query("select * from choice where id=3");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "OFF";
echo "<img src='../source_files/lightoff.png' height='40' width='40' align='right'";

}
            else{
              echo "ON";

              echo "<img src='../source_files/lighton.png' height='40' width='40' align='right'";
            }
?>

               </p><div class="livingroom">
<input type="checkbox" name="livingroom" class="livingroom-checkbox" id="mylivingroom"
<?php  
$query3=mysql_query("select * from choice where id=3");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";
}
else{
  $query3=mysql_query("select * from choice where id=12");
    $query4=mysql_fetch_array($query3);
    if($query4['choice']=="off"){
      echo "checked";
    }

}
?> />



  
  
<label class="button-label" for="mylivingroom">
<div class="button-inner"></div>
<div class="button-switch"></div>
</label>
</div>
           


                    </div>
                   
                  </div>
                </div>
                <div class="col-md-4">            
                <div class="thumbnail">
                  <div class="caption">
             
                   <h3 class="left">Lighting</h3>
  


        
  
          
            
 
            <hr align="left" width="80%"/>
           
               <p align="left">Bedroom light is 
                <?php  
$query3=mysql_query("select * from choice where id=5");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "OFF";
echo "<img src='../source_files/lightoff.png' height='40' width='40' align='right'";

}
            else{
              echo "ON";

              echo "<img src='../source_files/lighton.png' height='40' width='40' align='right'";
            }
?></p>
                                    <div class="bedroom">
<input type="checkbox" name="bedroom" class="bedroom-checkbox" id="mybedroom"
<?php  
$query3=mysql_query("select * from choice where id=5");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";
}
else{
  $query3=mysql_query("select * from choice where id=12");
    $query4=mysql_fetch_array($query3);
    if($query4['choice']=="off"){
      echo "checked";
    }

}
?> />



  
  
<label class="button-label" for="mybedroom">
<div class="button-inner"></div>
<div class="button-switch"></div>
</label>
</div>

            
            
            
            <hr align="left" width="80%"/>
          <p align="left">Outdoor light is 
 <?php  
$query3=mysql_query("select * from choice where id=6");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "OFF";
echo "<img src='../source_files/lightoff.png' height='40' width='40' align='right'";
}
            else{
              echo "ON";

            echo "<img src='../source_files/lighton.png' height='40' width='40' align='right'";
            }
?>
          </p>
                        <div class="outdoor">
<input type="checkbox" name="outdoor" class="outdoor-checkbox" id="myoutdoor"
<?php  
$query3=mysql_query("select * from choice where id=6");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";

}
else{
  $query3=mysql_query("select * from choice where id=12");
    $query4=mysql_fetch_array($query3);
    if($query4['choice']=="off"){
      echo "checked";
    }

}
?> />



  
  
<label class="button-label" for="myoutdoor">
<div class="button-inner"></div>
<div class="button-switch"></div>
</label>
</div>


                    </div>
                   
                  </div>
                </div>
		  </div>    
			</div>
		</div>
		</section>
	</div>
		
		
		</div></div><!--/span--></div></div>
        
    </body>
</html>