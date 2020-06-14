<?php 
    $age = 3; 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e1p2</title>
</head>
<body>
    <p><?php if ($age >= 18) {
            //si $age est supp ou égale à 18, afficher :
            echo 'Vous êtes majeur.';
        } else {
            //sinon, afficher :
            echo 'Vous êtes mineur.';
        } ?></p>
</body>
</html>
<?php
    //echo d'une variable contenant une opération affiche son résultat. 
    $sum = 3 + 4; 
    $product =  5 * 20;
    $quotient = 45 / 5;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e8p1</title>
    </head>
    <body>
        <p><?= $sum ?></p>
        <p><?= $product ?></p>
        <p><?= $quotient ?></p>
    </body>
</html>