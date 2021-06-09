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
       echo $_GET['lastname'].' '.$_GET['firstname'];
       if(isset($_GET['age'])) {
           //récupération et affichage des variables
         echo '<br> Vous avez '.$_GET['age'].' ans';
        }
        else{
            //signalement si elle n'éxiste pas
            echo '<br> L\'age n\'est pas définit';
        }
    ?>
</body>
</html>