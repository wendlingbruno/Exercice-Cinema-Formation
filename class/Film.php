<?php

class Film{

    private $titre;
    private $date;
    private $duree;
    private $synopsis;
    private $acteur1;
    private $acteur2;
    private $role1;
    private $role2;
    private $genre;
    private $realisateur;

    public function __construct($titre,$date,$duree,$synopsis,Genre $genre,Realisateur $realisateur){
        $this->titre = $titre;
        $this->date = new DateTime($date);
        $this->duree = date("G\hi",mktime(0,$duree)); // 0 pour définir l'heure par défaut à 0
        $this->synopsis = $synopsis;
        $this->genre = $genre;
        $genre->addFilm($this);
        $this->realisateur = $realisateur;
        $realisateur->addFilm($this);
       $this->listeCasting = [];
        
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getDate(){
        return $this->date->format("d/m/Y");
    }

    public function getDuree(){
        return $this->duree;
    }

    public function getSynopsis(){
        return $this->synopsis;
    }

    public function getActeur1(){
        return $this->acteur1->getNomActeur()." dans ".$this->getTitre();
    }

    public function getActeur2(){
        return $this->acteur2->getNomActeur()." dans ".$this->getTitre();
    }

    public function getGenre(){ 
        return $this->genre;
    }

    public function getRealisateur(){
        return $this->realisateur;
    }

    public function addCasting(Casting $c) {
        $this->listeCasting[] = $c;
    }
    

    public function __toString(){
        $retourEntier = "";
        $retourEntier .= "Le film ".$this->getTitre()." sorti le ".$this->getDate()." dure ".$this->getDuree()." et appartient au genre ".$this->genre->getGenre()." et a été réalisé par ".$this->realisateur->getNomRealisateur().".<br>";
        $retourEntier .= "Ont joué dans le film : <ul>";
        foreach($this->listeCasting as $casting) {
            $retourEntier .= "<li>".$casting->getActeur()->getNomActeur()." en tant que ".$casting->getRole()->getRole()."</li>"; // l'idée est que de toute façon c'est dans le même ordre via le construct de Film
        }
        $retourEntier .= "</ul>";
        return $retourEntier;

    }


}

?>