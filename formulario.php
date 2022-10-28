<?php

if(isset($_POST['submit']))
{
 // print_r('Nome: ' . $_POST['nome']);
 // print_r('<br>');
 // print_r('Data de nascimento: ' . $_POST['data']);
 // print_r('<br>');
 // print_r('Telefone: ' . $_POST['telefone']);
 // print_r('<br>');
 // print_r('E-mail: ' . $_POST['email']);
 // print_r('<br>');
 // print_r('Estado: ' . $_POST['estado']);
 //print_r('<br>');
 // print_r('Cidade: ' . $_POST['cidade']);
 //  print_r('<br>');
 // print_r('Sexo: ' . $_POST['sexo']);

include_once('config.php');

 $nome = $_POST['nome'];
 $data_nasc = $_POST['data'];
 $telefone = $_POST['telefone'];
 $email = $_POST['email'];
 $estado = $_POST['estado'];
 $cidade = $_POST['cidade'];
 $sexo = $_POST['sexo'];

 $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,data_nasc,telefone,email,estado,cidade,sexo) VALUES('$nome','$data_nasc','$telefone','$email','$estado','$cidade','$sexo')");

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Hariel Mendonça</title>

   
</head>
<body>
    <h1>Formulário</h1>
  <form  action="formulario.php" method="POST">
  <div class="fora">
     <div class="dentro"> 
         <p><b>Nome:</b> <input type="text"  name="nome"  class="input" required="required" placeholder="ex: fulano"></p>
        

         <p><b>Data de nascimento:</b> <input type="date"  name="data" class="input" size="2" maxlength="2" placeholder="Mes" required="required"></p>
        
      
         <p><b>Telefone:</b><input type="tel" name="telefone" class="input" required="required" placeholder=" ex: 51 123456789"></p>
      
         <p><b>E-mail:</b> </e-mai> <input type="gmail"  name="email" class="input" required="required" placeholder="com @" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/></p>
     
         <p><b>Estado:</b> <input class="input" type="text" name="estado" placeholder="Digite aqui">
            <br>
         </p>
         <p><b>Cidade:</b> <input class="input" type="text"  name="cidade" placeholder="Digite aqui" >
           </p>
         <p><b>Sexo:</b></p>
            <input type="radio" name="sexo"  value="feminino" required class="select">
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" name="sexo" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" name="sexo"  value="outro" required>
            <label for="outro">Outro</label>
          <br>
          <br>
          <button type="submit"  class="botao"  name="submit" >Enviar</button>
         <footer>
            <p class="copy">© Copyright - 2022</p>
            <p class="copy">Todos direitos reservados a Hariel Mendonça</p>
         </footer>
      </div>  
 </div>    


</body>
</html>