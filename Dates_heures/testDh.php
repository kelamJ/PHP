<?php
echo "Nous sommes le " . date("d-m-Y"). "<br>";
echo date("H:i:s"). "<br>";
$oDate = new DateTime("01-01-2018");
var_dump($oDate) . "<br>";

$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "2015-12-35";

if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}

$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "17/25/1966 03:42:11");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !";
}
?>