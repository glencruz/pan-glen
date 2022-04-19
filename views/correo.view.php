<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Correo Enviado</title>

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
					<div class="col-md-5 offset-md-1" style="margin-bottom: 2.5rem;">
						<div class="row">
							<div class="col-md-12">
								<div class="puntos"> </div>
								<div class="ml-4">
									<h1 class="title v2 cafe">
										Correo enviado 
									</h1>

								</div>

							</div>
						</div>
					</div>
					<div class="col-md-12 body offset-md-1">
                            <div class="paragraph black v3 col-md-10">
                               Tu correo ha sido enviado, nos pondremos en contacto contigo en breve.

                            </div>
				</div>
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