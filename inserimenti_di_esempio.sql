USE club_dei_giochi;

INSERT INTO soci (nome, cognome, quota_pagata, data_iscrizione, grado)
VALUES ('Giuseppe', 'Panebianco', true, '2025-01-01', 'Giocatore Regolare');

INSERT INTO giochi (nome, tipo, anno_acquisto, copie_disponibili)
VALUES ('Monopoli', 'Gioco da Tavolo', '2025-01-15', 3),
       ('Cluedo', 'Gioco da Tavolo', '2025-03-20', 2);

INSERT INTO incontri (data_incontro, vincitore_id)
VALUES ('2025-05-14', 1);
