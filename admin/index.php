<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Admin</title>
    <style>
        body {
            background: url(../assets/images/background.png) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="logo-details">
            <img src="../assets/images/official_logo_crop.png" alt="logo">
            <h1>Amarah's Corner</h1>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="link-name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class="fa-solid fa-file-pen"></i>
                        <span class="link-name">Updates</span>
                    </a>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Updates</a></li>
                    <li><a href="#">Insert Updates</a></li>
                    <li><a href="#">View Updates</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class="fa-solid fa-arrows-up-down"></i>
                        <span class="link-name">Category</span>
                    </a>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Category</a></li>
                    <li><a href="#">Insert Category</a></li>
                    <li><a href="#">View Category</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class="fa-solid fa-arrows-left-right-to-line"></i>
                        <span class="link-name">Sub Category</span>
                    </a>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Sub Category</a></li>
                    <li><a href="#">Insert Sub Category</a></li>
                    <li><a href="#">View Sub Category</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class="fa-solid fa-gears"></i>
                        <span class="link-name">Product Attributes</span>
                    </a>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Product Attributes</a></li>
                    <li><a href="#">Insert Product Attributes</a></li>
                    <li><a href="#">View Product Attributes</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class="fa-solid fa-box"></i>
                        <span class="link-name">Products</span>
                    </a>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Products</a></li>
                    <li><a href="#">Insert Products</a></li>
                    <li><a href="#">View Products</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                    <span class="link-name">Orders</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Orders</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class="fa-solid fa-box"></i>
                        <span class="link-name">Users</span>
                    </a>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Users</a></li>
                    <li><a href="#">Insert Users</a></li>
                    <li><a href="#">View Users</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-highlighter"></i>
                    <span class="link-name">Appearance</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Appearance</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span class="link-name">Settings</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Settings</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="../assets/images/Eramie.jpg" alt="profile">
                    </div>

                    <div class="name-job">
                        <div class="profile-name">
                            Eramie Metre
                        </div>
                        <div class="job">
                            Staff
                        </div>
                    </div>
                    <i class="fa-solid fa-right-from-bracket logout"></i>
                </div>
            </li>
        </ul>
    </div>
    <div class="home-section">
        <div class="home-content">
            <i class="fa-solid fa-bars"></i>
            <span class="text">Dashboard</span>
        </div>
    </div>

    <script>
        let arrow = document.querySelectorAll(".arrow");

        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                console.log(arrowParent);
                arrowParent.classList.toggle("showMenu")
            });
        }

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".fa-bars");

        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        $(window).resize(function () {
            $screenWidthCheck = window.innerWidth || document.documentElement.clientWidth || document.body
                .clientWidth;
            console.log($screenWidthCheck);
            if ($screenWidthCheck < 1025) {
                $("#sidebar").addClass('close');
            } else {
                $("#sidebar").removeClass('close');
            }
        });
    </script>
</body>

</html>