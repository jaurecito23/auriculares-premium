<main class="contenedor sección contenido-centrado">

    <h1 data-cy="titulo-propiedad"><?php echo $propiedad->titulo ?></h1>

    <!-- <picture> -->
    <!-- <source srcset="build/img/destacada.webp" type="image/webp">
    <source srcset="build/img/destacada.jpg" type="image/jpeg"> -->
    <img src="/bienesraicesMVC/public/imagenes/<?php echo $propiedad->imagen?>" loading="lazy" alt="imagen de la propiedad">
    <!-- </picture> -->

    <div class="resumen-propiedad">
        <p class="precio"><?php echo $propiedad->precio ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedad->wc ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $propiedad->estacionamiento?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p><?php echo $propiedad->habitaciones?></p>
            </li>
        </ul>
        <p>
            <?php echo $propiedad->descripcion;?>

        </p>



    </div>

</main>