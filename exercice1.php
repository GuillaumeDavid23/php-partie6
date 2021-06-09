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
        if(isset($_GET['lastname'])) {
            //récupération et affichage des variables
            echo $_GET['lastname'];
        }
        else{
            //signalement si elle n'éxiste pas
            echo '<br> lastname n\'est pas définit';
        }
        if(isset($_GET['firstname'])) {
            //récupération et affichage des variables
            echo $_GET['firstname'];
        }
        else{
            //signalement si elle n'éxiste pas
            echo '<br> firstname n\'est pas définit';
        }
    ?>
</body>
</html>