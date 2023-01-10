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
var_dump($_FILES);

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
    <section>
        <p id="oblig">*Ces zones sont obligatoires pour envoyer le formulaire.</p>
        <form action="exoF.php" id="form" method="post" enctype="multipart/form-data">
        <label for="societe" id="societe">Société :</label> <input  type="text" name="societe">
        <br>
        <label for="contact" id="contact">Personne à contacter :</label> <input  type="text" name="contact">
        <br>
        <label for="area" id="adress1">Adresse de l'entreprise :</label> <textarea name="area" id="area1" cols="15" rows="3"></textarea>
        <br>
        <label for="codep" id="codep">Code Postal :</label> <input  type="number" name="codep">
        <br>
        <label for="ville" id="ville">Ville :</label> <input  type="text" name="ville">
        <br>
        <label for="email" id="email">E-mail :</label> <input  type="email" name="email">
        <br>
        <label for="tel" id="tel">Téléphone :</label> <input  type="tel" name="tel">
        <br>
        <label for="choix">Séléctionner l'environnement technique du projet :</label>
        <select name="select" size="1" id="choix">
            <option value="Choisissez"  >Choisissez</option>
            <option value="Acces" >Acces</option>
            <option value="Java" >Java</option>
            <option value="Delphi" >Delphi</option>
            <option value="Windev" >Windev</option>
            <option value="Visual Basic" >Visual Basic</option>
            <option value="Power Builder" >Power Builder</option>
            <option value="Internet" >Internet</option>
            <option value="Intranet" >Intranet</option>
            <option value="Windows NT" >Windows NT</option>
            <option value="Unix" >Unix</option>
            <option value="SQL Server" >SQL Server</option>
            <option value="Oracle" >Oracle</option>
            <option value="Autres" >Autres ...</option>
        
            <textarea name="adress1" id="area2" cols="15" rows="3"></textarea>
        </select>
        <br>
        <input type="file" name="fichier"> 
        <br>
        <input name="envoyer" value="Envoyer" type="submit" id="envoyer">
        <input name="effacer" value="Effacer" type="reset" id="effacer">
        </form>
        </section>
</body>
</html>
