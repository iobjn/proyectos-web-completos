
<section class="full-width navLateral scroll" id="navLateral">
	<div class="full-width navLateral-body">
		<div class="full-width navLateral-body-logo has-text-centered tittles is-uppercase">

		</div>
        <figure class="full-width" style="height: 80px; display: flex; justify-content: center; align-items: center;">
            <div class="navLateral-body-cl">
                <?php
                $foto_path = is_file("./app/views/fotos/" . $_SESSION['foto']) ? APP_URL . 'app/views/fotos/' . $_SESSION['foto'] : APP_URL . 'app/views/fotos/default.png';
                echo '<img class="is-rounded img-responsive" src="' . $foto_path . '" style="height: 90px; width: 450px;">';
                ?>
            </div>

        </figure>
        <br>

        <div style="color: #FFFFFF" class="full-width tittles navLateral-body-tittle-menu has-text-centered is-uppercase">
             &nbsp; <small style="font-size: .70em; "><?php echo $_SESSION['usuario']; ?> </small>
		</div>
        <div style="height: 3px; background-color: var(--color-three);" class="full-box nav-lateral-bar"></div>
		<nav class="full-width">
			<ul class="full-width list-unstyle menu-principal">

				<li class="full-width">
					<a href="<?php echo APP_URL; ?>dashboard/" class="full-width">
						<div class="navLateral-body-cl">
							<i class="fab fa-dashcube fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							Menu Principal
						</div>
					</a>
				</li>

<!--				<li class="full-width divider-menu-h"></li>-->

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cash-register fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							Cajas
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>cashierNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-cash-register fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nueva caja
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>cashierList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de cajas
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>cashierSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar caja
								</div>
							</a>
						</li>
					</ul>
				</li>

<!--				<li class="full-width divider-menu-h"></li>-->

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-users fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							Usuarios
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-cash-register fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nuevo usuario
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de usuarios
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar usuario
								</div>
							</a>
						</li>
					</ul>
				</li>

<!--				<li class="full-width divider-menu-h"></li>-->

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-address-book fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							Clientes
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-male fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nuevo cliente
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de clientes
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar cliente
								</div>
							</a>
						</li>
					</ul>
				</li>

<!--				<li class="full-width divider-menu-h"></li>-->

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
                            <i class="fas fa-suitcase-rolling"></i>
						</div>
						<div class="navLateral-body-cr">
							Categorías
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categoryNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-tag fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nueva categoría
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categoryList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de categorías
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categorySearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar categoría
								</div>
							</a>
						</li>
					</ul>
				</li>

<!--				<li class="full-width divider-menu-h"></li>-->

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cubes fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							Productos
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-box fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nuevo producto
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de productos
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productCategory/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-boxes fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Productos por categoría
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar producto
								</div>
							</a>
						</li>
					</ul>
				</li>

<!--				<li class="full-width divider-menu-h"></li>-->

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-shopping-cart fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							Ventas
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-cart-plus fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nueva venta
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de ventas
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search-dollar fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar venta
								</div>
							</a>
						</li>
					</ul>
				</li>

<!--				<li class="full-width divider-menu-h"></li>-->

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cogs fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							COnfiguraciones
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>companyNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-store-alt fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Datos de empresa
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL."userUpdate/".$_SESSION['id']."/"; ?>" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-user-tie fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Mi cuenta
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL."userPhoto/".$_SESSION['id']."/"; ?>" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-camera"></i>
								</div>
								<div class="navLateral-body-cr">
									Mi foto
								</div>
							</a>
						</li>
					</ul>
				</li>

<!--				<li class="full-width divider-menu-h"></li>-->

				<li class="full-width mt-5">
					<a href="<?php echo APP_URL."logOut/"; ?>" class="full-width btn-exit" >
						<div class="navLateral-body-cl">
							<i class="fas fa-power-off"></i>
						</div>
						<div class="navLateral-body-cr">
							Cerrar sesión
						</div>
					</a>
				</li>

			</ul>
		</nav>
	</div>
</section>