<?php

    namespace Controllers;

    use MVC\Router;
    use App\Producto;

    



// use PHPMailer\PHPMailer\PHPMailer;


// Esta clase es usada como controlador de todas las paginas
class PaginasController{

        public static function home(Router $router){

            $productos = Producto::obtenerProductos();
         

            $mas_vendidos = Producto::obtenerMasVendidos();
            $productos_calidad = Producto::obtenerProductosCalidad();
           
            $router->render('paginas/home',[

                "productos"=>$productos,
                "mas_vendidos"=>$mas_vendidos,
                "productos_calidad"=>$productos_calidad

            ]);

        }
        public static function producto(Router $router){

            $productos = Producto::obtenerProductos();

            $id = \buscarQueryString("id");

            
            $producto = Producto::find($id);
            

            $router->render('paginas/producto',[

                "productos"=>$productos,
                "producto"=>$producto,
                "id"=>$id
            ]);

        }


    }