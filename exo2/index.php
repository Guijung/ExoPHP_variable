<!DOCTYPE html>
<html lang="fr" dir="ltr">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>exo2p1</title>
</head>
<body>
<?php
//pas de double quote = gain de temps, gain de ressources. avec les double quote il va devoir analyser la string
$lastname = 'Kenobi';
$firstname = "Obiwan";
$age = 5;
echo nl2br("$lastname\n$firstname\n$age");
?>

</body>
</html>

