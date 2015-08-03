<?php

class ClientesController extends BaseController {

    public function actionSectorFinanciero()
    {
        // using the default layout 'protected/views/layouts/main.php'
        $this->pageTitle .= ' | Clientes Sector Financiero';
        $this->pageActive = 'Clientes-Financiero';
        $this->pageDescription = 'Nuestros clientes en el sector financiero y mercado de capitales.';
        $this->render('clientes-financiero');
    }

    public function actionSectorMineriaEmpresarial()
    {
        // using the default layout 'protected/views/layouts/main.php'
        $this->pageTitle .= ' | Clientes Sector Minería y Empresarial';
        $this->pageActive = 'Clientes-Mineria';
        $this->pageDescription = 'Nuestros clientes en el sector minería y empresarial.';
        $this->render('clientes-mineria-empresarial');
    }
}