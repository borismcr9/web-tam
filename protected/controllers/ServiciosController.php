<?php

class ServiciosController extends BaseController
{
    public $layout='//layouts/column1';

    public function actionIndex()
    {
        $this->pageTitle .= ' | Servicios';
        $this->pageActive = 'Servicios';
        $this->pageDescription = 'Servicios a tu medida';
        $this->render('index');
    }

    public function actionBalancedScorecard()
    {
        $this->pageTitle .= ' | Servicios - Balanced Scorecard';
        $this->pageActive = 'Balanced Scorecard';
        $this->pageDescription = '';
        $this->menu = 'Consultoria';
        $this->render('balanced-scorecard');
    }

    public function actionKnowledgeManagement()
    {
        $this->pageTitle .= ' | Servicios - Knowledge Management';
        $this->pageActive = 'Knowledge Management';
        $this->pageDescription = '';
        $this->menu = 'Consultoria';
        $this->render('knowledge-management');
    }

    public function actionImplementacionSap()
    {
        $this->pageTitle .= ' | Servicios - Implementacion SAP';
        $this->pageActive = 'Implementacion SAP';
        $this->pageDescription = '';
        $this->menu = 'Consultoria SAP';
        $this->render('implementacion-sap');
    }

    public function actionSoporteMejoraSap()
    {
        $this->pageTitle .= ' | Servicios - Soporte y Mejora SAP';
        $this->pageActive = 'Soporte y Mejora SAP';
        $this->pageDescription = '';
        $this->menu = 'Consultoria SAP';
        $this->render('soporte-mejora-sap');
    }

    public function actionFabricaDeSoftware()
    {
        $this->pageTitle .= ' | Servicios - Fabrica de Software';
        $this->pageActive = 'Fabrica de Software';
        $this->pageDescription = '';
        $this->menu = 'Servicios de TI';
        $this->render('fabrica-de-software');
    }

    public function actionDesarrolloDeAplicacionesMoviles(){
        $this->pageTitle .= ' | Servicios - Desarrollo de Aplicaciones Móviles Empresariales';
        $this->pageActive = 'Desarrollo de Aplicaciones Moviles';
        $this->pageDescription = '';
        $this->menu = 'Servicios de TI';
        $this->render('desarrollo-de-aplicaciones-moviles');
    }

    public function actionMigracionReingenieriaDeSoftware()
    {
        $this->pageTitle .= ' | Servicios - Migración y Re-ingeniería de Software';
        $this->pageActive = 'Migracion y Reingenieria de Software';
        $this->pageDescription = '';
        $this->menu = 'Servicios de TI';
        $this->render('migracion-y-reingenieria-de-software');
    }

    public function actionMantenimientoDeAplicaciones()
    {
        $this->pageTitle .= ' | Servicios - Mantenimiento de Aplicaciones';
        $this->pageActive = 'Mantenimiento de Aplicaciones';
        $this->pageDescription = '';
        $this->menu = 'Servicios de TI';
        $this->render('mantenimiento-de-aplicaciones');
    }
}