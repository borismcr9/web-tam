<?php

class SolucionesController extends BaseController
{
    public $layout='//layouts/column2';

    public function actionIndex()
    {
        $this->pageTitle .= ' | Soluciones';
        $this->pageActive = 'Soluciones';
        $this->pageDescription = 'Soluciones a tu medida';
        $this->render('index');
    }

    public function actionSpectrumFondos()
    {
        $this->pageTitle .= ' | Soluciones';
        $this->pageActive = 'Spectrum Fondos';
        $this->menu = 'In-House';
        $this->pageDescription = 'Gestión Integral de Fondos Mutuos y Fondos de Inversión';
        $this->render('spectrum-fondos');
    }

    public function actionSpectrumEfactoring()
    {
        $this->pageTitle .= ' | Soluciones';
        $this->pageActive = 'Spectrum e-Factoring';
        $this->menu = 'In-House';
        $this->pageDescription = 'Spectrum Factoring es una solución que permite la gestión integral de la operativa de factoring electrónico, desde la carga y cesión de documentos por parte del deudor y solicitante de financiamiento..';
        $this->render('spectrum-efactoring');
    }

    public function actionSpectrumGestionCobranza()
    {
        $this->pageTitle .= ' | Soluciones';
        $this->pageActive = 'Spectrum Gestion de Cobranzas';
        $this->menu = 'In-House';
        $this->pageDescription = 'Spectrum Cobranzas es un módulo que permite optimizar la gestión telefónica y de campo, a través de una plataforma que facilita la administración..';
        $this->render('spectrum-gestion-cobranza');
    }

    public function actionSpectrumGnsys()
    {
        $this->pageTitle .= ' | Soluciones';
        $this->pageActive = 'Spectrum GNSYS - Cumplimiento Normativo';
        $this->menu = 'In-House';
        $this->pageDescription = 'Sistema de Gestión y Control Normativo';
        $this->render('spectrum-gnsys');
    }
}