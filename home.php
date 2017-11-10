<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
	session_start();
?>
<html>
<head>
<title>Food House a Hotels and Restaurants Category Flat Bootstarp responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/.php; charset=utf-8" />
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
<link href="css/loginForm.css" rel='stylesheet' type='text/css' />
<!--<body onLoad="alert('Welcome to Recipe House')"
onUnload="alert('Thank you visitiong our website!')">-->
</head>
<body>
	<!--start-header-->
	<div id="home" class="header">
			<!--logo-->
			<div class="header-top">
			<div class="container">
		<!--top-nav-->
			<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li><a href="home.php">Home</a></li> 
						<li><a href="about.php">About</a></li>
						<li><a href="cuisine.php">CUISINES</a></li>
						<li><a href="recipes.php">RECIPES</a>	</li>
						<!--<li><a href="404.php">BLOG</a></li> -->
						<li><a href="portfolio.php">GALLERY</a></li> 
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
					
					</div>
						<div class="clearfix"> </div>
					</ul>
					
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
	<!--/header-->
</div>
<!--start-slider-->
	<div class="slider-bg">
				<div class="side wow bounceInRight" data-wow-delay="0.7s">
					 <div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider4">
									<li>
										<img src="images/bg4.jpg" class="img-responsive" alt="" />
										<div class="caption1">
										<div class="logo">
										<marquee><a href="home.php"><h1>RECIPE<span>House</span></h1></a></marquee>
										</div>
											<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>	
											<p>We offer the best recipes for our users.<p>
										</div>
									</li>
									<li>
									<img src="images/bg5.jpg" class="img-responsive" alt="" />
									  <div class="caption1">
										<div class="logo">
										<marquee><a href="home.php"><h1>RECIPE<span>House</span></h1></a></marquee>
										</div>
										<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>	
											<p>We offer the best recipes for our users.<p>
										</div>
									</li>
									<li>
									<img src="images/bg6.jpg" class="img-responsive" alt="" />
									<div class="caption1">
									<div class="logo">
									<marquee><a href="home.php"><h1>RECIPE<span>House</span></h1></a></marquee>
									</div>
										<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>
										<p>We offer the best recipes for our users.<p>	
									</div>										
									</li>
									
									<li>
									<img src="images/bg7.jpg" class="img-responsive" alt="" />
									<div class="caption1">
									<div class="logo">
									<marquee><a href="home.php"><h1>RECIPE<span>House</span></h1></a></marquee>
									</div>
										<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>
										<p>We offer the best recipes for our users.<p>	
									</div>										
									</li>
									
									<li>
									<img src="images/bg8.jpg" class="img-responsive" alt="" />
									<div class="caption1">
									<div class="logo">
									<marquee><a href="home.php"><h1>RECIPE<span>House</span></h1></a></marquee>
									</div>
										<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>
										<p>We offer the best recipes for our users.<p>	
									</div>										
									</li>
									
									<li>
									<img src="images/bg9.jpg" class="img-responsive" alt="" />
									<div class="caption1">
									<div class="logo">
									<marquee><a href="home.php"><h1>RECIPE<span>House</span></h1></a></marquee>
									</div>
										<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>
										<p>We offer the best recipes for our users.<p>	
									</div>										
									</li>
									
									<li>
									<img src="images/bg10.jpg" class="img-responsive" alt="" />
									<div class="caption1">
									<div class="logo">
									<marquee><a href="home.php"><h1>RECIPE<span>House</span></h1></a></marquee>
									</div>
										<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>
										<p>We offer the best recipes for our users.<p>	
									</div>										
									</li>
									
									<li>
									<img src="images/bg11.jpg" class="img-responsive" alt="" />
									<div class="caption1">
									<div class="logo">
									<marquee><a href="home.php"><h1>RECIPE<span>House</span></h1></a></marquee>
									</div>
										<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>
										<p>We offer the best recipes for our users.<p>	
									</div>										
									</li>
								 </ul>
							</div>
						</div>
					</div>	
				<!--- banner Slider starts Here --->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
				<div class="clearfix"> </div>
</div>
		<!--start-welcome-->
		<div class="welcome-section">
		   <div class="container">
				 <div class="wel-grid">
				   <div class="col-md-4 welcome-text">
					   <h3>Welcome</h3>
					   <h4>TO OUR RECIPE SITE !</h4>
					   <p>Cooking is not difficult. Everyone has taste, even if they don't realize it. Even if you're not a great chef, there's nothing to stop you understanding the difference between what tastes good and what doesn't.<br/>We hope your visit to this site will be a productive and informative one..</p>
				   </div>
					<div class="col-md-8 welcome-img">
					   <img src="images/giphy.gif" class="img-responsive" alt="" />
					</div>
				   <div class="clearfix"> </div>
			   </div>
			    <div class="about-grid">
				   <div class="col-md-4 about-img">
					   <img src="images/bolognaiseAubergine.jpg" class="img-responsive" alt="" />
					</div>
					<div class="col-md-8 about-text">
					   <h3>About</h3>
					   <h4>OUR RECEIPE SITE!</h4>
					   <p>Thank you for stopping by! We love to share wholesome and delicious recipes, perfect for home cooked family meals.</p>
				   </div>
				   <div class="clearfix"> </div>
			   </div>
		    </div>
		</div>
		<!--start-team-->
		   <div class="team-section"> 
		   <div class="container">
				<div class="team">
				    <div class="col-md-4 team-left">
					    <h3>Categories Of Recipes</h3>
					</div>
					 <div class="col-md-8 team-right">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-1">
									<div class="ch-info">
										<h3>Italian</h3>
										<a href="cuisine.php">View on Cuisines</a>
									</div>
								</div>
								<h4>ITALIAN DISHES</h4>
							 <p>Pizzas,Pastas,Lasagnas…</p>
							 <a class="more" href="menu.php">More Info </a>
							</li>
							<li>
								<div class="ch-item ch-img-2">
									<div class="ch-info">
										<h3>CHINESE</h3>
										<a href="cuisine.php">View on Cuisines</a>
									</div>
								</div>
								<h4>CHINESE RECIPES</h4>
									 <p>Noodles,Chow Mein…</p>
									 <a class="more" href="menu.php">More Info </a>
							</li>
							<li>
								<div class="ch-item ch-img-3">
									<div class="ch-info">
										<h3>INDIAN</h3>
										<a href="cuisine.php">View on Cuisines</a>
									</div>
								</div>
								<h4>INDIAN RECIPES</h4>
									 <p>Aloo Matar,Biryani...</p>
									 <a class="more" href="menu.php">More Info </a>
							</li>
						<div class="clearfix"> </div>
					 </div>
					 <div class="clearfix"> </div>
				</div>
			</div>
		   </div>

		<!--start-blog-->
		<div class="blog-section">
		   <div class="container">
		         <h3>Blog</h3>
				 <div class="blog">
				   <div class="col-md-4 blog-text">
					  <!-- <h5>THU 14 May, 2015</h5>-->
					   <a href="recipes.php"><h4>Sushi</h4></a>
					   <p>Sushi (すし, 寿司, 鮨?) is a type of food preparation originating in Japan, consisting of cooked vinegared rice (鮨飯 sushi-meshi) combined with other ingredients (ネタ neta) such as seafood, meat, vegetables and sometimes tropical fruits. Ingredients and forms of sushi presentation vary widely, but the ingredient which all sushi have in common is rice (also referred to as shari). Sushi can be prepared with either brown or white rice.</p>
				   </div>
					<div class="col-md-8 welcome-img">
					 <a href="recipes.php" class="mask"><img src="images/sushi.jpg" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div>
			    <div class="blog">
				 <div class="col-md-4 blog-text two">
					   <!--<h5>THU 14 May, 2015</h5>-->
					  <a href="recipes.php"><h4>GrapeFruits</h4></a>
					   <p>The grapefruit (Citrus × paradisi) is a subtropical citrus tree known for its sour to semi-sweet fruit. Grapefruit is a hybrid originating in Barbados as an accidental cross between two introduced species, sweet orange (C. sinesis) and pomelo or shaddock (C. maxima), both of which were introduced from Asia in the seventeenth century.</p>
				   </div>
					<div class="col-md-8 blog-img two">
					 <a href="recipes.php" class="mask"><img src="images/b3.jpg" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div> 
			    <div class="blog">
				   <div class="col-md-4 blog-text">
					   <!--<h5>THU 14 May, 2015</h5>-->
					   <a href="recipes.php"><h4>Grilled Fish</h4></a>
					   <p>We all know that fish is high in protein and low in fat. But it's also loaded with omega-3 fatty acids, which help maintain heart health by lowering blood pressure. Omegas 3's also are known to be beneficial to healthy brain function and developmentThe good news is if you’re not a fish , eating fish only once or twice a week can be enough to reap the benefits. </p>
				   </div>
					<div class="col-md-8 welcome-img">
					 <a href="recipes.php" class="mask"><img src="images/b1.jpg" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div>
		</div>
	</div>
<!--gallery-->
	<div class="gallery">
		<div class="container">
				<h3>Gallery</h3>
			<div class="portfolio-bottom">
				<div class="gallery-one">
					<div class="col-md-3 gallery-left">
						<a href="images/g1.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="Image Title">
								<img src="images/g1.jpg" alt="" class="img-responsive zoom-img"/>
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/g2.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="Image Title">
								<img src="images/g2.jpg" alt="" class="img-responsive zoom-img"/>
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/g4.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="Image Title">
								<img src="images/g4.jpg" alt="" class="img-responsive zoom-img"/>
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/g3.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="Image Title">
								<img src="images/g3.jpg" alt="" class="img-responsive zoom-img"/>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--swipebox -->	
			<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
			<!--//swipebox Ends -->
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
						<li><a href="portfolio.php">GALLERY</a></li> 
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
										$('.php,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
</.php>