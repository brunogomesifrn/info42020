<?php
include 'banco.php';
session_start();

$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

// Conectar ao banco e verificar
$conn = conectar();

$sql = "SELECT * FROM Usuario WHERE usuario='$usuario' AND senha='$senha'";

$result = mysqli_query($conn, $sql);

// Se retornar um resultado, o usuário será autenticado (ele existe no banco de dados)
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION["usuario"] = $usuario;
    $_SESSION["apelido"] = $row["apelido"];
    $_SESSION["nome"] = $row["nome"];
  }
  desconectar($conn);
  header('Location: perfil.php');

} else {
    desconectar($conn);
    header('Location: login.html');
}

/*
if ($usuario = "bruno" && $senha == "123"){
    $_SESSION["usuario"] = $usuario;
    $_SESSION["apelido"] = $apelido;
    header('Location: perfil.php');
}else{
    header('Location: login.html');
}*/

?>