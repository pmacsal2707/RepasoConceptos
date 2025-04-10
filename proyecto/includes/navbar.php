<nav class="navbar is-dark" role="navigation" aria-label="main navigation" style="padding: 10px;">

    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?vista=index" style="margin-right: 20px;">
            <img src="./multimedia/images/logo.png"  alt="Logo">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start" style="align-items: center; display: flex;">

            <a class="navbar-item" href="index.php?vista=index" style="margin-right: 15px;">Inicio</a>
            <a class="navbar-item" href="index.php?vista=about" style="margin-right: 15px;">Sobre nosotros</a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=product_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=product_category" class="navbar-item">Por categoría</a>
                    <a href="index.php?vista=product_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <a class="navbar-item" href="index.php?vista=productos" style="margin-right: 15px;">Tienda</a>
            <a class="navbar-item" href="index.php?vista=contacto" style="margin-right: 15px;">Contacto</a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-danger is-rounded">
                        Mi cuenta
                    </a>
                    <a href="index.php?vista=logout" class="button is-light is-rounded">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>