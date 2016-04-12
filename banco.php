<?php
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

if ($connect) {
    echo "Connection established.";
} else{
    die("Connection could not be established.");
}


$query =("SELECT codProfessor, nome, tipo FROM professor WHERE email='$usuario' AND senha=HASHBYTES('SHA1', '$senha');");
$consulta = odbc_exec($connect,$query);
$resultado = odbc_fetch_row($consulta);
if($resultado > 0){
	echo 'ok';
	$resultado2 = odbc_fetch_array($consulta);
}
else {
	echo 'não logou';
}


?>