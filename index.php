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
 

            <!-- Collect the nav links, forms, and other content for toggling -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="slide-nav">
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
     
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="search" placeholder="search" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
     
    <ul class="nav navbar-nav">
     <li class="active"><a href="#">Home</a></li>
     <li><a href="#about">About</a></li>
     <li><a href="#contact">Contact</a></li>
     <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
      <ul class="dropdown-menu">
       <li><a href="#">Action</a></li>
       <li><a href="#">Another action</a></li>
       <li><a href="#">Something else here</a></li>
       <li class="divider"></li>
       <li class="dropdown-header">Nav header</li>
       <li><a href="#">Separated link</a></li>
       <li><a href="#">One more separated link</a></li>
       <li><a href="#">Action</a></li>
       <li><a href="#">Another action</a></li>
       <li><a href="#">Something else here</a></li>
       <li class="divider"></li>
       <li class="dropdown-header">Nav header</li>
       <li><a href="#">Separated link</a></li>
       <li><a href="#">One more separated link</a></li>
       <li><a href="#">Action</a></li>
       <li><a href="#">Another action</a></li>
       <li><a href="#">Something else here</a></li>
       <li class="divider"></li>
       <li class="dropdown-header">Nav header</li>
       <li><a href="#">Separated link test long title goes here</a></li>
       <li><a href="#">One more separated link</a></li>
      </ul>
     </li>
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

<div class="controls">
<div class="container">
        <div class="row">
            <div class="col-md-6"><p><a href="#">Controls</a></p></div>
            <div class="col-md-6"><p><a href="house.php">View</a></p></div>
            <div class="col-md-6"><p><a href="#">Warnings</a></p></div>
            <div class="col-md-6"><p><a href="#">Visitors</a></p></div>
            <div class="col-md-6"><p><a href="#">Security</a></p></div>
            <div class="col-md-6"><p><a href="#">Settings</a></p></div>
         
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

</body>
</html>