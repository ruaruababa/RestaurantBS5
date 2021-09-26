<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style_admin.css">
    <link rel="stylesheet" href="font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap">
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="header_container">
                <div class="navbar__logo">
                    <a href="">
                        <img src="img/logo.png" alt="" class="navbar__img">
                    </a>
                </div>
                <label for="nav_menu-bar" class="menu_bar-item">
                    <i class="menu_bar-icon fas fa-bars"></i>
                </label>
                <input type="checkbox" name="" hidden class="nav_show" id="nav_menu-bar">

                <div class="list">

                    <a href="index.php" class="list__item">
                        Home
                    </a>
                    <a href="admin.php" class="list__item">
                        Admin
                    </a>
                    <a href="category.php" class="list__item">
                        Categories
                    </a>

                    <a href="food.php" class="list__item">
                        Food
                    </a>

                    <a href="order.php" class="list__item">
                        Order
                    </a>
                    <a href="#" class="list__item">
                        Logout
                    </a>
                </div>


            </div>


        </div>
    </div>
    <!-- End header -->
    <!-- Slider -->
    <div class="main">
        <div class="container">
            <h4 class="main__title">Dashboard</h4>
            <div class="row">
                <div class="col-lg-3 ">
                    <div class="main__dashboard">
                        <h4 class="main__dashboard-number">4</h4>
                        <span class="main__dashboard-name">Categories</span>
                    </div>

                </div>
                <div class="col-lg-3 ">
                    <div class="main__dashboard">
                        <h4 class="main__dashboard-number">6</h4>
                        <span class="main__dashboard-name">Foods</span>
                    </div>

                </div>
                <div class="col-lg-3 ">
                    <div class="main__dashboard">
                        <h4 class="main__dashboard-number">3</h4>
                        <span class="main__dashboard-name">Total Order</span>
                    </div>

                </div>
                <div class="col-lg-3 ">
                    <div class="main__dashboard">
                        <h4 class="main__dashboard-number">$36.00</h4>
                        <span class="main__dashboard-name">Revenue Generated</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- End Slider -->
    <!-- FOOTER -->
    <div class="footer">
        <div class="footer__text">
            <span>
                2021 All rights reserved. Food House Designed By&nbsp
            </span>

            <span class="footer__name-dev"> Do Tien Anh</span>

        </div>
    </div>
    <!-- End footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>