<main id="main-content" role="main">
    <div class="container">
        <div class="info-nosotros home">
            <?php if (Yii::app()->user->hasFlash('mensaje-envio-email') && Yii::app()->user->hasFlash('estado-envio-email')): ?>
                <div
                    class="alert alert-<?php echo (Yii::app()->user->getFlash('estado-envio-email')) ? 'info' : 'danger' ?>">
                    <?php echo Yii::app()->user->getFlash('mensaje-envio-email'); ?>
                </div>
            <?php endif; ?>
            <h1>Analitica Digital y Tecnicas de posicionamiento en buscadores</h1>

            <div class="row">
                <div class="col-md-8">
                    <p>
                        Conozca los conceptos fundamentales para la medicion del exito de una campana digital y el
                        consumo de trafico de los contenidos de sus entornos digitales.
                    </p>

                    <p>
                        Emplee las tecnicas adecuadas para optimizar su estrategia de posicionamiento en buscadores.
                    </p>

                    <form class="form-horizontal" action="<?php echo $this->createUrl('curso/enviar-correo/'); ?>"
                          method="POST" role="form">
                        <div class="form-group">
                            <label for="contact-names" class="col-sm-2 control-label">Nombres</label>

                            <div class="col-sm-8">
                                <input class="form-control" name="Contact[name]" id="contact-names" type="text"
                                       placeholder="Ingrese su nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-lastname" class="col-sm-2 control-label">Apellidos</label>

                            <div class="col-sm-8">
                                <input class="form-control" name="Contact[lastname]" id="contact-lastname" type="text"
                                       placeholder="Ingrese sus Apellidos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-mail" class="col-sm-2 control-label">E-mail</label>

                            <div class="col-sm-8">
                                <input class="form-control" name="Contact[email]" id="contact-mail" type="text"
                                       placeholder="Correo electrónico">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-Celular" class="col-sm-2 control-label">Celular</label>

                            <div class="col-sm-8">
                                <input class="form-control" name="Contact[cellphone]" id="contact-subject" type="text"
                                       placeholder="Ingrese su celular">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-msg" class="col-sm-2 control-label">Consultas</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="Contact[msg]" id="contact-msg" cols="20" rows="5"
                                          placeholder="Ingrese sus consultas / comentarios"></textarea>
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
                    <img class="img-responsive" src="<?php echo $this->baseUrl; ?>/images/Google-Analytics-Tutorial.jpg"/>
                </div>
                <br>

                <div class="col-md-4">
                    <p>
                        Para mayor informacion:
                    </p>

                    <p>
                        <b>Telefonos:</b> (511) 421-3284, (511) 995-776620
                        <br>
                        <b>Email:</b> Informes@tam-c.com
                        <br>
                        <br>
                        Se brindara material y certificado de participacion.
                        <br>
                        No se aceptaran devoluciones.
                    </p>

                </div>
            </div>
        </div>
    </div>
</main>