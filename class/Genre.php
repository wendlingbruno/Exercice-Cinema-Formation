<?php

class Genre{

    private $genre;
    private $listeFilms;


    public function __construct($genre){
        $this->genre = $genre;
        $this->listeFilms = [];
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getFilms() {
        return $this->listeFilms;
    }

    public function addFilm(Film $f) {
        $this->listeFilms[] = $f;
    }


    public function __toString() {
        $liste = "Le genre ".$this->getGenre()." a ces films là : <br>";
        $liste .= "<ul>";
        foreach($this->listeFilms as $films) {
            $liste .= "<li>".$films->getTitre()."</li>";
        }
        $liste .= "</ul>";

        return $liste;
    }
}


?>
    