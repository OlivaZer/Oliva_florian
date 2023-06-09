<?php 



    class Personne {
        private string $_nom;
        private string $_prenom;
        private string $_sexe;
        private DateTime $_dateNaissance;

        //**Construct ***********************************************************************************

        public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
            $this -> _nom = $nom;
            $this -> _prenom = $prenom;
            $this ->_sexe = $sexe;
            $this -> _dateNaissance = new DateTime($dateNaissance);
        }

        //** Setter Getter***********************************************************************************

        
        public function getNom(){
            return $this ->_nom;

        }
        
        public function setNom(string $nom){
            $this->_nom = $nom;
        }

        //******************************** */
        public function getPrenom(){
            return $this ->_prenom;
        
        }
        
        public function setPrenom(string $prenom){
            $this->_prenom = $prenom;
        }

        //***************************************** */

        public function getSexe(){
            return $this -> _sexe;
        }

        public function setSexe(string $sexe){
            $this->_sexe = $sexe;
        }

        //dateNaissance********************************

        public function getDateNaissance(){
            return $this ->_dateNaissance;
        }

        public function setDateNaissance( DateTime $dateNaissance){
            $this->_dateNaissance -> $dateNaissance;
        }

        //*Modele***************************************************

        //Date de naissances des Personne
        //Convertir date de naissance en string pour l'afficher
        public function dateNaissanceString(){
            
            $date = $this->getDateNaissance();
            //je récupère la date 
            $dateString = $date->format('Y-m-d');
            //la convertir en string 
            return $dateString;
        }

        public function __toString()
        {
            return $this->_nom . " ". $this->_prenom . " / ".$this->_sexe . " / " .$this->dateNaissanceString();
        }


    }


?>