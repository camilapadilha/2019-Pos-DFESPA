<?php
    $nome = $_GET['nome'];
    if($nome == "Camz"){ 
        echo '
        {
            "nome": "Camilaaaaaaaaaaaaa",
            "email": "camila@gmail",
            "telefone": "(99) 9999 - 8888"
        }
        ';
    } else { 
        echo ' { "erro": "Nenhum registro encontrado"}
        ';
    }
?>