<?php

class Realisateur extends Personne{
    private $listeFilmsRealise;

    public function __construct($nom = "",$prenom="",$naissance="", $dateMort="0000-00-00"){
        parent::__construct($nom, $prenom, $naissance, $dateMort);
        $this->listeFilmsRealise = [];
    
    }

    public function getNomRealisateur(){
        return $this->getPrenom()." ".$this->getNom();
    }


    public function getFilms() {
        return $this->listeFilmsRealise;
    }

    public function addFilm(Film $f) {
        $this->listeFilmsRealise[] = $f;
    }


    public function __toString() {
        $liste = $this->getPrenom()." ".$this->getNom()." a realisé ces films là : <br>";
        $liste .= "<ul>";
        foreach($this->listeFilmsRealise as $films) {
            $liste .= "<li>".$films->getTitre()."</li>";
        }
        $liste .= "</ul>";

        return $liste;
    }
}