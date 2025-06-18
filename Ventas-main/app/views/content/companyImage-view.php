<?php include "./app/views/inc/admin_security.php"; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.minimize-btn').addEventListener('click', function() {
            document.querySelector('.menu').style.display = 'none';
        });

        document.querySelector('.maximize-btn').addEventListener('click', function() {
            document.querySelector('.menu').style.display = 'block';
        });

        document.querySelector('.close-btn').addEventListener('click', function() {
            window.location.href = "<?php echo APP_URL; ?>dashboard/";
        });
    });
</script>
<div class="container is-fluid mb-6">
	<?php 

		$id=$insLogin->limpiarCadena($url[1]);

	?>

    <div class="dashboard-container">
        <div class="window-controls" style="position: absolute; top: 10px; right: 10px;">
            <i class="fa-light fa-window-minimize window-btn minimize-btn" title="Minimizar"></i>
            <i class="fa-solid fa-window-maximize window-btn maximize-btn" title="Maximizar"></i> <!-- Ícono de maximizar -->
            <i class="fa-solid fa-rectangle-xmark window-btn close-btn" title="Cerrar"></i> <!-- Ícono de cerrar -->
        </div>
    <div class="dashboard-header">

        <h1 class="title">Empresa</h1>
	    <h2 class="subtitle"><i class="far fa-image"></i> &nbsp; Actualizar logo o imagen de empresa</h2>
    </div>


<div class="container menu pb-6 pt-6">
	<?php
	
		include "./app/views/inc/btn_back.php";

		$datos=$insLogin->seleccionarDatos("Unico","empresa","empresa_id",$id);

		if($datos->rowCount()==1){
			$datos=$datos->fetch();
	?>

	<h2 class="title has-text-centered has-text-link"><?php echo $datos['empresa_nombre']; ?></h2>

	<div class="columns">
		<div class="column is-two-fifths">
			<h4 class="subtitle is-4 has-text-centered pb-6">Imagen o logo actual de la empresa</h4>
            <?php if(is_file("./app/views/img/".$datos['empresa_foto'])){ ?>
			<figure class="image mb-6">
                <img class="is-photo" src="<?php echo APP_URL; ?>app/views/img/<?php echo $datos['empresa_foto']; ?>">
			</figure>
			
			<form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/empresaAjax.php" method="POST" autocomplete="off" >

				<input type="hidden" name="modulo_empresa" value="eliminarFoto">
				<input type="hidden" name="empresa_id" value="<?php echo $datos['empresa_id']; ?>">

				<p class="has-text-centered">
					<button type="submit" class="button is-danger is-rounded"><i class="far fa-trash-alt"></i> &nbsp; Eliminar imagen o logo</button>
				</p>
			</form>
			<?php }else{ ?>
			<figure class="image mb-6">
			  	<img class="is-photo" src="<?php echo APP_URL; ?>app/views/img/logo.png">
			</figure>
			<?php }?>
		</div>


		<div class="column">
			<h4 class="subtitle is-4 has-text-centered pb-6">Actualizar imagen o logo de empresa</h4>
			<form class="mb-6 has-text-centered FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/empresaAjax.php" method="POST" enctype="multipart/form-data" autocomplete="off" >

				<input type="hidden" name="modulo_empresa" value="actualizarFoto">
				<input type="hidden" name="empresa_id" value="<?php echo $datos['empresa_id']; ?>">
				
				<label>Tipos de archivos permitidos: .PNG Tamaño máximo 5MB. Resolución recomendada 300px X 300px o superior manteniendo el aspecto cuadrado (1:1)</label><br><br>

				<div class="file has-name is-boxed is-justify-content-center mb-6">
				  	<label class="file-label">
						<input class="file-input" type="file" name="empresa_foto" accept=".png" >
						<span class="file-cta">
							<span class="file-label">
								Seleccione una imagen
							</span>
						</span>
						<span class="file-name">.PNG (MAX 5MB)</span>
					</label>
				</div>
				<p class="has-text-centered">
					<button type="submit" class="button is-success is-rounded"><i class="fas fa-sync-alt"></i> &nbsp; Actualizar imagen o logo</button>
				</p>
			</form>
		</div>
	</div></div>
	<?php
		}else{
			include "./app/views/inc/error_alert.php";
		}
	?>
</div></div>