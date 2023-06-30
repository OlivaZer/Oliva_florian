
<?php

  // auteur.php

  class Auteur {
      // Déclaration de la variable privée $nom
      private $nom;
      // Déclaration de la variable privée $prenom
      private $prenom;

      // Définition du constructeur avec deux paramètres : $nom et $prenom
      public function __construct(string $nom,string $prenom) {
          // Attribution de la valeur du paramètre $nom à la variable privée $nom de l'instance
          $this->nom = $nom;
          // Attribution de la valeur du paramètre $prenom à la variable privée $prenom de l'instance
          $this->prenom = $prenom;
      }

      //getters

      // Définition de la méthode getNom qui renvoie une valeur de type string
      public function getNom(): string{
        // Retourne la valeur de la variable privée $nom de l'instance
        return $this->nom;
      }

      public function getPrenom(): string{

        return $this->prenom;
      }

      
      //setters

      // Définition de la méthode setNom avec un paramètre : $nom
      public function setNom(string $nom){
        // Attribution de la valeur du paramètre $nom à la variable privée $nom de l'instance
        $this->nom = $nom;
      }

      public function setPrenom(string $prenom){

        $this->prenom = $prenom;
      }


      //La méthode toString() retourne le nom complet de l'auteur au format "Prénom Nom" 
      public function toString() {
        // Retourne le nom complet de l'auteur au format "Prénom Nom"
        return $this->prenom . ' ' . $this->nom;
      }
    }