<?php
session_start();
if(!isset($_SESSION['registered'])){
    header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Applicant Portal | Fountain University</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="index.html"><i class="fa fa-leanpub" aria-hidden="true"></i> FOUNTAIN UNIVERSITY</a></h1>

			</div>
			<div class="w3layouts_header_right">
			    <!-- <form action="#" method="post">
					<input name="Search here" type="search" placeholder="Search" required="">
					<input type="submit" value="">
				</form> -->
			</div>
			<ul class="agile_forms">
				<!-- <li><a class="active" href="#" ><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li> -->
				<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> LogOut</a> </li>
			</ul>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="effect-3">Home</a></li>
						<li><a href="#about" class="effect-3 scroll">Application fee</a></li>
						<!-- <li><a href="#services" class="effect-3 scroll">Print Application letter</a></li> -->
						<!-- <li><a href="#team" class="effect-3 scroll">Team</a></li> -->
						<!-- <li><a href="#gallery" class="effect-3 scroll">Gallery</a></li> -->
						<!-- <li><a href="#mail" class="effect-3 scroll">Mail Us</a></li> -->
					</ul>
				</nav>

			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>
<!-- banner -->

<div class="about-bottom">
	<div class="col-md-4 w3l_about_bottom_left">
        <?php echo'<img src="upload/'.$_SESSION['picture'].'" alt="" srcset="">'?>
		<h4><?php echo $_SESSION['name'];?></h4>
		<div class="clearfix"></div>
					<div class="agile-submit">
					<form method="post" action="pdf.php"> 
						 <input style="border-radius: 50px;" name="create_pdf" type="submit"  value="Application Clearance">
                     </form> 
					</div>

		<!-- <div class="video-grid-single-page-agileits">
			<div  id="video">
            

            </div>
		</div>
		<div class="w3l_about_bottom_left_video">
			<h4>watch our video</h4>
		</div> -->
	</div>
	<div class="col-md-8 w3l_about_bottom_right one">
		<div class="abt-w3l">
			<div class="header-w3l">
				<h2>CHECK YOUR ADDIMSSION STATUS</h2>
				<h4>Enter your application number</h4>
				<?php
					include ("includes/database.php");
					$name = "";

					if(isset($_POST['check'])){
					
					$APPNum = $_SESSION['application'];
					$APPNUM = $_POST['appNum'];
					if($APPNUM == $APPNum) { 

						$checkdb = "SELECT adminStatus FROM studentApplication WHERE applicateNum = '$APPNUM'";
						$checkResult = mysqli_query($dbconnect, $checkdb);
						while($rowCheck = mysqli_fetch_array($checkResult)){
							$name = $rowCheck['adminStatus'];
						}

						if($name == 'on process'){
							echo "<center><h3 style ='color:red;' >Your Admission is on process</h3></center>";
						}
						else if ($name == 'admitted' ) {
							echo "<center><h3 style ='color:green;' >Congratulation you have been admitted to FOUNTAIN UNIVERSITY</h3></center>";
						}
						else {
							echo "<center><h3 style ='color:red;' >Wrong Application Number</h3></center>";
						}
				}
				else {
					echo "<center><h3 style ='color:red;' >Wrong Application Number</h3></center>";
				}
				}
				?>
				<form action="portal.php" method="POST" >
					<div class="col-md-12 col-xs-12">
						<ul>
							<li class="text">Application number  </li>
							<li class="agileits-main"><input name="appNum" type="text" required=""></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="agile-submit">
						<input type="submit" value="CHECK" name="check">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- Modal1 -->

<!-- //Modal1 -->	
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Sign Up</h3>	
					<div class="login-form">
						<form action="#" method="post">
						   <input type="text" name="name" placeholder="Username" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<input type="password" name="password" placeholder="Confirm Password" required="">
							<input type="submit" value="Sign Up">
						</form>
					</div>
					<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"> </div> 
<!-- //Modal2 -->	

<!-- footer -->
<?php include ('includes/footer.php'); ?>
<!-- //footer -->

<!-- js-scripts -->			
<!-- js-files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->

<!-- Map-JavaScript -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(40.6700, -73.9400),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(40.6700, -73.9400),
						map: map,
					});
				}
			</script>
		<!-- //Map-JavaScript -->

<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
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
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>