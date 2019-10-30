<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
        
$conecta = mysqli_connect("localhost","id11261485_db_tcc","db_tcc","id11261485_db_tcc");

                            // Local / usuario / senha / banco

$id_aluno= $_POST['id_aluno'];

$query = "SELECT * FROM tb_medidas WHERE id_aluno = '$id_aluno'";

$result = mysqli_query($conecta,$query);

while($linha = mysqli_fetch_assoc($result)){

		'peso'=>$linha['qt_peso'],

		'altura'=>$linha['qt_altura'],

        'braco_direito'=>$linha['qt_braco_direito'],

        'braco_esquerdo'=>$linha['qt_braco_esquerdo'],
        
        'antebraco_direito'=>$linha['qt_antebraco_direito'],

        'antebraco_esquerdo'=>$linha['qt_antebraco_esquerdo'],

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
}

echo json_encode($registros);

?>