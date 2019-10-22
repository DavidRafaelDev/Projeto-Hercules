<?php
     $conecta = mysqli_connect("localhost","id11261485_db_tcc","db_tcc","id11261485_db_tcc");
    // Local / usuario / senha / banco

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = 1234;
    $biotipo = $_POST['biotipo'];

    $query = "INSERT INTO tb_aluno (nm_aluno,ds_email,ds_senha,ds_biotipo) VALUES ('$nome','$email','$senha','$biotipo')";

    mysqli_query($conecta,$query);

    echo "Aluno cadastrado com sucesso";



?>