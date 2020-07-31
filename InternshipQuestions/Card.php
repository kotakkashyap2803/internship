<!DOCTYPE html>
<html>
<head>
	<title>Headphones</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CardNew2.css">
</head>
<body>
	<ul class="nav-bar">
		<li><h2>XYZ.com</h2></li>
		<li><a href="logout.php"> LogOut </a></li>
		<li><button onclick="location.href='Dashboard.html'"> Home </button></li>
		<li><button class="contact-us-btn" onclick="location.href='ContactUs.html'">ContactUs</button></li>
	</ul>
	<div class="search-content">
		<input type="text" name="search" placeholder="Search">
		<button id="search-btn"> Search </button>
	</div>
	<hr>
	<div class="container">
		<div class="side-bar">
			<div class="brand-content">
				<label> Brands - </label>
				<ul>
					<li><input type="checkbox" name="jbl" id="jbl"><label for="jbl">JBL</label></li>
					<li><input type="checkbox" name="sc" id="sc"><label for="sc">Skull Candy</label></li>
					<li><input type="checkbox" name="sen" id="sen"><label for="sen">Sennheisser</label></li>
					<li><input type="checkbox" name="boat" id="boat"><label for="boat">Boat</label></li>
					<li><button id="view-more">>>View more</button></li>
				</ul>
			</div>
			<hr>
			<div class="price-content">
				<label> Price - </label><br>
				<ul>
					<li><a>Under 1000</a></li>
					<li><a>1000 to 5000</a></li>
					<li><a>5000 to 10000</a></li>
					<li><a>10000 20000</a></li>
					<li><a>> 20000</a></li>
				</ul>
				<input type="text" name="min" placeholder="Min">
				<input type="text" name="max" placeholder="Max">
				<button id="price-range">Sort</button>
			</div>
		</div>
		<div class="cards">
			<button onclick="location.href='ParticularProduct.php'">
				<div class='card'>
					<div class='img-wraper'>
						<img src='headphones1.jpg'>
					</div>
					<div class='content'>
						<label>Headphone 1 2018 with 18 hours battery life and 3.5mm headphone jack, active noise cancellation</label>
						<p>Rs.5000</p>
					</div>
				</div>
			</button>
		</div>
	</div>
</body>
</html>