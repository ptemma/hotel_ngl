<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gia Linh SBH</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('faviconhoa.ico') }}" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assests/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    {{-- <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="{{ asset('assests/images/flag.jpg') }}" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="/login" class="bk-btn">Login Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> 0943334824 </li>
            <li><i class="fa fa-envelope"></i> ngglinh02@gmail.com </li>
        </ul>
    </div> --}}
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> 0943334824 </li>
                            <li><i class="fa fa-envelope"></i> ngglinh02@gmail.com </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="/login" class="bk-btn">Login Now</a>
                            <div class="language-option">
                                <img src="{{ asset('assests/images/flag.jpg') }}" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2" style="margin-top: 20px;">
                        <a href="/" style="font-family:monospace;">
                            <h4 class="text-black mb-3" style="font-size: 40px;">Gia Linh</h4>
                        </a>
                    </div>
                    
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">  
                                    <li class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                                    <li class="nav-item nav-link {{ Request::is('/hotel') ? 'active' : '' }}"><a href="/hotel">Hotel</a></li>
                                    <li class="nav-item nav-link {{ Request::is('/review') ? 'active' : '' }}"><a href="/review">Review</a>
                                    <li class="nav-item nav-link {{ Request::is('/service') ? 'active' : '' }}"><a href="/service">Service</a>
                                    <li class="nav-item nav-link {{ Request::is('/contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Gia Linh search booking hotel</h1>
                        <p>Find Your Perfect Stay with Ease - Book Hotels Hassle-Free!</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('assests/images/home/hotel1.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('assests/images/home/hotel2.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('assests/images/home/hotel3.jpg') }}"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>Welcome to </span>
                            <h2>Gia Linh <br />Search Booking Hotel</h2>
                        </div>
                        
                        <p class="f-para">Welcome to our hotel search and booking page!</p>
                        <p class="s-para">Searching and booking hotels has never been easier. With a convenient booking system and extensive hotel database, we will help you find the ideal destination for all your trips. Explore and experience with us today!</p>
                        <a href="#" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ asset('assests/images/welcome/w1.jpg') }}" alt="" width="860" height="350">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('assests/images/welcome/w2.jpg') }}" alt="" width="860" height="350">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Loyalty programn</h4>
                        <p>To thank customers who regularly use our services, we launch a Loyalty program with many attractive incentives</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Accumulate points</h4>
                        <p>Earn points every time you make a reservation, redeem attractive gifts! The higher the level, the greater the benefit!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Promotions and offers</h4>
                        <p>Brilliant promotions - Surprisingly cheap prices!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry</h4>
                        <p>Sophisticated from clean to fragrant - Our laundry service brings comfort and convenience to all your trips!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>24/7 Customer Support service</h4>
                        <p>Unlimited support. Willing to support anytime, anywhere</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Drink</h4>
                        <p>"Bringing true joy, a glass of exquisite drink at our bar is the ideal stop on every journey!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{ asset('assests/images/room/room-b1.jpg') }}">
                            <div class="hr-text">
                                <h3>Double Room</h3>
                                <h2>199$<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{ asset('assests/images/room/room-b2.jpg') }}">
                            <div class="hr-text">
                                <h3>Premium King Room</h3>
                                <h2>159$<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{ asset('assests/images/room/room-b3.jpg') }}">
                            <div class="hr-text">
                                <h3>Deluxe Room</h3>
                                <h2>198$<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{ asset('assests/images/room/room-b4.jpg') }}">
                            <div class="hr-text">
                                <h3>Family Room</h3>
                                <h2>299$<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>Khách sạn view đẹp, rộng rãi, nhân viên nhiệt tình..</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5> - Chloe ( Hà Nội - Việt Nam) </h5>
                            </div>
                            <img src="{{ asset('assests/images/review/review8.jpg') }}" alt="" width="400" height="400">
                        </div>

                        <div class="ts-item">
                            <p>một kì nghỉ tuyệt vời cùng gia đình. </p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Khánh Linh (Đà Nẵng - Việt Nam) </h5>
                            </div>
                            <img src="{{ asset('assests/images/review/review5.jpg') }}" alt="" width="400" height="400">
                        </div>
                        
                        <div class="ts-item">
                            <p>Great vacation, my family was very satisfied.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Emma (Singapore)</h5>
                            </div>
                            <img src="{{ asset('assests/images/review/review4.jpg') }}" alt="" width="400" height="400">
                        </div>


                        <div class="ts-item">
                            <p>Phòng ốc sạch sẽ và thoải mái, nhân viên thân thiện và nhiệt tình.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Tuệ Mẫn (Bình Phước - Việt Nam)</h5>
                            </div>
                            <img src="{{ asset('assests/images/review/review3.jpg') }}" alt="" width="400" height="400">
                        </div>

                        <div class="ts-item">
                            <p>Beautiful room, great view and professional service. I am very satisfied and will recommend to my friends and family.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Harry Potter (Hogwarts)</h5>
                            </div>
                            <img src="{{ asset('assests/images/review/review1.jpg') }}" alt="" width="400" height="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

   

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="col-lg-2" style="margin-top: 20px;">
                                <a href="/" style="font-family:monospace;">
                                    <h4 class="text-white mb-3" style="font-size: 50px;">Gia Linh</h4>
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local hotels</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>0999 68 68 68</li>
                                <li>searchbookinghotel@gmail.com</li>
                                <li>999 Đại Lộ Hòa Bình - Cần Thơ - Việt Nam</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved<i
                                    class="fa fa-heart" aria-hidden="true"></i></a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('assests/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assests/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assests/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assests/js/main.js') }}"></script>
</body>

</html>
