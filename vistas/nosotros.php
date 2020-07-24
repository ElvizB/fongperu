<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>


<section class="header-s">
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
            <h2><span>Nosotros</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>servicios/girl-s.png" draggable="false" class="" />
        </div>
        <div class="description-home">
            <h2>Nosotros</h2>
            <p>Somos un equipo profesional que te acompaña en cada paso de tu empoderamiento físico, mental y emocional,
                resaltando tus cualidades y ayudándote en una transformación holística en todos los niveles.
            </p>
            <p>Velamos por tu bienestar integral dándote el espacio y la oportunidad de conectarte con quien eres en
                esencia, equilibrando lo que eres con lo que quieres ser.
            </p>
            <p>
                A través de nuestra experiencia podrás obtener un experiencia única de transformación para reinventarte
                y potenciar tu esencia y ser. Nuestra meta es reflejar todo el potencial que llevas dentro.
            </p>

        </div>

    </div>
    <div class="content-flor">
        <div class="content-img-flor">
            <img src="<?php echo RUTA_IMG?>about/icon_a.png" draggable="false" class="img-fluid" />
        </div>
    </div>

</section>

<section class="about-hidden-m">
    <div class="grid-title-about-m">
        <div class="about_title-m">
            <h2>MISIÓN</h2>
            <p>Tenemos la misión de redescubrir y sacar a relucir el potencial que llevas en tu interior

            </p>
        </div>
        <div class="about_title-m">
            <h2>VISIÓN</h2>
            <p>
                Ser centro holístico especializado en empoderar a las personas física, mental, emocional
                y
                espiritualmente, para lograr su bienestar integral.
            </p>
        </div>
    </div>
</section>

<section class="filosofia_bg">
    <div class="wrapper-suscribete container-suscribete">
        <div class="suscribete-grid">
            <div class="about-grid-absolute conten-about-hidden">
                <div class="content-title-suscribete ">
                    <div class="grid-title-about">
                        <div class="about_title">
                            <h2>MISIÓN</h2>
                            <p>Tenemos la misión de redescubrir y sacar a relucir el potencial que llevas en tu interior

                            </p>
                        </div>
                        <div class="about_title">
                            <h2>VISIÓN</h2>
                            <p>
                                Ser centro holístico especializado en empoderar a las personas física, mental, emocional
                                y
                                espiritualmente, para lograr su bienestar integral.
                            </p>
                        </div>
                    </div>
                </div>
                <img src="<?php echo RUTA_IMG?>about/icon_flor_about.png" draggable="false"
                    class="img-fluid flor-hidden" />
            </div>
        </div>

        <div class="grid_filosofia">
            <div class="title-filosofia">
                <h2>Filosofía</h2>
                <p>
                    Queremos sacar a relucir el potencial de tu interior con un trato más empático y compromiso por tu
                    bienestar
                </p>
            </div>
        </div>

    </div>
</section>

<section class="team_">
    <div class="title_team">
        <h2>EQUIPO FONG</h2>
    </div>
    <div class="grid_team">
        <div class="description_team">
            <img src="<?php echo RUTA_IMG?>about/t_1.png" draggable="false" class="img-fluid" />
            <p>Dr. Fong</p>
        </div>
        <div class="description_team">
            <img src="<?php echo RUTA_IMG?>about/t_1.png" draggable="false" class="img-fluid" />
            <p>Tania</p>
        </div>
        <div class="description_team">
            <img src="<?php echo RUTA_IMG?>about/t_1.png" draggable="false" class="img-fluid" />
            <p>Lupe Milla</p>
        </div>
    </div>
</section>

<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>