<?php
$age = (int)null;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <?php
        var_dump($age);
        echo'<br>';
        echo $age;
        $age = 41;
        echo $age;
        settype($age,'string');
        var_dump($age);
    ?>
</body>
</html>