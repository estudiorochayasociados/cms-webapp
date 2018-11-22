<?php
$pages = ["contenidos","novedades","multimedia","usuarios"];
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-30">
    <div class="col-md-12">
        <a class="navbar-brand" href="#">AdWeb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown <?php if(!in_array('contenidos',$pages)) { echo 'd-none' ; } ?>">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Contenidos
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=verContenidos">Ver Contenidos</a>
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=agregarContenidos">Agregar Contenidos</a>
                    </div>
                </li>  
                <li class="nav-item dropdown <?php if(!in_array('multimedia',$pages)) { echo 'd-none' ; } ?>">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Multimedia
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=verNovedades">Novedades</a>                                
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=verVideos">Videos</a>                                
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=verSliders">Sliders</a>                                
                    </div>
                </li>   
                <li class="nav-item dropdown <?php if(!in_array('productos',$pages)) { echo 'd-none' ; } ?>">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Productos
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=verProductos">Ver Productos</a>
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=agregarProductos">Agregar Productos</a>
                    </div>
                </li>   
                <li class="nav-item dropdown <?php if(!in_array('portfolio',$pages)) { echo 'd-none' ; } ?>">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Portfolio
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=verPortfolio">Ver Portfolio</a>
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=agregarPortfolio">Agregar Portfolio</a>
                    </div>
                </li>  
                <li class="nav-item dropdown <?php if(!in_array('servicios',$pages)) { echo 'd-none' ; } ?>">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Servicios
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=verServicios">Ver Servicios</a>
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=agregarServicios">Agregar Servicios</a>
                    </div>
                </li>   
                <li class="nav-item dropdown <?php if(!in_array('usuarios',$pages)) { echo 'd-none' ; } ?>">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Usuarios
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=verUsuarios">Ver Usuarios</a>
                        <a class="dropdown-item" href="<?= URL ?>/index.php?op=agregarUsuarios">Agregar Usuarios</a>
                    </div>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>/index.php?op=salir">Salir</a>
                </li>                           
            </ul>
        </div>
    </div>
</nav>