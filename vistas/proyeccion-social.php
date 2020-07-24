<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>


<section class="header-ps">
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
            <h2><span>COMPROMISO</span></h2>
        </div>

        <div class="img-home">
            <img src="<?php echo RUTA_IMG?>compromiso/men_cs.png" draggable="false" class="" />
        </div>
        <div class="description-home">
            <h2>Compromiso
                social</h2>
            <p>
                Uno de los pilares de la identidad del #DrFong y su equipo ha sido siempre mejorar la calidad de vida de
                las personas. Por eso que estamos comprometidos a brindar oportunidades a los que por diferentes
                circunstancias lo necesitan.
            </p>

        </div>

    </div>
    <div class="content-hands">
        <div class="content-img-hands">
            <img src="<?php echo RUTA_IMG?>compromiso/ico_m.png" draggable="false" class="img-fluid" />
        </div>
    </div>

</section>

<section class="social">
    <div class="grid_social">
        <div class="title_social">
            <h2>Misión Caritas Felices</h2>
            <p>Gracias a la iniciativa de Misión Caritas Felices tuve la oportunidad de ayudar a operar niños de bajos
                recursos que nacieron con labio y paladar hendido, y así contribuir a una cultura de inclusión social.
                Estos pequeños niños me enseñaron a que la verdadera sonrisa viene del alma y estoy seguro que tendrán
                un futuro lleno de alegrías. </p>
        </div>
        <div class="img_social">
            <img src="<?php echo RUTA_IMG?>compromiso/img_caritas.png" draggable="false" class="" />
        </div>
    </div>
</section>

<section class="comentarios">
    <div class="grid-comemnt">
        <div class="title-comment">
            <p>
                Estoy seguro que cada día es una nueva oportunidad de ser felices y ser mejores personas. Cualquier
                acción altruista puede cambiar la vida de otra persona.
            </p>
            <h2>- Dr. Fong -</h2>
        </div>
    </div>
</section>



<?php
  include_once 'plantillas/footer-media.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>