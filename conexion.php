<?php
    class Db
    {
        private static $mysqli=NULL;
        private function __construct(){}

        public static function conectar()
        {
            $mysqli = new mysqli("localhost", "root", "","viplib");
            if ($mysqli ->connect_errno)
            {
                print "Error en la conexion: " . $mysqli->connect_errno;
                die();

            }
            return $mysqli;
        }
    }
?>