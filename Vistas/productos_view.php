<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V1 DISTRIBUIDOR EL 104</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="./Publico/styles.css">
    <!-- Logo -->
    <link rel="icon" href="https://i.ibb.co/WtkgMnm/logo.png">
</head>
<body>
    <header>
        <div class="container">
            <!-- Logo centrado junto con el título -->
            <div class="logo-container">
                <img src="https://i.ibb.co/WtkgMnm/logo.png" alt="Logo" class="logo">
                <h1>V1 DISTRIBUIDOR EL 104</h1>
            </div>
            <!-- Fin del logo centrado -->
            <nav>
                <a href="index.php?accion=modalAdd">Agregar nuevo producto ➕📁</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <input type="text" id="inputBusqueda" placeholder="Buscar producto" onkeyup="filtrarProductos()">
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td><?= $producto['id'] ?></td>
                            <td><?= $producto['nombre'] ?></td>
                            <td><?= $producto['stock'] ?></td>
                            <td><?= $producto['precio'] ?></td>
                            <td>
                                <a href="index.php?accion=modalActualizar&id=<?= $producto['id'] ?>">✏️</a>
                                <a href="index.php?accion=eliminarProducto&id=<?= $producto['id'] ?>">🗑️</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> V1 DISTRIBUIDOR EL 104. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="./Publico/script.js"></script>
</body>
</html>




