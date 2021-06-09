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
       if(isset($_GET['language'])) {
           //récupération et affichage des variables
         echo '<br> Langage de programmation :  '.$_GET['language'];
        }
        else{
            //signalement si elle n'éxiste pas
            echo '<br> Le langage de programmation n\'est pas définit';
        }
        if(isset($_GET['server'])) {
            //récupération et affichage des variables
            echo '<br> Serveur :  '.$_GET['server'];
           }
           else{
               //signalement si elle n'éxiste pas
               echo '<br> Le serveur n\'est pas définit';
           }
    ?>
</body>
</html>