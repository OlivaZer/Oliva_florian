
<h1>exo15</h1>

<p> Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; </p>

<h2>Résultat</h2>


<?php

// Déclaration class Personne

class Personne {
    // private signifie que les propriétés ne peuvent être accédées ou modifiées que depuis l'intérieur de la classe Personne elle-même.
    private $nom;
    private $prenom;
    private $dateNaissance;

    // Construction de la class Personne 
    
    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    // Méthode pour obtenir la nom de la personne, le prénom puis sa date de naissance
    
    public function getNom() {
        return $this->nom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }
    
    public function getDateNaissance() {
        return $this->dateNaissance;
    }
    // Méthode pour obtebir l'âge de la personne
    public function getAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $maintenant = new DateTime();
        $difference = $maintenant->diff($dateNaissance);
        return $difference->y;
    }
}

 // Création des objects 

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");


// Affichage des information des objets 
echo $p1->getPrenom() . ' ' . $p1->getNom() . ' a ' . $p1->getAge() . ' ans <br>'   ;
echo $p2->getPrenom() . ' ' . $p2->getNom() . ' a ' . $p2->getAge() . ' ans <br>'   ;