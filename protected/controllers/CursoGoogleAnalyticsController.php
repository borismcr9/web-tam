<?php

class CursoGoogleAnalyticsController extends BaseController
{
    public function actionIndex()
    {
        $this->pageTitle .= ' | Curso Google Analytics';
        $this->pageActive = 'Curso Google Analytics';
        $this->pageDescription = 'Curso Google Analytics';
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