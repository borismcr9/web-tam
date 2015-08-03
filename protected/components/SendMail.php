<?php
/**
 * SendMailController, clase creada con el unico fin de encapsular metodos para
 * envios de email por SMTP atraves de PHPMailer (extender la funcionalidad si se quiere enviar por POP3, etc).
 */
class SendMail extends CApplicationComponent
{

    public $authEmail  = '';
    public $authPwd    = '';
    public $host       = '';
    public $isSMTP     = true;
    public $isSMTPAuth = true;
    public $port       = null;
    public $smtpSecure = null;

    /**
     * Init this component
     */
    public function init()
    {
        parent::init();
        // .. code ..
    }

    /**
     * Configura el componenete mailer para el envio de correo
     * @param  string $correo correo destino
     * @param  string $asunto asunto del correo
     */
    private function _configMailer( $correo, $asunto )
    {
        $controller   = Yii::app()->getController();
        $configEmail  = $controller->getConfigEmail();
        $contactEmail = $configEmail['contactEmail'];


        if ( $this->isSMTP )
            Yii::app()->mailer->IsSMTP();

        Yii::app()->mailer->Host = $this->host;
        Yii::app()->mailer->SMTPAuth = $this->isSMTPAuth;
        Yii::app()->mailer->SMTPSecure = $this->smtpSecure;
        Yii::app()->mailer->Port = $this->port;
        Yii::app()->mailer->Username = $this->authEmail;
        Yii::app()->mailer->Password = $this->authPwd;
        Yii::app()->mailer->From = $contactEmail;
        Yii::app()->mailer->FromName = $configEmail['contactNameFrom'];
        Yii::app()->mailer->AddReplyTo($contactEmail);
        Yii::app()->mailer->AddAddress($correo);
        Yii::app()->mailer->Subject = $asunto;
        Yii::app()->mailer->IsHTML(true);
    }

    public function correoContacto($contact)
    {
        try
        {
            $send         = true;
            $controller   = Yii::app()->getController();
            $configEmail  = $controller->getConfigEmail();
            $asuntoEmail  = $contact['subject'];
            $params       = $contact;
            $this->_configMailer($configEmail['contactEmail'], $asuntoEmail);
            Yii::app()->mailer->getView('contact', $params);
            if ( !Yii::app()->mailer->Send() )
                $send = false;
        } catch (Exception $e)
        {
            $send = false;
        }
        return $send;
    }

}