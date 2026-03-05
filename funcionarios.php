<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <title>Sistema Chamados - Funcionários</title>
</head>

<body>
    <header>
        <h1>Cadastro de Funcionários</h1>
    </header>
    <form action="backend/funcionarios-cadastrar.php" method="POST">
        <div id="grid">
            <div class="label">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="label">
                <label for="">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="label">
                <label for="">telefone</label>
                <input type="text" name="telefone" id="telefone">
            </div>
            <div class="label">
                <label for="departamento">departamento</label>
                <select name="departamento" id="departamento">
                    <option value="" disabled select>Selecione...</option>
                    <option value="Suporte">Suporte</option>
                    <option value="Desenvolvedor">Desenvolvedor</option>
                    <option value="Adiministrativo">Adiministrativo</option>
                </select>
            </div>



        </div>

        <div id="botao">
            <input class="btn-cadastrar" type="submit" value="Cadastar">
        </div>
    </form>

</body>

</html>