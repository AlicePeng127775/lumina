<!DOCTYPE html>
<html>
<header>
<?php
// session_start();
// include_once './database/crud.php';

$user = null;  

if(isset($_GET['id'])) {
    $user_id = $connection->real_escape_string($_GET['id']);
    $query = "SELECT * FROM user WHERE id = $user_id";
    
    $result = $connection->query($query);

    if($result->num_rows > 0) {
        $user = $result->fetch_array();

    }    

  }
?>
			<div class="logo">
				<a href="index.php"><img src="./img/Logo.png" alt="Logo" width="150px" height="100px" ></a>
			</div>
                
			<nav class="navigation">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li class="dropdown_1"><a href="shop.php">SHOP</a></li>
					<li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
				</ul>
			</nav>
			<div class="all_icon">
				<div class="search bar7">
					<form>
						<input type="text" placeholder="Search" class="input2" >
						<button type="submit" class="searchBtn"><ion-icon name="search-outline" class="search_icon"></ion-icon></button>
					</form>
				</div>
			
				<div class="shopping_cart_icon shopping_cart login_icon"><a href="./checkout.php"><ion-icon name="cart-outline" class="cart_icon"></ion-icon></a>
					<div class="point"><p class="quantity"></p></div>
				</div>

				<div class="login_icon" ><?php if (isset($_GET['id'])) { ?> <a href='profile.php?id=<?php echo $user['id']; ?>'class='login_icon'><ion-icon name="person-outline"></ion-icon></a> <?php }else{?> <a href='login.php'class='login_icon'><ion-icon name="person-outline"></ion-icon></a> <?php } ?> </div>
			</div>
			<input id="menu-toggle" type="checkbox" />
			<label class='menu-button-container' for="menu-toggle">
			<div class='menu-button'></div> </label>
			
			<ul class="menu">
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li class="dropdown_1"><a href="shop.php">SHOP</a></li>
				<li class="dropdown_2"><a href="blog.php">BLOG</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="./checkout.php" class='mobile_icon'><ion-icon name="cart-outline"></ion-icon></a> <a href="login.php"class='mobile_icon'><ion-icon name="person-outline"></ion-icon></a></li>
			</ul>
		
		</header>
</html>