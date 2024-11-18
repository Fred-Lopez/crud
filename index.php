<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Usuários</h1>

        <form action="usuario.php" method="POST">
            <input type="hidden" id="id" name="id">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <button type="submit" name="action" value="save">Salvar</button>
            <button type="button" onclick="limparCampos()">Limpar</button>
        </form>

        <h2>Usuários Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'usuario.php';
                    $usuarios = getUsuarios();
                    foreach ($usuarios as $usuario) {
                        echo "<tr>
                                <td>{$usuario['id']}</td>
                                <td>{$usuario['nome']}</td>
                                <td>{$usuario['email']}</td>
                                <td>
                                    <button onclick='editarUsuario({$usuario['id']})'>Editar</button>
                                    <button onclick='excluirUsuario({$usuario['id']})'>Excluir</button>
                                </td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>