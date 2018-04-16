<!DOCTYPE html>
<head></head>
<body>

	<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
<head>
<title>Food House a Hotels and Restaurants Category Flat Bootstarp responsive Website Template|Portfolio :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food House Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link href="css/flashPulse.css" rel='stylesheet' type='text/css' />		
<script src="js/jquery.min.js"> </script>
<!--web-fonts-->
  <link href='http://fonts.googleapis.com/css?family=Niconne|Playball|Open+Sans:300italic,400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
	<!--start-header-->
	<div id="home" class="header">
			<!--logo-->
			<div class="header-top">
			<div class="container">
		<!--top-nav-->
			<div class="top-nav">
						<span class="menu two"> </span>
					<ul>
						<li><a href="home.php">Home</a></li> 
						<li><a href="about.php">About</a></li>
						<li><a href="cuisine.php">Cuisines</a></li>
						<li><a href="recipes.php">Recipes</a></li> 
						<!--<li><a href="blog.html">Blog</a></li> -->
						<li><a  href="gallery.php">Gallery</a></li> 
						<li class="lost"><a href="contact.php">Contact</a></li>
						<li><a href="recipeSearch.php">Search Recipe</a></li>
						
						<div id="userlogin" class="form1 active">
							<?php
								
								if(isset($_SESSION['admin_email'])){
									echo  "<a id='loginbtn' href='admintask.php'>Admin</a>&nbsp;&nbsp;&nbsp;<a id='loginbtn' href='process_logout.php'>Log out</a>&nbsp;&nbsp;&nbsp;<a id='' href='search.php'>Search</a>";
								}
							
								
								else if (isset($_SESSION['email']))
								{
									echo  "<a id='loginbtn' href='profile.php'>Profile</a>&nbsp;&nbsp;&nbsp;<a id='loginbtn' href='process_logout.php'>Log out</a>&nbsp;&nbsp;&nbsp;<a id='' href='search.php'>Search</a>";
								}
								
								else
								{
									echo "<a id='loginbtn' href='login.php'>Login</a>&nbsp;&nbsp;&nbsp;<a id='signupbtn' href='signup.php'>Sign Up</a>&nbsp;&nbsp;&nbsp;<a id='' href='search.php'>Search</a>";
								}
							?>
						</div>
					</ul>
				</div>
				<div class="clearfix"> </div>
		<!-- script-for-menu -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(200);
						});
					});
				</script>
		</div>
	<!--End-top-nav-script-->
				<div class="clearfix"> </div>
		</div>
		<div class="head-bg">
					<div class="logo three">
							<a href="home.php"><h1>RECIPE<span>House</span></h1></a>
					</div>
		</div>
		<!--/header-->
	
	<!--swipebox -->	
			<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
			<!--//swipebox Ends -->
			
				 
			    <div class='about-section'> 
		  		<div class='container'>
		        <h2>&nbsp;Convert Temperatures</h2>
  				</div>
		 		</div>
	
<form action='client.php' method='POST'>
Temperature:
<input type='text' name='temperature'>
<button type='submit' name='submit'>Fahrenheit To Celsius</button>

</form>

</body></html>

<?php
	
	if(isset($_POST['temperature'])){
		
		$tempFC=$_POST['temperature'];

		$url="http://localhost/RecipeHouse/indexRest.php?temperature=" . $tempFC;
		$client=curl_init($url);

		curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
		
		$response=curl_exec($client);
		//echo $response;
		$result=json_decode($response);

		echo $result->data;
	}

	 

?>
