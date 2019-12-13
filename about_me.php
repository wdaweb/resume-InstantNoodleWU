<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me</title>
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
    <style>
        table {
            background: white;
            border-collapse: collapse;
            border-radius: 10px;
            margin: 10px;
        }
        td {
            color: black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark>
        <div class=" container">
        <a class="navbar-brand" href="#">
            <img src="./images/favicon.ico" width="30" height="30" class="d-inline-block" style="color:white" href="./index.html">
            Instant Noodle WU
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <div class="container">
        <div class="row bounceIn wow justify-content-center">
            <div class="col-10 text-white">
                <div class="card" style="width: 18rem;">
                    <img src="./images/cool.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-dark">吳勻皓</p>
                        <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <script>
                            $.get("./api/memberCentre_api1 copy.php", function(res) {
                                console.log(res);
                                $("#table1").html(res);
                            })
                        </script>
                        <table id="table1"></table>
                    </div>
                    <div class="col-12">
                    <script>
                            $.get("./api/memberCentre_api2 copy.php", function(res) {
                                console.log(res);
                                $("#table2").html(res);
                            })
                        </script>
                        <table id="table2"></table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <script>
                            $.get("./api/memberCentre_api3 copy.php", function(res) {
                                console.log(res);
                                $("#table3").html(res);
                            })
                        </script>
                        <table id="table3"></table>
                    </div>
                    <div class="col-12">
                    <script>
                            $.get("./api/memberCentre_api4 copy.php", function(res) {
                                console.log(res);
                                $("#table4").html(res);
                            })
                        </script>
                        <table id="table4"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
</body>

</html>