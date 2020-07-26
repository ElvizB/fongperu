<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>

<section class="header-c">
    <div class="grid-menu-fong">
        <?php include_once 'plantillas/navbar_/index.php';  ?>
    </div>
    <div class="grid-home">

        <div class="title-welcome">
            <h2><span>CONTÁCTANOS</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>contacto/girl_c.png" draggable="false" class="" />
        </div>
        <div class="description-home">
            <h2>Contacto</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum ducimus, reprehenderit dolor rerum
                consequatur fugiat eveniet sequi perspiciatis ab cumque, perferendis accusamus incidunt amet, voluptatem
                laborum? Quibusdam itaque explicabo vero.
            </p>
            <div class="btn-read">
                <p>Teléfonos: 952 302 613 - 999 933 336</p>
                <p>E-mail: hola@esteticafong.com</p>
                <p>Dirección: Av. José Faustino Sánchez Carrión 615</p>
                <p>Int. 803 | Jesús María - Lima, Perú </p>
            </div>
        </div>

    </div>
    <div class="content-piedra">
        <div class="content-img-piedra">
            <img src="<?php echo RUTA_IMG?>contacto/icon_c.png" draggable="false" class="img-fluid" />
        </div>
    </div>

</section>

<section class="contacto">
    <div class="content-contacto">
        <div class="title-contacto">
            <p>Quiero armonizarme</p>
        </div>

        <div class="grid-contacto">
            <div class="content-img-contact">
                <img src="<?php echo RUTA_IMG?>contacto/contacto.png" draggable="false" class="img-fluid" />
            </div>
            <div class="formulario">
                <div class="wrapper-form">
                    <form id="" class="formulario" role="form" action="" method="POST">
                        <div class="grid-input-two">
                            <div class="md-form">
                                <input type="text" id="form-name" class="form-control">
                                <label for="form-name" class="">NOMBRE(S)</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="form-ape" class="form-control">
                                <label for="form-ape" class="">APELLIDOS</label>
                            </div>
                        </div>
                        <div class="md-form">
                            <input type="text" id="form-mail" class="form-control">
                            <label for="form-mail" class="">E-MAIL</label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="form-cel" class="form-control">
                            <label for="form-cel" class="">TELÉFONO MÓVIL</label>
                        </div>
                        <div class="md-form">
                            <div class="select_form">
                                <select name="consultoria" id="consultoria">
                                    <option value="" selected disabled>ESTOY INTERESAD@ EN</option>
                                    <option value="Smart Cities">Prueba 1</option>
                                    <option value="Smart Cities">Prueba 1</option>
                                    <option value="Smart Cities">Prueba 1</option>
                                    <option value="Smart Cities">Prueba 1</option>

                                </select>
                            </div>
                        </div>

                        <div class="md-form">
                            <div class="g-recaptcha text-center"
                                data-sitekey="6LcpKe4UAAAAAFSQ3TxZYbdy644j1x3n1XMBSEjh">
                            </div>
                            <div id="g-recaptcha-error"></div>
                        </div>

                        <div id="respuesta"></div>
                        <div class="content-send">
                            <button id="btnenviar" class="btn btn-send-contact waves-effect waves-light">
                                enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
  include_once 'plantillas/footer-contact.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>