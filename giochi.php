<?php
include 'db.php';

$sql = "SELECT * FROM giochi";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Gestione Giochi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Archivio Giochi</h1>
    <a href="index.php">Torna alla Home</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Anno Acquisto</th>
            <th>Copie Disponibili</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['nome']) ?></td>
            <td><?= htmlspecialchars($row['tipo']) ?></td>
            <td><?= $row['anno_acquisto'] ?></td>
            <td><?= $row['copie_disponibili'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
