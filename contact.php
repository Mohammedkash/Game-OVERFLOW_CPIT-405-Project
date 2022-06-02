<?php include "connection_db"?>
<?php include "function.php"; ?>
<?php createRows();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- title -->
	<title>Contact</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
	<!-- header -->
	<div class="top-header-area">
		<div class="container">
			<div class="row">
				<div class="main-menu-wrap">
					<!-- menu start -->
					<nav class="main-menu">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="itemsGallery.html">Items Gallery</a></li>
							<li><a href="cart.php">Cart</a></li>
						</ul>
					</nav>
					<!-- menu end -->
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div>
					<div class="Quotes_ListElem">
						<p>Get 24/7 Support</p>
						<h1>Contact us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section">
		<div class="container">
			<div class="row">
				<div class="form-section">
					<div class="form-title">
						<h2>Do you have any questions?</h2>
						<ul>
							<li> Game OverFlow</li>
							<li> Email: support@GameOverFlow.com </li>
							<li> Phone: 920092009</li>
							<li> Whatsapp: +966 127 000 0001</li>
						</ul>
					</div>
					<div id="form_status"></div>
					<div class="contact-form">
						<form method="post">
							<p class="form-inputs">
								<input type="text" maxlength="100" placeholder="Name" name="name" id="name"require>
								<input type="email" maxlength="100"placeholder="Email" name="email" id="email" require>
							</p>
							<p class="form-inputs">
							<input type="tel" minlength="10" maxlength="10" placeholder="Phone" name="phone" id="phone" onkeypress="return isNumberKey(event)" require>
								<script>
                                    function isNumberKey(evt) {
                                        var charCode = (evt.which) ? evt.which : event.keyCode
                                        if (charCode > 31 && (charCode < 48 || charCode > 57))
                                            return false;
                                        return true;
                                    }
                                </script>
								<input type="text" maxlength="75" placeholder="Subject" name="subject" id="subject"require>
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message" maxlength="300"></textarea></p>
							<!--  -->
							<p><input name="submit" type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->



	<!-- footer -->
	<div class="footer-area">

		<div class="sub">
			<h2 class="widget-title">About us</h2>
			<ul>
				<li>Welcome to Game OVER-FLOW!</li>
				<li>OVER-FLOW is an online shop that brings together everything a gamer needs in one app.</li>
				<li> Instead of playing outdated games, be the first to play new and popular games.</li>
				<li>Game OVER-FLOW will provide you with the most up-to-date and popular ideas for your favorite games
					, as well as the greatest accessories for an endless gaming experience.
				</li>
				<li>Enjoy the shopping!</li>
			</ul>

		</div>
		<div class="sub">
			<h2 class="widget-title">Get in Touch</h2>
			<ul>
				<li>Jeddah, Saudi Arabia</li>
				<li>CPIT405@kau.com</li>
				<li>+966 127 000 0001</li>
			</ul>
		</div>
		<div class="sub">
			<h2 class="widget-title">Pages</h2>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="itemsGallery.html">Items Gallery</a></li>
				<li><a href="cart.php">Cart</a></li>
			</ul>
		</div>
		<div class="sub">
			<h2 class="widget-title">Subscribe</h2>
			<p>Subscribe to our mailing list to get the latest updates.</p>
			<form action="CPIT405@kau.com">
				<input type="email" placeholder="Email">
				<button type="submit"><img src="assets/img/send.png" /></i></button>
			</form>
		</div>
	</div>
	<!-- end footer -->

</body>

</html>