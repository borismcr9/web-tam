<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container"> <!-- container-fluid -->
    <section class="services-wrapper row">
        <div class="services-menu col-md-3">
            <div class="header-title">
                <h1>Servicios</h1>
            </div>
            <nav class="panel-group" id="services-accordion" role="navigation">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#services-accordion" href="#service-consultoria-content">
                                Consultoría
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse <?php echo $this->checkMenuIn('Consultoria'); ?>" id="service-consultoria-content">
                        <div class="panel-body">
                            <ul class="list-services">
                                <!-- <li class="<?php //echo $this->checkPageActive('Gestion Procesos BPM'); ?>"><a href="<?php //echo '#'//$this->createUrl('servicios/gestion-procesos-bpm/'); ?>">Gestion de Procesos BPM</a></li> -->
                                <!-- <li><a href="<?php //echo '#'//$this->createUrl('servicios/business-intelligence/'); ?>">Business Intelligence</a></li> -->
                                <li class="<?php echo $this->checkPageActive('Balanced Scorecard'); ?>"><a href="<?php echo $this->createUrl('servicios/balanced-scorecard/'); ?>">Balanced Scorecard</a></li>
                                <li class="<?php echo $this->checkPageActive('Knowledge Management'); ?>"><a href="<?php echo $this->createUrl('servicios/knowledge-management/'); ?>">Knowledge Management</a></li>
                                <!-- <li><a href="<?php //echo '#'//$this->createUrl('servicios/planeamiento-estrategico/'); ?>">Planeamiento Estrategico de TI</a></li> -->
                                <!-- <li><a href="<?php //echo '#'//$this->createUrl('servicios/seguridad-informacion/'); ?>">Seguridad de la Información</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#services-accordion" href="#service-consultoria-sap-content">
                                Consultoría SAP
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse <?php echo $this->checkMenuIn('Consultoria SAP'); ?>" id="service-consultoria-sap-content">
                        <div class="panel-body">
                            <ul class="list-services">
                                <li class="<?php echo $this->checkPageActive('Implementacion SAP'); ?>"><a href="<?php echo $this->createUrl('servicios/implementacion-sap/'); ?>">Servicios de Implementación</a></li>
                                <li class="<?php echo $this->checkPageActive('Soporte y Mejora SAP'); ?>"><a href="<?php echo $this->createUrl('servicios/soporte-mejora-sap/'); ?>">Servicios de Soporte y Mejora</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#services-accordion" href="#service-ti-content">
                                Servicios de TI
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse <?php echo $this->checkMenuIn('Servicios de TI'); ?>" id="service-ti-content">
                        <div class="panel-body">
                            <ul class="list-services">
                                <li class="<?php echo $this->checkPageActive('Fabrica de Software'); ?>"><a href="<?php echo $this->createUrl('servicios/fabrica-de-software/'); ?>">Fábrica de Software</a></li>
                                <li class="<?php echo $this->checkPageActive('Desarrollo de Aplicaciones Moviles'); ?>"><a href="<?php echo $this->createUrl('servicios/desarrollo-de-aplicaciones-moviles/'); ?>">Desarrollo de Aplicaciones Móviles</a></li>
                                <li class="<?php echo $this->checkPageActive('Mantenimiento de Aplicaciones'); ?>"><a href="<?php echo $this->createUrl('servicios/mantenimiento-de-aplicaciones/'); ?>">Mantenimiento de Aplicaciones</a></li>
                                <li class="<?php echo $this->checkPageActive('Migracion y Reingenieria de Software'); ?>"><a href="<?php echo $this->createUrl('servicios/migracion-reingenieria-de-software/'); ?>">Migración y Reingeniería de Software</a></li>
                                <!-- <li>Ingeniería de Software</li> -->
                                <!-- <li>Capacitación</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#services-accordion" href="#service-outsourcing-ti-content">
                                Outsourcing de TI
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="service-outsourcing-ti-content">
                        <div class="panel-body"> -->
                            <!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                            terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim
                            keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS. -->
                        <!-- </div>
                    </div>
                </div> -->
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