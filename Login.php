<?php
session_start();
?>

<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="banco.php" method="post">
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
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>