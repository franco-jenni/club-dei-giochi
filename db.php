<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Se hai una password, inseriscila qui
$database = 'club_dei_giochi';

$conn = new mysqli($host, $user, $password, $database);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}
?>
