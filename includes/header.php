<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Frontend Task</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="header">
        <div id="alert" class="top-panel">
            <h4>This is a global announcement!</h4>
            <span class="closebtn" onclick="closeAlert()"> <i class="fas fa-times"></i></span>
        </div>
        <section class="nav-section">
            <div class="container">
                <div class="logo">
                    <a href="index.php">
                        <span class="logo-text">Logo</span>
                    </a>
                </div>
                <div class="nav-wrapper">
                    <div class="d-flex justify-content-space-between">
                        <div class="logo p-3 d-none d-block-sm-device">
                            <a href="index.php">
                                <span class="logo-text">Logo</span>
                            </a>
                        </div>
                        <div class="close p-3"><i class="fa fa-times"></i></div>
                    </div>
                    <div class="d-none d-block-sm-device product_category" id="product_category">
                        <div class="d-flex justify-content-space-between mb-3">
                            <h3 class="best-seller text-primary">Best Seller</h3>
                            <a href="" class="show-all-btn">Show All</a>
                        </div>
                        <div class="owl-carousel">
                            <div class="single-box">
                                <img src="img/m1.png">
                            </div>
                            <div class="single-box">
                                <img src="img/m2.png">
                            </div>
                            <div class="single-box">
                                <img src="img/m3.png">
                            </div>
                            <div class="single-box">
                                <img src="img/m4.png">
                            </div>
                            <div class="single-box">
                                <img src="img/m1.png">
                            </div>
                            <div class="single-box">
                                <img src="img/m1.png">
                            </div>
                        </div>
                    </div>
                    <ul class="navigation list-unstyled mb-0">
                        <li
                            class="<?php if ($pageName == 'home') {echo 'active';}?> mega_menu_dropdown has_dropdown nav-item">
                            <a href="#" class="nav-link">Mealtime</a>
                            <div class="mega_menu sub_menu">
                                <div class="mega_menu_item_left">
                                    <h3>Shop Mealtime</h3>
                                    <ul>
                                        <li><a href="#">High Chair</a></li>
                                        <li><a href="#">Booster</a></li>
                                        <li><a href="#">Tableware & Bibs</a></li>
                                        <li><a href="#">Mealtime Accessories</a></li>
                                        <li><a href="#">Bundle & Save</a></li>
                                        <li><a href="#">All Mealtime</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item_right">
                                    <h3 class="featured-title">Featured Mealtime</h3>
                                    <div class="owl-carousel">
                                        <div class="single-box">
                                            <img src="img/m1.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>The Chair</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m2.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>First Bites Full Kit</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m3.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>Suction Plate</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m4.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>Little Cup</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m1.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>The Chair</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m1.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>The Chair</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="nav-item mega_menu_dropdown has_dropdown <?php if ($pageName == 'playtime') {echo 'active';}?>">
                            <a href="#" class="nav-link">Playtime</a>
                            <div class="mega_menu sub_menu">
                                <div class="mega_menu_item_left">
                                    <h3>Shop Playtime</h3>
                                    <ul>
                                        <li><a href="#">High Chair</a></li>
                                        <li><a href="#">Booster</a></li>
                                        <li><a href="#">Tableware & Bibs</a></li>
                                        <li><a href="#">Mealtime Accessories</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item_right">
                                    <h3 class="featured-title">Featured Playtime</h3>
                                    <div class="owl-carousel">
                                        <div class="single-box">
                                            <img src="img/m1.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>The Chair</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m2.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>First Bites Full Kit</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m3.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>Suction Plate</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m4.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>Little Cup</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m1.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>The Chair</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m1.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>The Chair</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="nav-item mega_menu_dropdown has_dropdown <?php if ($pageName == 'bathtime') {echo 'active';}?>">
                            <a href="#" class="nav-link">Bathtime</a>
                            <div class="mega_menu sub_menu">
                                <div class="mega_menu_item_left">
                                    <h3>Shop Bathtime</h3>
                                    <ul>
                                        <li><a href="#">High Chair</a></li>
                                        <li><a href="#">Booster</a></li>
                                        <li><a href="#">Tableware & Bibs</a></li>
                                        <li><a href="#">Mealtime Accessories</a></li>
                                        <li><a href="#">Bundle & Save</a></li>
                                        <li><a href="#">All Mealtime</a></li>
                                        <li><a href="#">Mealtime Accessories</a></li>
                                        <li><a href="#">Booster</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item_right">
                                    <h3 class="featured-title">Featured Bathtime</h3>
                                    <div class="owl-carousel">
                                        <div class="single-box">
                                            <img src="img/m1.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>The Chair</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m2.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>First Bites Full Kit</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m3.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>Suction Plate</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m4.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>Little Cup</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m1.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>The Chair</h3>
                                            </div>
                                        </div>
                                        <div class="single-box">
                                            <img src="img/m1.png">
                                            <div class="product-title">
                                                <p>BEST SELLER</p>
                                                <h3>The Chair</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="nav-item mega_menu_dropdown has_dropdown <?php if ($pageName == 'play-box') {echo 'active';}?>">
                            <a href="#" class="nav-link">The Play Boxes <span class="offer-text">New!</span></a>
                            <div class="mega_menu sub_menu">
                                <div class="mega_menu_item_left">
                                    <h3>Shop Play boxes</h3>
                                    <ul>
                                        <li><a href="#">Play Box Subscription</a></li>
                                        <li><a href="#">Newborn Box</a></li>
                                        <li><a href="#">Gift Play Boxes</a></li>
                                        <li><a href="#">Redeem Gift</a></li>
                                        <li><a href="#">All Play Boxes</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item_middle">
                                    <div class="tab-container">
                                        <div class="tab-menu">
                                            <ul>
                                                <li><a href="#" class="tab-a active-a" data-id="year1">Year 1</a></li>
                                                <li><a href="#" class="tab-a" data-id="year2">Year 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab tab-active" data-id="year1">
                                            <div class="tab-content">
                                                <div class="item">
                                                    <div class="icon-img bg-yellow"><img src="img/ellipse.png"
                                                            height="24" width="24" alt="0-12 weeks">
                                                    </div>
                                                    <h4>0-12 weeks</h4>
                                                </div>
                                                <div class="item">
                                                    <div class="icon-img bg-yellow"><img src="img/shape.png" height="24"
                                                            width="24" alt="0-12 weeks">
                                                    </div>
                                                    <h4>3-4 mos</h4>
                                                </div>
                                                <div class="item">
                                                    <div class="icon-img bg-yellow"><img src="img/ellipse.png"
                                                            height="24" width="24" alt="0-12 weeks">
                                                    </div>
                                                    <h4>5-6 mos</h4>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="item">
                                                    <div class="icon-img bg-yellow"><img src="img/ellipse.png"
                                                            height="24" width="24" alt="0-12 weeks">
                                                    </div>
                                                    <h4>7-8 mos</h4>
                                                </div>
                                                <div class="item">
                                                    <div class="icon-img bg-yellow"><img src="img/ellipse.png"
                                                            height="24" width="24" alt="0-12 weeks">
                                                    </div>
                                                    <h4>9-10 mos</h4>
                                                </div>
                                                <div class="item">
                                                    <div class="icon-img bg-yellow"><img src="img/ellipse.png"
                                                            height="24" width="24" alt="0-12 weeks">
                                                    </div>
                                                    <h4>11-12 mos</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab" data-id="year2">
                                            <h2>Year 2</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="mega_menu_item_right_data">
                                    <h3 class="featured-title">Play Box Gifts & Subscriptions</h3>
                                    <div class="subscription">
                                        <div class="subscription-card">
                                            <img src="img/play1.jpg" alt="">
                                            <div class="subscription-card-content">
                                                <p>BEST SELLER</p>
                                                <h3>First Bites Full Kit</h3>
                                                <h4 class="price">$40/month</h4>
                                            </div>
                                        </div>
                                        <div class="subscription-card">
                                            <img src="img/play1.jpg" alt="">
                                            <div class="subscription-card-content">
                                                <p>BEST SELLER</p>
                                                <h3>First Bites Full Kit</h3>
                                                <h4 class="price">$40/month</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item <?php if ($pageName == 'gifts') {echo 'active';}?>">
                            <a href="#" class="nav-link">Gifts</a>
                        </li>
                        <li class="nav-item <?php if ($pageName == 'best-sellers') {echo 'active';}?>">
                            <a href="#" class="nav-link">Best Sellers</a>
                        </li>
                    </ul>
                </div>
                <ul class="list-unstyled nav-icons mb-0 pt-1 pt-lg-0">
                    <li><span id="menu-bar" class="d-inline-block ms-3"><i
                                class="fa fa-bars text-dark fa-2x"></i></span></li>
                </ul>
            </div>
        </section>
    </div>