<?php include_once "includes/dynamics.php";?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="EI=egde">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $description ?>">
	<meta name="keywords" content="<?php echo $keywords ?>">
	<link rel="shortcut icon" type="images/png" href="favicon.png" />
	<!-- FACEBOOK -->
	<meta name="keywords" content="<?php echo $keywords ?>">
	<meta property="og:url" content="http://maobatechsolutions.co.za">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $title ?>">
	<meta property="og:description" content= "<?php echo $description ?>">
	<meta property="og:image" content="http://maobatechsolutions.co.za/fblogo.png">

	<!-- DEPENDENCY -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<title><?php echo $title ?></title>
	<link rel="stylesheet"  href="css/style.css" href=”image.css”>
	<link rel="stylesheet"  href="css/sample.css" href=”image.css”>
	<link rel="stylesheet"  href="css/responsive.css" href=”image.css”>
</head>
<body>
<a name="to-top"></a>
<header>
  <nav>
      <aside>
        <div class="social-links">
          <img onclick="functionalityModal('open');" src="assests/social/call.png" alt="call-icon" />
          <img onclick="functionalityModal('open');" src="assests/social/facebook.png" alt="facebook-icon" />
          <img onclick="functionalityModal('open');" src="assests/social/whatsapp.png" alt="whatsapp-icon" />
          <img onclick="functionalityModal('open');" src="assests/social/email.png" alt="email-icon" />
        </div>
      </aside>
      <article >
        <img src="logo.png" alt="logo" />
				<div id="hamburger">
					<div class="lines"></div>
					<div class="lines"></div>
					<div class="lines"></div>
				</div>
        <div class="links-wrapper">
          <ul>
            <li><a href="#about-us">US</a></li>
            <li><a href="#flavours">FLAVOURS</a></li>
            <li><a href="#why-us">WHY US</a></li>
            <li><a href="#testimonials">TESTIMONIALS</a></li>
            <li><a href="#get-in-touch">GET IN TOUCH</a></li>
          </ul>
        </div>
      </article>
  </nav>
</header>
<main>
<!-- HERO SECTION -->
<section id="home-hero">
	<div>
		<button id="prev">PREV</button>
	</div>
  <article>
	<div>
		<h1>WELCOME</h1>
		<p>Serving great taste to our customers</p>
	</div>
	
  </article>  
 	 <div>
		<button id="next">NEXT</button>
	</div>
  <div class="overlay"></div>
</section>
<!-- HERO SECTION END -->
<!-- INTRO SECTION -->
<section id="introduction" class="container-fluid">
    <div class="row">
        <article class="col-lg-4 col-md-4" >
			<aside class="flexy-col">
				<img src="assests/gallery/introduction/birth-day.jpg" alt="birth-day-cake" />
				<h3 class="heading3">Birth Day Cake</h3>
				<p><?=$dummyText?></p>
			</aside>
        </article>
		<article class="col-lg-4 col-md-4" >
			<aside class="flexy-col">
				<img src="assests/gallery/introduction/black-forest.jpg" alt="blaack-forest" />
				<h3 class="heading3">Black Forest</h3>
				<p><?=$dummyText?></p>
			</aside>
        </article>
		<article class="col-lg-4 col-md-4" >
			<aside class="flexy-col">
				<img src="assests/gallery/introduction/wedding.jpg" alt="wed-day-cake" />
				<h3 class="heading3">Wedding Cake</h3>
				<p><?=$dummyText?></p>
			</aside>
        </article>
    </div>
</section>
<!-- INTRO SECTION END -->
<!-- about section -->
<section id="about-us" class="container-fluid">
	<a name="about-us"></a>
	<article class="container">
		<aside>
			<div>
				<h3>OUR STORY</h3>
				<p>Praesent rhoncus orci ut maximus accumsan. Interdumet malesuada fames ac ante ipsum primis in faucibus. Etiam ullamcorper erat massa, et malesuada ipsum effdignissim Lorem ipsum dolor sit amet, consectetur adipiscielitisque malesuada fames ac ante ipsum primis in faucibus. Etiam justo mi, volutpat ac erat at.</p>
			</div>
		</aside>
	</article>
</section>
<!-- ABOUT SECTION END -->
<!-- FLAVOUR SECTION -->
<section id="our-flavours" class="container-fluid">
<a name="flavours"></a>
	<h3>OUR FLAVOURS</h3>
    <div class="row">
		<article class="col-lg-6 col-md-6">
			<aside>
				<img src="assests/gallery/flavours/cheese.png" alt="cake-name" />
				<div class="flexy-col">
					<div class="flexy-cen">
						<p>Cheese Cake</p>
						<p><span>R 450.00</span></p>
					</div>
					<p><?=$dummyText?></p>
					<form>
						<input type="text" value="cheese" hidden name="cake-name" />
						<button name="order-cake" >Order</button>
					</form>
				</div>	
			</aside>
			<div class="line-through"></div>
        </article>		
		<article class="col-lg-6 col-md-6">
			<aside >
				<img src="assests/gallery/flavours/velvet.png" alt="cake-name" />
				<div class="flexy-col">
					<div class="flexy-cen">
						<p>Velvet  Cake</p>
						<p><span>R 450.00</span></p>
					</div>
					<p><?=$dummyText?></p>
					<form>
						<input type="text" value="velvet" hidden name="cake-name" />
						<button name="order-cake">Order</button>
					</form>
				</div>	
			</aside>
			<div class="line-through"></div>
        </article>		
		<article class="col-lg-6 col-md-6">
			<aside >
				<img src="assests/gallery/flavours/strewberry.png" alt="cake-name" />
				<div class="flexy-col">
					<div class="flexy-cen">
						<p>Strewberry Cake</p>
						<p><span>R 450.00</span></p>
					</div>
					<p><?=$dummyText?></p>
					<form>
						<input type="text" value="strewberry" hidden name="cake-name" />
						<button name="order-cake">Order</button>
					</form>
				</div>	
			</aside>
			<div class="line-through"></div>
        </article>		
		<article class="col-lg-6 col-md-6">
			<aside>
				<img src="assests/gallery/flavours/vanilla.png" alt="cake-name" />
				<div class="flexy-col">
					<div class="flexy-cen">
						<p>Vanilla Cake</p>
						<p><span>R 450.00</span></p>
					</div>
					<p><?=$dummyText?></p>
					<form>
						<input type="text" value="vanilla" hidden name="cake-name" />
						<button name="order-cake" >Order</button>
					</form>
				</div>	
			</aside>
			<div class="line-through"></div>
        </article>
		<article class="col-lg-6 col-md-6">
			<aside>
				<img src="assests/gallery/flavours/chocolate.png" alt="cake-name" />
				<div class="flexy-col">
					<div class="flexy-cen">
						<p>Chocolate Cake</p>
						<p><span>R 450.00</span></p>
					</div>
					<p><?=$dummyText?></p>
					<form>
						<input type="text" value="chocolate" hidden name="cake-name" />
						<button name="order-cake" >Order</button>
					</form>
				</div>	
			</aside>
			<div class="line-through"></div>
		</article>		
		<article class="col-lg-6 col-md-6">
			<aside>
				<img src="assests/gallery/flavours/ice-cream.png" alt="cake-name" />
				<div class="flexy-col">
					<div class="flexy-cen">
						<p>Ice Cream Cake</p>
						<p><span>R 450.00</span></p>
					</div>
					<p><?=$dummyText?></p>
					<form>
						<input type="text" value="ice-cream" hidden name="cake-name" />
						<button name="order-cake">Order</button>
					</form>
				</div>	
			</aside>
			<div class="line-through"></div>
        </article>
    </div>
</section>
<!-- FLAVOUR SECTION END -->
<!-- WHY CHOOSE US -->
<section id="why-choose" class="container-fluid">
<a name="why-us"></a>
	<div class="container">
		<div class="row">
			<article class="col-lg-6 col-md-6">
				<aside class="flexy-cen">
					<img src="assests/gallery/cake-us.png" alt="cakes" />
				</aside>
			</article>
			<article class="col-lg-6 col-md-6">
				<aside class="flexy-col">
					<p class="our">OUR CAKES</p>
					<h3>Why Choose Us</h3>
					<p><?=$dummyText?></p>
					<p class="secp"><?=$dummyText?></p>
					<div>
						<button class="read-more=" onclick="functionalityModal('open')">READ MORE</button>
					</div>
				</aside>
			</article>
		</div>
    </div>
</section>
<!-- WHY CHOOSE US SECTION END -->
<!-- TESTIMONIALS -->
<section id="testo" class="carousel slide" data-ride="carousel">
<a name="testimonials"></a>
    <div class="carousel-inner">
		<div class="carousel-item active slide-Item1">
			<aside class="flexy-col">
				<div class="headings">
					<p>Feedbacks</p>
					<h4>Testimonials</h4>
				</div>
				<p><?=$dummyTextLong?></p>
				<div class="headings">
					<h4>John Doe</h4>
					<p>CUSTOMER</p>
				</div>
			</aside>	
		</div>
		<div class="carousel-item slide-Item2">
			<aside class="flexy-col">
				<div class="headings">
					<p>Feedbacks</p>
					<h4>Testimonials</h4>
				</div>
				<p><?=$dummyTextLong?></p>
				<div class="headings">
					<h4>Jane Doe</h4>
					<p>CUSTOMER</p>
				</div>
			</aside>	
		</div>
		<div class="carousel-item slide-Item3">
			<aside class="flexy-col">
				<div class="headings">
					<p>Feedbacks</p>
					<h4>Testimonials</h4>
				</div>
				<p><?=$dummyTextLong?></p>
				<div class="headings">
					<h4>Alex Doe</h4>
					<p>CUSTOMER</p>
				</div>
			</aside>	
		</div>

		<a class="carousel-control-prev caro-btn" href="#testo" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next caro-btn" href="#testo" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
  	</div>
</section>
<!-- TESTIMONIALS END -->
<!-- MAP SECTION BEGIN -->
<section id="contact-map" class="container-fluid">
<a name="get-in-touch"></a>
	<div class="container-fluid">
		<div class="row">
			<article class="col-lg-6 col-md-6">
				<aside class="flexy-col">
					<p>Feel the taste</p>
					<h3>It's more than</h3>
					<h3>just cakes...</h3>
					<button>Cakes</button>
				</aside>
			</article>
			<article class="col-lg-6 col-md-6 flexy-col">
				<aside id="form">
					<p>Reserve</p>
					<h1>Your Table</h1>
					<form class="flexy-col">
						<div class="flexy-col">
							<input type="text" placeholder="Please state your name.." name="name"/>
						</div>
						<div class="flexy-col">
							<input type="tel" placeholder="Please state your phone numbers.." name="phone"/>
						</div>
						<div class="flexy-col">
							<input type="email" placeholder="Please state your phone email.." name="email"/>
						</div>
						<div class="flexy-col">
							<textarea name="body" placeholder="What kind of cake are you  looking for?"></textarea>
						</div>
						<div class="flexy-col">
							<button>Request Cake</button>
						</div>
					</form>
				</aside>
			</article>
		</div>
	</div>
</section>
<!-- MAP SECTION END -->
<footer >
	<!-- <article id="map">
		<iframe src=<?=$directionLink?>></iframe>
  	</article> -->
	<a href="#to-top" class="move-up-icon">
		<div><img src="assests/icons/black-up.png" /></div>
	</a>
	<div class="footer-links">
		<img src="logo.png" alt="logo" />
    <p>All Copy Right Reserved <span class="year"></span></p>
    <p>Designed by <span><a href="www.maobatechsolutions.co.za">Maoba Tech</a></p>
  </div>
</footer>
<!-- MODAL CONTAINER -->
<section id="cust-modal"></section>
<section id="functional" class="hiddenclass">
	<div class="flexy-cen">
		<aside class="flexy-cen">
			<div class="holder"><h3 onclick="functionalityModal('close');">X</h3></div>
		</aside>
		<article>
			<h4>WHY YOU SEEING THIS ?</h4>
			<p ></p>
		</article>
		<aside class="flexy-cen">
			<div class="holder"><h3 onclick="functionalityModal('close');">X</h3></div>
		</aside>
	</div>
</section>
</main>
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
