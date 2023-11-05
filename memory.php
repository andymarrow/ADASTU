<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by HTML5XCSS3 dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.html5xcss3.com">

	<title>Memories</title>
  
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
<style >
.wrapper {
	position: relative;
	overflow: hidden;
	padding-top: 56.25%;


}
.wrapper iframe{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	

}


html{
	scroll-behavior: smooth;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #00FFFF;
  color: black;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  border-radius: 50%;
  transition: transform .2s;
}

#myBtn:hover {
  background-color: #555;
  transform: scale(1.5);
  color: white;
}
</style>




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
	<button onclick="topFunction()" id="myBtn" title="Go to top" style="font-size: 40px;">&#8593;</button>

<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div id="main-content">
					<article>
						<center><img src="images/collageimage.jpg" alt="memories" id="ADASTU" /></center>
						<div class="art-content">
							<center><h1>memories and tour of adama made by students at astu</h1></center></br></br>
					
							<div class="excerpt"><center><h1>tour</h1></center></div>
							
							<blockquote><p>special thanks to people who helped us gather the materials</p></blockquote>
							
						
							
							<div class="note">
							  <ul>
								<a href="#" style="text-decoration: none;"><li>
								<dl>
									
									<li>
									<p><a href="#ASTU ADAMA UNIVERSITY WALKING TOUR AddisAbaba Ethiopia 2023 4k ውብ ዩኒቨርሲቲ ጉብኝት by waki" style="text-decoration: none;">ASTU ADAMA UNIVERSITY WALKING TOUR AddisAbaba Ethiopia 2023 4k ውብ ዩኒቨርሲቲ ጉብኝት by waki</a></p></li>
									<li>
									<p><a href="#Adama Science and Technology campus Tour by mahita" style="text-decoration: none;">Adama Science and Technology campus Tour by mahita</a></p></li>
									

								
								</dl>
								</li>
								


								<a href="#" style="text-decoration: none;"><li>
								<dl>
									
									<li>
									<p><a href="#PRODUCTIVE DAY OF ASTU STUDENT| የASTU ተማሪ የቀን ውሎ made by cross production" style="text-decoration: none;">PRODUCTIVE DAY OF ASTU STUDENT| የASTU ተማሪ የቀን ውሎ made by cross production</a></p></li>
									<li>
									<p><a href="#ADAMA SCIENCE AND TECHNOLOGY UNIVERSITY (ASTU)" style="text-decoration: none;">ADAMA SCIENCE AND TECHNOLOGY UNIVERSITY (ASTU)</a></p></li>
									

									
										
								</dl>
								</li>









							  <div class="clear"></div>
							</div>

							<div class="excerpt"><center><h1>memories of astu</h1></center></div>
							
							<blockquote><p>special thanks to people who helped us gather the materials</p></blockquote>
							
						
							
							<div class="note">
							  <ul>
								<a href="#" style="text-decoration: none;"><li>
								<dl>
									
									<li>
									<p><a href="#ASTU GC Students Dance | የአስቱ ተማሪዎች ጭፈራ-HD made by ersas media" style="text-decoration: none;">ASTU GC Students Dance | የአስቱ ተማሪዎች </br>ጭፈራ-HD made by ersas media</a></p></li>
									<li>
									<p><a href="#አዝናኝ ገጠመኞች | ASTU" style="text-decoration: none;">አዝናኝ ገጠመኞች | ASTUአዝናኝ ገጠመኞች | ASTU</a></p></li>
									

								
								</dl>
								</li>
								


								<a href="#" style="text-decoration: none;"><li>
								<dl>
									
									<li>
									<p><a href="#የ Final ቴንሽን ከ ASTU ተማሪዎች ጋር | Adama Science and Technology Campus" style="text-decoration: none;">የ Final ቴንሽን ከ ASTU ተማሪዎች ጋር | </br>Adama Science and Technology Campus</a></p></li>
									<li>
									<p><a href="#Astu(Adama - University) - 2021 - GC amazing 35 day left celebration" style="text-decoration: none;">Astu(Adama - University) - 2021 - GC amazing </br>35 day left celebrationAstu(Adama - University) - 2021 - GC </br>amazing 35 day left celebration</a></p></li>
									

									
										
								</dl>
								</li>









							  <div class="clear"></div>
							</div>
							
						</div>
					</article>
					
				</div>
			</div>
		</div>
		
	</div>









	<section id="Adama Science and Technology campus Tour by mahita">
			<center><font size="8"><h1 class="btn btn-11" style="margin: 0; padding: 0; font-size: 2vw;">Adama Science and Technology </br>campus Tour by mahita</h1></font></center></br>
				<div class="wrapper">
					<iframe src="https://www.youtube.com/embed/w2i_cgCYbgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<section id="ASTU ADAMA UNIVERSITY WALKING TOUR AddisAbaba Ethiopia 2023 4k ውብ ዩኒቨርሲቲ ጉብኝት by waki">
			<center><font size="8"><h1 class="btn btn-11" style="margin: 0; padding: 0; font-size: 2vw;">ASTU ADAMA UNIVERSITY WALKING TOUR AddisAbaba </br>Ethiopia 2023 4k ውብ ዩኒቨርሲቲ ጉብኝት by waki </h1></font></center></br>
				<div class="wrapper">
					<iframe src="https://www.youtube.com/embed/Vtup-mpaNWM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<section id="PRODUCTIVE DAY OF ASTU STUDENT| የASTU ተማሪ የቀን ውሎ made by cross production">
			<center><font size="8"><h1 class="btn btn-11" style="margin: 0; padding: 0; font-size: 2vw;">PRODUCTIVE DAY OF ASTU STUDENT| የASTU </br>ተማሪ የቀን ውሎ made by cross production</h1></font></center></br>
				<div class="wrapper">
					<iframe src="https://www.youtube.com/embed/jqFeROnD8Is" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<section id="ADAMA SCIENCE AND TECHNOLOGY UNIVERSITY (ASTU)">
			<center><font size="8"><h1 class="btn btn-11" style="margin: 0; padding: 0; font-size: 2vw;">ADAMA SCIENCE AND TECHNOLOGY UNIVERSITY (ASTU)</h1></font></center></br>
				<div class="wrapper">
					<iframe src="https://www.youtube.com/embed/Gwj0T5LFZBQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</section>
	
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


	<section id="አዝናኝ ገጠመኞች | ASTU">
			<center><font size="8"><h1 class="btn btn-11" style="margin: 0; padding: 0; font-size: 2vw;">አዝናኝ ገጠመኞች | ASTU</h1></font></center></br>
				<div class="wrapper">
					<iframe src="https://www.youtube.com/embed/QlRsHpjlWHw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<section id="ASTU GC Students Dance | የአስቱ ተማሪዎች ጭፈራ-HD made by ersas media">
			<center><font size="8"><h1 class="btn btn-11" style="margin: 0; padding: 0; font-size: 2vw;">ASTU GC Students Dance | የአስቱ ተማሪዎች</br> ጭፈራ-HD made by ersas media</h1></font></center></br>
				<div class="wrapper">
					<iframe src="https://www.youtube.com/embed/7RV66sSDoW8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<section id="የ Final ቴንሽን ከ ASTU ተማሪዎች ጋር | Adama Science and Technology Campus">
			<center><font size="8"><h1 class="btn btn-11" style="margin: 0; padding: 0; font-size: 2vw;">የ Final ቴንሽን ከ ASTU ተማሪዎች ጋር | Adama </br>Science and Technology Campus</h1></font></center></br>
				<div class="wrapper">
					<iframe src="https://www.youtube.com/embed/POSuW9izJ9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<section id="Astu(Adama - University) - 2021 - GC amazing 35 day left celebration">
			<center><font size="8"><h1 class="btn btn-11" style="margin: 0; padding: 0; font-size: 2vw;">Astu(Adama - University) - 2021 - GC</br> amazing 35 day left celebration</h1></font></center></br>
				<div class="wrapper">
					<iframe src="https://www.youtube.com/embed/nJuJGG04Wxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</section>
	

					</article>
					
				</div>
			</div>
		</div>
		
	</div>
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

	<script>
		//Get the button
		var mybutton = document.getElementById("myBtn");
		
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		
		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}
		
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
		</script>

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	
</body>
</html>