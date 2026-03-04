<?php
    $conn = new PDO("mysql:host=localhost;dbname=db_sistema_chamados","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão realizada com sucesso";

    $comando = "SELECT id, assunto, prioridade FROM tb_chamados";

    $chamados = $conn->query($comando);

    foreach($chamados as $chamado){
            echo "<br>ID: " . $chamado['id']; 
            echo "<br>Assunto: " . $chamado['assunto'];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamados</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <h1>Listagem de Chamados</h1>
    </main>
</body>
</html>