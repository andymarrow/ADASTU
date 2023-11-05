<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by HTML5XCSS3 dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.html5xcss3.com">

	<title>adama webpage</title>
  
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
.readmore__content.showmore{
  max-width: 45rem;
  width: 100%;
  display: inline-block;
  color:rgb(10, 10, 10);
}

button.readmore__toggle {
  display: flex;
  margin-top: 1rem;
  border: none;
  background:  linear-gradient(#084cca, #243b55);
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
				<img src="images\main.jpg" alt="...">
				<!-- Static Header -->
				<div class="container">
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>welcome</h1>
						<hr>
						<p>welcome to the community made to make students meet there best efforts</p>
						

					</div>
				</div><!-- /header-text -->
				</div>
			</div>
			<div class="item">
				<img src="images\main2.jpg" alt="...">
				<!-- Static Header -->
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>Be with us</h1>
						<hr>
						<p>Be with us to get every new updates daily  ||   be a part of a vast community</p>
						
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
			<li><a href="https://t.me/+4OSrJNIvHc00ODM0"><i class="fa fa-telegram"></i></a></li>
				
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
								<h3>Electrical science department</h3>
								<div id="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
		This is where our school gives computer lab courses to computer science and enginnering students, software enginners also take some courses here. <span class="thedots">...</span><span class="moreinfo" ><span style="color:rgb(77, 77, 77);"> it has got so many communities of various kinds , its were students work together as a group to achieve some goal in there own courier, also its well equipped with computers and internet access.</span></span>
        </span>
        <button class="readmorebutton readmore__toggle" role="switch" aria-checked="true" id="showmorebutton">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>


								<br><br>
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\astu mini stadium.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu mini stadium</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
		There are 4 mini stadiums in our campus. and from those 2 are used for basketball games and tournaments while the other 2 are used for football matches. <span class="thedots1">...</span>
					<span class="moreinfo1" ><span style="color:rgb(77, 77, 77);">
					and sometimes this stadiums are used as a place for sport instructors to teach there classes health and fitness care(this courses are only given for 1st year students).
					</span>
				    </span>
        </span>
        <button class="readmorebutton1 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>


								<br><br>
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\astu stadium 1.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu main stadium</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
		This is a stadium found inside the university's gates <br/> mostly its used for
					 national game matches.<span class="thedots2">...</span>
					 <span class="moreinfo2" > <span  style="color:rgb(77, 77, 77);">
					 The main stadium is one of the most famous stadiums on campus its famous even from across ethiopia and has been used for 
					national matches and tournaments many times over the year, and because its found inside the gates of the campus mostly students
					 are allowed to see the matches for free.Adama science and tech can be said the best choice for students who love soccer.
					

					</span>
				</span>
        </span>
        <button class="readmorebutton2 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>

								<br><br>
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\astu males dorm.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu males dorm</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
		although a lot has changed over the years, This is a view from the dorm window of <span class="thedots3">...</span><span class="moreinfo3" > &nbsp;<span style="color:rgb(77, 77, 77);">of a 2nd year males dorm .</span></span>
        </span>
        <button class="readmorebutton3 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>


								<br><br>
								
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-item">
							<img src="images\femaleslibrary.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu females library</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
		Adama science and technology university is well known for its exclusive consideration of<span class="thedots4">...</span><span class="moreinfo4" >
			 <span style="color:rgb(77, 77, 77);">female students in every aspect ,this library is one of the examples of the universities dedication to female students,
			  a library where only female students are allowed in.</span></span>
        </span>
        <button class="readmorebutton4 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>


								<br><br>
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\maingate.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu main gate</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);" >
            
			
		this gate is not mostly used by students specially female students because its far away from there dormitory,but its the first door that comes <span class="thedots5">...</span>
			<span class="moreinfo5" ><span class="showmore">
			<span style="color:rgb(77, 77, 77);">to evey students mind in the campus when the word astu is meantioned, though this gate is the preferred door
			by leacture's and campus's staff.</span></span>
		</span>
		</span>
        <button class="readmorebutton5 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>




								<br><br>
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\odagate.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu oda gate</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
            
		From the two gats which is oda nebe and main gate this is a gate which <span class="thedots6">...</span>
			<span class="moreinfo6" >
				<span style="color:rgb(77, 77, 77);">
			 is preferably used by students of astu, those 2 gates meantioned before are the main gates of the campus but the university 
			 consist 6 other gates on every side of the university including kereyu,bole....</span>
			</span>
			</span>
        <button class="readmorebutton6 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>




								<br><br>
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\central.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu central library</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
            
		As teachers are the brains and out looks of an education system , books and libraries <span class="thedots7">...</span>
			<span class="moreinfo7" >
			<span style="color:rgb(77, 77, 77);">are at the heart of every student's campus life . of the 5 libraries thats found
			 on the campus this library is the most prestigious,preferable and most liked library.</span>
			</span>
			</span>
        <button class="readmorebutton7 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>



								<br><br>
								
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-item">
							<img src="images\amphi.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Amphi theater</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
            
		as Universities aren't a place just made for education they need to have a place of memory for there students, <span class="thedots8">...</span>
			<span class="moreinfo8" >
			<span style="color:rgb(77, 77, 77);">this place will totally leave so many memories in every student joining the campus. Its also a place where students get to experience life at its fullest. amphi theater 
			is a place made for the sole purpose where most ceremonies are held like dances 
			, culture day , gc cermony and so many more.this place also have a large screen where students can see weekly football matches on DSTV.</span>
		</span>
        </span>
        <button class="readmorebutton8 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>


								<br><br>
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\deans office.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu Deans office</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
            
		This is The head office of astu, adama science and technolgy university is known <span class="thedots9">...</span>
			<span class="moreinfo9" >
			 <span style="color:rgb(77, 77, 77);">for its students and teachers hard work to achieve a greater purpose, as such this 
			 coordination shows the strength of the managing office found in this building.</span>
			</span>
			</span>
        <button class="readmorebutton9 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>





								<br><br>
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\humanitary building.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu humanitary building</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
		Its the office of leacture's who teach social class's for fresh mans,<span class="thedots10">...</span>
			<span class="moreinfo10" >
			<span style="color:rgb(77, 77, 77);">this might include civics,geography ,psycology and emerging technology.</span>
		</span>
		</span>
        <button class="readmorebutton10 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>


								<br><br>
								
							</div>
						</div>
						<div class="box-item">
							<img src="images\student.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Astu students</h3>
								<div class="readmore">
        <span class="readmore__content" style="color:rgb(77, 77, 77);">
		Astu female students celebrating a cermony. this picture was <span class="thedots11">...</span>
			<span  class="moreinfo11" >
			<span style="color:rgb(77, 77, 77);">taken in front of amphiteater.</span>
		</span>
		</span>
        <button class="readmorebutton11 readmore__toggle" role="switch" aria-checked="true">
            Show more
        </button>
        </button>
    </div>
       <script src="./index.js"></script>
								<br><br>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	 
<script >
class readMore {
    constructor() {
        this.content = '.readmore__content';
        this.buttonToggle = '.readmore__toggle';
    }

    bootstrap() {
        this.setNodes();
        this.init();
        this.addEventListeners();
    }

    setNodes() {
        this.nodes = {
            contentToggle: document.querySelector(this.content)
        };

        this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(this.buttonToggle);
    }

    init() {id="readmore"
        const { contentToggle } = this.nodes;

        this.stateContent = contentToggle.innerHTML;

        contentToggle.innerHTML = `${this.stateContent.substring(0, 100)}...`;//o to 100 means it counts up to 100 words and cut it to be showed more
    }

    addEventListeners() {
        this.buttonToggle.addEventListener('click', this.onClick.bind(this))
    }

    onClick(event) {
        const targetEvent = event.currentTarget;
        const { contentToggle } = this.nodes

        if (targetEvent.getAttribute('aria-checked') === 'true') {
            targetEvent.setAttribute('aria-checked', 'false')
            contentToggle.innerHTML = this.stateContent;
            this.buttonToggle.innerHTML = 'Show less'

        } else {
            targetEvent.setAttribute('aria-checked', 'true')
            contentToggle.innerHTML = `${this.stateContent.substring(0, 100)}...`
            this.buttonToggle.innerHTML = 'Show more'
        }
    }
}


const initReadMore = new readMore();
initReadMore.bootstrap()
</script>
	 

	<!-- FOOTER -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row"> 
					<div class="col-footer col-md-3">
						<h2 class="footer-title">About Us</h2>
						<div class="textwidget">We are a group of students dedicated to help other students at astu university<br/><br/>
							and to make the university well known for its outstanding student support platform.


						</div>
					</div> 
					
					<div class="col-footer col-md-3">
						<h2 class="footer-title">Update</h2>
						If you want to receive our latest news send directly to your email, please leave your email address bellow. Subscription is free and you can cancel anytime.
						<form action="subscribe-form.php" method="post">
							<input type="email" name="subscribe-form" size="40" placeholder="Your Email" />
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
						<p style="color: black;">made by :- The GTB </p>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="https://www.instagram.com/gtb0909/"><i class="fa fa-instagram"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="https://t.me/+4OSrJNIvHc00ODM0"><i class="bx bxl-telegram"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="contact.php">contact us</a>
							</li>
							<li><a href="contact.php">support us</a>
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
	<script src="js/showmore.js"></script><!--for show more toggle-->
	
</body>
</html>