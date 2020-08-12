<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>


<section class="header">

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
            <h2><span>bienvenid@</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>home/girl.png" draggable="false" class="" />
        </div>
        <div class="description-home">
            <div class="u-content-info">
                <h2>Nosotros</h2>
                <p>Somos un equipo profesional que te acompaña en cada paso de tu empoderamiento físico, mental y
                    emocional,
                    resaltando tus cualidades y ayudándote en una transformación holística en todos los niveles.
                </p>
                <div class="btn-read">
                    <a href="<?php echo RUTA_NOSOTROS ?>">+ leer más</a>
                </div>
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
                    <img src="<?php echo RUTA_IMG?>home/slider/1.png" draggable="false" alt="">
                    <p>REJUVECIMIENTO
                        FACIAL</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/2.png" draggable="false" alt="">
                    <p>PÁRPADOS</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/3.png" draggable="false" alt="">
                    <p>LIPOSUCCIÓN
                        DE PAPADA</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/4.png" draggable="false" alt="">
                    <p>TOXÍNA
                        BUTOLÍNICA</p>
                </div>
            </div>

            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/5.png" draggable="false" alt="">
                    <p>RINOMODELACIÓN</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/6.png" draggable="false" alt="">
                    <p>OTOPLASTÍA</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/7.png" draggable="false" alt="">
                    <p>GLÚTEOS</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/8.png" draggable="false" alt="">
                    <p>ABDOMINOPLASTÍA
                        DE ALTA DEFINICIÓN
                    </p>

                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/9.png" draggable="false" alt="">
                    <p>IMPLANTES
                        MAMARIOS
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/10.png" draggable="false" alt="">

                    <p>LIPOMARCACIÓN
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/11.png" draggable="false" alt="">

                    <p>PLASTIA DE
                        CICATRIZ
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="grid-slider-img">
                    <img src="<?php echo RUTA_IMG?>home/slider/12.png" draggable="false" alt="">

                    <p>GENICOMASTÍA
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
                <img src="<?php echo RUTA_IMG?>home/bienestar.png" draggable="false" class="img-fluid p-3" />
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
                        <p class="comillas rotate_comi">“</p>
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


<section class="galeria">
    <div class="grid-galeria">
        <h2>instagram</h2>
        <div class="elfsight-app-b4a7ea8d-7658-4af4-a934-7f741284e12d"></div>
    </div>
</section>




<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>