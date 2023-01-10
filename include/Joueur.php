<?php

class Joueur {
    private int $joueur_id;
    private string $pseudo;
    private bool $estVivant;
    private bool $estMaire;
    private bool $estAmoureux;
    private Carte $carte;

    public function getId() {
        return $this->joueur_id;
    }

    public function setId($id) {
        $this->joueur_id = $id;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function getEstVivant() {
        return $this->estVivant;
    }

    public function setEstVivant($estVivant) {
        $this->estVivant = $estVivant;
    }

    public function getEstMaire() {
        return $this->estMaire;
    }

    public function setEstMaire($estMaire) {
        $this->estMaire = $estMaire;
    }

    public function getEstAmoureux() {
        return $this->estAmoureux;
    }

    public function setEstAmoureux($estAmoureux) {
        $this->estAmoureux = $estAmoureux;
    }

    public function getCarte() {
        return $this->carte;
    }

    public function setCarte($carte) {
        $this->carte = $carte;
    }

    public static function getJoueurById($id) {
        $sql = "SELECT * FROM joueur WHERE joueur_id = :id";
		$rs = PdoGsb::get_monPdo()->prepare($sql);
        $rs->setFetchMode(PDO::FETCH_CLASS, 'Joueur');
        $rs->bindParam('id', $id);
        $rs->execute();
        $result = $rs->fetch();
		return $result;
    }
}