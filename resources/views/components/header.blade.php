<header>
    <!-- top header -->
    <div id="top-header" class="container-fluid" style="background:#f6f6f6">
        <div class="row">
            <div class="col-md-7">
                <span style="margin-right:10px"><i class="fa-solid fa-phone-volume"></i> <a href="tel:+919548161909">(+880) 123 4567</a></span>
                <span><i class="fa-solid fa-envelope"></i> <a href="tel:+919548161909">info@pooranmalsons@gmail.com</a></span>
            </div>
            <div class="col-md-1">
                <!-- <p style="text-align:center">Summer Sale Discount 50% Off.</p> -->
            </div>
            <div class="col-md-4 top-social-clm">
                <div id="social-links" class="text-align-right">
                    <nav id="header-social-icons">
                        <ul class="d-block text-right">

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- main header and middle header -->
    <div id="main-header" class="container-fluid">
        <div class="row">
            <div id="logo" class="col-md-4">
                <div class="logo">
                    <a href="#">
                        <img src="{{URL::to('/assets/img/web-logo.png')}}" width="300">
                    </a>
                </div>
            </div>
            
            <div id="search-bar" class="col-md-4 text-center">
                <form action="#" style="position:relative">
                    <input id="search-input" type="text" placeholder="Search Books">
                    <input id="search-submit" type="submit" value="">
                    <i class="fa fa-search" style="font-size:18px"></i>
                </form>
            </div>

            <div class="col-md-4 d-md-flex justify-content-end align-items-center" id="navbar">
                <nav>
                    <ul class="d-flex justify-content-end align-items-center">
                        <!-- <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li> -->
                        <li><a href="#">Contact</a></li>
                        <li id="ask-any-question"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ask Any Question?</a></li>
                    </ul>
                </nav>

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
    <div class="container-fluid" id="main-navbar"  style="background:#f6f6f6">
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