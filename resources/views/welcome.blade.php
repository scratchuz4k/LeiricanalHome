@extends('layout.app')

@section('content')
<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand align-self-center" href="#"><img src="img/logo.png" alt="Leiricanal logo" /></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a data-scroll href="index.html#home">Home</a></li>
                    <li><a data-scroll href="index.html#services">Quem Somos</a></li>
                    <li><a data-scroll href="index.html#portfolio">Produtos e Serviços</a></li>
                    <li><a data-scroll href="index.html#about">Distinções</a></li>
                    <li><a data-scroll href="index.html#blog">Portfolio</a></li>
                    <li><a data-scroll href="index.html#contact">Contactos e Localização</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="home" class="jumbotron slide slide-fullscreen">
    <div class="container">
        <span>Awesome theme</span>
        <h1>Weclome to the seven theme</h1>
        <a href="#" class="btn btn-lg btn-primary button--ujarak">Download</a>
    </div>
</div>
<!-- Start services section -->
<section id="services">
    <div class="container">
        <header>
            <h2 class="wow fadeInDown">Leiricanal - Quem Somos</h2>
            <p class="wow fadeInUp" data-wow-delay="0.1s">A Leiricanal – Instalações Térmicas, Lda é uma Empresa fundada em 1995,
                constituída por uma equipa dinâmica, solidamente implantada no mercado nacional com um know-how reconhecido nas diversas áreas da sua actividade,
                tendo orgulho na qualidade dos seus serviços.
            </p>
        </header>
        <div class="row">
            <div class="col-md-4">
                <div class="service-item text-right wow fadeInUp">
                    <div class="service-text">
                        <h3>Empresa Aplauso 2018</h3>
                        <p>“Distinção concedida pela visão empreendedora, contributo para a economia e envolvimento com o Millenium BCP”
                        </p>
                    </div>
                    <div class="service-icon">
                        <img src="img/cliente_aplauso.png" alt="Seven HTML theme" width="80px" height="80px"/>
                    </div>
                </div>
                <div class="service-item text-right wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-text">
                        <h3>PME Líder 2018</h3>
                        <p>Estatuto atribuido pela qualidade do seu desempenho e perfil de risco, como PME Líder 2015, no âmbito do Programa
                            FINCRESCE.
                        </p>
                    </div>
                    <div class="service-icon">
                        <img src="img/pme_lider.png" alt="Seven HTML theme" width="70px" height="80px"/>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/phone.png" alt="Phone" />
            </div>
            <div class="col-md-4">
                <div class="service-item text-left wow fadeInUp">
                    <div class="service-text">
                        <h3>Daikin Clube Gold D.pt</h3>
                        <p>Uma distinção da Daikin que reconhece a nossa performance e reforça a parceria comercial com a marca em Portugal.
                        </p>
                    </div>
                    <div class="service-icon">
                        <img src="img/daikingold.png" alt="Seven HTML theme" width="80px" height="80px"/>
                    </div>
                </div>
                <div class="service-item text-left wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-text">
                        <h3>Certif</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            empor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="service-icon">
                        <img src="img/certif.png" alt="Seven HTML theme" width="80px" height="80px"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="video-wrapper clearfix">
        <div class="col-md-offset-1 col-md-10 video">
            <a href="https://www.youtube.com/watch?v=CnYtWWDor2s" id="popup-youtube" class="circled fa fa-play" ></a>
            <h3>Play video and be amazed</h3>
            <p>Than lovely frames</p>
        </div>
    </div>
</section>
<!-- End services section -->
<!-- Start portfolio section -->
<section id="portfolio">
    <header>
        <h2 class="wow fadeInDown">What we done so far</h2>
        <p class="wow fadeInUp" data-wow-delay="0.1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
        </p>
    </header>
    <div class="content" id="filter-controls">
        <nav class="centered-pills clearfix">
            <ul class="nav nav-pills" >
                <li><a href="javascript:void(0);" class="filter active" data-filter="all">All</a></li>
                <li><a href="javascript:void(0);" class="filter" data-filter=".mockups">Mockups</a></li>
                <li><a href="javascript:void(0);" class="filter" data-filter=".icons">Icons</a></li>
                <li><a href="javascript:void(0);" class="filter" data-filter=".ui-kits">UI Kits</a></li>
                <li><a href="javascript:void(0);" class="filter" data-filter=".templates">Templates</a></li>
            </ul>
        </nav>
        <div class="projects row">
            <figure class="mix all portfolio-item icons col-md-3 col-sm-6" >
                <img class="img-responsive" src="img/portfolio/adena.png" alt="Adena icons pack" />
                <figcaption class="mask">
                    <h3>Adena icons pack</h3>
                    <span>Icons</span>
                </figcaption>
            </figure>
            <figure class="mix portfolio-item ui-kits col-md-3  col-sm-6">
                <img class="img-responsive" src="img/portfolio/atom.png" alt="Atom UI Kit" />
                <figcaption class="mask">
                    <h3>Atom UI Kit</h3>
                    <span>UI Kits</span>
                </figcaption>
            </figure>
            <figure class="mix portfolio-item icons col-md-3  col-sm-6">
                <img class="img-responsive" src="img/portfolio/flat.png" alt="60 flat icons" />
                <figcaption class="mask">
                    <h3>60 flat icons</h3>
                    <span>Icons</span>
                </figcaption>
            </figure>
            <figure class="mix portfolio-item mockups col-md-3  col-sm-6">
                <img class="img-responsive" src="img/portfolio/ipad.jpg" alt="iPad mockup" />
                <figcaption class="mask">
                    <h3>iPad Mockup</h3>
                    <span>Mockups</span>
                </figcaption>
            </figure>
            <figure class="mix portfolio-item templates col-md-3  col-sm-6">
                <img class="img-responsive" src="img/portfolio/ket.jpg" alt="Ket singlpage PSD template" />
                <figcaption class="mask">
                    <h3>Ket Web template</h3>
                    <span>Tempaltes</span>
                </figcaption>
            </figure>
            <figure class="mix portfolio-item templates col-md-3  col-sm-6">
                <img class="img-responsive" src="img/portfolio/mentum.png" alt="Mentum web theme" />
                <figcaption class="mask">
                    <h3>Mentum web theme</h3>
                    <span>Templates</span>
                </figcaption>
            </figure>
            <figure class="mix portfolio-item web mockups col-md-3  col-sm-6">
                <img class="img-responsive" src="img/portfolio/modern-phone.jpg" alt="Smartphone mockup" />

                <figcaption class="mask">
                    <h3>Smartphone mockup</h3>
                    <span>Mockups</span>
                </figcaption>
            </figure>
            <figure class="mix portfolio-item print ui-kits col-md-3  col-sm-6">
                <img class="img-responsive" src="img/portfolio/sven.jpg" alt="Sven UI Kit" />
                <figcaption class="mask">
                    <h3>Sven UI Kit</h3>
                    <span>UI Kits</span>
                </figcaption>
            </figure>

        </div>
    </div>
</section>
<!-- End portfolio section -->
<!-- Start about section -->
<section id="about">
    <div class="baner">
        <div class="container">
            <div class="row">
                <div class="col-md-4 box">
                    <h3>Some words about us</h3>
                    <span class="delimiter"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <header>
            <h2 class="wow fadeInDown">Meet our team</h2>
            <p class="wow fadeInUp" data-wow-delay="0.1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
            </p>
        </header>
        <div class="row">
            <div class="col-sm-4 wow fadeInUp">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="img/team/team-3.jpg" class="img-responsive" alt="Team member 1">
                        <div class="overlay">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                            <ul class="social">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="basic-info">
                        <h4>John Doe</h4>
                        <span>Graphic designer</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="img/team/team-2.jpg" class="img-responsive" alt="Team member 1">
                        <div class="overlay">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                            <ul class="social">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="basic-info">
                        <h4>John Doe</h4>
                        <span>Graphic designer</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="img/team/team-1.jpg" class="img-responsive" alt="Team member 3">
                        <div class="overlay">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                            <ul class="social">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="basic-info">
                        <h4>John Doe</h4>
                        <span>Graphic designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about section -->
<!-- Start blog section -->
<section id="blog" class="dark">
    <div class="container">
        <header>
            <h2 class="wow fadeInDown">Our Blog Stories</h2>
            <p class="wow fadeInUp" data-wow-delay="0.1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut.
            </p>
        </header>
    </div>
    <div class="blog-items clearfix">
        <div class="blog-item col-md-4 wow fadeInLeft">
            <img src="img/blog-1.png" align="Blog post" class="img-responsive" alt="Blog post" />
            <div class="meta-data">
                <h3>Awesome blog title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco.
                </p>
                <a href="#">Read More...</a>
            </div>
        </div>
        <div class="blog-item col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
            <img src="img/blog-2.png" align="Blog post" class="img-responsive" alt="Blog post" />
            <div class="meta-data">
                <h3>Awesome blog title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco.
                </p>
                <a href="#">Read More...</a>
            </div>
        </div>
        <div class="blog-item col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
            <img src="img/blog-3.png" align="Blog post" class="img-responsive" alt="Blog post" />
            <div class="meta-data">
                <h3>Awesome blog title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation.
                </p>
                <a href="#">Read More...</a>
            </div>
        </div>
    </div>
    <div class="cleadfix">
        <div class="text-center load-more">
            <a href="#" class="fa fa-plus circled"></a>
        </div>
    </div>
</section>
<!-- End blog section -->
<!-- Start  section -->
<section id="contact">
    <div class="container">
        <header>
            <h2 class="wow fadeInDown">Keep in touch</h2>
            <p class="wow fadeInUp" data-wow-delay="0.1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut.
            </p>
        </header>
        <form class="row">
            <div class="form-group col-md-6">
                <input name="name" type="text" placeholder="Name" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <input name="mail" type="email" placeholder="Email" class="form-control" />
            </div>
            <div class="form-group col-md-12">
                <input name="subject" type="subject" placeholder="Subject" class="form-control" />
            </div>
            <div class="form-group col-md-12">
                <textarea name="message" class="form-control" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-lg btn-primary">Send</button>
            </div>
        </form>
        <div class="address">
            <div class="row">
                <div class="col-md-4 text-center wow zoomIn">
                    <i class="fa fa-phone circled"></i>
                    <span>847-939-9359</span>
                </div>
                <div class="col-md-4 text-center wow zoomIn" data-wow-delay="0.2s">
                    <i class="fa fa-envelope circled"></i>
                    <span>sevenmail@sevenmail.com</span>
                </div>
                <div class="col-md-4 text-center wow zoomIn" data-wow-delay="0.4s">
                    <i class="fa fa-globe circled"></i>
                    <span>4116 Oak Avenue</span>
                    <span>Chickago, IL 60607</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact section -->
<!-- Start footer section -->
<footer>
    <div class="container">
        <p class="copyright">
            &copy; 2015 All rights reserved - Theme by <a href="http://graphberry.com" target="_blank">
                <b>GraphBerry</b></a>
        </p>
        <ul class="social">
            <li class="wow bounceIn"><a href="http://goo.gl/RqhEjP" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="wow bounceIn" data-wow-delay="0.1s"><a href="http://goo.gl/hUfpSB" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li class="wow bounceIn" data-wow-delay="0.2s"><a href="http://goo.gl/k9zAy5" target="_blank"><i class="fa fa-dribbble"></i></a></li>
            <li class="wow bounceIn" data-wow-delay="0.3s"><a href="http://goo.gl/FPjuCE" target="_blank"><i class="fa fa-behance"></i></a></li>
            <li class="wow bounceIn" data-wow-delay="0.4s"><a href="http://goo.gl/UYjGTR" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li class="wow bounceIn" data-wow-delay="0.5s"><a href="http://goo.gl/r4xzR4" target="_blank"><i class="fa fa-google"></i></a></li>
        </ul>
        <a href="index.html#home" data-scroll class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
</footer>
<!-- End footer section -->


@endsection

