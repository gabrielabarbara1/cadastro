<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <style>
       /* Estilos gerais */
body {
  font-family: Arial, sans-serif;
  margin: 0;

}

h1 {
  font-size: 30px;
  margin: 10px;
  text-align: center;
}

table {
  width: 100%;
  border-collapse: collapse;
  
}

table th,
table td {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: center;
  font-size: 18px;
}

table th {
  background-color: #f5f5f5;
  font-weight: bold;
}

/* Cores personalizadas */
body {
  background-color: #f9f9f9;
}

h1 {
  color: #333;
}

table th {
  background-color: #007bff;
  color: #fff;
}

table td {
  background-color: #fff;
  color: #333;
}

.container {
  display: flex;
}

.column {
  flex: 1;
  padding: 10px;
}
    </style>
</head>
<body>
<?php
include("menu.php");
?>
    <h1>Lista de usuários</h1>
    <table border="1px">
        <tr class="container">
            <th class="column">ID</th>
            <th class="column">Nome</th>
            <th class="column">Telefone</th>
            <th class="column">E-mail</th>
            <th class="column">Endereço</th>
            <th class="column">Sexo</th>
            <th class="column">Login</th>
            <th class="column">Senha</th>
            <th class="column">Status</th>
        </tr>
    </table>
    <?php
    include("conexao.php");
    $sql = "SELECT * FROM usuario";
    $_result = mysqli_query($_conexao, $sql);
    while ($rows = mysqli_fetch_array($_result)){
    ?>
    <table border="1px">
        <tr class="container">
            <td class="column"><?php echo($rows['ID']); ?></td>
            <td class="column"><?php echo($rows['nome']); ?></td>
            <td class="column"><?php echo($rows['telefone']); ?></td>
            <td class="column"><?php echo($rows['email']); ?></td>
            <td class="column"><?php echo($rows['endereco']); ?></td>
            <td class="column"><?php echo($rows['sexo']); ?></td>
            <td class="column"><?php echo($rows['login']); ?></td>
            <td class="column"><?php echo($rows['senha']); ?></td>
            <td class="column"><?php echo($rows['status']); ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>