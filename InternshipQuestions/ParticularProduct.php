<!DOCTYPE html>
<html>
<head>
	<title>Particular Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="ParticularProductNew.css">
</head>
<body>
	<ul class="nav-bar">
		<li><h2>XYZ.com</h2></li>
		<li><a href="logout.php">LogOut</a></li>
		<li><button onclick="location.href='Dashboard.html'">Home</button></li>
		<li><button class="contact-us-btn" onclick="location.href='ContactUs.html'">ContactUs</button></li>
	</ul>
	<div class="container">
		<div class="particular-product-details">
			<div class="show-image">
				<img src="headphones1.jpg">
			</div>
			<div class="other-details">
				<h3>Headphone 1 2018 with 18 hours battery life and 3.5mm headphone jack, active noise cancellation</h3>
				<label>Price : Rs.5000</label>
				<div class="buy-panel">
					<select id="quantity" name="quantity">
						<?php
							$count = 0;
							$show = 1;
							while ($count < 10) {
								echo "<option id=$show>$show</option>";
								$count = $count + 1;
								$show = $show + 1;
							}
						?>
					</select>
					<button id="buy-now" onclick="location.href='BuyNow.html'">Buy Now</button>
					<button id="add-to-cart">Add To Cart</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>