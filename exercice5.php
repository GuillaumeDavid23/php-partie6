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
       if(isset($_GET['week'])) {
           //récupération et affichage des variables
         echo '<br> Nombre de semaine :  '.$_GET['week'];
        }
        else{
            //signalement si elle n'éxiste pas
            echo '<br> Le nombre de semaine n\'est pas définit';
        }

    ?>
</body>
</html>