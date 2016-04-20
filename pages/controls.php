<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
			<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Smart Home</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
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
     <li class="active"><a href="#">Home</a></li>
     <li><a href="#about">About</a></li>
     <li><a href="#contact">Contact</a></li>
    
    
    </ul>
          
   </div>
  </div>
 </div>
  

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                </h1>
            </div>
        </div>
	</div>
        <!-- /.row -->

        <!-- Projects Row -->

	
<div class="container">
    <div class="row">
      <div class="span4"></div>
        <div class="span4" ><img class="img-responsive center-block img-circle" src="http://placehold.it/350x150"/></div>
      <div class="span4"></div>
    </div>
</div>
	
<hr />	

	

	<section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 text-center">

          <h2>Work</h2>
          <hr class="small">
          <div class="row">
            <div class="col-md-4">            
              <div class="thumbnail">
                <div class="caption">
                  
             		<h3 class="left">Status</h3>
					<hr class="small"/>

                  </div>
                  <img src="portfolio_pics/forecaster.png" alt="...">
                </div>
              </div>

              <div class="col-md-4">            
                <div class="thumbnail">
                  <div class="caption">
                    <h4>PHP</h4>
                    <p>This is a PHP web application that allows the user to search movies from the database.</p>
                    <p><a href="https://selene.hud.ac.uk/u1350847/ASSIGN1/index.php" class="label label-danger" rel="tooltip" title="Open">Open</a>
                    </div>
                    <img src="portfolio_pics/cinema.jpg" alt="...">
                  </div>
                </div>
              </div>
              <div class="row">

                <div class="col-md-6">            
                  <div class="thumbnail">
                    <div class="caption">
                      
                      <p>A responsive website that allows Kirklees residents to vote for or against, and share opinions on local political and social issues. The website features a central place for users to discuss, read local media coverage and view the most popular social media comments about an issue.</p>
                      <p><a href="http://standpoint-fruttauro.rhcloud.com" class="label label-danger" rel="tooltip" title="Open">Open</a>
                      </div>
                      <img src="aboutMePic/datacopy.png" alt="...">
                    </div>
                  </div>


                  <div class="col-md-6">            
                    <div class="thumbnail">
                      <div class="caption">
                        <h4>HTML CSS Javascript</h4>
                        <p>For my Web Programming Assignment 2 I had to build a film recommendation engine on the web. The user can enter preferences such as genre, year of release etc. and then provide suggestions.</p>
                        <p><a href="https://selene.hud.ac.uk/u1350847/assign2/index.html" class="label label-danger" rel="tooltip" title="Open">Open</a>
                        </div>
                        <img src="portfolio_pics/javascript.png" alt="...">
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