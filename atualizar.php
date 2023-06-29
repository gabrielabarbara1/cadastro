<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar usuários</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
include("menu.php");
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $sexo = $_POST["sexo"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $status = $_POST["status"];

    $sql = "UPDATE usuario SET nome='$nome', telefone='$telefone', email='$email', endereco='$endereco', sexo='$sexo', login='$login', senha='$senha', status='$status' WHERE id='$id'";

    if (mysqli_query($_conexao, $sql)) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($_conexao);
    }
}

$sql = "SELECT * FROM usuario";
$result = mysqli_query($_conexao, $sql);
?>
<h1>Atualizar usuários</h1>
    <?php while ($rows = mysqli_fetch_array($result)) { ?>
        <div>
        <table>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="id" value="<?php echo $rows['ID']; ?>">
                <tr>
                    <td>Nome:</td>
                        <td><input type="text" name="nome" value="<?php echo $rows['nome']; ?>"></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                        <td><input type="text" name="telefone" value="<?php echo $rows['telefone']; ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                        <td><input type="text" name="email" value="<?php echo $rows['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                        <td><input type="text" name="endereco" value="<?php echo $rows['endereco']; ?>"></td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                        <td><input type="radio" name="sexo" value="Masculino" <?php if ($rows['sexo'] === 'masculino') echo 'checked'; ?>>Masculino
                        <input type="radio" name="sexo" value="Feminino" <?php if ($rows['sexo'] === 'feminino') echo 'checked'; ?>>Feminino</td>
                </tr>
                <tr>
                    <td>Login:</td>
                        <td><input type="text" name="login" value="<?php echo $rows['login']; ?>"></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                        <td><input type="text" name="senha" value="<?php echo $rows['senha']; ?>"></td>
                </tr>
                <tr>
                <input type="hidden" name="status" value="<?php echo $rows['status']; ?>">
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Atualizar"></td>
                </tr>
            </form>
        </table>
        </div>
    <?php } ?>
   
</body>
</html>
