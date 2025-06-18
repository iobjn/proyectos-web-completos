<div class="container is-fluid">
	<h1 style="font-size: 2em" "class="title"><i class="fab fa-dashcube fa-fw"></i>&nbsp;DASHBOARD</h1>
    <p>¡Bienvenido <span style="font-weight: bold"><?php echo $_SESSION['usuario']; ?></span>! Este es el panel principal del sistema acá podrá encontrar atajos para acceder a los distintos listados de cada módulo del sistema.</p>
    <br><div class="columns is-flex is-justify-content-center">
<!--    	<figure class="image is-128x128">-->
<!--    		--><?php
//    			if(is_file("./app/views/fotos/".$_SESSION['foto'])){
//    				echo '<img class="is-rounded" src="'.APP_URL.'app/views/fotos/'.$_SESSION['foto'].'">';
//    			}else{
//    				echo '<img class="is-rounded" src="'.APP_URL.'app/views/fotos/default.png">';
//    			}
//    		?>
<!--		</figure>-->
  	</div>
  	<div class="columns is-flex is-justify-content-center">
<!--  		<h2 class="subtitle">¡Bienvenido --><?php //echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?><!--!</h2>-->
  	</div>
</div>
<?php
	$total_cajas=$insLogin->seleccionarDatos("Normal","caja","caja_id",0);

	$total_usuarios=$insLogin->seleccionarDatos("Normal","usuario WHERE usuario_id!='1' AND usuario_id!='".$_SESSION['id']."'","usuario_id",0);

	$total_clientes=$insLogin->seleccionarDatos("Normal","cliente WHERE cliente_id!='1'","cliente_id",0);

	$total_categorias=$insLogin->seleccionarDatos("Normal","categoria","categoria_id",0);

	$total_productos=$insLogin->seleccionarDatos("Normal","producto","producto_id",0);

	$total_ventas=$insLogin->seleccionarDatos("Normal","venta","venta_id",0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            .container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .box-section {
                display: flex;
                justify-content: space-around;
                margin-bottom: 10px;
            }

            .box {
                text-align: center;
                padding: 20px;
                border: 1px solid #d7d7d7;
                border-radius: 8px;
                width: 200px!important;
                height: 200px!important;
                transition: all .2s ease;
                display: flex;
                flex-direction: column;
                align-items: center;
                position: relative;
                margin-bottom: 10px;
                margin_top: 20px;
                margin-left: 20px;
            }

            .box:hover {
                border-color: #ffffff;
                background-color: #ffffff;
                color: #007bff;
            }

            .box i {
                font-size: 5em;
                margin-bottom: 10px;
                color: #455a64;
            }

            .box:hover i {
                color: #007bff;
            }

            .box p.heading {
                color: #485a64;
                margin: 0;
                font-size: 1.2em;
                font-weight: bold;
            }

            .box:hover p.heading {
                color: #007bff;
            }

            .box p.title {
                color: #455a64;
                font-size: 0.9em;
            }

            .box:hover p.title {
                color: #007bff;
            }

            /* Estilos para la barra de herramientas */
            .box:hover::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 5px;
                background-color: #007bff;
                transition: all 0.3s ease;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }

            /* Estilos para el hr */
            .box hr {
                margin: 10px 0;
                border: none;
                height: 2px;
                background-image: linear-gradient(to right, transparent, #007bff, transparent);
            }
        </style>
    
    </head>
    <body>

    <div style="max-width: 1490px!important;" class="container pb-6 pt-6">

        <!-- Sección 1: Cajas -->
        <div class="box-section">
            <div class="box">
                <a href="<?php echo APP_URL; ?>cashierList/">
                    <p class="heading">Cajas</p>
                    <hr>
                    <i class="fas fa-cash-register"></i>
                    <p class="title"><?php echo $total_cajas->rowCount(); ?> Registrados</p>
                </a>
            </div>

            <div class="box">
                <a href="<?php echo APP_URL; ?>provedorList/">
                    <p class="heading">Proveedores</p>
                    <hr>
                    <i class="fas fa-shipping-fast fa-fw"></i>
                    <p class="title"><?php echo $total_clientes->rowCount(); ?> Registrados</p>
                </a>
            </div>



            <div class="box">
                <a href="<?php echo APP_URL; ?>categoryList/">
                    <p class="heading">Categorías</p>
                    <hr>
                    <i class="fas fa-suitcase-rolling"></i>
                    <p class="title"><?php echo $total_categorias->rowCount(); ?> Registrados</p>
                </a>
            </div>

            <div class="box">
                <a href="<?php echo APP_URL; ?>userList/">
                    <p class="heading">Usuarios</p>
                    <hr>
                    <i class="fas fa-user-tie fa-fw"></i>
                    <p class="title"><?php echo $total_usuarios->rowCount(); ?> Registrados</p>
                </a>
            </div>

            <div class="box">
                <a href="<?php echo APP_URL; ?>productList/">
                    <p class="heading">Productos</p>
                    <hr>
                    <i class="fas fa-boxes fa-fw"></i>
                    <p class="title"><?php echo $total_productos->rowCount(); ?> Registrados</p>
                </a>
            </div>

            <div class="box">
                <a href="<?php echo APP_URL; ?>clientList/">
                    <p class="heading">Clientes</p>
                    <hr>
                    <i class="fas fa-child fa-fw"></i>
                    <p class="title"><?php echo $total_clientes->rowCount(); ?> Registrados</p>
                </a>
            </div>

            <div class="box">
                <a href="<?php echo APP_URL; ?>movList/">
                    <p class="heading">Movimientos</p>
                    <hr>
                    <i class="fas fa-money-check-alt fa-fw"></i>
                    <p class="title"><?php echo $total_clientes->rowCount(); ?> Registrados</p>
                </a>
            </div>


        </div>

        <!-- Sección 2: Categorías, Productos, Ventas -->
        <div class="box-section">



            <div class="box">
                <a href="<?php echo APP_URL; ?>saleList/">
                    <p class="heading">Ventas</p>
                    <hr>
                    <i class="fas fa-coins fa-fw"></i>
                    <p class="title"><?php echo $total_ventas->rowCount(); ?> Registrados</p>
                </a>
            </div>

            <div class="box">
                <a href="<?php echo APP_URL; ?>cotiList/">
                    <p class="heading">Cotizaciones</p>
                    <hr>
                    <i class="fas fa-file-invoice fa-fw"></i>
                    <p class="title"><?php echo $total_categorias->rowCount(); ?> Registrados</p>
                </a>
            </div>

            <div class="box">
                <a href="<?php echo APP_URL; ?>devoList/">
                    <p class="heading">Devoluciones</p>
                    <hr>
                    <i class="fas fa-people-carry fa-fw"></i>
                    <p class="title"><?php echo $total_categorias->rowCount(); ?> Registrados</p>
                </a>
            </div>

            <div class="box">
                <a href="<?php echo APP_URL; ?>comprasList/">
                    <p class="heading">Compras</p>
                    <hr>
                    <i class="fas fa-file-invoice-dollar fa-fw"></i>
                    <p class="title"><?php echo $total_categorias->rowCount(); ?> Registrados</p>
                </a>
            </div>


            <div class="box">
                <a href="<?php echo APP_URL; ?>kardexList/">
                    <p class="heading">Kardex</p>
                    <hr>
                    <i class="fas fa-pallet fa-fw"></i>
                    <p class="title"><?php echo $total_categorias->rowCount(); ?> Registrados</p>
                </a>
            </div>


            <div class="box">
                <a href="<?php echo APP_URL; ?>reportesList/">
                    <p class="heading">Reportes</p>
                    <hr>
                    <i class="far fa-file-pdf fa-fw"></i>
                    <p class="title"><?php echo $total_categorias->rowCount(); ?> Registrados</p>
                </a>
            </div>




        </div>

    </div>
    <div class="side-nav-widget gcss-theme-dark close hide-side-nav medium" role="navigation" aria-label="side navigation"><ul><li><a href="/prueba-de-manejo.html" target="_self" linktype="nav" data-lid="side-nav-prueba-de-manejo" data-lpos="side-nav" data-adobe-linktype="func" role="link" aria-label="PRUEBA DE MANEJO" aria-required="true"><span class="title-txt gcss-typography-label-4"><span class="sideText ">PRUEBA DE MANEJO</span></span><span class="icon gcss-icon-steering-wheel"></span></a></li><li><a href="/cotizar.html" target="_self" linktype="nav" data-lid="side-nav-cotizar" data-lpos="side-nav" data-adobe-linktype="func" role="link" aria-label="COTIZAR" aria-required="true"><span class="title-txt gcss-typography-label-4"><span class="sideText ">COTIZAR</span></span><span class="icon gcss-icon-brochure"></span></a></li><li><a href="https://calculadora.jeep.com.mx/" target="_blank" linktype="nav" data-lid="side-nav-calcula-tu-credito" data-lpos="side-nav" data-adobe-linktype="func" role="link" aria-label="CALCULA TU CRÉDITO (Open in a new Window)" aria-required="true"><span class="title-txt gcss-typography-label-4"><span class="sideText showicon">CALCULA TU CRÉDITO</span></span><span class="icon gcss-icon-calculator"></span></a></li><li><a href="/promociones.html" target="_self" linktype="nav" data-lid="side-nav-promociones" data-lpos="side-nav" data-adobe-linktype="func" role="link" aria-label="PROMOCIONES" aria-required="true"><span class="title-txt gcss-typography-label-4"><span class="sideText ">PROMOCIONES</span></span><span class="icon gcss-icon-tag"></span></a></li><li><a href="/distribuidores.html" target="_self" linktype="nav" data-lid="side-nav-distribuidores" data-lpos="side-nav" data-adobe-linktype="func" role="link" aria-label="DISTRIBUIDORES" aria-required="true"><span class="title-txt gcss-typography-label-4"><span class="sideText ">DISTRIBUIDORES</span></span><span class="icon gcss-icon-location"></span></a></li><li class="inline-block"><span class="inline-links"><a href="https://www.facebook.com/JeepMexico" linktype="nav" target="_blank" data-lid="side-nav-facebook" data-lpos="side-nav" data-adobe-linktype="func" role="link" rel="noopener noreferrer"><span class="icon gcss-icon-facebook"></span></a><a href="https://twitter.com/jeepmx" linktype="nav" target="_blank" data-lid="side-nav-twitter" data-lpos="side-nav" data-adobe-linktype="func" role="link" rel="noopener noreferrer"><span class="icon gcss-icon-twitter"></span></a><a href="https://www.instagram.com/jeepmexico/" linktype="nav" target="_blank" data-lid="side-nav-instagram" data-lpos="side-nav" data-adobe-linktype="func" role="link" rel="noopener noreferrer"><span class="icon gcss-icon-instagram"></span></a><a href="https://www.youtube.com/user/JeepEnMexico" linktype="nav" target="_blank" data-lid="side-nav-youtube" data-lpos="side-nav" data-adobe-linktype="func" role="link" rel="noopener noreferrer"><span class="icon gcss-icon-youtube"></span></a></span><span class="icon gcss-icon-share"></span></li></ul></div>

    <style>
        sub {
            font-size: .4em;
            top: .04rem
        }

        .side-nav-widget.small.close ul li:focus-within .inline-links,.side-nav-widget.small.close ul li:focus-within span.title-txt,.side-nav-widget.small.close ul li:hover .inline-links,.side-nav-widget.small.close ul li:hover span.title-txt,.side-nav-widget.small ul li.inline-block .inline-links,.side-nav-widget.small ul li a span.title-txt,.width-focus-small,.width-hover-small,.width-small {
            width: 150px
        }

        .side-nav-widget.medium.close ul li:focus-within .inline-links,.side-nav-widget.medium.close ul li:focus-within span.title-txt,.side-nav-widget.medium.close ul li:hover .inline-links,.side-nav-widget.medium.close ul li:hover span.title-txt,.side-nav-widget.medium ul li.inline-block .inline-links,.side-nav-widget.medium ul li a span.title-txt,.width-focus-medium,.width-hover-medium,.width-medium {
            width: 200px
        }

        .side-nav-widget.large.close ul li:focus-within .inline-links,.side-nav-widget.large.close ul li:focus-within span.title-txt,.side-nav-widget.large.close ul li:hover .inline-links,.side-nav-widget.large.close ul li:hover span.title-txt,.side-nav-widget.large ul li.inline-block .inline-links,.side-nav-widget.large ul li a span.title-txt,.width-focus-large,.width-hover-large,.width-large {
            width: 250px
        }

        .side-nav-widget {
            position: fixed;
            top: 59%;
            right: 0;
            margin-top: -110px;
            z-index: 104;
            transition: .4s
        }

        @media screen and (max-width: 1004px) {
            .side-nav-widget.hide-side-nav {
                display:none
            }
        }

        .side-nav-widget ul li {
            margin-bottom: 3px
        }

        .side-nav-widget ul li a {
            text-decoration: none;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .side-nav-widget ul li a,.side-nav-widget ul li a span.title-txt {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        .side-nav-widget ul li a span.title-txt {
            font-weight: 700;
            height: 42px;
            transition: width .4s
        }

        .side-nav-widget ul li a span.title-txt .sideText {
            padding: 0 20px 0 15px;
            white-space: nowrap
        }

        .side-nav-widget ul li a span .sideText.showicon:before {
            font-size: .7142857143rem;
            line-height: 1.33;
            content: "\EB14";
            font-family: GCSS Icons;
            font-weight: 400;
            position: relative;
            left: .4285714286rem;
            line-height: unset;
            margin-right: .7142857143rem
        }

        .side-nav-widget ul li a span.icon {
            font-size: 20px;
            width: 52px;
            height: 42px;
            padding: 0 15px;
            z-index: 99;
            box-sizing: border-box
        }

        .side-nav-widget ul li.inline-block,.side-nav-widget ul li a span.icon {
            text-decoration: none;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .side-nav-widget ul li.inline-block {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .side-nav-widget ul li.inline-block .inline-links {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            transition: width .4s
        }

        .side-nav-widget ul li.inline-block .inline-links a {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            z-index: 1;
            border: none
        }

        .side-nav-widget ul li.inline-block .inline-links a .icon {
            z-index: 1;
            height: 40px
        }

        .side-nav-widget ul li.inline-block .icon {
            text-decoration: none;
            font-size: 20px;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 52px;
            height: 42px;
            padding: 0 15px;
            z-index: 99;
            box-sizing: border-box
        }

        .side-nav-widget.close {
            opacity: inherit;
            font-weight: inherit;
            text-shadow: inherit
        }

        .side-nav-widget.close ul li.inline-block .inline-links,.side-nav-widget.close ul li a span.title-txt {
            width: .0001px;
            position: absolute;
            right: 52px
        }

        .gcss-theme-light.side-nav-widget li a {
            color: #000
        }

        .gcss-theme-light.side-nav-widget li a span.title-txt {
            background-color: #fff;
            border: 1px solid #d1d1d1;
            border-right: 0
        }

        .gcss-theme-light.side-nav-widget li a span.icon {
            color: #000;
            background-color: #ffba00;
            border: 1px solid #d1d1d1;
            border-left: 0
        }

        .gcss-theme-light.side-nav-widget li.inline-block .inline-links {
            background-color: #fff;
            border: 1px solid #d1d1d1;
            border-right: 0
        }

        .gcss-theme-light.side-nav-widget li.inline-block .inline-links .icon {
            color: #000;
            background-color: #fff;
            border: none
        }

        .gcss-theme-light.side-nav-widget li.inline-block .icon {
            color: #000;
            background-color: #ffba00;
            border: 1px solid #d1d1d1;
            border-left: 0
        }

        .gcss-theme-dark.side-nav-widget li a {
            color: #fff
        }

        .gcss-theme-dark.side-nav-widget li a span.title-txt {
            background-color: #000;
            border: 1px solid #3e3e3e;
            border-right: 0
        }

        .gcss-theme-dark.side-nav-widget li a span.icon {
            color: #000;
            background-color: #ffba00;
            border: 1px solid #3e3e3e;
            border-left: 0
        }

        .gcss-theme-dark.side-nav-widget li.inline-block .inline-links {
            background-color: #000;
            border: 1px solid #3e3e3e;
            border-right: 0
        }

        .gcss-theme-dark.side-nav-widget li.inline-block .inline-links .icon {
            color: #fff;
            background-color: #000;
            border: none
        }

        .gcss-theme-dark.side-nav-widget li.inline-block .icon {
            color: #000;
            background-color: #ffba00;
            border: 1px solid #3e3e3e;
            border-left: 0
        }

        .side-nav__has-zoomed-text.side-nav-widget.close ul li.inline-block:hover .inline-links,.side-nav__has-zoomed-text.side-nav-widget.close ul li:hover a span.title-txt {
            width: 10.7142857143rem
        }

        .side-nav__has-zoomed-text.side-nav-widget ul li.inline-block .inline-links a {
            margin-right: .5357142857rem
        }

    </style>






    </body>
</html>


