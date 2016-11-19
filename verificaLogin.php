<?php
    
    session_start();
	$usuario = strip_tags($_POST['nome']);
	$senha = strip_tags($_POST['senha']);
	echo $senha."<br>";
    $senha = sha1(strip_tags($_POST['senha']));
	echo $senha."<br>";
    // conctando ao BD
    include "conecta_mysql.php";

	$query="SELECT * from usuarios WHERE  nome=? AND senha=?";

	if($stmt = mysqli_prepare($conexao, $query)) {
		mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);	
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $id, $nome, $email, $senha, $foto, $permissao);
		mysqli_stmt_fetch($stmt);
	  
		if ($usuario == $nome && $senha == $senha) {
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
            $_SESSION['permissao'] = $permissao;
			header('location:home.php');
		}	  
		else {
			echo "Usuario ou senha incorretos";
		}
		mysqli_stmt_close($stmt);
	} else {
		echo "Falha no statment";
	}
    if ($permissao == 1) {
            $_SESSION['permissao'] = $permissao;
			header('location:home.php');
    }
	mysqli_close($conexao);
?>
