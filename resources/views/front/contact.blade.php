<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    @include('includes/links')
</head>

<body>
    <x-header />

    <!-- first section -->

    <div class="container-fluid py-5"
        style="background-image:url('{{URL::to('assets/img/bg.jpg')}}');background-repeat:no-repeat;">
        <div class="row py-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center text-white">
                <h1>Contact Us</h1>
                <p><a href="#">Home</a> / Contact Us</p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h2>Do You Have Some Questions?</h2>
                <p>We are at your disposal 7 days a week!</p>
                <p><a href="tel:+(+84)7-765-66089">(+84)7-765-66089</a></p>
                <p>Monday – Friday: 9:00-20:00</p>
                <p>Saturady: 11:00 – 15:00</p>
                <p><a href="mailto:Comtact@Stationero.Com">Comtact@Stationero.Com</a></p>
            </div>

            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <h2>Our Location</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13929.865796958626!2d79.5279081!3d29.2098314!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a09b3457b708f9%3A0xb67d95da9f0f8996!2sPooranmal%20%26%20Sons!5e0!3m2!1sen!2sin!4v1689875774711!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                <h2>Drop Us A Line</h2>
                <p>Have a question or comment? Use the form below to send us a message or contact us by mail at.
                </p>
                <form action="#" method="post">
                    <input type="text" placeholder="Full Name" name="name" id="name" required><br>
                    <input type="email" placeholder="Email Address" name="email" id="email" required><br>
                    <input type="phone" placeholder="Phone Nubmer" name="phone" id="phone" required><br>
                    <input type="text" placeholder="Subject" name="subject" id="subject" required><br>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea><br>
                    <input type="submit" value="Submit">
                </form> 

            </div>
        </div>
    </div>

    <x-footer />

    @include('includes/footer')
</body>

</html>