


<!--header!-->

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Noticeboard-Entrepreneurship Cell | KIIT University</title>
	<meta name="keywords" content="@yield('keywords')" />
	<meta name="description" content="@yield('description')">
	<meta name="author" content="ecell.org.in">
	<link rel="shortcut icon" href="KIITEcell/assets/icons/favicon.ico" type="image/x-icon" />

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="KIITEcell/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/animate/animate.min.css')}}">
	<link rel="stylesheet" href="KIITEcell/libs/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/magnific-popup/magnific-popup.min.css">

	<link rel="stylesheet" href="KIITEcell/css/theme.css">
	<link rel="stylesheet" href="KIITEcell/css/theme-elements.css">
	<link rel="stylesheet" href="KIITEcell/css/theme-blog.css">
	<link rel="stylesheet" href="KIITEcell/libs/circle-flip-slideshow/css/component.css">

	<link rel="stylesheet" href="KIITEcell/libs/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="KIITEcell/libs/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="KIITEcell/libs/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="KIITEcell/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="KIITEcell/css/custom.css">
	

	<!-- Head Libs -->

	<script src="KIITEcell/js/jquery-3.3.0.min.js"></script>
	<script src="KIITEcell/libs/modernizr/modernizr.min.js"></script>
	<script type="text/javascript"> //<![CDATA[ 
	var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
	document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>

</head>
<body>

	<div class="body">
		<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true, 'stickyChangeLogo': true}" style="min-height: 125px; ">
			<div class="header-body">
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-logo">
								<a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">
									<img alt="KIIT Ecell" class="logo-sticky" width="200" height="100" data-sticky-width="100" data-sticky-height="45" data-sticky-top="20" src="KIITEcell/assets/logosmall.png">
									<img alt="KIIT Ecell" class="logo-normal" width="200" height="100" src="KIITEcell/assets/images/logotest.png">
								</a>
							</div>
						</div>
						<div class="header-column">
							<div class="header-row">
								<div class="header-search hidden-xs">
									<form id="searchForm" action="page-search-results.html" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
											<span class="input-group-btn">
												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>
								</div>
								<nav class="header-nav-top">
									<ul class="nav nav-pills">
										<li>
											<a href="mailto:pcr@ecell.org.in"> <span class="ws-nowrap"><i class="fa fa-envelope"></i> pcr@ecell.org.in</span></a>
										</li>
										<li>
											<span class="ws-nowrap"><i class="fa fa-phone"></i> +91-9583785500</span>
										</li>
									</ul>
								</nav>
							</div>
							<div class="header-row">
								<div class="header-nav header-nav-top-line">
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main" >
										<i class="fa fa-bars"></i>
									</button>
									<ul class="header-social-icons social-icons hidden-xs">
										<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
										<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/13346906/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										<li class="social-icons-instagram"><a href="https://www.instagram.com/ecell_kiit/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
									</ul>
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
												<li class="home">
													<a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">Home</a>
												</li>
												<li class="active">
													<a href="noticeboard.php">NoticeBoard</a>
												</li>
												<li class="dropdown">
													<a data-hash class="dropdown-toggle" href="#home">
														Register
													</a>
													<ul class="dropdown-menu" id="drop">
														<li><a href="register_student.php">As an Individual</a></li>
														<li><a href="register_startup.php">As a Startup</a></li>
													</ul>
												</li>	
												<li class="dropdown">
													<a href="startup.php">Startups</a>
												</li>
												<li class="dropdown">
													<a data-hash class="dropdown-toggle" href="#home">
														About Us
													</a>
													<ul class="dropdown-menu">
														<li><a href="about-us.php#whoweare">Who We Are?</a></li>
														<li><a href="about-us.php#mentors">Our Mentors</a></li>
														<li><a href="team.php#bod">The Ecell Team</a></li>
														<li><a href="gallery.php">Gallery</a></li>
														<li><a href="partners.php">Partners</a></li>
													</ul>
												</li>
												<li class="dropdown">
													<a data-hash class="dropdown-toggle" href="initiatives">
														Initiatives
													</a>
													<ul class="dropdown-menu">
														<li><a href="initiatives.php#ml">Makers Lab</a></li>
														<li><a href="initiatives.php#eac">EAC</a></li>
														<li><a href="initiatives.php#internship_camp">Internship Camp</a></li>
														<li><a href="initiatives.php#cl">Community Learning</a></li>
														<li><a href="initiatives.php#wow">Women on Web (WoW)</a></li>
														<li><a href="initiatives.php#campuspreneur">Campuspreneur</a></li>														
														<li><a href="tbi-initiatives.php">TBI Initiatives</a></li>
													</ul>
												</li>																											
												<li>
													<a href="blogs.php">Blog</a>
												</li>
												<li class="{{ Request::is('contact') ? 'active' : '' }}">
													<a href="contact.php">Contact Us</a>
												</li>
											</ul>
										</nav>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


<!--/header!-->




					<div role="main" class="main">

				<section class="page-header custom-product">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<h1 class="mb-none pb-none">Introducing our <strong>Event Timeline</strong></h1>
								<p class="lead">Get to know about all our upcoming events,here.</p>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<section class="timeline" id="timeline">
						<div class="timeline-body">

							<div class="timeline-date">
								<h3 class="heading-primary">2018</h3>
							</div>
							<article class="timeline-box left">
								<div class="portfolio-item">
									<a href="#">
										<span class="noticeboard-thumb-info ">
											<span class="thumb-info-wrapper">
												<!--img src="img/projects/project.jpg" class="img-responsive" alt=""-->
												<span class="noticeboard-thumb-info-title">
													<center>
													  <p class="noticeboard-title">Esummit 18</p>
													  <p class="noticeboard-date">8-11 March</p>
												   </center>
												</span>
												
											</span>
										</span>
									</a>
									There are a lot of bad reasons to start a company, but there's only one good, legitimate reason. It is to change the world. Want to do it? Do it now!
                                    Get ready to bring out the best in you to the greatest stage of entrepreneurship as we present to you E-Summit 2018.
                                    Come join us on the journey to success. Be an exception, dream more than others think is practical. Watch, listen, learn and deliver more than expected.
                                    <center>
                                    	<b>Build Your Passion!</b><br>
										<a href="https://esummit.org.in" target="_blank">8-11 March</a>
										<br>
								    </center>
									<center>
										<img src="KIITEcell/assets//images/2018/ESummit.jpg" width="250px" class="img-responsive" alt="Esmmit 18">
									</center>
									<hr>
									<span class="noticeboard-social-icons">
										<center>
											<a href="https://facebook.com/kiitecell"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;</a>
											<a href="https://twitter.com/kiit_ecell"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;</a>
									   </center>
									</span>
								</div>
							</article>

							<article class="timeline-box right">
								<div class="portfolio-item">
									<a href="#">
										<span class="noticeboard-thumb-info ">
											<span class="thumb-info-wrapper">
												<!--img src="img/projects/project.jpg" class="img-responsive" alt=""-->
												<span class="noticeboard-thumb-info-title">
													<center>
													  <p class="noticeboard-title">Internship Camp 18</p>
													  <p class="noticeboard-date">23-25 March</p>
												   </center>
												</span>
												
											</span>
										</span>
									</a>
									Engineering shouldn't just be about theories, practicals and placements. The best place to learn and apply more of anything is at a startup office. 
                                    KIIT E-Cell is bringing such an opportunity in the form of internship camp.Gather the experience of applying what you learn while working at a startup by landing an internship at one.
                                   <a href="https://interncamp.ecell.org.in" target="_blank">23-25 March</a><br>
									<center>
										<img src="KIITEcell/assets//images/2018/ICamp.jpg" alt="ICamp 18" width="250px" class="img-responsive">
									</center>
									<hr>
									<span class="noticeboard-social-icons">
										<center>
											<a href="https://facebook.com/kiitecell"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;</a>
											<a href="https://twitter.com/kiit_ecell"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;</a>
									   </center>
									</span>
								</div>
							</article>



							<div class="timeline-date">
								<h3 class="heading-primary">December 2017</h3>
							</div>
							<article class="timeline-box left">
								<div class="portfolio-item">
									<a href="#">
										<span class="noticeboard-thumb-info ">
											<span class="thumb-info-wrapper">
												<!--img src="img/projects/project.jpg" class="img-responsive" alt=""-->
												<span class="noticeboard-thumb-info-title">
													<center>
													  <p class="noticeboard-title">BigShift</p>
													  <p class="noticeboard-date">2 December</p>
												   </center>
												</span>
												
											</span>
										</span>
									</a>
									Inc42 and Amazon India in partnership with KIIT E-Cell will be hosting BIGShift in Bhubaneswar on 02nd December 2017.

                                    The event will bring together up-to 50 key stakeholders including startup founders, investors, accelerators, incubators and ecosystem folks from the startup ecosystem in Bhubaneswar.
									<br>
									<a href="https://inc42.com/event/bigshift-bhubaneswar-startups/" target="_blank">Register here</a>
									<br>
									<center>
										<img src="KIITEcell/assets//images/2017/sessions/BigShift.jpg" alt="Big Shift" width="250px" class="img-responsive">
									</center>
									<hr>
									<span class="noticeboard-social-icons">
										<center>
											<a href="https://facebook.com/kiitecell"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;</a>
											<a href="https://twitter.com/kiit_ecell"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;</a>
									   </center>
									</span>
								</div>
							</article>

							<div class="timeline-date">
								<h3 class="heading-primary">November 2017</h3>
							</div>
							<article class="timeline-box left">
								<div class="portfolio-item">
									<a href="#">
										<span class="noticeboard-thumb-info ">
											<span class="thumb-info-wrapper">
												<!--img src="img/projects/project.jpg" class="img-responsive" alt=""-->
												<span class="noticeboard-thumb-info-title">
													<center>
													  <p class="noticeboard-title">EAC</p>
													  <p class="noticeboard-date">3<sup>rd</sup> - 4<sup>th</sup> November</p>
												   </center>
												</span>
												
											</span>
										</span>
									</a>
									We're back with our highly anticipated Entrepreneurship Awareness Camp, which is held in association with KIIT TBI and NSTEDB.
									We have interactive sessions planned with entrepreneurs, accompanied with some fun activities. You will also get a chance to go for an industrial visit. We have workshops involving Google Crowdsource where you can win T-Shirts and various other goodies. And all of this comes with the added benefit of receiving a Government recognized certificate.
									We have only 100 seats available so hurry! 
									<br>
									<a href="http://goo.gl/JBBkhv." target="_blank">Register here</a>
									<br>
									<center>
										<img src="KIITEcell/assets//images/2017/sessions/Eac_1.0.jpg" alt="EAC 1.0" width="250px" height="300px" class="img-responsive">
									</center>
									<hr>
									<span class="noticeboard-social-icons">
										<center>
											<a href="https://facebook.com/kiitecell"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;</a>
											<a href="https://twitter.com/kiit_ecell"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;</a>
									   </center>
									</span>
								</div>
							</article>
							
							<article class="timeline-box right">
								<div class="portfolio-item">
									<a href="#">
										<span class="noticeboard-thumb-info ">
											<span class="thumb-info-wrapper">
												<!--img src="img/projects/project.jpg" class="img-responsive" alt=""-->
												<span class="noticeboard-thumb-info-title">
													<center>
													  <p class="noticeboard-title">Road to GES</p>
													  <p class="noticeboard-date"> 22 November</p>
												   </center>
												</span>
												
											</span>
										</span>
									</a>
									   Celebrating and empowering women in entrepreneurship!

							           As a part of “Road to the GES Series”, FICCI in partnership with NITI Aayog is organising events in 6 different cities: a unique opportunity to connect and establish meaningful partnerships amongst entrepreneurs, investors and ecosystem supporters.
							           ·Build partnerships
							           ·Create products and services that help transform societies for a better tomorrow.
							           The biggest rendezvous for startup enthusiasts are waiting for you!
									<br>
									<a href="http://bit.ly/2yYpYy5" target="_blank">Register here</a>
									<br>
									<center>
										<img src="KIITEcell/assets//images/2017/sessions/RoadToGes.jpg" alt="Road to GES" width="250px" height="300px" class="img-responsive">
									</center>
									<hr>
									<span class="noticeboard-social-icons">
										<center>
											<a href="https://facebook.com/kiitecell"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;</a>
											<a href="https://twitter.com/kiit_ecell"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;</a>
									   </center>
									</span>
								</div>
							</article>


							<div class="timeline-date">
								<h3 class="heading-primary">October 2017</h3>
							</div>

							<article class="timeline-box left">
								<div class="portfolio-item">
									<a href="#">
										<span class="noticeboard-thumb-info ">
											<span class="thumb-info-wrapper">
												<!--img src="img/projects/project.jpg" class="img-responsive" alt=""-->
												<span class="noticeboard-thumb-info-title">
													<center>
													  <p class="noticeboard-title">e-School Session 1</p>
													  <p class="noticeboard-date">22 October</p>
												   </center>
												</span>
												
											</span>
										</span>
									</a>
									E School is a interactive curriculum on Entrepreneurship and Business Development. Its a 34-36 hours certified course. FREE OF COST ! It aims at inculcating the knowledge of opening and establishing your own startup and real time difficulties related to it currently being faced in India.
									<a class='disabled'href="https://goo.gl/forms/fxMtHbuyrThfcu6k1" target="_blank">Register Here</a>
									<br>
									<center>
									  <img src="KIITEcell/assets//images/2017/sessions/ESchool_1.0.jpg" width="200px" alt="E School" class="img-responsive">
								    </center>
									<hr>
									<span class="noticeboard-social-icons">
										<center>
											<a href="https://facebook.com/kiitecell"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;</a>
											<a href="https://twitter.com/kiit_ecell"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;</a>
									   </center>
									</span>
								</div>
							</article>
							<article class="timeline-box right">
								<div class="portfolio-item">
									<a href="#">
										<span class="noticeboard-thumb-info ">
											<span class="thumb-info-wrapper">
												<span class="noticeboard-thumb-info-title">
													<center>
													  <p class="noticeboard-title">Paper and Prose</p>
													  <p class="noticeboard-date">26 October</p>
												   </center>
												</span>
												
											</span>
										</span>
									</a>
									KIIT E-Cell brings to you "PAPER and PROSE" contest. We want you to put your thinking caps on and pen down a micro tale related to any topic around entrepreneurship. <br />We'll post your entries on our Facebook page and the one which gets the maximum likes and shares have the chance of winning Amazon gift hampers.<br />
									<b>Send us your entries before 26/10/17 on contest.kiitecell@gmail.com</b>
									<br>
									<center>
									<img src="KIITEcell/assets//images/2017/competition/poster_paper_prose.jpg" width="200px" class="img-responsive">
									</center>
									<hr>
									<span class="noticeboard-social-icons">
										<center>
											<a href="https://facebook.com/kiitecell"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;</a>
											<a href="https://twitter.com/kiit_ecell"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;</a>
									   </center>
									</span>
								</div>
							</article>

							<article class="timeline-box left">
								<div class="portfolio-item">
									<a href="#">
										<span class="noticeboard-thumb-info ">
											<span class="thumb-info-wrapper">
												<!--img src="img/projects/project.jpg" class="img-responsive" alt=""-->
												<span class="noticeboard-thumb-info-title">
													<center>
													  <p class="noticeboard-title">Open Gov Data Hack</p>
													  <p class="noticeboard-date">28 & 29 October</p>
												   </center>
												</span>
												
											</span>
										</span>
									</a>
									NIC,IAMAI and Startup India together is conducting a nationwide 24 hours hackathon.The Bhbaneswar edition is being hosted by KIIT University in collaboration with KIIT TBI and in association with KIIT E-Cell.
									<a class='disabled'href="http://bit.ly/2xzoTfB" target="_blank">Register Here</a>
									<br>
									<center>
									  <img src="KIITEcell/assets//images/2017/competition/opengovdatahack.jpg" width="200px" alt="opengovdatahack" class="img-responsive">
								    </center>
									<hr>
									<span class="noticeboard-social-icons">
										<center>
											<a href="https://facebook.com/kiitecell"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;</a>
											<a href="https://twitter.com/kiit_ecell"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;</a>
									   </center>
									</span>
								</div>
							</article>

						</div>

					</section>
				</div>

			</div>

		

		<!--footer!-->

					<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-ribbon">
				<span>Get in Touch</span>
			</div>
			<div class="col-md-3">
				<div class="newsletter">
					<h4>Newsletter</h4>
					<p>Keep up on our always evolving startup culture. Enter your e-mail and subscribe to our newsletter.</p>

					<div class="alert alert-success hidden" id="newsletterSuccess">
						<strong>Success!</strong> You've been added to our email list.
					</div>

					<div class="alert alert-danger hidden" id="newsletterError"></div>

					<form id="newsletterForm" action="javascript:" method="POST">
						<div class="input-group">
							<input class="form-control" placeholder="Email Address" name="email" id="email" type="text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Go!</button>
								<!--img class="spinner" src="/KIITEcell/assets/images/spinner_white.gif"-->
							</span>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}" >
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<h4>Latest Tweets</h4>
				<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "kiit_ecell", "count": 2}'">
					<p>Please wait...</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-details">
					<h4>Contact Us</h4>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 7B,Second Floor, TBI Biotech Campus,KIIT University, Bhubaneshwar.</p></li>
						<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> +91-9583785500, +91-9861658537</p></li>
						<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:pcr@ecell.org.in">pcr@ecell.org.in</a></p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/13346906/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					<li class="social-icons-instagram"><a href="https://www.instagram.com/ecell_kiit/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
				</ul>
				<a href="https://play.google.com/store/apps/details?id=com.kodexlabs.sparrow">
					<h5>Get Sparrow <img src="KIITEcell/assets/images/sparrow_logo.png" width="50px" height="auto"><br /> Official E-Cell App</h5>
					<img src="KIITEcell/assets/images/playstore.png" width="170px" height="auto"></a>
					<br /><br />
					<script async language="JavaScript" type="text/javascript">
						TrustLogo("KIITEcell/comodo_secure_seal_113x59_transp.png", "CL1", "none");
					</script>
					<a  href="https://ssl.comodo.com" id="comodoTL">SSL Certificates</a>										
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<a href="/" class="logo">
							<img alt="KIIT Ecell" class="img-responsive" style="width:30px; height:30px;" src="KIITEcell/assets/images/logo_alt.png">
						</a>
					</div>
					<div class="col-md-7">
						<p>© Copyright 2017. All Rights Reserved. KIIT E-Cell, KIIT University</p> 
					</div>
					<div class="col-md-4">
						<nav id="sub-menu">
							<ul>
								<li><a href="faq">FAQ's</a></li>
								<li><a href="sitemap.xml">Sitemap</a></li>
								<li><a href="contact-us">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<!-- Third party Libs -->
<script src="KIITEcell/js/theme.js"></script>
<script src="KIITEcell/js/theme.init.js"></script>
<script async src="KIITEcell/js/views/view.home.js"></script>
<script async src="KIITEcell/libs/jquery.appear/jquery.appear.min.js"></script>
<script async src="KIITEcell/libs/jquery.easing/jquery.easing.min.js"></script>
<script async src="KIITEcell/libs/jquery-cookie/jquery-cookie.min.js"></script>
<script src="KIITEcell/libs/bootstrap/js/bootstrap.min.js"></script>
<script async src="KIITEcell/libs/common/common.min.js"></script>
<script async src="KIITEcell/libs/jquery.validate/jquery.validate.min.js"></script>
<script async src="KIITEcell/libs/isotope/jquery.isotope.min.js"></script>
<script src="KIITEcell/libs/owl.carousel/owl.carousel.min.js"></script>
<script src="KIITEcell/js/sweetalert2.all.js"></script>
<script src="KIITEcell/libs/jquery.gmap/jquery.gmap.js"></script>
<script async src="KIITEcell/libs/owl.carousel/owl.carousel.min.js"></script>
<script async src="KIITEcell/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme Base, Components and Settings -->

<script async src="KIITEcell/js/add_newsletter.js"></script>

<!-- Current Page Vendor and Views -->
<!--<?php //if(Request::is('/')){ ?>!-->
<script src="KIITEcell/libs/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="KIITEcell/libs/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="KIITEcell/libs/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<!--<?php //} ?>

 <!-- Theme Custom -->
<script src="KIITEcell/js/custom.js"></script> 


       



</body>
</html>		

					