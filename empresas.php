<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <title>Sistema de Chamados - empresas</title>
</head>

<body>
    <header>
        <h1>Cadastro de empresas</h1>
    </header>
    <form action="backend/empresas-cadastrar.php" method="POST">
        <div id="grid">
            <div class="label">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="label">
                <label for="">Area</label>
                <input type="text" name="area" id="area">
            </div>
            <div class="label">
                <label for="">Responsável</label>
                <input type="text" name="responsavel" id="responsavel">
            </div>
            <div class="label">
                <label for="">Telefone</label>
                <input type="text" name="telefone" id="telefone">
            </div>
            <div class="label">
                <label for="">E-mail</label>
                <input type="text" name="email" id="email">
            </div>
    
    </form>
    </div>

    <div id="botao">
            <input  class="btn-cadastrar" type="submit" value="Cadastrar">
        </div>
</body>

</html>