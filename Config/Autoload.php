<?php
namespace config;

class autoload
{
    public static function runSitio()
    {
        session_start();
        define('URL', "http://localhost/sitio-novedades");
        spl_autoload_register(
            function ($clase) {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once $ruta;
            }
        );
    }

    public static function runAdmin()
    {
        session_start();
        define('URL', "http://localhost/sitio-novedades/admin");
        require_once "../Clases/Zebra_Image.php";
        spl_autoload_register(
            function ($clase) {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once "../" . $ruta;
            }
        );
    }
}
