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
            <h2><span>Servicios@</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>servicios/girl-s.png" draggable="false" class="" />
        </div>
        <div class="description-home">
            <div class="u-content-info">
                <h2>Servicios</h2>
                <p>Queremos que te sientas armonizado/a en todo sentido; por eso, dependiendo de lo que necesites te
                    brindamos
                    las diferentes opciones para ayudarte a alcanzar el bienestar integral que tanto buscas, exponer lo
                    que
                    eres y explotar todo tu potencial.
                </p>
            </div>
        </div>

    </div>
    <div class="content-flor">
        <div class="content-img-flor">
            <img src="<?php echo RUTA_IMG?>servicios/icon-s.png" draggable="false" class="img-fluid" />
        </div>
    </div>

</section>

<section>
    <div class="grid-tab">
        <ul class="nav nav-tabs md-tabs nav_link_service">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">
                    <span>tratamientos faciales</span>
                </a>
            </li>
            <hr class="barra-oblicua" />
            <li class=" nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">
                    <span>tratamientos corporales</span>
                </a>
            </li>
            <hr class="barra-oblicua" />
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">
                    <span>bienestar
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </a>
            </li>
        </ul>

    </div>
</section>



<section class="service">
    <div class="u-content-box">
        <div class="tab-content" id="myTabContentEx">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="grid-service-item">

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_2hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_2" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_2.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_2" />
                                <p>Ácido hialurónico </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="f_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Ácido hialurónico</h2>
                                                    <h6>Es una sustancia que se encuentra de manera natural en
                                                        nuestro organismo
                                                        que ayuda a mantener la piel hidratada. Este tratamiento
                                                        estético sirve
                                                        para rellenar las arrugas y depresiones por el
                                                        envejecimiento prematuro,
                                                        aportando un toque fresco y juvenil al rostro. </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Es un tratamiento, no cirugía.</li>
                                                        <li>El cuerpo lo asimila de inmediato por ser una
                                                            sustancia natural.
                                                        </li>
                                                        <li>Se realiza en corto tiempo</li>
                                                        <li>Hidrata la piel dándole un toque natural, juvenil y
                                                            fresco al
                                                            rostro. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_1hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_1" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_uno.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_1" />
                                <p>Bichectomía </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="f_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Bichectomía</h2>
                                                    <h6>Reducción quirúrgica del exceso de grasa (bolas de
                                                        bichat) en las
                                                        mejillas, obteniendo un rostro más delgado y definido.
                                                    </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Intervención quirúrgica mínimamente invasiva.</li>
                                                        <li>Ayuda definir los pómulos.</li>
                                                        <li>Su resultado es permanente.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_4hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_4" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_4.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_4" />
                                <p>Blefaroplastía </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="f_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Blefaroplastía</h2>
                                                    <h6>Blefaroplastia inferior:
                                                        Rejuvenece la mirada con la extracción de piel sobrante
                                                        y las bolsas de
                                                        grasa debajo de los ojos.
                                                    </h6>
                                                    <h6>Blefaroplastia superior:
                                                        Ayuda a corregir la caída de los párpados superiores,
                                                        mejorando tu
                                                        aspecto facial.

                                                    </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Intervención quirúrgica de corto tiempo</li>
                                                        <li>Mejora el aspecto general de los ojos.</li>
                                                        <li>El rostro consigue un aspecto juvenil y fresco.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_6hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_6" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_6.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_6" />
                                <p>Liposucción de papada </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="f_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Liposucción de papada</h2>
                                                    <h6>Absorción de grasa localizada en área debajo de la
                                                        barbilla para
                                                        armonizar el cuello y resaltar la línea mandibular.
                                                    </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Intervención quirúrgica de corto tiempo.</li>
                                                        <li>Recuperación rápida.</li>
                                                        <li>Te ayuda a definir la parte baja del rostro, dándole
                                                            un aspecto
                                                            más suave y refinado del cuello y la línea del
                                                            mentón</li>
                                                        <li>Resultados inmediatos.</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_8hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_8" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_8.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_8" />
                                <p>Otoplastia</p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="f_8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Otoplastia</h2>
                                                    <h6>Procedimiento quirúrgico para corregir las deformidades
                                                        en la oreja como
                                                        microtia u orejas prominentes.</h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Intervención quirúrgica mínimamente invasiva.</li>
                                                        <li>Recuperación rápida.</li>
                                                        <li>Armoniza ambas orejas con tu rostro. </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_7hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_7" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_7.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_7" />
                                <p>Rejuvecimiento facial/Nanofat </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="f_7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Rejuvecimiento facial/Nanofat</h2>
                                                    <h6>Aplicación de rellenos grasos en distintas partes del
                                                        rostro para
                                                        contrarrestar los signos de envejecimiento y rellenar
                                                        los defectos
                                                        faciales, además de restuarar el volumen y la calidad de
                                                        la piel.</h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Intervención quirúrgica mínimamente invasiva.</li>
                                                        <li>Recuperación rápida.</li>
                                                        <li>Reduce las arrugas finas y revitaliza la piel. </li>
                                                        <li>Rejuvenece tu aspecto del rostro.</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_3hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_3" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_3.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_3" />
                                <p>Rinomodelación </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="f_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Rinomodelación</h2>
                                                    <h6>La rinomodelación es un tratamiento no invasivo,
                                                        alternativo a la
                                                        cirugía estética que ayuda a corregir el dorso y la
                                                        punta de la nariz
                                                        armonizando el conjunto del rostro. </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Es un tratamiento, no cirugía.</li>
                                                        <li>Es completamente sin dolor.</li>
                                                        <li>Se realiza en corto tiempo.</li>
                                                        <li>Elimina la asimetría e irregularidades de la nariz
                                                            con resultados
                                                            armoniosos y naturales.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_5hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_5" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_5.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_5" />
                                <p>Rinoplastía </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="f_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Rinoplastia</h2>
                                                    <h6>Intervención quirúrgica que corrige las proporciones de
                                                        la nariz, con el
                                                        fin de resolver inconvenientes estéticos y funcionales.
                                                    </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Intervención quirúrgica de corto tiempo.</li>
                                                        <li>Equilibra las proporciones de la nariz para que se
                                                            vea armonioso
                                                            con todo el rostro. </li>
                                                        <li>En algunos casos ayuda a mejorar el funcionamiento
                                                            nasal.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_9hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_9" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/faciales/f_9.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#f_9" />
                                <p>Toxina butolínica</p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="f_9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Toxina butolínica</h2>
                                                    <h6>Tratamiento ambulatorio comunmente llamado “botox”,
                                                        aplicado en los
                                                        músculos faciales para mejorar las líneas de expresión y
                                                        contrarrestar
                                                        el envejecimiento.</h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Es un tratamiento, no cirugía.</li>
                                                        <li>Se realiza en corto tiempo.</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="grid-service-item">


                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_5hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_5" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_5.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_5" />
                                <p>Abdominoplastia </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="c_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Abdominoplastia</h2>
                                                    <h6>Reconstruye la pared abdominal, retirando la piel y
                                                        grasa excedente para
                                                        reforzar y resaltar los músculos y marcos óseos para
                                                        conseguir una
                                                        figura ideal. Además, corrige la diástasis de los
                                                        rectos.</h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Elimina la grasa abdominal.</li>
                                                        <li>Luce un perfil abdominal firme, plano y marcado.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_7hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_7" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_7.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_7" />
                                <p>Carboxiterapia </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="c_7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Carboxiterapia</h2>
                                                    <h6>Tratamiento que consiste en la aplicación de inyecciones
                                                        de gas (dióxido
                                                        de carbono) por debajo de la piel para mejorar su
                                                        firmeza, combatir la
                                                        celulitis, estrías y grasa localizada.
                                                    </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li> Es un tratamiento, no cirugía.</li>
                                                        <li> Reduce la celulitis y la flacidez de la piel.</li>
                                                        <li>Elimina las marcas de cicatriz y estrías.</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_6hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_6" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_6.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_6" />
                                <p>Ginecomastia </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="c_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Genicomastía</h2>
                                                    <h6>Tratamiento enfocado en reducir el agrandamiento de la
                                                        glándula mamaria
                                                        masculina o acumulo excesivo de grasa mediante exeresis
                                                        y/o liposucción.
                                                    </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Proporciona a los hombres un pecho plano y musculoso
                                                            y recupera tu
                                                            silueta varonil.</li>
                                                        <li>Resultados naturales y de larga duración.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_3hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_3" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_3.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_3" />
                                <p>Implante mamario </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="c_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Implante mamario</h2>
                                                    <h6>Mejora el volumen y forma de las mamas a través de
                                                        implantes de silicona
                                                        para potenciar la figura femenina. </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Procedimiento quirúrgico con resultados inmediatos.
                                                        </li>
                                                        <li>Luce senos más voluminosos. </li>
                                                        <li>Mejora la forma de tu cuerpo logrando un aspecto
                                                            natural de tus
                                                            pechos.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_4hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_4" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_4.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_4" />
                                <p>Levantamiento de glúteos </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="c_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Levantamiento de glúteos</h2>
                                                    <h6>Tratamiento que a través de una estimulación eléctrica
                                                        de la fibra
                                                        muscular glútea se consigue dar mayor tonificación al
                                                        músculo,
                                                        reafirmando y levantando los glúteos dándole la firmeza
                                                        que buscas.</h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Es un tratamiento, no cirugía</li>
                                                        <li>Luce tus glúteos tonificados y firmes. </li>
                                                        <li>Mejora la forma armónica de tu cuerpo.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_1hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_1" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_1.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_1" />
                                <p>Lipo localizada </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="c_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Lipo localizada</h2>
                                                    <h6>Extracción focalizada mediante finas cánulas que se
                                                        insertan a través de
                                                        pequeñas incisiones en los depósitos grasos situados
                                                        bajo la piel.</h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Procedimiento quirúrgico de corto tiempo.</li>
                                                        <li>Mejora la forma de tu cuerpo.</li>
                                                        <li>Complicaciones mínimas.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_2hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_2" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_2.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_2" />
                                <p>Lipomarcación</p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="c_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Lipomarcación</h2>
                                                    <h6>Técnica de lipoescultura que resalta y define los
                                                        músculos abdominales
                                                        aportando un aspecto atlético y tonificado. </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Procedimiento quirúrgico con resultados inmediatos.
                                                        </li>
                                                        <li>Elimina la grasa abdominal.</li>
                                                        <li>Luce el vientre plano y marcado.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_8hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_8" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/corporales/c_8.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#c_8" />
                                <p>Plastia de ciactriz </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="c_8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Plastia de ciactriz</h2>
                                                    <h6>Cirugía reconstructiva consiste en mejorar la apariencia
                                                        de las
                                                        cicatrices, retirando la antigua y creando una nueva que
                                                        busque seguir
                                                        las líneas de tensión de la piel y mejore su aspecto
                                                        estético.
                                                    </h6>
                                                </div>
                                                <div class="title-beneficio">
                                                    <h4>Beneficios</h4>
                                                    <ul class="link_check">
                                                        <li>Mejora paulatina del aspecto cutáneo.</li>
                                                        <li> Se puede realizar en cualquier parte del cuerpo.
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>
                </div>


            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="grid-service-item">

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/bienestar/b_1hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#b_1" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/bienestar/b_1.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#b_1" />
                                <p>Limpieza facial </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="b_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Limpieza facial</h2>
                                                    <h6>Utilizada para remover impurezas y células muertas
                                                        acumuladas en la capa
                                                        superficial de la piel del rostro, revelando luminosidad
                                                        e hidratación
                                                        en el cutis. </h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>

                    <div class="content-team-s">
                        <div class="content-team-img-s proyect-item-s">
                            <div class="content-team-title-s">
                                <img src="<?php echo RUTA_IMG?>servicios/bienestar/b_2hover.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#b_2" />
                            </div>
                            <div class="content-service-item">
                                <img src="<?php echo RUTA_IMG?>servicios/bienestar/b_2.png" draggable="false"
                                    class="img-fluid p-3" data-toggle="modal" data-target="#b_2" />
                                <p>Masajes relajantes </p>
                            </div>
                            <!-- Modal: modalCart -->
                            <div class="modal fade" id="b_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="bg-modal-service">
                                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="grid-service-modal">
                                                <div class="description-service-modal">
                                                    <h2>Masajes relajantes</h2>
                                                    <h6>Terapia manual que contribuye a la producción de
                                                        endorfinas para mejorar
                                                        el bienestar físico y mental del paciente. </h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal: modalCart -->
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

</section>






<?php
  include_once 'plantillas/testimonio/index.php';
  include_once 'plantillas/footer-service.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>