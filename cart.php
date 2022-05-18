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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

    </head>

    


    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>

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

    <section class="cart">
        <div class="cart-container">
            <h1>Shopping Cart</h1>
            <div class="table">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>IMAGE</th>
                            <th>PRODUCT</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img style="width: 120px;" src="./assets/images/pizza.png" alt=""></td>
                            <td>Ham & Cheese</td>
                            <td>P199</td>
                            <td>5</td>
                            <td>P995</td>
                        </tr>
                        <tr>
                            <td><img style="width: 120px;" src="./assets/images/pizza.png" alt=""></td>
                            <td>Beef & Mushroom Overload</td>
                            <td>P249</td>
                            <td>3</td>
                            <td>P747</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="checkout">
            <div class="container">
                <h3>Cart Total</h3>
                <div class="flex subtotal">
                    <h4>Sub Total</h4>
                    <h4>P1,742.00</h4>
                </div>
                <div class="flex shipping">
                    <h4>Shipping</h4>
                    <h4>P150.00</h4>
                </div>
                <hr>
                <div class="flex total">
                    <h4>Total</h4>
                    <h4>P1,892.00</h4>
                </div>
            </div>
        </div>
    </section>

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