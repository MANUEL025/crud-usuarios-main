<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="index.html" class="logo-light">
            <img src="assets/images/logo.png" alt="logo" class="logo-lg"
                style="width: 120px; height: auto; padding: 20px; margin-top:20px;">
            <img src="assets/images/carretilla.jpeg" alt="small logo" class="logo-sm"
                style="width: 120px; height: auto; padding: 20px; margin-top:20px;">
        </a>

        <!-- Brand Logo Dark -->

    </div>

    <!-- menu-left -->
    <div class="scrollbar">



        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Panel de administracion</li>

            <li class="menu-item">
                <a href="?c=dashboard&m=dashboard" class="menu-link">
                    <span class="menu-icon"><i data-feather="monitor"></i></span>
                    <span class="menu-text"> Escritorio </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="briefcase"></i></span>
                    <span class="menu-text"> Compañias </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=companies&m=index" class="menu-link">
                                <span class="menu-text">Listar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-shop"></i></span>
                    <span class="menu-text"> Productos </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=products&m=index" class="menu-link">
                                <span class="menu-text">Listar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>