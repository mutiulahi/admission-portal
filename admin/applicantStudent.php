<?php
session_start();
if(!isset($_SESSION['registered'])){
    header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Admin Portal | Fountain University</title>
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
<?php include ('includes/mainMenu.php') ?>
<!-- banner -->

<div class="about-bottom">
	<div class="col-md-4 w3l_about_bottom_left">
        

		<!-- <div class="video-grid-single-page-agileits">
			<div  id="video">
            

            </div>
		</div>
		<div class="w3l_about_bottom_left_video">
			<h4>watch our video</h4>
		</div> -->
	</div>
	<div class="col-md-12 w3l_about_bottom_right one">
		<div class="abt-w3l">
			<div class="header-w3l">
				<h2>APPLICANT INFORMATION</h2>
				<h4></h4>
				<form action="applicantStudent.php" method="POST" >
				<div class="panel panel-widget">
						<div class="tables">
							<table class="table table-hover"> 
								<thead> 
									<tr> 
										<th>No</th> 
										<th>Surname</th> 
										<th>Othername</th> 
										<th>Application No</th> 
										<th>Admission Status</th> 
										<th>Payment Status</th>
										<th>Admit</th>
										<!-- <th>Payment Status</th> -->

									</tr> 
								</thead> 
								<tbody> 
									<?php
									include ('includes/database.php');
									$ID = array();
									$SURNAME = array();
									$OTHERNAME = array();
									$APPLICAT = array();
									$ADMISSION = array();
									$PAY = array();

									$DBQUERY = "SELECT * FROM studentApplication";
									$result = mysqli_query($dbconnect,$DBQUERY);
									while($final = mysqli_fetch_array($result)) {
										$ID[] = $final['id'];
										$SURNAME[] = $final['surename'];
										$OTHERNAME[] = $final['othername'];
										$APPLICAT[] = $final['applicateNum'];
										$ADMISSION[] = $final['adminStatus'];
										$PAY[] = $final['payment'];
									} 
									$count = sizeof($ID);
									for ($i=0 ; $i<$count; $i++){
										$p = $i+1;
										echo "
										<tr>
											<td>{$p}</td>
											<td>{$SURNAME[$i]}</td>
											<td>{$OTHERNAME[$i]}</td>
											<td>{$APPLICAT[$i]}</td>
											<td>{$ADMISSION[$i]}</td>
											<td>{$PAY[$i]}</td>
											<form action='applicantStudent.php' method='POST'>
												<td>
													<button name = 'activate' value='{$final['id']}'>admitted</button>
												</td>
												
											</form>
										</tr>
										";

									}
									
									?>  
									<?php
											include ('includes/database.php');
											if(isset($_POST["activate"])){
												$id_name = $_POST["activate"];
											$updateActivate = "UPDATE studentApplication SET adminStatus = 'admitted' WHERE id = '$id_name'";
											if (mysqli_query($dbconnect, $updateActivate)){
												echo"<script type=\"text/javascript\"> 
												alert(\"Successfully Activated !\");
													window.location = \"applicantStudent.php\"</script>";
											}
											}

									?>
								</tbody> 
							</table>
						</div>
					</div>
					<div class="col-md-12 col-xs-12">
						<ul>
							<li class="agileits-main">
							
							</li>
						</ul>
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