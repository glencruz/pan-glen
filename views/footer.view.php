<footer class="footer" id="">
	<div class="container-fluid">
		<div class="col-9 col-md-3 mx-auto ml-md-0 brand-container">
		<h1 class="title cafe v2 ">Panadería</h1>		
	</div>

		<div class="row mx-auto footer-main">
			<div class="col-12 col-md-2 menu-list">
				<a href="<?php if (isset( $isHome ) ){ echo '#home';} else{ echo RUTA.'#home';}?>" class="margen">Inicio</a>
				<a href="<?php if (isset( $isHome ) ){ echo '#productos';} else{ echo RUTA.'#productos';}?>">Productos</a>
				<a href="<?php if (isset( $isHome ) ){ echo '#contacto';} else{ echo RUTA.'#contacto';}?>">Contacto</a>
			</div>

			<div class="col-12 offset-md-1 col-md-3 menu-list">
                <p class="paragraph">Teléfono. 999 999 9999</p>
                <p>Dirección. Calle 31 No 198 A x 88 y 90, 97320, Centro 97320 Progreso, México</p>
                <p>Correo. panaderia@gmail.com</p>
			</div>

			
		</div>

		<div class="row mx-auto terms-container col-8">
			<div class="links">
                <span class="link paragraph cafe">Copyright © 2021 Panadería. Todos los derechos reservados. </span>
				
				
			</div>
		</div>
	</div>
</footer>

