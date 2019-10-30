<?php
    $conecta = mysqli_connect("localhost","id11261485_db_tcc","db_tcc","id11261485_db_tcc");
    // Local / usuario / senha / banco

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM tb_adm WHERE ds_email = '$email' AND ds_senha = '$senha'";

    $result = mysqli_query($conecta,$query);
    
    if($result->num_rows > 0 ){
        
        $user = $result->fetch_array();
        
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        echo '{"id":'.$user['cd_adm'].',"nome":"'.$user['nm_adm'].'","email":"'.$user['ds_email'].'","senha":"'.$user['ds_senha'].'"}';
    }else{
        echo "0";
    }
    

?>