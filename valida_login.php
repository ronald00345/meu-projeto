<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios where email = :email";
$stmt = $pdo->prepare ($sql);
$stmt-> binvalue(':email', $email);
$stmt-> execute();
$usuario = $stmt-> fetch(PDO::FETCH_ASSOC);   



}
?>