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
        

        <section class="casos">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-11 offset-md-1">
						<div class="row">
							<div class="puntos"> 
							</div>
							<div class="ml-4">
								<h1 class="title v2 cafe">
									Productos
								</h1>							
							</div>
						</div>
					</div>
				</div>
				

			<div class="row carousel-blog">
					<div class="slider" id="slider-posts" posts="<?php echo count($productos) ?>">
					<?php foreach ($productos as $producto): ?>
						<div class="preview-post">
								<figure>
									<img src="<?php echo RUTA ?>bd/<?php echo $producto['imagen'] ?> " class="img-fluid mw" alt="" height="300px" width="500px">
								</figure>
								<div class="content">
									<h1 class="title2 black">
									<?php echo $producto['producto'] ?>
									</h1>
									<div class="paragraph black">
									<?php echo $producto['descripcion'] ?>
									<br>
									$ <?php echo $producto['precio'] ?> MXN							</div>
								</div>	
						</div>
						<?php endforeach ?>	
					</div>
				</div>

				<div class="control row  "> 
					<div class="col-md-10 mx-auto text-center">
						<div class="row ">
							<div class="next" id="offset-left">
								<img src="<?=RUTA?>sprites/left.svg" alt="">
							</div>
							<div class="next ml-auto" id="offset-right">
								<img src="<?=RUTA?>sprites/right.svg" alt="">
							</div>
						</div>			
						
						
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