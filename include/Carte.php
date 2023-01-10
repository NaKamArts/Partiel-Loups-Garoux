<?php

class Carte {
    private int $carte_id;
    private string $nom;
    private ?string $description;
    private ?string $image;
    private ?string $power;


    public function getId() {
        return $this->carte_id;
    }

    public function setId($id) {
        $this->carte_id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getPower(){
        return $this->power;
    }

    public function setPower(){
        $this->power = $power;
    }

    public static function getAllCartes() {
        $sql = "SELECT * FROM carte";
		$rs = PdoGsb::get_monPdo()->query($sql);
        $rs->setFetchMode(PDO::FETCH_CLASS, 'Carte');
        $result = $rs->fetchAll();
		return $result;
    }

    public static function getCarteById($id) {
        $sql = "SELECT * FROM carte WHERE carte_id = :id";
		$rs = PdoGsb::get_monPdo()->prepare($sql);
        $rs->setFetchMode(PDO::FETCH_CLASS, 'Carte');
        $rs->bindParam('id', $id);
        $rs->execute();
        $result = $rs->fetch();
		return $result;
    }
}