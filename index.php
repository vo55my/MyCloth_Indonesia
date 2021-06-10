<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Slide/Logo.png">
    <title>MyCloth Indonesia</title>
    <style>
        .caption a {
            margin: 15px;
        }

        footer img {
            padding: 6px;
        }
    </style>
</head>

<body id="home" class="scrollspy">
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="black">
            <div class="container">
                <div class="nav-wrapper">
                    <img class="brand-logo responsive-img" src="assets/img/Slide/Logo.png">
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons large">menu</i></a>
                    <ul class="red-text text-darken-2 right hide-on-med-and-down">
                        <li class="waves-effect waves-light"><a href="php/login.php">Login</a></li>
                        <li class="waves-effect waves-light"><a href="#about">About</a></li>
                        <li class="waves-effect waves-light"><a href="#toko">Store</a></li>
                        <li class="waves-effect waves-light"><a href="#edition">Edition</a></li>
                        <li class="waves-effect waves-light"><a href="#katalog">Katalog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="php/login.php" class="waves-effect waves-light">Login</a></li>
        <li><a href="#about" class="waves-effect waves-light">About</a></li>
        <li><a href="#toko" class="waves-effect waves-light">Store</a></li>
        <li><a href="#edition" class="waves-effect waves-light">Edition</a></li>
        <li><a href="#katalog" class="waves-effect waves-light">Katalog</a></li>
    </ul>

    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/img/Slide/Black.png">
                <div class="caption center-align">
                    <h2 class="red-text text-darken-3">Welcome</h2>
                    <h5 class="red-text text-darken-3">- MyCloth Indonesia -</h5>
                    <a href="#about" class="btn waves-effect waves-light pulse red darken-2 hoverable">Get Started</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- about -->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center red-text text-darken-3">About Us</h3>
                <div class="col m4 s4 right-align">
                    <img src="assets/img/Slide/Logo.png">
                </div>
                <div class="col m6 s8 left-align">
                    <blockquote>
                        <h5 class="red-text text-darken-2">Perkenalkan, MyCloth Indonesia</h5>
                        <p>MyCloth Indonesia adalah brand clothing asal jakarta yang berdiri tahun 2020 dan kini sudah mencapai pasar indonesia karena bahan yang bagus dan desain yang sesuai dengan trend masa kini.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- toko -->
    <div id="toko" class="parallax-container scrollspy">
        <div class="parallax"><img src="assets/img/Slide/Parallax.png"></div>

        <div class="container toko">
            <h3 class="center red-text text-darken-2">Find Us</h3>
            <div class="row">
                <div class="col l4 m4 s12 center">
                    <img src="assets/img/Toko/Shoppe.png" class="responsive-img">
                </div>
                <div class="col l4 m4 s12 center">
                    <img src="assets/img/Toko/Tokopedia.png" class="responsive-img">
                </div>
                <div class="col l4 m4 s12 center">
                    <img src="assets/img/Toko/Bukalapak.png" class="responsive-img">
                </div>
            </div>
        </div>
    </div>

    <!-- edition -->
    <section id="edition" class="edition red darken-1 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center white-text">Edition</h3>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="card-image hoverable">
                            <img src="assets/img/Edition/Bike.png" class="responsive-img materialboxed">
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="card-image hoverable">
                            <img src="assets/img/Edition/BW.png" class="responsive-img materialboxed">
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="card-image hoverable">
                            <img src="assets/img/Edition/Games.png" class="responsive-img materialboxed">
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="card-image hoverable">
                            <img src="assets/img/Edition/Indonesia.png" class="responsive-img materialboxed">
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="card-image hoverable">
                            <img src="assets/img/Edition/PUBG.png" class="responsive-img materialboxed">
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="card-image hoverable">
                            <img src="assets/img/Edition/Space.png" class="responsive-img materialboxed">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- katalog -->
    <section id="katalog" class="katalog scrollspy">
        <div class="container">
            <h3 class="center red-text text-darken-3">Katalog</h3>
            <div class="row">
                <div class="col m3 s12">
                    <img src="assets/img/Katalog/SPACE-02.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="assets/img/Katalog/INA-02.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="assets/img/Katalog/BLACK-01.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="assets/img/Katalog/WHITE-02.png" class="responsive-img materialboxed">
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12">
                    <img src="assets/img/Katalog/PUBG-02.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="assets/img/Katalog/BIKE-01.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="assets/img/Katalog/BIKE-02.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="assets/img/Katalog/GAMES-02.png" class="responsive-img materialboxed">
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="page-footer red darken-2 white-text center-align">
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <h5 class="white-text">Follow Us</h5>
                    <img src="assets/img/Sosmed/facebook.png" width="70px">
                    <img src="assets/img/Sosmed/instagram.png" width="70px">
                    <img src="assets/img/Sosmed/whatsapp.png" width="70px">
                </div>
                <div class="col s12 m6">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="white-text" href="#home">Home</a></li>
                        <li><a class="white-text" href="#about">About</a></li>
                        <li><a class="white-text" href="#toko">Store</a></li>
                        <li><a class="white-text" href="#edition">Edition</a></li>
                        <li><a class="white-text" href="#katalog">Katalog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright red darken-2">
            <div class="container white-text">Copyright © 2020 MyCloth Indonesia</div>
        </div>
    </footer>

    <div class="clear"></div>

    <!-- javascript -->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 600,
            transition: 600,
            interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 40
        });
    </script>
</body>

</html>