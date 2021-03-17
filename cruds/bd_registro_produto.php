<?php 
session_start();
if(isset($_SESSION["apelido"])){

        $nome = $_POST["nome"];
        $categorias = $_POST["categorias"];
        $fornecedor = $_POST["fornecedor"];
        $data_fabricacao = $_POST["data_fabricacao"];
        
        $nome_imagem = 'sem_imagem.png';
        // verifica se foi enviado um arquivo
        if (isset($_FILES["imagem_produto"]) && !empty($_FILES["imagem_produto"]["name"]) ) {

            $imagem_temp = $_FILES['imagem_produto']['tmp_name'];
            $destino = '../imagens/' . $_FILES['imagem_produto']['name'];
            move_uploaded_file( $imagem_temp, $destino );
            $nome_imagem = $_FILES['imagem_produto']['name'];

        }else{
            $nome_imagem = 'sem_imagem.png';
        }

        include '../banco.php';
        $conn = conectar();

        $sql = "INSERT INTO Produtos (nome, id_fornecedores, imagem, data_fabricacao, data_registro) VALUES ('$nome', $fornecedor, '$nome_imagem', '$data_fabricacao', NOW())";
        $result = mysqli_query($conn, $sql);
        $id_produto = mysqli_insert_id($conn);

        if ($result) {
            // Recupera o ID do último produto cadastrado
            

            // Recuperar todos as categorias selecionadas
            echo "1";
            foreach ($categorias as $cat){
                echo "2";
                echo $cat;
                $sql = "INSERT INTO Produtos_Categorias (id_produtos, id_categorias) VALUES ($id_produto, $cat)";
                $result2 = mysqli_query($conn, $sql);

                if (!$result2) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    desconectar($conn);
                    echo "Erro1";
                    //header('Location: produto_adicionar.php');
                }
            }
            desconectar($conn);
            header('Location: produtos.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            desconectar($conn);
            echo "Erro2";
            //header('Location: produto_adicionar.php');
        }
}else{
    header('Location: login.html');
}
    ?>