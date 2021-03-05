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
    <h1>Categorias</h1>
    
    <a href="categoria_adicionar.php">Cadastrar</a><br />

    <?php 
        include '../banco.php';
        $conn = conectar();

        $sql = "SELECT * FROM Categorias";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["nome"];
            echo "<br />";
        }
        desconectar($conn);

        } else {
            desconectar($conn);
            echo "Nenhuma categoria cadastrada";
        }
    ?>


</body>
</html>


<?php
}else{
    header('Location: login.html');
}
?>