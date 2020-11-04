<?php

session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Application Form | Fountain University</title>
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
<link rel="stylesheet" href="css/application.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>

  <!-- NAV BAR -->
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
			<h1><a class="navbar-brand" href="index.php"><i class="fa fa-leanpub" aria-hidden="true"></i> FOUNTAIN UNIVERSITY</a></h1>

			</div>
			<div class="w3layouts_header_right">
			    <!-- <form action="#" method="post">
					<input name="Search here" type="search" placeholder="Search" required="">
					<input type="submit" value="">
				</form> -->
			</div>
			<ul class="agile_forms">
				<!-- <li><a class="active" href="#" ><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li> -->
				<li><a href="application.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up</a> </li>
			</ul>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" class="effect-3">Home</a></li>
						<li><a href="#about" class="effect-3 scroll">About Us</a></li>
						<li><a href="#mail" class="effect-3 scroll">Contact Us</a></li>
						<li><a href="#team" class="effect-3 scroll">Team</a></li>
						 <!-- <li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>
						 <li><a href="#mail" class="effect-3 scroll">Mail Us</a></li> -->
					</ul>
				</nav>

			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>
  <!-- NAV BAR END -->

  <div class="about-bottom">
  <div class="col-md-5 w3l_about_bottom_left_other">
		<img src="images/banner2.jpg" alt="" class="img-responsive" /> 
	</div>
	<div class="col-md-7 w3l_about_bottom_right one">
		<div class="abt-w3l">
			<div class="header-w3l">
				<h2>Application Form</h2>
				<h4>Enter the Following Details</h4>
				<form  action="register.php" method="POST" enctype="multipart/form-data" >
		<!-- One "tab" for each step in the form: -->
		
        <div class="tab"><h3>Personal Information</h3><br>
			<input  type="text"  placeholder="Surname" name="surename" >
			<input type="text" placeholder="Othernames" name="othername" >
			<select id="JSID" name="religion">
				<option value="">Religion</option>
				<option value="Islam">Islam</option>
				<option value="christien">Christien</option>
			</select>
			<select id="JSID" name="gender">
				<option value="">Gender</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			<input type="date" placeholder="data">
			
        </div>
        
        <div class="tab"><h3>Contact Information</h3><br>
           <input type="number" name="contactNumber"  placeholder="Whatsapp No" oninput="this.className = ''"> 
           <input type="email" name="contactEmail" placeholder="Email" oninput="this.className = ''"> 
           <input type="text" name="contactAddress" placeholder="Address" oninput="this.className = ''"> 
           <input type="text" name="contactNationality" placeholder="Nationality" oninput="this.className = ''"> 
		</div>
		
        <div class="tab"><h3>Parent/Sponsors Information</h3><br>
           <input type="text" name="PSName" placeholder="Parent/Sponsors Name" oninput="this.className = ''"> 
           <input type="email" name="PSEmail" placeholder="Parent/Sponsors Email" oninput="this.className = ''"> 
           <input type="number" name="PSNumber" placeholder="Parent/Sponsors Phone Number" oninput="this.className = ''"> 
           <input type="text" name="PSAddress" placeholder="Parent/Sponsors Address" oninput="this.className = ''"> 
		</div>
		
        <div class="tab"><h3>Referee Information</h3><br>
           <input type="text" name="refereeName" placeholder="Referee Name" oninput="this.className = ''"> 
           <input type="text" name="refereeAddress" placeholder="Referee Address" oninput="this.className = ''"> 
           <input type="number" name="refereeNumber" placeholder="Referee Phone Number" oninput="this.className = ''"> 
        </div>
        
        <div class="tab"><h3>Additional Information</h3><br>
			<select id="JSID" name="ComputerLiteracyLevel" id="" oninput="this.className = ''">
				<option value="">Computer literacy level</option>
				<option value="beginner">Beginner</option>
				<option value="intermediate">Intermediate</option>
				<option value="expert">Expert</option>
			</select>
			<select id="JSID" name="HowKnown" id="" oninput="this.className = ''">
				<option value="">How did you know about FOUNTAIN</option>
				<option value="social-media">Social media</option>
				<option value="friend">Friend</option>
				<option value="other">Other</option>
			</select>
        </div>
        <!-- Academic/Programme -->
        <div class="tab"><h3>Academic/Programme Detail</h3><br>
			<select id="JSID" name="entryMode" id="" oninput="this.className = ''">
				<option value="">Mode of entry</option>
				<option value="UTME">UTME</option>
				<option value="DE">DE (direct entery)</option>
			</select>
           <input type="text" name="JAMBregNumber" placeholder="Registration Number" oninput="this.className = ''"> 
           <input type="number" name="JAMBscore" placeholder="JAMB SCORE / A LEVEL POINT" oninput="this.className = ''"> 
			
			<select id="JSID" name="ProgType" id="" oninput="this.className = ''">
				<option value="">Programmme Type</option>
				<option value="Full Time">Full-time</option>
				<option value="Part Time">Part-time</option>
			</select>
			<select id="JSID" name="AdminType" id="" oninput="this.className = ''">
				<option value="">Admission Type</option>
				<option value="Undergraduate">Undergraduate</option>
				<option value="NBAIS">NBAIS</option>
				<option value="JUPEB">JUPEB</option>
			</select>
		</div>
		
		<!-- O level -->
		<div class="tab"><h3>O LEVEL RECORD</h3><br>
			<select id="JSID" class="col-md-6 col-xs-6 form" name="firstSubject" id="" >
				<option value="English Language">English Language</option>
			</select>
			<select id="JSID" class="col-md-2 col-xs-2 leftM form" name="firstGrade" id="" >
				<option value="">Grade</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
			</select>

			<select id="JSID" class="col-md-6 col-xs-6 form" name="secondSubject" id="" >
				<option value="Mathmatics">Mathmatics</option>
			</select>
			<select id="JSID" class="col-md-2 col-xs-2 leftM form" name="secondGrade" id="" >
				<option value="">Grade</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
			</select>
			</select>

			<select id="JSID" class="col-md-6 col-xs-6 form" name="thirdSubject" id="" >
				<option value="">Select Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Agriculture Science">Agriculture Science</option>
				<option value="Arabic Language">Arabic Language</option>
				<option value="Art and Design">Art and Design</option>
				<option value="Biology">Biology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Commerce">Commerce</option>
				<option value="Commerce">Civic Education</option>
				<option value="Computer Science">Computer Science</option>
				<option value="Design and Technology">Design and Technology</option>
				<option value="Economics">Economics</option>
				<option value="Environment Management">Environment Management</option>
				<option value="French">French</option>
				<option value="Food and Nutrition">Food and Nutrition</option>
				<option value="Fashion and Textiles">Fashion and Textiles</option>
				<option value="Geography">Geography</option>
				<option value="History">History</option>
				<option value="Islamic Relious Studies">Islamic Relious Studies</option>
				<option value="Litrature in Enlish">Litrature in Enlish</option>
				<option value="Physics">Physics</option>
				<option value="Sociology">Sociology</option>
				<option value="Statistics">Statistics</option>
			</select>
			<select id="JSID" class="col-md-2 col-xs-2 leftM form" name="thirdGrade" id="" >
				<option value="">Grade</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
			</select>
			</select>

			<select id="JSID" class="col-md-6 col-xs-6 form" name="fourthSubject" id="" >
			<option value="">Select Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Agriculture Science">Agriculture Science</option>
				<option value="Arabic Language">Arabic Language</option>
				<option value="Art and Design">Art and Design</option>
				<option value="Biology">Biology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Commerce">Commerce</option>
				<option value="Commerce">Civic Education</option>
				<option value="Computer Science">Computer Science</option>
				<option value="Design and Technology">Design and Technology</option>
				<option value="Economics">Economics</option>
				<option value="Environment Management">Environment Management</option>
				<option value="French">French</option>
				<option value="Food and Nutrition">Food and Nutrition</option>
				<option value="Fashion and Textiles">Fashion and Textiles</option>
				<option value="Geography">Geography</option>
				<option value="History">History</option>
				<option value="Islamic Relious Studies">Islamic Relious Studies</option>
				<option value="Litrature in Enlish">Litrature in Enlish</option>
				<option value="Physics">Physics</option>
				<option value="Sociology">Sociology</option>
				<option value="Statistics">Statistics</option>
			</select>
			<select id="JSID" class="col-md-2 col-xs-2 leftM form" name="fourthGrade" id="" >
			<option value="">Grade</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
			</select>
			</select>

			<select id="JSID" class="col-md-6 col-xs-6 form" name="fifthSubject" id="" >
			<option value="">Select Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Agriculture Science">Agriculture Science</option>
				<option value="Arabic Language">Arabic Language</option>
				<option value="Art and Design">Art and Design</option>
				<option value="Biology">Biology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Commerce">Commerce</option>
				<option value="Commerce">Civic Education</option>
				<option value="Computer Science">Computer Science</option>
				<option value="Design and Technology">Design and Technology</option>
				<option value="Economics">Economics</option>
				<option value="Environment Management">Environment Management</option>
				<option value="French">French</option>
				<option value="Food and Nutrition">Food and Nutrition</option>
				<option value="Fashion and Textiles">Fashion and Textiles</option>
				<option value="Geography">Geography</option>
				<option value="History">History</option>
				<option value="Islamic Relious Studies">Islamic Relious Studies</option>
				<option value="Litrature in Enlish">Litrature in Enlish</option>
				<option value="Physics">Physics</option>
				<option value="Sociology">Sociology</option>
				<option value="Statistics">Statistics</option>
			</select>
			<select id="JSID" class="col-md-2 col-xs-2 leftM form" name="fifthGrade" id="" >
				<option value="">Grade</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
			</select>
			</select>

			<select id="JSID" class="col-md-6 col-xs-6 form" name="sixthSubject" id="" >
			<option value="">Select Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Agriculture Science">Agriculture Science</option>
				<option value="Arabic Language">Arabic Language</option>
				<option value="Art and Design">Art and Design</option>
				<option value="Biology">Biology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Commerce">Commerce</option>
				<option value="Commerce">Civic Education</option>
				<option value="Computer Science">Computer Science</option>
				<option value="Design and Technology">Design and Technology</option>
				<option value="Economics">Economics</option>
				<option value="Environment Management">Environment Management</option>
				<option value="French">French</option>
				<option value="Food and Nutrition">Food and Nutrition</option>
				<option value="Fashion and Textiles">Fashion and Textiles</option>
				<option value="Geography">Geography</option>
				<option value="History">History</option>
				<option value="Islamic Relious Studies">Islamic Relious Studies</option>
				<option value="Litrature in Enlish">Litrature in Enlish</option>
				<option value="Physics">Physics</option>
				<option value="Sociology">Sociology</option>
				<option value="Statistics">Statistics</option>
			</select>
			<select id="JSID" class="col-md-2 col-xs-2 leftM form" name="sixthGrade" id="" >
			<option value="">Grade</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
			</select>
			</select>

			<select id="JSID" class="col-md-6 col-xs-6 form" name="seventhSubject" id="" >
			<option value="">Select Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Agriculture Science">Agriculture Science</option>
				<option value="Arabic Language">Arabic Language</option>
				<option value="Art and Design">Art and Design</option>
				<option value="Biology">Biology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Commerce">Commerce</option>
				<option value="Commerce">Civic Education</option>
				<option value="Computer Science">Computer Science</option>
				<option value="Design and Technology">Design and Technology</option>
				<option value="Economics">Economics</option>
				<option value="Environment Management">Environment Management</option>
				<option value="French">French</option>
				<option value="Food and Nutrition">Food and Nutrition</option>
				<option value="Fashion and Textiles">Fashion and Textiles</option>
				<option value="Geography">Geography</option>
				<option value="History">History</option>
				<option value="Islamic Relious Studies">Islamic Relious Studies</option>
				<option value="Litrature in Enlish">Litrature in Enlish</option>
				<option value="Physics">Physics</option>
				<option value="Sociology">Sociology</option>
				<option value="Statistics">Statistics</option>
			</select>
			<select id="JSID" class="col-md-2 col-xs-2 leftM form" name="seventhGrade" id="" >
			<option value="">Grade</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
			</select>
			</select>

			<select id="JSID" class="col-md-6 col-xs-6 form" name="eightSubject" id="" >
			<option value="">Select Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Agriculture Science">Agriculture Science</option>
				<option value="Arabic Language">Arabic Language</option>
				<option value="Art and Design">Art and Design</option>
				<option value="Biology">Biology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Commerce">Commerce</option>
				<option value="Commerce">Civic Education</option>
				<option value="Computer Science">Computer Science</option>
				<option value="Design and Technology">Design and Technology</option>
				<option value="Economics">Economics</option>
				<option value="Environment Management">Environment Management</option>
				<option value="French">French</option>
				<option value="Food and Nutrition">Food and Nutrition</option>
				<option value="Fashion and Textiles">Fashion and Textiles</option>
				<option value="Geography">Geography</option>
				<option value="History">History</option>
				<option value="Islamic Relious Studies">Islamic Relious Studies</option>
				<option value="Litrature in Enlish">Litrature in Enlish</option>
				<option value="Physics">Physics</option>
				<option value="Sociology">Sociology</option>
				<option value="Statistics">Statistics</option>
			</select>
			<select id="JSID" class="col-md-2 col-xs-2 leftM form" name="eightGrade" id="" >
			<option value="">Grade</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
			</select>
			</select>

			<select id="JSID" class="col-md-6 col-xs-6 form" name="ninethSubject" id="" >
			<option value="">Select Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Agriculture Science">Agriculture Science</option>
				<option value="Arabic Language">Arabic Language</option>
				<option value="Art and Design">Art and Design</option>
				<option value="Biology">Biology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Commerce">Commerce</option>
				<option value="Commerce">Civic Education</option>
				<option value="Computer Science">Computer Science</option>
				<option value="Design and Technology">Design and Technology</option>
				<option value="Economics">Economics</option>
				<option value="Environment Management">Environment Management</option>
				<option value="French">French</option>
				<option value="Food and Nutrition">Food and Nutrition</option>
				<option value="Fashion and Textiles">Fashion and Textiles</option>
				<option value="Geography">Geography</option>
				<option value="History">History</option>
				<option value="Islamic Relious Studies">Islamic Relious Studies</option>
				<option value="Litrature in Enlish">Litrature in Enlish</option>
				<option value="Physics">Physics</option>
				<option value="Sociology">Sociology</option>
				<option value="Statistics">Statistics</option>
			</select>
			<select id="JSID" class="col-md-2 col-xs-2 leftM form" name="ninethGrade" id="" >
			<option value="">Grade</option>
				<option value="A1">A1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="C4">C4</option>
				<option value="C5">C5</option>
				<option value="C6">C6</option>
				<option value="D7">D7</option>
				<option value="E8">E8</option>
				<option value="F9">F9</option>
			</select>
			
			<select id="JSID" name="" id="" oninput="this.className = ''">
				<option value="">Number of sittings</option>	
				<option value="one">(1) one sittings</option>	
				<option value="two">(2) two sittings</option>	
			</select>
        </div>
		<!-- // O Level end -->

		<div class="tab"><h3>Preferred Course of studies</h3><br>
			<select id="JSID" name="FirstChoiceCourse" id="" oninput="this.className = ''">
				<option value="">First Choice</option>
				<option value="beginner">Beginner</option>
				<option value="intermediate">Intermediate</option>
				<option value="expert">Expert</option>
			</select>
			<select id="JSID" name="SecondChoiceCourse" id="" oninput="this.className = ''">
				<option value="">Second Choice</option>
				<option value="social-media">Social media</option>
				<option value="friend">Friend</option>
				<option value="other">Other</option>
			</select>
		</div>
		<!-- file upload -->

		<div class="tab"><h3>Upload the following document</h3><br>
			<span>Your Passport</span>
			<input type="file" name="profilePic"  oninput="this.className = ''"> 
			<span>Jamb Result</span>
			<input type="file" name="Jamb" placeholder="Referee Name" oninput="this.className = ''"> 
			<span>OlevelResult</span>
			<input type="file" name="Olevel" placeholder="Referee Name" oninput="this.className = ''">
		</div>

		
		<!-- file upload end-->
        
        <!-- <div style="overflow:auto;">
          <div style="float:right;"> -->
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
			<button type="button" id="nextBtn" name="sub"  onclick="nextPrev(1)">Next</button>
			<div >
				<div style="float:right; margin-top: -20px;">
					<button type="submit" id="next" name="submit" >Submit</button>
				</div>
        	</div>
        
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          
        </div>
        
        </form>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- bodies -->
<?php include("bodies.php");?>
<!-- bodies end -->

    
<script src="js/application.js"></script>
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
</body>
</html>