<?php $this->beginContent('//layouts/main'); ?>
<div class="container"> <!-- container-fluid -->
    <section class="services-wrapper row">
        <div class="services-menu col-md-3">
            <div class="header-title">
                <h1>Soluciones</h1>
            </div>
            <nav class="panel-group" id="services-accordion" role="navigation">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#services-accordion" href="#service-consultoria-content">
                                Soluciones In-House
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse <?php echo $this->checkMenuIn('In-House'); ?>" id="service-consultoria-content">
                        <div class="panel-body">
                            <ul class="list-services">
                                <li class="<?php echo $this->checkPageActive('Spectrum Fondos'); ?>"><a href="<?php echo $this->createUrl('soluciones/spectrum-fondos/'); ?>">Spectrum Fondos</a></li>
                                <li class="<?php echo $this->checkPageActive('Spectrum e-Factoring'); ?>"><a href="<?php echo $this->createUrl('soluciones/spectrum-efactoring/'); ?>">Spectrum e-Factoring</a></li>
                                <li class="<?php echo $this->checkPageActive('Spectrum Gestion de Cobranzas'); ?>"><a href="<?php echo $this->createUrl('soluciones/spectrum-gestion-cobranza/'); ?>">Spectrum Gestión de Cobranzas</a></li>
                                <li class="<?php echo $this->checkPageActive('Spectrum GNSYS - Cumplimiento Normativo'); ?>"><a href="<?php echo $this->createUrl('soluciones/spectrum-gnsys/'); ?>">Spectrum GNSYS - Cumplimiento Normativo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <main class="col-md-9" id="main-content" role="main">
            <div class="services-content">
                <?php echo $content; ?>
            </div>
        </main>
    </section>
</div><!-- content -->
<?php $this->endContent(); ?>