<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="style_admin.css">
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="header_container">
                <div class="navbar__logo">
                    <a href="">
                        <img src="/restaurantbs5/img/logo.png" alt="" class="navbar__img">
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
                    <a href="categories-admin.php" class="list__item">
                        Categories
                    </a>

                    <a href="food-admin.php" class="list__item">
                        Food
                    </a>

                    <a href="order-admin.php" class="list__item">
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
            <h4 class="main__title">Manage Users</h4>
            <button class="btn">Add New User</button>
            <div class="main__list">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class=" border_right">S.N</th>
                            <th scope="col" class=" border_right">Full Name</th>
                            <th scope="col" class=" border_right">Usernamet</th>
                            <th scope="col" class=" border_right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-0">
                            <th scope="row" class="border-0">1</th>
                            <td class="border-0">dongphuongbatbai</td>
                            <td class="border-0">squidgame</td>
                            <td class="border-0">
                                <button class="btn color_change">Change Pasword</button>
                                <button class="btn color_update">Update Admin</button>
                                <button class="btn color_delete">Delete Admin</button>
                            </td>
                        </tr>
                        <tr class="border-0">
                            <th scope="row" class="border-0">2</th>
                            <td class="border-0">NguyenNgocGiang</td>
                            <td class="border-0">WhoAmI</td>
                            <td class="border-0">
                                <button class="btn color_change">Change Pasword</button>
                                <button class="btn color_update">Update Admin</button>
                                <button class="btn color_delete">Delete Admin</button>
                            </td>
                        </tr>
                        <tr class="border-0">
                            <th scope="row" class="border-0">3</th>
                            <td class="border-0">NguyenNgocAnh</td>
                            <td class="border-0">mrRX</td>
                            <td class="border-0">
                                <button class="btn color_change">Change Pasword</button>
                                <button class="btn color_update">Update Admin</button>
                                <button class="btn color_delete">Delete Admin</button>
                            </td>
                        </tr>
                        <tr class="border-0">
                            <th scope="row" class="border-0">4</th>
                            <td class="border-0">NguyenHaiMy</td>
                            <td class="border-0">mh370</td>
                            <td class="border-0">
                                <button class="btn color_change">Change Pasword</button>
                                <button class="btn color_update">Update Admin</button>
                                <button class="btn color_delete">Delete Admin</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <!-- End Slider -->
    <!-- FOOTER -->
    <div class="footer">
        <div class="footer__text">
            <span>
                2021 All rights reserved. Food House. Designed By&nbsp
            </span>

            <span class="footer__name-dev"> Nguyen Ngoc Giang</span>

        </div>
    </div>
    <!-- End footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>