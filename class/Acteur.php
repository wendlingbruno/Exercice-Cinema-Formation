<?php


class Acteur extends Personne{
    private $listeFilmsRealise;
    private $listeRolesRealise;

    public function __construct($nom = "",$prenom="",$naissance="", $dateMort="0000-00-00"){
        parent::__construct($nom, $prenom, $naissance, $dateMort);
        $this->listeFilmsRealise = [];
        $this->listeRolesRealise = [];
        $this->listeCasting = [];
    
    }

    public function getNomActeur(){
        return $this->getPrenom()." ".$this->getNom();
    }


    public function getFilms() {
        return $this->listeFilmsRealise;
    }

    public function addFilm(Film $f) {
        $this->listeFilmsRealise[] = $f;
    }
    
    public function getRoles() {
        return $this->listeRolesRealise;
    }

    public function addRoles($r) {
        $this->listeRolesRealise[] = $r;
    }

    public function addCasting(Casting $c) {
        $this->listeCasting[] = $c;
    }


    public function listeDesFilms(){
        $retourEntier = "";
        $retourEntier .= "";
        $retourEntier .= $this->getNomActeur()." a joué dans les films : <ul>";
        foreach($this->listeCasting as $casting) {
            $retourEntier .= "<li>".$casting->getFilm()->getTitre()." en tant que ".$casting->getRole()->getRole()."</li>"; // l'idée est que de toute façon c'est dans le même ordre via le construct de Film
        }
        $retourEntier .= "</ul>";
        return $retourEntier;

    }

    public function listeDesRoles(){
        $retourEntier = "";
        $retourEntier .= "";
        $retourEntier .= $this->getNomActeur()." a joué  ces rôles : <ul>";
        foreach($this->listeCasting as $casting) {
            $retourEntier .= "<li>".$casting->getRole()->getRole()." dans ".$casting->getFilm()->getTitre()."</li>"; // l'idée est que de toute façon c'est dans le même ordre via le construct de Film
        }
        $retourEntier .= "</ul>";
        return $retourEntier;

    }

    public function __toString() {
        return $this->getNomActeur()." a ".$this->getAge().".";
    }
}


?>