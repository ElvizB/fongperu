<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>


<section class="header">
    <div class="grid-menu-fong">
        <div class="menu-title-fong">
            <img src="<?php echo RUTA_IMG?>home/fong-home.png" draggable="false" class="img-fluid" />
        </div>
        <div class="menu-fong">
            <ul class="nav_link_u">
                <li><a href="<?php echo SERVIDOR ?>"><span>home</span> </a></li>
                <li><a href="<?php echo RUTA_NOSOTROS ?>"><span>nosotros</span> </a></li>
                <li><a href="<?php echo RUTA_SERVICIOS ?>"><span>servicios</span> </a></li>
                <li><a href="<?php echo RUTA_GALERIA ?>"><span>galería</span> </a></li>
                <li><a href=""><span>blog</span> </a></li>
                <li><a href="<?php echo RUTA_SOCIAL ?>"><span>proyección social</span> </a></li>
                <li><a href="<?php echo RUTA_CONTACTO ?>"><span>contacto</span> </a></li>
            </ul>
        </div>
    </div>
    <div class="grid-home">

        <div class="title-welcome">
            <h2><span>bienvenid@</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>home/girl.png" draggable="false" class="" />
        </div>
        <div class="description-home">
            <h2>Nosotros</h2>
            <p>Somos un equipo profesional que te acompaña en cada paso de tu empoderamiento físico, mental y emocional,
                resaltando tus cualidades y ayudándote en una transformación holística en todos los niveles.
            </p>
            <div class="btn-read">
                <a href=" #">+ leer más</a>
            </div>
        </div>

    </div>
    <div class="content-hands">
        <div class="content-img-hands">
            <img src="<?php echo RUTA_IMG?>home/manos.png" draggable="false" class="img-fluid" />
        </div>
    </div>

</section>

<section class="slider">
    <div class="wrapper-slider">
        <div class="owl-carousel owl-theme" id="slider-service">
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/uno.png" draggable="false" alt="">
                    <p>RINOMODELACIÓN</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/dos.png" draggable="false" alt="">
                    <p>OTOPLASTÍA</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/tres.png" draggable="false" alt="">
                    <p>GLÚTEOS</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/cuatro.png" draggable="false" alt="">
                    <p>ABDOMINOPLASTÍA
                        DE ALTA DEFINICIÓN
                    </p>

                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/cinco.png" draggable="false" alt="">

                    <p>IMPLANTES
                        MAMARIOS
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services">
    <div class="content-services">
        <div class="title-h2">
            <h2>servicios</h2>
        </div>
        <div class="grid-services">
            <div class="one-item-service ">

                <img src="<?php echo RUTA_IMG?>home/faciales.png" draggable="false" class="img-fluid p-3" />
                <img src="<?php echo RUTA_IMG?>home/masajes.png" draggable="false" class="img-fluid p-3" />
            </div>

            <div class="two-item-service">
                <img src="<?php echo RUTA_IMG?>home/ellas.png" draggable="false" class="img-fluid p-3" />
                <img src="<?php echo RUTA_IMG?>home/cirugia.png" draggable="false" class="img-fluid p-3" />
            </div>

            <div class="title-service">
                <h2>servicios</h2>
                <img src="<?php echo RUTA_IMG?>home/ellos.png" draggable="false" class="img-fluid p-3" />
            </div>
        </div>
    </div>
</section>

<section class="suscribete">
    <div class="wrapper-suscribete container-suscribete">
        <div class="suscribete-grid">
            <div class="suscribete-grid-absolute">
                <div class="content-title-suscribete">
                    <div class="grid-title-suscribete">
                        <p class="comillas">“</p>
                        <p class="subtitle-suscribete"> Las personas valientes son las más hermosas</p>

                    </div>
                </div>
                <img src="<?php echo RUTA_IMG?>home/f-1.png" draggable="false" class="img-fluid" />
            </div>
        </div>

        <div class="content-subcribete">
            <div class="content-subcribete-secondary">
                <h2>Suscríbete </h2>
                <p>Ingresa tu e-mail para recibir noticias, promociones y tips de salud</p>
                <div class="grid-suscribete-btn">
                    <input type="text" id="subcribete" name="subcribete" class=""
                        placeholder="Ingresa tu dirección de e-mail" style="border-bottom: 1px solid #ced4da">
                    <button id="btnenviar" class="btn btn-subcribete waves-effect waves-light"><i
                            class="fas fa-paper-plane text-white pr-2"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="content-title-vertical">
        <h2>suscríbete</h2>
    </div>
</section>


<section class="galeria u-padding">
    <div class="grid-galeria">
        <h2>instagram</h2>
    </div>
</section>

<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>