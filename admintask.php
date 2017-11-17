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
<title>Administration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food House Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link href="css/popup.css" rel='stylesheet' type='text/css' />	
<link href="css/flashPulse.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<script src="js/jquery.min.js"> </script>
<script src="js/displayXmlUserData.js"></script>


<!--web-fonts-->
  <link href='http://fonts.googleapis.com/css?family=Niconne|Playball|Open+Sans:300italic,400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
   <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #00cca3;
        color: white;
    }

  
    </style>
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
						<li><a class="active" href="about.php">About</a></li>
						<li><a  href="cuisine.php">CUISINES</a></li>						
						<li><a href="recipes.php">RECIPES</a></li>
						<!--<li><a href="404.php">SERVICES</a></li> -->
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
						
						<div class="clearfix"> </div>
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

	</br>

	<form method="post" action="admintask.php" >
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="txt_deleteUser" value="Delete User" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="txt_deleterecipe" value="Delete Recipe" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="txt_updaterecipe" value="Update Recipe" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="txt_insertrecipe" value="Insert Recipe" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="txt_deletecomment" value="Delete Comment" />
	</form>
	</br>
	<?php
		if(isset($_POST['txt_deleteUser'])){
		echo"<form method='post' action='adminoperation.php'>";
		echo "<input type='email' name='txt_mail'>";
		echo"<input type='submit' name='delete' value='Delete User'>";
		echo"</form>";
		}

		else if(isset($_POST['txt_deleterecipe'])){
			echo"<form method='post' action='adminoperation.php'>";
			echo "<input type='text' name='txt_recipeid' placeholder='Enter recipe id'>";
			echo"<input type='submit' name='Deleterep' value='Delete Recipe'>";
			echo"</form>";
		}

		else if(isset($_POST['txt_updaterecipe'])){
			echo"<form method='post' action='adminoperation.php'>";
			echo "<input type='text' name='txt_recipeid' placeholder='Enter recipe id'>"."</br></br>";
			echo "<input type='text' name='txt_recipefield' placeholder='Enter recipe field'>"."</br></br>";
			echo "<textarea rows='4'  cols='50' name='txt_recipevalue' placeholder='Enter new value'>"."</textarea>"."</br></br>";
			echo"<input type='submit' name='update' value='Update'>";
			echo"</form>";
		}

		else if(isset($_POST['txt_insertrecipe'])){
			echo"<form method='post' action='adminoperation.php'>";
			echo "&nbsp;Recipe Name:<input type='text' name='txt_recipename'>"."</br></br>";
			echo "&nbsp;Recipe Date<input type='date' name='txt_recipedate'>"."</br></br>";
			echo "&nbsp;Recipe Region<input type='text' name='txt_reciperegion'>"."</br></br>";
			echo "&nbsp;Recipe Description:<textarea rows='4'  cols='50' name='txt_recipedescription'>"."</textarea>"."</br></br>";
			echo "&nbsp;Recipe Ingredients:<textarea rows='4'  cols='50' name='txt_recipeingredients'>"."</textarea>"."</br></br>";
			echo "&nbsp;Recipe Yield:<input type='text' name='txt_recipeyield'>"."</br></br>";
			echo "&nbsp;Recipe Preparation Time:<input type='text' name='txt_recipepreptime'>"."</br></br>";
			echo "&nbsp;Recipe Cooking Time:<input type='text' name='txt_recipecooktime'>"."</br></br>";
			echo "&nbsp;Recipe Total Time:<input type='text' name='txt_recipetotaltime'>"."</br></br>";
			echo "&nbsp;Recipe Directions:<textarea rows='4'  cols='50' name='txt_recipedirections'>"."</textarea>"."</br></br>";
			echo "&nbsp;Recipe Category:<input type='text' name='txt_recipecategory'>"."</br></br>";
			echo "&nbsp;Recipe Image Url 1:<input type='text' name='txt_recipeurl1'>"."</br></br>";
			echo "&nbsp;Recipe Image Url 2:<input type='text' name='txt_recipeurl2'>"."</br></br>";
			echo "&nbsp;Recipe Image Url 3:<input type='text' name='txt_recipeurl3'>"."</br></br>";
			echo "&nbsp;Recipe Image Url 4:<input type='text' name='txt_recipeurl4'>"."</br></br>";
			echo"<input type='submit' name='insert' value='Insert'>";
			echo"</form>";

		}

		else if (isset($_POST['txt_deletecomment'])) {
			echo"<form method='post' action='adminoperation.php'>";
			echo "<input type='text' name='txt_commentid' placeholder='Enter comment id'>"."</br></br>";
			echo"<input type='submit' name='deleteComment' value='Delete'>";
			echo"</form>";
		}

	 	echo"</br>";

	
		require 'connection.php';

		$query=mysql_query("SELECT * FROM register") or die('cannot find table'.mysql_error());
		
		$noOfUser=mysql_num_rows($query);
		
		
		//displaying all users
		echo "<div style='overflow-x:auto;'>";

		echo "Current number of registered users: ".$noOfUser;
		echo "</br></br>";
         
        
		echo "<div id='adminTask_userTableContent'></div>";
		

        echo"</div>";

        echo"</br></br>";

         //displaying recipe details
         $query2=mysql_query("SELECT * FROM recipe") or die('could not find table'.mysql_error());
         $noOfRecipe=mysql_num_rows($query2);
         

         echo "<div style='overflow-x:auto;'>";

		 echo "Current number of recipes: ".$noOfRecipe;
		 echo "</br></br>";

		 echo "<div id='adminTask_recipeTableContent'></div>";
         
         echo"</div>";

          echo"</br></br>";

         //comment details
          $query3=mysql_query("SELECT * FROM comment") or die('could not find table'.mysql_error());
          $noOfcomment=mysql_num_rows($query3);

          echo"</br>";

		  echo "<div style='overflow-x:auto;'>";

		 echo "Current number of comments: ".$noOfcomment;
		 echo "</br></br>";
         
          echo"<table>";
          echo"<tr><th>Comment Id </th>";
          echo"<th>User Email</th>";
          echo"<th>Comment</th>";
          echo"<th>Comment Time</th>";
          echo"<th>Comment Recipe Id</th></tr>";        


          while($row3=mysql_fetch_array($query3)){
				echo"<tr><td>".$row3['comm_id']."</td>";
	            echo"<td>".$row3['comm_useremail']."</td>";
	            echo"<td>".$row3['comm_text']."</td>";
	            echo"<td>".$row3['comm_time']."</td>";
	            echo"<td>".$row3['comm_recid']."</td></tr>";
			}

			echo "</table>";
         echo"</div>";

	?>

	</br></br>
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
								<script src="js/displayXmlUserData.js"></script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/displayXmlRecipeData.js"></script>
</body>
</html>