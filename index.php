<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BartaBase - Declutter & Sell</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5e167c62db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/script.js"></script>
</head>
<body>

    <!--Header Start-->
    <?php
        include 'assets/includes/header.php';
    ?>
    <!--/Header-->


    <!-- Side Menu -->
     <?php
        include 'assets/includes/side-bar.php';
     ?>
    <!--/Sife Menu -->

    <!-- Hero Section with Parallax Background -->
    <div class="hero-section">
        <h1>Declutter & Earn</h1>
        <p>Sell, Donate, or Exchange Your Unused Items</p>
        <div class="search-container">
            <input type="text" class="form-control" placeholder="Search items...">
            <div class="search-buttons">
                <button class="btn btn-primary quick-search">Quick Search</button>
                <button class="btn btn-secondary advanced-search">Advanced Search</button>
            </div>
        </div>
    </div>

    <!-- Items Section -->
    <div class="container">
        <div class="categories">
            <div class="row mt-5">
                <div class="col-md-3 col-12">
                    <div class="category-box">
                        <div class="row g-2 g-md-2">
                            <h4>Fashion Deals</h4>
                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/male2.jpg" class="img-fluid">
                                    <p>Male</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/female1.jpg" class="img-fluid">
                                    <p>Female</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/children.jpg" class="img-fluid">
                                    <p>Children</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/under10k.jpg" class="img-fluid">
                                    <p>Under 10k</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-md-3 col-12">
                    <div class="category-box">
                        <div class="row g-2 g-md-2">
                            <h4>Computers</h4>
                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/laptop.jpg" class="img-fluid">
                                    <p>Laptops</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/desktops.jpg" class="img-fluid">
                                    <p>Desktops</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/games.jpg" class="img-fluid">
                                    <p>Game Consols</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/tablets.jpg" class="img-fluid">
                                    <p>Tablets</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-md-3 col-12">
                    <div class="category-box">
                        <div class="row g-2 g-md-2">
                            <h4>Phones</h4>
                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/samsung-phone.jpg" class="img-fluid">
                                    <p>Android</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/apple.jpg" class="img-fluid">
                                    <p>Apple IOS</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/headphone.jpg" class="img-fluid">
                                    <p>Headphones</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/chargers.jpg" class="img-fluid">
                                    <p>Accessories</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-md-3 col-12">
                    <div class="category-box">
                        <div class="row g-2 g-md-2">
                            <h4>Other Categories</h4>
                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/appliance.jpg" class="img-fluid">
                                    <p>Appliances</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/kitchen.jpg" class="img-fluid">
                                    <p>Kitchen</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/office.jpg" class="img-fluid">
                                    <p>Office</p>
                                </a>
                            </div>

                            <div class="col-md-6 col-6">
                                <a href="#">
                                    <img src="assets/images/uploads/exercise.jpg" class="img-fluid">
                                    <p>Health</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!--/col-->
            </div><!--/row-->
        </div><!--/categories-->

        <!-- Spotlight Deals Carousel -->
        <div class="spotlight-deal mt-3 mb-3 p-3">
            <h5>Spotlight Deal</h5>
            <hr>

            <div id="spotlightCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Carousel Item 1 -->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-5 col-12 spotlight-img" style="padding: 50px;">
                                    <a href="#">
                                        <img src="assets/images/uploads/1.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-7 col-12 d-flex flex-column justify-content-center">
                                    <h3 class="spotlight-item-title">
                                        <a href="#">Google Pixel 6 Pro 5G G8V0U Unlocked 128GB 256GB 512GB Very Good</a>
                                    </h3>
                                    <div class="price">
                                        <p class="price-tag mt-4">&#8358;196,500.00</p>
                                        <p class="market-price">Market Price: <b>&#8358;550,000.00</b> | <span>36% <i class="fa-solid fa-arrow-down"></i></span></p>
                                        <p style="font-size: 18px;">Status: <b>Used <i class="fa-regular fa-star"></i></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 2 -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-5 col-12 spotlight-img" style="padding: 50px;">
                                    <a href="#">
                                        <img src="assets/images/uploads/2.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-7 col-12 d-flex flex-column justify-content-center">
                                    <h3 class="spotlight-item-title">
                                        <a href="#">Samsung Galaxy S21 Ultra 256GB - Excellent Condition</a>
                                    </h3>
                                    <div class="price">
                                        <p class="price-tag mt-4">&#8358;280,000.00</p>
                                        <p class="market-price">Market Price: <b>&#8358;600,000.00</b> | <span>53% <i class="fa-solid fa-arrow-down"></i></span></p>
                                        <p style="font-size: 18px;">Status: <b>Used <i class="fa-regular fa-star"></i></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 3 -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-5 col-12 spotlight-img" style="padding: 50px;">
                                    <a href="#">
                                        <img src="assets/images/uploads/sofas.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-7 col-12 d-flex flex-column justify-content-center">
                                    <h3 class="spotlight-item-title">
                                        <a href="#">L-Shape sofas</a>
                                    </h3>
                                    <div class="price">
                                        <p class="price-tag mt-4">&#8358;400,000.00</p>
                                        <p class="market-price">Market Price: <b>&#8358;800,000.00</b> | <span>50% <i class="fa-solid fa-arrow-down"></i></span></p>
                                        <p style="font-size: 18px;">Status: <b>New <i class="fa-regular fa-star"></i></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add more .carousel-item blocks as needed -->

                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#spotlightCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#spotlightCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </div><!--/Carousel-->

        <!-- Returns Banner -->
        <div class="money-back d-flex justify-content-start align-items-center mt-3 mb-4">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2>Get your order or your money back</h2>
                    <h5>Shop confidentially with BartaBase Money Back Guarantee</h5>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>


            <div class="row g-2 g-md-2" id="product-container">
                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/soundbar.jpg" class="card-img-top h-100 w-100" alt="Samsung j355 Soundbar (120W) Bluetooth, HDMI, Optical, Aux.">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Samsung j355 Soundbar (120W) Bluetooth, HDMI, Optical, Aux.</h5>
                                    <p class="card-text mb-0">&#8358;130,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/mini-ac.jpg" class="card-img-top h-100 w-100" alt="Mini Air-Conditioner">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Mini Air-Conditioner</h5>
                                    <p class="card-text mb-0">&#8358;270,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Agbara, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/honda-pilot.jpg" class="card-img-top h-100 w-100" alt="HONDA PILOT 2010">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">HONDA PILOT 2010</h5>
                                    <p class="card-text mb-0">&#8358;5,800,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Ikorodu, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/hisense-freezer.jpg" class="card-img-top h-100 w-100" alt="Used like New hisense freezer available for sale">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Used like New hisense freezer available for sale</h5>
                                    <p class="card-text mb-0">&#8358;180,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Lagos-Island, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/stabilizer.jpg" class="card-img-top h-100 w-100" alt="3000 watt automatic voltage regulator stabilizer">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">3000 watt automatic voltage regulator stabilizer</h5>
                                    <p class="card-text mb-0">&#8358;50,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Victoria-Island, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/generator.jpg" class="card-img-top h-100 w-100" alt="U.S Brand new coleman power mate Generator 6560 KVA">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">U.S Brand new coleman power mate Generator 6560 KVA</h5>
                                    <p class="card-text mb-0">&#8358;1,000,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Ogudu, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/tv.jpg" class="card-img-top h-100 w-100" alt="65Inches Samsung Curved Screen, 8Series, 4K Smart Tv For-Sale">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">65Inches Samsung Curved Screen, 8Series, 4K Smart Tv For-Sale</h5>
                                    <p class="card-text mb-0">&#8358;675,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Gbagada, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/inverter-fridge.jpg" class="card-img-top h-100 w-100" alt="LG inverter freezer/ fridge">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">LG inverter freezer/ fridge</h5>
                                    <p class="card-text mb-0">&#8358;600,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Lekki Phase I, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                    <div class="card overflow-hidden" style="height: 306px;">
                        <div class="image-wrapper position-relative h-100">
                            <img src="assets/images/uploads/bose.jpg" class="card-img-top h-100 w-100" alt="Bose quiet comfort ultra earbuds">
                            <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                <h5 class="card-title mb-0">Bose quiet comfort ultra earbuds</h5>
                                <p class="card-text mb-0">&#8358;150,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-location">Agbara, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/washing-machine.jpg" class="card-img-top h-100 w-100" alt="Washing machine">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Washing machine</h5>
                                    <p class="card-text mb-0">&#8358;350,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Ikate, Lekki, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/sneakers.jpg" class="card-img-top h-100 w-100" alt="Men's sneaker">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Men's sneaker</h5>
                                    <p class="card-text mb-0">&#8358;17,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Alagomeji, Yaba, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/gaming-laptop.jpg" class="card-img-top h-100 w-100" alt="HP OMEN 15 I7 GAMING LAPTOP">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">HP OMEN 15 I7 GAMING LAPTOP</h5>
                                    <p class="card-text mb-0">&#8358;380,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Ikeja, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/headsets.jpg" class="card-img-top h-100 w-100" alt="Headsets">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Headsets</h5>
                                    <p class="card-text mb-0">&#8358;30,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Surulere, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/playstation5.jpg" class="card-img-top h-100 w-100" alt="Sony Play Station 5">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Sony Play Station 5</h5>
                                    <p class="card-text mb-0">&#8358;650,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Ojota, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/fossil-watch.jpg" class="card-img-top h-100 w-100" alt="Fossil Q Explorist HR Gen 4 Smartwatch 45mm">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Fossil Q Explorist HR Gen 4 Smartwatch 45mm</h5>
                                    <p class="card-text mb-0">&#8358;130,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Agungi, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/midea-ac.jpg" class="card-img-top h-100 w-100" alt="Midea AC 1.5hp">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Midea AC 1.5hp</h5>
                                    <p class="card-text mb-0">&#8358;150,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Alapere, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2 d-none more-products">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/midea-ac.jpg" class="card-img-top h-100 w-100" alt="Midea AC 1.5hp">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Midea AC 1.5hp</h5>
                                    <p class="card-text mb-0">&#8358;150,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Alapere, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2 d-none more-products">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/midea-ac.jpg" class="card-img-top h-100 w-100" alt="Midea AC 1.5hp">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Midea AC 1.5hp</h5>
                                    <p class="card-text mb-0">&#8358;150,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Alapere, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2 d-none more-products">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/midea-ac.jpg" class="card-img-top h-100 w-100" alt="Midea AC 1.5hp">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Midea AC 1.5hp</h5>
                                    <p class="card-text mb-0">&#8358;150,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Alapere, Lagos, Nigeria</div>
                    </a>
                </div>

                <div class="col-md-3 col-6 mt-3 mt-md-2 d-none more-products">
                    <a href="#">
                        <div class="card overflow-hidden" style="height: 306px;">
                            <div class="image-wrapper position-relative h-100">
                                <img src="assets/images/uploads/midea-ac.jpg" class="card-img-top h-100 w-100" alt="Midea AC 1.5hp">
                                <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                    <h5 class="card-title mb-0">Midea AC 1.5hp</h5>
                                    <p class="card-text mb-0">&#8358;150,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-location">Alapere, Lagos, Nigeria</div>
                    </a>
                </div>
            </div><!--/product-container-->

            <!--Load More Button -->
            <div class="text-center mt-4" id="load-more-wrapper">
                <button id="load-more-btn" class="see-more-btn">See More</button>
            </div>

        </div>

        <!-- Promoted Items -->
        <div class="container my-4">
            <h4>Sponsored Deals</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-warning bg-deals text-white">
                        <div class="card-body">
                            <h4>There's always a deal for you.<br><span>Take advantage of the opportunity to save on the items you've been wanting.</span></h4>
                            <a href="#" class="explore">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="my-3">Popular Brands</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-carousel py-4 bg-white">
                        <div id="brandCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center flex-wrap gap-3">
                                <img src="assets/images/brands/lg.png" class="brand-logo" alt="Brand 1">
                                <img src="assets/images/brands/philips.png" class="brand-logo" alt="Brand 2">
                                <img src="assets/images/brands/addidas.png" class="brand-logo" alt="Brand 3">
                                <img src="assets/images/brands/nike.jpg" class="brand-logo" alt="Brand 4">
                                <img src="assets/images/brands/kenwood.png" class="brand-logo" alt="Brand 5">
                                <img src="assets/images/brands/apple.png" class="brand-logo" alt="Brand 6">
                                <img src="assets/images/brands/samsung.png" class="brand-logo" alt="Brand 6">
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center flex-wrap gap-3">
                                <img src="assets/images/brands/hm.jpg" class="brand-logo" alt="Brand 7">
                                <img src="assets/images/brands/fynapple.png" class="brand-logo" alt="Brand 8">
                                <img src="assets/images/bartabase-logo.png" class="brand-logo" alt="Brand 9">
                                <img src="assets/images/brands/strachan.png" class="brand-logo" alt="Brand 10">
                                <img src="assets/images/brands/calvin.png" class="brand-logo" alt="Brand 11">
                                <img src="assets/images/brands/tommy.png" class="brand-logo" alt="Brand 12">
                                <img src="assets/images/brands/huggies.png" class="brand-logo" alt="Brand 12">
                                </div>
                            </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#brandCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#brandCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row my-3 g-2 g-md-2">
                <div class="col-md-6 col-12">
                    <div class="money-back d-flex justify-content-start align-items-center mt-3 mb-4" style="background-image: url('assets/images/unused-clothes.jpg')">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <h2>Looking to declutter your wardrobe?</h2>
                                <h5>Sell your unused clothes and get some money back.</h5>
                                <a href="#">Start Selling</a>
                            </div>
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-md-6 col-12">
                    <div class="money-back d-flex justify-content-start align-items-center mt-3 mb-4" style="background-image: url('assets/images/drone.jpg')">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <h2>Turn Clutter into Cash</h2>
                                <h5>Start selling your unused items today — it's fast, free, and secure on Bartabase.</h5>
                                <a href="#">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div><!--/col-->
            </div><!--/row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card border-warning bg-refund text-white">
                        <div class="card-body">
                            <h4>Receive your order or get a full refund.<br><span>Shop with confidence—covered by the Bartabase Money Back Guarantee.</span></h4>
                            <a href="#" class="explore">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!--/container-->

    <!--Footer-->
    <?php
        include 'assets/includes/footer.php';
    ?>
    <!--/Footer-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <!--Load More JS -->
    <script>
        const loadMoreBtn = document.getElementById('load-more-btn');
        const loadCount = 4; // Number of items to show per click

        loadMoreBtn.addEventListener('click', () => {
            const hiddenItems = document.querySelectorAll('.more-products.d-none');
            let shown = 0;

            hiddenItems.forEach((item) => {
            if (shown < loadCount) {
                item.classList.remove('d-none');
                item.classList.add('fade-in');
                shown++;
            }
            });

            // Hide button if no more items left to show
            if (document.querySelectorAll('.more-products.d-none').length === 0) {
            document.getElementById('load-more-wrapper').classList.add('d-none');
            }
        });
    </script>






</body>
</html>
