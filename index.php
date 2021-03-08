<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página Inicial</h1>
    <a href="login.html">Login</a>

    
    <!--<h2>Produtos Cadastrados:</h2>-->
    <?php 
        /*
        include 'banco.php';
        $conn = conectar();

        $sql = "SELECT * FROM Produtos order by nome";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "Produto: ".$row["nome"]."<br />";

                $sql2 = "SELECT nome FROM Fornecedores where id=".$row["id_fornecedores"];
                $result2 = mysqli_query($conn, $sql2);

                while($row2 = mysqli_fetch_assoc($result2)) {
                    echo "Fornecedor: ".$row2["nome"]."<br />";
                }

                echo "Categorias: ";
                


                
                
                echo "<br />";
            }
            desconectar($conn);

        } else {
            desconectar($conn);
            echo "Nenhum produto cadastrado";
        }*/
    ?>

    <!-- Lista de Produtos -->
</body>
</html>