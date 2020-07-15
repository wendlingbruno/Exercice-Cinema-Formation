<?php

class Personne{ // permet d'optimiser et de l'appeler pour Acteur et Realisateur
    private $nom;
    private $prenom;
    private $naissance;
    private $dateMort;

    public function __construct($nom = "",$prenom="",$naissance="", $dateMort="0000-00-00"){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new DateTime($naissance);
        $this->dateMort = new DateTime($dateMort);
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getDateMort(){
        return $this->dateMort;
    }

    public function getAge(){
        $dateAutre = new DateTime("0000-00-00"); // pas trouvé comment faire autrement
        if ($this->getDateMort() ==  $dateAutre){
            $dateJour = new DateTime();
            $age = $this->naissance->diff($dateJour);
            return $age->format("%y ans");
        } else {
            $age = $this->naissance->diff($this->dateMort);
            return $age->format("%y ans et décédé");
        } 
    }

    public function __toString(){
        return $this->getPrenom()." ".$this->getNom()." âgé de ".$this->getAge()." aujourd'hui";
    }


}


?>