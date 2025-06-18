<?php include "./app/views/inc/admin_security.php"; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.minimize-btn').addEventListener('click', function() {
            document.querySelector('.container').style.display = 'none';
        });

        document.querySelector('.maximize-btn').addEventListener('click', function() {
            document.querySelector('.container').style.display = 'block';
        });

        document.querySelector('.close-btn').addEventListener('click', function() {
            window.location.href = "<?php echo APP_URL; ?>dashboard/";
        });
    });
</script>
<div class="dashboard-container">
    <div class="window-controls" style="position: absolute; top: 10px; right: 10px;">
        <i class="fa-light fa-window-minimize window-btn minimize-btn" title="Minimizar"></i>
        <i class="fa-solid fa-window-maximize window-btn maximize-btn" title="Maximizar"></i> <!-- Ícono de maximizar -->
        <i class="fa-solid fa-rectangle-xmark window-btn close-btn" title="Cerrar"></i> <!-- Ícono de cerrar -->
    </div>
<div class="dashboard-header">
	<h1 class="title">Empresa</h1>
	<h2 class="subtitle"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Datos de empresa</h2>
</div>

<div class="container pb-6 pt-6">
	<?php

		$datos=$insLogin->seleccionarDatos("Normal","empresa LIMIT 1","*",0);

		if($datos->rowCount()==1){
			$datos=$datos->fetch();
	?>
	<h2 style="font-size: 20px; border-radius: 10px 10px 0 0 " class="titulofondo has-text-centered"><?php echo $datos['empresa_nombre']; ?></h2> <br>

	<form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/empresaAjax.php" method="POST" autocomplete="off" >

		<input type="hidden" name="modulo_empresa" value="actualizar">
		<input type="hidden" name="empresa_id" value="<?php echo $datos['empresa_id']; ?>">

		<div class="columns">
			<div class="column">
		    	<?php if(is_file("./app/views/img/".$datos['empresa_foto'])){ ?>
                    <figure class="company-image">
                        <img src="<?php echo APP_URL; ?>app/views/img/<?php echo $datos['empresa_foto']; ?>">
                    </figure>
                <?php }else{ ?>
                    <figure class="company-image">
                        <img src="<?php echo APP_URL; ?>app/views/img/logo.png">
                    </figure>
                <?php } ?>
                <p class="has-text-centered mt-3" >
                	<a href="<?php echo APP_URL."companyImage/".$datos['empresa_id']; ?>" class="button is-link is-outlined"><i class="far fa-image"></i> &nbsp; Cambiar logo o imagen</a>
                </p>
		  	</div>
		</div>
  		<div class="columns">
  			<div class="column">
  				<div class="control">
					<label class="labelForze">Nombre <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="text" name="empresa_nombre" value="<?php echo $datos['empresa_nombre']; ?>" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ., ]{4,85}" maxlength="85" required >
				</div>
  			</div>
  			<div class="column">
		    	<div class="control">
					<label class="labelForze">Teléfono</label>
				  	<input class="input" type="text" name="empresa_telefono" value="<?php echo $datos['empresa_telefono']; ?>" pattern="[0-9()+]{8,20}" maxlength="20" >
				</div>
		  	</div>
  		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Email</label>
				  	<input class="input" type="email" name="empresa_email" value="<?php echo $datos['empresa_email']; ?>" maxlength="50" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Dirección</label>
				  	<input class="input" type="text" name="empresa_direccion" value="<?php echo $datos['empresa_direccion']; ?>" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,97}" maxlength="97" >
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-success is-rounded"><i class="fas fa-sync-alt"></i> &nbsp; Actualizar</button>
		</p>
		<p class="has-text-centered pt-6">
            <small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
        </p>
	</form>

	<?php }else{ ?>

	<form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/empresaAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data" >

		<input type="hidden" name="modulo_empresa" value="registrar">

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Nombre <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="text" name="empresa_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ., ]{4,85}" maxlength="85" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Teléfono</label>
				  	<input class="input" type="text" name="empresa_telefono" pattern="[0-9()+]{8,20}" maxlength="20" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Email</label>
				  	<input class="input" type="email" name="empresa_email" maxlength="50" >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Dirección</label>
				  	<input class="input" type="text" name="empresa_direccion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,97}" maxlength="97" >
				</div>
		  	</div>
		  	<div class="column">
				<div class="file has-name is-boxed">
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
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="reset" class="button is-link is-light is-rounded"><i class="fas fa-paint-roller"></i> &nbsp; Limpiar</button>
			<button type="submit" class="button is-info is-rounded"><i class="far fa-save"></i> &nbsp; Guardar</button>
		</p>
		<p class="has-text-centered pt-6">
            <small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
        </p>
	</form>

	<?php } ?>
</div>
</div>