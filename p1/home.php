<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="flex-container">
        <div class="img-header">
            <img src="logo/logo.png" alt="">
        </div>
        <div class="information">
            <a href="http://localhost/p1/home.php" style="color: red; margin: 0px 20px; font-size: 25px; text-decoration: none;">Home</a>
            <a href="http://localhost/p1/categories.php" style="color: red; margin: 0px 20px; font-size: 25px; text-decoration: none;">Categories</a>
            <a href="http://localhost/p1/food.php" style="color: red; margin: 0px 20px; font-size: 25px; text-decoration: none;">Foods</a>
            <a href="#" style="color: red; margin: 0px 20px; font-size: 25px; text-decoration: none;">Contact</a>
        </div>
    </div>
    <div style="background-image: url(logo/bg.jpg); background-size: 100% 100%; width: 100%; height: 400px;">
        <div>
            <input type="text" style="width: 30%; height: 10%;border-radius: 12px; border: solid white; margin-top: 8%; margin-left: 30%;" placeholder="Search for Food">
            <input type="submit" value="Search" style="height: 13%; background-color: rgb(255 106 106); color: white;">
        </div>
    </div>
    </div>
    <h1 style="text-align: center; margin: 30px; height: 50px;">Explore Foods</h1>
    <div class="flex-image">
        <img src="image/pizza.jpg" style="margin: 0px 20px 20px 29%; border-radius: 12px; border: solid unset; width: 330px; height: 450px;" alt="">
        <img src="image/burger.jpg" style="margin: 0px 20px 20px 20px; border-radius: 12px; border: solid unset; width: 330px; height: 450px;" alt="">
        <img src="image/momo.jpg" style="margin: 0px 20px 20px 20px; border-radius: 12px; border: solid unset; width: 330px; height: 450px;" alt="">
    </div>
    <div style="background-color: rgb(238 238 209); background-size: 100% 100%; width: 100%; height: 100%; text-align: center;">
        <h1 class="heading1">Food Menu</h1>
        <div class="flex-container">
            <div style="background-color: white; background-size: 50% 100%;width: 30%; height: 250px; margin-left: 15%; margin-top: 100px; border-radius: 12px;">
                <div>
                    <div style="float: left; width: 20%; height: 60%;">
                        <img src="image/menu-pizza.jpg" alt="" style="height: 130px; width: 130px; margin-left: 30%;;margin-right: 30%; margin-top: 25%; border-radius: 12px;">
                    </div>
                    <div style="float: right; width: 80%; margin-top: 3%;">
                        <h2 style="float: right; width: 75%; margin-bottom: 1%; height: 20%; margin-right: 40%;">Pizza</h2>
                        <h3 style="float: right; width: 50%; margin-top: 1%; margin-bottom: 1%; margin-right: 54%; height: 20%;"> $2.3</h3>
                        <p style="float: right; width: 50%; height: 20%; margin-right: 32%; text-align: justify;; font-size: 15px; opacity: 0.7;">Made with Italian Sauce, Chichken, and organice vegetables.</p>
                        <form action="http://localhost/p1/order.php" style="margin-top: 25%; margin-right: 50%;">
                            <button type="submit" style="color: white; width: 100px; height: 30px; background-color: rgb(255 106 106); border-radius: 12px; border: none;">Order</button>
                        </form>
                    </div>
                </div>
            </div>
            <div style="background-color: white; background-size: 50% 50%;width: 30%; height: 250px; margin-left: 10%; margin-top: 100px; border-radius: 12px;">
                <div>
                    <div style="float: left; width: 20%; height: 60%;">
                        <img src="image/menu-pizza.jpg" alt="" style="height: 130px; width: 130px; margin-left: 30%;;margin-right: 30%; margin-top: 25%; border-radius: 12px;">
                    </div>
                    <div style="float: right; width: 80%; margin-top: 3%;">
                        <h2 style="float: right; width: 75%; margin-bottom: 1%; height: 20%; margin-right: 29%;">Smoky Burger</h2>
                        <h3 style="float: right; width: 50%; margin-top: 1%; margin-bottom: 1%; margin-right: 54%; height: 20%;"> $2.3</h3>
                        <p style="float: right; width: 50%; height: 20%; margin-right: 32%; text-align: justify;; font-size: 15px; opacity: 0.7;">Made with Italian Sauce, Chichken, and organice vegetables.</p>
                        <form action="http://localhost/p1/order.php" style="margin-top: 25%; margin-right: 50%;">
                            <button type="submit" style="color: white; width: 100px; height: 30px; background-color: rgb(255 106 106); border-radius: 12px; border: none;">Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div style="background-color: white; background-size: 50% 50%;width: 30%; height: 250px; margin-left: 15%; margin-top: 100px; border-radius: 12px;">
                <div>
                    <div style="float: left; width: 20%; height: 60%;">
                        <img src="image/menu-burger.jpg" alt="" style="height: 130px; width: 130px; margin-left: 30%;;margin-right: 30%; margin-top: 25%; border-radius: 12px;">
                    </div>
                    <div style="float: right; width: 80%; margin-top: 3%;">
                        <h2 style="float: right; width: 75%; margin-bottom: 1%; height: 20%; margin-right: 32%;">Nice Burger</h2>
                        <h3 style="float: right; width: 50%; margin-top: 1%; margin-bottom: 1%; margin-right: 54%; height: 20%;"> $2.3</h3>
                        <p style="float: right; width: 50%; height: 20%; margin-right: 32%; text-align: justify;; font-size: 15px; opacity: 0.7;">Made with Italian Sauce, Chichken, and organice vegetables.</p>
                        <form action="http://localhost/p1/order.php" style="margin-top: 25%; margin-right: 50%;">
                            <button type="submit" style="color: white; width: 100px; height: 30px; background-color: rgb(255 106 106); border-radius: 12px; border: none;">Order</button>
                        </form>
                    </div>
                </div>
            </div>
            <div style="background-color: white; background-size: 50% 50%;width: 30%; height: 250px; margin-left: 10%; margin-top: 100px; border-radius: 12px;">
                <div>
                    <div style="float: left; width: 20%; height: 60%;">
                        <img src="image/menu-pizza.jpg" alt="" style="height: 130px; width: 130px; margin-left: 30%;;margin-right: 30%; margin-top: 25%; border-radius: 12px;">
                    </div>
                    <div style="float: right; width: 80%; margin-top: 3%;">
                        <h2 style="float: right; width: 75%; margin-bottom: 1%; height: 20%; margin-right: 34%;">Food Title</h2>
                        <h3 style="float: right; width: 50%; margin-top: 1%; margin-bottom: 1%; margin-right: 54%; height: 20%;"> $2.3</h3>
                        <p style="float: right; width: 50%; height: 20%; margin-right: 32%; text-align: justify;; font-size: 15px; opacity: 0.7;">Made with Italian Sauce, Chichken, and organice vegetables.</p>
                        <form action="http://localhost/p1/order.php" style="margin-top: 25%; margin-right: 50%;">
                            <button type="submit" style="color: white; width: 100px; height: 30px; background-color: rgb(255 106 106); border-radius: 12px; border: none;">Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div style="background-color: white; background-size: 50% 50%;width: 30%; height: 250px; margin-left: 15%; margin-top: 100px; margin-bottom: 100px;border-radius: 12px;">
                <div>
                    <div style="float: left; width: 20%; height: 60%;">
                        <img src="image/menu-pizza.jpg" alt="" style="height: 130px; width: 130px; margin-left: 30%;;margin-right: 30%; margin-top: 25%; border-radius: 12px;">
                    </div>
                    <div style="float: right; width: 80%; margin-top: 3%;">
                        <h2 style="float: right; width: 75%; margin-bottom: 1%; height: 20%; margin-right: 34%;">Food Title</h2>
                        <h3 style="float: right; width: 50%; margin-top: 1%; margin-bottom: 1%; margin-right: 54%; height: 20%;"> $2.3</h3>
                        <p style="float: right; width: 50%; height: 20%; margin-right: 32%; text-align: justify;; font-size: 15px; opacity: 0.7;">Made with Italian Sauce, Chichken, and organice vegetables.</p>
                        <form action="http://localhost/p1/order.php" style="margin-top: 25%; margin-right: 50%;">
                            <button type="submit" style="color: white; width: 100px; height: 30px; background-color: rgb(255 106 106); border-radius: 12px; border: none;">Order</button>
                        </form>
                    </div>
                </div>
            </div>
            <div style="background-color: white; background-size: 50% 50%;width: 30%; height: 250px; margin-left: 10%; margin-top: 100px; margin-bottom: 100px; border-radius: 12px;">
                <div>
                    <div style="float: left; width: 20%; height: 60%;">
                        <img src="image/menu-momo.jpg" alt="" style="height: 130px; width: 130px; margin-left: 30%;;margin-right: 30%; margin-top: 25%; ;border-radius: 12px;">
                    </div>
                    <div style="float: right; width: 80%; margin-top: 3%;">
                        <h2 style="float: right; width: 75%; margin-bottom: 1%; height: 20%; margin-right: 20%;">Chicken Steam Momo</h2>
                        <h3 style="float: right; width: 50%; margin-top: 1%; margin-bottom: 1%; margin-right: 54%; height: 20%;"> $2.3</h3>
                        <p style="float: right; width: 50%; height: 20%; margin-right: 32%; text-align: justify;; font-size: 15px; opacity: 0.7;">Made with Italian Sauce, Chichken, and organice vegetables.</p>
                        <form action="http://localhost/p1/order.php" style="margin-top: 25%; margin-right: 50%;">
                            <button type="submit" style="color: white; width: 100px; height: 30px; background-color: rgb(255 106 106); border-radius: 12px; border: none;">Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-icon">
        <img src="logo/241349495_849337829057683_2974941694366778451_n.jpg" style="margin-right: 30px; margin-left: 30px;" alt="">
        <img src="logo/241480874_1193542511151338_7986496005378251027_n.jpg" style="margin-right: 30px;" alt="">
        <img src="logo/241410108_4557576517668422_7471832700354727107_n.jpg" alt="">
    </div>
    <div style="float: left; width: 53%;">
        <p style="margin-left: 83%;">All right reserved. Designed By</p>
    </div>
    <div style="float: right; width: 47%;">
        <a style="color: red;">DucAnh</a>
    </div>
</body>

</html>