<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Leiricanal</title>
    <link rel="icon" type="image/x-icon" href="/img/icons/favicon.ico">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <style>

        #myNavbar{
            border-bottom: 4px solid #1f1475;
        }
        .navbar-nav a{
            color: red;
            font-family: "Helvetica";

        }

        .navbar.navbar-light .breadcrumb .nav-item .nav-link, .navbar.navbar-light .navbar-nav .nav-item .nav-link{
            color:rgba(0,0,0,.5);
        }
        .header p{
            font-size:20px;
        }

        .carousel .item>img {
            position: absolute;
            top: 0;
            left: 0;
            max-width: 100%;
            height: 100%;
            background-image: center;
        }
        .carousel, .carousel-inner , .carousel-item{
            max-height: 100vh;
        }

        .carousel-inner > .item > img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 500px;
        }


        .carousel-caption{
            background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.1) 4%, rgba(0,0,0,0.5) 32%, rgba(0,0,0,1) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(4%,rgba(0,0,0,0.1)), color-stop(32%,rgba(0,0,0,0.5)), color-stop(100%,rgba(0,0,0,1))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* IE10+ */
            background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
            width: 100%;
            left: 0px;
            right: 0px;
            bottom: 0px;
            text-align: left;
            padding-left: 15%;
            padding-right: 15%;
            height: 25vh;
            text-align: justify;
        }

        .carousel-caption h5{
            font-size: 72px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-family: "Arial";
        }

        .carousel-caption p{
            font-size: 20px;
            font-family: "Arial";
        }

        .navbar-nav a{

        }
        .header{
            margin-top: 10vh;
            margin-bottom: 10vh;
            text-align: center;
        }

        .video{
            background-image: url('img/video-bg.jpg');
        }

        .company-features h3{
            margin-bottom: 20px;
            margin-top: 25px;
        }
        .product-features{
            color:white;
            background-size: 100% 100%;
            background-position: center;
            height: 100%;

        }

        .display{
            background-color: rgba(39, 40, 43,0.8);
            color: white;
            transition: 0.5s;
            opacity: 0;
            position: relative;
            height: 100%;
            text-align: center;
            line-height: 36vh;
        }

        .display h3 {
            display: inline-block;
            vertical-align: middle;
            line-height: normal;
        }

        .show{
            opacity: 1;
        }

        .zoom-in{
            background-size: 120% 120%;
            transition: 1s;
        }


        html {
            scroll-padding-top: 10vh;
            scroll-behavior: smooth;
        }

        body {
            position: relative;
        }
        #section3 {padding-top:8vh;}
        #contacto {padding-top:8vh;color: #fff; background-color: #00bcd4;}

        ul.social ul{
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        ul.social li{
            float: left;
        }
        footer{
            background-color:black;
            height: 20vh;
            color:white;

        }
        #footer{
            display: table;
            margin: 0 auto;
        }

    </style>

</head>
<body>
<div id="app">
        <nav id="myNavbar" class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="img/logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/#home">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#quem-somos">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#section2">Produtos e Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galeria">Galeria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#contacto">Contacto</a>
                            </li>

                        </ul>

                    <!-- Authentication Links
                        <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
<?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
<?php endif; ?>
                        -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
    $( '.display' ).hover(
        function() {
            $( this ).addClass( "show"  );
            $(this).parent().addClass( "zoom-in");
        }, function() {
            $( this).removeClass( "show"  );
            $(this).parent().removeClass( "zoom-in"  );
        }
    );


</script>
</body>
</html>
<?php /**PATH C:\wamp64\www\LeiricanalHome\resources\views/layouts/app.blade.php ENDPATH**/ ?>