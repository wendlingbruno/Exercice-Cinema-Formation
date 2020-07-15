<?php

/*include "class/Personne.php";
include "class/Casting.php";
include "class/Film.php";
include "class/Genre.php";
include "class/Realisateur.php";
include "class/Acteur.php";
include "class/Role.php";*/


spl_autoload_register(function ($class_name) {
    include "class/".$class_name.".php";
});

// titre,date,duree,synopsis,genre

    $r1 = new Realisateur("Fleming","Ian","1908-05-28","1964-08-12");
    $r2 = new Realisateur("Cunningham","Sean Sexton","1941-12-31");
    $action = new Genre("Action");
    $horreur = new Genre("Horreur");
    $acteur1 = new Acteur("Connery","Sean","1930-08-25");
    $acteur2 = new Acteur("Statham","Jason","1930-08-25");
    $acteur3 = new Acteur("Numero 3","Acteur","1930-08-25");
    $acteur4 = new Acteur("Numero 4","Acteur","1930-08-25");
    $acteur5 = new Acteur("Numero 5","Acteur","1930-08-25");
    $acteur6 = new Acteur("Numero 6","Acteur","1930-08-25");
    $role1 = new Role("Role Principal");
    $role2 = new Role("Role Secondaire");
    $film1 = new Film("James Bond 007 contre Dr No","10/10/1962",105,"Un charmeur qui tue",$action,$r1);
    $film2 = new Film("Bons Baisers de Russie","11/10/1963",115,"Un charmeur qui tue 2",$action,$r1);
    $film3 = new Film("Vendredi 13","09/05/1980",92,"Un joli massacre autour d'un lac",$horreur,$r2); // test
    $casting1 = new Casting($acteur1, $film1, $role1);
    $casting2 = new Casting($acteur2, $film1, $role2);
    $casting3 = new Casting($acteur3, $film2, $role1);
    $casting4 = new Casting($acteur4, $film2, $role2);
    $casting5 = new Casting($acteur5, $film3, $role1);
    $casting6 = new Casting($acteur6, $film3, $role2);
    $casting7 = new Casting($acteur1, $film2, $role2);

    echo $film1."<br>";
    echo $film3."<br>";
    echo $action."<br>";
    echo $horreur."<br>";; // test si l'ajout fonctionne correctement dans un autre genre
    echo $r1."<br>";
    echo $r2."<br>";
    echo $acteur1->listeDesFilms()."<br>";
    echo $acteur3->listeDesFilms()."<br>";
    echo $acteur1->listeDesRoles()."<br>";
    echo $acteur3->listeDesRoles()."<br>";
    echo $role1."<br>";
    echo $role2."<br>";




/*On doit pouvoir afficher (reste à faire) :
    
    •la liste des rôles d'un acteur (nom du rôle et titre du film)
    

    •toutes les informations d'un film (titre, année, durée en HH:MM, genre, liste des acteurs (nom + prénom), réalisateur (nom + prénom))
    •tous les films d'un acteur (film + nom du rôle)
    •la liste des acteurs ayant incarné un rôle précis (nom + prénom de l'acteur et film dans lequel le rôle a été incarné)*/


?>