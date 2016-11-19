<html>
 +<head>
 +	<meta charset="utf-8">
 +	<title>Salvando comentário...</title>
 +</head>
 +<body>
 +<?php
 	$conexao = mysql_connect($nome,$sobrenome,$email) or die(mysql_errno());
 	mysql_select_db($banco) or die(mysql_error());
 	
 	$nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome']
 	$email=$_POST['email'];
 	$comentario=$_POST['comentario'];
 
 	$sql = mysql_query("INSERT INTO contato(nome, sobrenome, email, comentario) VALUES('$nome', '$email','$sobrenome', '$comentario')");
 ?>
	
 	<p>Comentário enviado com sucesso.</p>
 </body>
 </html> 