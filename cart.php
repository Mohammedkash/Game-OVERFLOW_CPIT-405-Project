<?php include "orderSubmit.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- title -->
	<title>Cart</title>
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="assets/js/APICart.js"></script>

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

				<div class="Quotes_ListElem">
					<p>"Video games foster the mindset that allows creativity to grow" - Nolan Bushnell.</p>
					<h1>Cart</h1>
				</div>

			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<form method="POST">
		<div class="cart-section">
			<div class="container">
				<div class="row">

					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">

									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-InStock-Class">In Stock</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Product Total Price</th>
								</tr>
							</thead>

							<tbody>
								<!-- 1-3 products -->
								<!-- Product1 -->
								<tr class="table-body-row">
									<td  id="proIMG1" class="product-image"><img id="srcIMG1" src="" >
									</td>
									<td class="product-name">Playstation 5 NBA Desgin Edtion</td> <!-- Product1 -->
									<td id="PP_myProduct1" class="product-price">1000$</td>
									<td id="product-InStock1" class="product-InStock-Class"></td>
									<!-- Product-In-Stock-1 -->
									<td class="product-quantity" id="td_myProduct1_Quantity">
										<input type="number" onclick="myFunction()" id="myProduct1_Quantity"
											placeholder="0" value="0" min="0" max="999" name="Product1">
									</td>

									<td id="PT_myProduct1" class="product-total">0$</td>

								</tr>
								<!-- Product2 -->
								<tr class="table-body-row">
									<td id="proIMG2" class="product-image">
										<img id="srcIMG2" src="" 
											>
									</td> 
									<td class="product-name">PS5 Controller NBA Edtion</td> <!-- Product2 -->
									<td id="PP_myProduct2" class="product-price">75$</td>
									<td id="product-InStock2" class="product-InStock-Class"></td>
									<!-- Product-In-Stock-2 -->
									<td class="product-quantity" id="td_myProduct2_Quantity">
										<input type="number" onclick="myFunction()" id="myProduct2_Quantity"
											placeholder="0" value="0" min="0" max="999" name="Product2">
									</td>

									<td id="PT_myProduct2" class="product-total">0$</td>

								</tr>
								<!-- Product3 -->
								<tr class="table-body-row">
									<td id="proIMG3" class="product-image"><img id="srcIMG3" src=""
											 >
									</td>
									<td class="product-name">PULSE 3D Wireless Headset PS5 NBA Edition</td>
									<!-- Product3 -->
									<td id="PP_myProduct3" class="product-price">90$</td>
									<td id="product-InStock3" class="product-InStock-Class"></td>
									<!-- Product-In-Stock-3 -->
									<td class="product-quantity" id="td_myProduct3_Quantity">
										<input type="number" onclick="myFunction()" id="myProduct3_Quantity"
											placeholder="0" value="0" min="0" max="999" name="Product3">
									</td>

									<td id="PT_myProduct3" class="product-total">0$</td>
								</tr>
								<!-- 4-6 products -->
								<tr class="table-body-row">
									<td id="proIMG4" class="product-image"><img id="srcIMG4" src=""
											 >
									</td>
									<td class="product-name">NBA2K22</td> <!-- Product4 -->
									<td id="PP_myProduct4" class="product-price">60$</td>
									<td id="product-InStock4" class="product-InStock-Class"></td>
									<!-- Product-In-Stock-4 -->
									<td class="product-quantity" id="td_myProduct4_Quantity">
										<input type="number" onclick="myFunction()" id="myProduct4_Quantity"
											placeholder="0" value="0" min="0" max="999" name="Product4">
									</td>

									<td id="PT_myProduct4" class="product-total">0$

									</td>
								</tr>
								<tr class="table-body-row">

									<td  id="proIMG5" class="product-image"><img id="srcIMG5" src="">
											
									</td>
									<td class="product-name">Autofull Gaming Chair Special NBA Designed Edition</td>
									<!-- Product5 -->
									<td id="PP_myProduct5" class="product-price">350$</td>
									<td id="product-InStock5" class="product-InStock-Class"></td>
									<!-- Product-In-Stock-5 -->
									<td class="product-quantity" id="td_myProduct5_Quantity">
										<input type="number" onclick="myFunction()" id="myProduct5_Quantity"
											placeholder="0" value="0" min="0" max="999" name="Product5">
									</td>

									<td id="PT_myProduct5" class="product-total">0$

									</td>
								</tr>
								
								<tr class="table-body-row">
									<td id="proIMG6" class="product-image">
										<img id="srcIMG6" src="">
									</td>
									<td class="product-name">Funko POP! Lebron James</td> <!-- Product6 -->
									<td id="PP_myProduct6" class="product-price">20$</td>
									<td id="product-InStock6" class="product-InStock-Class"></td>
									<!-- Product-In-Stock-6 -->
									<td class="product-quantity" id="td_myProduct6_Quantity">
										<input type="number" onclick="myFunction()" id="myProduct6_Quantity"
											placeholder="0" value="0" min="0" max="999" name="Product6">
									</td>

									<td id="PT_myProduct6" class="product-total">0$</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
					
								<tr class="total-data">
									<td>Subtotal</td>
									<td id="subtotal">0$</td>
								</tr>
								<tr class="total-data">
									<td>Shipping</td>
									<td id="shipping">20$</td>
								</tr>
								<tr class="total-data">
									<td>Total</td>
									<td id="total">0$</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<input type="submit" name="submit" class="boxed-btn" value="Order">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- end cart -->

	<!-- logo carousel -->

	<!-- end logo carousel -->

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
	<script src="./assets/js/ProductPricing.js"></script>
	<script src="./assets/js/AJAX_Cart_InStock_Min_MAX.js"></script>


</body>

</html>

