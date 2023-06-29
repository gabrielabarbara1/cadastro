<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            font-size: 20px;
        }
        h1{
            text-align: center;
            font-size: 32px;
            margin-top: 10px;
        }
        /* Estilização para o formulário */
        table {
            margin: 20px auto;
            background-color: #fff;
            border-collapse: collapse;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        table input[type="text"],
        table input[type="password"] {
            padding: 5px;
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        table input[type="submit"] {
            padding: 8px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        table input[type="submit"]:hover {
            background-color: #45a049;
        }
       
    </style>
</head>
<body>
    <?php include("menu.php"); ?>
    <h1>Cadastro</h1>
    <table>
        <form action="cadastrar.php" method="post">
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco"></td>
            </tr>
            <tr>
                <td>Sexo:
                <td><input type="radio" name="sexo" value="masculino">Masculino
                <input type="radio" name="sexo" value="feminino">Feminino</td>
                </td>
            </tr>
            <tr>
                <td>Login:</td>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha"></td>
            </tr>
            <tr>
                <td><input type="submit" name="cadastrar" value="Cadastrar"></td>
            </tr>
        </form>
    </table>
</body>
</html>
