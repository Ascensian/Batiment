<?php

spl_autoload_register(function($classe){
    include "classes/" . $classe . ".class.php";
   });

//-------------Test Meuble------------------
$meubleToto = new Meuble(3, 1, 3, "meuble de toto");
$meubleToto->getVolume();
$meubleToto->getSurface();
echo "#---------Données du meuble---------#";
echo "\n" .$meubleToto;
echo "\n Volume Meuble : " . $meubleToto->getVolume();
echo "\n Surface Meuble : " . $meubleToto->getSurface();


//--------------Test Piece-------------------

// Sans exceptions

    $piece = new Piece(15, 3, 21, "piece de potter", 5);
    echo "\n#---------Données de la piece en cours---------#";
    echo "\n" . $piece;
    $piece->ajouterMeuble($meubleToto);
    echo "\n Volume Piece : " . $piece->getVolume();
    echo "\n Surface Piece : " . $piece->getSurface();
// Avec exceptions
try {
    $piece = new Piece(15, 13, 45, "chambre de potter", 7);
} catch (MeubleException $e) {
    echo "\n#-------Pièce : exception dépassement limite meuble------#";
    echo "\n";
    echo "\n" . $e->getMessage();
    echo "\n";
}

// Affiche le tableau qui contient les pièces et les meubles
$piece = new Piece(15, 13, 45, "piece de potter", 5);
$piece->ajouterMeuble($meubleToto);
$piece->affiche();

//--------------Test Batiment-------------------
echo "# -----------Données d'un batiment------------- #";
$batiment  = new Batiment("7 rue des abricots", 10, 10);
echo $batiment;
echo "\nNombre de pièce avec méthode : " . $batiment->getNbPièces();
echo "\nNombre de pièce max avec méthode : " . $batiment->getNbPiècesMaxi();
echo "\n";
try {
    $batiment->ajouterPiece($piece);
} catch (BatimentException $e) {
    echo "\n#-------Batiment : exception dépassement limite piece------#";
    echo "\n";
    echo "\n" . $e->getMessage();
    echo "\n";
}





