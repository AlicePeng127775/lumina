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
		<link rel="stylesheet" href="./css/global.css">
		<link rel="stylesheet" href="./css/article.css">
		<link rel="icon" type="image/x-icon" href="./img/Logo.png">
		<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		<!-- <script type="text/javascript" src="./script/script.js"></script> -->
	</head>
	<body>
		<!----------------- footer ------------------>
		<?php require_once("partials/footer.php") ?>
        <!------------------------------------------->

		<main>
			
            <div class="blog_bar">
				<img src="./img/Candles/candles/4.jpg" alt="blog">
                <h1>Illuminate Safely:</h1>
            </div>
			<div class="space"></div>
			<div class="article_content">

				<h2>The importance of candle safety. Guidelines on how to safely burn candles at home and what precautions to take.</h2><br><br>

				<p>Candles have the magical ability to transform ordinary spaces 
					into serene sanctuaries, filling the air with delightful fragrances 
					and casting a warm, inviting glow. However, with this enchantment comes a 
					responsibility: candle safety. Understanding how to burn candles safely not 
					only preserves the beauty of your home but also ensures the safety of your 
					loved ones. In this guide, we’ll illuminate the path to safe candle usage, 
					offering essential guidelines and precautions for a worry-free, cozy ambiance.
				</p>


				<h3>1. Choose the Right Candle:</h3>

				<p>You may be surprised to learn that not all candles are created equally, 
					and some even can release toxins into your air when you burn them! 
					So begin your candle safety journey by selecting high-quality candles. 
					Look for non-toxic, natural materials. Avoid candles with lead-based wicks,
					 as they can release harmful chemicals when burned. Lucky for you, all of
					  Lumina candles are certified non toxic and are scented with all natural essential oils.
				</p>

				<h3>2. Placement Matters:</h3>
				<p>Always place candles on stable, heat-resistant surfaces. 
					Keep them away from flammable materials such as curtains,
					 books, or decorations. Be mindful of drafts that could 
					 cause the flame to flicker and potentially ignite nearby 
					 objects. Also, ensure that they are out of reach of any 
					 children (or fur children, AKA dogs). Candles should be 
					 placed in areas where children and pets cannot access them. 
					 A curious child or playful pet might accidentally knock over
					  a candle, leading to hazardous situations.
				</p>

				<h3>3. Trim Those Wicks:</h3>
				<p>This is important for candle care in general, 
					which you can read more about in our previous post, 
					“candle care tips”, but is also an essential step 
					in maintaining safe candle burning. Trim the candle 
					wick to about a quarter of an inch before lighting. 
					Long wicks can cause uneven burning, dripping, or flaring, 
					which increases the risk of accidents.
				</p>

				<h3>4. Never Leave Candles Unattended:</h3>
				<p>One of the cardinal rules of candle safety is to never leave a burning 
					candle unattended. Whether you’re stepping out of the room or going 
					to bed, extinguish the flame. It’s better to relight it later than
					 to risk an uncontrolled fire.
				</p>
				<h3>5. Mind the Duration:</h3>
				<p>Avoid burning candles for more than 3-4 hours at a time. 
					Long-lasting burning sessions can cause the candle container to overheat,
					 potentially cracking or breaking, which could then lead to a massive mess or fire!
				</p>
				<h3>6. Extinguish with Care:</h3>
				<p>When extinguishing a candle, use a snuffer or gently blow on the flame. 
					Avoid splattering hot wax. For scented candles, cover them with a lid 
					or use a candle snuffer to preserve the fragrance for your next use. 
				</p>
				<h4>By following these candle safety guidelines, you can create a soothing atmosphere 
					in your home without compromising on safety. Let the flickering glow of your candles 
					enhance your space, knowing that you’re enjoying 
					their beauty responsibly. From our Lumina family to your home, stay safe, and may your 
					home be forever illuminated with warmth and tranquility!
				</h4>



			</div>

			<div class="share">
			<!-- Sharingbutton Facebook -->
			<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Flumina.aliccccce.com" target="_blank" rel="noopener" aria-label="">
				<div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
				</div>
				</div>
			</a>
			
			<!-- Sharingbutton Twitter -->
			<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Share%20our%20posts&amp;url=http%3A%2F%2Flumina.aliccccce.com" target="_blank" rel="noopener" aria-label="">
				<div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
				</div>
				</div>
			</a>
			
			<!-- Sharingbutton Tumblr -->
			<a class="resp-sharing-button__link" href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=Share%20our%20posts&amp;caption=Share%20our%20posts&amp;content=http%3A%2F%2Flumina.aliccccce.com&amp;canonicalUrl=http%3A%2F%2Flumina.aliccccce.com&amp;shareSource=tumblr_share_button" target="_blank" rel="noopener" aria-label="">
				<div class="resp-sharing-button resp-sharing-button--tumblr resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.5.5v5h5v4h-5V15c0 5 3.5 4.4 6 2.8v4.4c-6.7 3.2-12 0-12-4.2V9.5h-3V6.7c1-.3 2.2-.7 3-1.3.5-.5 1-1.2 1.4-2 .3-.7.6-1.7.7-3h3.8z"/></svg>
				</div>
				</div>
			</a>
			
			<!-- Sharingbutton E-Mail -->
			<a class="resp-sharing-button__link" href="mailto:?subject=Share%20our%20posts&amp;body=http%3A%2F%2Flumina.aliccccce.com" target="_self" rel="noopener" aria-label="">
				<div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 4H2C.9 4 0 4.9 0 6v12c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7.25 14.43l-3.5 2c-.08.05-.17.07-.25.07-.17 0-.34-.1-.43-.25-.14-.24-.06-.55.18-.68l3.5-2c.24-.14.55-.06.68.18.14.24.06.55-.18.68zm4.75.07c-.1 0-.2-.03-.27-.08l-8.5-5.5c-.23-.15-.3-.46-.15-.7.15-.22.46-.3.7-.14L12 13.4l8.23-5.32c.23-.15.54-.08.7.15.14.23.07.54-.16.7l-8.5 5.5c-.08.04-.17.07-.27.07zm8.93 1.75c-.1.16-.26.25-.43.25-.08 0-.17-.02-.25-.07l-3.5-2c-.24-.13-.32-.44-.18-.68s.44-.32.68-.18l3.5 2c.24.13.32.44.18.68z"/></svg>
				</div>
				</div>
			</a>
			
			<!-- Sharingbutton Pinterest -->
			<a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Flumina.aliccccce.com&amp;media=http%3A%2F%2Flumina.aliccccce.com&amp;description=Share%20our%20posts" target="_blank" rel="noopener" aria-label="">
				<div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.14.5C5.86.5 2.7 5 2.7 8.75c0 2.27.86 4.3 2.7 5.05.3.12.57 0 .66-.33l.27-1.06c.1-.32.06-.44-.2-.73-.52-.62-.86-1.44-.86-2.6 0-3.33 2.5-6.32 6.5-6.32 3.55 0 5.5 2.17 5.5 5.07 0 3.8-1.7 7.02-4.2 7.02-1.37 0-2.4-1.14-2.07-2.54.4-1.68 1.16-3.48 1.16-4.7 0-1.07-.58-1.98-1.78-1.98-1.4 0-2.55 1.47-2.55 3.42 0 1.25.43 2.1.43 2.1l-1.7 7.2c-.5 2.13-.08 4.75-.04 5 .02.17.22.2.3.1.14-.18 1.82-2.26 2.4-4.33.16-.58.93-3.63.93-3.63.45.88 1.8 1.65 3.22 1.65 4.25 0 7.13-3.87 7.13-9.05C20.5 4.15 17.18.5 12.14.5z"/></svg>
				</div>
				</div>
			</a>
			
			</div>
			<div class="space"></div>
			<div class="other_blog"><h2>Other Blog</h2>
			<div class="all_article">
				<div class="article article0 ">
					<img src="./img/Logo.png" alt="article0">
					<h2>Crafting Candles: <br>A guide to making your very own candle at home </h2>
					<p>
						We at Lumina believe that candles
						 have a unique way of bringing warmth
						 and ambiance to any space. We’ve 
						 been creating handcrafted 
						 candles for almost a decade and our 
						inspiration has always been the
						 beauty of our local sceneries......
					</p>
	
				<a href="article0.html"> Read more >></a>
				</div>
				<div class="article article0">
					<img src="./img/Candles/candles/4.jpg" alt="article1">
					<h2>Illuminate Safely:  <br> Your Guide to Candle Safety at Home</h2>
					<p>Illuminate Safely: The importance of candle safety. 
						Guidelines on how to safely burn candles at 
						home and what precautions to take.....
					</p>
	
				<a href="article1.html"> Read more >></a>
				</div>
	
				<div class="article article0">
					<img src="./img/Candles/candles/5.jpg" alt="article2">
					<h2>Candle Care 101: <br> A Guide to Prolonging the Glow</h2>
					<p>Candle Care 101: Providing useful tips on how to care 
						for and maintain candles for optimal burning experience.
						 Including advice on trimming wicks, proper storage, 
						 and how to make candles last longer.....
					</p>
	
				<a href="article2.html"> Read more >></a>
				</div>
	
				<div class="article article0">
					<img src="./img/Candles/candles/3.jpg" alt="article3">
					<h2>Candles and Calm:  <br> Transforming Stress into Serenity	</h2>
					<p>Candle and Wellness: The connection between candles and 
						mental well-being. Discussing how specific scents can 
						promote relaxation, focus, or stress relief. Emphasizing 
						the importance of self-care rituals involving candles......
					</p>
	
				<a href="article3.html"> Read more >></a>
				</div>
				
			</div>
		</div>	
			

			<div class="content_wrap"></div>
		</main>
		<footer>

			<div class="logo">
				<img src="./img/Logo.png" alt="Logo" width="300px" height="200px">
			</div>

            <div class="contact_info">
                <h3>Contact Us</h3>
                <p>Lumina2023@gmail.com<br><br>
                    239 - 999 - 999
                </p>
                <div class="Social_Media_icon">
					<ion-icon name="logo-instagram" class="icon"></ion-icon>
					<ion-icon name="logo-facebook" class="icon"></ion-icon>
					<ion-icon name="logo-twitter" class="icon"></ion-icon>
                </div>  
            </div>
			<div class="Newsletter">
				<h3>Newsletter</h3>
				<div class="inputContainer">
					<form action="" method="POST">
						<input type="email" class="input" placeholder="a">
						<label for="" class="label">Email</label>
						<input type="submit" value="Subscribe" class="submitBtn"/>
					</form>

				</div>
				
				
			</div>
			
            
            
		</footer>

		<script>
				$(window).scroll(function(){


				if($(window).scrollTop() > 250){
				
				$('.share').removeClass('show')

				}else{
					$('.share').addClass('show')

				}
				});

				const submitBtn = document.querySelector(".submitBtn");
			
			function submit (){
				alert("Thank you for subscribing!")
			};

			submitBtn.addEventListener('click', submit);

			
			const loginBtn = document.querySelector(".loginBtn");


			function login () {
			alert("Login Successful")

			}

			loginBtn.addEventListener('click', login);


		</script>
	</body>
</html>