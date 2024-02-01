<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bakery Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css" type="text/css">
</head>
<body>
    <section class="a1" style="opacity: 0.88;">
        <div class="row a1">
            <div class="container c1">
                <div class="row">
                    <div class="col-lg-6 p-5" style="color: white;">
                        <div class="image">
                            <img src="./image/bakery-logo.avif" alt="" id="logo">
                        </div>
                        <center>ONLINE BAKERY SHOP</center>
                        <h2 class="p-3">"Life is uncertain. Eat dessert first." </h2>
                        <p class="p-3">There's nothing quite like the smell of freshly baked bread. It's a smell that evokes feelings of comfort, nostalgia, and happiness. At our bakery, we bake our bread fresh every day using traditional methods. Our breads are made with simple ingredients like flour, water, yeast, and salt, but the flavor is anything but simple. Come and taste the difference that fresh, homemade bread makes.</p>
                    </div>
                    <div class="col-lg-6 p-4" style="opacity: 0.9;">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-7">
                                <form action="index.php" method="post">
                                    <div class="form-floating m-3">
                                        <input type="email" name="email" class="form-control w-100" id="email" placeholder="name@example.com"><br>
                                        <span id="email" style="color: red;"></span>
                                        <label for="email"> <i class="fa fa-envelope" id="a2"></i> Email
                                            address</label>
                                    </div>
                                    <div class="form-floating m-3">
                                        <input type="password" name="password" class="form-control w-100" id="floatingPassword" placeholder="Password"><br>
                                        <span id="pass" style="color: red;"></span>
                                        <label for="floatingPassword"> <i class="fa fa-lock-open"></i>
                                            Password</label>
                                    </div>

                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col-lg-12 mb-2 w-50">
                                             <a href="./home.php" name="login-customer" class="btn btn-primary d-block">Login <i class="fa fa-sign-in-alt"> </i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-12 mb-3 text-center p-3 w-50">
                                <a href="#" name="forgot_password" style="color: white;">Forgot the password? Click here</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-12 mb-2 w-25">
                                <a href="./signup.php" name="signup" class="btn btn-success d-block">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>