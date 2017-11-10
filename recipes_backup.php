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
<title>Recipes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food House Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/flashPulse.css" rel='stylesheet' type='text/css' />	
<link href="css/menu.css" rel='stylesheet' type='text/css' />		
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
						<li><a class="active" href="recipes.php">RECIPES</a></li> 
						 
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
		<div class="menu-section">
		     <div class="container">
			      <h2>Recipes</h2>

				       <div class="menu-grids">
					        <div class="col-md-4 menu-grid">
								<a href="view.php?recipe=middle+eastern+roast"> <img src="images/MIDDLE EASTERN ROAST CHICKEN WITH VEGETABLES.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="view.php?recipe=middle+eastern+roast">Middle Eastern Roast Chicken with Vegetables</a></div>
								<div class="price">
                                    <span>Eastern</span>
                                </div>
								<p>Middle Eastern spatchcocked roast chicken complete with roast potatoes, caramelized leeks, and carrots.</p>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="view.php?recipe=mexican+hash+brown+stack"> <img src="images/mexican hash brown stack.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="view.php?recipe=mexican+hash+brown+stack">Mexican Hash Beown Stack</a></div>
								<div class="price">
                                    <span>Mexican</span>
                                </div>
								<p>Crispy potato topped with sunny-side eggs, sliced avocado and crumbled queso fresco cheese! </p>

							</div>

							<div class="col-md-4 menu-grid">
								<a href="view.php?recipe=indian+spiced+potatoes+with+chicken+thighs"> <img src="images/Indian spiced potatoes with chicken thighs.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="view.php?recipe=indian+spiced+potatoes+with+chicken+thighs">Indian Spiced Potatoes with Chicken Thighs</a></div>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>Spicy potatoes and veg benefit from having the chicken roasting on top sharing all its chickeny goodness</p>

							</div>
							
							
							<div class="col-md-4 menu-grid">
								<a href="Kung Pao chicken.html"> <img src="images/Kung Pao chicken.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="Kung Pao chicken.html">Kung Pao Chicken</a></div>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>This Szechuan-inspired chicken dish is spicy, slightly sweet and incredibly delicious.</p><br/>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="Greek Salad with Crispy Feta.html"> <img src="images/Greek Salad with Crispy Feta.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="greek salad with crispy feta.html">Greek Salad with Crispy Feta</a></div>
								<div class="price">
                                    <span>Greek</span>
                                </div>
								<p>Little bites of salty cheesy heaven thrown on top of a classic Greek salad with tomatoes, kalamata olives, cucumber, and delicate butter lettuce.</p>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="fish vindaye.html"> <img src="images/fish vindaye.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="fish vindaye.html">Fish Vindaye</a></div>
								<div class="price">
                                    <span>Mauritian</span>
                                </div>
								<p>Fried fish is combined with mustard seeds, garlic, turmeric, chilli and onions pickled in vinegar to give it a distinctive taste and flavour.</p>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="Easy Chicken Barbeque.html"> <img src="images/easy chicken barbeque1.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="easy chicken barbeque.html">Easy Chicken Barbeque</a></div>
								<div class="price">
                                    <span>Carribean</span>
                                </div>
								<p>Slow-grilling over indirect heat keeps this chicken moist and tender.</p>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="Italian Style Greens.html"> <img src="images/Italian style greens (Ricetta tipica per verdure verdi).jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="Italian style greens (Ricetta tipica per verdure verdi).html">Italian Style Greens</a></div>
								<div class="price">
                                    <span>Italian</span>
                                </div>
								<p>You can make these simple Italian greens with cabbage, chard or even good-old salad leaves</p>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="vegan chinese noodles.html"> <img src="images/vegan chinese noodles.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="vegan chinese noodles.html">Vegan Chinese Noodles</a></div>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>You don’t have to be vegan or vegetarian to appreciate these simple, quick and super-moreish noodles.</p>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="rhubarb sorbet with pistachio brittle.html"> <img src="images/rhubarb sorbet with pistachio brittle.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="rhubarb sorbet with pistachio brittle.html">Rhubarb Sorbet with Pistachio Brittle</a></div>
								<div class="price">
                                    <span>Arabic</span>
                                </div>
								<p>Sweet yet tart rhubarb sorbet with salty, crunchy brittle – flavours and textures that go mad in your mouth.</p>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="vegan garam masala carrot soup.html"> <img src="images/vegan garam masala carrot soup.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="vegan garam masala carrot soup.html">Vegan Garam Masala Carrot Soup</a></div>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>The addition of full-fat coconut milk makes this carrot soup insanely creamy and smooth</p>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="triple-citrus tart with chocolate crust and berries.html"> <img src="images/triple-citrus tart with chocolate crust and berries.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="triple-citrus tart with chocolate crust and berries.html">Triple-citrus Tart(w Chocolate Crust And Berries)</a></div>
								<div class="price">
                                    <span>French</span>
                                </div>
								<p>This elegant tart is made with a dark chocolate wafer crust and filled with blood orange, lemon, and lime curd.</p>

							</div>
							<div class="col-md-4 menu-grid">
								<a href="aigre doux.html"> <img src="images/aigre doux.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="aigre doux.html">Aigre Doux</a></div>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>Aigre Doux is an invitation to discover the flavor in a dish or the combination of sour and sweet blend with delicacy.</p>

							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="napolitaine.html"> <img src="images/napolitaine.jpg" class="img-responsive" alt="" /></a>
								<div class="recipes head"><a href="napolitaine.html">Napolitaine</a></div>
								<div class="price">
                                    <span>French</span>
                                </div>
								<p>A napolitaine is made up of two circular melt-in-your-mouth buttery shortbread cookies.</p>

							</div>
							
							
					   </div>
				 </div>
			 </div>
		</div>
		<ul class="pagination">
		<li><a href="#">«</a></li>
		<li><a class="active" href="recipes.php">1</a></li>
		<li><a  href="menu.html">2</a></li>
		 <li><a href="menu.html">»</a></li><br/><br>
<!--/start-footer-->
	<!--<div class= "footer">
		 <div class="container">                                                   
			<div class="col-md-3 footer-grid">
					<div class="logo two">
						<a href="home.php"><h3>RECIPE<span>House</span></h3></a>
					</div>
				</div>
				<div class=" col-md-3 footer-grid footer-grid2">
					<div class="bottom-nav">
					       <h4>EXPLORE</h4>
							<ul>
							<li><a class="active" href="home.php">Home</a></li> 
							<li><a href="about.php">About</a></li>
							<li><a href="recipes.php">RECIPES</a></li> 
							<li><a href="404.php">cuisines</a></li> 
							<li><a href="portfolio.php">GALLERY</a></li> 
							<li><a href="contact.php">Contact</a></li>
							<div class="clearfix"> </div>
						</ul>
					 </div>
				</div>
				<div class=" col-md-3 footer-grid">
					<div class="Office Address">
				        <h4>ADDRESS</h4>
				       <ul class="bottom-icons">
							<li><a class="home" href="#"><span> </span></a>Recipe House,Mauritius</li>
							<li><a class="mail" href="mailto:info@foodrecipe.com"><span> </span>info@recipehouse.com</a></li>
							<li><a class="mbl" href="#"><span> </span></a>5 758 6974</li>	
							<div class="clearfix"> </div>	
						</ul>
					 </div>
				</div>
				<div class="col-md-3 footer-grid">
					<h4>SUBSCRIBE</h4>
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