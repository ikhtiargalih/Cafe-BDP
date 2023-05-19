@extends('layout')

@section('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CafeWikrama</title>
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <img src="img/logo-wk.png" alt="">
                <h1>Cafe Wikrama</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>

    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between ">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="/index" class="btn-book-a-table">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="https://pngimg.com/uploads/spaghetti/spaghetti_PNG110.png" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section>

    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Menu</h2>
                <p>Check Our <span>Menu</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-food">
                        <h4>Food</h4>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-drink">
                        <h4>Drink</h4>
                    </a>
            </ul>
            <br>

            <div class="tab-pane fade active show" id="menu-foods">

                <div class="row gy-5 mt-2" style="margin-left: 110px;">


                    <div class="col-lg-4 menu-item">
                        <a href="img/nasgorr.png" class="glightbox"><img src="img/nasgorr.png"
                                style="width: 200px; height: 200px" class="menu-img img-fluid" alt=""></a>
                        <h4 style="margin-left: 20px; margin-top: 20px">Nasi Goreng</h4>
                        <p class="price ms-5">
                            Rp.12.000
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/index" class="btn-book-a-table">Order Here</a>
                        </div>
                    </div>

                    <div class="col-lg-4 menu-item mt-6">
                        <a href="img/ricebowll.png" class="glightbox"><img src="img/ricebowll.png"
                                style="width: 200px; height: 194px" class="menu-img img-fluid" alt=""></a>
                        <h4 style="margin-left: 40px; margin-top: 28px">Rice Bowl</h4>
                        <p class="price" style="margin-left: 58px">
                            Rp.12.000
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/index" class="btn-book-a-table" style="margin-left: 40px">Order
                                Here</a>
                        </div>
                    </div>

                    <div class="col-lg-4 menu-item">
                        <a href="img/spgti.png" class="glightbox"><img src="img/spgti.png"
                                style="width: 200px; height: 200px" class="menu-img img-fluid" alt=""></a>
                        <h4 style="margin-left: 40px; margin-top: 20px">Spaghetti</h4>
                        <p class="price" style="margin-left: 58px">
                            Rp.10.000
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/index" class="btn-book-a-table" style="margin-left: 42px">Order
                                Here</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade active show" id="menu-drink">


                <div class="row gy-5 mt-2" style="margin-left: 110px;">


                    <div class="col-lg-4 menu-item mt-5">
                        <a href="img/milo.png" class="glightbox"><img src="img/milo.png"
                                style="width: 200px; height: 200px" class="menu-img img-fluid" alt=""></a>
                        <h4 style="margin-left: 58px; margin-top: 20px">Milo</h4>
                        <p class="price" style="margin-left: 53px">
                            Rp.5.000
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/index" class="btn-book-a-table">Order Here</a>
                        </div>
                    </div>

                    <div class="col-lg-4 menu-item mt-6">
                        <a href="img/maaat.png" class="glightbox"><img src="img/maaat.png"
                                style="width: 200px; height: 194px" class="menu-img img-fluid" alt=""></a>
                        <h4 style="margin-left: 53px; margin-top: 28px">Matcha</h4>
                        <p class="price" style="margin-left: 58px">
                            Rp.5.000
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/index" class="btn-book-a-table" style="margin-left: 40px">Order
                                Here</a>
                        </div>
                    </div>

                    <div class="col-lg-4 menu-item">
                        <a href="img/capucino.png" class="glightbox"><img src="img/capucino.png"
                                style="width: 200px; height: 200px" class="menu-img img-fluid" alt=""></a>
                        <h4 style="margin-left: 67px; margin-top: 20px">coffee</h4>
                        <p class="price" style="margin-left: 64px">
                            Rp.5.000
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/index" class="btn-book-a-table" style="margin-left: 46px">Order
                                Here</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="contact" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Contact</h2>
                <p>Contact <span>For More</span> Info</p>
            </div>

            <div class="row g-0">

                <div class="col-lg-4 reservation-img"
                    style="background-image: url(https://img.freepik.com/free-photo/american-shrimp-fried-rice-served-with-chili-fish-sauce-thai-food_1150-26576.jpg?size=626&ext=jpg&ga=GA1.1.1498399391.1669620705&semt=ais);"
                    data-aos="zoom-out" data-aos-delay="200"></div>

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                    <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your booking request was sent. We will call back or send an Email
                                to confirm your reservation. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Message</button></div>
                    </form>
                </div><!-- End Reservation Form -->

            </div>

        </div>
    </section>
</body>

</html>
