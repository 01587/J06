
<?php
function afficher_titre ($nom_produit)
{
    echo "fiche produit :"  . $nom_produit;
}

function afficher_description ($couleur,$prix)
{
    echo "couleur :" .$couleur.  "prix :". $prix ;
}

function afficher_produit ($nom_produit,$couleur,$prix,$disponible)
{
    echo"nom produit: " .$nom_produit. "couleur:".$couleur . "prix:".$prix. "disponible" .$disponible;
}

    
?>


