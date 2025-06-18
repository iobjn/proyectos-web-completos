<div class="full-width navBar">
    <div class="full-width navBar-options">
        <i class="fas fa-bars fa-fw bar_nv" id="btn-menu" style="padding-right: 10px;"></i>
        <nav class="navBar-options-list">
            <ul class="list-unstyle">
                <li class="text-condensedLight noLink bar_nv">
                    <a href="<?php echo APP_URL."userUpdate/".$_SESSION['id']."/"; ?>" class="full-width">
                        <i class="fas fa-user-cog fa-xs"></i>
                    </a>
                </li>
                <li class="text-condensedLight noLink bar_nv">
                    <a class="btn-exit" href="<?php echo APP_URL."logOut/"; ?>" >
                        <i class="fas fa-power-off fa-xs"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
