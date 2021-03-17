<?php

function conectar(){
            //https://www.hostinger.com.br/tutoriais/como-inserir-dados-no-mysql-com-php

      $servername = "localhost";
      $database = "teste";
      $username = "teste";
      $password = "teste";

      $servername2 = "localhost";
      $database2 = "teste2";
      $username2 = "teste2";
      $password2 = "teste2";

      $conn = mysqli_connect($servername, $username, $password, $database);
      //$conn = mysqli_connect($servername2, $username2, $password2, $database2);




      
      // Check connection
      if (!$conn) {
            die("Erro de Conexão: " . mysqli_connect_error());
      }

      //echo "Sucesso na Conexão";
      return $conn;

}

function desconectar($conn){
      mysqli_close($conn);
}
      

 /*
      $sql = "INSERT INTO Students (name, lastname, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      */

?>