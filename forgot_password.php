<!DOCTYPE html>
<html lang="en">
<?php include('./email.php'); ?>

<?php include './dbconn.php';
    session_start();
	?>
<head>
	<title>Splitwise</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travello template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<style>
		.testimonial-h1 {
			font-size: 16px;
			text-align: center;
			margin-bottom: 40px;
		}

		.testimonial-quote {
			font-size: 16px;
		}

		.testimonial-quote blockquote {
			/* Negate theme styles */
			border: 0;
			margin: 0;
			padding: 0;
			background: none;
			color: gray;
			font-family: Georgia, serif;
			font-size: 1.5em;
			font-style: italic;
			line-height: 1.4 !important;
			margin: 0;
			position: relative;
			text-shadow: 0 1px white;
			z-index: 600;
		}

		.testimonial-quote blockquote * {
			box-sizing: border-box;
		}

		.testimonial-quote blockquote p {
			color: #75808a;
			line-height: 1.4 !important;
		}

		.testimonial-quote blockquote p:first-child:before {
			content: '\201C';
			color: #81bedb;
			font-size: 7.5em;
			font-weight: 700;
			opacity: .3;
			position: absolute;
			top: -.4em;
			left: -.2em;
			text-shadow: none;
			z-index: -300;
		}

		.testimonial-quote img {
			border: 3px solid #9CC1D3;
			border-radius: 50%;
			display: block;
			width: 120px;
			height: 120px;
			position: absolute;
			top: -.2em;
			left: 0;
		}

		.testimonial-quote cite {
			color: gray;
			display: block;
			font-size: .8em;
		}

		.testimonial-quote cite span {
			color: #5e5e5e;
			font-size: 1em;
			font-style: normal;
			font-weight: 700;
			letter-spacing: 1px;
			text-transform: uppercase;
			text-shadow: 0 1px white;
		}

		.testimonial-quote {
			position: relative;
		}

		.testimonial-quote .quote-container {
			padding-left: 160px;
		}

		.testimonial-quote.right .quote-container {
			padding-left: 0;
			padding-right: 160px;
		}

		.testimonial-quote.right img {
			left: auto;
			right: 0;
		}

		.testimonial-quote.right cite {
			text-align: right;
		}

		.black {
			color: black !important;
		}

		* {
			box-sizing: border-box;
		}

		img {
			vertical-align: middle;
		}

		/* Position the image container (needed to position the left and right arrows) */
		.container {
			position: relative;
		}

		/* Hide the images by default */
		.mySlides {
			display: none;
		}

		/* Add a pointer when hovering over the thumbnail images */
		.cursor {
			cursor: pointer;
		}

		/* Next & previous buttons */
		.prev,
		.next {
			cursor: pointer;
			position: absolute;
			top: 40%;
			width: auto;
			padding: 16px;
			margin-top: -50px;
			color: white;
			font-weight: bold;
			font-size: 20px;
			border-radius: 0 3px 3px 0;
			user-select: none;
			-webkit-user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover,
		.next:hover {
			background-color: rgba(0, 0, 0, 0.8);
		}

		/* Number text (1/3 etc) */
		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		/* Container for image text */
		.caption-container {
			text-align: center;
			background-color: #222;
			padding: 2px 16px;
			color: white;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		/* Six columns side by side */
		.column {
			float: left;
			width: 16.66%;
		}

		/* Add a transparency effect for thumnbail images */
		.demo {
			opacity: 0.6;
		}

		.active,
		.demo:hover {
			opacity: 1;
		}

		html {
			scroll-behavior: smooth;
		}
	</style>
</head>

<body>
	<div class="super_container">
		<!-- Header -->
	

		

		<!-- Home -->

		<div class="home" id="home" style="background-color: #5e5e5e;">

            <div class="col-6 offset-3 ">

                <h1 class="text-center">Forgot Password</h1>
        <a href="./index.php" class="btn btn-dark">Home</a>

                <form action=" " class="mt-5" method="post">

                    <div class="form-group">
                        <label for="" class="h5">Enter your registered email</label>
                        <input type="email" class="form-control" placeholder="sam@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-light">Submit</button>
                    </div>
                </form>
            </div>

		</div>
		
	

		
		<!-- Footer -->
		<footer class="footer" id="contact">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cover2.jpg"
				data-speed="0.8"></div>
			<div class="container">
				<div class="row footer_contact_row">
					<div class="col-xl-10 offset-xl-1">
						<div class="row">

							<!-- Footer Contact Item -->
							<div class="col-xl-4 footer_contact_col">
								<div
									class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
									<div class="footer_contact_icon"><img src="images/road-sign.png" alt=""></div>
									<div class="footer_contact_title black">give us a call</div>
									<div class="footer_contact_list">
										<ul>
											<!-- <li>Office Landline: +44 5567 32 664 567</li> -->
											<li class="black">Mobile: +91 8073807591</li>
										</ul>
									</div>
								</div>
							</div>

							<!-- Footer Contact Item -->
							<div class="col-xl-4 footer_contact_col">
								<div
									class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
									<div class="footer_contact_icon"><img src="images/package.png" alt=""></div>
									<div class="footer_contact_title black">come & drop by</div>
									<div class="footer_contact_list">
										<ul style="max-width:190px">
											<li class="black">No.215,1<sup>st</sup> satge,1<sup>st</sup>phase</li>
											<li class="black">West of Chord road Rajai Nagar,Banglore</li>
										</ul>
									</div>
								</div>
							</div>

							<!-- Footer Contact Item -->
							<div class="col-xl-4 footer_contact_col">
								<div
									class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
									<div class="footer_contact_icon"><img src="images/airplane-around-earth.png" alt="">
									</div>
									<div class="footer_contact_title black">send us a message</div>
									<div class="footer_contact_list">
										<ul>
											<!-- <li>youremail@gmail.com</li> -->
											<li class="black">kasalkar16@gmail.com</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col text-center pb-4" style="color: black;">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;
				<script>document.write(new Date().getFullYear());</script> All rights reserved
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</div>
		</footer>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>

	<script src="js/custom.js"></script>
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			var captionText = document.getElementById("caption");
			if (n > slides.length) { slideIndex = 1 }
			if (n < 1) { slideIndex = slides.length }
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
			captionText.innerHTML = dots[slideIndex - 1].alt;
		}

		function active(val) {
			switch (val) {
				case "home":
					document.getElementById('home').classList.add("active");
					$("#home_li").addClass("active");
					$("#about_li").removeClass("active");
					$("#product_li").removeClass("active");
					$("#contact_li").removeClass("active");
					$("#testimonials2_li").removeClass("active");
					break;
				case "about":
					document.getElementById('about').classList.add("active");
					$("#home_li").removeClass("active");
					$("#about_li").addClass("active");
					$("#product_li").removeClass("active");
					$("#contact_li").removeClass("active");
					$("#testimonials2_li").removeClass("active");
					break;
				case "product":
					document.getElementById('product').classList.add("active");
					$("#home_li").removeClass("active");
					$("#about_li").removeClass("active");
					$("#product_li").addClass("active");
					$("#contact_li").removeClass("active");
					$("#testimonials2_li").removeClass("active");
					break;
				case "contact":
					document.getElementById('contact').classList.add("active");
					$("#home_li").removeClass("active");
					$("#about_li").removeClass("active");
					$("#product_li").removeClass("active");
					$("#contact_li").addClass("active");
					$("#testimonials2_li").removeClass("active");
					break;
				case "testimonials2":
					document.getElementById('contact').classList.add("active");
					$("#home_li").removeClass("active");
					$("#about_li").removeClass("active");
					$("#product_li").removeClass("active");
					$("#contact_li").removeClass("active");
					$("#testimonials2_li").addClass("active");
					break;
			}
		}
	</script>
</body>

</html>