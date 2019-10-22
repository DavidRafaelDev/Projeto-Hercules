<?php
    $conecta = mysqli_connect("localhost","id11261485_db_tcc","db_tcc","id11261485_db_tcc");
    // Local / usuario / senha / banco

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM tb_aluno WHERE ds_email = '$email' AND ds_senha = '$senha'";

    $result = mysqli_query($conecta,$query);
    
    if($result->num_rows > 0 ){
        
        $user = $result->fetch_array();
        
        echo '{"id":'.$user['cd_aluno'].',"nome":"'.$user['nm_aluno'].'","email":"'.$user['ds_email'].'","senha":"'.$user['ds_senha'].'","biotipo":"'.$user['ds_biotipo'].'"}';
    }else{
        echo "0";
    }
    

?>