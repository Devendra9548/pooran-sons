<!DOCTYPE html>
<html>

<head>
    <title>F.A.Q</title>
    @include('includes/links')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/faq.css') }}">
</head>

<body>
    <x-header />
    <!-- first section -->

    <div class="container-fluid py-5"
        style="background-image:url('{{URL::to('assets/img/bg.jpg')}}');background-repeat:no-repeat;">
        <div class="row py-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center text-white">
                <h1>Frequently Asked Questions</h1>
                <p><a href="#">Home</a> / F.A.Q</p>
            </div>
        </div>
    </div>

    <!-- FAQ Content -->

    <div id="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <ul class="faq">
                    <li class="q"> Lorem ipsum dolor sit amet, consectetur adipiscing elit? <i class="fas fa-plus"></i>
                    </li>
                    <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales
                        dictum
                        nulla. consectetur adipiscing elit.</li>

                    <li class="q"> Lorem ipsum dolor sit amet, consectetur adipiscing elit? <i class="fas fa-plus"></i>
                    </li>
                    <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales
                        dictum
                        nulla. consectetur adipiscing elit.</li>
                </ul>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <ul class="faq">
                    <li class="q"> Lorem ipsum dolor sit amet, consectetur adipiscing elit? <i class="fas fa-plus"></i>
                    </li>
                    <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales
                        dictum
                        nulla. consectetur adipiscing elit.</li>

                    <li class="q"> Lorem ipsum dolor sit amet, consectetur adipiscing elit? <i class="fas fa-plus"></i>
                    </li>
                    <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales
                        dictum
                        nulla. consectetur adipiscing elit.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Any Support Section -->

    <div class="container py-5">
        <div class="row pb-4">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <h2 style="font-size:35px">Latest Reviews </h2>
                <p>Essential Office Supplies In Our Online Stationery Shop That Keep Your Office Operations Smooth And
                    Efficient
                </p>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="media  mb-3">
                    <img src="{{URL::to('/assets/img/review/gaurav.jpg')}}" alt="John Doe"
                        class="mr-4 mt-3 rounded-circle" style="width:70px;">
                    <div class="media-body mt-4">
                        <h4>Gaurav Pant</h4>
                        <p><img src="{{URL::to('/assets/img/star-rating.png')}}" alt="star-rating" width="100"></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
        </div>
    </div>

    <x-footer />
    @include('includes/footer')
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="{{ URL::to('assets/js/faq.js') }}"></script>
</body>

</html>