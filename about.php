<?php
session_start();
require_once('./database/crud.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lumina</title>
		<meta charset="utf-8">
        <meta name="author" content="Alice Guo ">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./css/test.css">
		<link rel="stylesheet" href="./css/about.css">
		<link rel="icon" type="image/x-icon" href="./img/Logo.png">
		<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	</head>
	<body>
		<!----------------- header ------------------>
		<?php require_once("partials/header.php") ?>
        <!------------------------------------------->
		<main>
			<div class="about_bar">
				<img src="./img/About/bunner.jpeg" alt="long">
				<h1 class="about_us">About Us</h1>
			</div>

			<div class="brand_story">

				<div class="brand_story_content">
					<h2>We are Lumina</h2>
					<p>Welcome to Lumina Candles, where the glow of your moments begins
					- Discover a new world of warmth and light in every candle.
					 At Lumina, we are all about creating moments that brighten and infuse your space.
					  With our carefully crafted candles, your space transforms into a heaven of comfort 
					  and ambiance. So embrace and discover your favourite scents in every candle we create.
					</p>
					<h3>Join us and illuminate your life with lumina!!</h3>

				</div>
				

				<div class="photo img1">
					<img src="./img/About/Pumpkin.jpeg" alt="photo" id="img1">
					
				</div>
	
				<div class="photo img2">
					<img src="./img/About/Maple.jpeg" alt="photo"id="img2">
				</div>
				
			</div>
			
			<div class="our_Mission">

				<div class="photo img3">
					<img src="./img/About/Mission.jpeg" alt="photo">
				</div>
				<div class="our_Mission_content">
					<h2>Our Mission</h2>
					<p> At Lumina Candles, our mission is to bring light,
						 warmth and serenity into the lives of our customers 
						 through beautifully hand-crafted candles. we are 
						 dedicated to creating eco-friendly and premium-quality 
						 candles that illuminate not just spaces but also hearts, 
						 fostering moments of connection and well-being. <br> <br> <br>

						Our vision is to be Vancouver’s foremost candle brand, celebrated for its sustainable practices, 
						captivating designs, and commitment to enhancing the everyday lives of our customers. 
						Lumina aims to spread its luminescence far and wide in different places around the globe <br> <br> <br>
						
						Lumina is committed to eco-friendly practices.
						 we use sustainable materials, minimize waste and continually 
						 seek ways to reduce our environmental impact by recycling and 
						 using reusable containers for candles. We also value quality as 
						 much as we value our customers that is why we take pride in our
						  meticulous candle-making process,
						 prioritizing craftmanship and keen 
						 to detail to ensure that every Lumina candle is a quality work of art.</p>

					
				</div>
				
				
			</div>

			<div class="our_raw_materials">

				<div class="our_raw_materials_content">
					<h2>Our Raw Materials</h2>
					<p>Ingredients for all candle collection<br><br><br>
						Ingredients<br><br>
						- 100% natural Soy wax<br>
						- 100% vegan<br>
						- Petroleum and preservative-free <br>
						- Premium fragrance oil<br>
						- Lead-free cotton wick<br>
						- Natural dyes<br>
						- Hand-crafted<br>
						- Glass container</p>
					
				</div>

				<div class="photo img4">
					<img src="./img/About/Materials.jpeg"  alt="photo">
				</div>
			
				
			</div>

			<div class="faq_all">

			<div class="faq_img img5"> 
				<img src="./img/About/FQAs.jpeg"   alt="FAQs">
			</div>
		
			<section>
				
				
				<h2 class="title">FAQs</h2>
				<div class="faq">
					<div class="question accordion">
						
						<h3>How should I care for my candles to ensure they last longer?</h3>
							
						<svg width="15" height="10" viewBox="0 0 42 25">
							<path d="M3 3L21 21L39 3" stroke="black" stroke-width="7" storke-linecap="round" fill="none"/>
						</svg>
					</div>
		
					<div class="answer">
						<p>To extend the life of your candles, keep the wick trimmed to 1/4 inch, avoid burning in drafty areas, and store them in a cool, dry place.</p>	
		
					</div>
				</div>
		
				<div class="faq">
					<div class="question accordion">
						
						<h3>Are your candles safe to use at home?</h3>
							
						<svg width="15" height="10" viewBox="0 0 42 25">
							<path d="M3 3L21 21L39 3" stroke="black" stroke-width="7" storke-linecap="round" fill="none"/>
						</svg>
					</div>
		
					<div class="answer">
						<p>
							Our candles are designed to be safe when used according to the instructions. Always follow safety guidelines, such as trimming wicks and keeping candles away from flammable materials.</p>	
		
					</div>
				</div>
		
				<div class="faq">
					<div class="question accordion">
						
						<h3>How long do your candles burn?
						</h3>
							
						<svg width="15" height="10" viewBox="0 0 42 25">
							<path d="M3 3L21 21L39 3" stroke="black" stroke-width="7" storke-linecap="round" fill="none"/>
						</svg>
					</div>
		
					<div class="answer">
						<p>The burn time of our candles varies depending on the type and size of the candle. You can find burn time details on each product page.</p>	
		
					</div>
				</div>
		
				<div class="faq">
					<div class="question accordion">
						
						<h3>Do you offer bulk or wholesale orders?</h3>
							
						<svg width="15" height="10" viewBox="0 0 42 25">
							<path d="M3 3L21 21L39 3" stroke="black" stroke-width="7" storke-linecap="round" fill="none"/>
						</svg>
					</div>
		
					<div class="answer">
						<p>Yes, we provide bulk and wholesale options for our candles. Please contact our customer support for more information.</p>	
		
					</div>
				</div>
		
				<div class="faq">
					<div class="question accordion">
						
						<h3>What is your return and exchange policy?</h3>
							
						<svg width="15" height="10" viewBox="0 0 42 25">
							<path d="M3 3 L21 21 L39 3" stroke="black" stroke-width="7" storke-linecap="round" fill="none"/>
						</svg>
					</div>
		
					<div class="answer">
						<p>
							We have a hassle-free return and exchange policy. 
							If you're not satisfied with your purchase, 
							please contact our customer service within 30 days for assistance.</p>	
		
					</div>
				</div>
			</section>
		</div>
			<div class="content_wrap"></div>
		</main>
		<!----------------- footer ------------------>
		<?php require_once("partials/footer.php") ?>
        <!------------------------------------------->
		
		<!--  for Faq -->
		<script>
			const faqs = document.querySelectorAll(".faq");
	
			faqs.forEach(faq => {
				faq.addEventListener("click",() =>{
					faq.classList.toggle("active1");
				});
			});
</script>
	</body>
</html>