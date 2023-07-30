<!DOCTYPE html>
<html>

<head>
    <title>Shop</title>
    @include('includes/links')
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
<x-footer />

@include('includes/footer')
</body>

</html>
