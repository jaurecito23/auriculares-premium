
			<main class="contenedor sección">

<h2>Administrador de Bienes Raices</h2>

<?php

    if(isset($resultado)){

        $mensaje = mostrarNotifiicación(intval($resultado)) ;
        if($mensaje){ ?>
                <p class="alerta exito"> <?php echo san($mensaje) ?> </p>
                <?php };

              }

  ?>
<a href="/bienesraicesMVC/public/propiedades/crear" class="boton boton-verde">Nueva Propiedad</a>
<a href="/bienesraicesMVC/public/vendedores/crear" class="boton boton-amarillo">Nuevo(a) Vendedor</a>

            <h2>Propiedades</h2>
<table class="propiedades">

        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            <tbody> <!--Mostrar los resultados-->
            <?php foreach($propiedades as $propiedad):?>
                <tr>
                    <td><?php echo $propiedad->id; ?></td>
                    <td><?php echo $propiedad->titulo;?></td>
                    <td><img src="/bienesraicesMVC/public/imagenes/<?php echo $propiedad->imagen ?>" class="imagen-tabla"> </td>
                    <td>$ <?php echo $propiedad->precio ?></td>
                    <td>

                    <form method="POST" class="w-100" action="eliminar">
                    <input type="hidden" name="id" value="<?php echo $propiedad->id;?>">
                    <input type="hidden" name="tipo" value="propiedad">

                    <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>


                    <a href="/bienesraicesMVC/public/propiedades/actualizar?id=<?php echo $propiedad->id;  ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </thead>

</table>


<h2>Vendedores</h2>

            <table class="propiedades">

                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Acciones</>
                        </tr>
                    </thead>
                    <tbody> <!--Mostrar los resultados-->
                            <?php foreach($vendedores as $vendedor):?>
                            <tr>
                            <td><?php echo $vendedor->id; ?></td>
                            <td><?php echo $vendedor->nombre ." ".$vendedor->apellido;?></td>
                            <td> <?php echo $vendedor->telefono?></td>
                            <td>

                            <form method="POST" class="w-100" action="/bienesraicesMVC/public/vendedores/eliminar">
                            <input type="hidden" name="id" value="<?php echo $vendedor->id;?>">
                            <input type="hidden" name="tipo" value="vendedor">

                    <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>


                    <a href="/bienesraicesMVC/public/vendedores/actualizar?id=<?php echo $vendedor->id;?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>


            </table>

</main>