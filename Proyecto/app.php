<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisionTech</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
  
        <div class="main_header_logo">
            <img src="img/logo.png" alt="logo.png" title="VisionTech"/>
        </div>
        <h1>Servicios</h1>
    <ul class="menu">
        <li><a href="app.php">Home</a></li>
        <li><a href="#" class="submenu-link">Clientes</a>
            <ul class="submenu">
                <li><a href="app.php?submenu=incluir">Incluir</a></li>
                <li><a href="app.php?submenu=alterar">Cambiar</a></li>
                <li><a href="app.php?submenu=excluir">Borrar</a></li>
                <li><a href="app.php?submenu=listar">Listar</a></li>
            </ul>
        </li>

        <li><a href="#" class="submenu-link">Servicios</a>
            <ul class="submenu">
                <li><a href="app.php?submenu=incluir_servicio">Incluir</a></li>
                <li><a href="app.php?submenu=alterar_servicio">Cambiar</a></li>
                <li><a href="app.php?submenu=excluir_servicio">Borrar</a></li>
                <li><a href="app.php?submenu=listar_servicio">Listar</a></li>
            </ul>
        </li>
    </ul>

    <?php
    if (isset($_GET['submenu'])) {
        $submenu = $_GET['submenu'];
        include $submenu . 'Form.php';
    }
    ?>
</body>
</html>
