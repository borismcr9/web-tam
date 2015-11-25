<?php

class CursoController extends BaseController
{

    public function actionGoogleAnalytics()
    {
        // using the default layout 'protected/views/layouts/main.php'
        $this->pageTitle .= ' | Curso Google Analytics';
        $this->pageActive = 'Google-Analytics';
        $this->pageDescription = 'Curso Google Analytics.';
        $this->render('google-analytics');
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

        if (isset($contact['lastname']) && trim($contact['lastname']==="")) {
            return $this->respuestaEmail(false, '<strong>Error</strong>.<span> Porfavor ingrese sus apellidos.</span>');
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

        if (isset($contact['cellphone']) && trim($contact['cellphone']==="")) {
            return $this->respuestaEmail(false, '<strong>Error</strong>.<span> Porfavor ingrese un numero de celular.</span>');
        }


        if (!Yii::app()->emailSender->correoInscripcion($contact)) {
            return $this->respuestaEmail(false, '<strong>Ops!</strong>.<span> Ocurrio un error en el envio del correo, porfavor intentelo nuevamente.</span>');
        }

        $this->respuestaEmail(true, '<strong>El correo ha sido enviado</strong>.<span> Nos pondremos en contacto con usted a la brevedad.</span>');
    }

    private function respuestaEmail($estado, $mensaje)
    {
        Yii::app()->user->setFlash('mensaje-envio-email', $mensaje);
        Yii::app()->user->setFlash('estado-envio-email', $estado);
        $this->redirect(array('google-analytics'));
    }
}