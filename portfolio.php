<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <meta name="title" content="Instant Noodle WU">
    <meta name="description" content="簡介">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="Instant Noodle WU">
    <meta property="og:description" content="簡介">
    <meta property="og:image" content="./images/bg.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="Instant Noodle WU">
    <meta property="twitter:description" content="簡介">
    <meta property="twitter:image" content="./images/bg.jpg">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/resume.css">
    <link rel="stylesheet" href="./css/animate.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark>
        <div class=" container">
        <a class="navbar-brand" href="#">
            <img src="./images/favicon.ico" width="30" height="30" class="d-inline-block" style="color:white">
            Instant Noodle WU
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.html">
                        <i class="fas fa-home"></i> Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about_me.php">
                        <i class="fas fa-tree"></i> About me
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./portfolio.php">
                        <i class="fas fa-shopping-cart"></i> Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login_index.php">
                        <i class="fas fa-shopping-cart"></i> Login
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="container" id="content">
        <div class="row bounceIn wow">
            <div class="col-12 my-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/01.jpg" class="d-block w-100 h-100 object-fit ">
                            <div class="carousel-caption">
                                <h5> Battlefield V </h5>
                                <p> Let's do some kill </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/02.jpg" class="d-block w-100 h-100 object-fit ">
                            <div class="carousel-caption">
                                <h5> PlayStaion 4</h5>
                                <p> Let's play some game </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/03.jpg" class="d-block w-100 h-100 object-fit ">
                            <div class="carousel-caption">
                                <h5> WONDER WOMAN </h5>
                                <p> Gal Gadot-Varsano </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
</body>
</html>