<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conexión de PHP con PostgreSQL usando PDO">
    <meta name="author" content="Odenfis">
    <title>PostgreSQL-PHP | Por Mabel Julon</title>
    <!-- Cargar el CSS de Bootstrap -->
    <link href="./bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="style.css" rel="stylesheet">
    <style>
        /* Estilos personalizados aquí */
        /* Por ejemplo, puedes personalizar el fondo del encabezado */
        .header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
        }

        /* Estilos para botones */
        .btn-custom {
            background-color: #007BFF;
            color: white;
        }

        /* Estilos para el formulario */
        .form-container {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Encabezado mejorado -->
    <div class="header">
        <h1>PostgreSQL-PHP | Por Mabel Julon</h1>
        <p>Bienvenido a la página de PostgreSQL-PHP</p>
    </div>

    <!-- Menú de navegación mejorado -->
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

    <!-- Contenido principal -->
    <div class="container mt-4">
        <h2>Contenido Principal</h2>
        <p>Aquí puedes agregar tu contenido principal.</p>
        <button class="btn btn-custom">Haz clic</button>
    </div>

    <!-- Formulario de ejemplo -->
    <div class="container form-container mt-4">
        <h2>Agregar Nuevo Elemento</h2>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-custom">Agregar</button>
        </form>
    </div>

    <!-- JavaScript y jQuery (asegúrate de incluir las bibliotecas necesarias) -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>
