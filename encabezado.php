<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conexión de PHP con PostgreSQL usando PDO">
    <meta name="author" content="Odenfis">
    <title>PostgreSQL-PHP | Por Mabel Julon</title>
    <!-- Cargar el CSS de Bootstrap desde la carpeta "css" -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="estilos/main.css" rel="stylesheet">
    <style>
        /* Estilos para la parte superior */
        .header {
            background-color: #007BFF; /* Color de fondo azul */
            color: white;
            padding: 20px;
            text-align: center;
        }

        /* Estilos para el icono de "mascotita" */
        .mascot-icon {
            font-size: 48px;
        }

        /* Estilos adicionales para el contenido principal */
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Encabezado mejorado -->
    <div class="header">
        <span class="mascot-icon">&#x1F431;</span> <!-- Icono de "mascotita" en formato Unicode -->
        <h1>PostgreSQL-PHP | Por Mabel Julon</h1>
        <p>Bienvenido a la página de PostgreSQL-PHP</p>
    </div>

    <!-- Menú de navegación (sin cambios en los estilos) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" target="_blank" href="https://tecsup.instructure.com/courses/25788">
            PostgreSQL-PHP | Por Mabel Julon
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="miNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./listar.php">Listar (arreglo)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listarCursor.php">Listar (cursor)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./formulario.php">Agregar</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- JavaScript y jQuery desde la carpeta "js" (sin cambios en los estilos) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
