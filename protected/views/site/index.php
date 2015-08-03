<?php /* @var $this SiteController */ ?>
<main id="main-content" role="main">
    <div class="container">
        <div class="descriptions-home home row">
            <div class="description-item col-md-6">
                <img src="<?php echo $this->baseUrl; ?>/images/foto-diferentes.jpg" />
                <h4>Nosotros</h4>
                <p>
                    Conozca quienes somos, nuestras fortalezas y nuestra visión-misión como empresa.
                </p>
                <a href="<?php echo $this->createUrl('nosotros/'); ?>">ver más</a>
            </div>
            <div class="description-item col-md-6">
                <img src="<?php echo $this->baseUrl; ?>/images/foto-soluciones.jpg" />
                <h4>Especialistas en soluciones integrales</h4>
                <p>
                    en el sector tecnológico y de servicios financieros.
                </p>
                <a href="<?php echo $this->createUrl('soluciones/'); ?>">ver más</a>
            </div>
        </div>
    </div>
</main>