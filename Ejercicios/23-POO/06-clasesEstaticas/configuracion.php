<?php

    class Configuracion{

        //Las propiedades o metodos estaticos tienen la peculiaridad de que para llamarlos no necesito instanciar la clase; es decir; inicializar el objeto
        public static $color;
        public static $newsletter;
        public static $entorno;

        public static function getColor(){
            return self::$color; //es equivalente a hacer un $this, solo que self:: se una si los metodos y propiedades son estaticos
        }

        public static function getNewsletter(){
            return self::$newsletter;
        }

        public static function getEntorno(){
            return self::$entorno;
        }

        public static function setColor($color){
            self::$color = $color;
        }
        public static function setNewsletter($newsletter){
            self::$newsletter = $newsletter;
        }

        public static function setEntorno($entorno){
            self::$entorno = $entorno;
        }
    }

?>