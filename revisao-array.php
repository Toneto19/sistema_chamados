<?php

    $nomes = ['João', 'maria', 'josé da silva'];


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    foreach($nomes as $nome){
        ?>

        <p>
            <?= $nome?>
        </p>

        <?php
              }
        ?>
</body>
</html>