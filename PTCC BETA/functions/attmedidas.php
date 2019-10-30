<?php
$conecta = mysqli_connect("localhost","id11261485_db_tcc","db_tcc","id11261485_db_tcc");
                        // Local        / usuario           / senha     / banco
    
    $aluno = $_POST['codigo'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $bracoesq = $_POST['bracoesq'];
    $bracodir = $_POST['bracodir'];
    $antebracoesq = $_POST['antebracoesq'];
    $antebracodir = $_POST['antebracodir'];
    $qt_ombro = $_POST['ombro'];
    $qt_torax = $_POST['torax'];
    $qt_abdomen = $_POST['abdomen'];
    $qt_cintura = $_POST['cintura'];
    $qt_quadril = $_POST['quadril'];
    $coxaesq = $_POST['coxaesq'];
    $coxadir = $_POST['coxadir'];
    $panturrilhaesq = $_POST['panturrilhaesq'];
    $panturrilhadir = $_POST['panturrilhadir'];
    $quadril = $_POST['quadril'];

    $query = "INSERT INTO `tb_medidas`(`id_aluno`, `qt_peso`, `qt_altura`, `qt_braco_direito`, `qt_braco_esquerdo`, `qt_antebraco_direito`, `qt_antebraco_esquerdo`, `qt_ombro`, `qt_torax`, 
    `qt_abdomen`, `qt_cintura`, `qt_quadril`, `qt_coxa_direita`, `qt_coxa_esquerda`, `qt_panturrilha_direita`, `qt_panturrilha_esquerda`) VALUES ('$aluno','$peso','$altura','$bracodir',
    '$bracoesq','$antebracodir','$antebracoesq','$qt_ombro','$qt_torax','$qt_abdomen','$qt_cintura','$qt_quadril','$coxadir','$coxaesq','$panturrilhadir','$panturrilhaesq')";

    
    mysqli_query($conecta,$query);
    
    echo "Cadastrado";
