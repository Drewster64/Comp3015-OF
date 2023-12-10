<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    
    <?php
        require_once './app/views/home.php';
        require_once './app/models/UserModel.php';
        require_once './app/controllers/UserController.php';
        require_once './app/models/ProductModel.php';
        require_once './app/controllers/ProductController.php';
        require_once './app/models/SupplierModel.php';
        require_once './app/controllers/SupplierController.php';
    ?>

</head>
<body class="bg-warning">
    <div class="container">
        
        <header>
            <h1>Bienvenido a Nuestra Aplicación</h1>
            <nav>
                <ul>
                    <li><a href=".">Ver Usuarios</a></li>
                    <!-- Más enlaces de navegación según sea necesario -->
                </ul>
                <ul>
                    <li><a href="./index.php?url=product/index">Ver Productos</a></li>
                    <!-- Más enlaces de navegación según sea necesario -->
                </ul>
                <ul>
                    <li><a href="./index.php?url=supplier/index">Ver Suplidores</a></li>
                </ul>
            </nav>
        </header>
    
        <main>
            <section>
                <div>
                    <?php 
                        if (isset($data)) // if Data exist
                        {
                            if (isset($data['message'])) {
                                echo '<div class="alert alert-warning">';
                                echo $data['message'];
                                echo '</div>';
                            }
                            require_once $data['view'];
                        }
                        else {
                            $userController = new UserController();
                            $data = $userController->listUsers();
                            require 'user/list.php';
                        }
                    ?>
                </div>
            </section>
            <section class='mt-5'>
                <h5>Descripción de la Aplicación</h5>
                <p>Esta es una aplicación web desarrollada en PHP siguiendo el patrón de diseño MVC.</p>
                <!-- Agrega más contenido relevante aquí -->
            </section>
            
        </main>
    
        <footer>
            <p>&copy; 2023 John Valentín</p>
        </footer>

    </div>
</body>
</html>