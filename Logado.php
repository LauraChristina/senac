<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="login.css" />
<title>Bem vindo</title>
</head>
<body>
<div id="logado">
<?php
echo "Bem vindo ".$_SESSION['nomeProfessor'].'<br/>';
?>
</div>
</body>
</html>