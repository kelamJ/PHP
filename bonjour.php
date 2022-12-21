<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <?php
            $bonjour = "Bonjour, Hello\n";
            echo $bonjour;
            $year="2002";
            $month="4";
            $day="5";
            $varDate = sprintf("\t%04d-%02d-%02d", $year, $month, $day) ;

           // echo $varDate affichera "2002-04-05"
            echo $varDate;
            //var_dump($year);
            
            ?> 
        </body>
    </html