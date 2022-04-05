<?php

class Piece implements Volume, Surface {

    //Données membres

    private $largeur;
    private $hauteur;
    private $profondeur;
    private $nom;
    public const nbMeublesMaxi = 6;
    private $nbMeubles;
    private $tabMeubles = array();
    private $volume;


    /**
     * Constructeur 
     * @param int $largeur
     * @param int $hauteur
     * @param int $profondeur
     * @param string $nom
     * @param int $nbMeubles
     */

    public function __construct(int $largeur, int $hauteur, int $profondeur, string $nom, int $nbMeubles)
    {
         $this->largeur = $largeur;
         $this->hauteur = $hauteur;
         $this->profondeur = $profondeur;
         $this->nom = $nom;
         $this->setNbMeubles($nbMeubles);
    }



    //Méthode d'affichage

    /**
     * Méthode toString
     * @param void
     * @return string
     */

    public function __toString() : string 
    {
        return "La largeur : " . $this->largeur . "m2\nLa hauteur : " . $this->hauteur . "m\nLa profondeur : " . $this->profondeur . "m2\nLe nom : " . $this->nom . "\nNombre de meubles max : " . self::nbMeublesMaxi . "\nNombre de meuble(s) : " . $this->nbMeubles;
    }

    //Accesseurs

    /**
     * Setters
     * Controle le nombre de pièces
     * @param void
     * 
     */

    private function setNbMeubles($nbMeubles) {
        if ($nbMeubles < 0) {
            throw new MeubleException("Erreur : Nombre incorrecte pour les meubles, entrez une valeur positive");
        }
        if ($nbMeubles > self::nbMeublesMaxi) {
            throw new MeubleException("Erreur : dépassement du nombre maximal de meuble possible dans la pièce, entrez une nouvelle valeur");
        }
        $this->nbMeubles = $nbMeubles;
    }

    /**
     * Getters
     * Retourne un tableau
     * @param void
     * @return int
     */

     public function getTabMeubles() {
         return $this->tabMeubles;
     }

    /**
     * Getters
     * Retourne un tableau
     * @param void
     * @return int
     */

     public function getNbMeuble() : int {
        return $this->nbMeubles;
     }

     /**
     * Getters
     * Retourne le nombre maximum de meubles
     * @param void
     * @return int
     */

     public function getNbMeublesMax() : int {
         return self::nbMeublesMaxi;
     }

     // Méthodes

     /**
      * Ajouter un meuble au tableau
      * @param object Meuble
      * 
      */

      public function ajouterMeuble(Meuble $meuble) {
          $this->tabMeubles[] = $meuble;
      }

      /**
       * Interface 
       * Récupère le volume de la pièce
       * @param void
       * @return int
       */

      public function getVolume() : int {
        $this->volume = $this->largeur * $this->profondeur * $this->hauteur;
        return $this->volume;
      }

      /**
       * Interface
       * Récupère la surface de la pièce
       * @param void
       * @return int
       */

       public function getSurface(): int
       {
        $this->surface = $this->largeur * $this->profondeur;
        return $this->surface;
       }

       public function getSurfaceMeubles() {

       }

       public function getSurfaceLibre() {

       }

       public function affiche() {

        echo "\n# --------Affichage de l'ensemble des données des meubles d'une pièce ------------#\n";
        foreach ($this->tabMeubles as $key => $meuble) {
            echo $meuble;
        }
        echo "\n#----------Fin------------#\n\n";
       }

}