<?php
    session_start();

    if (isset($_SESSION['userSession'])) {
        header("Location: home.php");
        exit();
    }
    
    if (isset($_SESSION['adminSession'])) {
        header("Location: admin.php");
        exit();
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GRMS - Home</title>

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/x-icon" href="images/kld-logo.png">

    <!------ICONS------->

    <link rel="stylesheet" href="/icons/font-awe/css/all.css">

</head>

<body>
    <!------------------------------Navigation Bar---------------------------->
    <nav class="navbar fixed-top" style="background-color: #f5f5f5; box-shadow: -8px 17px 14px -11px rgba(0,0,0,0.42); -webkit-box-shadow: -8px 17px 14px -11px rgba(0,0,0,0.42); -moz-box-shadow: -8px 17px 14px -11px rgba(0,0,0,0.42);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="m-1" src="images/KLD-logo.png" alt="KLD-logo" width="50"
                    height="50" class="img-fluid"></a>
            <p class="h3">Guidance Record Management System</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Guidance Record Management System</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#carouselExampleIndicators">Home</a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link" aria-current="page" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Our Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#counselors">Counselors</a></li>
                                <li><a class="dropdown-item" href="#carouselEvent">Events</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="terms-and-conditions.php" class="dropdown-item" href="#">Terms and Condition</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--------------------------Carousel------------------------------------------->


    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="images/1.png" class="d-block w-100" alt="img1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/2.png" class="d-block w-100" alt="img2">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/3.png" class="d-block w-100" alt="img3">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/4.png" class="d-block w-100" alt="img4">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <!----------------------------------------Services------------------------------------------------------------------------------->
    <section class="services" id="services">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <center>
                        <h1><b>Our Services</b></h1>
                    </center>
                    <div class="row text-center d-flex mt-3">
                        <div class="col-lg-4">
                            <img class="img img-fluid" src="images/counselling.png" alt="Counseling">
                            <p class="h5 mt-4">Counseling</p>
                        </div>
                        <div class="col-lg-4">
                            <img class="img img-fluid" src="images/notes.png" alt="Filing">
                            <p class="h5 mt-4">Filing LOA</p>
                        </div>
                        <div class="col-lg-4">
                            <img class="img img-fluid" src="images/notes.png" alt="Absence">
                            <p class="h5 mt-4">Absence Approval Form</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------About Us--------------------------------->
    <!--------------Counselors--------------->
    <section id="counselors">
        <div class="container">
            <center>
                <h1><b>Counselors</b></h1>
            </center>
            <center><img src="images/Counselors.png" alt="Counselors" class="img-fluid"></center>
        </div>
    </section>
    <br>
    <br>
    <hr>
    <!--------------------------Events------------------------------------------->

    <section class="container">
        <center><p class="h1 fw-bold">Events</p></center>
        <div id="carouselEvent" class="carousel slide mt-2" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselEvent" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselEvent" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselEvent" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselEvent" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselEvent" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselEvent" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="images/events/1.png" class="d-block w-100" alt="img1">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/events/2.png" class="d-block w-100" alt="img2">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/events/3.png" class="d-block w-100" alt="img3">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/events/4.png" class="d-block w-100" alt="img4">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/events/5.png" class="d-block w-100" alt="img5">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/events/6.png" class="d-block w-100" alt="img6">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselEvent" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselEvent" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>

    <br>
    <br>
    <!---------------------FOOTER------------------------------>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-6 text-start ">
                    <a class="text-body-secondary" href=" #">
                        <strong>Guidance Record Management System</strong>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="/script/script.js"></script>
</body>

</html>