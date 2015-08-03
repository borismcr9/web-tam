<footer class="footer" role="contentinfo">
    <div class="info">
        <div class="container">
            <div class="row">
                <div class="info-group col-xs-6 col-md-2">
                    <ul>
                        <li class="parent"><a href="<?php echo $this->createUrl('/'); ?>">Inicio</a></li>
                        <li class="parent">
                            <span>Nosotros</span>
                            <ul>
                                <li><a href="<?php echo $this->createUrl('nosotros/'); ?>">Nosotros</a></li>
                                <li><a href="<?php echo $this->createUrl('nosotros/vision-mision'); ?>">Visión y Misión</a></li>
                                <!-- <li><a href="#">Cultura</a></li>
                                <li><a href="#">Staff Profesional</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="info-group col-xs-6 col-md-2">
                    <ul>
                        <li class="parent">
                            <span>Soluciones</span>
                            <ul>
                                <li class="nested">
                                    <span>Soluciones In-House</span>
                                    <ul>
                                        <li><a href="<?php echo $this->createUrl('soluciones/spectrum-fondos'); ?>">Spectrum Fondos</a></li>
                                        <li><a href="<?php echo $this->createUrl('soluciones/spectrum-efactoring'); ?>">Spectrum e-Factoring</a></li>
                                        <li><a href="<?php echo $this->createUrl('soluciones/spectrum-gestion-cobranza'); ?>">Spectrum Gestión de Cobranzas</a></li>
                                        <li><a href="<?php echo $this->createUrl('soluciones/spectrum-gnsys'); ?>">Spectrum GNSYS-Cumplimiento Normativo</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Add the extra clearfix for only the required viewport -->
                <div class="clearfix visible-xs"></div>
                <div class="info-group col-xs-6 col-md-4 more">
                    <ul>
                        <li class="parent">
                            <span>Servicios</span>
                            <ul>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <li class="nested">
                                            <span>Servicios TI</span>
                                            <ul>
                                                <li><a href="<?php echo $this->createUrl('servicios/fabrica-de-software'); ?>">Fábrica de Software</a></li>
                                                <li><a href="<?php echo $this->createUrl('servicios/desarrollo-de-aplicaciones-moviles'); ?>">Desarrollo de Aplicaciones Móviles</a></li>
                                                <li><a href="<?php echo $this->createUrl('servicios/mantenimiento-de-aplicaciones'); ?>">Mantenimiento de Aplicaciones</a></li>
                                                <li><a href="<?php echo $this->createUrl('servicios/migracion-reingenieria-de-software'); ?>">Migración y Reingeniería de Software</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <li class="nested">
                                            <span>Consultoría SAP</span>
                                            <ul>
                                                <li><a href="<?php echo $this->createUrl('servicios/implementacion-sap'); ?>">Servicios de Implementación</a></li>
                                                <li><a href="<?php echo $this->createUrl('servicios/soporte-mejora-sap'); ?>">Servicios de Soporte y Mejora</a></li>
                                            </ul>
                                        </li>
                                        <li class="nested">
                                            <span>Consultoría</span>
                                            <ul>
                                                <li><a href="<?php echo $this->createUrl('servicios/balanced-scorecard'); ?>">Balanced Scorecard</a></li>
                                                <li><a href="<?php echo $this->createUrl('servicios/knowledge-management'); ?>">Knowledge Managment</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="info-group col-xs-6 col-md-2 more">
                    <ul>
                        <li class="parent">
                            <span>Clientes</span>
                            <ul>
                                <li><a href="<?php echo $this->createUrl('clientes/sector-financiero'); ?>">Sector Financiero</a></li>
                                <li><a href="<?php echo $this->createUrl('clientes/sector-mineria-empresarial'); ?>">Sector Minería y Empresarial</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="info-group col-xs-12 col-md-2">
                    <ul>
                        <li class="parent">
                            <span>Contacto</span>
                            <address>
                                Av. Republica de Panama 3563 Of. 701B<br/>
                                San Isidro, Lima - Perú<br/>
                                <abbr title="Telefono">Telf.</abbr> (511) 421-3488 <br/>
                                <a href="mailto:contacto@tam-c.com">contacto@tam-c.com</a>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <div class="container">
            <span>&copy;TAM 2002 - <?php echo date('Y'); ?> . Todos los derechos reservados.</span>
        </div>
    </div>
</footer>