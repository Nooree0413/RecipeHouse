<!DOCTYPE HTML>
<?php
	session_start();
?>

<html>
<head>
<title>Food House a Hotels and Restaurants Category Flat Bootstarp responsive Website Template|Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food House Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />		
<script src="js/jquery.min.js"> </script>
<!--web-fonts-->
  <link href='http://fonts.googleapis.com/css?family=Niconne|Playball|Open+Sans:300italic,400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<link href="css/flashPulse.css" rel='stylesheet' type='text/css' />	
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
						<li><a class="active" href="cuisine.php">CUISINES</a></li>
						<li><a  href="recipes.php">RECIPES</a></li> 
						 
						<!--<li><a href="single.php">SERVICES</a></li> -->
						<li><a href="gallery.php">GALLERY</a></li> 
						<li><a href="contact.php">Contact</a></li>
						
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
	</div>			
	
	<table border="4" cellpadding="10" width="100%">
	<caption>TYPES OF CUISINES</caption>
	<tr bgcolor="lightgrey"><th colspan="2">ITALIAN</th><th colspan="2" >INDIAN</th><th colspan="2" >TURKISH</th><th colspan="2" >LEBANESE</th> </tr>
	<tr bgcolor="#1BBC9B"><td colspan="2"><a href="CapreseSaladwithPestoSauce.html">Caprese Salad with Pesto Sauce</a></td><td colspan="2"><a href="Indian Spiced Potatoes with Chicken Thighs.html"> Indian Spiced Potatoes with Chicken Thighs</td><td colspan="2"><a href="menu.html">Turkish Salad</td><td colspan="2"><a href="menu.html">Shish Kebab</td> </tr>
	<tr bgcolor="lightgrey"><td colspan="2"><a href="Panzenella.html">Panzenella</a></td><td colspan="2"><a href="Vegan Garam Masala Carrot Soup.html"> Vegan Garam Masala Carrot Soup</td><td colspan="2"><a href="menu.html">Turkish Meatballs (Kofta)</td><td colspan="2"><a href="menu.html">Shawarma</td> </tr>
	<tr  bgcolor="#1BBC9B"><td colspan="2"><a href="Italian style greens (Ricetta tipica per verdure verdi).html">Italian Style Green</td><td colspan="2"><a href="menu.html">Bhapaa Aloo</td><td colspan="2"><a href="menu.html">Turkish Red Lentil Soup</td><td colspan="2"><a href="menu.html">Baklava</td> </tr>
	<tr bgcolor="lightgrey"><td colspan="2"><a href="menu.html">Focaccia Bread</td><td colspan="2"><a href="menu.html"> Banjari Gosht</td><td colspan="2"><a href="menu.html">Turkish Rice</td><td colspan="2"><a href="menu.html">Badem Tatlisi</td> </tr>
	<tr  bgcolor="#1BBC9B"><td colspan="2"><a href="menu.html">Pasta Carbonara</td><td colspan="2"><a href="menu.html">Chicken Stew and Appam</td><td colspan="2"><a href="menu.html">Turkish Spinach and Lentil Soup</td><td colspan="2"><a href="menu.html">Kebbe</td> </tr>
	<tr bgcolor="lightgrey"><td colspan="2"><a href="menu.html">Margherita Pizza</td><td colspan="2"><a href="menu.html">Kakori Kebab</td><td colspan="2"><a href="menu.html">Tabbouli / Tabbouleh Salad (Parsley Salad)</td><td colspan="2"><a href="menu.html">Lady Fingers</td> </tr>
	<tr bgcolor="#1BBC9B"><td colspan="2"><a href="menu.html">Mushroom Risotto</td><td colspan="2"><a href="menu.html">Hyderabadi Biryani</td><td colspan="2"><a href="menu.html">Hummus Amongus</td><td colspan="2"><a href="menu.html">Kefta</td> </tr>
	<tr bgcolor="lightgrey"><td colspan="2"><a href="menu.html">Pasta Con Pomodoro E Basilico</td><td colspan="2"><a href="menu.html">Dhokla</td><td colspan="2"><a href="menu.html">Turkish Cacik</td><td colspan="2"><a href="menu.html">Falafel</td> </tr>
	<tr bgcolor="#1BBC9B"><td colspan="2"><a href="menu.html">Tiramisu - The 'pick-me-up' cake</td><td colspan="2"><a href="menu.html">Sali Boti</td><td colspan="2"><a href="menu.html">Pita Bread</td><td colspan="2"><a href="menu.html">Sahlab</td> </tr>
	<tr bgcolor="lightgrey"><td colspan="2"><a href="menu.html">Panna Cotta With Raspberry Coulis</td><td colspan="2"><a href="menu.html"> Idli and Sambhar</td><td colspan="2"><a href="menu.html">Shakshouka</td><td colspan="2"><a href="menu.html">Fried Cauliflower Rolls</td> </tr>
	</table>
	
	
	
<!--/start-footer-->
	<div class= "footer">
		 <div class="container">                                                   
			<div class="col-md-3 footer-grid">
					<div class="logo two">
						<a href="home.php"><h3>Recipe<span>House</span></h3></a>
					</div>
				</div>
				<div class=" col-md-3 footer-grid footer-grid2">
					<div class="bottom-nav">
					       <h4>LEARN</h4>
							<ul>
							<li><a class="active" href="home.php">Home</a></li> 
						<li><a href="about.php">About</a></li>
						<li><a href="cuisine.php">CUISINES</a></li>
						<li><a href="recipes.php">RECIPES</a>	</li>
						<!--<li><a href="404.php">BLOG</a></li>--> 
						<li><a href="gallery.php">GALLERY</a></li> 
						<li class="lost"><a href="contact.php">Contact</a></li>
							<div class="clearfix"> </div>
						</ul>
					 </div>
				</div>
				<div class=" col-md-3 footer-grid">
					<div class="Office Address">
				        <h4>ADDRESS</h4>
				       <ul class="bottom-icons">
							<li><a class="home" href="#"><span> </span></a>Food Recipe,Mauritius</li>
							<li><a class="mail" href="mailto:info@foodrecipe.com"><span> </span>info@foodrecipe.com</a></li>
							<li><a class="mbl" href="#"><span> </span></a>5 758 6974</li>	
							<div class="clearfix"> </div>	
						</ul>
					 </div>
				</div>
				<div class="col-md-3 footer-grid">
					<h4></h4>
						<div class="support">
						   <input type="text" class="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == 'Enter email to reset it') {this.value = 'Enter email to reset it';}">
						<input type="submit" value="SUBMIT" class="botton">
						     						     <p>Subscribe to our newsletter.Delivered every Wednesday, our weekly update is the best way to get a first look at brand-new recipes. Just enter your e-mail address, then sit back and receive all the food-inspiration you'll ever need.</p>
						</div>
				    </div>
			    	<div class="clearfix"> </div>	
				</div>
			</div>
			<div class="copy-right">
			  <div class="container">
					 <p>Copyright &copy; 2015 All Rights Reserved Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
			   </div>		

			</div>	
			<!--start-smoth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>