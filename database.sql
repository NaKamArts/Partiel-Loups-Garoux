CREATE TABLE IF NOT EXISTS Carte(
   carte_id INT,
   nom VARCHAR(255),
   image VARCHAR(255),
   description TEXT,
   PRIMARY KEY(carte_id)
);

CREATE TABLE IF NOT EXISTS Partie(
   partie_id INT,
   nbNuit INT,
   PRIMARY KEY(partie_id)
);

CREATE TABLE IF NOT EXISTS Joueur(
   joueur_id INT,
   pseudo VARCHAR(255),
   estVivant BIT,
   estMaire BIT,
   estAmoureux BIT,
   carte_id INT NOT NULL,
   PRIMARY KEY(joueur_id),
   FOREIGN KEY(carte_id) REFERENCES Carte(carte_id)
);

CREATE TABLE IF NOT EXISTS Vote(
   vote_id INT,
   joueur_id INT NOT NULL,
   partie_id INT NOT NULL,
   joueur_vote INT NOT NULL,
   PRIMARY KEY(vote_id),
   FOREIGN KEY(joueur_id) REFERENCES Joueur(joueur_id),
   FOREIGN KEY(partie_id) REFERENCES Partie(partie_id),
   FOREIGN KEY(joueur_vote) REFERENCES Joueur(joueur_id)
);
