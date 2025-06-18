<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.minimize-btn').addEventListener('click', function() {
            document.querySelector('.FormularioAjax').style.display = 'none';
        });

        document.querySelector('.maximize-btn').addEventListener('click', function() {
            document.querySelector('.FormularioAjax').style.display = 'block';
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
        <div class="container is-fluid mb-6">
            <h1 class="title">Clientes</h1>
            <h2 class="subtitle"><i class="fas fa-male fa-fw"></i> &nbsp; Nuevo cliente</h2>
        </div>

        <div class="container pb-6 pt-6">
            <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/clienteAjax.php" method="POST" autocomplete="off">
                <input type="hidden" name="modulo_cliente" value="registrar">

                <div class="columns is-multiline">
                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Tipo de documento <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <div class="select is-fullwidth">
                                <select name="cliente_tipo_documento">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <?php
                                    echo $insLogin->generarSelect(DOCUMENTOS_USUARIOS, "VACIO");
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Numero de documento <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_numero_documento" pattern="[a-zA-Z0-9-]{7,30}" maxlength="30" required>
                        </div>
                    </div>

                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Nombres <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                        </div>
                    </div>

                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Apellidos <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                        </div>
                    </div>

                    <div class="column is-one-third">
                        <div class="control">
                            <label class="labelForze">Estado, provincia o departamento <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_provincia" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
                        </div>
                    </div>

                    <div class="column is-one-third">
                        <div class="control">
                            <label class="labelForze">Ciudad o pueblo <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_ciudad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
                        </div>
                    </div>

                    <div class="column is-one-third">
                        <div class="control">
                            <label class="labelForze">Calle o dirección de casa <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_direccion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,70}" maxlength="70" required>
                        </div>
                    </div>

                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Teléfono</label>
                            <input class="input" type="text" name="cliente_telefono" pattern="[0-9()+]{8,20}" maxlength="20">
                        </div>
                    </div>

                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Email</label>
                            <input class="input" type="email" name="cliente_email" maxlength="70">
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
        </div>
    </div>
</div>
