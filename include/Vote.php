<?php

class Vote {
    private int $id;
    private int $idJoueur;
    private int $idJoueurVote;
    private int $idPartie;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdJoueur() {
        return $this->idJoueur;
    }

    public function setIdJoueur($idJoueur) {
        $this->idJoueur = $idJoueur;
    }

    public function getIdJoueurVote() {
        return $this->idJoueurVote;
    }

    public function setIdJoueurVote($idJoueurVote) {
        $this->idJoueurVote = $idJoueurVote;
    }

    public function getIdPartie() {
        return $this->idPartie;
    }

    public function setIdPartie($idPartie) {
        $this->idPartie = $idPartie;
    }
}
