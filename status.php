<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar status</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
include("menu.php");
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $status = $_POST["status"];

    $sql = "UPDATE usuario SET status='$status' WHERE ID='$id'";

    if (mysqli_query($_conexao, $sql)) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($_conexao);
    }
}

$sql = "SELECT * FROM usuario";
$result = mysqli_query($_conexao, $sql);
?>
<h1>Atualizar status</h1>
<?php while ($rows = mysqli_fetch_array($result)) { ?>
    <table>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="id" value="<?php echo $rows['ID']; ?>">
            <tr>
                <td>Nome:<?php echo $rows['nome']; ?></td>
            </tr>
            <tr>
                <td>Status:
                    <input type="radio" name="status" value="A" <?php if ($rows['status'] === 'A') echo 'checked'; ?>>Ativo
                    <input type="radio" name="status" value="I" <?php if ($rows['status'] === 'I') echo 'checked'; ?>>Inativo
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Atualizar">
                </td>
            </tr>
        </form>
    </table>
<?php } ?>
   
</body>
</html>
