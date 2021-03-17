<?php 
session_start();
if(isset($_SESSION["apelido"])){

        $id = $_GET["id"];
        
        include '../banco.php';
        $conn = conectar();

        // remover primeiro as dependências dele (produtos_categorias)
        $sql = "DELETE FROM Produtos_Categorias WHERE id_produtos=$id";
        $result = mysqli_query($conn, $sql);

        $sql2 = "DELETE FROM Produtos WHERE id=$id";
        $result2 = mysqli_query($conn, $sql2);

        desconectar($conn);
        header('Location: produtos.php');
       
}else{
    header('Location: login.html');
}
    ?>