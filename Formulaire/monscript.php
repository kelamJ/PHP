<?php
    /* Récupère la société et la personne a contacter automatiquement */
if ($_POST) {
    $text = $_POST["area"];
    echo "Le formulaire nous donne " . "<br>" .
        " " . $_REQUEST['societe'] . "<br>" .
        " " . $_REQUEST['contact'] . "<br>" .
        " " . $_REQUEST['area'] . "<br>" .
        " " . $_REQUEST['codep'] . "<br>" .
        " " . $_REQUEST['ville'] . "<br>" .
        " " . $_REQUEST['email'] . "<br>" .
        " " . $_REQUEST['tel'] . "<br>" .
        " " . $_REQUEST['select'] . "<br>";
}
?>