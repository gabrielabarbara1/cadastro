<?php
include("conexao.php");

$_nome = $_POST["nome"];
$_telefone = $_POST["telefone"];
$_email = $_POST["email"];
$_endereco = $_POST["endereco"];
$_sexo = $_POST["sexo"];
$_login = $_POST["login"];
$_senha = md5($_POST["senha"]);
$_status = "A"; // Definindo o status como "Ativo"

$sql = "INSERT INTO usuario 
    (id, nome, telefone, email, endereco, sexo, login, senha, status)
    VALUES 
    ('', '$_nome', '$_telefone', '$_email', '$_endereco', '$_sexo', '$_login', '$_senha', '$_status')";
//echo($sql);
mysqli_query($_conexao, $sql);

echo "Cadastro enviado com sucesso!";

header("Refresh: 3;url=index.php");
?>


