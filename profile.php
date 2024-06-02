<?php
session_start();
include_once './database/crud.php';
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Centered Container Example</title>
    <head>
      <title>Lumina</title>
      <meta charset="utf-8" />
      <meta name="author" content="Alice Peng" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="./css/test.css">
      <link rel="stylesheet" href="./css/pro.css" />
      <link rel="icon" type="image/x-icon" href="./img/Logo.png" />
      <link
        href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet"
      />
      <script
        type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"
      ></script>
      <script
        type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
        nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
      ></script>

    </head>
  <body>
        <!----------------- header ------------------>
        <?php require_once("partials/header.php") ?>
        <!------------------------------------------->
    <main>
          <h1>My Account</h1>
          <h3 class='welcome'> Welcome back, <?php echo $user['fn'];?> !</h3>
          <section class="proContainer">
                <div class="proheader">
                  <div>
                    <h3 class="title" for="name">Name</h3>
                    <p id="name" class="userinfo"> <?php echo $user['fn'] ." ". $user['ln'];?></p>
                  </div>
                  <div class='iconContainer'>
                   
                      <a href="edit.php?id=<?php echo $user['id'];?>" onclick="return confirm('Would you like to edit this entry?')"  style='color:#ab6263; font-size:2rem; text-align: center; align-items: center;'><ion-icon name="create-outline"></ion-icon></a>
                    
                    
                      <a href="logout.php" style='color:#ab6263; font-size:2rem; text-align: center; align-items: center;' ><ion-icon name="log-out-outline"></ion-icon> </a>
                    
                  </div>
            
                </div>
              <div>
                <h3 class="title" for="email">Email</h3>
                <p id="email" class="userinfo"> <?php echo $user['email'];?></p>
              </div>
              <div>
                <h3 class="title" for="phone">Phone Number</h3>
                <p id="phone" class="userinfo"> <?php echo $user['phone'];?></p>
              </div>
              <div>
                <h3 class="title" for="address">Address</h3>
                <p id="address" class="userinfo">
                <?php echo $user['address'] ." ". $user['province']." ".$user['postcode'];?>
                </p>
              </div>
              <button class="order-history-button" onclick="window.location.href='order_history.php?id=<?php echo $user['id']; ?>'">View Order History</button>
          </section>
        </main>  
        
			<div class="content_wrap"></div>
          <!----------------- footer ------------------>
          <?php require_once("partials/footer.php") ?>
          <!------------------------------------------->
  </body>
</html>