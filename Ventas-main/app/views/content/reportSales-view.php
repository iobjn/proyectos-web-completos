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
	<h2 class="subtitle"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Reporte general de ventas</h2>
</div>

<div class="container is-fluid">
    <div id="today-sales">
        <h4 class="titulofondo has-text-centered mt-6 mb-6">Estadísticas de ventas de hoy (<?php echo date("d-m-Y"); ?>)</h4>
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th class="has-text-centered">Ventas realizadas</th>
                        <th class="has-text-centered">Total en ventas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $fecha_hoy=date("Y-m-d");
                        $check_ventas=$insLogin->seleccionarDatos("Normal","venta WHERE venta_fecha='$fecha_hoy'","*",0);

                        $ventas_totales=0;
                        $total_ventas=0;

                        if($check_ventas->rowCount()>=1){
                            $datos_ventas=$check_ventas->fetchAll();

                            foreach($datos_ventas as $ventas){
                                $ventas_totales++;
                                $total_ventas+=$ventas['venta_total'];
                            }
                    ?>
                    <tr class="has-text-centered">
                        <td><?php echo $ventas_totales; ?></td>
                        <td><?php echo MONEDA_SIMBOLO.number_format($total_ventas,MONEDA_DECIMALES,MONEDA_SEPARADOR_DECIMAL,MONEDA_SEPARADOR_MILLAR).' '.MONEDA_NOMBRE; ?></td>
                    </tr>
                    <?php }else{ ?>
                    <tr class="has-text-centered">
                        <td colspan="2">NO HAY VENTAS REALIZADAS EL DÍA DE HOY</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr style="background-color: #4c4e5e;>
    <div class="container is-fluid">
        <h4  class="titulofondo has-text-centered mt-6 mb-6">Generar reporte personalizado</h4>
        <div class="container is-fluid">
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label for="fecha_inicio" class="label" >Fecha inicial (día/mes/año)</label>
                        <input type="date" class="input" name="fecha_inicio" id="fecha_inicio" maxlength="30">
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label for="fecha_final" class="label" >Fecha final (día/mes/año)</label>
                        <input type="date" class="input" name="fecha_final" id="fecha_final" maxlength="30">
                    </div>
                </div>
            </div>
            <p class="has-text-centered mb-6">
                <button type="button" class="button is-link is-outlined" onclick="generar_reporte()" ><i class="far fa-file-pdf"></i> &nbsp; GENERAR REPORTE</button>
            </p>
        </div>
    </div>
</div>

<script>
    function generar_reporte(){

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

                let fecha_inicio=document.querySelector('#fecha_inicio').value;
                let fecha_final=document.querySelector('#fecha_final').value;

                fecha_inicio.trim();
                fecha_final.trim();

                if(fecha_inicio!="" && fecha_final!=""){
                    url="<?php echo APP_URL; ?>app/pdf/report-sales.php?fi="+fecha_inicio+"&&ff="+fecha_final;
                    window.open(url,'Imprimir reporte de ventas','width=820,height=720,top=0,left=100,menubar=NO,toolbar=YES');
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Ocurrió un error inesperado',
                        text: 'Debe de ingresar la fecha de inicio y final para generar el reporte.',
                        confirmButtonText: 'Aceptar'
                    });
                } 
            }
        });
    }
</script>