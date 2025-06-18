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
<div class="dashboard-container">
    <div class="window-controls" style="position: absolute; top: 10px; right: 10px;">
        <i class="fa-light fa-window-minimize window-btn minimize-btn" title="Minimizar"></i>
        <i class="fa-solid fa-window-maximize window-btn maximize-btn" title="Maximizar"></i> <!-- Ícono de maximizar -->
        <i class="fa-solid fa-rectangle-xmark window-btn close-btn" title="Cerrar"></i> <!-- Ícono de cerrar -->
    </div>
<div class="container is-fluid mb-1">
	<?php 

		$id=$insLogin->limpiarCadena($url[1]);

		if($_SESSION['cargo']=="Cajero" && $id!=$_SESSION['id']){
			include "./app/views/content/logOut-view.php";
		}

		if($id==$_SESSION['id']){ 
	?>
	<h1 class="title">Mi cuenta</h1>
	<h2 class="subtitle"><i class="fas fa-sync-alt"></i> &nbsp; Actualizar cuenta</h2>
	<?php }else{ ?>
	<h1 class="title">Usuarios</h1>
	<h2 class="subtitle"><i class="fas fa-sync-alt"></i> &nbsp; Actualizar usuario</h2>
	<?php } ?>
</div>
<div  class="container menu pb-1 pt-1">
	<?php
	
		include "./app/views/inc/btn_back.php";

		$datos=$insLogin->seleccionarDatos("Unico","usuario","usuario_id",$id);

		if($datos->rowCount()==1){
			$datos=$datos->fetch();
	?>

	<div class="columns is-flex is-justify-content-center">
    	<figure class="image is-128x128">
    		<?php
    			if(is_file("./app/views/fotos/".$datos['usuario_foto'])){
    				echo '<img class="is-rounded" src="'.APP_URL.'app/views/fotos/'.$datos['usuario_foto'].'">';
    			}else{
    				echo '<img class="is-rounded" src="'.APP_URL.'app/views/fotos/default.png">';
    			}
    		?>
		</figure>
  	</div>

	<h2 class="title has-text-centered"><?php echo $datos['usuario_nombre']." ".$datos['usuario_apellido']; ?></h2>

	<form  style="max-height: 400px; overflow-y: auto; overflow-x: hidden;" class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/usuarioAjax.php" method="POST" autocomplete="off" >

		<input type="hidden" name="modulo_usuario" value="actualizar">
		<input type="hidden" name="usuario_id" value="<?php echo $datos['usuario_id']; ?>">

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Nombres <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" value="<?php echo $datos['usuario_nombre']; ?>" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Apellidos <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" value="<?php echo $datos['usuario_apellido']; ?>" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Usuario <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" value="<?php echo $datos['usuario_usuario']; ?>" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Email</label>
				  	<input class="input" type="email" name="usuario_email" maxlength="70" value="<?php echo $datos['usuario_email']; ?>" >
				</div>
		  	</div>
		</div>
		<div class="columns">

			<?php if($_SESSION['cargo']=="Administrador"){ ?>
			<div class="column">
		  		<label>Cargo <?php echo CAMPO_OBLIGATORIO; ?></label><br>
				<div class="select">
				  	<select name="usuario_cargo">
                        <option value="Administrador" <?php if($datos['usuario_cargo']=="Administrador"){ echo 'selected=""'; } ?> >Administrador <?php if($datos['usuario_cargo']=="Administrador"){ echo '(Actual)'; } ?></option>

                        <option value="Cajero" <?php if($datos['usuario_cargo']=="Cajero"){ echo 'selected=""'; } ?> >Cajero <?php if($datos['usuario_cargo']=="Cajero"){ echo '(Actual)'; } ?></option>
				  	</select>
				</div>
		  	</div>
		  	<?php } ?>

		  	<div class="column">
		  		<label>Caja de ventas <?php echo CAMPO_OBLIGATORIO; ?></label><br>
				<div class="select">
				  	<select name="usuario_caja">
                        <?php
                            $datos_cajas=$insLogin->seleccionarDatos("Normal","caja","*",0);

                            while($campos_caja=$datos_cajas->fetch()){
                            	if($campos_caja['caja_id']==$datos['caja_id']){
                            		echo '<option value="'.$campos_caja['caja_id'].'" selected="" >Caja No.'.$campos_caja['caja_numero'].' - '.$campos_caja['caja_nombre'].' (Actual)</option>';
                            	}else{
                                	echo '<option value="'.$campos_caja['caja_id'].'">Caja No.'.$campos_caja['caja_numero'].' - '.$campos_caja['caja_nombre'].'</option>';
                            	}
                            }
                        ?>
				  	</select>
				</div>
		  	</div>
		</div>
		<br>
		<p style="background-color: #f3ef03; border-radius: 10px 10px 0 0" class="has-text-centered">
			SI desea actualizar la clave de este usuario por favor llene los 2 campos. Si NO desea actualizar la clave deje los campos vacíos.
		</p>
		<br>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Nueva clave</label>
				  	<input class="input" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Repetir nueva clave</label>
				  	<input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
				</div>
		  	</div>
		</div>
		<br>
		<p style="background-color: #f3ef03; border-radius: 10px 10px 0 0" class="has-text-centered">
			Para poder actualizar los datos de este usuario por favor ingrese su USUARIO y CLAVE con la que ha iniciado sesión
		</p>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Usuario <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="text" name="administrador_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label class="labelForze">Clave <?php echo CAMPO_OBLIGATORIO; ?></label>
				  	<input class="input" type="password" name="administrador_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-success is-rounded"><i class="fas fa-sync-alt"></i> &nbsp; Actualizar</button>
		</p>
		<p class="has-text-centered pt-2">
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