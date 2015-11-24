<?php /* @var $this Controller */ ?>
<a class="sr-only" href="#main-content">Saltar navegacion</a>
<header class="header" role="banner">
    <div class="container">
        <section class="banner">
            <figure class="logo">
                <a href="<?php echo $this->baseUrl; ?>/" style="display: inline-block;"><img src="<?php echo $this->baseUrl; ?>/images/logo.png" alt="Logo - TAM Consulting"/></a>
            </figure>
            <ul class="site-lang">
                <li><a href="#">English</a></li>
                <li class="active"><a href="#">Español</a></li>
            </ul>
            <button class="site-navigation-toggle visible-xs visible-sm" data-toggle="collapse" data-target="#collapse-site-navigation" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="clearfix visible-xs visible-sm"></div>
            <nav class="site-navigation" role="navigation">
                <ul class="nav nav-pills collapse navbar-collapse" id="collapse-site-navigation">
                    <li class="<?php echo $this->checkPageActive('Inicio'); ?>"><a href="<?php echo $this->baseUrl; ?>/">Inicio</a></li>
                    <li class="<?php echo $this->checkPageActive('Nosotros, Vision'); ?>">
                        <a href="#">Nosotros</a>
                        <ul class="sub-nav">
                            <li class="<?php echo $this->checkPageActive('Nosotros'); ?>"><a href="<?php echo $this->createUrl('nosotros/'); ?>">Nosotros</a></li>
                            <li class="<?php echo $this->checkPageActive('Vision'); ?>"><a href="<?php echo $this->createUrl('nosotros/vision-mision'); ?>">Visión y Misión</a></li>
                            <!-- <li><a href="#">Cultura</a></li>
                            <li><a href="#">Staff Profesional</a></li> -->
                        </ul>
                    </li>
                    <li class="<?php echo $this->checkPageActive('Soluciones, Spectrum Fondos, Spectrum e-Factoring, Spectrum Gestion de Cobranzas, Spectrum GNSYS - Cumplimiento Normativo'); ?>"><a href="<?php echo $this->createUrl('soluciones/'); ?>">Soluciones</a></li>
                    <li class="<?php echo $this->checkPageActive('Servicios, Balanced Scorecard, Knowledge Management, Implementacion SAP, Soporte y Mejora SAP, Fabrica de Software, Desarrollo de Aplicaciones Moviles, Migracion y Reingenieria de Software, Mantenimiento de Aplicaciones'); ?>"><a href="<?php echo $this->createUrl('servicios/'); ?>">Servicios</a></li>
                    <li class="<?php echo $this->checkPageActive('Clientes-Financiero, Clientes-Mineria'); ?>">
                        <a href="#">Clientes</a>
                        <ul class="sub-nav">
                            <li class="<?php echo $this->checkPageActive('Clientes-Financiero'); ?>"><a href="<?php echo $this->createUrl('clientes/sector-financiero'); ?>">Sector Financiero</a></li>
                            <li class="<?php echo $this->checkPageActive('Clientes-Mineria'); ?>"><a href="<?php echo $this->createUrl('clientes/sector-mineria-empresarial'); ?>">Sector Minería y Empresarial</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#">Partnership</a></li> -->
                    <li class="<?php echo $this->checkPageActive('Contacto'); ?>"><a href="<?php echo $this->createUrl('contacto/'); ?>">Contacto</a></li>
                    <li class="<?php echo $this->checkPageActive('Curso Google Analytics'); ?>"><a href="<?php echo $this->createUrl('cursogoogleanalytics/'); ?>">Curso Google Analytics</a></li>

					<li><a href="http://tam-c.aptitus.com/" target="_blank">Trabaja con nosotros</a></li>

                </ul>
            </nav>
        </section>
    </div>
</header>
<section class="wrapper-carousel">
    <div class="container">
        <div class="carousel slide" id="carousel-tam" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-tam" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-tam" data-slide-to="1"></li>
                <li data-target="#carousel-tam" data-slide-to="2"></li>
                <li data-target="#carousel-tam" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo $this->baseUrl; ?>/images/slider-1.jpg" alt="0"/>
                    <div class="carousel-caption">
                        <h2>
                            Proveemos servicios de alta calidad, <br/>estructurados en metodologias y
                            herramientas <br/>y enfocados en tecnologías líderes.
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo $this->baseUrl; ?>/images/slider-2.jpg" alt="1"/>
                    <div class="carousel-caption">
                        <h2>
                            Experiencia de más de 12 años en el mercado con soluciones <br/>
                            que suman valor a nuestros clientes de los <br/>
                            sectores empresarial, financiero y minero.
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo $this->baseUrl; ?>/images/slider-3.jpg" alt="2"/>
                    <div class="carousel-caption">
                        <h2>
                            Brindamos servicios de analisis y rediseño de procesos<br/>
                            con una experimentada y profesional incorporación de las
                            tecnologías de la información para el sector minería.
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo $this->baseUrl; ?>/images/slider-4.jpg" alt="3"/>
                    <div class="carousel-caption">
                        <h2>
                            Ofrecemos soluciones desarrolladas in-house <br/>
                            para el sector financiero producto de nuestra experiencia <br/>
                            de más de 20 años de nuestro equipo de consultores.
                        </h2>
                    </div>
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
    </div>
</section>