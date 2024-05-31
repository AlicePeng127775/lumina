<?php
	include_once './database/db.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lumina</title>
		<meta charset="utf-8">
        <meta name="author" content="Alice Guo ">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./css/test.css">
		<link rel="stylesheet" href="./css/shop.css">
		<link rel="icon" type="image/x-icon" href="./img/Logo.png">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>

	    <!----------------- header ------------------>
		<?php require_once("partials/header.php") ?>
        <!------------------------------------------->
            
		
		<main>
			<h1>All Products</h1>
			
			<div class="all_products">
			
				<?php
                $res = $connection->query("SELECT * FROM products");
                while($products=$res->fetch_array())
                {
				?>
					<div class="item">
					<div class="item_img"><img src="./img/Products/<?php echo $products['image']; ?>" alt="<?php echo $product['name']; ?>" ></div>
						<h2><?php echo $products['name']; ?></h2>
						<p><?php echo $products['description']; ?></p>
						<div class="add_to_cart">
							<div>CAD <p class="candles_price"><?php echo $products['price']; ?></div>
							<button class="add_to_cart_btn"><ion-icon name="cart-outline" class="add_cart_icon"></ion-icon></button>
						</div>
					</div>
				<?php }
				?>
			</div>

			<div class="content_wrap"></div>
		</main>
            <!----------------- footer ------------------>
            <?php require_once("partials/footer.php") ?>
            <!------------------------------------------->
		<script>

			//shopping cart quantity
			const add_to_cart_btn = document.querySelectorAll(".add_to_cart_btn");
			const quantity = Number(document.querySelector(".quantity").value);
			let cart = 0

			function add(){
				
				cart ++ ;
				
				document.querySelector(".quantity").innerHTML = cart ;
				
				
			};

			function pop (){
				alert("Product added to cart")
			}
			
			for (i = 0; i < add_to_cart_btn.length; i++){

    		add_to_cart_btn[i].addEventListener("click",add);
			add_to_cart_btn[i].addEventListener("click",pop);
			
   			}


			//Size Select with convert price
			const size_select = document.querySelectorAll(".size");//選取所有的選擇項
			
   //const price = document.querySelector(".candles_price");//獲取價格19.99

   
   function convert_price(){//轉換價錢
    
    const size_select = this.value;
    const oz4 = 1;// 1倍
    const oz8 = 2; // 2倍
    const oz16 = 2.5;//2.5倍

	let price = Number(this.parentNode.querySelector(".original_price").innerHTML);
    let converted_price;
   

    switch(size_select){
     case "4oz"://選擇４ｏｚ時 原本的價格19.99*1,
     converted_price = price * oz4;
     this.parentNode.querySelector(".candles_price").innerText = converted_price.toFixed(2);//將計算出的價格顯示出來，並修正到小數點2位
     
     break;

     case "8oz"://選擇8ｏｚ時 原本的價格19.99*2,

     converted_price = price * oz8;
     // document.querySelector(".candles_price").innerHTML = converted_price.toFixed(2);
     this.parentNode.querySelector(".candles_price").innerText = converted_price.toFixed(2)
     
     break;

     case "16oz"://選擇16ｏｚ時 原本的價格19.99*2.5,
     converted_price = price * oz16;
     //document.querySelector(".candles_price").innerHTML =  converted_price.toFixed(2);
     this.parentNode.querySelector(".candles_price").innerText = converted_price.toFixed(2)
     
     break;
    }
   }
   
   //  size_select.addEventListener("change",convert_price);--->
   
   for (i = 0; i < size_select.length; i++){ //

    size_select[i].addEventListener("change",convert_price); // 當

      }



		</script>
	</body>
</html>