<?php
$conecta = mysqli_connect("localhost","id11261485_db_tcc","db_tcc","id11261485_db_tcc");

                            // Local / usuario / senha / banco

$id_aluno= $_POST['id_aluno'];

$query - "SELECT * FROM tb_medidas WHERE id_aluno = '$id_aluno'";

$registros = array(

	'medidas'=>array()

);

$i = 0;



while($linha = mysqli_fetch_assoc($result)){

	$registros['medidas'][$i] = array(

		'peso'=>$linha['qt_peso'],

		'altura'=>$linha['qt_altura'],

        'braco_direito'=>$linha['qt_braco_direito'],

        'braco_esquerdo'=>$linha['qt_braco_esquerdo'],
        
        'antebraco_direito'=>$linha['qt_antebraco_direito'],

        'antebraco_esquerdo'=>$linha['qt_antebraco_esquerdo']

        'ombro'=>$linha['qt_ombro'],

        'torax'=>$linha['qt_torax'],

        'abdomen'=>$linha['qt_abdomen'],

        'cintura'=>$linha['qt_cintura'],

        'quadril'=>$linha['qt_quadril'],

        'coxa_esquerda'=>$linha['qt_coxa_esquerda'],

        'coxa_direita'=>$linha['qt_coxa_direita'],

        'panturrilha_esquerda'=>$linha['qt_panturrilha_esquerda'],

        'panturrilha_direita'=>$linha['qt_panturrilha_direita'],
        

	);

	$i++;

}

echo json_encode($registros);

?>