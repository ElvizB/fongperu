<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>


<section class="header-s">
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
                    <li><a href="https://www.empoderatefong.com/" target="_blank"><span>blog</span> </a></li>
                    <li><a href="<?php echo RUTA_SOCIAL ?>"><span>proyección social</span> </a></li>
                    <li><a href="<?php echo RUTA_CONTACTO ?>"><span>contacto</span> </a></li>
                </ul>
            </div>
            <div class="menu-bg" id="menu-bg"></div>
        </div>
    </div>


    <div class="grid-home">

        <div class="title-welcome">
            <h2><span>CÓNOCENOS</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>about/girl_n.png" draggable="false" class="" />
        </div>
        <div class="description-about">
            <h2>Nosotros</h2>
            <p>Somos un equipo profesional que vela por tu bienestar integral dándote el espacio y la oportunidad para
                conectarte con quien eres en esencia, a nivel mental y emocional para reflejarlo en lo físico.
            </p>
            <p>
                Con nuestra ayuda podrás obtener una experiencia única de transformación para reinventarte y resaltar
                tus cualidades. Nuestra meta es sacar a la luz todo el potencial que llevas dentro, de tal manera que
                puedas encontrar la seguridad para empoderarte.
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
                            <p>Tenemos la misión de redescubrir y sacar a relucir el potencial que llevas en tu
                                interior.

                            </p>
                        </div>
                        <div class="about_title">
                            <h2>VISIÓN</h2>
                            <p>
                                Ser un centro holístico especializado en empoderar a las personas física, mental,
                                emocional y espiritualmente,
                                <br>
                                para lograr su bienestar integral.
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
                    bienestar.
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
            <img src="<?php echo RUTA_IMG?>about/t_1.png" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#drfong" />
            <p>Dr. Fong</p>
            <!-- Modal: modalCart -->
            <div class="modal fade" id="drfong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="grid-team-modal">
                                <div class="img-team-modal">
                                    <img src="<?php echo RUTA_IMG?>about/fong.png" draggable="false" class="" />
                                </div>
                                <div class="desc-team-modal">
                                    <h4>Dr. Victor Barriga Fong</h4>
                                    <h6>
                                        Soy el Dr. Fong, cirujano plástico pero sobretodo sanador, en donde a través del
                                        arte y la ciencia, tendrás una experiencia única de transformación. Mi filosofía
                                        de trabajo es que a través de tus cualidades puedas reinventarte y potenciar
                                        todo tu ser tanto en el plano físico, como el mental y espiritual.
                                    </h6>
                                    <h6>
                                        Quiero que te sientas seguro/a con mi trabajo y mi experiencia; por eso, he
                                        dedicado gran parte de mi tiempo para mi formación profesional y así conocer las
                                        últimas técnicas sobre la cirugía estética en Perú y en el mundo.
                                    </h6>
                                    <h6>
                                        He participado en diferentes certificaciones nacionales como: “El congreso
                                        internacional de Medicina Estética Avance Tecnológico y Láser” (Peruesthetic
                                        Internacional), “Simposio Internacional de avances en Cirugía Plástica” (H.N.E.
                                        Rebagliati Martins), “Congreso Mundial de Dermatología Cosmética” (PeruDerm y la
                                        Academia Internacional de Dermatología Cosmética), entre otros; e
                                        internacionales como: “Mini Simposio de Rejuvecimiento Facial” (Louisiana, USA),
                                        “Seguridad y Eficacia en Procesamiento de Grasa, Fracción Vascular Estromal de
                                        Tejido Adiposo, Plasma Rico en Plaquetas, Nano Fat e Injertos Grasos en Cara,
                                        Manos y Estimulación Folicular” (Louisiana, USA), “Actualizaciones Prácticas en
                                        Cirugía Estética de Cara y Cuerpo” (Florida, USA), “Mantenimiento de Certificado
                                        en Cirugía Plástica - Abdominoplastía” (Florida, USA), entre otros.
                                    </h6>
                                    <h6>
                                        Estoy comprometido con mis pacientes, por eso sigo las últimas tendencias e
                                        innovaciones sobre cirugía estética y bienestar saludable, para que ustedes
                                        puedan seguir fortaleciéndose y empoderándose
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>
        <div class="description_team">
            <img src="<?php echo RUTA_IMG?>about/t_2.png" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#tania" />
            <p>Tania</p>
            <!-- Modal: modalCart -->
            <div class="modal fade" id="tania" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="grid-team-modal">
                                <div class="img-team-modal">
                                    <img src="<?php echo RUTA_IMG?>about/tania.png" draggable="false" class="" />
                                </div>
                                <div class="desc-team-modal">
                                    <h4>Tania</h4>
                                    <h6>
                                        Soy Tania especialista en cuidar y relucir tu belleza a través de nuestros
                                        tratamientos y masajes.
                                    </h6>
                                    <h6>

                                        Con delicadeza y experiencia realizo los masajes, que te ayudarán a botar todos
                                        esas pensamientos negativos y dolores. Además, podrás relajarte e interiorizar
                                        todos tus cualidades para que puedas potenciarlos.
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>
        <div class="description_team">
            <img src="<?php echo RUTA_IMG?>about/t_3.png" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#lupe" />
            <p>Lupe Milla</p>
            <!-- Modal: modalCart -->
            <div class="modal fade" id="lupe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="grid-team-modal">
                                <div class="img-team-modal">
                                    <img src="<?php echo RUTA_IMG?>about/lupe.png" draggable="false" class="" />
                                </div>
                                <div class="desc-team-modal">
                                    <h4>Lupe Milla</h4>
                                    <h6>
                                        Soy Lupe, asistente del Dr. Fong y estoy aquí para acompañarte en cada paso de
                                        tu transformación y tengas la seguridad de que todo saldrá como lo esperabas
                                    </h6>
                                    <h6>
                                        Llevo más de cinco años de experiencia en este trabajo y estoy segura que con la
                                        destreza del Dr. Fong y mi atención te ayudaremos a reinventarte.
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>
    </div>
</section>

<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>