<main class="contenedor sección">

    <h2 data-cy="heading-nosotros">Más Sobre Nosotros</h2>

    <div class="iconos-nosotros" data-cy="iconos-nosotros">

        <?php include "iconos.php"?>

    </div>

</main>

<section class="sección contenedor">
    <h2> Casas y Depas en Venta</h2>


    <?php

                    $limite = 3;
                    include "listado.php";

				?>


    <div class="alinear-derecha ">

        <a href="propiedades" class="boton-verde " data-cy="ver-todas-propiedades">Ver Todas</a>
    </div>

</section>

<section class="imagen-contacto" data-cy="imagen-contacto">

    <h2>Encuentra la Casa de tu Sueños</h2>
    <p> LLena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a href="contacto" class="boton-amarillo">Contactános</a>
</section>


<div class="contenedor seccion seccion-inferior">

    <section data-cy="blog" class="blog">

        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">

                <a href="entrada">
                    <h4>Terraza en el techo de tu casa</h4>
                </a>
                <p class="informacion-neta"> Escrito el:<span> 20/10/2021</span> por <span> Admin </span></p>
                <p>
                    Consejos para construír la terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                </p>
            </div>


        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">

                <a href="entrada">
                    <h4>Guía para la decoracion de tu hogar</h4>
                </a>
                <p class="informacion-neta"> Escrito el:<span> 20/10/2021</span> por <span> Admin </span></p>
                <p>
                    Maximisa el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                </p>
            </div>


        </article>

    </section>

    <section data-cy="testimoniales" class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                <!--Para poner Testimoniales-->

                El personal se comporto de una forma excelente muy buena atencion y la casa que me ofrecieron cumple todas mis expectativas

            </blockquote>
            <p>- Facundo Jauregui</p>

        </div>

    </section>