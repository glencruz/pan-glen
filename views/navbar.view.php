<?php 

 ?>
<header class="header">
    <div class="pos-f-t">

        <nav class="nav">
            <div class="container-fluid">

                <div class="row justify-content-between">
                    <div class="logo offset-md-1 pl-4">
                        <a href="<?php echo RUTA ?>" class="mb-0">
                           
                            <h1 class="title beige v2 ">Panadería</h1>
                        </a>

                    </div>

                    <div class="user-icon d-none d-md-block ">
                        <a href=" <?=RUTA?>index.php?" class="mb-0">
                        <img src="<?php echo RUTA ?>sprites/home.svg" class="regular-logo">
                        </a>
                        <a href=" <?=RUTA?>productos.php?" class="mb-0">
                        <img src="<?php echo RUTA ?>sprites/bakery.svg" class="regular-logo">
                        <a href=" <?=RUTA?>contacto.php?" class="mb-0">
                        <img src="<?php echo RUTA ?>sprites/mail.svg" class="regular-logo">
                        </a>


                    </div>

                    <div class="toggle navbar-toggler">
                        <div class="bars" id="bar">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>
</header>
<div class="collapse d-block" id="navbarToggleExternalContent">
    <div class="row justify-content-end links title v2 cafe text-right flex-column">

        <a href="<?php if (isset( $isHome ) ){ echo '#home';} else{ echo RUTA.'#home';}?>" class="margen">Inicio</a>
        <a href="<?=RUTA?>productos.php">Productos</a>
        <a href="<?=RUTA?>contacto.php">Contacto</a>


    </div>
</div>