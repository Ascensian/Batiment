<?php

class Meuble implements Volume, Surface {

    // Données membres

    private $largeur;
    private $hauteur;
    private $profondeur;
    private $nom;
    private $volume;
    private $surface;

    /**
     * Constructeur
     * Initialise les données du batiment
     * @param int $largeur
     * @param int $hauteur
     * @param int $profondeur
     * @param string $nom
     */

     public function __construct(int $largeur, int $hauteur, int $profondeur, string $nom)
     {
         $this->largeur = $largeur;
         $this->hauteur = $hauteur;
         $this->profondeur = $profondeur;
         $this->nom = $nom;
     }
     //Accesseurs

     /**
      * Getter
      * Retourne la largeur
      * @param void
      * @return int
      */

      public function getLargeur() : int {
        return $this->largeur;
      }

      /**
      * Getter
      * Retourne la hauteur
      * @param void
      * @return int
      */

      public function getHauteur() : int {
          return $this->hauteur;
      }

      /**
      * Getter
      * Retourne la profondeur
      * @param void
      * @return int
      */

      public function getProfondeur() : int {
          return $this->profondeur;
      }

      /**
      * Getter
      * Retourne le nom
      * @param void
      * @return int
      */

      public function getNom() : string {
          return $this->nom;
      }

      // Méthode d'affichage

      /**
       * Méthode toString
       * @param void
       * @return string
       */

      public function __toString() : string
      {
          return "La largeur : " . $this->largeur . "m2\nLa hauteur : " . $this->hauteur . "m\nLa profondeur : " . $this->profondeur . "m2\nLe nom : " . $this->nom . "\nLe volume : " . $this->volume . "\nLa surface : " . $this->surface;

          
      }

      //Les méthodes

      /**
       * Retourne le volume du batiment
       * @param void
       * @return int
       */

      public function getVolume() : int {
            $this->volume = $this->largeur * $this->profondeur * $this->hauteur;
            return $this->volume;
      }

      /**
       * Retourne la surface du batiment
       * @param void
       * @return int
       */


      public function getSurface() : int {
          $this->surface = $this->largeur * $this->profondeur;
          return $this->surface;
      }

      /**
       * Affiche les informations pertinentes sur la batiment
       * 
       */

       public function affiche() {

       }
        




    }
