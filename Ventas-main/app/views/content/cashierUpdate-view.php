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
	<h1 class="title">Cajas</h1>
	<h2 class="subtitle"><i class="fas fa-sync-alt"></i> &nbsp; Actualizar caja</h2>
</div>

<div class="container pb-2 pt-v c 2">
	<?php
	
		include "./app/views/inc/btn_back.php";

		$id=$insLogin->limpiarCadena($url[1]);

		$datos=$insLogin->seleccionarDatos("Unico","caja","caja_id",$id);

		if($datos->rowCount()==1){
			$datos=$datos->fetch();
	?>

	<h2 class="title has-text-centered"><?php echo $datos['caja_nombre']." #".$datos['caja_numero']; ?></h2>

	<form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/cajaAjax.php" method="POST" autocomplete="off" >

		<input type="hidden" name="modulo_caja" value="actualizar">
		<input type="hidden" name="caja_id" value="<?php echo $datos['caja_id']; ?>">

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Numero de caja <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="text" name="caja_numero" pattern="[0-9]{1,5}" maxlength="5" value="<?php echo $datos['caja_numero']; ?>" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Nombre o código de caja <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="text" name="caja_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ:# ]{3,70}" maxlength="70" value="<?php echo $datos['caja_nombre']; ?>" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Efectivo en caja <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="text" name="caja_efectivo" pattern="[0-9.]{1,25}" maxlength="25" value="<?php echo number_format($datos['caja_efectivo'],2,'.',''); ?>" required >
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
	<?php
		}else{
			include "./app/views/inc/error_alert.php";
		}
	?>
</div>
</div>