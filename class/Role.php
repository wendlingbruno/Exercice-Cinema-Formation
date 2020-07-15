<?php

class Role{

    private $role;
    private $listeActeursRole;


    public function __construct($role){
        $this->role = $role;
        $this->listeActeursRole = [];
        $this->listeCasting = [];
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }


    public function addCasting(Casting $c) {
        $this->listeCasting[] = $c;
    }
    
    public function __toString(){
        $retourEntier = "";
        $retourEntier .= "";
        $retourEntier .= $this->getRole()." a été incarné par : <ul>";
        foreach($this->listeCasting as $casting) {
            $retourEntier .= "<li>".$casting->getActeur()->getNomActeur()." dans ".$casting->getFilm()->getTitre()."</li>"; // l'idée est que de toute façon c'est dans le même ordre via le construct de Film
        }
        $retourEntier .= "</ul>";
        return $retourEntier;

    }


}


?>