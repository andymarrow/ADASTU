<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by HTML5XCSS3 dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.html5xcss3.com">

	<title>Contact - Map</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	<link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>

<body class="sub-page">
	
<?php
 session_start();

 if(isset($_SESSION["user"])){
	 if(($_SESSION["user"])=="" or $_SESSION['usertype']!='p'){
		 header("location: login.php");
	 }

 }else{
	 header("location: login.php");
 }
 ?>
	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">ADASTU</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
					<li>
                        <a class="page-scroll" href="TRIAL.php">General</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="memory.php">Memories</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="single.html"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.php">Contact/Map</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- Background Gradients-->
	<div  class="site-gradients">
		<div class="site-gradients-media">
			<figure>
				<img src="Another%20Yosemite%20short%20movie%20project%20%E2%80%93%20Modern_files/PcLGXNjMTdiFVKTrElCl__DSC2245.jpg" alt="PcLGXNjMTdiFVKTrElCl__DSC2245" srcset="https://themedemos.webmandesign.eu/modern/wp-content/uploads/sites/8/2014/11/PcLGXNjMTdiFVKTrElCl__DSC2245.jpg 1920w, https://themedemos.webmandesign.eu/modern/wp-content/uploads/sites/8/2014/11/PcLGXNjMTdiFVKTrElCl__DSC2245-420x280.jpg 420w, https://themedemos.webmandesign.eu/modern/wp-content/uploads/sites/8/2014/11/PcLGXNjMTdiFVKTrElCl__DSC2245-744x497.jpg 744w, https://themedemos.webmandesign.eu/modern/wp-content/uploads/sites/8/2014/11/PcLGXNjMTdiFVKTrElCl__DSC2245-1200x801.jpg 1200w" sizes="(max-width: 1617px) 100vw, 1617px" height="1080" width="1617">
			</figure>
		</div>
	</div>
	
	<header class="container">
		<div class="site-branding">
			<h1 class="site-title">
				<a href="index.php">
					<span>ADASTU</span>
				</a>
			</h1>
			<h2 class="site-description">Welcome to Us !</h2>
		</div>
		<div class="social-links">
			<ul class="list-inline">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="https://www.facebook.com/profile.php?id=61552844441837"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="https://www.instagram.com/gtb0909/"><i class="fa fa-instagram"></i></a></li>
							
			</ul>
		</div>
	</header>

	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div id="main-content">
					<article>
						<div class='embed-container maps'>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.2819621024028!2d39.29226621393606!3d8.56886369838706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b1fe4c294e6cb%3A0x6b86d6a89f24215c!2sAdama%20Science%20And%20Technology%20University%20%2CASTU%2C%20Adama%20%2CEthiopia!5e0!3m2!1sen!2suk!4v1677626092289!5m2!1sen!2suk" width="1170"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
						<div class="art-content">
							<div class="row">
								<div class="col-md-4 box-item">
									<h3>Contact Info</h3>
									<span>if you want to get one of our team members</span><br> <br>
									<p>Miheretab Samson <br>
										Addis Ababa</p>
									   
										</p>
										<p>miheretabsamson90@gmail.com</p><br/>
									<p>Miheretab Ayele<br>
										Hawasa</p>
									 
										</p>
									<p>mihreayele@gmail.com</p><br/>
									<p>Natnael Metku<br>
									Shashemene</p>
									   
										</p>
									<p>mitikunathan@gmail.com</p><br/>
									
								</div>
								<div class="col-md-8">
									<h3>Contact Form</h3>
									<form action="contact.php" method="post">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Message" style="height: 190px;"></textarea>
												</div>						
												<button type="submit" class="btn btn-skin btn-block" name="submitcontact" id="submitcontact">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
		
	</div>
<?php
require_once 'vendor/autoload.php';
require_once 'config/constants.php';

if(isset($_POST['submitcontact'])){
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($_POST['subject']))
  ->setFrom([EMAIL => $_POST['email']])
  ->setTo(['thegreattobeteam@gmail.com'])
  ->setBody($_POST['message'])
  ;

// Send the message
if ($mailer->send($message)){
  echo "Mail sent.. !!";
}else{
  echo "Failed to send";
}
}

?>
<!-- FOOTER -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row"> 
					<div class="col-footer col-md-3">
						<h2 class="footer-title">About Us</h2>
						<div class="textwidget">we are a group of students dedicated to help students at astu university<br/><br/>
							and to make the university well known for its outstanding student support platform.


						</div>
					</div> 
					
					<div class="col-footer col-md-3">
						<h2 class="footer-title">update</h2>
						If you want to receive our latest news send directly to your email, please leave your email address bellow. Subscription is free and you can cancel anytime.
						<form action="subscribe-form.php" method="post">
							<input type="email" name="subscribe-form" value="" size="40" placeholder="Your Email" />
							<button type="submit"  name="subscribe-btn" class="btn btn-skin">SUBSCRIBE</button>
						</form>
					</div>
					<div class="col-footer col-md-3">
						<h2 class="footer-title">Tags</h2>
						<div class="footer-tags">
							
							
							<a href="booksandvid.html#books">books</a>
							<a href="booksandvid.html#Fresh mans c++ final">assignment</a>
							<a href="booksandvid.html#Fresh mans c++ final">tests</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p style="color: black;">made by :- The GTB</p>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="https://www.facebook.com/profile.php?id=61552844441837"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="https://www.instagram.com/gtb0909/"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://t.me/+4OSrJNIvHc00ODM0"><i class="bx bxl-telegram"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">contact us</a>
							</li>
							<li><a href="#">support us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
  
	
  
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>