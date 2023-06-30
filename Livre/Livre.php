<h1>Exo Livres POO</h1>

<p>
vous êtes chargé de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs. Les livres sont caractérisés par un titre, nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un Nom et un Prénom. Une méthode toString() sera apprécié dans chacune de vos classes. Vous implémenterez une méthode afficherBibliographie() qui permettra d'afficher la bibliographie complète d'un auteur : <br> Livre de Stephen King<br>

Ca (1986) : 1138 pages / 20 € <br>
Simetierre (1983) : 374 pages / 15 €<br>
Le Fléau (1978) : 823 pages / 14 €<br>
Shining (1977) : 447 pages / 16 €<br>
</p>

<h2>Résultat</h2>

<?php

    class Livre {

      private string $titre;
      private string $pages;
      private string $annee;
      private string $prix;
      private  $auteur;

      public function __construct(string $titre, string $pages, string $annee, string $prix, $auteur){
        
          $this->titre = $titre;
          $this->pages = $pages;
          $this->annee = $annee;
          $this->prix = $prix;
          $this->auteur = $auteur;


      }


      //getters
      // Méthodes "getter" pour accéder aux valeurs des propriétés
      public function getTitre(): string{

        return $this->titre;
      }
      
      public function getPages(): string{

        return $this->pages;
      }

      public function getAnnee(): string{

        return $this->annee;
      }

      public function getPrix(): string{

        return $this->prix;

      }

      public function getAuteur(){

        return $this->auteur;
      }


      //setters
      // Méthodes "setter" pour modifier les valeurs des propriétés
      public function setTitre(string $titre){

        $this->titre = $titre;

      }

      public function setPages(string $pages){

        $this->pages = $pages;
      }

      public function setAnnee(string $annee){

        $this->annee = $annee;
      }
      
      public function setPrix(string $prix){

        $this->prix = $prix;
      }

      public function setAuteur( $auteur){

        $this->auteur = $auteur;
      }

      // toString
      // Méthode "toString" pour représenter l'objet Livre sous forme de chaîne de caractères
    public function toString() {
      return "Livre : " . $this->titre . " | Pages : " . $this->pages . " | Année : " . $this->annee . " | Prix : " . $this->prix . " | Auteur : " . $this->auteur->toString();
  }
 
      
    }

