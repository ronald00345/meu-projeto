<?php 
$host = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projeto";

try {$pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
catch(PDOException $e) {echo "Erro na conexao:" . $e->getMessage();

exit();
}




?>