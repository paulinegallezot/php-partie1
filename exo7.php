<?php
$lastname = 'Gomez-Mathieu';
$firstname = 'Nils';
$age = 6;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <?php
        
    echo "Bonjour $lastname $firstname, tu as $age ans.";
        
    ?>
    Bonjour <?=$lastname.' '.$firstname?> tu as <?=$age?> ans
</body>
</html>