<?php 

    include_once '../model/Conexao.class.php';
    include_once '../model/Gerenciador.class.php';

    $gerenciador = new Gerenciador();

    $update_client = $_POST;
    $id = $_POST['id'];

    if(isset($id) && !empty($id)){
        $gerenciador->updateClient("clientes", $update_client, $id);
    }

    header("Location: ../index.php?cliente_atualizado");
?>