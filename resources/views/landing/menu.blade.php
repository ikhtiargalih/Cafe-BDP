@extends('layout')

@section('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="assets/css/menu.css" rel="stylesheet">
</head>

<body>

    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <img src="img/logo-wk.png" alt="">
                <h1>Cafe Wikrama</h1>
            </a>

            <form class="d-flex justify-content-end" role="search">
                <input class="form-control col-6" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <a href="" class="d-flex justify-content-end">
                <img src="https://img.icons8.com/material-outlined/24/FA5252/shopping-cart--v1.png" />
                <img src="https://img.icons8.com/material/24/FA5252/1-circle--v1.png"/>                
            </a>


        </div>
    </header>

    <main id="main">
    @foreach($products as $product)
        <section id="menu" class="menu">
            <div class="container mt-4" data-aos="fade-up">

                <div class="section-header">
                    <p>Check Our <span>Menu</span></p>
                </div>


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
                                <a href="{{ route('add_to_cart', $product->id) }}" class="btn-book-a-table">Add To Cart</a>
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
                                <a href="{{ route('add_to_cart', $product->id) }}" class="btn-book-a-table" style="margin-left: 40px">Add To
                                    Cart</a>
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
                                <a href="{{ route('add_to_cart', $product->id) }}" class="btn-book-a-table" style="margin-left: 42px">Add To
                                    Cart</a>
                            </div>
                        </div>

                        <div class="col-lg-4 menu-item mt-6">
                            <a href="img/boci.png" class="glightbox"><img src="img/boci.png"
                                    style="width: 200px; height: 194px" class="menu-img img-fluid" alt=""></a>
                            <h4 style="margin-left: 68px; margin-top: 26px">Boci</h4>
                            <p class="price" style="margin-left: 58px">
                                Rp.12.000
                            </p>
                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                <a href="#book-a-table" class="btn-book-a-table" style="margin-left: 40px">Add To
                                    Cart</a>
                            </div>
                        </div>

                        <div class="col-lg-4 menu-item mt-6">
                            <a href="img/cilok.png" class="glightbox"><img src="img/cilok.png"
                                    style="width: 195px; height: 186px" class="menu-img img-fluid" alt=""></a>
                            <h4 style="margin-left: 65px; margin-top: 34px">Cilok</h4>
                            <p class="price" style="margin-left: 58px">
                                Rp.12.000
                            </p>
                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                <a href="#book-a-table" class="btn-book-a-table" style="margin-left: 40px">Add To
                                    Cart</a>
                            </div>
                        </div>

                        <div class="col-lg-4 menu-item mt-6">
                            <a href="img/ayampenyet.png" class="glightbox"><img src="img/ayampenyet.png"
                                    style="width: 224px; height: 192px" class="menu-img img-fluid" alt=""></a>
                            <h4 style="margin-left: 40px; margin-top: 28px">Ayam Penyet</h4>
                            <p class="price" style="margin-left: 70px">
                                Rp.12.000
                            </p>
                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                <a href="#book-a-table" class="btn-book-a-table" style="margin-left: 52px">Add To
                                    Cart</a>
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
                                <a href="#book-a-table" class="btn-book-a-table">Add To</a>
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
                                <a href="#book-a-table" class="btn-book-a-table" style="margin-left: 40px">Add To Cart</a>
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
                                <a href="#book-a-table" class="btn-book-a-table" style="margin-left: 46px">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    @endforeach
</body>

</html>
