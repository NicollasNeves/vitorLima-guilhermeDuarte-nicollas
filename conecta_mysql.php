<?php
  // abrir conexao e selecionar o banco de dados
  // CONFERIR A PORTA ABERTA PARA MYSQL NO MACKENZIE
  $conexao = mysqli_connect("127.0.0.1:3306","root","","mackenzie");
  
  // tratamento de erros
  if (mysqli_connect_errno())
  {
      echo "Não foi possível conectar: " . mysqli_connect_error();
  } 

	if (!mysqli_set_charset($conexao, "utf8")) {
		printf("Erro ao configurar caracter utf8: %s\n", mysqli_error($conexao));
	} else {
		mysqli_character_set_name($conexao);
	}   
?>
