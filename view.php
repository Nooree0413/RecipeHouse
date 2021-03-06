<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<?php
	session_start();
	require 'adminconnection.php';
	require 'connection.php';
?>
<html>
<head>
	<title>Recipe House</title>
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
	<script src="comment.js"></script>
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
						<li><a href="cuisine.php">CUISINES</a></li>
						<li><a href="recipes.php">RECIPES</a></li>
						<li><a href="gallery.php">GALLERY</a></li> 
						<li class="lost"><a href="contact.php">Contact</a></li>
						
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
	<!--/contact-->
	
	
						
	<div class="single">
		<div class="container">
		 <div class="blog">
	        <div class="blog_top">
				
				
				<!--Including php which will retrieve data from database-->
				<?php
					//Getting the Uniform Resource Indicator
					
					$uri = $_SERVER['REQUEST_URI'];
					//echo $uri . "<br/>";

					//Getting the query part of the url
					$parsedurl = parse_url($uri, PHP_URL_QUERY);
					parse_str($parsedurl);

					//Variable $recipe already exists as it has been passed from the url
					//echo $recipe;

					//Defining a session recipe to access it in other pages
					$_SESSION['recipe'] = $recipe;

					$query = "SELECT * FROM recipe WHERE recipe_name = '$recipe';";
					$result = mysql_query($query) or die("Error processing query" . mysql_error());
					
					$row = mysql_fetch_array($result);		
					echo "<img src= ' " . $row['recipe_imgurl1'] . " ' class='img-rounded img-responsive col-md-4' align'center' alt='' width='65%' height='65%'/>";
					
					echo "<h3><a href='view.php'>" . $row['recipe_name'] . "</a></h3>";
					
					echo "<h4>Posted By : Admin | Date : " . $row['recipe_date'] . "</h4><br/>";
					
					echo "<p>" . $row['recipe_description'] . "</p>";
					
					echo "<p>
						<img class='img-rounded' src='" . $row['recipe_imgurl2'] . "' style='float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;'>
						<img class='img-rounded' src='" . $row['recipe_imgurl3'] . "' style='float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;'>
						<img class='img-rounded' src='" . $row['recipe_imgurl4'] . "' style='float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;'>
						<p style='clear: both;'>
						</p>";

					echo "<div class='ingredient-head'><h3>INGREDIENTS:</h3>" . $row['recipe_ingredients'] . "</div>";
					
					echo "<div class='well well-lg'><p>Our API allows you to save time and select products you need before you can start cooking.</p><form class='col-xs-12' name='' action='' method='POST'>Enter ingredient name: <input class='form-control-static' type='text' name='txt_ingrName'/>&nbsp;<input class='btn btn-primary' type='submit' name='btn_search/' value='Search'></form><br/><br/><div class='clearfix'></div>";
					
					if (isset($_POST['txt_ingrName'])){
						$ingrName = $_POST['txt_ingrName'];

						include "soapClient.php";
						echo "<div class='table-responsive'><table class='table'> <th>Image</th><th>Product Name</th> <th>Categories</th>";

						for ($i=0;$i<10;$i++){
							$item = $productsArray[$i];
							$itemName = $item["Itemname"];
							$itemImageUrl = $item["ItemImage"];
							$itemCategory = $item["ItemCategory"];
							
							echo "<tr><td><img src='". $itemImageUrl ."'></td><td>".$itemName."</td><td>". $itemCategory ."</td></tr>";
						}
						
						echo "</table></div></div>";
					}
				?>

				<p>
					<table id = "addinfo" border="1" style="padding:50%;">
						<th colspan="2">ADDITIONAL INFO</th>
						<tr><td>Yield </td><td><?php echo $row['recipe_yield']; ?> Servings</td></tr>
						<tr><td>Prep Time</td><td><?php echo $row['recipe_preptime']; ?> </td></tr>
						<tr><td>Cook Time</td><td> <?php echo $row['recipe_cooktime']; ?> </td></tr>
						<tr><td>Total Time</td><td><?php echo $row['recipe_totaltime']; ?> </td></tr>
					</table>
				</p>

				<h3>DIRECTIONS:</h3>
				<p style="font-family: 'Open Sans', sans-serif;">
					<?php echo $row['recipe_directions']; ?>
				</p>
		
				  <div class="single_grid">
		           <div class="col-md-6 single_links">
			  		  <ul class="blog_links">
			  		  	<?php

			  		  		// Querying no of comments form database
			  		  		$recipe = $_SESSION['recipe'];

			  		  		$query_commentnum = "SELECT rec_commentcount FROM recipe WHERE  recipe_name = '$recipe' ";
			  		  		$query_result1 = mysql_query($query_commentnum) or die ('ERROR: Could not obtain the number of comments from database');
			  		  		$row = mysql_fetch_array($query_result1);

			  		  		echo "<li><a><i class='blog_circle'>" . $row['rec_commentcount'] . "</i><span>";
			  		  		if ($row['rec_commentcount'] < 2) 
			  		  			{
			  		  				echo "Comment";
			  		  			} 
			  		  		else 
			  		  			{
			  		  				echo "Comments";
			  		  			} 

			  		  			echo "</span></a></li>";

			  		  	?>
			  			
			  			<li><a href="#"><i class="blog_icon1"> </i><span>Like</span></a></li>
			  		  </ul>
			  		  <ul class="blog_social">
						  <li class="share"><i class="blog_icon2"> </i><p class="share_text">Share : </p></li>
						  <li><a href="#"> <i class="fb2"> </i> </a></li>
						  <li><a href="#"> <i class="tw2"> </i> </a></li>
						  <li><a href="#"> <i class="linked"> </i></a></li>
						  <li><a href="#"> <i class="g2"> </i></a></li>
						  <div class="clearfix"> </div>
					  </ul>
			  		  <div class="clearfix"></div>
			  	   </div>
				  <div class="clearfix"> </div>
			  </div>
		  	</div>

		  	<!--Comments Section-->
		  	<div class="single_grid2">
			   <h4 class="tz-title-4 tzcolor-blue">
			           <p class="tzweight_Bold">Comments</p>
			   </h4>
			   <ul class="list">

			   		<!--PHP code to retrieve comments from database and display-->

			        <?php
			        	// Getting storing the url into a session to be used to redirect users
			        	$_SESSION['lastRecipeViewed'] = $_SERVER['REQUEST_URI'];

			        	// Querying database to obtain the recipe ID of the recipe being shown in browser
			        	$query_currentRecipeId = "SELECT recipe_id FROM recipe WHERE recipe_name = '$recipe';";
			        	$result1 = mysql_query($query_currentRecipeId) or die('Could not retrieve recipeID from Database');
			        	$row1 = mysql_fetch_array($result1);
			        	$currentRecipeId = $row1['recipe_id'];

			        	//Testing
			        	//echo $currentRecipeId;

			        	//Retrieving user details and comments from database to be displayed

			        	$query_comment = "SELECT * FROM comment c, register r WHERE c.comm_recid = '$currentRecipeId' AND r.reg_email = c.comm_useremail";
			        	$result2 = mysql_query($query_comment) or die('Error querying comment' . mysql_error());

			        	$no_of_comments = mysql_num_rows($result2);
			        	
			        	$_SESSION['no_of_comments_current_page'] = $no_of_comments;


			        	while($row2 = mysql_fetch_array($result2))
			        	{

				        	$fname = $row2['reg_fname'];
				        	$lname = $row2['reg_lname'];
				        	$comment = $row2['comm_text'];
				        	$datetime = $row2['comm_time'];

				        	if (isset($comment))
				        	{
				        		
				        		echo "<div id='response'><li><div class='preview'><img src='images/avatar.jpeg' class='img-responsive' alt=''></a></div><div class='data'>";

				            	echo "<div class='title'>" . $fname . " " . $lname . "<br><span class='m_14'>" . $datetime . "</span><h5 class='m_26'></div>";
				            	echo "<p>". $comment ."</p>";
				            	echo "</div><div class='clearfix'></div></li></div>";
				            	
				        	}
						}
			        	
			        ?>


			        <!--PHP Code to check if user is logged in and then display comment box-->
			        <?php

			        	// Querying no of comments from database
			 	  		$recipe = $_SESSION['recipe'];
		  		  		$query_commentnum = "SELECT rec_commentcount FROM recipe WHERE  recipe_name = '$recipe' ";
		  		  		$query_result1 = mysql_query($query_commentnum) or die ('ERROR: Could not obtain the number of comments from database');
		  		  		$row = mysql_fetch_array($query_result1);

		  		  		if ($row['rec_commentcount'] == 0)
		  		  		{
		  		  			echo "No comments has been provided yet.<br/><br/>";
		  		  		}

			        	if (isset($_SESSION['email']))
			        	{
			        		echo "<br/><br/><form name='commentForm' action='process_comment.php' method='GET' onsubmit='ajax()'><li>
					<div class='title'><textarea class='comment_textarea' rows='5' cols='75' name='txt_comment' placeholder='Enter your comment'' maxlength=300></textarea><h5 class='m_26'></h5></div>
						<input type = 'submit' name='btnComment' value='Submit'/>
						<input type = 'reset' name='btnReset'/></form></li>";

			        	}

			        	else
			        	{
			        		echo "<h5 class='m_26'><a href='login.php'>Log In</a> or <a href='signup.php'>Sign Up</a> To Post Comments</h5>";
			        		//echo "<div ><a href='login.php'>Log In</a> or <a href='signup.php'>Sign Up</a> To Post Comments</div>";
			        	}
			        ?>
			     </ul>
			</div>
			<br/><br/>
	    </div>
	    </div>
	</div>
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
						<li><a href="404.php">BLOG</a></li> 
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