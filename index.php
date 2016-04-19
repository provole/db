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
	<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript"src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">

</script>
	<script src="jquery/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="jquery/script.js">

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
<div class="controls">
<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4"><p><img src="source_files/offBtnn.png"class="img-responsive center-block" height="50" width="50"><a href="#">Controls</a></p></div>
             <div class="col-xs-12 col-sm-6 col-md-4"><p><img src="source_files/offBtnn.png"class="img-responsive center-block" height="50" width="50"><a href="#">View</a></p></div>
			 <div class="col-xs-12 col-sm-6 col-md-4"><p><img src="source_files/offBtnn.png"class="img-responsive center-block" height="50" width="50"><a href="#">Warnings</a></p></div>
			 <div class="col-xs-12 col-sm-6 col-md-4"><p><img src="source_files/offBtnn.png"class="img-responsive center-block" height="50" width="50"><a href="#">Visitors</a></p></div>
			 <div class="col-xs-12 col-sm-6 col-md-4"><p><img src="source_files/offBtnn.png"class="img-responsive center-block" height="50" width="50"><a href="#">Security</a></p></div>
			 <div class="col-xs-12 col-sm-6 col-md-4"><p><img src="source_files/offBtnn.png"class="img-responsive center-block" height="50" width="50"><a href="#">Settings</a></p></div>
			
         
        </div>
    </div>
 </div> 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	
	
	
	

	
	
	
	
	
	<?php
	$link_address = 'house.php';
echo "<a href='$link_address'>View House</a>";
?>
	 <div class="footer"><p>kappa</p></div>
</div>
</body>
</html>