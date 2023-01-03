<!-- EXERCICE 1 -->
<?php 
$tableau = array(
    "Janvier"   =>  31,
    "Février"   =>  28,
    "Mars"  =>  31,
    "Avril"  =>  30,
    "Mai"  =>  31,
    "Juin"  =>  30,
    "Juillet"  =>  31,
    "Aout"  =>  31,
    "Septembre"  =>  30,
    "Octrobre"  =>  31,
    "Novembre"  =>  30,
    "Décembre"  =>  31,
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    
<?php
asort($tableau);
foreach ($tableau as $mois => $jour) {
    echo '<tr>
    <td>' . $mois . '</td>
    <td>' . $jour . '</td>
    </tr>'; 
}

?> 

</table>


</body>
</html>