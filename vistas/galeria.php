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
            <h2><span>FOTOGRAÍAS</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>galeria/girl_g.png" draggable="false" class="" />
        </div>
        <div class="description-galery">
            <h2>Galería</h2>
            <p>
                Cuando estás empoderado/a lo sientes y lo sacas a relucir con tu belleza. Mira como ellos/ellas han
                potenciado su ser y exponen con tanta alegría lo que son.
            </p>
        </div>

    </div>
    <div class="content-rama">
        <div class="content-img-rama">
            <img src="<?php echo RUTA_IMG?>galeria/icon_g.png" draggable="false" class="img-fluid" />
        </div>
    </div>

</section>

<section>
    <div class="grid_galeria">
        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/g_1.png" draggable="false" class="img-fluid imgzoom"
                data-toggle="modal" data-target="#g_1" />

            <p>Lorena Fajardo</p>


            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/g_1_z.png" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/g_3.png" draggable="false" class="img-fluid imgzoom"
                data-toggle="modal" data-target="#g_3" />
            <div class="grid-video">
                <p>Ariana Marcani</p>
                <a href="https://www.youtube.com/watch?v=0gz1qOICQuM" target="_blank">
                    <img src="<?php echo RUTA_IMG?>yt.png" draggable="false" class="" />
                </a>
            </div>

            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/g_3_z.png" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>
        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/g_4.png" draggable="false" class="img-fluid imgzoom"
                data-toggle="modal" data-target="#g_4" />
            <div class="grid-video">
                <p>Edson Dávila</p>
                <a href="https://www.youtube.com/watch?v=3T78mgUO3_w" target="_blank">
                    <img src="<?php echo RUTA_IMG?>yt.png" draggable="false" class="" />
                </a>
            </div>

            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/g_4_z.png" draggable="false"
                                    class="img-fluid p-4" />
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
include_once 'plantillas/testimonio/index.php';
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>