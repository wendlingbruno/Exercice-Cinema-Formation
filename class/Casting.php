<?php

class Casting{
    private $acteur1;
    private $film1;
    private $role1;

    public function __construct($acteur1, $film1, $role1){
        $this->acteur = $acteur1;
        $this->film = $film1;
        $this->role = $role1;
        $acteur1->addCasting($this);
        $role1->addCasting($this);
        $film1->addCasting($this);
    }

    public function getActeur(){
        return $this->acteur;
    }

    public function getFilm(){
        return $this->film;
    }

    public function getRole(){
        return $this->role;
    }

    public function __toString(){
        return $this->acteur." a joué dans ".$this->film." en tant que ".$this->role;
    }


}