<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Order Pizza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/restaurantbs5/css/style.css" />
</head>

<body>
    <!-- header -->
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
    <!-- End header -->
    <!-- slider -->
    <div class="slider__order">
        <h3 class="slider__order-heading">
            Fill this from to confirm your order.
        </h3>
        <div class="container order">
            <div class="slider__order-selected">
                <h5 class="selected-heading" style="background-color: #47b4d1; display: inline-block">
                    Selected Food
                </h5>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3">
                        <div class="selected__left">
                            <img src="/restaurantbs5/img/menu-pizza.jpg" alt="" class="selected-img" />
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-9">
                        <div class="selected__right">
                            <h4 class="selected__right-title">Food Title</h4>
                            <span class="selected__right-price">$2.3</span>
                            <span class="selected__right-quantity">Quantity</span>
                            <input type="number" name="" required id="" placeholder="1" class="quantity-input" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__order-delivery">
                <h5 class="delivery-heading">Delivery Details</h5>
                <form action class="deliverydetails">
                    <span class="delivery__title">Full Name</span>
                    <input type="text" name="" required id="" placeholder="E.g. Nguyen Ngoc Giang"
                        class="delivery-input" />
                    <span class="delivery__title">Phone Number</span>
                    <input type="number" name="" required id="" placeholder="E.g. 0934xxxxx" class="delivery-input" />
                    <span class="delivery__title">Email</span>
                    <input type="email" name="" required id="" placeholder="E.g. Example@gmail.com"
                        class="delivery-input" />
                    <span class="delivery__title">Address</span>
                    <textarea name="" id="" cols="30" rows="10" name="" required id=""
                        placeholder="E.g. Street, City, Country" class="delivery-input" style="resize: none"></textarea>
                    <div>
                        <input type="submit" value="Confirm Order" class="confirm-btn" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end-slider -->
    <!-- footer -->
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
            <span> All rights reserved. Designed By&nbsp </span>

            <span class="footer__name-dev"><a href="" style="text-decoration: none">Nguyen Ngoc Giang</a></span>
        </div>
    </div>
    <!-- --end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>