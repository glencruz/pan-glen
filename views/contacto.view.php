<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Productos - Panadería</title>

		
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
        

		<section id="contacto" class="contacto">
			<div class="container-fluid">
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="puntos"> </div>
                            <div class="ml-4">
                                <h1 class="title v2 cafe">
                                    Contacto
                                </h1>

                            </div>

                        </div>
					</div>
				</div>
			</div>
		</div>

	<div class="col-md-5 col-12 offset-md-4">
		<form action="<?=RUTA?>enviar.php" class="form-contact hide-on-submit" id="contact-form" name="enviar" method="post" enctype="multipart/form-data">
            <input type="text" id="nombre" name="name" value="" placeholder="Nombre">
            <input type="email" id="email" name="email" value="" placeholder="E-mail">
            <input type="text" id="asunto" name="subject" value="" placeholder="Asunto">
            <textarea type="textarea" rows="5" name="message" id="mensaje" value=""placeholder="Mensaje"></textarea>
			<button type="submit" value="Enviar" class="button">Enviar</button>
        </form>

                           
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