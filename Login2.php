<?php
session_start();
if(isset($_POST['username'])){
	$usuario= $_POST['username'];
	$senha=$_POST['password'];
	$dbhost = "koo2dzw5dy.database.windows.net";
	$db = "SenaQuiz";
	$user = "TSI";
	$password = "SistemasInternet123";
	$dsn = "Driver={SQL Server};Server=$dbhost;Port=1433;Database=$db;";

	$connect = odbc_connect($dsn,
							$user,
							$password);

	$query =("SELECT codProfessor, nome, tipo FROM professor WHERE email='$usuario' AND senha=HASHBYTES('SHA1', '$senha');");
	$consulta = odbc_exec($connect,$query);
	$resultado = odbc_fetch_row($consulta);
	if($resultado > 0){
		echo 'ok';
		$resultado2 = odbc_fetch_array($consulta);
		$_SESSION['codProfessor'] = $resultado2['codProfessor'];
		$_SESSION['tipoProfessor'] = $resultado2['nome'];
		$_SESSION['nomeProfessor'] = $resultado2['tipo'];
		header('Location: http://localhost/test/senac/logado.php');
	}
	else {
		$erroLogin="Login ou senha inválidos!";
	}
}
?>

<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="Login2.php" method="post">
			<h1>Login</h1>
			<div>
				<input type="text" placeholder="Username" required id="username" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required id="password" name="password" />
			</div>
			<div>
				<input type="submit" value="Logar" />
			</div>
            <div>
            	<?php 
				if(isset ($erroLogin)){
				echo $erroLogin;
				}
				?>
            </div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>