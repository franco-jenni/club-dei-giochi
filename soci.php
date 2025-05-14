<?php
include 'db.php';

$sql = "SELECT * FROM soci";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Gestione Soci</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Elenco Soci</h1>
    <a href="index.php">Torna alla Home</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Quota Pagata</th>
            <th>Data Iscrizione</th>
            <th>Grado</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['nome']) ?></td>
            <td><?= htmlspecialchars($row['cognome']) ?></td>
            <td><?= $row['quota_pagata'] ? 'Sì' : 'No' ?></td>
            <td><?= $row['data_iscrizione'] ?></td>
            <td><?= $row['grado'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
