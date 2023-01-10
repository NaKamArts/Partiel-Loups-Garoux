<?php

class Joueur {
    private int $id;
    private string $pseudo;
    private bool $estVivant;
    private bool $estMaire;
    private bool $estAmoureux;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
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
}