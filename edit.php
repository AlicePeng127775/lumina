<?php
include_once './database/crud.php';

$user = null;
$insertSuccess = false;
$errors = [];
$updateSuccess = false;

if (isset($_GET['id'])) {
    $user_id = $connection->real_escape_string($_GET['id']);
    $query = "SELECT * FROM user WHERE id = $user_id";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_array();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fn = $connection->real_escape_string($_POST['fn']);
    $ln = $connection->real_escape_string($_POST['ln']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $email = $connection->real_escape_string($_POST['email']);
    $province = $connection->real_escape_string($_POST['province']);
    $address = $connection->real_escape_string($_POST['address']);
    $postcode = $connection->real_escape_string($_POST['postcode']);
    $password = $connection->real_escape_string($_POST['password']);


    $updateQuery = "
        UPDATE user SET 
        fn = '$fn', 
        ln = '$ln', 
        phone = '$phone', 
        email = '$email', 
        province = '$province', 
        address = '$address', 
        postcode = '$postcode', 
        password = '$password'
        WHERE id = $user_id
    ";

    if ($connection->query($updateQuery) === TRUE) {
        $updateSuccess = true;
        header("Location: profile.php?id=$user_id");
    } else {
        echo "Error: " . $updateQuery . "<br>" . $connection->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
    <meta charset="utf-8">
    <meta name="author" content="Alice Guo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/test.css">
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="icon" type="image/x-icon" href="./img/Logo.png">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="./script/script.js"></script>
</head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main>
        <div class='message'></div>
                <?php if ($insertSuccess): ?>
                    <div class="success-message successM alert">User registered successfully!</div>
                <?php endif; ?>

                <?php if (!empty($errors)): ?>
                        <?php foreach ($errors as $error): ?>
                            <div class="error-message errorM alert">
                            <p><?php echo $error; ?></p>
                            </div>  
                        <?php endforeach; ?>
                 
				<?php endif; ?> 
        <div class="edtFrm">
            <form method="post" class="form3">
                <h1 class="title3">Edit</h1>
                <div class='userFullName'>
                    <div class="inputContainer3 userName">
                        <input type="text" class="input3" name="fn" placeholder="Firstname" value="<?php echo $user['fn']; ?>" required>
                        <label for="" class="label3">Firstname</label>
                    </div>
                    <div class='inputContainer3 userName'>
                        <input type="text" class="input3" name="ln" placeholder="Lastname" value="<?php echo $user['ln']; ?>" required>
                        <label for="" class="label3">Lastname</label>
                    </div>
                </div>
                <div class="inputContainer3">
                    <input type="phone" class="input3" name="phone" id="phone" placeholder="Phone" value="<?php echo $user['phone']; ?>" required>
                    <label for="" class="label3">Phone</label>
                </div>
                <div class="inputContainer3">
                    <input type="email" class="input3" name="email" placeholder="Email" value="<?php echo $user['email']; ?>" required>
                    <label for="" class="label3">Email</label>
                </div>
                <div class="inputContainer3">
                    <input type="text" class="input3" name="province" placeholder="Province" value="<?php echo $user['province']; ?>" required>
                    <label for="" class="label3">Province</label>
                </div>
                <div class="inputContainer3">
                    <input type="text" class="input3" name="address" placeholder="Address" value="<?php echo $user['address']; ?>" required>
                    <label for="" class="label3">Address</label>
                </div>
                <div class="inputContainer3">
                    <input type="text" class="input3" name="postcode" placeholder="Postcode" value="<?php echo $user['postcode']; ?>" required>
                    <label for="" class="label3">PostCode</label>
                </div>
                <div class="inputContainer3">
                    <input type="password" class="input3" id="pw1" name="password" placeholder="Password" required>
                    <label for="" class="label3">Password</label>
                </div>
                <div class="inputContainer3">
                    <input type="password" class="input3" id="pw2" name="confirm_password" placeholder="Confirm Password" required>
                    <label for="" class="label3">Confirm Password</label>
                </div>
                <input type="submit" class="submitBtn3" name="save" value="Save">
            </form>
        </div>
      
    </main>
    <div class="content_wrap"></div>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script>


            document.addEventListener("DOMContentLoaded", function() {
                    const messageElement = document.querySelectorAll('.alert');
                    if (messageElement) {
                        setTimeout(() => {
                            messageElement.style.opacity = '0'; // Start fading out
                            setTimeout(() => {
                                messageElement.remove(); // Remove the element after fading out
                            }, 500); // Wait for the fade-out transition to complete
                        }, 4000); // Display for 4 seconds
                    }
            });

            function showMessage(type, message) {
              const messageContainer = document.querySelector('.message');

            const messageElement = document.createElement('div');
            // messageElement.className = type;
            messageElement.classList.add(type);
            messageElement.textContent = message;

            messageContainer.appendChild(messageElement);

            // Automatically hide the message after 5 seconds
            setTimeout(() => {
                messageElement.style.opacity = '0'; // Start fading out
                setTimeout(() => {
                    messageElement.remove(); // Remove the element after fading out
                }, 500); // Wait for the fade-out transition to complete
            }, 4000); // Display for 5 seconds
        }

        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector('.form3');
            const pw1 = document.getElementById('pw1');
            const pw2 = document.getElementById('pw2');
            const phone = document.getElementById('phone');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                if (pw1.value !== pw2.value) {
                    showMessage('warningM', 'Passwords do not match. Please retype your password.');
                    return;
                }

                const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                if (!passwordPattern.test(pw1.value)) {
                    showMessage('warningM', 'Password needs to be at least 8 characters long and contain both uppercase and lowercase letters.');
                    return;
                }

                if (phone.value.length !== 10 || isNaN(phone.value)) {
                    showMessage('warningM', 'Phone number must be exactly 10 digits.');
                    return;
                }

                // showMessage('successM', 'Form submitted successfully.');
                form.submit();
            });
        });
    </script>
</body>
</html>
