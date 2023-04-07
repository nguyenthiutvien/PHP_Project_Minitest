<!doctype html>
<html lang="en">

<head>
    <title>TRAVEL DANA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- <script src="js/index.js"></script> -->
 
</head>


<body id="main-homepage">

    <!--====== LOADER =====-->
    <!-- <div class="loader"></div> -->


    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." required />
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button>
                            </span>
                        </div>
                        <!-- end input-group -->
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end form-center -->
        </div>
        <!-- end overlay-content -->
    </div>
    <!-- end overlay -->
    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>KLTBV TEAM</li>
                            <li><span><i class="fa fa-phone"></i></span>+03 888 333 21</li>
                        </ul>
                    </div>
                    <!-- end info -->
                </div>
                <!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <li><a href="login.php" id="thanh1"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <li><a href="registration.php" id="thanh2"><span><i class="fa fa-plus"></i></span>Sign up</a></li>
                            <li><a href="logout.php" id="thanh3"><span><i class="fa fa-sign-out"></i></span>Logout</a></li>
                            <li><a href="cart.php" id="thanh4"><span><i class="fa fa-shopping-cart"></i></span>Cart</a>
                            </li>
                            <li>
                            <form>
                                    <ul class="list-inline">
                                        
                                        
                                        <li>
                                            <a id="ten"><span><i class="fa fa-circle blackiconcolor"></i></span>
                                                <?php
                                                include('login_set.php');
                                                $ten = new user();
                                                $rows = $ten->fetch();
                                                if (!empty($rows)) {
                                                    foreach ($rows as $row) {
                                                        $name = $row['activity_name'];
                                                    }
                                                    echo $name;
                                                }
                                                ?></a>
                                        </li>
                                    </ul>

                                </form>   
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- end links -->
            </div>
            <!-- end columns -->
        </div>

        <!-- end row -->
    </div>
    <!-- end container -->

    <!-- end top-bar -->
    <script type="text/javascript">
        function inten() {
            document.getElementById("ten").style.display = "block";
            document.getElementById("thanh3").style.display = "block";
            document.getElementById("thanh4").style.display = "block";
            document.getElementById("thanh1").style.display = "none";
            document.getElementById("thanh2").style.display = "none";
        }
        <?php
        $rows = $ten->fetch();
        if (!empty($rows)) {
            foreach ($rows as $row) {
                $name = $row['activity_name'];
            }
            echo "inten();";
        }
        ?>
    </script>
       
    </script>
    <nav class="navbar navbar-default main-navbar navbar-custom navbar-black" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-search hidden-lg">
                    <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </div>
                <a href="index.php" class="navbar-brand"><span><img style = "width=30px; height: 40px"src="./images/logo1.png" alt=""></span> <span style="color:#DD761E"> TRAVEL</span><span style="color:#2F98B9">DANA</a>
            </div>
            <!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">

                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="index.php">Main Homepage</a></li>
                            <li><a href="cruise-homepage.php">Tour Homepage</a></li>
                            <li><a href="cruise-homepage.php">Sports Tour Homepage</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cruise-homepage.php">Tour Homepage</a></li>
                            <li><a href="before-you-fly.php">Before You Fly</a></li>
                            <li><a href="travel-insurance.php">Travel insurance</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown"><a href="blog.php" >Blogs</a>
                       
                    </li>
                  
                    <li class="dropdown"><a href="#" >ABOUT US</a>
                        
                    </li>
                    <li class="dropdown"><a href="#">CONTACT</a>
                       
                    </li>
                    <li class="dropdown"><a href="#" >Account<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Login Homepage</a></li>
                            <li><a href="registration.php">Registration Homepage</a></li>
                            <li><a href="forgot-password.php">Forgot Password Homepage</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                </ul>
            </div>

            <!-- end navbar collapse -->
        </div>
        <!-- end container -->

    </nav>
    <!-- end navbar -->

    <div class="sidenav-content">
        <div style= "background-color:black;" id="mySidenav" class="sidenav">
            <h2 id="web-name" style= "background-color:black;"><span><img style = "width=30px; height: 40px"src="./images/logo1.png" alt=""></span> <span style="color:#DD761E"> TRAVEL</span><span style="color:#2F98B9">DANA</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div>
                <!-- end close-btn -->

                <div class="list-group panel">
                <a href="#flight-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="home-links">
                        <a href="index.php" class="list-group-item active">Main Homepage</a>
                        <a href="cruise-homepage.php" class="list-group-item">Tour Homepage</a>
                        <a href="cruise-homepage.php" class="list-group-item">Sports Tour Homepage</a>
                     
                    </div>
                    
                    <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cruise-links">
                        <a href="cruise-homepage.php" class="list-group-item">Tour Homepage</a>
                        <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                        
                    </div>
                    <!-- end sub-menu -->
                  
                    <!-- end sub-menu -->

                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Blogs</a>
                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>About us</a>
                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Contact</a>
                  
                 
                    <!-- end sub-menu -->
                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Account<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="logout.php" class="list-group-item">Login Homepage</a>
                        <a href="registration.php" class="list-group-item">Registration Homepage</a>
                        <a href="forgot-password.php" class="list-group-item">Forgot Password Homepage</a>
                    </div>
                </div>
                <!-- end list-group -->
            </div>
            <!-- end main-menu -->
        </div>

        <!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->


    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-1">

        <div class="flexslider slider" id="slider-1">

            <ul class="slides">

                <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/cauvang.jpg) 50% 0%;background-size:cover;height:100%;">
                    <div class=" meta">
                        <div class="container">
                            
                            <h1>TRAVEL WITH <br> KLTBV TEAM</h1>
                            <a href="#" class="btn btn-default">View More</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-1 -->

                <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/danang.jpg) 50% 0%;background-size:cover;
	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            
                            <h1>TRAVEL WITH <br>  KLTBV TEAM</h1>
                            <a href="#" class="btn btn-default">View More</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-2 -->
                <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/cauvang.jpg) 50% 0%;background-size:cover;height:100%;">
                    <div class=" meta">
                        <div class="container">
                            
                            <h1>TRAVEL WITH <br> KLTBV TEAM</h1>
                            <a href="#" class="btn btn-default">View More</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>

            </ul>
        </div>
        <!-- end slider -->

        <div class="search-tabs" id="search-tabs-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="tab-content">

                            <div id="flights" class="tab-pane in active">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="From">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="To">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" placeholder="Check In">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" placeholder="Check Out">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Adults</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div>
                                        <!-- end columns -->

                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end flights -->

                            <div id="hotels" class="tab-pane">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" placeholder="Check In">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" placeholder="Check Out">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Rooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-4">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Adults</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-4">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Kids</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div>
                                        <!-- end columns -->

                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end hotels -->

                         
                            <!-- end tours -->

                            <div id="cruise" class="tab-pane">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="From">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="To">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" placeholder="Check In">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" placeholder="Check Out">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Adults</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div>
                                        <!-- end columns -->

                                    </div>
                                    <!-- end columns -->
                                </form>
                            </div>
                            <!-- end cruises -->

                            <div id="cars" class="tab-pane">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
                                            <div class="row">

                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="Country" />
                                                        <i class="fa fa-globe"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="City" />
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-sm-12 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="Location" />
                                                        <i class="fa fa-street-view"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" placeholder="Check In">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" placeholder="Check Out">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div>
                                        <!-- end columns -->

                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end cars -->

                        </div>
                        <!-- end tab-content -->

                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end search-tabs -->

    </section>
    <!-- end flexslider-container -->



   <!--=============== TOUR OFFERS ===============-->
   <section id="tour-offers" class="section-padding">
        <div class="container">
            <?php
            include("admin_set.php");
            $tourOffer = new tourOffer();
            $sql = "select * from tour_offer";
            $rows = $tourOffer->fetch($sql);
            if (!empty($rows)) {
                foreach ($rows as $row) {
                    $id_offer = $row['id_offer'];
                    $name_offer = $row['name_offer'];
                    $img_offer = $row['img_offer'];
                    $price_offer = $row['price_offer'];
                    $detail_offer = $row['detail_offer'];
                    $from_to_offer = $row['from_to_offer'];
                    echo
                    '<div class="modal fade" id="myModalOffer' . $id_offer . '" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <img src="images/' . $img_offer . '" alt="" style = "width: 350px; height: 260px;">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-body">
                                            <h5 class="card-title">' . $name_offer . '</h5>
                                            <p class="card-text">' . $detail_offer . '</p>
                                            <p class="card-text">From: ' . $from_to_offer . '</p>
                                            <p class="card-text"><medium class="text-muted"><b>$' . $price_offer . '</b></medium></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="booking.php?id=' . $id_offer . '"><button type="button" class="btn btn-primary" onclick="">Add to cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            }
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Specials Offers</h2>
                        <hr class="heading-line" />
                    </div>
                  

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                        <?php
                        $rows = $tourOffer->fetch($sql);
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_offer = $row['id_offer'];
                                $name_offer = $row['name_offer'];
                                $img_offer = $row['img_offer'];
                                $price_offer = $row['price_offer'];
                                $detail_offer = $row['detail_offer'];
                                $from_to_offer = $row['from_to_offer'];
                                echo "<div class='item'>
                                    <div class='main-block hotel-block'>
                                            <div class='main-img'>
                                                <a href='#'><img src='images/$img_offer' class='img-responsive' alt='hotel-img'/></a>
                                                <div class='main-mask'>
                                                    <ul class='list-unstyled list-inline offer-price-1'>
                                                        <li class='price'>$price_offer<span class='divider'>|</span><span class='pkg'>Avg/Week</span></li>
                                                            <li class='rating'>
                                                                <span><i class='fa fa-star orange'></i></span>
                                                                <span><i class='fa fa-star orange'></i></span>
                                                                <span><i class='fa fa-star orange'></i></span>
                                                                <span><i class='fa fa-star orange'></i></span>
                                                                <span><i class='fa fa-star lightgrey'></i></span>
                                                            </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class='main-info hotel-info'>
                                                <div class='arrow'>
                                                    <div data-toggle='modal' data-target='#myModalOffer$id_offer'><i class='fa fa-angle-right'></i></div>
                                                </div>
                                                <div class='main-title hotel-title'>
                                                    <a href'#'> $name_offer</a>
                                                    <p>From: $from_to_offer</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        ";
                            }
                        }
                        ?>
                    </div>
             

                    <div class="view-all text-center">
                        <a href="cruise-homepage.php" class="btn btn-orange">View All</a>
                    </div>
                   
                </div>
             
            </div>
        
        </div>
    
    </section>
    <!-- end tour-offers -->
       <!--==================== VIDEO BANNER ===================-->
       <section id="video-banner" class="banner-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Take a Video Tour</h2>
                    <p>KLTBV Team brings about the most memorable moments in life, the unprecedented impressions. We brings the beauty of Viet Nam being world-famous. Let's experience througt our video and feel it.</p>

                    <a href="https://www.youtube.com/watch?v=Au6LqK1UH8g" class="popup-youtube" id="play-button"><span><i class="fa fa-play"></i></span></a>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end video-banner -->

    
        <!--=============== HOTEL OFFERS ===============-->
        <section id="hotel-offers" class="section-padding">
        <div class="container">
            <?php
           
            $tourHot = new tourHot();
            $sql = "select * from tour_hot";
            $rows = $tourHot->fetch($sql);
            if (!empty($rows)) {
                foreach ($rows as $row) {
                    $id_hot = $row['id_hot'];
                    $name_hot = $row['name_hot'];
                    $img_hot = $row['img_hot'];
                    $price_hot = $row['price_hot'];
                    $detail_hot = $row['detail_hot'];
                    $from_to_hot = $row['from_to_hot'];
                    echo
                    '<div class="modal fade" id="myModalHot' . $id_hot . '" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <div class="row g-0">
                                            <div class="col-md-8">
                                                <img src="images/' . $img_hot . '" alt="" style = "width: 350px; height: 260px;">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card-body">
                                                <h5 class="card-title">' . $name_hot . '</h5>
                                                <p class="card-text">' . $detail_hot . '</p>
                                                <p class="card-text">From: ' . $from_to_hot . '</p>
                                                <p class="card-text"><medium class="text-muted"><b>$' . $price_hot . '</b></medium></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="booking_hot.php?id=' . $id_hot . '"><button type="button" class="btn btn-primary" onclick="">Add to cart</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            }
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Tour Hot</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                        <?php
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_hot = $row['id_hot'];
                                $name_hot = $row['name_hot'];
                                $img_hot = $row['img_hot'];
                                $price_hot = $row['price_hot'];
                                $detail_hot = $row['detail_hot'];
                                $from_to_hot = $row['from_to_hot'];
                                echo "<div class='item'>
                            <div class='main-block hotel-block'>
                                    <div class='main-img'>
                                        <a href='#'><img src='images/$img_hot' class='img-responsive' alt='hotel-img'/></a>
                                        <div class='main-mask'>
                                            <ul class='list-unstyled list-inline offer-price-1'>
                                                <li class='price'>$price_hot<span class='divider'>|</span><span class='pkg'>Avg/Week</span></li>
                                                    <li class='rating'>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star lightgrey'></i></span>
                                                    </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class='main-info hotel-info'>
                                        <div class='arrow'>
                                            <div data-toggle='modal' data-target='#myModalHot$id_hot'><i class='fa fa-angle-right'></i></div>
                                        </div>
                                        <div class='main-title hotel-title'>
                                            <a href'#'> $name_hot</a>
                                            <p>From: $from_to_hot</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                ";
                            }
                        }
                        ?>
                    </div>
                    <!-- end owl-hotel-offers -->

                    <div class="view-all text-center">
                        <a href="cruise-homepage.php" class="btn btn-orange">View All</a>
                    </div>
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end hotel-offers -->


 <!--======================= BEST FEATURES =====================-->
 <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Best Price Guarantee</h3>
                        <p>Our website brings you the best experiences and services with the most standard price. Our services are approved a resolution by Vietnam Travel Branch.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>Safe and Secure</h3>
                        <p>All your personal informations, supported informations will be kept and secured in the best way. Only you and administrators can know. Your informations never have leaked out and lost.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Best Travel Agents</h3>
                        <p>We have related to the best Travel agency in Vietnam. Supported and admitted by many branches, we have been improving and broading our activities.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Travel Guidelines</h3>
                        <p>All your questions will be replied by administrators and they will help you. We're always side by side and help you about any problems.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end best-features -->



    <!--=============== CRUISE OFFERS ===============-->
 
    <!-- end cruise-offers -->


 


    <!--================= FLIGHT OFFERS =============-->
    <section id="flight-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Sports tour</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->

                    <div class="row">
                        <?php
                        // include ("admin_set.php");
                        $tourSport = new tourSport();
                        $sql = "select * from tour_sport";
                        $rows = $tourSport->fetch($sql);
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_sport = $row['id_sport'];
                                $name_sport = $row['name_sport'];
                                $img_sport = $row['img_sport'];
                                $price_sport = $row['price_sport'];
                                $detail_sport = $row['detail_sport'];
                                $from_to_sport = $row['from_to_sport'];
                                echo "<div class='col-sm-6 col-md-4'>
                                    <div class='main-block flight-block'>
                                        <a>
                                            <div class='flight-img'>
                                            <div data-toggle='modal' data-target='#myModalSport$id_sport'><img src='images/$img_sport' class='img-responsive' alt='flight-img'/></div>
                                            </div>
                                            <!-- end flight-img -->
        
                                            <div class='flight-info'>
                                                <div class='flight-title'>
                                                    <h3><span class='flight-destination'>$name_sport</span>|<span class='flight-type'>$name_sport</span></h3>
                                                </div>
                                                <!-- end flight-title -->
        
                                                <div class='flight-timing'>
                                                    <ul class='list-unstyled'>
                                                        <li><span><i class='fa fa-plane'></i></span><span class='date'>May, 02-2023 </span>(7:00 PM)</li>
                                                        <li><span><i class='fa fa-plane'></i></span><span class='date'>May, 03-2023 </span>(7:00 PM)</li>
                                                    </ul>
                                                </div>
                                                <!-- end flight-timing -->
        
                                                <ul class='list-unstyled list-inline offer-price-1'>
                                                    <li class='price'>$price_sport<span class='pkg'>Avg/Person</span></li>
                                                    <li class='rating'>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star orange'></i></span>
                                                        <span><i class='fa fa-star lightgrey'></i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </a>
                                    </div>
                                   
                                </div>
                                        ";
                            }
                        }
                        ?>

                    </div>
                    <!-- end row -->
                    <?php
                    if (!empty($rows)) {
                        foreach ($rows as $row) {
                            $id_sport = $row['id_sport'];
                            $name_sport = $row['name_sport'];
                            $img_sport = $row['img_sport'];
                            $price_sport = $row['price_sport'];
                            $detail_sport = $row['detail_sport'];
                            $from_to_sport = $row['from_to_sport'];
                            echo
                            '<div class="modal fade" id="myModalSport' . $id_sport . '" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <div class="row g-0">
                                                    <div class="col-md-8">
                                                        <img src="images/' . $img_sport . '" alt="" style = "width: 350px; height: 260px;">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card-body">
                                                        <h5 class="card-title">' . $name_sport . '</h5>
                                                        <p class="card-text">' . $detail_sport . '</p>
                                                        <p class="card-text">From: ' . $from_to_sport . '</p>
                                                        <p class="card-text"><medium class="text-muted"><b>$' . $price_sport . '</b></medium></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="booking_sport.php?id=' . $id_sport . '"><button type="button" class="btn btn-primary" onclick="">Add to cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                        }
                    }
                    ?>


                    <div class="view-all text-center">
                        <a href="cruise-homepage.php" class="btn btn-orange">View All</a>
                    </div>
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end flight-offers -->



    <!--==================== HIGHLIGHTS ====================-->
    <section id="highlights" class="section-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div id="boxes">

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text">
                                        <span class="numbers">2496</span>
                                        <p>Outstanding Tours</p>
                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-ship"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text cruise">
                                        <span class="numbers">1906</span>
                                        <p>Worldwide Cruise</p>
                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-taxi"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text taxi">
                                        <span class="numbers">2033</span>
                                        <p>Luxury Car Booking</p>
                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->

                        </div>
                        <!-- end boxes -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end highlights -->





    <!--================ LATEST BLOG ==============-->
    <section id="latest-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Our Latest Blogs</h2>
                        <hr class="heading-line" />
                    </div>

                    <div class="row">
                        <?php
                        $tourCapital = new blog();
                        $sql = "select * from blog";
                        $rows = $tourCapital->fetch($sql);
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_blog = $row['id_blog'];
                                $img_blog = $row['img_blog'];
                                $author_blog = $row['author_blog'];
                                $time_blog = $row['time_blog'];
                                $title_blog = $row['title_blog'];
                                $content_blog = $row['content_blog'];
                                echo "<div class='col-sm-6 col-md-4'>
                                        <div class='main-block latest-block'>

                                            <div class='main-img latest-img'>
                                                <a href='blog-detail-right-sidebar.php'>
                                                    <img src='images/$img_blog' class='img-responsive' alt='blog-img'/>
                                                </a>
                                            </div>

                                            <div class='latest-info'>
                                                <ul class='list-unstyled'>
                                                    <li><span><i class='fa fa-calendar-minus-o'></i></span>$time_blog<span class='author'>by: <a href='blog-detail-right-sidebar.php'>$author_blog</a></span></li>
                                                </ul>
                                            </div>
                                            <div class='main-info latest-desc'>
                                                <div class='row'>
                                                    <div class='col-xs-10 col-sm-10 main-title'>
                                                        <a href='blog-detail-right-sidebar.php'>$title_blog</a>
                                                        <p>$content_blog</p>
                                                    </div>
                                                </div>
                                                <span class='arrow'><a href='blog-listing-right-sidebar.php'><i class='fa fa-angle-right'></i></a></span>
                                            </div>
                                        
                                    </div>
                                    
                                </div>
                                            
                                    ";
                            }
                        }
                        ?>
                    </div>
                    <!-- end row -->

                    <div class="view-all text-center">
                        <a href="blog-listing-right-sidebar.php" class="btn btn-orange">View All</a>
                    </div>
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end latest-blog -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscibe to receive our interesting updates</p>
                    <form action="email.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control input-lg" placeholder="Enter your email address" required />
                                <span class="input-group-btn"><button type="submit" class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>


    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-contact">
                        <h3 class="footer-heading">CONTACT US</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>101b Le Huu Trac, Son Tra</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 964 988 91</li>
                            <li><span><i class="fa fa-envelope"></i></span>kltbvcontact@gmail.com</li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                        <ul class="list-unstyled">
                        <li><a href="blog-listing-right-sidebar.php">Home</a></li>
                            <li><a href="blog-listing-right-sidebar.php">Tours</a></li>
                            <li><a href="contact-us.php">Blogs</a></li>
                            <li><a href="logout.php">About us</a></li>
                            <li><a href="registration.php">Contact</a></li>
                            <li><a href="index.php">Account</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">ABOUT US</h3>
                        <p>We will bring you the journeys, the greatest experiences in your life. Your happiness and satisfaction are a motive power that impulse us to develop and improve. Thanks for your confidence and interaction. Hope you have a fantastic
                            journeys!!
                        </p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="https://www.facebook.com/"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="https://twitter.com/"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="https://google.com/"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="https://pinterest.com/"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="https://instagram.com/"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="https://linkedin.com/"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="https://youtube.com/"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-top -->

        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                        <p>© 2023 <a href="index.php">Traveldana</a>. All rights reserved.</p>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                        <ul class="list-unstyled list-inline">
                            <li><a href="index.php">Terms & Condition</a></li>
                            <li><a href="index.php">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-bottom -->

    </section>
    <!-- end footer -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-video.js"></script>
    <script src="js/login.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>