<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
			<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Smart Home | Status</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="stylesheet" type="text/css" href="../css/nav.css"/>
<link rel="stylesheet" type="text/css" href="../css/button.css">
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript"src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">

</script>
	<script src="../jquery/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="../jquery/script.js">

</script>



</head>
<body>
	<!-- Static navbar -->
 <div class="bgColor">

            <!-- Collect the nav links, forms, and other content for toggling -->
<div class="navbar navbar-default navbar-static-top" role="navigation" id="slide-nav">
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
      <a href="../index.php"><li><img src="../source_files/homeicon.png" height="30"/></li></a> 
     <a href="controller.php"><li><img src="../source_files/offbtnn.png" height="30"/></li></a> 
     <a href="controls.php"><li class="active"><img src="../source_files/eye.png" height="30" alt="controls"/></li></a> 
    
    
    </ul>
          
   </div>
  </div>
 </div>
  

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div>
	</div>
        <!-- /.row -->

        <!-- Projects Row -->

	



	

	<section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 text-center">

          <div class="row">
            <div class="col-md-4">            
              <div class="thumbnail">
                <div class="caption" id="depends">
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
echo "<style>#depends{background:#ff5252;color:#fff;}</style>OFF";

}
						else{
							 echo "<style>#depends{background:#5CFF33;color:#fff;}</style>ON";
						}
						
	
			
?>
					</p>
		
					
					<br><hr align="left" width="80%"/>
					<p style="color:red"><b>Warnings and recommendations</b></p>
					
					<!-- <p align="left">There are 2 doors unlocked</p> -->
										<?php  

						$query3=mysql_query("select * from choice where id=7");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "\n<br/><b> Front door is unlocked</b>";
}
				
				
						
			$query3=mysql_query("select * from choice where id=8");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "\n<br/> <b>Back door is unlocked</b>";
}
						?>


				  </div>
                  
                </div>
              </div>

              <div class="col-md-4">            
                <div class="thumbnail">
                  <div class="caption">
             
                   <h3 class="left">Locks</h3>
                   <hr align="left" width="80%"/>
					<img class="security" src="../source_files/Graphicloads-Colorful-Long-Shadow-Lock%20(1).ico" width="40" height="40" align="left"> <p>Front door is <?php  
$query3=mysql_query("select * from choice where id=7");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "<b>unlocked</b>";

}
            else{
              echo "<b>locked</b>";
            }
 
?></p>

<div class="frontdoor">
<input type="checkbox" name="frontdoor" class="frontdoor-checkbox" id="myfrontdoor"
<?php  
$query3=mysql_query("select * from choice where id=7");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";
}
?> />



	
	
<label class="frontdoor-label" for="myfrontdoor">
<div class="frontdoor-inner"></div>
<div class="frontdoor-switch"></div>
</label>
</div>

					  
					  <hr align="left" width="80%"/>
					  <img class="security" src="../source_files/Graphicloads-100-Flat-Unlock.ico" width="40" height="40" align="left">
						   <p>Back door is <?php  
$query3=mysql_query("select * from choice where id=7");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "<b>unlocked</b>";

}
            else{
              echo "<b>locked</b>";
            }
 
?></p>
						   
					  <div class="backdoor">
<input type="checkbox" name="backdoor" class="backdoor-checkbox" id="mybackdoor"
<?php  
$query3=mysql_query("select * from choice where id=8");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";
}
?> />



	
	
<label class="backdoor-label" for="mybackdoor">
<div class="backdoor-inner"></div>
<div class="backdoor-switch"></div>
</label>
</div>
					  
					  
					  
					  
                    </div>
                   
                  </div>
                </div>
		<div class="col-md-4">            
                  <div class="thumbnail">
                    <div class="caption">
                     <h3 class="left">Heating</h3>
                      	 <hr align="left" width="80%"/>
							
						<?php  
$query3=mysql_query("select * from choice where id=13");

$row = mysql_fetch_array($query3);
  echo '<h1>'.$row['choice'].'°'.'</h1>';

 
?>	
						
                      </div>
                   
                    </div>
                  </div>
              </div>
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
                  <div class="col-md-6">            
                    <div class="thumbnail">
                      <div class="caption">
                      <p align="right">
                       <span style="float:left; font-weight: bold; font-size:15px" ="left">Home/Work MODE</span>
                       Whole house • Lighting</p>
					  <i>By switching to work mode, all house lighting will be switched off to save energy.</i>
					  <div class="away">
<input type="checkbox" name="away" class="away-checkbox" id="myaway"
<?php  
$query3=mysql_query("select * from choice where id=12");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";

}
else{
echo "turning down heat";	
}

?> />



	
	
<label class="away-label" for="myaway">
<div class="away-inner"></div>
<div class="away-switch"></div>
</label>
</div></P>
                        </div>
                       
                      </div>
                    </div>        
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </section>
	
	
	
	
	
	
	
	
	
	
	
<!--
	
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
	
<div class="kopche">
<input type="checkbox" name="kopche" class="mykopche-checkbox" id="mykopche"
<?php  
$query3=mysql_query("select * from choice where id=2");
$query4=mysql_fetch_array($query3);
if($query4['choice']=="off")
{
echo "checked";
}
?> />



	
	
<label class="kopche-label" for="mykopche">
<div class="kopche-inner"></div>
<div class="kopche-switch"></div>
</label>
</div> -->
	
	

	
	
	
	
	
	<?php
	$link_address = 'house.php';
echo "<a href='$link_address'>View House</a>";
?>
	 <div class="footer"><p>kappa</p></div>
</div>
</body>
</html>