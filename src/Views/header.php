<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./public/plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="./public/plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="./public/plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="./public/plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="./public/plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="./public/plugins/venobox/venobox.css">


    <!-- Main Stylesheet -->
    <link href="./public/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="./public/images/favicon.png" type="image/x-icon">
    <link rel="icon" href=".public/images/favicon.png" type="image/x-icon">

</head>

<body>

    <!--başlık -->
    <header class="fixed-top header">
        <!--üst başlık -->
        <div class="top-header py-2 bg-white">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 text-center text-lg-left">
                        <a class="text-color mr-3" href="?iletisim"><strong>İletişim</strong>+905585858585</a>
                        <ul class="list-inline d-inline">
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 text-center text-lg-right">
                        <ul class="list-inline">

                            <li class="list-inline-item">
                                <?php if(isset($_SESSION["login"]) && $_SESSION["login"]==true) { ?>
                                    <a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="?cikis">ÇIKIŞ YAP</a>
                                    <?php if($_SESSION["role"]=="admin") { ?>
                                    <a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="?admin">YÖNETİM</a>
                                    <?php } ?> 
                                <?php } else { ?>
                                    <a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">GİRİŞ YAP</a>
                                    <a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">KAYIT</a>    
                                <?php } ?>    
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- çubuk -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a class="navbar-brand" href="/"><img src="./public/images/logos.png" width=95% height=90px alt="logo"></a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="?">Anasayfa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?hakkimizda">Hakkımızda</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="?dersler">Dersler</a>
                            </li>
                       
                           
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Sayfalar
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="?egitmenler">Eğitmenler</a>
                                 
                                    <a class="dropdown-item" href="?sinav">Örnek Sınav</a>
                                    <a class="dropdown-item" href="?belge">Sürücü Belgeleri</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?iletisim">İLETİŞİM</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- başlık -->
    <!-- kayıt -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>KAYIT OL</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login">
                        <form action="/" method="POST" class="row">

                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupName" name="firstname" placeholder="Adı" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupName" name="lastname" placeholder="Soyadı" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupEmail" name="job" placeholder="Meslek" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="adress" name="address" placeholder="Adres" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control mb-3" id="signupEmail" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control mb-3" id="signupPassword" name="password" placeholder="Şifre" required>
                            </div>
                            <div class="col-12">
                                <input name="signup" type="submit" class="btn btn-primary" value="Kayıt Ol">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--giriş -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>GİRİŞ YAP</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/" method="POST" class="row">

                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="Email" name="email" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="loginPassword" name="password" placeholder="Şifre">
                        </div>
                        <div class="col-12">
                            <input name="signin" type="submit" class="btn btn-primary" value="Giriş Yap">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
