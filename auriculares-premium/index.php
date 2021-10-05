

<?php
    // Enlazar el app
     require_once __DIR__ . "/../includes/funciones/app.php";

     use Controllers\PaginasController;
     use MVC\Router;
     use App\Producto;
   
    


$router = new Router();

//PropiedadController::class Trae el namespace donde se encuentra

//AdministradorZONA PRIVADA

$router->get("/",[PaginasController::class,"home"]);

$router->comprobarRutas();