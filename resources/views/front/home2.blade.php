<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    @include('includes/links')
</head>
<style>
.carousel-inner img {
    width: 100%;
    height: 75vh;
    object-fit: cover;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <x-header />

    <!-- Hero section -->

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{URL::to('/assets/img/banner-2.jpg')}}" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h2>Unleash Your Creativity with Exquisite Stationery from Pooranmal & Sons</h2>
                    <p>Explore Pooranmal & Sons' exquisite stationery to ignite creativity. Unleash your potential with
                        our curated collection. Let inspiration flow!
                    </p>
                    <a href="#" class="btn btn-primary border border-black ct-btn-hero">Read More <i
                            class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{URL::to('/assets/img/banner-1.webp')}}" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h2>Unleash Your Creativity with Exquisite Stationery from Pooranmal & Sons</h2>
                    <p>Explore Pooranmal & Sons' exquisite stationery to ignite creativity. Unleash your potential with
                        our curated collection. Let inspiration flow!
                    </p>
                    <a href="#" class="btn btn-primary border border-black ct-btn-hero">Read More <i
                            class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <!-- First Section -->

    <div class="container-fluid pt-5">
        <div class="row pb-4 main-heading">
            <div class="col-3"></div>
            <div class="col-6 text-center pb-3 pt-3">
                <h2 class="mb-3">Shop By Categories</h2>
                <p>Essential Office Supplies In Our Online Stationery Shop That Keep Your Office Operations Smooth And
                    Efficient
                </p>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row shop-by-imgs">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/1.jpg')}}" alt="Trulli" style="width:100%">
                    </div>
                    <figcaption>Books & Stationery</figcaption>
                </figure>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/2.jpg')}}" alt="Trulli" style="width:100%">
                    </div>
                    <figcaption>School Supplies</figcaption>
                </figure>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/3.jpg')}}" alt="Trulli" style="width:100%">
                    </div>
                    <figcaption>Paper & Card</figcaption>
                </figure>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/4.jpg')}}" alt="Trulli" style="width:100%">
                    </div>
                    <figcaption>Notebooks</figcaption>
                </figure>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/5.jpg')}}" alt="Trulli" style="width:100%">
                    </div>
                    <figcaption>Calendars</figcaption>
                </figure>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/6.jpg')}}" alt="Trulli" style="width:100%">
                    </div>
                    <figcaption>School Supplies</figcaption>
                </figure>
            </div>


        </div>
    </div>

    <!-- Second Section and Third Section -->

    <div class="container-fluid third-section  pt-5">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/7.jpg')}}" alt="7" style="width:100%">
                    </div>
                    <figcaption>
                        <div>
                            <p>Sale Up To 15% Off</p>
                            <h2>Home Office Desks</h2>
                            <a href="#"
                                class="border border-black border-radius-100 bg-transparent rounded-pill px-5 py-3">Read
                                More <i class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/8.jpg')}}" alt="8" style="width:100%">
                    </div>
                    <figcaption>
                        <div>
                            <p>Sale Up To 15% Off</p>
                            <h2>Home Office Desks</h2>
                            <a href="#"
                                class="border border-black border-radius-100 bg-transparent rounded-pill px-5 py-3">Read
                                More <i class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/9.jpg')}}" alt="9" style="width:100%">
                    </div>
                    <figcaption class="pt-3">
                        <div>
                            <p>Sale Up To 15% Off</p>
                            <h2>Home Office Desks</h2>
                            <a href="#"
                                class="border border-black border-radius-100 bg-transparent rounded-pill px-5 py-3">Read
                                More <i class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </figcaption>
                </figure>
                <figure class="mt-4">
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/10.jpg')}}" alt="10" style="width:100%">
                    </div>
                    <figcaption class="pt-3">
                        <div>
                            <p>Sale Up To 15% Off</p>
                            <h2>Home Office Desks</h2>
                            <a href="#"
                                class="border border-black border-radius-100 bg-transparent rounded-pill px-5 py-3">Read
                                More <i class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>


    <!-- Fourth Section and Listing Product Section -->

    <div class="container-fluid pt-5 pb-1 listing-section">
        <div class="row  pb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center listing-section-row">
                    <a href="#">Popular Products</a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pb-4">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/30.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Business Cards</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pb-4">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/31.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">T-shirts</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pb-4">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/32.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Gift Hampers</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pb-4">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/33.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Drinkware</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pb-4">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/34.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Mailer Boxes</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pb-4">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/35.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Stickers</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/36.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Backpacks</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/37.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Name Plates</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/38.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Booklets</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/39.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Labels</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/40.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Pen</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/41.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Keychains</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- Listing prduct or Photo Products -->

    <div class="container-fluid pt-5 pb-1 listing-section">
        <div class="row  pb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center listing-section-row">
                    <a href="#">Photo Products</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/42.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Business Cards</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/43.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">T-shirts</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/44.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Gift Hampers</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/45.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Drinkware</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/46.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Mailer Boxes</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/47.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Stickers</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- Listing prduct or New Launches Products -->

    <div class="container-fluid pt-5 pb-1 listing-section">
        <div class="row  pb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center listing-section-row">
                    <a href="#">New Launches</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/48.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Desktop Items</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/49.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Acrylic Desk Stands</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/50.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Premium Cards</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/51.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Flexible Pouches</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/52.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Recycled T-shirts</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/53.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Event ID Cards</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- Listing prduct or Corporate Gifts Products -->

    <div class="container-fluid pt-5 pb-1 listing-section">
        <div class="row  pb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center listing-section-row">
                    <a href="#">Corporate Gifts</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/54.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Gift Hampers</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/55.jpg')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Backpacks</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/56.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Diaries</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/57.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Awards</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/58.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Drinkware</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/59.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">T-Shirts</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- Listing prduct or Stationery -->

    <div class="container-fluid pt-5 pb-1 listing-section">
        <div class="row  pb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center listing-section-row">
                    <a href="#">Stationery</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/60.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Business Cards</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/61.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Letterheads</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/62.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Envelopes</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/63.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Rubber Stamp</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/64.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Notepads</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/65.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Folders</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- Listing prduct or Signs & Marketing -->

    <div class="container-fluid pt-5 pb-1 listing-section">
        <div class="row  pb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center listing-section-row">
                    <a href="#">Signs & Marketing</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/66.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Gift Hampers</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/67.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Backpacks</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/68.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Diaries</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/69.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Awards</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/70.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Drinkware</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/71.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">T-Shirts</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- Listing prduct or Packaging -->

    <div class="container-fluid pt-5 pb-1 listing-section">
        <div class="row  pb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center listing-section-row">
                    <a href="#">Packaging</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/72.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Gift Hampers</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/73.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Backpacks</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/74.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Diaries</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/75.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Awards</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/76.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">Drinkware</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <a href="#">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="{{URL::to('/assets/img/products/77.webp')}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body text-center">
                            <p class="card-title mb-2">T-Shirts</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Blog Section -->
    <div class="container-fluid py-5 blog">
        <div class="row py-4">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <h2>Our Blog</h2>
                <p>Essential Office Supplies In Our Online Stationery Shop That Keep Your Office Operations Smooth
                    And
                    Efficient
                </p>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row pb-5">
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="{{URL::to('/assets/img/23.jpg')}}" alt="Card image"
                        style="width:100%">
                    <div class="card-body text-center">
                        <p class="card-text">Post Date : March 24, 2022</p>
                        <p class="card-title font-weight-bold mt-2">Comfort Dressing: The nostalgic value of the high
                            jewelry</p>
                        <a href="#" class="btn btn-primary py-2 px-4 my-3 product-btn">Read More <i
                                class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="{{URL::to('/assets/img/24.jpg')}}" alt="Card image"
                        style="width:100%">
                    <div class="card-body text-center">
                        <p class="card-text">Post Date : March 24, 2022</p>
                        <p class="card-title font-weight-bold mt-2">Comfort Dressing: The nostalgic value of the high
                            jewelry</p>
                        <a href="#" class="btn btn-primary py-2 px-4 my-3 product-btn">Read More <i
                                class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="{{URL::to('/assets/img/25.jpg')}}" alt="Card image"
                        style="width:100%">
                    <div class="card-body text-center">
                        <p class="card-text">Post Date : March 24, 2022</p>
                        <p class="card-title font-weight-bold mt-2">Comfort Dressing: The nostalgic value of the high
                            jewelry</p>
                        <a href="#" class="btn btn-primary py-2 px-4 my-3 product-btn">Read More <i
                                class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="{{URL::to('/assets/img/25.jpg')}}" alt="Card image"
                        style="width:100%">
                    <div class="card-body text-center">
                        <p class="card-text">Post Date : March 24, 2022</p>
                        <p class="card-title font-weight-bold mt-2">Comfort Dressing: The nostalgic value of the high
                            jewelry</p>
                        <a href="#" class="btn btn-primary py-2 px-4 my-3 product-btn">Read More <i
                                class="pl-2 fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Star Review Section -->

    <div id="star-review" class="container-fluid py-5" style="background:#f6f6f6">
        <div class="row mt-2 pb-4">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <h2>Latest Reviews </h2>
                <p>Essential Office Supplies In Our Online Stationery Shop That Keep Your Office Operations Smooth
                    And
                    Efficient
                </p>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="slick-row-class">
                    <div>
                        <div class="slick-container">
                            <div class="media  mb-3">
                                <img src="{{URL::to('/assets/img/review/abhi.jpg')}}" alt="John Doe"
                                    class="mr-4 mt-3 rounded-circle" style="width:70px;">
                                <div class="media-body mt-4">
                                    <h4>Abhisek Arya</h4>
                                    <p><img src="{{URL::to('/assets/img/star-rating.png')}}" alt="star-rating"
                                            width="100"></p>
                                </div>
                            </div>
                            <div class="content-media">
                                <p>“ Great quality products - Flags, programs for exceptional capacities, birthday,
                                    and
                                    occasion welcome are largely still mainstream on paper.”</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-container">
                            <div class="media  mb-3">
                                <img src="{{URL::to('/assets/img/review/riya.jpg')}}" alt="John Doe"
                                    class="mr-4 mt-3 rounded-circle" style="width:70px;">
                                <div class="media-body mt-4">
                                    <h4>Riya Kumar</h4>
                                    <p><img src="{{URL::to('/assets/img/star-rating.png')}}" alt="star-rating"
                                            width="100"></p>
                                </div>
                            </div>
                            <div class="content-media">
                                <p>“ Great quality products - Flags, programs for exceptional capacities, birthday,
                                    and
                                    occasion welcome are largely still mainstream on paper.”</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-container">
                            <div class="media  mb-3">
                                <img src="{{URL::to('/assets/img/review/gaurav.jpg')}}" alt="John Doe"
                                    class="mr-4 mt-3 rounded-circle" style="width:70px;">
                                <div class="media-body mt-4">
                                    <h4>Gaurav Pant</h4>
                                    <p><img src="{{URL::to('/assets/img/star-rating.png')}}" alt="star-rating"
                                            width="100"></p>
                                </div>
                            </div>
                            <div class="content-media">
                                <p>“ Great quality products - Flags, programs for exceptional capacities, birthday,
                                    and
                                    occasion welcome are largely still mainstream on paper.”</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-container">
                            <div class="media  mb-3">
                                <img src="{{URL::to('/assets/img/review/luckky.jpg')}}" alt="John Doe"
                                    class="mr-4 mt-3 rounded-circle" style="width:70px;">
                                <div class="media-body mt-4">
                                    <h4>Luckky Prajapati</h4>
                                    <p><img src="{{URL::to('/assets/img/star-rating.png')}}" alt="star-rating"
                                            width="100"></p>
                                </div>
                            </div>
                            <div class="content-media">
                                <p>“ Great quality products - Flags, programs for exceptional capacities, birthday,
                                    and
                                    occasion welcome are largely still mainstream on paper.”</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-container">
                            <div class="media  mb-3">
                                <img src="{{URL::to('/assets/img/review/dev.jpg')}}" alt="John Doe"
                                    class="mr-4 mt-3 rounded-circle" style="width:70px;">
                                <div class="media-body mt-4">
                                    <h4>Deva Thakur</h4>
                                    <p><img src="{{URL::to('/assets/img/star-rating.png')}}" alt="star-rating"
                                            width="100"></p>
                                </div>
                            </div>
                            <div class="content-media">
                                <p>“ Great quality products - Flags, programs for exceptional capacities, birthday,
                                    and occasion welcome are largely still mainstream on paper.”</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <a href="#" class="get-started-today">Get Started Today <i
                        class="pl-2 fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>

    <!-- High Lighted -->

    <div id="high-Lighted" class="container-fluid py-5">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                <h2>More <br>To Discover</h2>
                <p>Bucket toy with a contrast coloured handle. Perfect for playing on the beach.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/18.jpg')}}" alt="18" style="width:100%">
                    </div>
                    <figcaption style="margin-top: -15px;"><a href="#" class="ct-btn">Get Started Today <i
                                class="pl-2 fa-solid fa-arrow-right-long"></i></a></figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                <figure>
                    <div class="img-div">
                        <img src="{{URL::to('/assets/img/19.jpg')}}" alt="18" style="width:100%">
                    </div>
                    <figcaption style="margin-top: -15px;"><a href="#" class="ct-btn">Get Started Today <i
                                class="pl-2 fa-solid fa-arrow-right-long"></i></a></figcaption>
                </figure>
            </div>
        </div>
    </div>
    <x-footer />

    @include('includes/footer')
</body>

</html>