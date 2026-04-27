<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] != null) {
        header("Location: index.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
}
$usernameError = '';
$passwordError = '';
if (isset($_POST['signin'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'conn.php';
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        // Fetch the user details by username
        $sql = "SELECT * FROM login WHERE username = '$username'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            if (password_verify($password, $hashedPassword)) {
                $user_id = $row['id'];
                $_SESSION['user'] = $user_id;

                echo "<script>window.location.href='index.php';</script>";
            } else {
                $passwordError = "Invalid password. Please try again.";
            }
        } else {
            $usernameError = "User not found. Please register if you don't have an account.";
        }
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Log In</title>
    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }

    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }

    .form button:hover,
    .form button:active,
    .form button:focus {
        background: #43A047;
    }

    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }

    .form .message a {
        color: #4CAF50;
        text-decoration: none;
    }

    .form .register-form {
        display: none;
    }

    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }

    .container:before,
    .container:after {
        content: "";
        display: block;
        clear: both;
    }

    .container .info {
        margin: 50px auto;
        text-align: center;
    }

    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }

    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }

    .container .info span a {
        color: #000000;
        text-decoration: none;
    }

    .container .info span .fa {
        color: #EF3B3A;
    }

    body {
        background: #76b852;
        /* fallback for old browsers */
        background: rgb(141, 194, 111);
        background: linear-gradient(90deg, rgba(141, 194, 111, 1) 0%, rgba(118, 184, 82, 1) 50%);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    </style>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="input-container">
                    <input type="text" placeholder="username" name="username" oninput="validateUsername(this)"
                        onpaste="validatePaste(event)" />
                    <?php if (isset($usernameError)) { ?>
                    <p class="error-message"><?php echo $usernameError; ?></p>
                    <?php } ?>
                </div>
                <div class="input-container">
                    <input type="password" placeholder="password" name="password" />
                    <?php if (isset($passwordError)) { ?>
                    <p class="error-message"><?php echo $passwordError; ?></p>
                    <?php } ?>
                </div>
                <button type="submit" name="signin">login</button>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $('.message a').click(function() {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    });
    </script>
    <!--For prevetion of sql injection in login page -->
    <script>
    function validateUsername(input) {
        var username = input.value;
        var pattern = /^[a-zA-Z0-9]*$/;

        if (!pattern.test(username)) {
            input.value = username.slice(0, -1);
        }
    }

    function validatePaste(event) {
        event.preventDefault();
        var pastedData = (event.clipboardData || window.clipboardData).getData('text');
        if (/[^a-zA-Z0-9]/.test(pastedData)) {
            return false;
        }
        document.execCommand('insertText', false, pastedData);
    }
    </script>
</body>

</html>