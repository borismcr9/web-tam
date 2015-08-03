<?php

class NosotrosController extends BaseController
{
    public function actionIndex()
    {
        // using the default layout 'protected/views/layouts/main.php'
        $this->pageTitle .= ' | Nosotros';
        $this->pageActive = 'Nosotros';
        $this->pageDescription = 'Somos una compañía de Consultoría y Gestión de Servicios en Tecnología de la Información aplicada a los negocios.';
        $this->render('index');
    }

    public function actionVisionMision()
    {
        // using the default layout 'protected/views/layouts/main.php'
        $this->pageTitle .= ' | Vision y Mision';
        $this->pageActive = 'Vision';
        $this->pageDescription = 'Nuestra vision y mision';
        $this->render('vision-mision');
    }
}