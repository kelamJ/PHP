
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
<table>
<pre>
<!-- Partie 1 -->

<?php
function lien($link, $name){
    echo "<a href= >" . $link  . $name . "</a>";
}
lien("https://www.reddit.com/", "Reddit Hug");
?>

<!-- Partie 2 -->

<?php
$tab = array(4, 3, 8, 2);
function somme($tab){
    echo "résultat = " . array_sum($tab) . "\n";
}
somme($tab);
?>

<!-- Partie 3 -->

<?php
$resultat = "TopSecret42";
function mdp($resultat){
    $uppercase = preg_match('@[A-Z]@', $resultat);
    $lowercase = preg_match('@[a-z]@', $resultat);
    $number    = preg_match('@[0-9]@', $resultat);

    // $regex = preg_match('^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$');
    if($uppercase && $lowercase && $number && strlen($resultat) > 8 == $resultat)
    {
    echo "Mot de passe valide";
    }
    else
    {
    echo "Mot de passe invalide";
    }
}
mdp($resultat);
?>