<html>
<head>
<title> Test fonctions </title>
</head>
<body>
<?php
include 'EX.01/affichage.php';
include 'EX.01/gestion.php';
$nom_produit = 't-shirt femme\n';

$couleur ='Rouge';

$prix = "15.50\n";

$quantité = "10\n";

$disponible = true;
?>
<h1> <?php afficher_titre($nom_produit)?> </h1>
<p> <?php afficher_description ($couleur,$prix)?> </p>
<p> <?php if ($disponible == true)

{
echo afficher_titre ($nom_produit).afficher_description ($couleur,$prix); 
}
if ($disponible== false) 
{
echo "Le produit $nom_produit n'est malheuresement plus disponible";}?> </p>
<p> <?php afficher_titre($nom_produit , $couleur, $prix , $disponible)?> </p>



</body>
</html>