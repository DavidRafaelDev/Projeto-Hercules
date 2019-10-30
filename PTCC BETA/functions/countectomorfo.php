<?php

$conecta = mysqli_connect("localhost","id11261485_db_tcc","db_tcc","id11261485_db_tcc");
                        // Local /  usuario              / senha     /    banco
$query = "SELECT COUNT(ds_biotipo) as total FROM tb_aluno WHERE ds_biotipo = 'ectomorfo'";

$result = mysqli_query($conecta,$query);

$data = mysqli_fetch_assoc($result);

echo $data['total'];

?>