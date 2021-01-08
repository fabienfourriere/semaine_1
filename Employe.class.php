<?php

$jour = date('d-m-y');

class Employe 
{
    public $_nom;
    public $_prenom;
    public $_date;
    public $_fonction;
    public $_salaire;
    public $_service;

    public function anciennete(int $nbannees)
    {
        echo "Le salarié a une ancienneté de ".$nbannees." années.<br>";
    }

    public function prime(int $somme){
        $somme = (0.05 * $_salaire) + (0.02 * $_date);
echo "Le salarié reçoit la somme de" .$somme. "à la date du" .$jour ;
    }
}
    $dave = new Employe();
    
    $dave->nom = 'Loper';
    $dave->prenom = 'Dave';
    $dave->date = '01/01/2001';
    $dave->fonction = 'Ouvrier';
    $dave->salaire = 15000;
    $dave->service = 'Operation';

    $fabien = new Employe();

    $fabien->nom = 'Fourrière';
    $fabien->prenom = 'Fabien';
    $fabien->date = '15/07/2000';
    $fabien->fonction = 'Directeur';
    $fabien->salaire = 25000;
    $fabien->service = 'Direction';

    $pierre = new Employe();

    $pierre->nom = 'Lefevre';
    $pierre->prenom = 'Pierre';
    $pierre->date = '08/08/2000';
    $pierre->fonction = 'Comptable';
    $pierre->salaire = 20000;
    $pierre->service = 'Ressources Humaines';

    $lucas = new Employe();

    $lucas->nom = 'Sica';
    $lucas->prenom = 'Lucas';
    $lucas->date = '11/09/2000';
    $lucas->fonction = 'Chef d equipe';
    $lucas->salaire = 22000;
    $lucas->service = 'Direction';

    $cedric = new Employe();

    $cedric->nom = 'Bush';
    $cedric->prenom = 'Cedric';
    $cedric->date = '04/01/2001';
    $cedric->fonction = 'Technicien';
    $cedric->salaire = 18000;
    $cedric->service = 'Maintenance';

    class Agence {
        public $_nomagence;
        public $_adresse;
        public $_codepostal;
        public $_ville;
    }
?>