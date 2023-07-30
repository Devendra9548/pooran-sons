<header>
    <!-- top header -->
    <div id="top-header" class="container-fluid">
        <div class="row">
            <div class="col-4">Call: <a href="tel:+919548161909">(+880) 123 4567</a></div>
            <div class="col-4">
                <p style="text-align:center">Summer Sale Discount 50% Off.</p>
            </div>
            <div class="col-4 top-social-clm">
                <div id="social-links">
                    <nav id="header-social-icons">
                        <ul>
                            <a href="#">
                                <li><i class="fa-brands fa-facebook-f"></i></li>
                            </a>
                            <a href="#">
                                <li><i class="fa-brands fa-twitter"></i></li>
                            </a>
                            <a href="#">
                                <li><i class="fa-brands fa-linkedin-in"></i></li>
                            </a>
                            <a href="#">
                                <li><i class="fa-brands fa-instagram"></i></li>
                            </a>
                            <a href="#">
                                <li><i class="fa-brands fa-youtube"></i></li>
                            </a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- main header and middle header -->
    <div id="main-header" class="container-fluid">
        <div class="row">
            <div id="logo" class="col-4">
                <div class="logo">
                    <a href="#">
                        <img src="{{URL::to('/assets/img/web-logo.png')}}" width="300">
                    </a>
                </div>
            </div>

            <div id="search-bar" class="col-4">
                <form action="#" style="position:relative">
                    <input id="search-input" type="text" placeholder="Search Books">
                    <input id="search-submit" type="submit" value="">
                    <i class="fa fa-search" style="font-size:18px"></i>
                </form>
            </div>

            <div class="col-4" id="ask-any-question">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ask Any Question?</a>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                Modal body..
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- menu header -->
    <div class="container-fluid" id="navbar">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

</header>