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



    class Voiture {
        private $marque;
        private $modele;
        private $nbPortes;
        private $vitesseActuelle;

        public function __construct($marque, $modele, $nbPortes) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
            $this->vitesseActuelle = 0;
        }

        public function demarrer() {
            echo "Le véhicule {$this->marque} {$this->modele} démarre.<br>" ;
        }

        public function accelerer($vitesse) {
            if ($this->vitesseActuelle == 0) {
                echo "Pour accélérer, il faut démarrer le véhicule {$this->marque} {$this->modele}.<br>" ;
            } else {
                $this->vitesseActuelle += $vitesse;
                echo "Le véhicule {$this->marque} {$this->modele} accélère de {$vitesse} km/h. <br>" ;
            }
        }

        public function stopper() {
            $this->vitesseActuelle = 0;
            echo "Le véhicule {$this->marque} {$this->modele} est stoppé.<br>" ;
        }

        // Accesseurs (getters)
        public function getMarque() {
            return $this->marque;
        }

        public function getModele() {
            return $this->modele;
        }

        public function getNbPortes() {
            return $this->nbPortes;
        }

        public function getVitesseActuelle() {
            return $this->vitesseActuelle;
        }

        // Mutateurs (setters)
        public function setMarque($marque) {
            $this->marque = $marque;
        }

        public function setModele($modele) {
            $this->modele = $modele;
        }

        public function setNbPortes($nbPortes) {
            $this->nbPortes = $nbPortes;
        }

        public function setVitesseActuelle($vitesseActuelle) {
            $this->vitesseActuelle = $vitesseActuelle;
        }
    }

    // Tests
    $v1 = new Voiture("Peugeot", "408", 5);
    $v2 = new Voiture("Citroën", "C4", 3);

    $v1->demarrer();
    $v1->accelerer(50);
    $v2->demarrer();
    $v2->stopper();
    $v2->accelerer(20);

    if ($v2->getVitesseActuelle() == 0) {
        echo "Pour accélérer, il faut démarrer le véhicule {$v2->getMarque()} {$v2->getModele()}.<br>" ;
    }

    echo "La vitesse du véhicule {$v1->getMarque()} {$v1->getModele()} est de: {$v1->getVitesseActuelle()} km/h.<br>" ;
    echo "La vitesse du véhicule {$v2->getMarque()} {$v2->getModele()} est de: {$v2->getVitesseActuelle()} km/h.<br>" ;

    // Afficher les informations du véhicule 1
    echo  "Infos véhicule 1 <br><br>" ;
    echo "Nom et modèle du véhicule : {$v1->getMarque()} {$v1->getModele()} <br>" ;
    echo "Nombre de portes : {$v1->getNbPortes()} <br>" ;

    if ($v1->getVitesseActuelle() > 0) {
        echo "Le véhicule {$v1->getMarque()} {$v1->getModele()} est démarré. <br>" ;
        echo "Sa vitesse actuelle est de : {$v1->getVitesseActuelle()} km/h.<br>" ;
    } else {
        echo "Le véhicule {$v1->getMarque()} {$v1->getModele()} est à l'arrêt. <br>";
        echo "Sa vitesse actuelle est de : 0 km/h. <br>";
    }

    // Afficher les informations du véhicule 2
    echo  "Infos véhicule 2 <br> <br>" ;
    echo "Nom et modèle du véhicule : {$v2->getMarque()} {$v2->getModele()} <br> ";
    echo "Nombre de portes : {$v2->getNbPortes()} <br>";

    if ($v2->getVitesseActuelle() > 0) {
        echo "Le véhicule {$v2->getMarque()} {$v2->getModele()} est démarré. <br>" ;
        echo "Sa vitesse actuelle est de : {$v2->getVitesseActuelle()} km/h. <br>"  ;
    } else {
        echo "Le véhicule {$v2->getMarque()} {$v2->getModele()} est à l'arrêt. <br>"  ;
        echo "Sa vitesse actuelle est de : 0 km/h. <br>" ;
    }