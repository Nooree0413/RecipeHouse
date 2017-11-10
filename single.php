<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
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
						<li><a href="about.html">About</a></li>
						<li><a href="cuisine.html">CUISINES</a></li>
						<li><a href="recipes.php">RECIPES</a></li>
						
						
						<li><a href="gallery.php">GALLERY</a></li> 
						<li class="lost"><a href="contact.html">Contact</a></li>
						
						<div id="userlogin" class="form1 active">
							<?php
								
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
	<div class="contact-section">
		<div class="contact-head">
			<div class="container">
				<h3>Create Account</h3>
			</div>
		</div>
		
		<div class="contact-inner">
		  <div class="container">
			<h4></h4>
			<form name="myForm" action="process_signupuser.php" method="post" class="con" onsubmit="regFunc()"> 
			    <input value="asd" title="First Name" type="text" class="text" name="txt_fname" placeholder="First Name" title="First Name" required><br/>
				<input value="asd" type="text" class="text" name="txt_lname" placeholder="Last Name" title="Last Name" required><br/>
				<input value="asd" type="date" class="text" id="mydateBox" name="date_dob" value="Date" title="Date Of Birth" required><br/>
				<!--<input type="text" class="text" name="txt_uname" value="User Name" title="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" required><br/>-->
				<input value="asd@asd.com" type="email" class="text" name="txt_email" placeholder="Email Address" title="Email Address" required><br/>
				<input value="asd" type="password" class="text" name="txt_pwd" placeholder="Password" title="Password" required><br/>
				<input value="asd" type="password" class="text" name="txt_cpwd" placeholder="Confirm Password" title="Confirm Password" required><br/><br/>
				<div>
					
					<input type="checkbox" class="text" name="txt_radio">&nbspNewsletters<br/>
					
					<span style="font-size:80%;">Receive monthly newsletters</span>
				</div>
				
					
					<div class="clearfix"> </div>
						
					<div class="sub-button">
						<br/>
						<input name="submit" type="submit" value="Sign Up">
					</div>
			</form>
				
			
		</div>
			
			<script>
			
					function regFunc() {
									
						var fnameInput = document.forms["myForm"]["txt_fname"].value;
						var lnameInput = document.forms["myForm"]["txt_lname"].value;
						var dateInput = document.forms["myForm"]["txt_dob"].value;
						var unameInput = document.forms["myForm"]["txt_uname"].value;
						var emailInput = document.forms["myForm"]["txt_email"].value;
						var pwdInput = 	document.forms["myForm"]["txt_pwd"].value;
						var cpwdInput = document.forms["myForm"]["txt_cpwd"].value;
						
						
						if (fnameInput == "First Name")
						{
							alert("Please enter first name before submitting"); 
								
						}
						
						if (lnameInput == "Last Name")
						{
							alert("Please enter last name before submitting"); 
						}
						
						if (dateInput == null || dateInput == "")
						{
							alert("Please enter date of birth before submitting"); 
						}
						
						if (unameInput == "User Name")
						{
							alert("Please enter a user name before submitting"); 
						}
						
						if (emailInput == "Email Address")
						{
							alert("Please enter email address before submitting"); 			
						}
							
						if (pwdInput == "")
						{
							alert("Please enter a password before submitting"); 	
						}
					
						if (cpwdInput == "")
						{
							alert("Please confirm your password before submitting"); 
						}
						
						if (pwdInput != cwdInput)
						{
							alert("Passwords do not match, Enter again!");
						}
					}
				</script>
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
						<li><a href="about.html">About</a></li>
						<li><a href="cuisine.html">CUISINES</a></li>
						<li><a href="recipes.php">RECIPES</a>	</li>
						<li><a href="404.html">BLOG</a></li> 
						<li><a href="gallery.php">GALLERY</a></li> 
						<li class="lost"><a href="contact.html">Contact</a></li>
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