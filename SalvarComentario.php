 <?php
    include "conecta_mysql.php";
    
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $comentario=$_POST['comentario'];
    
 	$sql = "INSERT INTO contato(nome, sobrenome, email, comentario) VALUES('$nome', '$sobrenome','$email', '$comentario')";

    mysqli_query($conexao, $sql) or die("Não foi possível inserir o usuário".mysqli_error($conexao) );
        
        mysqli_close($conexao);
 ?>
	
 	<p>Comentário enviado com sucesso.</p>