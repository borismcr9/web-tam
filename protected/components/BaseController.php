<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class BaseController extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/main';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	/**
	 * @var string Controller - Action ID. Esta propiedad es usada para obtener el nombre
	 * del controlador y accion actual y usarla en el layout u otros.
	 */
	public $totalActionId=array();
	/**
	 * @var string La url base de la aplicacion
	 */
	public $baseUrl;
	/**
	 * @var string Decripcion de la pagina actual
	 */
	public $pageDescription;
	/**
	 * Sobreescribe el metodo "beforeAction" para preparar las variables con los
	 * valores necesarios
	 */
	protected function beforeAction( $action )
	{
		$this->baseUrl       = Yii::app()->request->getBaseUrl(true);
		$this->totalActionId = $action->controller->id . "/" . $action->id;
		$this->pageTitle     = Yii::app()->name;
	    return true;
    }
}