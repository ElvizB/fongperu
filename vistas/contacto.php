<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>

<section class="header-c">
    <div class="menu-hidden">
        <div class="grid-menu-fong">
            <?php include_once 'plantillas/navbar_/index.php';  ?>
        </div>
    </div>
    <div class="menu-hidden-m">
        <div class="grid-menu-fong">
            <div id="menu-bar">
                <div id="menu" onclick="onClickMenu()">
                    <div id="bar1" class="bar"></div>
                    <div id="bar2" class="bar"></div>
                    <div id="bar3" class="bar"></div>
                </div>
                <ul class="nav-menu" id="nav">
                    <li><a href="<?php echo SERVIDOR ?>"><span>home</span> </a></li>
                    <li><a href="<?php echo RUTA_NOSOTROS ?>"><span>nosotros</span> </a></li>
                    <li><a href="<?php echo RUTA_SERVICIOS ?>"><span>servicios</span> </a></li>
                    <li><a href="<?php echo RUTA_GALERIA ?>"><span>galería</span> </a></li>
                    <li><a href=""><span>blog</span> </a></li>
                    <li><a href="<?php echo RUTA_SOCIAL ?>"><span>proyección social</span> </a></li>
                    <li><a href="<?php echo RUTA_CONTACTO ?>"><span>contacto</span> </a></li>
                </ul>
            </div>
            <div class="menu-bg" id="menu-bg"></div>
        </div>
    </div>
    <div class="grid-home">

        <div class="title-welcome">
            <h2><span>CONTÁCTANOS</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>contacto/girl_c.png" draggable="false" class="" />
        </div>
        <div class="des-contacto">
            <h2>Contacto</h2>

            <div class="description-contact">
                <p><b>Teléfonos:</b> 952 302 613 - 999 933 336</p>
                <p><b>E-mail:</b> hola@esteticafong.com</p>
                <p><b>Dirección:</b> Av. José Faustino Sánchez Carrión 615</p>
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

<section class="">
    <!--Google map-->
    <div id="map-container-section" class="map-container-section mb-4" style="height: 500px">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3901.3341587807745!2d-77.058187!3d-12.089261!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75ed2e1e46f977b7!2sEdificio%20Vertice%2022!5e0!3m2!1ses-419!2spe!4v1595828876998!5m2!1ses-419!2spe"
            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="">
            tabindex="0">
        </iframe>
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