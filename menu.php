<?php require_once('verificarAcesso.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="css/estiloMenu.css">
	<title>Menu</title>
</head>
<body>


<header>
	<img class="logoTipo" src="css/logo.png" alt="logo">
		<nav>
		<ul class="nav_items">			
			<li>
				<a class="exc" class="logout" href="paginaInicial.php"><i class="fa-solid fa-house-chimney"></i><span>Início</span></a>
				<ul>
					<li><a href="emprestimo.php"><span>Empréstimo</span></a></li>
					<li><a href="devolucao.php"><span>Devolução</span></a></li>
				</ul>		
			</li>
			<li>
				<a class="exc"><i class="fa-solid fa-book"></i><span>Livros</span></a>
				<ul>
					<li><a href="cadLivro.php"><span>Cadastrar</span></a></li>
					<li><a href="consultaLivro.php"><span>Consultar</span></a></li>
				</ul>			
			</li>
			<li>
				<a class="exc"><i class="fa-solid fa-users"></i><span>Clientes</span></a>			
				<ul>
					<li><a href="cadCliente.php"><span>Cadastrar</span></a></li>
					<li><a href="consultaCliente.php"><span>Consultar</span></a></li>
				</ul>
			</li>
			<li>
				<a class="exc"><i class="fa-solid fa-magnifying-glass"></i><span>Consultas</span></a>
				<ul>
					<li><a href="consultaEmpDev.php"><span>Empréstimos e Devoluções</span></a></li>
					<li><a href="consultaMultasAtrasos.php"><span>Multas e Atrasos</span></a></li>
				</ul>
			</li>
			<li><a class="exc" class="logout" href="logoutAction.php"><i class="fa-solid fa-right-from-bracket"></i><span>Sair</span></a></li>	
		</ul>
	</nav>	
	<div class="user">
		<div class="usu"><i class="fa-solid fa-user fa-xl"></i>Seja Bem Vindo(a), <?php echo $_SESSION['nome']?>!</div>
	</div>
</header>
</body>
</html>









				
