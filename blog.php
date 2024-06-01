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
		<link rel="stylesheet" href="./css/blog.css">
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
			
            <div class="blog_bar">
				<img src="./img/Blogs/bar.jpeg" alt="blog">
                <h1>BLOG</h1>
            </div>
			
			<div class="space"></div>

			<h1 class="all_blog">All Blog</h1>
			<div class="all_article">

				<div class="article article0">
					
						<img src="./img/Logo.png" alt="article0">
						<div>
						<h2>Crafting Candles: <br>A guide to making your very own candle at home </h2>
						<p>
							We at Lumina believe that candles
							 have a unique way of bringing warmth
							 and ambiance to any space. We’ve 
							 been creating handcrafted 
							 candles for almost a decade and our 
							inspiration has always been the
							 beauty of our local sceneries....
						</p>
		
					</div>
				
				<a href="/article/article0.php"> Read more >>   </a>
				</div>
          
				<div class="article article1">
				
						<img src="./img/Blogs/4.jpg" alt="article1">
						<div>
						<h2>Illuminate Safely: <br>Your Guide to Candle Safety at Home</h2>
						<p>Illuminate Safely: The importance of candle safety. 
							Guidelines on how to safely burn candles at 
							home and what precautions to take.....
						</p>
					</div>
				<a href="/article/article1.php"> Read more >>   </a>
				</div>
	
				<div class="article article2">
					<img src="./img/Blogs/5.jpg" alt="article2">
					<div>
						<h2>Candle Care 101: <br> A Guide to Prolonging the Glow</h2>
						<p>Candle Care 101: Providing useful tips on how to care 
							for and maintain candles for optimal burning experience.
							 Including advice on trimming wicks, proper storage, 
							 and how to make candles last longer.....
						</p>
					</div>
	
				<a href="/article/article2.php"> Read more >>   </a>
				</div>
	
				<div class="article article3">

				
						<img src="./img/Blogs/3.jpg" alt="article3">
						<div>
						<h2>Candles and Calm: <br> Transforming Stress into Serenity	</h2>
						<p>Candle and Wellness: The connection between candles and 
							mental well-being. Discussing how specific scents can 
							promote relaxation, focus, or stress relief. Emphasizing 
							the importance of self-care rituals involving candles......
						</p>
		
						</div>
				
				<a href="/article/article3.php"> Read more >>   </a>
				</div>
				
			</div>

			<div class="content_wrap"></div>
		</main>
            <!----------------- footer ------------------>
            <?php require_once("partials/footer.php") ?>
            <!------------------------------------------->

	</body>
</html>