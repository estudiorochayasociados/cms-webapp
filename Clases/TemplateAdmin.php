<?php

namespace Clases;

class TemplateAdmin
{

    public $title;
    public $keywords;
    public $description;
    public $favicon;
    public $canonical;

    public function themeInit()
    {
        echo '<!DOCTYPE html>';
        echo '<html lang="es">';
        echo '<head>';
        include("inc/header.inc.php");
        echo '</head>';
        echo '<body>';
        include "inc/nav.inc.php";
        echo '<div class="container-fluid pb-100">';
    }

    public function themeEnd()
    {
        echo '</div>';
        echo '</body>';
        echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">';
        echo '</script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>';
        echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>';
        echo '<script src="'.URL.'/ckeditor/ckeditor.js"></script>';
        echo '<script src="'.URL.'/ckeditor/lang/es.js"></script>';
        echo '<script src="'.URL.'/js/script.js"></script>';
        echo '</html >';
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
}