<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
            <div class="col-6">
                <h1>管理員登入</h1>
                <form action="api/login_api.php" method="post">
                    <div>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" name="acc" id="acc" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="password" name="pw" id="pw" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                            <button type="button" class="btn btn-outline-dark"><input type="submit" value="登入"></button>
                            <button type="button" class="btn btn-outline-dark"><input type="reset" value="重置"></button>
                        </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- <form action="api/login_api.php" method="post">
        <table>
            <tr>
                <td>帳號: </td>
                <td><input type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td>密碼: </td>
                <td><input type="password" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td colspan="2" class=""></td>
                <input type="submit" value="登入">
                <input type="reset" value="重置">
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form> -->
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
</body>

</html>