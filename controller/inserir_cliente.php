<?php

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$data = $_POST;

if(isset($data) && !empty($data)){
    $gerenciador->inserircliente("clientes", $data);
    header("Location: ../index.php?cliente_adicionado_com_successo");

}

?>