<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bakery Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./categories.css" type="text/css">
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
                                <a class="nav-link" aria-current="page" href="./home.php"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#categories"><i class="fa-solid fa-arrow-up"></i> Categories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <section class="bg-light" id="categories">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 35vh;">
                <div class="col-lg-12 ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 my-1" data-aos="fade-up" data-aos-delay="800">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="text-center">Categories</h3>
                                    <div class="row">
                                        <div class="col-lg-12 mb-4">
                                            <center style="font-size: 20px;">
                                                <button><a href="#cakes">Cakes</a></button>
                                                <button><a href="#pastries">Pastries</a></button>
                                                <button><a href="#cookies">Cookies</a></button>
                                                <button><a href="#bread">Breads and Muffins</a></button>
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

    <section id="cakes">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 230vh;">
                <div class="col-lg-12 ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 my-1" data-aos="fade-up" data-aos-delay="800">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <center style="font-size: 40px;">Cakes<hr></center>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/chocolate birthday party cake.jpg" class="card-img-top" alt="..."  style="height: 250px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">chocolate birthday party cake</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">2500</i></p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/Marble crunch cake.webp" class="card-img-top" alt="..."  style="height: 250px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">Marble crunch cake</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">3000</i></p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/pink-butterfly-cake.webp" class="card-img-top" alt="..."  style="height: 250px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">pink-butterfly-cake</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">2000</i></p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/rainbow cake.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">rainbow cake</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">2400</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/classic-belgian-chocolate-cake.jpg" class="card-img-top" alt="..." style="height: 220px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">classic-belgian-chocolate-cake</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">2200</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/black-forest-cake-half-kg_1.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">black-forest-cake-half-kg_1</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">1800</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/Teddybearbirthdaycakewithlollipop_800x.webp" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Teddy bear birthday cake with lollipop</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">3500</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
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
            </div>
        </div> <hr>
    </section>

    <section id="pastries">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 240vh;">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 my-1" data-aos="fade-up" data-aos-delay="800">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <center style="font-size: 40px;">Pastries<hr></center>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/red velvet pastry.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">red velvet pastry</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">500</i></p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/pineapple pastry.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">pineapple pastry</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">400</i></p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/sq-blueberry-cheese-pastry-past1723blue-A_0.webp" class="card-img-top" alt="..." style="height: 250px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">blueberry-cheese-pastry</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">500</i></p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/death by chocolate pastry.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">death by chocolate pastry</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">600</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/triple chocolate pastry.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">chocolate birthday party cake</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">600</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/tasty-chocolate-truffle-past0162choc-CC.webp" class="card-img-top" alt="..." style="height: 225px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">tasty-chocolate-truffle-pastry</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">300</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/strawberry pastry.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">strawberry pastry</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">550</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/valentines-day-puff-pastry-hearts-image.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">valentines-day-puff-pastry</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">850</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/puff_pastry_fruit_tarts_ricotta_cream_filling13.-500x500.jpg" class="card-img-top" alt="..." style="height: 230px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">puff_pastry_fruit_tarts_ricotta_cream_filling</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">450</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
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
            </div>
        </div> <hr>
    </section>

    <section id="cookies">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 174vh;">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 my-1" data-aos="fade-up" data-aos-delay="800">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <center style="font-size: 40px;">Cookies<hr></center>
                                            
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/chocolate cookies.webp" class="card-img-top" alt="..." height="250px">
                                                <div class="card-body">
                                                    <h5 class="card-title">chocolate cookies</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">20</i>/piece</p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/cookie monster cookie.jpg" class="card-img-top" alt="..." height="250px">
                                                <div class="card-body">
                                                    <h5 class="card-title">cookie monster cookie</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">30</i>/piece</p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/Chocolate-Chip-Cookies1.jpg" class="card-img-top" alt="..." height="250px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Chocolate-Chip-Cookies</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">25</i>/piece</p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/peanut butter chocolate swiri cookies.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">peanut butter chocolate swiri cookies</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">20</i>/piece</p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/Single-Serve-Chocolate-Chip-Cookie-5-735x1103.webp" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Single-Serve-Chocolate-Chip-Cookie</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">15</i>/piece</p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/fudgy chocolate cookies(with cocoa powder).jpg" class="card-img-top" alt="..." style="height: 270px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">fudgy chocolate cookies</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">25</i>/piece</p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
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
            </div>
        </div> <hr>
    </section>

    <section id="bread">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 235vh;">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 my-1" data-aos="fade-up" data-aos-delay="800">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <center style="font-size: 40px;">Breads and Muffins<hr></center>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/breads/Banana bread muffins.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">red velvet pastry</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">500</i></p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/breads/english muffin bread.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">pineapple pastry</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">400</i></p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card my-4" style="width: 18rem;">
                                                <img src="./image/breads/Blueberry muffins-Britney breaks bread.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">blueberry-cheese-pastry</h5>
                                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">500</i></p>
                                                    <a href="#" class="btn btn-danger">Add to carts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/breads/Caramel monkey bread muffin with icing.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">death by chocolate pastry</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">600</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/breads/English-muffin-bread-Tastes-just-like-homemade-English-muffins-but-is-so-easy-to-make.-No-kneading-required.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">chocolate birthday party cake</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">600</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/breads/French-Bread-1.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">tasty-chocolate-truffle-pastry</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">300</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/breads/Irish soda bread muffin.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">strawberry pastry</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">550</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/breads/monkey bread muffin.jpg" class="card-img-top" alt="..." style="height: 250px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">valentines-day-puff-pastry</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">850</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card my-4" style="width: 18rem;">
                                                    <img src="./image/breads/VeganBananaBread-TheSpruce-953821a6bcf9454f9618332e9a52b6cb.jpg" class="card-img-top" alt="..." style="height: 225px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">puff_pastry_fruit_tarts_ricotta_cream_filling</h5>
                                                        <p class="card-text"><i class="fa-solid fa-indian-rupee-sign">450</i></p>
                                                        <a href="#" class="btn btn-danger">Add to carts</a>
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
            </div>
        </div> <hr>
    </section>
</body>
</html>