<?php
    require_once 'conexao.php';


try{
        $nome = $_POST['nome'];
        $area = $_POST['area'];
        $responsavel = $_POST['responsavel'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

$sql = "INSERT INTO tb_empresas (nome,area,responsavel,telefone,email)VALUES('nome','area','responsavel','telefone','email')";

$comando = $conexao->prepare($sql);

$comando->execute();

echo "Cadastro finalizado com sucesso!";


}catch (PDOException $erro) {
    echo "Não foi possivel cadastrar".$erro->getMessage();
}


?>