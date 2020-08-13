<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>


<section class="header-ps">
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
            <h2><span>COMPROMISO</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>compromiso/men_cs.png" draggable="false" class="" />
        </div>
        <div class="description-cs">
            <h2>Compromiso
                social</h2>
            <p>
                Uno de los pilares de la identidad de todo el equipo de Fong ha sido siempre mejorar la calidad de vida
                de las personas. Por eso que estamos comprometidos a brindar oportunidades a los que por diferentes
                circunstancias lo necesitan.
            </p>

        </div>

    </div>
    <div class="content-hands">
        <div class="content-img-heart">
            <img src="<?php echo RUTA_IMG?>compromiso/ico_m.png" draggable="false" class="img-fluid" />
        </div>
    </div>

</section>

<section class="social">
    <div class="grid_social">
        <div class="title_social">
            <h2>Misión Caritas Felices</h2>
            <p>Gracias a la iniciativa de Misión Caritas Felices tuvimos la oportunidad de ayudar a operar niños de
                bajos recursos que nacieron con labio y paladar hendido, y así contribuir a una cultura de inclusión
                social. Estos pequeños niños nos enseñaron a que la verdadera sonrisa viene del alma y estamos seguros
                que tendrán un futuro lleno de alegrías. </p>
        </div>
        <div class="img_social">
            <img src="<?php echo RUTA_IMG?>compromiso/img_caritas.png" draggable="false" class="" />
        </div>
    </div>
</section>

<section class="comentarios">
    <div class="grid-comemnt">
        <div class="title-comment">

            <div class="content-comillas">
                <p>
                    Estoy seguro que cada día es una nueva oportunidad de ser felices y ser mejores personas.
                    Cualquier
                    acción altruista puede cambiar la vida de otra persona.
                </p>
            </div>

        </div>
        <div class="desc_doc">
            <h2>- Dr. Fong -</h2>
        </div>
    </div>
</section>



<?php
  include_once 'plantillas/footer-media.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>