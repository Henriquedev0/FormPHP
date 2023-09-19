<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="styledata.css">
</head>

<body>
    <?php
include_once('config.php');

if (isset($_GET['delete_id']) && is_numeric($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    
    $query = "DELETE FROM usuarios WHERE ID = $delete_id";
    $result = mysqli_query($conexao, $query);

    if ($result) {
        echo "Data with ID $delete_id has been successfully deleted.";
    } else {
        echo "Error deleting data.";
    }
}


$result = mysqli_query($conexao, "SELECT * FROM usuarios");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);


echo "<h1>Data from the Database</h1>";

echo "<table border='1'>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th>Actions</th>
        </tr>";

foreach ($rows as $row) {
    echo "<tr>
            <td>{$row['NOME']}</td>
            <td>{$row['EMAIL']}</td>
            <td>{$row['TELEFONE']}</td>
            <td>{$row['DATA_NASC']}</td>
            <td><a href='display_data.php?delete_id={$row['ID']}'>Delete</a></td>
          </tr>";
}

echo "</table>";
?>
</body>

</html>