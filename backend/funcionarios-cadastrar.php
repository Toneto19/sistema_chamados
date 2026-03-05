<?php

// importação da conexão com o banco de dados
require_once 'conexao.php';

try {
    // captura os dados enviados pelo frontend
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $departamento = $_POST['departamento'];

    // Monta a query SQL que será executada
    $sql = "INSERT INTO tb_funcionarios (nome,email,telefone,departamento)VALUES('$nome','$email','$telefone','$departamento')";

    // prepara a execucao da query acima
    $comando = $conexao->prepare($sql);
    // executa o comando
    $comando->execute();

    echo "Cadastro realizado com sucesso!";

    
}catch (PDOException $erro) {
    echo "Não foi possivel cadastrar".$erro->getMessage();
}


?>