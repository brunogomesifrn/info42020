<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// Conectar ao banco e verificar
if ($usuario = "bruno" && $senha == "123"){
    
    // Salvar dados na sessão (perfil, nome....)
    $_SESSION["usuario"] = $usuario;
    
    
    // Redirecionar o usuário para a página de perfil

}


?>