<?php 
session_start();
if(isset($_SESSION["apelido"])){

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $categorias = $_POST["categorias"];
        $fornecedor = $_POST["fornecedor"];
        $data_fabricacao = $_POST["data_fabricacao"];
        
        include '../banco.php';
        $conn = conectar();

        

        $nome_imagem = 'sem_imagem.png';
        // verifica se foi enviado um arquivo
        if (isset($_FILES["imagem_produto"]) && !empty($_FILES["imagem_produto"]["name"]) ) {
            $imagem_temp = $_FILES['imagem_produto']['tmp_name'];
            $destino = '../imagens/' . $_FILES['imagem_produto']['name'];
            move_uploaded_file( $imagem_temp, $destino );
            $nome_imagem = $_FILES['imagem_produto']['name'];

            $sql = "UPDATE Produtos SET nome='$nome', id_fornecedores=$fornecedor, data_fabricacao='$data_fabricacao', imagem='$nome_imagem' WHERE id=$id";
            
        }else{
            $sql = "UPDATE Produtos SET nome='$nome', id_fornecedores=$fornecedor, data_fabricacao='$data_fabricacao' WHERE id=$id";
            
        }

        echo $sql;

        //Atualizar Produto
        //$sql = "UPDATE Produtos SET nome='$nome', id_fornecedores=$fornecedor, data_fabricacao='$data_fabricacao' WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        // Remover categorias do produto em questão
        $sql = "DELETE FROM Produtos_Categorias WHERE id_produtos=$id";
        $result = mysqli_query($conn, $sql);

        // Recuperar todos as categorias selecionadas e adicionar
        foreach ($categorias as $cat){
            $sql = "INSERT INTO Produtos_Categorias (id_produtos, id_categorias) VALUES ($id, $cat)";
            $result = mysqli_query($conn, $sql);
        }
        desconectar($conn);
        header('Location: produtos.php');
}else{
    header('Location: login.html');
}
    ?>