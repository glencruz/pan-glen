<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio - Ejercicio</title>


    <meta name="root-url" content="<?php echo RUTA ?>" />


    <?php echo $favicon; ?>
    <?php echo $normalize_css; ?>
    <?php echo $boostrap_v4_css ?>

    <!-- Font awesome -->
    <?php echo $font_awesome_css; ?>
    <!-- CSS own files -->
    <?php echo $own_file_css; ?>


</head>

<body>

    <?php require("views/navbar.view.php"); ?>

    

    <section class="banner" id="home">

        <div class="image">
            <figure>
                <img src="<?php echo RUTA ?>img/wall.jpg" class="d-none d-md-block w-100" alt="...">
                <img src="<?php echo RUTA ?>img/wall.jpg" class="d-block d-md-none w-100" alt="...">
            </figure>
            
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11 offset-md-1">
                        <h1 class="title beige v3 mb-5">
                            Bienvenido
                        </h1>


                    </div>
                    <div class="col-md-5 offset-md-4">
                        <div class="paragraph v3 white mb-4">
                           Somos una panadería dedicada a la elaboración de panes 100% caseros
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>








    <section class="about" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="puntos"> </div>
                                <div class="ml-4">
                                    <h1 class="title v2 cafe">
                                        Acerca de nosotros
                                    </h1>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 body">
                            <div class="paragraph black v3 col-md-10">
                                En esta panaderia en linea te ofrecemos gran variedad de panes.

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <figure>
                        <img src="<?php echo RUTA ?>img/pan.jpg" alt="" class="img-fluid mw">
                    </figure>
                </div>
            </div>
        </div>
    </section>


   
    <section class="contacto1" id="contacto1">
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="puntos"> </div>
                                <div class="ml-4">
                                    <h1 class="title v2 cafe">
                                       Ubicación
                                    </h1>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4023.7905740453475!2d-89.66213140727653!3d21.284943648712154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f55dcd52dba7271%3A0x30bab80440e6c07d!2sTere%20Cazola!5e0!3m2!1ses-419!2smx!4v1620441444963!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12" style="margin-top: 10rem;">
                        <p class="paragraph v3 beige">Teléfono.<bold class="paragraph v3 black"> 999 999 9999</bold>
                        </p>
                        <p class="paragraph v3 beige">Dirección.<bold class="paragraph v3 black"> Calle 31 No 198 A x 88 y 90,
                                97320, Centro 97320 Progreso, México</bold>
                        </p>
                        <p class="paragraph v3 beige">Correo.<bold class="paragraph v3 black"> panaderia@gmail.com</bold>
                        </p>
                </div>
            </div>
        </div>
    </section>

    <section class="strip">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-md-10 mx-auto">
                    <div class="row justify-content-around">

                        <div class="col-md-4 text-center ">
                            <figure class="mb-5">
                                <!--<img src="<?php echo RUTA ?>img/vestidos.png"> -->
                                <img style="max-height: 70px;" src="<?php echo RUTA ?>sprites/bread.svg">
                            </figure>

                            <div class="paragraph v3 cafe">
                                Pan
                            </div>
                        </div>
                        <div class="col-md-4 text-center ">
                            <figure class="mb-5">
                                <!--<img src="<?php echo RUTA ?>img/accesorios.png"> -->
                                <img style="max-height: 70px;" src="<?php echo RUTA ?>sprites/cookies.svg">
                            </figure>

                            <div class="paragraph v3 cafe">
                                Galletas 
                            </div>
                        </div>
                        <div class="col-md-4 text-center ">
                            <figure class="mb-5">
                                <!--<img src="<?php echo RUTA ?>img/accesorios.png"> -->
                                <img style="max-height: 70px;" src="<?php echo RUTA ?>sprites/muffin.svg">
                            </figure>

                            <div class="paragraph v3 cafe">
                                Panques 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="servicios" id="servicios">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 offset-md-1">
						<div class="row">
							<div class="puntos"> </div>
							<div class="ml-4">
								<h1 class="title v2 cafe">
									Elaboramos
								</h1>
							</div>	
						</div>						
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-md-4 offset-md-1">		
					
						<div class="d-flex align-items-center mt-3">
							<figure>
								<img src="<?php echo RUTA ?>img/dulce.jpg" alt="" width="250" height="200">
							</figure>

							<div class="paragraph v3 black ml-5	">
							    Panes dulces
							</div>
						</div>
													
					</div>
                    <div class="col-md-4 offset-md-1">		
                    <div class="d-flex align-items-center mt-3">
							<figure>
								<img src="<?php echo RUTA ?>img/salado.jpg" alt="" width="250" height="200">
							</figure>

							<div class="paragraph v3 black ml-5	">
								 Panes salados
							</div>
						</div>
                    </div>
					
				</div>

			</div>
		</section>



    <section class="blog" id="blog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11 offset-md-1">
                    <div class="row">
                        <div class="puntos"> </div>
                        <div class="ml-4">
                            <h1 class="title v2 cafe">
                                Productos
                            </h1>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Cada vista previa del post mide 498.395px en una resolución de 1366.  -->
            <div class="row carousel-blog">
                <div class="slider" id="slider-posts" posts="4">
                    <?php foreach ($productos as $producto): ?>
                    <div class="preview-post">
                        <a href=" <?=RUTA?>producto.php?id=<?php echo $producto['id_producto'] ?> ">
                            <figure>
                                <!--https://placehold.it/534x325 -->
                                <img src="<?php echo RUTA ?>bd/<?php echo $producto['imagen'] ?> " class="img-fluid mw"
                                     alt="">
                            </figure>
                            <div class="content">
                                <h1 class="title2 black">
                                    <?php echo $producto['producto'] ?>

                                </h1>
                                <div class="paragraph black">
                                    <?php echo $producto['descripcion'] ?>
                                    <br>
                                    $ <?php echo $producto['precio'] ?> MXN
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="control row d-none d-md-block w-100 ">
                <div class="col-md-10 mx-auto text-center">
                    <div class="row ">
                        <div class="next" id="offset-left">
                            <img src="<?=RUTA?>sprites/left.svg" alt="">
                        </div>
                        <div class="next ml-auto" id="offset-right">
                            <img src="<?=RUTA?>sprites/right.svg" alt="">
                        </div>
                    </div>

                    <a href="<?=RUTA?>productos.php" class="ancla cafe mt-5 d-md-block w-100"> Ver más </a>
                </div>
            </div>

            <a href="<?=RUTA?>productos.php" class="ancla cafe mt-5 text-center d-block d-md-none w-100"> Ver más </a>
        </div>
    </section>



    <?php require("views/footer.view.php"); ?>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <?php echo $jquery_js; ?>

    <!-- Javascripts own files  -->
    <?php echo $own_file_js; ?>

    <?php echo $bootstrap_v4_js; ?>


    <?php echo $font_awesome_js; ?>

</body>

</html>