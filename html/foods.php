<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/restaurantbs5/css/style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-fixed">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/restaurantbs5/img/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active nav-link-fixed" aria-current="page" href="/restaurantbs5/html/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-fixed" aria-current="page" href="/restaurantbs5/html/categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-fixed" aria-current="page" href="/restaurantbs5/html/foods.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-fixed" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End nav -->

    <section style="margin-top: 80px">
        <div class="container-section" style="position: relative">
            <img src="/restaurantbs5/img/bg.jpg" class="img-fluid" alt="Responsive image"
                style="height: 250px; width: 100%; object-fit: cover" />
            <form action="" class="form-search" style="
            width: 100%;
            position: absolute;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
          ">
                <input type="text" placeholder="Search for Food" style="width: 35%" />
                <input type="button" value="Search" />
            </form>
        </div>
    </section>

    <section>
        <div class="slider__foodmenu">
            <div class="slider__foodmenu-bcl" style="padding-bottom: 50px;">
                <h3 class="slider__heading">Food Menu</h3>
                <div class="container">
                    <div class="row">
                        <!-- row1 -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3 ">
                                    <div class="menu_img">
                                        <img src="/restaurantbs5/img/menu-pizza.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Food Title</h4>
                                        <span class="slider__foodmenu-price">$2.3</span>
                                        <p class="slider__foodmenu-text">Made with Italian Sauce, Chicken, and organice
                                            vegetables.
                                        </p>
                                        <a href="order_pizza.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row1 -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3  ">
                                    <div class="menu_img">
                                        <img src="/restaurantbs5/img/menu-burger.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Food Title</h4>
                                        <span class="slider__foodmenu-price">$2.3</span>
                                        <p class="slider__foodmenu-text">Made with Italian Sauce, Chicken, and organice
                                            vegetables.
                                        </p>
                                        <a href="order_burger.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row2 -->
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3 ">
                                    <div class="menu_img">
                                        <img src="/restaurantbs5/img/menu-burger.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Food Title</h4>
                                        <span class="slider__foodmenu-price">$2.3</span>
                                        <p class="slider__foodmenu-text">Made with Italian Sauce, Chicken, and organice
                                            vegetables.
                                        </p>
                                        <a href="order_burger.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3 ">
                                    <div class="menu_img">
                                        <img src="/restaurantbs5/img/menu-pizza.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Food Title</h4>
                                        <span class="slider__foodmenu-price">$2.3</span>
                                        <p class="slider__foodmenu-text">Made with Italian Sauce, Chicken, and organice
                                            vegetables.
                                        </p>
                                        <a href="order_pizza.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row3 -->
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3 ">
                                    <div class="menu_img">
                                        <img src="/restaurantbs5/img/menu-pizza.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Food Title</h4>
                                        <span class="slider__foodmenu-price">$2.3</span>
                                        <p class="slider__foodmenu-text">Made with Italian Sauce, Chicken, and organice
                                            vegetables.
                                        </p>
                                        <a href="order_pizza.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3  ">
                                    <div class="menu_img">
                                        <img src="/restaurantbs5/img/menu-momo.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9 ">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Food Title</h4>
                                        <span class="slider__foodmenu-price">$2.3</span>
                                        <p class="slider__foodmenu-text">Made with Italian Sauce, Chicken, and organice
                                            vegetables.
                                        </p>
                                        <a href="order_momo.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="footer__item">
                <a href="https://vi-vn.facebook.com/">
                    <i class="footer__item-icon fab fa-facebook"></i>
                </a>
                <a href="">
                    <i class="footer__item-icon2 fab fa-instagram"></i>
                </a>
                <a href="">
                    <i class="footer__item-icon fab fa-twitter"></i>
                </a>
            </div>
            <div class="footer__text">
                <span>
                    All rights reserved. Designed By&nbsp
                </span>
                <span class="footer__name-dev"><a href="" style="text-decoration: none;">Nguyen Ngoc Giang</a></span>
            </div>
        </div>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>
    
</body>

</html>