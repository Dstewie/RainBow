<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 	 ]>    <html class="ie" lang="en"> <![endif]-->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/sequence.jquery-min.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/sequence.js"></script>
	<script type="text/javascript" src="js/selectnav.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>	
	<script type="text/javascript">	
		$(document).ready(function(){
			$(".form").hide();
			$(".form:first").show();
			$(".f-item:first").addClass("active");
			$(".f-item:first span").addClass("checked");
		});
	</script>
</head>
<body>
	<!--header-->
	<header>
		<div class="wrap clearfix">
			<!--logo-->
			<h1 class="logo"><a href="index.html" title="Book Your Travel - home"><img src="images/txt/logo.png" alt="Book Your Travel" /></a></h1>
			<!--//logo-->
			
			<!--ribbon
			<div class="ribbon">
				<nav>
					<ul class="profile-nav">
						<li class="active"><a href="#" title="My Account">My Account</a></li>
						<li><a href="login.html" title="Login">Login</a></li>
						<li><a href="my_account.html" title="Settings">Settings</a></li>
					</ul>
					<ul class="lang-nav">
						<li class="active"><a href="#" title="English (US)">English (US)</a></li>
						<li><a href="#" title="English (UK)">English (UK)</a></li>
						<li><a href="#" title="Deutsch">Deutsch</a></li>
						<li><a href="#" title="Italiano">Italiano</a></li>
						<li><a href="#" title="Русский">Русский</a></li>
					</ul>
					<ul class="currency-nav">
						<li class="active"><a href="#" title="$US Dollar">$US Dollar</a></li>
						<li><a href="#" title="€ Euro">€ Euro</a></li>
						<li><a href="#" title="£ Pound">£ Pound</a></li>
					</ul>
				</nav>
			</div>
			//ribbon-->
			
			<!--search-->
			<div class="search">
				<form id="search-form" method="get" action="search-form">
					<input type="search" placeholder="Search entire site here" name="site_search" id="site_search" /> 
					<input type="submit" id="submit-site-search" value="submit-site-search" name="submit-site-search"/>
				</form>
			</div>
			<!--//search-->
			
			<!--contact-->
			<div class="contact">
				<span>24/7 Support number</span>
				<span class="number">1- 555 - 555 - 555</span>
			</div>
			<!--//contact-->
		</div>
		
		<!--main navigation-->
		<nav class="main-nav" role="navigation" id="nav">
			<ul class="wrap">
				<li><a href="hotels.html" title="Hotels">Главная</a></li>
				<!--<li><a href="flights.html" title="Flights">Flights</a></li>
				<li><a href="flight_and_hotels.html" title="Flight + Hotel">Flight + Hotel</a></li>
				<li><a href="self_catering.html" title="Self catering">Self catering</a></li>
				<li><a href="cruise.html" title="Cruises">Cruises</a></li>
				<li><a href="car_rental.html" title="Car rental">Car rental</a></li>
				<li><a href="hot_deals.html" title="Hot deals">Hot deals</a></li>
				<li><a href="#" title="Vacations">Vacations</a></li>
				<li><a href="#" title="Business travel">Business travel</a></li>
				<li><a href="#" title="Group travel">Group travel</a></li>
				<li><a href="get_inspired.html" title="Get inspired">Get inspired</a></li>
				<li><a href="#" title="Travel guides">Travel guides</a></li>-->
			</ul>
		</nav>
		<!--//main navigation-->
	</header>
	<!--//header-->
	
	<!--slider
	<section class="slider clearfix">
		<div id="sequence">
			<ul>
				<li>
					<div class="info animate-in">
						<h2>Last minute Winter escapes</h2><br />
						<p>January 2013 holidays 40% off! An unique opportunity to realize your dreams</p>
					</div>
					<img class="main-image animate-in" src="images/slider/img.jpg" alt="" />
				</li>
				<li>
					<div class="info animate-in">
						<h2>Check out our top weekly deals</h2><br />
						<p>Save Now. Book Later.</p>
					</div>
					<img class="main-image animate-in" src="images/slider/img.jpg" alt="" />
				</li>
				<li>
					<div class="info animate-in">
						<h2>Check out last minute flight, hotel &amp; vacation offers!</h2><br />
						<p>Save up to 50%!</p>
					</div>
					<img class="main-image animate-in" src="images/slider/img.jpg" alt="" />
				</li>
			</ul>
		</div>
	</section>
	//slider-->
	
	<!--search-->
		@yield('main_search')
	<!--//search-->
	
	<!--main-->
	<div class="main" role="main">
		<div class="wrap clearfix">
			<!--latest offers-->
			<section class="offers clearfix full">
				<h1>Explore our latest offers</h1>
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<h4>Winter beach escapes 30% off</h4>
						<a href="#" title="Explore our deals" class="gradient-button">Explore our deals</a>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<h4>Spend New Year‘s Eve in Paris</h4>
						<a href="#" title="More info" class="gradient-button">More info</a>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<h4>Skiing weekends in the Alpes</h4>
						<a href="#" title="Explore our deals" class="gradient-button">Explore our deals</a>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<h4>Our weekly top offer: Thailand</h4>
						<a href="#" title="More info" class="gradient-button">More info</a>
					</div>
				</article>
				<!--//column-->
			</section>
			<!--//latest offers-->
			
			<!--top destinations-->
			<section class="destinations clearfix full">
				<h1>Top destinations around the world</h1>
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Paris</h5>
						<span class="count">1529 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Amsterdam</h5>
						<span class="count">929 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Saint Petersburg</h5>
						<span class="count">658 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Prague</h5>
						<span class="count">829 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Prague</h5>
						<span class="count">829 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth promo">
					<div class="ribbon-small">- 20%</div>
					<figure><a href="hot_deals.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="hot_deals.html" title="View all" class="gradient-button">View all</a>
						<h5>Paris</h5>
						<span class="count">1529 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Amsterdam</h5>
						<span class="count">929 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Saint Petersburg</h5>
						<span class="count">658 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Saint Petersburg</h5>
						<span class="count">658 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Prague</h5>
						<span class="count">829 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Paris</h5>
						<span class="count">1529 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Amsterdam</h5>
						<span class="count">929 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
			</section>
			<!--//top destinations-->
			
			
			<!--info boxes-->
			<section class="boxes clearfix">
				<!--column-->
				<article class="one-fourth">
					<h2>Handpicked Hotels</h2>
					<p>All Book Your Travel Hotels fulfil strict selection criteria. Each hotel is chosen individually and inclusion cannot be bought. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Detailed Descriptions</h2>
					<p>To give you an accurate impression of the hotel, we endeavor to publish transparent, balanced and precise hotel descriptions. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Exclusive Knowledge</h2>
					<p>We’ve done our research. Our scouts are always busy finding out more about our hotels, the surroundings and activities on offer nearby.</p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<h2>Passionate Service</h2>
					<p>Book Your Travels’s team will cater to your special requests. We offer expert and passionate advice for finding the right hotel. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Best Price Guarantee</h2>
					<p>We offer the best hotels at the best prices. If you find the same room category on the same dates cheaper elsewhere, we will refund the difference. Guaranteed, and quickly. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Secure Booking</h2>
					<p>Book Your Travel reservation system is secure and your credit card and personal information is encrypted.<br />We work to high standards and guarantee your privacy. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Benefits for Hoteliers</h2>
					<p>We provide a cost-effective model, a network of over 5000 partners and a personalised account management service to help you optimise your revenue.</p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<h2>Any Questions?</h2>
					<p>Call us on <em>1-555-555-555</em> for individual, tailored advice for your perfect stay or <a href="contact.html" title="Contact">send us a message</a> with your hotel booking query.<br /><br /></p>
				</article>
				<!--//column-->
			</section>
			<!--//info boxes-->
		</div>
	</div>
	<!--//main-->
	
	<!--footer-->
	<footer>
		<div class="wrap clearfix">
			<!--column-->
			<article class="one-fourth">
				<h3>Book Your Travel</h3>
				<p>1400 Pennsylvania Ave. Washington, DC</p>
				<p><em>P:</em> 24/7 customer support: 1-555-555-5555</p>
				<p><em>E:</em> <a href="#" title="booking@mail.com">booking@mail.com</a></p>
			</article>
			<!--//column-->
			
			<!--column-->
			<article class="one-fourth">
				<h3>Customer support</h3>
				<ul>
					<li><a href="#" title="Faq">Faq</a></li>
					<li><a href="#" title="How do I make a reservation?">How do I make a reservation?</a></li>
					<li><a href="#" title="Payment options">Payment options</a></li>
					<li><a href="#" title="Booking tips">Booking tips</a></li>
				</ul>
			</article>
			<!--//column-->
			
			<!--column-->
			<article class="one-fourth">
				<h3>Follow us</h3>
				<ul class="social">
					<li class="facebook"><a href="#" title="facebook">facebook</a></li>
					<li class="youtube"><a href="#" title="youtube">youtube</a></li>
					<li class="rss"><a href="#" title="rss">rss</a></li>
					<li class="linkedin"><a href="#" title="linkedin">linkedin</a></li>
					<li class="googleplus"><a href="#" title="googleplus">googleplus</a></li>
					<li class="twitter"><a href="#" title="twitter">twitter</a></li>
					<li class="vimeo"><a href="#" title="vimeo">vimeo</a></li>
					<li class="pinterest"><a href="#" title="pinterest">pinterest</a></li>
				</ul>
			</article>
			<!--//column-->
			
			<!--column-->
			<article class="one-fourth last">
				<h3>Don’t miss our exclusive offers</h3>
				<form id="newsletter" action="newsletter.php" method="post">
					<fieldset>
						<input type="email" id="newsletter_signup" name="newsletter_signup" placeholder="Enter your email here" />
						<input type="submit" id="newsletter_submit" name="newsletter_submit" value="Signup" class="gradient-button" />
					</fieldset>
				</form>
			</article>
			<!--//column-->
			
			<section class="bottom">
				<p class="copy">Copyright 2012 Book your travel ltd. All rights reserved</p>
				<nav>
					<ul>
						<li><a href="#" title="About us">About us</a></li>
						<li><a href="contact.html" title="Contact">Contact</a></li>
						<li><a href="#" title="Partners">Partners</a></li>
						<li><a href="#" title="Customer service">Customer service</a></li>
						<li><a href="#" title="FAQ">FAQ</a></li>
						<li><a href="#" title="Careers">Careers</a></li>
						<li><a href="#" title="Terms & Conditions">Terms &amp; Conditions</a></li>
						<li><a href="#" title="Privacy statement">Privacy statement</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</footer>
	<!--//footer-->
	<script>
		// Initiate selectnav function
		selectnav();
	</script>
</body>
</html>