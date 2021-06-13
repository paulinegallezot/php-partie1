<?php
        $prenom = 'Pauline';
        $age = 41;
        $ageNils = 6.5;
        $nilsestungarcon = true;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
  <?php
  echo "$prenom $age $ageNils $nilsestungarcon";
  var_dump($ageNils);
  ?>  
</body>
</html>