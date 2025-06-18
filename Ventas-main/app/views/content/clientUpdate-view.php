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
        <h1 class="title">Clientes</h1>
        <h2 class="subtitle"><i class="fas fa-sync-alt"></i> &nbsp; Actualizar cliente</h2>
    </div>

    <div class="container pb-2 pt-2">
        <?php

        include "./app/views/inc/btn_back.php";

        $id = $insLogin->limpiarCadena($url[1]);

        $datos = $insLogin->seleccionarDatos("Unico", "cliente", "cliente_id", $id);

        if ($datos->rowCount() == 1) {
            $datos = $datos->fetch();
            ?>
            <fieldset
                    title="<?php echo $datos['cliente_nombre'] . " " . $datos['cliente_apellido'] . " (" . $datos['cliente_tipo_documento'] . ": " . $datos['cliente_numero_documento'] . ")"; ?>"
                    class="descUpdateCliente"
                    style="
                            position: relative;
                            border: #0a0a0a solid 1px;
                            background-color: #4d4f5f;
                            color: #fff;
                            font-size: 2rem;
                            font-weight: 600;
                            line-height: 1.125;
                            box-shadow: 0 14px 20px rgba(0, 0, 0, 0.2), 0 6px 20px #868895;
                            border-radius: 8px;
                            transition: transform 0.3s ease, box-shadow 0.3s ease;">

                <h2 class="has-text-centered"><?php echo $datos['cliente_nombre'] . " " . $datos['cliente_apellido'] . " (" . $datos['cliente_tipo_documento'] . ": " . $datos['cliente_numero_documento'] . ")"; ?></h2>


                <!-- Icono de copiar -->
                <i class="fas fa-copy" id="copyIcon" title="Copiar texto"
                   style="
                            position: absolute;
                            top: 7px;
                            right: 7px;
                            cursor: pointer;
                            font-size: 1.4rem;">

                </i>
            </fieldset><br>

            <!-- JavaScript para copiar el texto al portapapeles -->
            <div id="copyNotification" class="copy-notification">
                Texto copiado: <span id="copyText"></span>
            </div>

            <script>
                document.getElementById('copyIcon').addEventListener('click', function () {
                    const textToCopy = "<?php echo $datos['cliente_nombre'] . " " . $datos['cliente_apellido'] . " (" . $datos['cliente_tipo_documento'] . ": " . $datos['cliente_numero_documento'] . ")"; ?>";

                    navigator.clipboard.writeText(textToCopy).then(() => {
                        const notification = document.getElementById('copyNotification');
                        const copyText = document.getElementById('copyText');

                        copyText.textContent = textToCopy;
                        notification.classList.add('show');

                        // Ocultar la notificación después de 3 segundos
                        setTimeout(() => {
                            notification.classList.remove('show');
                        }, 3000);
                    }).catch(err => {
                        console.error('Error al copiar el texto: ', err);
                    });
                });

            </script>

            <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/clienteAjax.php" method="POST"
                  autocomplete="off">

                <input type="hidden" name="modulo_cliente" value="actualizar">
                <input type="hidden" name="cliente_id" value="<?php echo $datos['cliente_id']; ?>">

                <div class="columns">
                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Número de documento <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_numero_documento"
                                   value="<?php echo $datos['cliente_numero_documento']; ?>"
                                   pattern="[a-zA-Z0-9-]{7,30}" maxlength="30" required>
                        </div>
                    </div>
                    <div class="column is-half">
                        <div class="control">
                            <label>Tipo de documento <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <div class="select">
                                <select name="cliente_tipo_documento">
                                    <?php
                                    echo $insLogin->generarSelect(DOCUMENTOS_USUARIOS, $datos['cliente_tipo_documento']);
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="columns">
                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Nombres <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_nombre"
                                   value="<?php echo $datos['cliente_nombre']; ?>" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}"
                                   maxlength="40" required>
                        </div>
                    </div>
                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Apellidos <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_apellido"
                                   value="<?php echo $datos['cliente_apellido']; ?>"
                                   pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-one-third">
                        <div class="control">
                            <label class="labelForze">Estado, provincia o
                                departamento <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_provincia"
                                   value="<?php echo $datos['cliente_provincia']; ?>"
                                   pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="control">
                            <label class="labelForze">Ciudad o pueblo <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_ciudad"
                                   value="<?php echo $datos['cliente_ciudad']; ?>" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"
                                   maxlength="30" required>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="control">
                            <label class="labelForze">Calle o dirección de casa <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input class="input" type="text" name="cliente_direccion"
                                   value="<?php echo $datos['cliente_direccion']; ?>"
                                   pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,70}" maxlength="70" required>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Teléfono</label>
                            <input class="input" type="text" name="cliente_telefono"
                                   value="<?php echo $datos['cliente_telefono']; ?>" pattern="[0-9()+]{8,20}"
                                   maxlength="20">
                        </div>
                    </div>
                    <div class="column is-half">
                        <div class="control">
                            <label class="labelForze">Email</label>
                            <input class="input" type="email" name="cliente_email"
                                   value="<?php echo $datos['cliente_email']; ?>" maxlength="70">
                        </div>
                    </div>
                </div>


                <p class="has-text-centered">
                    <button type="submit" class="button is-success is-rounded"><i class="fas fa-sync-alt"></i> &nbsp;
                        Actualizar
                    </button>
                </p>
                <p class="has-text-centered pt-6">
                    <small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
                </p>
            </form>
            <?php
        } else {
            include "./app/views/inc/error_alert.php";
        }
        ?>
    </div>
</div>