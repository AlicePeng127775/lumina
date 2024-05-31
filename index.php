<!DOCTYPE html>
<html>
	<head>
		<title>Lumina</title>
		<meta charset="utf-8">
        <meta name="author" content="Alice Guo">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="keyword" content="floral, earthy, citrus, spicy, sweet, strong, non-scented, flower, fresh, calming, refreshing, 
		ocean, nostalgia, white, blue, red, pink, yellow, black, grey, green, decorative candles, sculptural candles, fall candles, 
		winter candles, spring candles, summer candles, purple, orange, birthday candles, thanksgiving candles, Halloween, easter bunny, 
		special occasion, candles, mothers day candle, fathers day candle, home decor candles, beeswax, soy wax, handmade, gifts, unique candles, candle holder, 
		jar candles, gift set, a candle for relaxation, wedding candle, a candle for sale, a candle for mediation, eco-friendly candles, decorative candles.">
		<link rel="stylesheet" href="./css/test.css">
		<link rel="stylesheet" href="./css/home.css">
		<link rel="icon" type="image/x-icon" href="./img/Logo.png">
		<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		<!-- <script type="text/javascript" src="./script/script.js"></script> -->
	</head>
	<body>
        <!----------------- header ------------------>
        <?php require_once("partials/header.php") ?>
        <!------------------------------------------->
            
		<main>
			<div class="welcome">
				<div>
					<img src="./img/Home/bar.jpg">
					<h1>Welcome to Lumina</h1>
					<h2>Where the glow of your moments begins.</h2>
					
					<h2>Join us and illuminate your life with lumina!!</h2>
					<button class="order" onclick="location.href='shop.html'">ORDER NOW</button>
				</div>
			</div>

			<div class="blanks"></div>

			<div class="activity" id="activity">
				<h2>New Products</h2>
				<div class="activity_img">
					<div></div>
					<img src="./img/Home/bar2.jpg" alt="bar" class="full_img">
					
						<h3>"Twilight collections"</h3>
						<p>Step into a world of enchantment and calmness with our newly arrived “Twilight collections”. 
							They are hand-poured works of art designed to transform your space into a relaxing environment. 
							Whether it’s for a special occasion or personal use, we assure you that we have what you need. 
							So what are you waiting for? Explore now and experience the magic of candlelight like never before.</p>
				</div>
				
				<div class="new_products">
					<img src="./img/Home/NP1.jpeg" alt="item1">
					<img src="./img/Home/NP2.jpeg" alt="item2">
					<img src="./img/Home/NP3.jpeg" alt="item3">
					<img src="./img/Home/NP4.jpeg" alt="item4">
				</div>

				<div class="see_more"><button class="see_more_btn"  onclick="location.href='shop.html'">See more</button></div>

			</div>

			<div class="hot_sales">
				<h2>Hot Sales</h2>
				<div class="hot_sales_all">
					<div class="hot_sales_products hot_sales_products1">
						<img src="./img/Home/NP2.jpeg" alt="item1">
						<p class="name">Pumpkin spice candle</p>
						<p class="cost">CAD $ 24.99</p>
					</div>
					<div class="hot_sales_products hot_sales_products2">
						<img src="./img/Home/NP3.jpeg" alt="item2">
						<p class="name">Hot Chocolate</p>
						<p class="cost">CAD $ 24.99</p>
					</div>
					<div class="hot_sales_products hot_sales_products3">
						<img src="./img/Home/NP1.jpeg" alt="item3">
						<p class="name">Maple leaf</p>
						<p class="cost">CAD $ 29.99</p>
					</div>
					<div class="hot_sales_products hot_sales_products4">
						<img src="./img/Home/Vanilla.jpeg" alt="item4">
						<p class="name">Vanilla bean cream</p>
						<p class="cost">CAD $ 29.99</p>
					</div>
					
							
				</div>
				
				
				<div class="see_more"><button class="see_more_btn" onclick="location.href='shop.html' ">See more</button></div>
			</div>
			<div class="content_wrap"></div>

			
		</main>
            <!----------------- footer ------------------>
            <?php require_once("partials/footer.php") ?>
            <!------------------------------------------->

		
		<script>
	
		</script>
	</body>
</html>