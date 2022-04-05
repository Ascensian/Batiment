<?php

class Batiment {

    // Données membres
    private $adresse;
    private $nbPiècesMaxi;
    private $nbPiece;
    private $tabPièces;

    /**
     * Constructeur
     * Initialise les données du batiment
     */

    public function __construct(string $adresse, int $nbPiècesMaxi, int $nbPiece)
    {
        $this->adresse = $adresse;
        $this->nbPiècesMaxi = $nbPiècesMaxi;
        $this->setNbPièces($nbPiece);

    }

    // Accesseurs

    /**
     * Setters
     * Controle que le nombre de pièce n'est pas supérieur au nombre de pièce max
     * @param int $nbPièce
     * @return int
     */

     private function setNbPièces($nbPiece) {
         if ($nbPiece > $this->nbPiècesMaxi) {
             throw new BatimentException("Erreur : nombre de pièces supérieure par au nombre de pièce max du batiment, saisir un nouveau nombre de pièce");
         }

         $this->nbPiece = $nbPiece;
     }




     // Méthode d'affichage

     public function __toString() : string
     {
         return "\nAdresse : " . $this->adresse . "\nNombre de pièce maximale : " . $this->nbPiècesMaxi . "\nNombre de pièce : " . $this->nbPiece;
     }

     // Accesseurs

     /**
      * Getter
      * Retourne le nombre de pièce
      * @param void
      * @return int
      */

      public function getNbPièces() : int {
          return $this->nbPiece;
      }

      /**
      * Getter
      * Retourne le nombre de pièce maximal
      * @param void
      * @return int
      */

      public function getNbPiècesMaxi() : int {
          return $this->nbPiècesMaxi;
      }

      // Méthodes

      /**
       * Ajouter une pièce dans le batiment
       * 
       */

       public function ajouterPiece(Piece $piece) {
        $this->nbPiece++;
           if ($this->nbPiece > $this->nbPiècesMaxi) {
               throw new BatimentException("Erreur : batiment a atteint sa capacité maximale de pièce diponible, impossible de créer une nouvelle pîèce");
           } else {
                $this->tabPièces[] = $piece;
                
           }

       }
















}