<?php 
session_start();
if(isset($_SESSION["apelido"])){

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        
        include '../banco.php';
        $conn = conectar();

        $sql = "UPDATE Categorias SET nome='$nome' WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            desconectar($conn);
            header('Location: categorias.php');

        } else {
            //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            desconectar($conn);
            header('Location: categorias.php');
        }
}else{
    header('Location: login.html');
}
    ?>