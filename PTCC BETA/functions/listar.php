<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

$conecta = mysqli_connect("localhost","id11261485_db_tcc","db_tcc","id11261485_db_tcc");
                            // Local / usuario / senha / banco
$query = "SELECT * FROM tb_aluno ORDER BY nm_aluno";

$result = mysqli_query($conecta,$query);

$registros = array(
	'pessoas'=>array()
);

$i = 0;

while($linha = mysqli_fetch_assoc($result)){
	$registros['pessoas'][$i] = array(
		'codigo'=>$linha['cd_aluno'],
		'nome'=>$linha['nm_aluno'],
	);
	$i++;
}
echo json_encode($registros);