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
	<h1 class="title">Reportes</h1>
	<h2 class="subtitle"><i class="fas fa-box-open fa-fw"></i> &nbsp; Reporte general de inventario</h2>
</div>

<div class="container is-fluid">
    <h4 class="titulofondo has-text-centered mt-6 mb-6">Generar reporte de inventario personalizado</h4>
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-two-thirds is-offset-one-fifth">
                <div class="field">
                    <label for="orden_reporte_inventario" class="label">Ordenar por</label>
                    <select class="input" name="orden_reporte_inventario" id="orden_reporte_inventario">
                        <option value="nasc" selected="" >Nombre (ascendente)</option>
                        <option value="ndesc">Nombre (descendente)</option>
                        <option value="sasc">Stock (menor - mayor)</option>
                        <option value="sdesc">Stock (mayor - menor)</option>
                        <option value="pasc">Precio (menor - mayor)</option>
                        <option value="pdesc">Precio (mayor - menor)</option>
                    </select>
                </div>
                <p class="has-text-centered mb-6" >
                    <button type="button" class="button is-link is-outlined" onclick="generar_reporte_inventario()" ><i class="far fa-file-pdf"></i> &nbsp; GENERAR REPORTE</button>
                </p>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function generar_reporte_inventario(){

        Swal.fire({
            title: '¿Quieres generar el reporte?',
            text: "La generación del reporte PDF puede tardar unos minutos para completarse",
            icon: 'question',
            showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, generar',
			cancelButtonText: 'No, cancelar'
        }).then((result) => {
            if (result.isConfirmed){

                let orden=document.querySelector('#orden_reporte_inventario').value;

                orden.trim();

                if(orden!=""){
                    url="<?php echo APP_URL; ?>app/pdf/report-inventory.php?order="+orden;
                    window.open(url,'Imprimir reporte de inventario','width=820,height=720,top=0,left=100,menubar=NO,toolbar=YES');
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Ocurrió un error inesperado',
                        text: 'Debe de seleccionar un orden para generar el reporte.',
                        confirmButtonText: 'Aceptar'
                    });
                }

            }
        });
    }
</script>