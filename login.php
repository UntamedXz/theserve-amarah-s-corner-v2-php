<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Amarah's Corner - BF Resort Las Piñas</title>

    <style>
        body {
            background: url(./assets/images/background.png) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
    </style>
</head>

<body>
    <div id="preloader"></div>
    
    <?php include './includes/navbar.php'; ?>

    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'no input') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">All fields are required!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'no username') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Input Username!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'no email') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Input Email!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'no password') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Input Password!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'Email already exist!') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Email already exist!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'Registered Successfully!') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Registered Successfully!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'Something went wrong!') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Something went wrong!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    ?>

    <!-- LOGIN FORM -->
    <div class="login-form-container">
        <form action="">
            <a href="#" class="logo"><img src="./assets/images/official_logo.png" alt=""></a>
            <h3>sign in</h3>
            <span>email</span>
            <input type="email" name="" class="box" placeholder="enter your email" id="">
            <span>password</span>
            <input type="password" name="" class="box" placeholder="enter your password" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="register">create one</a></p>
        </form>
    </div>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
    </script>
    <script src="./assets/js/script.js"></script>
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>
</body>

</html>