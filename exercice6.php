<?php
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 6</title>
</head>
<body>
    <?php
        //test d'existant des variables url
       if(isset($_GET['building'])) {
           //récupération et affichage des variables
         echo '<br> Etage  '.$_GET['building'];
        }
        else{
            //signalement si elle n'éxiste pas
            echo '<br> L\'étage n\'est pas définit';
        }
        if(isset($_GET['room'])) {
            //récupération et affichage des variables
            echo '<br> Chambres :  '.$_GET['room'];
           }
           else{
               //signalement si elle n'éxiste pas
               echo '<br> La chambre n\'est pas définit';
           }
    ?>
</body>
</html>