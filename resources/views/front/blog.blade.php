<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    @include('includes/links')
</head>
<body>
<x-header />
    <!-- first section -->

    <div class="container-fluid py-5"
        style="background-image:url('{{URL::to('assets/img/bg.jpg')}}');background-repeat:no-repeat;">
        <div class="row py-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center text-white">
                <h1>Blog</h1>
                <p><a href="#">Home</a> / Blog</p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"></div>
        </div>
    </div>
<x-footer />

@include('includes/footer')
</body>

</html>
