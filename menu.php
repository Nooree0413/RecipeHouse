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
			      <h2>Recipes</h2>
				       <div class="menu-grids">
					   
					        <div class="col-md-4 menu-grid">
                              <a href="single.html"> <img  src="images/capresesalad.jpg"  class="img-responsive" alt="" /></a>
									<div class="price">
                                    <!--<span>$</span>2<span>55</span>-->
									<span>Italian</span>
                                </div>
									<p><a href="CapreseSaladwithPestoSauce.html">Caprese Salad with Pesto Sauce</a> Juicy tomatoes and mozzarella cheese salad topped with freshly made pesto sauce.</p>
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/panzenella.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Italian</span>
                                </div>
									<p><a href="Panzenella.html">Panzenella</a> is a Tuscan bread salad, ideal for summer.This salad is great with a chilled glass of Prosecco and lots of sunshine!</p>
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/bruschetta.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Italian</span>
                                </div>
								<p>Country bread sliced with various toppings and the evergreen tomato-basil and an inventive mushroom-garlic.</p>

							</div>
							
							<!--<div class="col-md-4 menu-grid">
							<p style="font-family:verdana" color:"violet">RecipeHouse</p>
							
							</div>-->
							
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/focassiabread.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Italian</span>
                                </div>
								<p>Fresh dough is topped with caramelized onions, olives, tomato slices, basil leaves, grated parmesan cheese and baked delicious!</p>

							</div>
							
							
							
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/pastacarbonara.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Italian</span>
                                </div>
									<p>The original recipe calls for guanciale, which is pig's cheek, but since its not easily available, the chef has used bacon instead.</p>
							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/margertitapizza.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Italian</span>
                                </div>
								<p>Fancy a pipping hot pizza, fresh out of the oven? Create one at home! One of the most loved italian dish</p>

							</div>
							<!--<div class="col-md-4 menu-grid">
							<p style="font-family:verdana" color:"violet">RecipeHouse</p>
							
							</div>-->
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/risotto.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Italian</span>
                                </div>
								<p>A plateful of buttery risotto with the goodness of mushrooms. Great to feed a hungry horde!</p>
							</div>
							
							</div>
							
							
							
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/pasta.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Italian</span>
                                </div>
								<p>This is the most basic and simplest cooked pasta sauce,it is the benchmark of a good Italian home cook.</p>
							</div>
							
							<div class="col-md-4 menu-grid">
							<p style="font-family:verdana" color:"violet">RecipeHouse</p>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/tiramisu.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Italian</span>
                                </div>
								<p>The delightful tiramisu recipe with sponge fingers soaked in coffee.Owing to its caffeine kick it sure does!!</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/pannacotta.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Italian</span>
                                </div>
								<p>A dessert  made with gelatine, cream and milk. Chilled and served with whole raspberries and raspberry coulis. Panna Cotta, in Italian, means 'cooked cream!</p>
							</div>
							
							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/chilli-chicken.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>This Sichuan styled chilli chicken is cooked with brown, green and white peppercorns and oriental spices.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/sweetsour.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>A classic dish that where chicken chunks are cooked in sweet, spicy and warm flavours</p>
							</div>
							<!--<div class="col-md-4 menu-grid">
							<p style="font-family:verdana" color:"violet">RecipeHouse</p>
							
							</div>
							
							</div>-->
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/dicedchickinblacksauce.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>The magical combination of chicken and a classic black bean sauce is a sure winner!</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/chickenSchezwan.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>One of the most popular soups from Sichuan cuisine, this one is crackling, filling and simply stunning.</p>
							</div>
							<div class="col-md-4 menu-grid">
							<p style="font-family:verdana" color:"violet">RecipeHouse</p>
							
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/stirfried.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>Good food isn't about a long preparation time. It's about getting the right flavours</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/chickengingergarlic.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>If you love chicken and if you love garlic then this is your calling.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/bbq-chicken.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>This one will knock your socks off! Chicken marinated in char siu sauce mingles with flavors of honey and vinegar to give up a gorgeous golden chicken.</p>

							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/manchurian.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>It's possibly the most frequently ordered dish in any Chinese restaurant. Now you can make it at home with this easy-to-follow recipe.</p>
							</div>
							
							</div>
							
							<!--<div class="col-md-4 menu-grid">
							<p style="font-family:verdana" color:"violet">RecipeHouse</p>
							
							</div>-->
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/chestnuts-chicken.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>This will make you think why you never tried chicken and chestnuts before!</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/chickenbonelesschilli.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Chinese</span>
                                </div>
								<p>Like a good story, a good recipe can put you in a trance. And that's exactly what this one will do!</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/roganjosh.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>It is one of the signature dishes of Kashmir. Robust with varied spices, the dish is cooked with the aroma of fennel seeds, garam masala, bay leaves, turmeric.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/butter-chicken.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>Chunks of chicken marinated overnight in yogurt and a beautiful mix of spices, served with a dollop of melting cream or butter on top.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/bhapaa-aloo.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>A stunner of a recipe, this one gets the Bengali flavours just right. The humble potato tossed in local flavours of panch phoron, coconut paste and mustard oil</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/banjariGosht.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>Experience authentic Rajasthani flavours with this exquisite blend of yogurt and juicy mutton pieces.</p>
							</div>
							
							</div>
							
							<div class="col-md-4 menu-grid">
							<p style="font-family:verdana" color:"violet">RecipeHouse</p>
							
							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/stew.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>Chunks of chicken bathed in a beautifully spiced and dreamy coconut gravy with soft-centered appams.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/kakori-kebabs.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>It derives its name from the city of Kakori on the outskirts of Lucknow. It is made with the finest meat of the lamb and a few spices.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/biryan.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>It's the perfect choice for foodies who prefer having their rice with spice, interspersed with tender peaces of meat or chicken</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/dhokla.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>This steamed cake made from gram flour and channa dal is one of the best things to come out of Gujarat</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/saliboti.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>This one is a an ideal example of the Parsi's need to mix hot and sweet. Succulent mutton chunks are cooked in tomatoes, onions, jaggery and vinegar</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/idli.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Indian</span>
                                </div>
								<p>This glorious steamed rice pancake with innumerable health benefits has made its way through generations!</p>
							</div>
							
							</div>
							
							<div class="col-md-4 menu-grid">
							<p style="font-family:verdana" color:"violet">RecipeHouse</p>
							
							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/bbq-octopus.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>Barbecued octopus, with this smooth tahini sauce on top. </p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/sbsdinnerupgradekids-pizza.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>Thin and crisp with a spicy lamb topping, the lahmacun is an easy do-it-yourself pizza that doesn’t require yeast or proving time.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/sbs_dinnerupgrade_cheatsmanti.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>Manti is a traditional Turkish dish of tiny pasta shapes stuffed with a lamb mince and onion mixture that are dressed in a yoghurt sauce.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/bazlama.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>This moreish flatbread has a long fermentation time that gives its distinctive well-developed and slightly sour flavour.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/silverbeetlentilchickpeaand-lamb-kofte-soup.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>This Turkish soup is made for the cooler months. The juicy lamb meatballs and spicy-sweet broth offer a comforting, more-ish quality</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/lentil-soup_0.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>There are loads of different Turkish red lentil recipes, and this is just one of them!</p>
							</div>
							
							<div class="col-md-4 menu-grid">
							<p style="font-family:verdana" color:"violet">RecipeHouse</p>
							
							</div>
							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/shredded-sugar.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>This rich dessert is delicious, it’s crispy, it’s divine. It should be eaten hot, while the cheese is still oozing.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/lamb-shoulder.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>If you have time, you can marinate the lamb in the yoghurt and spices for a few hours or overnight</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/ep9_smoked-lamb_kaily_dsc_6285.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>The traditional way it’s done in Turkey is on these big skewers and they lower it into an oven,’ says Attila. </p>
							</div>
							
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/fattoush_market_salad_0.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Turkish</span>
                                </div>
								<p>The fresh clean flavours of fatoush makes it the perfect side salad for the rich lamb meat </p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/sbs-cucumberwatermelonhaloumisalad.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p>This is a refreshing and bright salad full of texture. The salty haloumi is perfectly foiled by the sweet charry watermelon.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/DrinksNibblesA-0111_1.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p>Shanklish is a hard sheep’s-milk cheese that’s often coated in spices; it is available from Middle Eastern food shops.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/roasted-cauliflower-with-lebanese-lentils-and-kaniwa.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p> Cumin, fennel, cinnamon, lemon, garlic — could it get any better?  </p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/knafeh-sweet-cheese-pastry.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p>This syrup-soaked cheese dessert is commonly encased with kataifi pastry</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/Feast_6Oct_-1374_1.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p>Known as bamia in the Middle East, okra in this region is commonly cooked with lamb and tomatoes until soft</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/Tabbouleh.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p>This recipe for tabbouleh is a revelation – make it and see how crisp and lovely this salad should really be</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/stuffedCapsicum.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p>Delicious Stuffed capsicum with rice</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/Kousa-Mashi-(Stuffed-Zucchi.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p>The best zucchini to use for this recipe is the small, slightly bulbous, pale green variety often sold as Lebanese zucchini.!</p>
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/Fattoush-Lebanese-summer-salad.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p>Fattoush is a Lebanese salad made with vegetables and crispy toasted flatbread, which soaks up the dressing beautifully.</p>
							</div>
							
							</div>
							<div class="col-md-4 menu-grid">
								<a href="single.html"> <img src="images/lebanese-zaatar-pizza.jpg" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span>Lebanese</span>
                                </div>
								<p>Taking its name from the Arabic word for ‘engraved’ because of the indentations on the dough, this pizza is a breakfast favourite.</p>
							</div>
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

			</div>	-->
			<!--start-smoth-scrolling-->
			<!--<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>-->
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
								</script>-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>