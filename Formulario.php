<?php 

if(isset($_POST['submit']))
{

  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $data_nasc = $_POST['data_nascimento'];


  $result = mysqli_query($conexao, "INSERT INTO usuarios(NOME,EMAIL,TELEFONE,DATA_NASC)VALUES('$nome','$email','$telefone','$data_nasc')");
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;800&display=swap');
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="global.css">
    <title>Form</title>
</head>

<body>
    <div class="all">
        <h1>Formulario</h1>
        <form action="Formulario" method="POST">
            <label for="nome" class="labelInput">Nome</label>
            <input type="text" name="nome" id="nome" class="inputter">
            <br />
            <label for="email" class="labelInput">Email</label>
            <input type="text" name="email" id="email" class="inputter" />
            <br />
            <label for="telefone" class="labelInput">Telefone</label>
            <input type="tel" name="telefone" id="telefone" class="inputter" />
            <br />
            <label for="data_nascimento"><b>Data de Nascimento</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="inputter" />
            <br />
            <input type="submit" name="submit" id="submit" value="Enviar" class="submiter">
        </form>
        <button><a href="./display_data.php">Cadastros</a></button>
    </div>
    </div>


</body>

</html>