CREATE DATABASE IF NOT EXISTS club_dei_giochi;
USE club_dei_giochi;

CREATE TABLE soci (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cognome VARCHAR(100),
    quota_pagata BOOLEAN,
    data_iscrizione DATE,
    grado ENUM('Giocatore Regolare', 'Giocatore Donatore') DEFAULT 'Giocatore Regolare'
);

CREATE TABLE giochi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    tipo VARCHAR(100),
    anno_acquisto DATE,
    copie_disponibili INT
);

CREATE TABLE incontri (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_incontro DATE,
    vincitore_id INT,
    FOREIGN KEY (vincitore_id) REFERENCES soci(id)
);
