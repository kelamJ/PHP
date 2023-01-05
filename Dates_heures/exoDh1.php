<!-- Exercice 1 -->
<!-- 17/07/2019 -->
<?php
$ddate = "2019/07/17";
$date = new DateTime($ddate);
$week = $date->format("W");
echo "Nombre de semaine: $week" . "<br>";

?>

<!-- Exercice 2  -->

<?php
$datenow = new DateTime("2023-01-05");
$datefin = new DateTime("2023-02-06");
$diff = $datefin->diff($datenow)->format("%a");
echo $diff . "<br>";
?>

<!-- Exercice 3 -->

<?php

$année = 2024;
if ((0 == $année % 4) & (0 != $année % 100) |(0 == $année % 400))
{
    echo "$année est une année bissextile";
}
else
{
    echo "$année n'est pas une année bissextile";
}
?>

<!-- Exercice 4 -->

<?php
echo '<br>';
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            
            if(checkdate(32,17,2019)){
                echo " La date est valide";
            }
            else {
    echo "La date n'est pas valide";
            }

?>