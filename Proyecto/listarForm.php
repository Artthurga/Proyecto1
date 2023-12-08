<!-- listar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes e Serviços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Listagem de Clientes e Serviços</h1>

    <?php
    include 'Database.php';

    $db = new Database();
    $conn = $db->getConnection();

    // Consulta SQL
    $query = "SELECT clientes.nombre_cliente AS NomeCliente, servicos.nome_servico AS NomeServico, servicos.descricao AS DescricaoServico, servicos.preco AS PrecoServico
              FROM clientes JOIN servicos ON clientes.id_cliente = servicos.id_cliente";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Exibir resultados em uma tabela
        echo "<table border='1'>
                <tr>
                    <th>Nome do Cliente</th>
                    <th>Nome do Serviço</th>
                    <th>Descrição do Serviço</th>
                    <th>Preço do Serviço</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['NomeCliente']}</td>
                    <td>{$row['NomeServico']}</td>
                    <td>{$row['DescricaoServico']}</td>
                    <td>{$row['PrecoServico']}</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $conn->close();
    ?>
</body>
</html>
