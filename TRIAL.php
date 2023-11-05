<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by HTML5XCSS3 dot com - Free Responsive Html5 Templates">
   

	<title>General</title>
  






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
	/* Styles for the pop-up box */
.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    z-index: 9999;
  }

  /* Styles for the overlay */
  .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9998;
  }
  a{
  color: aqua;
  
 
}

.readmore__content {
  max-width: 45rem;
  width: 100%;
  display: flex;
}

button.readmore__toggle {
  display: flex;
  margin-top: 1rem;
  border: none;
  background: linear-gradient(0deg, rgba(23,111,234,1) 0%, rgba(4,38,252,1) 100%);
  color: #ffffff;
  padding: .8rem;
  cursor: pointer;
  border-radius: 2rem;
}




</style>

</head>

 <body class="index-page">


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

	<!-- CAROUSEL -->
	<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel" data-interval="4000">
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				
				<img src="images\odagate.jpg" style="height: 1000px;" alt="...">
				<!-- Static Header -->
				<div class="container">
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>ADASTU General</h1>
						<hr>
						<p>A place where you can find any books, tests and assignments <br>and tests that our team could gather</p>
						

					</div>
				</div><!-- /header-text -->
				</div>
			</div>
			<div class="item">
				<img src="images\astu males dorm.jpg" style="height: 1000px;" alt="...">
				<!-- Static Header -->
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>Be with us</h1>
						<hr>
						<p>be with us to get every new updates dailey/ be a part of a vast community</p>
						
					</div>
				</div><!-- /header-text -->
			</div>
			
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div> <!-- Carousel -->
	
	<header class="container">
		<div class="site-branding">
			<h1 class="site-title">
				<a href="index.php">
					<span>ADASTU</span>
				</a>
			</h1>
			<h2 class="site-description">Welcome to Us !</h2>
		</div>
		<div class="social-links col-md-4 " >
			<ul class="list-inline social-buttons" >
				<li><a href="https://www.facebook.com/profile.php?id=61552844441837"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			
				<li><a href="https://www.instagram.com/gtb0909/"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>
	</header>
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
	
		<!-- ////////////Content Box 01 -->
		<section class="box-content box-1">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h2><center>1st year 1st semister</center></h2>
								<h3>Applied mathematics 1</h3>
								<dl><dt><button type="button" class="thetogglecontroller1" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83" ><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>
									<div class="tobetoggled1" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#Applied1bagashaw's"><dd>Applied 1 maths bagashaw</dd></a></li>
											<li><a href="booksandvid.html#Applied 1 course outline"><dd>Applied 1 course outline</dd></a></li>
											<li><a href="booksandvid.html#Applied 1 course outline updated"><dd>Applied 1 course outline updated</dd></a></li>
											
											<li><a href="booksandvid.html#ZENA mathematics"><dd>Zena maths</dd></a></li>
											<li><a href="booksandvid.html#APPLIED 1 calculus"><dd>Applied 1 calculus</dd></a></li>
											<li><a href="booksandvid.html#APPLIED 1 Addis ababa university"><dd>Applied 1 Addis Ababa university</dd></a></li>
											<li><a href="booksandvid.html#AAU lecture notes"><dd>chapter 1 and 3</dd></a></li>
											<li><a href="booksandvid.html#Debre berhan lecture notes"><dd>Applied 1 mathematics chapter 3 debre berhan and 1</dd></a></li>
											<li><a href="booksandvid.html#Zip FILE FOR ALL FIRST YEAR"><dd>A ZIP FILE FOR ALL !ST YEAR</dd></a></li>

										</ul>
									</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller51" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
									<div class="tobetoggled51" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#Applied maths test ASTU"><dd>Applied maths test ASTU</dd></a></li>
											<li><a href="booksandvid.html#Applied math test134"><dd>Applied math test 1</dd></a></li>
											<li><a href="booksandvid.html#Applied maths ASTU final exam"><dd>Applied maths ASTU final exam</dd></a></li>
											<li><a href="booksandvid.html#Applied maths ASTU final exam"><dd>Applied maths ASTU final exam</dd></a></li>
											<li><a href="booksandvid.html#Applied 1 maths tests"><dd>Applied 1 maths tests</dd></a></li>
											<li><a href="booksandvid.html#maths exam EESTU 2007"><dd>maths exam EESTU 2007</dd></a></li>
											<li><a href="booksandvid.html#maths final 2017"><dd>maths final 2017</dd></a></li>
											<li><a href="booksandvid.html#maths final exam -1-1"><dd>maths final exam -1-1</dd></a></li>
											<li><a href="booksandvid.html#Maths final -astu- ቀለሜ"><dd>Maths final -astu- ቀለሜ</dd></a></li>
											<li><a href="booksandvid.html#Maths final images"><dd>Maths final images</dd></a></li>
										</ul>
									</div>
								</dl>
								
								
								<dl><dt><button type="button" class="thetogglecontroller40" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br></dt>
									<div class="tobetoggled40" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#Applied 1 mathematics solution for worksheet 2"><dd>Applied 1 mathematics solution for worksheet 2</dd></a></li>
											<li><a href="booksandvid.html#Applied 1 mathematics AAu worksheet 1"><dd>Applied 1 mathematics AAu worksheet 1</dd></a></li>
											
										</ul>
									</div>
							</dl>

								
							</div>
						</div>
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h3>General Civics</h3>
								<dl><dt><button type="button" class="thetogglecontroller2" style="background-color: transparent; border: 0px ;"><font size="5" color="#048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

								
								<div class="tobetoggled2" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#Girma civics and ethics"><dd>Girma Civics and Ethics</dd></a></li>
											<li><a href="booksandvid.html#Introduction to civics and ethics MODULE"><dd>Introduction to Civics and Ethics Module</dd></a></li>
											<li><a href="booksandvid.html#Understanding"><dd>Understanding Civics and Ethics</dd></a></li>
											<li><a href="booksandvid.html#short"><dd>short notes</dd></a></li>	

										</ul>
									
								</div>
							</dl>
								
							<dl><dt><button type="button" class="thetogglecontroller52" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
								<div class="tobetoggled52" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Adama science and technology civic exam"><dd>Adama science and technology civic exam</dd></a></li>
										<li><a href="booksandvid.html#Civic final exam @keleme 2013"><dd>Civic final exam @keleme 2013</dd></a></li>
										<li><a href="booksandvid.html#Civic exams keleme"><dd>Civic exams keleme</dd></a></li>
										<li><a href="booksandvid.html#Civic exams images"><dd>Civic exams images</dd></a></li>	

									</ul>
								
							</div>
						</dl>
								
								
								
								
								<dl><dt><button type="button" class="thetogglecontroller42" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGMNETS</i></font></button></br></br>
								
									<div class="tobetoggled42" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#civic group assigment sample"><dd>civic group assigment sample</dd></a></li>
											<li><a href="booksandvid.html#civic individual assigment sample"><dd>civic individual assigment sample</dd></a></li>
											
										</ul>
									
								</div>
							</dl>

								
							</div>
						</div>
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h3>General Physics</h3>
								<dl><dt><button type="button" class="thetogglecontroller3" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

								<div class="tobetoggled3" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#serway_&_jewett_physics_"><dd>Serway & Jewett Physics for scientists</dd></a></li>
										<li><a href="booksandvid.html#General physics lecture notes"><dd>General Physics Lecture notes</dd></a></li>
										<li><a href="booksandvid.html#General physics MODULE"><dd>General Physics Module</dd></a></li>
										<li><a href="booksandvid.html#General physics best short note"><dd>General Physics best short notes</dd></a></li>
										<li><a href="booksandvid.html#General physics module of Addis ababa university"><dd>General Physics Module of Addis Ababa university</dd></a></li>

									</ul>
								
								</div>	
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller55" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
									<div class="tobetoggled55" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#All physics questions"><dd>All physics questions</dd></a></li>
											<li><a href="booksandvid.html#Physics 2013 final with answers"><dd>Physics 2013 final with answers</dd></a></li>
											<li><a href="booksandvid.html#Physics EESTU 2007 test"><dd>Physics EESTU 2007 test</dd></a></li>
											<li><a href="booksandvid.html#Physics final astu keleme"><dd>Physics final astu keleme</dd></a></li>
											<li><a href="booksandvid.html#Physics final astu be keleme"><dd>Physics final astu be keleme</dd></a></li>
											<li><a href="booksandvid.html#Physics mid astu keleme"><dd>Physics mid astu keleme</dd></a></li>
											<li><a href="booksandvid.html#Physics Test"><dd>Physics Test</dd></a></li>
	
										</ul>
									
									</div>	
									</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller43" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br></dt>
								
									<div class="tobetoggled43" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#general physics assignments"><dd>physics assignments and answers</dd></a></li>
											
										</ul>
									
									</div>	
									</dl>

								
							</div>
						</div>



						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Communicative english</h3>
								<dl><dt><button type="button" class="thetogglecontroller4" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

								<div class="tobetoggled4" style="display: none;">	
									<ul>
										<li><a href="booksandvid.html#English tenses"><dd>English tenses </dd></a></li>
										<li><a href="booksandvid.html#The basic form of English verb tenses"><dd>The basic form of English verb tenses</dd></a></li>
										<li><a href="booksandvid.html#Present simple vs present continuous"><dd>Present simple vs Present continuous tenses</dd></a></li>
										<li><a href="booksandvid.html#short notes english"><dd>English short notes</dd></a></li>

									</ul>
								</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller53" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
								
									<div class="tobetoggled53" style="display: none;">	
										<ul>
											<li><a href="booksandvid.html#English EESTU 2017"><dd>English EESTU 2017</dd></a></li>
											<li><a href="booksandvid.html#Key words from the units in the text book"><dd>Key words from the units in the text book</dd></a></li>
											<li><a href="booksandvid.html#Present progressive vs simple present"><dd>Present progressive vs simple present</dd></a></li>
											<li><a href="booksandvid.html#Images on tests of english"><dd>Images on tests of english</dd></a></li>
	
										</ul>
									</div>
									</dl>
								
								
								<a href="#"><a href="#" class="myImageLink"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></a></br></br>
								
								

								
							</div>
						</div>


						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
				
								<h3>General Chemistry</h3>
								<dl><dt><button type="button" id="thetogglecontroller5" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

									<div class="tobetoggled5" style="display: none;">	
										<ul>
											<li><a href="booksandvid.html#R-chang General chemistry"><dd>R-chang General Chemistry</dd></a></li>
											<li><a href="booksandvid.html#Eneyew chemistry pdf's"><dd>Eneyew Chemistry Pdf's</dd></a></li>
											<li><a href="booksandvid.html#chapter 4 yilkal"><dd>chapter 4 Yilkal</dd></a></li>
	
										</ul>
									</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller54" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
								
									<div class="tobetoggled54" style="display: none;">	
										<ul>
											<li><a href="booksandvid.html#Chemistry EESTU 2007"><dd>Chemistry EESTU 2007</dd></a></li>
											<li><a href="booksandvid.html#CHEMO 2014 FINAL"><dd>CHEMO 2014 FINAL</dd></a></li>
											<li><a href="booksandvid.html#CHEMO 2016 MID"><dd>CHEMO 2016 MID</dd></a></li>

											<li><a href="booksandvid.html#CHEMO 2017 FINAL"><dd>CHEMO 2017 FINAL</dd></a></li>
											<li><a href="booksandvid.html#G. Chemistry mid 2009"><dd>G. Chemistry mid 2009</dd></a></li>
											<li><a href="booksandvid.html#images of tests for chemistry part 1"><dd>images of tests for chemistry part 1</dd></a></li>
											<li><a href="booksandvid.html#images of tests for chemistry part 2"><dd>images of tests for chemistry part 2</dd></a></li>
	
										</ul>
									</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller41" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br>
									<div class="tobetoggled41" style="display: none;">	
										<ul>
											<li><a href="booksandvid.html#final projects for chemistry"><dd>final projects for chemistry</dd></a></li>
										
	
										</ul>
									</div>
								</dl>
								
								
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
				
								<h3>Python</h3>
								<dl><dt><button type="button" class="thetogglecontroller6" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

								<div class="tobetoggled6" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Think python"><dd>Think python</dd></a></li>
										<li><a href="booksandvid.html#python notes for proffecionals"><dd>Python Notes for Proffessionals</dd></a></li>
										<li><a href="booksandvid.html#Introduction to absolute beginners"><dd>Introduction to absolute beginners</dd></a></li>
										<li><a href="booksandvid.html#hands-on python"><dd>Hands-on Python</dd></a></li>
										<li><a href="booksandvid.html#python 3"><dd>Python 3</dd></a></li>
										<li><a href="booksandvid.html#lecture notes on python"><dd>Lecture notes for Python</dd></a></li>

									</ul>
								</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller56" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
									<div class="tobetoggled56" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#cse1101 2014"><dd>cse1101 2014</dd></a></li>
											<li><a href="booksandvid.html#New document of test 1 for python"><dd>New document of test 1 for python</dd></a></li>
											<li><a href="booksandvid.html#New document of test 2 for python"><dd>New document of test 2 for python</dd></a></li>
											<li><a href="booksandvid.html#New document of test 3 for python"><dd>New document of test 3 for python</dd></a></li>
											<li><a href="booksandvid.html#New document of test 4 for python"><dd>New document of test 4 for python</dd></a></li>
											<li><a href="booksandvid.html#New document of test 5 for python"><dd>New document of test 5 for python</dd></a></li>
											<li><a href="booksandvid.html#Python exam"><dd>Python exam</dd></a></li>
											<li><a href="booksandvid.html#Python exam 2"><dd>Python exam 2</dd></a></li>
											<li><a href="booksandvid.html#Python exam3"><dd>Python exam3</dd></a></li>
											<li><a href="booksandvid.html#Python exam 4"><dd>Python exam 4</dd></a></li>
											<li><a href="booksandvid.html#Python image test part 1"><dd>Python image test part 1</dd></a></li>
											<li><a href="booksandvid.html#Python image test part 2"><dd>Python image test part 2</dd></a></li>
											<li><a href="booksandvid.html#Python image test part 2"><dd>ASTU zip file exam</dd></a></li>
										
										</ul>
									</div>
									</dl>
								
								
								
									<a href="#"><a href="#" class="myImageLink"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></a></br></br>
								
								
								
								
							</div>
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h2><center>1st year 2nd semister</center></h2>
								<h3>Applied mathematics 2</h3>
								<dl><dt><button type="button" class="thetogglecontroller7" style="background-color: transparent; border: 0px ;"><font size="5" color="  #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

								<div class="tobetoggled7" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Applied 2 begashaw maltot"><dd>Applied 2 Begashaw Maltot</dd></a></li>
										<li><a href="booksandvid.html#Applied mathematics lecture notes"><dd>Applied mathematics Lecture Notes</dd></a></li>
										<li><a href="booksandvid.html#lecture notes fourier-1"><dd>Lecture note Fourier-1</dd></a></li>
										<li><a href="booksandvid.html#Math 1102 chapter 4"><dd>Math 1102 chapter 4</dd></a></li>
										<li><a href="booksandvid.html#Chapter 2 power series"><dd>chapter 2 Power series</dd></a></li>
										<li><a href="booksandvid.html#zip file for all 2nd year"><dd>zip file for all 2nd year</dd></a></li>
										
									</ul>
								</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller57" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
								
									<div class="tobetoggled57" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#Applied || final exam"><dd>Applied || final exam</dd></a></li>
											<li><a href="booksandvid.html#Applied maths || ASTU"><dd>Applied maths || ASTU</dd></a></li>
											<li><a href="booksandvid.html#Applied maths test"><dd>Applied maths test</dd></a></li>
											<li><a href="booksandvid.html#ASTU Applied II math final(@fresh_astu)"><dd>ASTU Applied II math final(@fresh_astu)</dd></a></li>
											<li><a href="booksandvid.html#ASTU Applied II math final(@fresh_astu) second"><dd>ASTU Applied II math final(@fresh_astu) second</dd></a></li>
											<li><a href="booksandvid.html#images on applied 2 test"><dd>images on applied 2 test</dd></a></li>
										</ul>
									</div>
									</dl>
								
								
								<a href="#"><a href="#" class="myImageLink"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></a></br></br>
								
								

								
							</div>
						</div>
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
				
								<h3>C++</h3>
								<dl><dt><button type="button" class="thetogglecontroller8" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

								<div class="tobetoggled8" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#C++ lecture notes"><dd>C++ Lecture notes</dd></a></li>
										<li><a href="booksandvid.html#C++ words"><dd>C++ Words</dd></a></li>
										<li><a href="booksandvid.html#C++ How to program"><dd>C++ how to program<sub>(8<sup>th</sup> edition)</sub></dd></a></li>
										<li><a href="booksandvid.html#Learn"><dd>Learn c++</dd></a></li>
										<li><a href="booksandvid.html#Programming fundamentals"><dd>Programing Fundamentals</dd></a></li>
										<li><a href="booksandvid.html#Starting out with c++"><dd>Starting out with c++</dd></a></li>
										<li><a href="booksandvid.html#chaptered C++ section"><dd>Chaptered c++ section</dd></a></li>


									</ul>
								</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller59" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
								
									<div class="tobetoggled59" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#Astu c++ final exam collection" class="myImageLink"><dd>Astu c++ final exam collection</dd></a></li>
											<li><a href="booksandvid.html#C++ notes and exam" class="myImageLink"><dd>C++ notes and exam</dd></a></li>

											
											<li><a href="data folder\1st year 2nd semister\tests\c++\c++ exams.pdf" class="myImageLink"><dd>c++ exams</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\c++\C++ Final exam que.pdf" class="myImageLink"><dd>c++ final exam que</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\c++\C++ mid exam.pdf" class="myImageLink"><dd>c++ mid exam</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\c++\C++ practice problems.pdf" class="myImageLink"><dd>c++ practise problems</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\c++\mid.pdf" class="myImageLink"><dd>mid</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\c++\mid1.pdf" class="myImageLink"><dd>mid 1</dd></a></li>
	
										</ul>
									</div>
									</dl>
								
								
								
								<dl><dt><button type="button" class="thetogglecontroller44" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br>
									<div class="tobetoggled44" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#C++ assignments"><dd>C++ assignments</dd></a></li>
											
	
										</ul>
									</div>
									</dl>
								
								
								
							</div>
						</div>


						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
				
								<h3>Introduction to emerging technologies</h3>
								<dl><dt><button type="button" class="thetogglecontroller9" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

								<div class="tobetoggled9" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Introduction to emerging technologies"><dd>Introduction to emerging technologies</dd></a></li>
										<li><a href="booksandvid.html#Welcome to emerging technologies"><dd>Welcome to emerging technologies</dd></a></li>
										<li><a href="booksandvid.html#Introduction to emerging technologies"><dd>Introduction to emerging technologies<sub>(3 universities)</sub></dd></a></li>
										<li><a href="booksandvid.html#Chapter 2 emerging technolgy"><dd>Chapter 2 emerging technologies</dd></a></li>
										<li><a href="booksandvid.html#emerging technolgy course outline"><dd>emerging technolgy course outline</dd></a></li>
										
									</ul>
								</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller61" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
								
									<div class="tobetoggled61" style="display: none;">
										<ul>
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\@keleme_2013 Emerging final HU (1).pdf" class="myImageLink"><dd>@keleme_2013 Emerging final HU (1)</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\@keleme_2013 Emerging final HU.pdf" class="myImageLink"><dd>@keleme_2013 Emerging final HU</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\@keleme_2013 Emerging technology final exam.pdf" class="myImageLink"><dd>@keleme_2013 Emerging technology final exam</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\@keleme_2013Emerging final exam.pdf" class="myImageLink"><dd>@keleme_2013Emerging final exam</dd></a></li>
										
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\Emerging final exam @keleme_2013.pdf" class="myImageLink"><dd>Emerging final exam @keleme_2013</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\Emerging New mid exams collection ExamClass.pdf" class="myImageLink"><dd>Emerging New mid exams collection ExamClass</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\emerging test bank.pdf" class="myImageLink"><dd>emerging test bank</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\emerging-final-adiss-ababa-ቀለሜ.pdf" class="myImageLink"><dd>emerging-final-adiss-ababa-ቀለሜ</dd></a></li>
										
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\emerging-final-arba-minch-ቀለሜ.pdf" class="myImageLink"><dd>emerging-final-arba-minch-ቀለሜ</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\emerging-final-jimma-ቀለሜ.pdf" class="myImageLink"><dd>emerging-final-jimma-ቀለሜ</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\introduction to emerging technologies\New Doc 2022-12-02 (1).pdf" class="myImageLink"><dd>New Doc 2022-12-02 (1)</dd></a></li>
											<li><a href="booksandvid.html#emerging-final and mid collection of tests" class="myImageLink"><dd>emerging-final and mid collection of tests</dd></a></li>

										</ul>
									</div>
									</dl>
								
								
								<a href="#"><a href="#" class="myImageLink"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></a></br></br>
								
								
								
								
							</div>
						</div>


						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
				
								<h3>Enginnering drawing</h3>
								<dl><dt><button type="button" class="thetogglecontroller10" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>
								
								<div class="tobetoggled10" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Lecture notes enginnering drawing"><dd>Lecture notes</dd></a></li>
										<li><a href="booksandvid.html#Title block enginnering drawing"><dd>Title block</dd></a></li>
										<li><a href="booksandvid.html#Text book of enginnering drawing"><dd>Text book of enginnering drawing</dd></a></li>


									</ul>
								</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller60" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
								
									<div class="tobetoggled60" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#Enginnering drawing final test"><dd>Enginnering drawing final test</dd></a></li>
											<li><a href="booksandvid.html#Enginnering drawing final test images"><dd>Enginnering drawing final test images</dd></a></li>
											
	
										</ul>
									</div>
									</dl>
								
								
								<dl><dt><button type="button" class="thetogglecontroller45" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br></dt>
									<div class="tobetoggled45" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#enginnering drawing assignments"><dd>Engineering drawing assignments</dd></a></li>
	
										</ul>
									</div>
									</dl>
								
								
								
							</div>
						</div>

						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
				
								<h3>Basic writing skills</h3>
								<dl><dt><button type="button" class="thetogglecontroller11" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

								<div class="tobetoggled11" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Basic writing skill textbook"><dd>Basic writing skills Text-book </dd></a></li>
										

									</ul>
								</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller58" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
									<div class="tobetoggled58" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#Basic writing skill images"><dd>Basic writing skill images </dd></a></li>
											
	
										</ul>
									</div>
									</dl>
								
								
								<a href=""><a href="#" class="myImageLink"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></a></br></br>
								
								
								
								
							</div>
						</div>


						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
				
								<h3>Logic and critcal thinking</h3>
								<dl><dt><button type="button" class="thetogglecontroller12" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br></dt>

								<div class="tobetoggled12" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Patrick J-hurley"><dd>Patrick _J.hurley </dd></a></li>
										<li><a href="booksandvid.html#Answer to Patrick J-hurley"><dd>Answer for Patrick's book</dd></a></li>
										<li><a href="booksandvid.html#Logic power point"><dd>Logic Powerpoint</dd></a></li>
										<li><a href="booksandvid.html#logic ህጸጽ"><dd>Logic ሀጸጽ</dd></a></li>
										<li><a href="booksandvid.html#Introduction to logic"><dd>Introduction to Logic</dd></a></li>
										<li><a href="booksandvid.html#logic course outline"><dd>logic course outline</dd></a></li>

									</ul>
								</div>
								</dl>
								
								<dl><dt><button type="button" class="thetogglecontroller62" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br></dt>
								
									<div class="tobetoggled62" style="display: none;">
										<ul>
											<li><a href="data folder\1st year 2nd semister\tests\logic and critical thinking\LOGIC 2013 FINAL EXAM.pdf" class="myImageLink"><dd>LOGIC 2013 FINAL EXAM</dd></a></li>
											<li><a href="data folder\1st year 2nd semister\tests\logic and critical thinking\Logic Final exam.pdf" class="myImageLink"><dd>Logic Final exam</dd></a></li>
											<li><a href="booksandvid.html#Logic and critical thinking image of tests"><dd>Logic and critical thinking image of tests.</dd></a></li>
	
										</ul>
									</div>
									</dl>
								
								
								<a href="#"><a href="#" class="myImageLink"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></a></br></br>
								
								
								
								
							</div>
						</div>
						
					</div>
		<!--
			//////////////////////////////////////////////////////////////////////////
			//////////////////////////////////////////////////////////////////////////
		-->
					<div class="col-md-4">
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h2><center>2nd year 1st semister electrical school</center></h2>
								<h3>Applied mathematics 3</h3>
								<button type="button" class="thetogglecontroller13" style="background-color: transparent; border: 0px ;"><font size="5" color="  #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br>
								
								<div class="tobetoggled13" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#ZENA Mathematics"><dd>Zena maths </dd></a></li>
										<li><a href="booksandvid.html#Applied mathematics 3 bagashaw"><dd>Applied math 3</dd></a></li>
										<li><a href="booksandvid.html#Derivatives-inverse hyperbolic-functions"><dd>derivatives-inverse-hyperbolic-functions</dd></a></li>
										<li><a href="booksandvid.html#Kreyszing mathematics"><dd>Math kreyzing</dd></a></li>
										<li><a href="booksandvid.html#ODE applied mathematics 3"><dd>ODE applied maths |||</dd></a></li>
										<li><a href="booksandvid.html#Short notes applied 3"><dd>Short notes applied 3</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\school EEC semester" class="myImageLink"><dd>ZIP file for all electrical school</dd></a></li>
										<li><a href="booksandvid.html#2nd year 1st semister course outline"><dd>2nd year 1st semister course outline</dd></a></li>
									</ul>
								</div>



								<button type="button" class="thetogglecontroller63" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br>
									<div class="tobetoggled63" style="display: none;">
										<ul>
											<li><a href="booksandvid.html#Applied Math III Final Exams with solutions(@fresh_astu) (2)"><dd>Applied Math III Final Exams with solutions(@fresh_astu) (2) </dd></a></li>
											<li><a href="booksandvid.html#Applied Mathematics III Mid-Exam"><dd>Applied Mathematics III Mid-Exam</dd></a></li>
											<li><a href="booksandvid.html#Applied Mathematics III rar file of exams"><dd>Applied Mathematics III rar file of exams</dd></a></li>
											<li><a href="booksandvid.html#Applied Mathematics III images of exams part 1"><dd>Applied Mathematics III images of exams part 1</dd></a></li>
											<li><a href="booksandvid.html#Applied Mathematics III images of exams part 2"><dd>Applied Mathematics III images of exams part 2</dd></a></li>
											
											
											<li><a href="data folder\2nd year 1st semister electrical\tests\Applied Mathematics III\01.pdf" class="myImageLink"><dd>01</dd></a></li>
											<li><a href="data folder\2nd year 1st semister electrical\tests\Applied Mathematics III\02.pdf" class="myImageLink"><dd>02</dd></a></li>
											<li><a href="data folder\2nd year 1st semister electrical\tests\Applied Mathematics III\03.pdf" class="myImageLink"><dd>03</dd></a></li>
											<li><a href="data folder\2nd year 1st semister electrical\tests\Applied Mathematics III\04.pdf" class="myImageLink"><dd>04</dd></a></li>
											<li><a href="data folder\2nd year 1st semister electrical\tests\Applied Mathematics III\05.pdf" class="myImageLink"><dd>05</dd></a></li>
											<li><a href="data folder\2nd year 1st semister electrical\tests\Applied Mathematics III\06.pdf" class="myImageLink"><dd>06</dd></a></li>
										
										</ul>
									</div>



								
								<button type="button" class="thetogglecontroller46" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br>
								<div class="tobetoggled46" style="display: none;">
									<ul>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\applied 3\Applied Maths III assignment II.pdf" class="myImageLink"><dd>Applied 3 assignment </dd></a></li>
										
										
									</ul>
								</div>
								


								
							</div>
						</div>


						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Circuit analysis</h3>
								<button type="button" class="thetogglecontroller14" style="background-color: transparent; border: 0px ;"><font size="5" color="  #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br>
								
								<div class="tobetoggled14" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Applid electronics 1 module"><dd>Applied electronics module </dd></a></li>
										<li><a href="booksandvid.html#BJT and JFET problems"><dd>BJT and JFET problems</dd></a></li>
										<li><a href="booksandvid.html#chapter 1 by AGA"><dd>Chapter one by AGA</dd></a></li>
										<li><a href="booksandvid.html#instructor wendson notes"><dd>Wendsons notes</dd></a></li>
										<li><a href="booksandvid.html#Robert-l boylstead"><dd>Robert_L Boylestead</dd></a></li>
										<li>
											<h5>Lab reports sample</h5>
											<ol>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of cirrcuit\cicuit lab 3.docx" class="myImageLink">cicuit lab 3</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of cirrcuit\cicuit lab 3.pdf" class="myImageLink">cicuit lab 3 pdf</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of cirrcuit\Lab 1 - diode chraceristcs.docx" class="myImageLink">Lab 1 - diode chraceristcs</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of cirrcuit\Lab 2 - Rectifier circuit.docx" class="myImageLink">Lab 2 - Rectifier circuit</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of cirrcuit\Lab 3 - Zener Diode voltage regulation.docx" class="myImageLink">Lab 3 - Zener Diode voltage regulation</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of cirrcuit\Lab 4 - Clippper and Clamper Circuits.docx" class="myImageLink">Lab 4 - Clippper and Clamper Circuits</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of cirrcuit\Lab 5 - Votage Multilpier Circuits.docx" class="myImageLink">Lab 5 - Votage Multilpier Circuits</a></li>
											</ol>

										</li>
									</ul>
								</div>
								
								<button type="button" class="thetogglecontroller64" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br>
										<div class="tobetoggled64" style="display: none;">
											<ul>
												<li><a href="booksandvid.html#Assignment on Electronics Circuit I(2023)_230307_225001" class="myImageLink"><dd>Assignment on Electronics Circuit I(2023)_230307_225001</dd></a></li>
												<li><a href="booksandvid.html#biasing circuits12" class="myImageLink"><dd>biasing circuits</dd></a></li>
												<li><a href="booksandvid.html#BJT and JFET PROBLEMS12" class="myImageLink"><dd>BJT and JFET PROBLEMS</dd></a></li>
												<li><a href="booksandvid.html#test images on circuit" class="myImageLink"><dd>test images on circuit </dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\circuit\BJT SMALL SIGNAL ANALYSIS (1).pdf" class="myImageLink"><dd>BJT SMALL SIGNAL ANALYSIS (1)</dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\circuit\Circuit chapter 3 p.I.pdf" class="myImageLink"><dd>Circuit chapter 3 p.I</dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\circuit\Electronic Circuit Final Exam (solved).pdf" class="myImageLink"><dd>Electronic Circuit Final Exam (solved) </dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\circuit\final exam paper 2022 circuit.pdf" class="myImageLink"><dd>final exam paper 2022 circuit</dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\circuit\final exam paper 2022.pdf" class="myImageLink"><dd>final exam paper 2022</dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\circuit\Mid Exam.docx" class="myImageLink"><dd>Mid Exam</dd></a></li>
											</ul>
										</div>
								
								
								
								
								<button type="button" class="thetogglecontroller47" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br>
								<div class="tobetoggled47" style="display: none;">
									<ul>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\circuit\Assignment on Electronics Circuit I(2023).pdf" class="myImageLink"><dd>Assignment on Electronics Circuit I (2023) </dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\circuit\Assignment on Electronics Circuit I(2024).pdf" class="myImageLink"><dd>Assignment on Electronics Circuit I (2024)</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\circuit\Group_Assignment(2023)_230419_073023 (2).pdf" class="myImageLink"><dd>Group_Assignment(2023)</dd></a></li>
								
									</ul>
								</div>
								


								
							</div>
						</div>
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Fundamentals of electrical enginnering</h3>
								<button type="button" class="thetogglecontroller15" style="background-color: transparent; border: 0px ;"><font size="5" color="  #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br>
								<div class="tobetoggled15" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Alexander fundamentals"><dd>Alexander Fundamentals<sub>(3<sup>rd</sup> edition)</sub></dd></a></li>
										<li><a href="booksandvid.html#fundamental Lecture notes"><dd>Lecture Notes</dd></a></li>
										<li><a href="booksandvid.html#chapter 5 sinusoids"><dd>Chapter 5 sinusoids</dd></a></li>
										<li><a href="booksandvid.html#chapter 5-6 fundamentals"><dd>Chapter 5-6</dd></a></li>
										<li><a href="booksandvid.html#Chapter 4 note on fundamentals"><dd>Chapter 4 note</dd></a></li>
										<li><a href="booksandvid.html#Chapter 8 fundamentals"><dd>Chapter 8</dd></a></li>
										<li>
											<h5>Lab reports sample</h5>
											<ol>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of fundamentals\Lab 1 - resisttance.docx" class="myImageLink">Lab 1 - resisttance</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of fundamentals\Lab 2 - DC circuit analysis.docx" class="myImageLink">Lab 2 - DC circuit analysis</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of fundamentals\Lab 3 - Network Theorems.docx" class="myImageLink">Lab 3 - Network Theorems</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of fundamentals\Lab 4 - Maximum POwer trasfer.docx" class="myImageLink">Lab 4 - Maximum POwer trasfer</a></li>
												<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\lab reports of fundamentals\lab report5.docx" class="myImageLink">lab report5</a></li>
											</ol>

										</li>
									</ul>
								</div>


								
								<button type="button" class="thetogglecontroller66" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br>

								<div class="tobetoggled66" style="display: none;">
									<ul>
										<li><a href="data folder\2nd year 1st semister electrical\tests\Fundamental\1682760162654_Fundamentals of EE Final Final Draft.pdf" class="myImageLink"><dd>1682760162654_Fundamentals of EE Final Final Draft</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\Fundamental\Chapter-1.pdf" class="myImageLink"><dd>Chapter-1</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\Fundamental\FEE Different Years Final Exam Collection (@fresh_astu).pdf" class="myImageLink"><dd>FEE Different Years Final Exam Collection (@fresh_astu)</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\Fundamental\fundamental final exam.pdf" class="myImageLink"><dd>fundamental final exam</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\Fundamental\Fundamental Mid-Exam.pdf" class="myImageLink"><dd>Fundamental Mid-Exam</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\Fundamental\Fundamental.rar" class="myImageLink"><dd>Fundamental rar file</dd></a></li>
										
										<li><a href="booksandvid.html#test images on fundamentals" class="myImageLink"><dd>test images on fundamentals</dd></a></li>
										
									</ul>
								</div>
								
								
								
								
								
								<button type="button" class="thetogglecontroller49" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br>
								<div class="tobetoggled49" style="display: none;">
									<ul>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\3.work sheat.pdf" class="myImageLink"><dd>3.work sheat</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\4.work sheat.pdf" class="myImageLink"><dd>4.work sheat</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\Assignment Questions and Worksheet.pdf" class="myImageLink"><dd>Assignment Questions and Worksheet</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\Chapter 3 Worksheet.pdf" class="myImageLink"><dd>Chapter 3 Worksheet</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\chapter 8 edit.pptx" class="myImageLink"><dd>chapter 8 edit</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\chapter 8.docx" class="myImageLink"><dd>Chapter 8</dd></a></li>
										
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\Document1.docx" class="myImageLink"><dd>Document1</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\EPCE2101 Assignment I.pdf" class="myImageLink"><dd>EPCE2101 Assignment I</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\EPCE2101 Assignment II.pdf" class="myImageLink"><dd>EPCE2101 Assignment II</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\EPCE2101- Worksheet On Chapter 1.pdf" class="myImageLink"><dd>EPCE2101- Worksheet On Chapter 1</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\Fundamental Chapter 8 assignment.pdf" class="myImageLink"><dd>Fundamental Chapter 8 assignment</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\fundamentals\chapter 8.pptx" class="myImageLink"><dd>Chapter 8</dd></a></li>
									
									</ul>
								</div>
								
								


								
							</div>
						</div>
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Geography</h3>
								<button type="button" class="thetogglecontroller16" style="background-color: transparent; border: 0px ;"><font size="5" color="  #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br>
								
								<div class="tobetoggled16" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#Geography of ethiopia and the horn"><dd>Geography of ethiopia and the horn</dd></a></li>
										<li><a href="booksandvid.html#Geography by netsanet"><dd>Geography Power point</dd></a></li>
										<li><a href="booksandvid.html#LART 1004 Geography of ethiopia and the horn by tesfaye"><dd>LART 1004 Geography of ethiopia and the horn by tesfaye</dd></a></li>
										<li><a href="booksandvid.html#Chapter 6 Geography"><dd>Chapter 6 Geography</dd></a></li>

									</ul>
								</div>

								
								
								<button type="button" class="thetogglecontroller67" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br>
										<div class="tobetoggled67" style="display: none;">
											<ul>
												<li><a href="booksandvid.html#test images on Geography"><dd>test images on Geography</dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\geography\adiss-ababa-geo-test-ቀለሜ.pdf" class="myImageLink"><dd>adiss-ababa-geo-test-ቀለሜ</dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\geography\geography-mid-ቀለሜ.pdf" class="myImageLink"><dd>geography-mid-ቀለሜ</dd></a></li>
												<li><a href="booksandvid.html#data folder\2nd year 1st semister electrical\tests\geography\geo-mid-bahirdar-ቀለሜ.pdf" class="myImageLink"><dd>geo-mid-bahirdar-ቀለሜ</dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\geography\geo-mid-dbu-ቀለሜ.pdf" class="myImageLink"><dd>geo-mid-dbu-ቀለሜ</dd></a></li>
												<li><a href="data folder\2nd year 1st semister electrical\tests\geography\geo-mid-jimma-ቀለሜ.pdf" class="myImageLink"><dd>geo-mid-jimma-ቀለሜ</dd></a></li>
											</ul>
										</div>
								
								
								<button type="button" class="thetogglecontroller50" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br>
								
								<div class="tobetoggled50" style="display: none;">
									<ul>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\geography\Geography_Group Assignmenet_2023.pdf" class="myImageLink"><dd>Geography_Group Assignmenet_2023</dd></a></li>
										
									</ul>
								</div>
								


								
							</div>
						</div>
						<div class="box-item">
							<img src="images\computerlab.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Data structure</h3>
								<button type="button" class="thetogglecontroller17" style="background-color: transparent; border: 0px ;"><font size="5" color="  #048f83"><i class="fa fa-book" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOOKS</i></font></button></br></br>
								
								
								<div class="tobetoggled17" style="display: none;">
									<ul>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\4_5827988260932029600.pptx" class="myImageLink"><dd>data structure and Algorithms </dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\15-btrees.ppt" class="myImageLink"><dd>15-btrees</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Addational Note.docx" class="myImageLink"><dd>Addational Note</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Algorithms and Data structures.pdf" class="myImageLink"><dd>Algorithms and Data structures</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\best lecture by hand writing about c++-1-1.pdf" class="myImageLink"><dd>best lecture by hand writing about c++-1-1</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Chapter 2 Simple Searching and Sorting.pdf" class="myImageLink"><dd>Chapter 2 Simple Searching and Sorting</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Chapter 3 Linked List.pptx" class="myImageLink"><dd>Chapter 3 Linked List</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Chapter 4 STACK.pptx" class="myImageLink"><dd>Chapter 4 STACK</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\chapter 5 queue.pdf" class="myImageLink"><dd>chapter 5 queue</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Chapter 6 TREE.pdf" class="myImageLink"><dd>Chapter 6 TREE</dd></a></li>
										
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\chapter_three.pptx" class="myImageLink"><dd>chapter_three </dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\chapter_two.pptx" class="myImageLink"><dd>chapter_two</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Chapter07-Graphs.ppt" class="myImageLink"><dd>Chapter07-Graphs</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Chapter08 - Advanced Sorting and Searching.pdf" class="myImageLink"><dd>Chapter08 - Advanced Sorting and Searching</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\cse(1_2).pptx" class="myImageLink"><dd>cse(1_2)</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Data Structure and Algoritms.pdf" class="myImageLink"><dd>Data Structure and Algoritms</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\Data Structure using C.pdf" class="myImageLink"><dd>Data Structure using C</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\DSA Chapter 1 - Intro w12.pptx" class="myImageLink"><dd>DSA Chapter 1 - Intro w12</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\DSA Chapter 2 - Search and Sort w34.pptx" class="myImageLink"><dd>DSA Chapter 2 - Search and Sort w34</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\DSA Chapter 3 - Linked List -  Another Version.pptx" class="myImageLink"><dd>DSA Chapter 3 - Linked List -  Another Version</dd></a></li>

										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\DSA Chapter 3 - Linked List.ppt" class="myImageLink"><dd>DSA Chapter 3 - Linked List</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\DSA Chapter 4 - Stack.pptx" class="myImageLink"><dd>DSA Chapter 4 - Stack</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\DSA Chapter 5 - Queue.pptx" class="myImageLink"><dd>DSA Chapter 5 - Queue</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\DSA Chapter 6 - Tree.pptx" class="myImageLink"><dd>DSA Chapter 6 - Tree</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\DSA_Week3.pdf" class="myImageLink"><dd>DSA_Week3</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\linked_lists_algorithm.pdf" class="myImageLink"><dd>linked_lists_algorithm</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\books and handnotes\DATA STRUCTURE\SortAndSearchImplementation.pdf" class="myImageLink"><dd>SortAndSearchImplementation</dd></a></li>
									</ul>
								</div>
								
								
								<button type="button" class="thetogglecontroller65" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-file-word-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MID & FINAL EXAMS</i></font></button></br></br>
								
								<div class="tobetoggled65" style="display: none;">
									<ul>
										<li><a href="booksandvid.html#test images on data structure" class="myImageLink"><dd>test images on data structure</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\data structure tests\Algorithms _ Flowchart Manual .pdf" class="myImageLink"><dd>Algorithms _ Flowchart Manual </dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\data structure tests\answers.2013.pdf" class="myImageLink"><dd>answers.2013</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\data structure tests\DSA Final.pdf" class="myImageLink"><dd>DSA Final</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\data structure tests\DSA practice .pdf" class="myImageLink"><dd>DSA practice  </dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\data structure tests\DSA Sample Question and Answer.pdf" class="myImageLink"><dd>DSA Sample Question and Answer</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\data structure tests\DSA_Worksheet_2023.pdf" class="myImageLink"><dd>DSA_Worksheet_2023 </dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\data structure tests\exam.pdf" class="myImageLink"><dd>exam</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\data structure tests\Review question on Array and pointer.pdf" class="myImageLink"><dd>Review question on Array and pointer</dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\tests\data structure tests\Sample-exam-1-solutions.pdf" class="myImageLink"><dd>Sample-exam-1-solutions</dd></a></li>
										
									</ul>
								</div>
								
								
								
								
								
								<button type="button" class="thetogglecontroller48" style="background-color: transparent; border: 0px ;"><font size="5" color=" #048f83"><i class="fa fa-newspaper-o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSIGNMENTS</i></font></button></br></br>
								
								<div class="tobetoggled48" style="display: none;">
									<ul>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\data structure\assignment one .pdf" class="myImageLink"><dd>assignment one </dd></a></li>
										<li><a href="data folder\2nd year 1st semister electrical\assignments and worksheets\data structure\DSA_Worksheet_2023.pdf" class="myImageLink"><dd>DSA_Worksheet_2023</dd></a></li>
										
									</ul>
								</div>

								


								
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</section>
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
							<li><a href="https://www.instagram.com/gtb0909/"><i class="fa fa-instagram"></i></a>
							</li>
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

	<div class="overlay"></div>
  <div class="popup">
    <center>
    <h1>GTB GROUP</h1>
      
      <p class="title">Hello there!!</p>
    </center>
      <p>we will include every material we found on this by the next update or in our telegram channal.</p>
	 <center> 
	  <p> so stay toon!!</p>
</center> 
	  <center>


      <div style="margin: 24px 0; font-size: 20px;">
	  		
			<a href="#" style="margin:15px"><i class="fa fa-twitter"></i></a>
		
			<a href="https://www.instagram.com/gtb0909/" style="margin:15px">
				<i class="fa fa-instagram"></i></a>
		
			<a href="#" style="margin:15px"><i class="fa fa-linkedin"></i></a>
		
			<a href="https://t.me/+4OSrJNIvHc00ODM0" style="margin:15px"><i class="bx bxl-telegram"></i></a>
		
      </div>




    </center>
  </div> 
  <script>
			// Get all elements with the class 'myImageLink'
			var imageLinks = document.getElementsByClassName('myImageLink');
		  
			// Add click event listener to each element
			for (var i = 0; i < imageLinks.length; i++) {
			  imageLinks[i].addEventListener('click', function(e) {
				e.preventDefault(); // Prevent default link behavior
		  
				// Show the overlay and the pop-up box
				document.getElementsByClassName('overlay')[0].style.display = 'block';
				document.getElementsByClassName('popup')[0].style.display = 'block';
			  });
			}
		  
			// Add click event listener to the overlay to close the pop-up box
			document.getElementsByClassName('overlay')[0].addEventListener('click', function() {
			  // Hide the overlay and the pop-up box
			  document.getElementsByClassName('overlay')[0].style.display = 'none';
			  document.getElementsByClassName('popup')[0].style.display = 'none';
			});
		  </script>
	<script src="js/toggle.js"></script>
  
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