<!-- listar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Listagem de Clientes</h1>

    <?php
    include 'Database.php';

    $db = new Database();
    $conn = $db->getConnection();

    // Consulta SQL para listar apenas os clientes
    $query = "SELECT id_cliente, nombre_cliente, direccion, telefono FROM clientes";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Exibir resultados em uma tabela
        echo "<table border='1'>
                <tr>
                    <th>ID do Cliente</th>
                    <th>Nome do Cliente</th>
                    <th>Direção</th>
                    <th>Telefone</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id_cliente']}</td>
                    <td>{$row['nombre_cliente']}</td>
                    <td>{$row['direccion']}</td>
                    <td>{$row['telefono']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum cliente encontrado.";
    }

    $conn->close();
    ?>
</body>
</html>
