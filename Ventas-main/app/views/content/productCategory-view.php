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
        <h1 class="title">Productos</h1>
        <h2 class="subtitle"><i class="fas fa-boxes fa-fw"></i> &nbsp; Productos por categoría</h2>
    </div>

    <div class="container pb-6 pt-6">
        <?php
        use app\controllers\productController;
        $insProducto = new productController();
        ?>
        <div class="columns">

            <!-- Columna de Categorías con Scroll -->
            <div class="column is-one-third" style="max-height: 600px; overflow-y: auto;">
                <h2 class="title has-text-centered">Categorías</h2>
                <?php
                $datos_categorias = $insProducto->seleccionarDatos("Normal", "categoria", "*", 0);
                if ($datos_categorias->rowCount() > 0) {
                    $datos_categorias = $datos_categorias->fetchAll();
                    foreach ($datos_categorias as $row) {
                        echo '<a href="'.APP_URL.$url[0].'/'.$row['categoria_id'].'/" class="button is-link is-inverted is-fullwidth">'.$row['categoria_nombre'].'</a>';
                    }
                } else {
                    echo '<p class="has-text-centered">No hay categorías registradas</p>';
                }
                ?>
            </div>

            <!-- Columna de Resultados de la Categoría -->
            <div style="text-align: left;" class="column pb-6">
                <?php
                $categoria_id = (isset($url[1])) ? $url[1] : 0;
                $categoria = $insProducto->seleccionarDatos("Unico", "categoria", "categoria_id", $categoria_id);

                if ($categoria->rowCount() > 0) {
                    $categoria = $categoria->fetch();

                    echo '
                        <h2 class="title has-text-centered">'.$categoria['categoria_nombre'].'</h2>
                        <p class="has-text-centered pb-6">'.$categoria['categoria_ubicacion'].'</p>
                    ';

                    echo $insProducto->listarProductoControlador($url[2], 10, $url[0], "", $url[1]);
                } else {
                    echo '
                    <p class="has-text-centered pb-6"><i class="far fa-grin-wink fa-5x"></i></p>
                    <h2 class="has-text-centered title">Seleccione una categoría para empezar</h2>';
                }
                ?>
            </div>

        </div>
    </div>
</div>
