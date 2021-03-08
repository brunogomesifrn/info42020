<?php
session_start();
if(isset($_SESSION["apelido"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de Perfil</h1>
    <p>Bem-vindo <?php echo $_SESSION['apelido']; ?></p>
    <a href="logout.php">Logout</a>
    <a href="cruds/categorias.php">Categorias</a>
    <a href="cruds/fornecedores.php">Fornecedores</a>
    <a href="cruds/produtos.php">Produtos</a>
</body>
</html>

<?php
}else{
    header('Location: login.html');
}
?>