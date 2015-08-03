<?php

class ContactoController extends BaseController
{
    public function actionIndex()
    {
        $this->pageTitle .= ' | Contacto';
        $this->pageActive = 'Contacto';
        $this->pageDescription = 'Contactenos';
        $this->render('index');
    }

    public function actionEnviarCorreo()
    {
        if (!isset($_POST['Contact'])) {
            return $this->respuestaEmail(false, '<strong>Ops!</strong>.<span>Ocurrio un error al procesar la información, porfavor intentelo nuevamente.</span>');
        }

        $contact = $_POST['Contact'];

        if (isset($contact['name']) && trim($contact['name']==="")) {
            return $this->respuestaEmail(false, '<strong>Error</strong>.<span> Porfavor ingrese su nombre.</span>');
        }

        if (isset($contact['email']) && trim($contact['email']==="")) {
            return $this->respuestaEmail(false, '<strong>Error</strong>.<span> Porfavor ingrese su correo electrónico.</span>');
        } else {
            $validator = new CEmailValidator;
            if(!$validator->validateValue($contact['email']))
            {
                return $this->respuestaEmail(false, '<strong>Error</strong>.<span> Porfavor ingrese un correo electrónico valido.</span>');
            }
        }

        if (isset($contact['subject']) && trim($contact['subject']==="")) {
            return $this->respuestaEmail(false, '<strong>Error</strong>.<span> Porfavor ingrese un asunto.</span>');
        }

        if (isset($contact['msg']) && trim($contact['msg']==="")) {
            return $this->respuestaEmail(false, '<strong>Error</strong>.<span> No ha ingresado ningun mensaje.</span>');
        }

        if (!Yii::app()->emailSender->correoContacto($contact)) {
            return $this->respuestaEmail(false, '<strong>Ops!</strong>.<span> Ocurrio un error en el envio del correo, porfavor intentelo nuevamente.</span>');
        }

        $this->respuestaEmail(true, '<strong>El correo ha sido enviado</strong>.<span> Nos pondremos en contacto con usted a la brevedad.</span>');
    }

    private function respuestaEmail($estado, $mensaje)
    {
        Yii::app()->user->setFlash('mensaje-envio-email', $mensaje);
        Yii::app()->user->setFlash('estado-envio-email', $estado);
        $this->redirect(array('index'));
    }
}