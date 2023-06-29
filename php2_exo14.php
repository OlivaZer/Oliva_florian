<h1>Exo 14</h1>

<p>
    Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
    qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
    Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques 
    suivantes :
    Peugeot 408 : $v1 = new Voiture("Peugeot","408");
    BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : 
    echo $v1->getInfos()."<br/>";
    echo $ve1->getInfos()."<br/>";

</p>

<h2>Résultat</h2>

<?php

class Voiture {
    // Propriété pour stocker la marque de la voiture
    protected $marque;
    // Propriété pour stocker le modèle de la voiture 
    protected $modele; 

    public function __construct($marque, $modele) {
        // Assigner la marque fournie à la propriété $marque
        $this->marque = $marque; 
        // Assigner le modèle fourni à la propriété $modele
        $this->modele = $modele; 
    }

    public function getInfos() {
        // Retourner les informations de la voiture
        return "Marque : " . $this->marque . ", Modèle : " . $this->modele; 
    }
}

//Définit la classe VoitureElec qui hérite de la class Voiture ( elle a accèes aux propriétés et méthodes de la classe Voiture)
class VoitureElec extends Voiture {

    // Propriété supplémentaire pour stocker l'autonomie de la voiture électrique
    protected $autonomie; 

    public function __construct($marque, $modele, $autonomie) {
        // Appeler le constructeur de la classe parente pour initialiser la marque et le modèle
        parent::__construct($marque, $modele); 
        // Assigner l'autonomie fournie à la propriété $autonomie
        $this->autonomie = $autonomie; 
    }

    public function getInfos() {
        // Appeler la méthode getInfos() de la classe parente et ajouter l'autonomie
        return parent::getInfos() . ", Autonomie : " . $this->autonomie . " km"; 
    }
}

// Instancier une voiture "classique" avec la marque "Peugeot" et le modèle "408"
$v1 = new Voiture("Peugeot", "408"); 
 // Instancier une voiture électrique avec la marque "BMW", le modèle "i3 150" et l'autonomie de 100 km
$ve1 = new VoitureElec("BMW", "i3 150", 100);

// Afficher les informations de la voiture "classique"
echo $v1->getInfos() . "<br/>"; 

// Afficher les informations de la voiture électrique
echo $ve1->getInfos() . "<br/>"; 