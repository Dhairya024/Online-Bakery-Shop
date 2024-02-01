<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bakery Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./homeStyle.css" type="text/css">
</head>

<body>
    <header id="home">
        <div class="container-fluid">
            <nav class="navbar fixed-top shadow-lg navbar-expand-md navbar-dark bg-danger">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./image/bakery-logo.avif" style="border-radius: 100%;" alt="" width="30" height="24">
                        ONLINE BAKERY SHOP
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#home"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us"><i class="fa fa-info-circle"></i> About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#connect-us"><i class="fa fa-mobile"></i> Connect US</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Categories
                                </a>
                                <ul class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item text-white hh" href="#">Cakes</a></li>
                                    <li><a class="dropdown-item text-white hh" href="#">Pastries</a></li>
                                    <li><a class="dropdown-item text-white hh" href="#">Cookies</a></li>
                                    <li><a class="dropdown-item text-white hh" href="#">Breads</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#our-team"><i class="fa fa-users"></i> Our Team</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./image/wallpaperflare.com_wallpaper.jpg" class="d-block" style="width: 100%; height: 80vh" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome</h3>
                        <h5>to our shop</h5>
                        <p>"Happiness is homemade, and it starts in the bakery."</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./image/bgcake.jpg" class="d-block" style="width: 100%; height: 80vh" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome</h3>
                        <h5>to our shop</h5>
                        <p>"Cakes are meant to be shared with friends and family."</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./image/bg1.jpg" class="d-block" style="width: 100%; height: 80vh" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome</h3>
                        <h5>to our shop</h5>
                        <p>"Baking is about transformation. Turning flour into cakes, eggs into custard, and ideas into something real." </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <section style="height: 40vh; color:wheat">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center bb" style="height: 100%;">
                <div class="col-lg-8 p-3">
                    <div class="row">
                        <div class="col-lg-4 p-5 ps-1">
                            <h1>Online<br>Bakery<br>Shop</h1>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 p-5">
                                    <p>We provide you a trustworthy and convenient platform to choose best gift for your family, friends etc. for every occasion like birthdays, anniversaries, marriage, love, farewell and many more.
                                        We offer wide range of products in various categories like cakes, egg-less cakes, drawing cakes, 3D cakes, photo cakes, chocolates, etc.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="about-us"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="col-lg-12 mb-4">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h1 class="text-center my-font-style" data-aos="fade-up">Welcome to our bakery shop</h1>
                            <p class="text-center" data-aos="fade-up" data-aos-delay="500">Welcome to our Online Bakery Shop, your one-stop shop for delicious and freshly baked goods! We offer a wide variety of cakes, cookies, pastries, and other treats, all made with the finest ingredients and a whole lot of love.
                                Whether you're looking for a special occasion cake or just a sweet treat to satisfy your cravings, we have something for everyone. Our bakers are experts in their craft, and they take pride in creating baked goods that are both delicious and beautiful.
                            </p>
                        </div>
                        <div class="col-lg-12 my-5" data-aos="fade-up" data-aos-delay="800">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="text-center">Categories</h3>
                                    <div class="row">
                                        <div class="col-lg-12 mb-4">
                                            <center style="font-size: 20px;">
                                                <button><a href="./categories.php">Cakes</a></button>
                                                <button><a href="./categories.php">Pastries</a></button>
                                                <button><a href="./categories.php">Cookies</a></button>
                                                <button><a href="./categories.php">Breads</a></button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-two-bg" id="connect-us">
        <div class="section-cover">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
                    <div class="col-lg-12 p-2">
                        <div class="row">
                            <div class="col-lg-6 text-white" data-aos="fade-right">
                                <div class="row">
                                    <div class="col-lg-12 p-3">
                                        <h3>Q. What are some popular baked goods that I can order?</h3>
                                        <p>Ans. Some popular baked goods that you can order include: Cakes, Cupcakes, Cookies, Pies, Brownies, Muffins, Pastries, Bread, Bread rolls, Croissants, Donuts, etc.</p>
                                    </div>
                                    <div class="col-lg-12 p-3">

                                        <h3>Q. Can I order custom baked goods from an online bakery shop?</h3>
                                        <p>Ans. Yes, many online bakeries allow you to order custom baked goods. This means that you can choose the size, flavor, fillings, and design of your cake, cupcakes, or other baked goods.</p>
                                    </div>
                                    <div class="col-lg-12 p-3">

                                        <h3>Q. What if I'm not happy with my order from an online bakery shop?</h3>
                                        <p>Ans. If you're not happy with your order from an online bakery shop, be sure to contact the bakery as soon as possible. Most online bakeries have a customer satisfaction policy and will work with you to resolve the issue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row d-flex justify-content-center align-items-center" style="height: 100%;">
                                    <div class="col-lg-9" data-aos="fade-left">
                                        <div class="row">
                                            <div class="col-lg-12 mb-4">
                                                <h3 class="display-6 text-white" style="font-size: 1.8em;">Submit
                                                    Details to
                                                    Contact us</h3>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control form-control-sm" id="email" placeholder="name@example.com">
                                                    <label for="email">Email address</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control form-control-sm" id="phone" placeholder="name@example.com">
                                                    <label for="phone">Contact</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <input type="button" class="btn btn-danger btn-md" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-team" class="our-team">
        <div class="container">
            <div class="row d-flex align-items-center" style="height: 100vh;">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="display-6" data-aos="zoom-out-left">Who We Are.</h2>
                            <hr class="w-25 text-info" style="height: 5px;" data-aos="fade-right">
                        </div>
                        <div class="col-lg-12">
                            <p data-aos="fade-up" data-aos-delay="300">We are an online bakery shop passionate about bringing you fresh, delicious baked goods made with the highest quality ingredients. From cakes and cupcakes to cookies and pies, we have something for everyone to enjoy.</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 text-center">
                            <figure data-aos="zoom-in" data-aos-delay="800">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaH95MYy4lQdqXKOR2FCcv2KIHRhz7rCj4N8VKm4zbQmfaOU7lU_m_ykDR6sWGMMEKof8&usqp=CAU" style="border-radius: 100%;" alt="">
                                <figcaption class="text-center text-danger" style="font-size: 1.5em;">Anna Ruggirello
                                    LPC</figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-3 text-center">
                            <figure data-aos="zoom-in" data-aos-delay="800">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxtDZAvImObxjDKS11-n0-BwpvuEEZbiIYC3qbUAorUHLBf7yz8THOXt5v67PNtv6anpE&usqp=CAU" style="border-radius: 100%;" alt="">
                                <figcaption class="text-center text-danger" style="font-size: 1.5em;">Anna Ruggirello
                                    LPC</figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-3 text-center">
                            <figure data-aos="zoom-in" data-aos-delay="800">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA6zq21NVsOxQs4PL4rJU30aiCXEkVrwB-Y19RYowqhUGklgM3SNfj6e-L1UU3mfuyByM&usqp=CAU" style="border-radius: 100%; height: 225px; width: 225px;" alt="">
                                <figcaption class="text-center text-danger" style="font-size: 1.5em;">Anna Ruggirello
                                    LPC</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="height: 50vh;">
        <div class="container-fluid">
            <div class="row map" style="height: 100%;">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109066.39845038766!2d75.57341924999999!3d31.32239775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a5747a9eb91%3A0xc74b34c05aa5b4b8!2sJalandhar%2C%20Punjab!5e0!3m2!1sen!2sin!4v1697043937050!5m2!1sen!2sin" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center" style="height: 50%;">
                <div class="col-lg-12 bg-light">
                    <div class="row p-3">
                        <div class="col-lg-12 text-center" display-5 data-aos="fade-up"> Join Us </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="500">Join our team of passionate bakers and taste the flavor of the best baked goods in town.</div>
                    </div>
                    <div class="row" style="height: 20%;">
                        <div class="col-lg-12">
                            <div class="row p-4">
                                <div class="col-lg-8 border border-5 p-2 border-end-0 border-start-0">
                                    <div class="input-group flex-nowrap" data-aos="fade-right">
                                        <input type="email" placeholder="Enter your e-mail address" class="form-control py-3" style="width: 100%;">
                                    </div>
                                </div>
                                <div class="col-lg-4 border border-5 p-2  border-end-0">
                                    <button type="button" class="btn btn-danger btn-sm h-100 w-75 ms-3" data-aos="fade-left" style="font-size: 20px;">Allow and Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" style="height: 35%;">
                <div class="col-lg-12 bb">
                    <div class="row d-flex justify-content-center align-items-center m-3" data-aos="fade-up">
                        <div class="col-lg-12 p-3">
                            <img src="./image/f.jpg" class="size me-3" style="border-radius: 100%;" alt="">
                            <img src="./image/google.jpg" class="size me-3" style="border-radius: 100%;" alt="">
                            <img src="./image/Twitter-OAuth.png" class="size me-3" style="border-radius: 100%;" alt="">
                            <img src="./image/linkedin-icon-zls.png" class="size me-3" style="border-radius: 100%;" alt="">
                        </div>
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="container-fluid">
                                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                        <div class="navbar-nav aa">
                                            <a class="nav-link active  text-white" aria-current="page" href="#">Home</a>
                                            <a class="nav-link active text-white" href="#">Menu</a>
                                            <a class="nav-link active text-white" href="#">Story</a>
                                            <a class="nav-link active text-white" href="#">Detox</a>
                                            <a class="nav-link active text-white">Location</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="container-fluid">
                                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                        <div class="navbar-nav a">
                                            <a class="nav-link active text-white border border-0" aria-current="page" href="#">Home</a>
                                            <a class="nav-link active  text-white border border-3 border-top-0 border-bottom-0" href="#">Menu</a>
                                            <a class="nav-link active  text-white border border-0" href="#">story</a>
                                            <a class="nav-link active  text-white border border-3 border-top-0 border-bottom-0">Detox</a>
                                            <a class="nav-link active text-white border border-0">Location</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-12">
                            <footer class=" text-white me-5 ">Project of Online Bakery Shop made by Dhairya</footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>