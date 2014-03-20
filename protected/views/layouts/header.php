<?php /* @var $this Controller */ ?>
<a class="sr-only" href="#main-content">Saltar navegacion</a>
<header class="header" role="banner">
    <div class="container">
        <section class="banner">
            <figure class="logo">
                <img src="<?php echo $this->baseUrl; ?>/images/logo.png" alt="Logo - TAM Consulting"/>
            </figure>
            <ul class="site-lang">
                <li><a href="#">English</a></li>
                <li class="active"><a href="#">Español</a></li>
            </ul>
            <!-- visible-xs visible-sm -->
            <button class="site-navigation-toggle visible-xs visible-sm" data-toggle="collapse" data-target="#collapse-site-navigation" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <nav class="site-navigation" role="navigation">
                <ul class="nav nav-pills collapse navbar-collapse" id="collapse-site-navigation">
                    <li class="active"><a href="#">Inicio</a></li>
                    <li>
                        <a href="#">Nosotros</a>
                        <ul class="sub-nav">
                            <li class="active"><a href="#">Nosotros</a></li>
                            <li><a href="#">Visión y Misión</a></li>
                            <li><a href="#">Cultura</a></li>
                            <li><a href="#">Staff Profesional</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Soluciones</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Partnership</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>


            <!-- <nav class="site-navigation navbar navbar-inverse" role="navigation">
                <div class="container-fluid"> -->
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-site-navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="collapse-site-navigation">
                        <ul class="site-links">
                            <div class="row">
                                <div class="col-md-2"><li class="active"><a href="#">Inicio</a></li></div>
                                <div class="col-md-2"><li><a href="#">¿Qué nos hace diferentes?</a></li></div>
                                <div class="col-md-2"><li><a href="#">Productos</a></li></div>
                                <div class="col-md-2"><li><a href="#">Servicios</a></li></div>
                                <div class="col-md-2"><li><a href="#">Clientes y Partners</a></li></div>
                                <div class="col-md-2"><li><a href="#">Contacto</a></li></div>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav> -->


        </section>
    </div>
</header>
<div id="carousel-tam" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-tam" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-tam" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo $this->baseUrl; ?>/images/slider-1.jpg" alt="0"/>
            <!-- <div class="container">
                <div class="carousel-caption">
                    <span>hola</span>
                </div>
            </div> -->
        </div>
        <div class="item">
            <img src="<?php echo $this->baseUrl; ?>/images/slider-2.jpg" alt="1"/>
            <!-- <div class="carousel-caption">
                <span>adios</span>
            </div> -->
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-tam" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-tam" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>