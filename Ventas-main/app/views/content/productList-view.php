<?php include "./app/views/inc/admin_security.php"; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.minimize-btn').addEventListener('click', function() {
            document.querySelector('.lista-productos').style.display = 'none';
        });

        document.querySelector('.maximize-btn').addEventListener('click', function() {
            document.querySelector('.lista-productos').style.display = 'block';
        });

        document.querySelector('.close-btn').addEventListener('click', function() {
            window.location.href = "<?php echo APP_URL; ?>dashboard/";
        });
    });
</script>

<div class="dashboard-container" style="position: relative;">
    <!-- Íconos de minimizar, maximizar y cerrar dentro de dashboard-container -->
    <div class="window-controls" style="position: absolute; top: 10px; right: 10px;">
        <i class="fa-light fa-window-minimize window-btn minimize-btn" title="Minimizar"></i>
        <i class="fa-solid fa-window-maximize window-btn maximize-btn" title="Maximizar"></i> <!-- Ícono de maximizar -->
        <i class="fa-solid fa-rectangle-xmark window-btn close-btn" title="Cerrar"></i> <!-- Ícono de cerrar -->
    </div>

    <div class="dashboard-header">
        <h1 style="color: white" class="titulofondo">Productos</h1>
        <h2 class="subtitle">
            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de productos
        </h2>
    </div>

    <div style="text-align: left;" class="container pb-2 pt-2">
        <div class="form-rest mb-2 mt-2"></div>

        <div class="lista-productos" style="max-height: 400px; overflow-y: auto; overflow-x: hidden;">
            <?php
            use app\controllers\productController;

            $insProducto = new productController();
            echo $insProducto->listarProductoControlador($url[1], 10, $url[0], "", 0);
            ?>
        </div>
    </div>
</div>
