<?php
  function insereUsuario($nome, $senha, $email, $foto)
  {
      // conctando ao BD
      include "conecta_mysql.php";

      // executando a operação de SQL
      $resultado = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, foto) VALUES ('".$nome."','".$senha."','".$email."','".$foto."')") or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

      if($resultado === TRUE){
            echo "<br/><h1><b>Usuário inserido com sucesso!</b></h1>";
      } else {
            echo "<br/>Erro na inserção!";
      }
      // fechamento da conexão   
      mysqli_close($conexao);
  }
?>
