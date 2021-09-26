<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Categories</title>
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
                        <a class="nav-link active nav-link-fixed" aria-current="page" href="/html/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-fixed" aria-current="page" href="/html/categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-fixed" aria-current="page" href="/html/foods.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-fixed" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="slider" style="position: relative; top: 80px">
        <!-- CATEGORIES -->
        <div class="slider__explorefoods">
            <h3 class="slider__heading">Explore Foods</h3>
            <div class="container">
                <div class="row hover-blur" style="row-gap: 20px;">
                    <!-- row1 -->
                    <div class=" col-lg-4 col-md-6 col-6 hover-blur-item col-collection">
                        <div class="slider__images-title">
                            <img src="/restaurantbs5/img/pizza.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Pizza</h4>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-6 hover-blur-item col-collection">
                        <div class="slider__images-title">
                            <img src="/restaurantbs5/img/burger.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Burder</h4>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-6 hover-blur-item col-collection">
                        <div class="slider__images-title">
                            <img src="/restaurantbs5/img/momo.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">MoMo</h4>
                        </div>
                    </div>

                    <!-- row2 -->
                    <div class=" col-lg-4 col-md-6 col-6 hover-blur-item col-collection">
                        <div class="slider__images-title">
                            <img src="/restaurantbs5/img/burger.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Burder</h4>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-6 hover-blur-item">
                        <div class="slider__images-title">
                            <img src="/restaurantbs5/img/momo.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">MoMo</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 hover-blur-item">
                        <div class="slider__images-title">
                            <img src="/restaurantbs5/img/pizza.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Pizza</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------------------------------- -->

    </div>
    <!-- FOOTER -->
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

            <span class="footer__name-dev"> Do Tien Anh</span>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>