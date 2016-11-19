<!DOCTYPE html>
<html>
	<head>
		<?php
			session_start();
            if (isset($_SESSION['usuario']) and isset($_SESSION['senha'])){
                $logado = $_SESSION['usuario'];
            }
                else{ 
                    $logado = "";
                }
                if (isset($_SESSION['permissao'])){ 
                    $permissao = $_SESSION['permissao'];
                }
                else { 
                $permissao = "";
                 }
                
		?>


		
		 <title>Titulo</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="cssteste.css">
        <script type="text/javascript" src="login.js"></script>
	</head>
	<body>
        <header>
            <a href="index.html"><img src="skyrim_logo.png" alt="Main Logo"></a>
        </header>
         <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="page2.html">Sets</a></li>
                <li><a href="classes.html">Classes</a></li>
                <li><a href="quests.html">Quests</a></li>
                <li><a href="dlc.html">DLC's</a></li>
                <li><a href="cidades.html">Cidades</a></li>
                <li><a href="magias.html">Magias</a></li>
                <li><a href="contato.html">Contato</a></li>    
                <li><a id="active" href="login.html">Login</a>    
            </ul>
        </nav>
        <div id="divprincipal">
		<?php
            
		if ($permissao == 1) {
			echo "<h1>Bem vindo, Administrador ".$logado."!</h1>";
		}
            else  if ($permissao == 0 ){
			echo "<h1>Bem vindo ".$logado."!</h1>";
            }
        else if($permissao == "") {
                echo "<h1> Você precisa logar para acessar essa página.</h1>";
            }
		?>
        </div>
	</body>
</html>
			