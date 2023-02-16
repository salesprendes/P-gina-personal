<?php
    namespace classes;
    use PDO;

    class database
    {
        private static $conexion = null;
        
        private function __construct(){}
        private function __clone(){}
        
        private static function get_Conexion()
        {
            if (self::$conexion)
            {
                return self::$conexion;
            }
            self::$conexion = new PDO('mysql:host=localhost;dbname=pagina_curriculum', 'root', '');
            self::$conexion->exec("SET NAMES utf8");
            self::$conexion->exec("SET CHARACTER SET utf8");
            return self::$conexion;
        }
        
        public static function __callStatic($nombre, $valores)
        {
            return call_user_func_array(array(self::get_Conexion(), $nombre), $valores);
        }
    }
?>