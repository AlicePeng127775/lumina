<?php
session_start();
include_once './database/crud.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $email_err = "Please enter email.";
    } 

    if (empty($password)) {
        $password_err = "Please enter your password.";
    } 

    if (empty($email_err) && empty($password_err)) {
        $query = "SELECT * FROM `user` WHERE email = ? AND password = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->num_rows;

        if ($count == 1) {
            $user = $result->fetch_assoc();
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $user['id'];
            header("Location: profile.php?id=" . $user['id']);
            exit();
        } else {
            $fmsg = "Email or Password error, Please try again!";

        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lumina login</title>
        <meta charset="utf-8">
        <meta name="author" content="Alice Peng">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/test.css">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="icon" type="image/x-icon" href="./img/Logo.png">
        <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        </head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main>
        <?php if (isset($fmsg)) { ?><div class="alert errorM"><?php echo $fmsg; ?> </div><?php } ?>
        <div class="login_sheet log_in">
            <form method="post" class="login_form">
                <h2 class="login_title">Log In</h2>
                <div class="inputContainer1">
                    <input type="email" name="email" class="input1" placeholder="a" required>
                    <label for="" class="label1">Email</label>
                </div>
                <div class="inputContainer1">
                    <input type="password" class="input1" name="password" placeholder="a" required>
                    <label for="" class="label1">Password</label>
                </div>
                <input type="submit" class="loginBtn" name="login" value="Log in">
                <a href="signup.php" class="signup_link">Sign Up</a>
            </form>
        </div>
    </main>
    <div class="content_wrap"></div>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script>
       document.addEventListener("DOMContentLoaded", function() {
        const messageElement = document.querySelector('.alert');
        if (messageElement) {
            setTimeout(() => {
                messageElement.style.opacity = '0'; // Start fading out
                setTimeout(() => {
                    messageElement.remove(); // Remove the element after fading out
                }, 500); // Wait for the fade-out transition to complete
            }, 4000); // Display for 4 seconds
        }
    });
    </script>
</body>
</html>
