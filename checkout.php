<?php
include_once './database/crud.php';

if(isset($_GET['id'])) {
    // Sanitize the ID value to protect against SQL injection
    $user_id = $MySQLiconn->real_escape_string($_GET['id']);

    // Prepare your SQL query to get the specific student data
    $query = "SELECT * FROM user WHERE id = $user_id";
    $result = $MySQLiconn->query($query);

    if($result->num_rows > 0) {
        // Fetch the student data
        $user = $result->fetch_array();

    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./img/Logo.png">
  <!-- import Noto Fonts TC -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
  <!-- my CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/test.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <title>Lumina Check-Out </title>
</head>

<body>
	  <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->

  <!-- main-->
  <main>
    <div class="container">
      <h1 class="main__title">Check Out</h1>
      
      <section class="main__content">
        <!-- left part-->
        <div class="main__content__left">
          <!-- stepper -->
          <div id="stepper" class="stepper">
            <div class="step active">
              <div class="step__circle"></div>
              <h4 class="step__label">Shipping Address</h4>
            </div>
            <span class="step__line"></span>
            <div class="step">
              <div class="step__circle"></div>
              <h4 class="step__label">Shipping Methods</h4>
            </div>
            <span class="step__line"></span>
            <div class="step">
              <div class="step__circle"></div>
              <h4 class="step__label">Payment Information</h4>
            </div>
          </div>
        
          <!-- form -->
          <form id="form">
            <div class="form__content">
              <div class="form__part">
                <h2 class="form__title">Shipping Address</h2>
                <div class="form__row--gender">
                  <label for="gender">Title</label>
                  <div class="select-wrapper">
                    <select name="gender" id="gender" placeholder= "Select Title">
                      <option value="male">Mr.</option>
                      <option value="female">Mrs. </option>
                      <option value="female">Miss.</option>
                      <option value="female">Dr.</option>
                    </select>
                  </div>
                </div>
                <div class="form__row--name">
                  <label for="name">Name</label>
                  <input name="name" id="name" type="text" value="<?php if(isset($_GET['edit'])) echo $user['fn'] ." ". $user['ln'];?>">
                </div>
                <div class="form__row--phone">
                  <label for="phone">Phone number</label>
                  <input name="phone" id="phone" type="text" placeholder="">
                </div>
                <div class="form__row--email">
                  <label for="email">Email</label>
                  <input name="email" id="email" type="text" placeholder="">
                </div>
                <div class="form__row--city">
                  <label for="city"> Province</label>
                  <div class="select-wrapper">
                    <select name="city" id="city" required>
                      <option value="" disabled selected></option>
                      <option value="British Columbia">British Columbia</option>
                      <option value="Alberta">Alberta</option>
                      <option value="Saskatchewan">Saskatchewan</option>
                      <option value="Manitoba">Manitoba</option>
                      <option value="Ontario">Ontario</option>
                      <option value="Quebec">Quebec</option>
                      <option value="New Brunswick">New Brunswick</option>
                      <option value="Prince Edward Island">Prince Edward Island</option>
                      <option value="Nova Scotia">Nova Scotia</option>
                      <option value="Newfoundland/Labrador">Newfoundland/Labrador</option>
                    </select>
                  </div>
                </div>
                <div class="form__row--address">
                  <label for="address">Address</label>
                  <input name="address" id="address" type="text" placeholder="">
                </div>
              </div>
              <div class="form__part d-none">
                <h2 class="form__title">Shipping Methods</h2>
                <div class="form__row--shipping">
                  <input type="radio" data-fee="0" name="shipping__type" value="0" id="standard" checked>
                  <label for="standard">
                    <div class="shipping__des">
                      <span class="shipping__subtitle">Standard Delivery</span>
                      <span class="shipping__time"> 5-8 working days</span>
                    </div>
                    <div class="shipping__fee">Free</div>
                  </label>
                </div>
                <div class="form__row--shipping">
                  <input type="radio" data-fee="20" name="shipping__type" value="20" id="express">
                  <label for="express">
                    <div class="shipping__des">
                      <span class="shipping__subtitle">UPS</span>
                      <span class="shipping__time">3-5 working days</span>
                    </div>
                    <div class="shipping__fee">$ 20.00</div>
                  </label>
                </div>
              </div>
              <div class="form__part d-none">
                <h2 class="form__title">Payment Information</h2>
                <div class="form__row--payname">
                  <label for="pay_name">Name of cardholder</label>
                  <input name="pay_name" id="pay_name" type="text" placeholder="">
                </div>
                <div class="form__row--paycard">
                  <label for="pay_card">Card Number</label>
                  <input name="pay_card" id="pay_card" type="text" placeholder="1111 2222 3333 4444">
                </div>
                <div class="form__row--payexp">
                  <label for="pay_exp">Validity Period</label>
                  <input name="pay_exp" id="pay_exp" type="text" placeholder="MM/YY">
                </div>
                <div class="form__row--paycode">
                  <label for="pay_code">CVC / CCV</label>
                  <input name="pay_code" id="pay_code" type="text" placeholder="000">
                </div>
              </div>
            </div>
        
            <!-- button --><!--下一步 上一步-->
            <div class="form__btn">
              <button class="form__btn--previous" disabled><span class="arrow">&longleftarrow;</span></button>
              <button class="form__btn--next first-step">Next Step</button>
            </div>
          </form>
        </div>
        
        <!-- right part-->
        <div class="main__content__right">
          <div id="cart" class="cart2">
            <h3 class="cart__title">Shopping Cart</h3>
            <!-- cart items -->
            <div id="cart__items" class="cart__items scrollbar">
              <!-- ///// insert cart item here ///// -->
            </div>
            <!-- cart charge -->
            <div class="cart__shipping">
              <h5 class="cart__shipping--subtitle">Shipping Charges</h5>
              <h5 class="cart__shipping--fee">Free</h5>
            </div>
            <div class="cart__sum">
              <h5 class="cart__sum--subtitle">Total</h5>
              <h5 class="cart__sum--price"></h5>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <div class="content_wrap"></div>

<!----------------- footer ------------------>
<?php require_once("partials/footer.php") ?>
<!------------------------------------------->
<script src="main.js"></script>
</body>

</html>