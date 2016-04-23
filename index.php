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
<link rel="stylesheet" type="text/css" href="css/nav.css">
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
<div class="navbar navbar-default navbar-static-top" role="navigation" id="slide-nav">
  <div class="container">
   <div class="navbar-header">
    <a class="navbar-toggle"> 
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </a>
    <a class="navbar-brand" href="#"></a>
   </div>
   <div id="slidemenu">
     
    
    <ul class="nav navbar-nav">
    <a href="#"><li class="active"><img src="source_files/homeicon.png" height="30" alt="home"/></li></a> 
     <a href="pages/controller.php"><li class="active"><img src="source_files/offbtnn.png" height="30" alt="controls"/></li></a> 
     <a href="pages/controls.php"><li class="active"><img src="source_files/eye.png" height="30" alt="controls"/></li></a> 
    
    
    </ul>
          
   </div>
  </div>
 </div>
  

    <!-- Page Content -->

        <!-- /.row -->

        <!-- Projects Row -->


<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
		  <p id="message"></p>
			
		<p id="time"></p>

		<script>
			var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
} 

if(mm<10) {
    mm='0'+mm
} 

today = mm+'/'+dd+'/'+yyyy;
document.getElementById("time").innerHTML = today;
		</script>
		<p class="mainn">21°</p>
		
			</div>
	</div>
</div>


  
<script language="JavaScript"> 
var myDate = new Date(); 
  
  
/* hour is before noon */
if ( myDate.getHours() < 12 )  
{ 
    var c = "Good Morning";
    document.getElementById("message").innerHTML = c;
} 
else  /* Hour is from noon to 5pm (actually to 5:59 pm) */
if ( myDate.getHours() >= 12 && myDate.getHours() <= 17 ) 
{ 
    var b = "Good Afternoon";
    document.getElementById("message").innerHTML = b;
} 
else  /* the hour is after 5pm, so it is between 6pm and midnight */
if ( myDate.getHours() > 17 && myDate.getHours() <= 24 ) 
{ 
	var a = "Good evening";
    document.getElementById("message").innerHTML = a;
} 
else  /* the hour is not between 0 and 24, so something is wrong */
{ 
    document.write("I'm not sure what time it is!"); 
} 
  
/* remove the following in your live script. It is for testing */


  
</script> 

	
	
	
	
	
	
	

	

	
	
	
	


	 <div class="footer"><p>kappa</p></div>
</div>

</body>
</html>