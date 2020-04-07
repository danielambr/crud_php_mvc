<?php

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$id = $_POST['id'];

if(isset($id) && !empty($id)){
    $gerenciador->deleteClient("clientes", $id);

    header("Location: ../index.php?cliente_deletado");
}

?>