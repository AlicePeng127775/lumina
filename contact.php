<!DOCTYPE html>
<html>
	<head>
		<title>Lumina</title>
		<meta charset="utf-8">
        <meta name="author" content="Alice Guo ">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./css/test.css">
		<link rel="stylesheet" href="./css/contact.css">
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
			<h1>Contact Us</h1>
			<h2>We'd love to hear from you</h2>

			<div class="contactUs">
				<div class="google-maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15403.525007372726!2d105.4270337!3d15.1648648!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe18c74d9fd44fd5!2sWat+Pa+Phothiyan!5e0!3m2!1sen!2stw!4v1487781323266" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				  </div>

				<div><div class="contactForm">
					<form action="" class="form4">
					  <h1 class="title4">Send Us Message</h1>
				
					  <div class="inputContainer4">
						<input type="text" class="input4" placeholder="a">
						<label for="" class="label4">First Name</label>
					  </div>
				
					  <div class="inputContainer4">
						<input type="text" class="input4" placeholder="a">
						<label for="" class="label4">Last Name</label>
					  </div>
				
					  <div class="inputContainer4">
						<input type="text" class="input4" placeholder="a">
						<label for="" class="label4">E-mail</label>
					  </div>
				
					  <div class="inputContainer4">
						<input type="text" class="input4" placeholder="a">
						<label for="" class="label4">Phone</label>
					  </div>

					  <div class="inputContainer4 message">
						<input type="text" class="input4 messagetext" placeholder="a">
						<label for="" class="label4">Message</label>
					  </div>
				
					  <input type="submit" class="submitBtn4" value="Submit">
					</form>
				  </div>
				</div>
				 
			</div>

			<div class="info">

				<div class="email">
					<div class="circle"><ion-icon name="mail-sharp" class="icon"></ion-icon></div>
					<h3>Email</h3>
					<p>Lumina2023@gmail.com</p>
				</div>
				
				<div class="phone">
				<div class="circle"><ion-icon name="call-sharp" class="icon"></ion-icon></div>
					<h3>Phone</h3>
					<p>236-666-666</p>
				</div>

				<div class="location">
					<div class="circle"><ion-icon name="location-sharp" class="icon"></ion-icon></div>
					<h3>Office</h3>
					<p>555 my way</p>
				</div>
				
				<div>
					<div class="circle"><ion-icon name="logo-twitter" class="icon"></ion-icon></div>
					<h3>Twitter</h3>
					<p>@Lumina</p>
				</div>
				
				<div>
					<div class="circle"><ion-icon name="logo-instagram" class="icon"></ion-icon></div>
					<h3>Instagrm</h3>
					<p>@Lumina</p>

				</div>
				<div>
					<div class="circle"><ion-icon name="logo-facebook" class="icon"></ion-icon></div>
					<h3>Facebook</h3>
					<p>@Lumina</p>
				</div>
				
			</div>
	

			<div class="content_wrap"></div>
		</main>
			<!----------------- footer ------------------>
			<?php require_once("partials/footer.php") ?>
            <!------------------------------------------->

		

		<script>
			const shopping_cart = document.querySelector(".cart_icon");

			let display = false;

				function open_list(){
				const shopping_list = document.querySelector(".shopping_list");
				if (display == false){
					shopping_list.style.display = "block";
					display = true;
					shopping_list.classList.add("shopping_list_animation");
				}else{
						shopping_list.style.display = "none";
						display = false;
		
				}
	
}
					shopping_cart.addEventListener("click",open_list);


					const submitBtn1 = document.querySelector(".submitBtn4");

					function submit1 () {
						alert("Thank you for your message, we will reply as soon as possible.")

					}
					submitBtn1.addEventListener("click", submit1);

					const submitBtn = document.querySelector(".submitBtn");

		</script>
	</body>
</html>