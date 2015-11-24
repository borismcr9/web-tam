<main id="main-content" role="main">
    <div class="container">
        <div class="info-nosotros home">
            <?php if(Yii::app()->user->hasFlash('mensaje-envio-email') && Yii::app()->user->hasFlash('estado-envio-email')):?>
                <div class="alert alert-<?php echo (Yii::app()->user->getFlash('estado-envio-email')) ? 'info' : 'danger' ?>">
                    <?php echo Yii::app()->user->getFlash('mensaje-envio-email'); ?>
                </div>
            <?php endif; ?>
            <h1>Contacto</h1>
            <div class="row">
                <div class="col-md-8">
                    <p>
                        Llena nuestro -------- formulario y a la brevedad nos pondremos en contacto.
                    </p>
                    <form class="form-horizontal" action="<?php echo $this->createUrl('contacto/enviar-correo/'); ?>" method="POST" role="form">
                        <div class="form-group">
                            <label for="contact-name" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="Contact[name]" id="contact-name" type="text" placeholder="Ingrese su nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-organization" class="col-sm-2 control-label">Empresa</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="Contact[organization]" id="contact-organization" type="text" placeholder="Nombre de su empresa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-mail" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="Contact[email]" id="contact-mail" type="text" placeholder="Correo electrónico">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-subject" class="col-sm-2 control-label">Tema</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="Contact[subject]" id="contact-subject" type="text" placeholder="Tema o asunto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-msg" class="col-sm-2 control-label">Mensaje</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="Contact[msg]" id="contact-msg" cols="20" rows="5" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                                <button class="btn btn-default" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 text-center info-nosotros-image visible-md visible-lg">
                    <img class="img-responsive" src="<?php echo $this->baseUrl; ?>/images/contact1.jpg" />
                </div>
            </div>
        </div>
    </div>
</main>