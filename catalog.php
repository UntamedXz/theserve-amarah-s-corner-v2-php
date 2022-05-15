<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Amarah's Corner - BF Resort Las Piñas</title>

    <style>
        body {
            background: url(./assets/images/background.png) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div id="preloader"></div>

    <?php include './includes/navbar.php'; ?>

    <section class="catalog">
        
        <div class="catalog-container">
            <div class="img-container">
                <img src="./assets/images/pizza2.png" alt="">
            </div>
            <div class="details">
                <h3></h3>
            </div>
        </div>
    </section>

    <!-- SCRIPT -->
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