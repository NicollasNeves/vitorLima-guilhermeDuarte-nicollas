<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Cadastrado</title>
	</head>
	<body>
	
		<?php
            
            $nome = strip_tags($_POST['nome']); 
            $senha = sha1(strip_tags($_POST['senha'])); 
            $senha2 = sha1(strip_tags($_POST['senha2'])); 
            $email = strip_tags($_POST['email']); 
            $tamanho_maximo = $_POST['MAX_SIZE_FILE'];
            $arquivo = $_FILES['arquivo'];
     
            if( $senha==$senha2 )
            {
                include "salvaImagem.php";
                $salvo = salva($tamanho_maximo, $nome, $arquivo);
                if($salvo) 
                {
                    echo "<h3><b>Imagem salva.</b></h3>";
                    include "create.php";
                    insereUsuario($nome, $senha, $email, $arquivo['name']);
                } else {
                    echo "Tente novamente.";  
                }
                
            } else {
                echo "Senhas não conferem! Tente novamente!";   
            }

		?>
        <p><a href="login.html"><input id ="enter" type="submit" value="RETORNAR"/></a></p>
	</body>
</html>