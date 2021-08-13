<?php


// Patron de arquitectura
// ACTIVE RECORD base de datos y crud
// Cada Tabla tiene una clase
// Atributos = Columnas


// Metodos guardar , actualizar,eliminar,find,all

namespace Model;


    class Propiedad extends ActiveRecord {

        protected static $tabla = "propiedades";

          protected static $columnasDB = ['id','titulo','precio','descripcion','habitaciones','wc','estacionamiento','vendedorId','creado','imagen'];

            // Variables de base de datos
            public $id;
            public $titulo;
            public $precio;
            public $descripcion;
            public $habitaciones;
            public $wc;
            public $estacionamiento;
            public $vendedorId;
            public $creado;
            public $imagen;

            // Constructor
            public function __construct($args = [])
            {
                $this->id= $args['id'] ?? NULL;
                $this->titulo = $args['titulo']  ?? "";
                $this->precio = $args['precio'] ?? "";
                $this->imagen = $args['imagen'] ?? "";
                $this->descripcion = $args['descripcion'] ?? "";
                $this->habitaciones = $args['habitaciones'] ?? "";
                $this->wc = $args['wc'] ?? "";
                $this->estacionamiento = $args['estacionamiento'] ?? "";
                $this->creado = date("Y/m/d");
                $this->vendedorId = $args['vendedorId'] ?? 1;
            }


              public function validar(){


                    if (!$this->titulo) {
                        self::$errores[] = "Debes Añadir un Titulo";
                    }


                    if (!$this->precio) {
                        self::$errores[] = "El precio es obligatorio";
                    }

                    if (strlen($this->descripcion) < 50  || !$this->descripcion) {
                        self::$errores[] = "La descripcion es obligatoria y debe tener almenos 50 caraceres";
                    }


                    if (!$this->habitaciones) {
                        self::$errores[] = "Debes Añadir la cantidad de habitaciones";
                    }


                    if (!$this->wc) {
                        self::$errores[] = "Debes Añadir la cantidad de baños";
                    }


                    if (!$this->estacionamiento) {
                        self::$errores[] = "Debes Añadir la cantidad de estacionamientos";
                    }
                    if (!$this->vendedorId) {
                        self::$errores[] = "Debes elegir un vendedor";
                    }

                    if(!$this->imagen){

                             self::$errores[] = "La imagen es Obligatoria";

                        }

                        return self::$errores;

               }

    }
