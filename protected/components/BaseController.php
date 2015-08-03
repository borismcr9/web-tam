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

	public $menu;
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
	 * @var string Pagina actual
	 */
	public $pageActive;

    /**
     * Funcion privada para retornar el/los valor(es) de configuracion contenido en un arreglo
     * @param  array $params arreglo que simboliza la fuente de la cual extraer los valores
     * @param  string $key    la key o grupo sobre el cual buscar
     * @param  string $item   item a buscar
     * @return mixed         retornar el valor de configuracion,
     * array con todos los valores de $params en caso de no enviar key,NULL es caso de no existir configuracion
     */
    private function _getConfig( $params, $key, $item )
    {
        if ( isset($key) || !empty($key) ) {
            if ( isset($item) || !empty($item) )
                $return = array_key_exists($key, $params)
                        ? (array_key_exists($item, $params[$key])
                            ? $params[$key][$item]
                            : NULL)
                        : NULL;
            else
                $return = array_key_exists($key, $params) ? $params[$key]
                        : NULL;
            return $return;
        } else
            return $params;
    }

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

    /**
     * [checkPageActive description]
     * @param  string $page
     * @return string Retorna 'active' en caso de estarlo o '' en caso que no.
     */
    protected function checkPageActive( $page )
    {
    	$pages = explode (",", $page);
    	for ($i=0; $i < count($pages); $i++) {
			if ($this->pageActive==trim($pages[$i])) {
				return 'active';
	    	}
    	}
    	return '';
    }

    protected function checkMenuIn( $menu ) {
    	if ($this->menu==trim($menu)) {
			return 'in';
    	}
    	return '';
    }

    /**
     * Retornar los valores de configuracion del email
     * @param  string $key key que identifica el tipo de configuracion a buscar,
     * si no se especifica se traera toda la configuracion para email
     * @param  string $item item adicional de configuracion a buscar (opcional, si es que existiera),
     * si no se especifica se traera toda la configuracion para la key especificada
     * @return mixed valor de configuracion
     */
    public function getConfigEmail( $key = null, $item = null )
    {
        $_params = Yii::app()->params['config']['email'];
        return $this->_getConfig($_params, $key, $item);
    }

    /**
     * Retornar los valores de configuracion global de la aplicacion
     * @param  string $key  key que identifica el tipo de configuracion a buscar,
     * si no se especifica se traera toda la configuracion global
     * @param  string $item item adicional de configuracion a buscar (opcional, si es que existiera),
     * si no se especifica se traera toda la configuracion para la key especificada
     * @return mixed valor de configuracion
     */
    public function getConfigGlobal( $key = null, $item = null )
    {
        $_params = Yii::app()->params['config']['global'];
        return $this->_getConfig($_params, $key, $item);
    }

}