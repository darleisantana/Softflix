<?php
include('conexao.php');

if(empty($_POST['email'] || empty($_POST['password'])))
{
    header('location: login.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "SELECT * FROM users WHERE email = {$email} AND password = md5({$senha})";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('location: /pagina-inicial.html');
    exit();
} else {
    header('location: /login.php');
    exit();
}
?>