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
       if(isset($_GET['startDate']) && isset($_GET['endDate'])) {
           //récupération et affichage des variables
         echo '<br> Départ le :  '.$_GET['startDate'];
         echo '<br> Retour le :  '.$_GET['endDate'];
        }
        else{
            //signalement si elle n'éxiste pas
            echo '<br> La date de début n\'est pas définit';
            echo '<br> La date de retour n\'est pas définit';
        }
        //     //test d'existant des variables url
        // if(isset($_GET['endDate'])) {
        //     //récupération et affichage des variables
        //     echo '<br> Retour le :  '.$_GET['endDate'];
        //    }
        //    else{
        //        //signalement si elle n'éxiste pas
        //        echo '<br> La date de retour n\'est pas définit';
        //    }
    ?>
</body>
</html>