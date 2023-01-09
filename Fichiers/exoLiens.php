<?php
// $fichier = fopen("liens.txt");
// include("liens.txt");
$liens = file("liens.txt");
echo "<ul>";
foreach ($liens as $lien)
{
    $lien = trim($liens);
    $partie = explode(' ', $lien);
    $url = $partie[0];
    $titre = $partie[1];
}
echo "<li> <a> href=" . $url . " . $titre . </a> </li>";
echo "</ul>";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>