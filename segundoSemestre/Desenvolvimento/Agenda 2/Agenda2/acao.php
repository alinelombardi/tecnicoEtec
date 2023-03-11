<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>CADASTRO CONFIRMADO</title>

</head>

<body>
  <div class="w3-container w3-teal">
    <h2>Cadastro Confirmado com Sucesso</h2>

    <?php

    $txtNome = $_POST['txtNome'];
    $txtSobrenome = $_POST['txtSobrenome'];
    $txtEmail = $_POST['txtEmail'];
    $txtFormacao = $_POST['txtFormacao'];
    $txtEmprego = $_POST['txtEmprego'];

    echo "Nome: " . $txtNome . "<br>";
    echo "Sobrenome: " . $txtSobrenome . "<br>";
    echo "Email: " . $txtEmail . "<br>";
    echo "Formação: " . $txtFormacao . "<br>";
    echo "Descrição Último Emprego: " . $txtEmprego . "<br>";

    ?>
  </div>
</body>

</html>