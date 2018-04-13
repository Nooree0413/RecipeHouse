<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Food House a Hotels and Restaurants Category Flat Bootstarp responsive Website Template | Menu :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food House Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link href="css/dropdown.css 	 rel='stylesheet' type='text/css' />	
<link href="css/menu.css" rel='stylesheet' type='text/css' />	
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
						<li><a href="about.html">About</a></li>
						<li><a href="cuisine.html">Cuisines</a></li>
						<li><a class="active" href="recipes.php">Recipes</a></li> 
						
						<li><a href="gallery.php">Gallery</a></li> 
						<li><a href="contact.html">Contact</a></li>
						
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
			    <h2>Menu</h2>
				<p>You can search for recipes and filter results by rating or trendiness from social media to determine the best recipes.</p>

				<form class="con" name="searchForm" action="menu.php" method="POST"> 
					<div class="form-group">
						<label for="usr">Recipe:</label>
						<input name="txt_rsearch" type="text" class="text" placeholder="Recipe Name"/>
						<select name="sortType">
							<option value="r">Rating</option>
							<option value="t">Trending</option>
						</select>
						<input name="btn_submit" type="submit" value="Search">
					</div>
					
				</form>		

		       	<div class="menu-grids">

				   	<?php

						if (isset($_POST['txt_rsearch']) && isset($_POST['sortType'])){
							$recipeSearch = $_POST['txt_rsearch'];
							$sortType = $_POST['sortType'];

							$filterSearchresult = str_replace(" ","+",$recipeSearch);

							//$url = "http://food2fork.com/api/search?key=a284455a12870b339322b1ece92aa191&q=shredded+chicken&sort=r";
							echo $url = "http://food2fork.com/api/search?key=a284455a12870b339322b1ece92aa191&q=".$filterSearchresult."&sort=".$sortType;

							$client = curl_init($url);
							curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
							$response = curl_exec($client);
							$result = json_decode($response,true);

							// print_r($result);
							//echo $result["count"];
							$recipes = $result["recipes"];
							$recipe = $recipes;
							//print_r($recipe);

							foreach($recipe as $key => $item){
								$imgUrl = $item['image_url'];
								$title = $item['title'];
								$recipeUrl = $item['source_url'];

								echo '<div class="col-md-4 menu-grid">
								<a href="'. $recipeUrl. '" target="_blank"> <img src="'.$imgUrl.'" class="img-responsive" alt="" /></a>
									
								<a href="'.$recipeUrl.'" target="_blank">'.$title.'</a></div>';
							}	
						}
					?>
					
					
				</div>
			</div>
		</div>
		</div>
	<!--/start-reservations-->
          	<br/>
			<br/>
	<!--/end-reservations-->
	<ul class="pagination">
		<li><a href="recipes.php">«</a></li>
		<li><a  href="recipes.php">1</a></li>
		<li><a class="active" href="menu.html">2</a></li>
		 <li><a href="#">»</a></li>
	</ul>
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
					       <h4>LEARN</h4>
							<ul>
							<li><a class="active" href="home.php">Home</a></li> 
							<li><a href="about.html">About</a></li>
							<li><a href="menu.html">RECIPES</a></li> 
							<li><a href="blog.html">Blog</a></li> 
							<li><a href="gallery.php">GALLERY</a></li> 
							<li><a href="contact.html">Contact</a></li>
							<div class="clearfix"> </div>
						</ul>
					 </div>
				</div>
				<div class=" col-md-3 footer-grid">
					<div class="Office Address">
				        <h4>ADDRESS</h4>
				       <ul class="bottom-icons">
							<li><a class="home" href="#"><span> </span></a>Lorem ipsy street,Newyork</li>
							<li><a class="mail" href="mailto:info@example.com"><span> </span>123 int@example.com</a></li>
							<li><a class="mbl" href="#"><span> </span></a>+91 000 00 00 00 0</li>	
							<div class="clearfix"> </div>	
						</ul>
					 </div>
				</div>
				<div class="col-md-3 footer-grid">
					<h4>SUPPORT WITH</h4>
						<div class="support">
						   <input type="text" class="text" value="Enter email to reset it" onfocus="this.value = '';" onblur="if (this.value == 'Enter email to reset it') {this.value = 'Enter email to reset it';}">
						<input type="submit" value="SUBMIT" class="botton">
						     						     <p>Lorem ipsum dolor sit amet conse aliqua. Ut enim ad minim veniam Lorem ctetur adipisicing .</p>
						</div>
				    </div>
			    	<div class="clearfix"> </div>	
				</div>
			</div>
			<div class="copy-right">
			  <div class="container">
					 <p>Copyright &copy; 2015 All Rights Reserved </p>
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
						<!--<script type="text/javascript">
									$(document).ready(function() {
									
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>