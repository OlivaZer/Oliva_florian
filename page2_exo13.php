<h1>Exo13</h1>

<p>
    créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
    vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
    des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
    véhicule. 
    v1 ➔ "Peugeot","408",5
    v2 ➔ "Citroën","C4",3
    Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
    tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
    suivants :
</p>

<h2>Résultat</h2>

<?php


    //Déclare des variables privées pour stocker la (marque, modele, nbPortes, vitesseActulle, estDemarre ) de la voiture
    class Voiture {
        private $marque;
        private $modele;
        private $nbPortes;
        private $vitesseActuelle;
        private $estDemarre;

        public function __construct($marque, $modele, $nbPortes) {
            // Initialise la variable $marque avec la valeur passée en paramètre
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
            $this->vitesseActuelle = 0;
            $this->estDemarre = false;
        }

        public function demarrer() {
            // Modifie la valeur de $estDemarre à true
            $this->estDemarre = true;
            echo "Le véhicule {$this->marque} {$this->modele} démarre.<br>" ;
        }

        public function accelerer($vitesse) {
            // Vérifie si le véhicule est déjà démarré
            if ($this-> estDemarre) {
                echo "Pour accélérer, il faut démarrer le véhicule {$this->marque} {$this->modele}.<br>" ;
            } else {
            // Incrémente la vitesse actuelle du véhicule
                $this->vitesseActuelle += $vitesse;
                echo "Le véhicule {$this->marque} {$this->modele} accélère de {$vitesse} km/h. <br>" ;
            }
        }

        public function stopper() {
            // Réinitialise la vitesse actuelle à 0
            $this->vitesseActuelle = 0;
            // Modifie la valeur de $estDemarre à false
            $this->estDemarre = false;
            // Affiche un message indiquant que le véhicule est arrêté
            echo "Le véhicule {$this->marque} {$this->modele} est stoppé.<br>" ;
        }

        public function afficherInfoVitesse() {
            // Vérifie si la vitesse actuelle est supérieure à 0
            if ($this->vitesseActuelle > 0) {
                echo "La vitesse du véhicule {$this->marque} {$this->modele} est de: {$this->vitesseActuelle} km/h.<br> <br>";
            } else {
                echo "Le véhicule {$this->marque} {$this->modele} est à l'arrêt. Sa vitesse actuelle est de : 0 km/h. <br> ";
            }
        }
    
        public function afficherInfos() {
            // Affiche le nom et le modèle du véhicule
            echo "Nom et modèle du véhicule : {$this->marque} {$this->modele} <br>";
             // Affiche le nombre de portes du véhicule
            echo "Nombre de portes : {$this->nbPortes} <br>";

    // Vérifie si le véhicule est démarré
            if ($this->estDemarre) {
                // Affiche un message indiquant que le véhicule est démarré
                echo "Le véhicule {$this->marque} {$this->modele} est démarré. <br>";
                // Affiche un message indiquant que le véhicule est démarré
                echo "Sa vitesse actuelle est de : {$this->vitesseActuelle} km/h.<br> <br>";
            } else {
                // Affiche un message indiquant que le véhicule est à l'arrêt
                echo "Le véhicule {$this->marque} {$this->modele} est à l'arrêt. <br>";
                // Affiche que la vitesse actuelle du véhicule est de 0 km/h
                echo "Sa vitesse actuelle est de : 0 km/h. <br>";
            }
        }


        // Accesseurs (getters)
        public function getMarque() {
            // Retourne la valeur de la variable $marque
            return $this->marque;
        }

        public function getModele() {
            // Retourne la valeur de la variable $modele
            return $this->modele;
        }

        public function getNbPortes() {
             // Retourne la valeur de la variable $nbPortes
            return $this->nbPortes;
        }

        public function getVitesseActuelle() {
            // Retourne la valeur de la variable $vitesseActuelle
            return $this->vitesseActuelle;
        }

        // Mutateurs (setters)
        public function setMarque($marque) {
            // Modifie la valeur de la variable $marque avec la valeur passée en paramètre
            $this->marque = $marque;
        }

        public function setModele($modele) {
            // Modifie la valeur de la variable $modele avec la valeur passée en paramètre
            $this->modele = $modele;
        }

        public function setNbPortes($nbPortes) {
            // Modifie la valeur de la variable $nbPortes avec la valeur passée en paramètre
            $this->nbPortes = $nbPortes;
        }

        public function setVitesseActuelle($vitesseActuelle) {
            // Modifie la valeur de la variable $vitesseActuelle avec la valeur passée en paramètre
            $this->vitesseActuelle = $vitesseActuelle;
        }
    }

    // Tests
    // Crée une instance de la classe Voiture avec la marque "Peugeot", le modèle "408" et 5 portes
    $v1 = new Voiture("Peugeot", "408", 5);
    // Crée une autre instance de la classe Voiture avec la marque "Citroën", le modèle "C4" et 3 portes
    $v2 = new Voiture("Citroën", "C4", 3);

    // Appelle la méthode demarrer() sur l'objet $v1 pour démarrer le véhicule
    $v1->demarrer();
    // Appelle la méthode accelerer() sur l'objet $v1 pour accélérer de 50 km/h
    $v1->accelerer(50);
    // Appelle la méthode demarrer() sur l'objet $v2 pour démarrer le véhicule
    $v2->demarrer();
    // Appelle la méthode stopper() sur l'objet $v2 pour arrêter le véhicule
    $v2->stopper();
    // Appelle la méthode accelerer() sur l'objet $v2 pour accélérer de 20 km/h
    $v2->accelerer(20);

    // Vérifie si la vitesse actuelle de $v2 est égale à 0
    if ($v2->getVitesseActuelle() == 0) {
        // Affiche un message indiquant que pour accélérer, le véhicule doit être démarré
        echo "Pour accélérer, il faut démarrer le véhicule {$v2->getMarque()} {$v2->getModele()}.<br>" ;
    }

    // Appelle la méthode afficherInfoVitesse() sur l'objet $v1 pour afficher les informations de vitesse du véhicule
    $v1->afficherInfoVitesse();
    // Appelle la méthode afficherInfoVitesse() sur l'objet $v2 pour afficher les informations de vitesse du véhicule
    $v2->afficherInfoVitesse();

    // Afficher les informations du véhicule 1
    echo "Infos véhicule 1 <br><br>";
    $v1->afficherInfos();

    // Afficher les informations du véhicule 2
    echo "Infos véhicule 2 <br> <br>";
    $v2->afficherInfos();

    