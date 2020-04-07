<!DOCTYPE html>
<html>
	<head>
        <?php 
            include_once '../model/Conexao.class.php';
            include_once '../model/Gerenciador.class.php';
            include_once 'dependencias.php'; 

            $gerenciador = new Gerenciador();

            $id = $_POST['id'];
        ?>
	</head>
<body>
    <form method="POST" action="../controller/atualiza_cliente.php">

        <div class="container">
        <div style="background:#fff !important" class="jumbotron">
            <h2 class="text-center">
                Atualiza cliente
                <span class="fa fa-user-edit"></span>
            </h2>
            <br>
            <div class="form-row"> 

                <?php foreach($gerenciador->getInfo("clientes", $id) as $client_info): ?>

                <div class="col-md-6">
                <span class="fa fa-user-circle"></span>&nbsp;<label for="nome">Nome: </label>
                    <input class="form-control" type="text" name="nome" value="<?=$client_info['nome']?>" placeholder="Insira o nome do cliente" required autofocus/><br>
                </div>
                <div class="col-md-12">
                    <span class="fa fa-address-card"></span>&nbsp;<label for="endereco1">Endereço origem: </label>
                    <input class="form-control" type="text" name="endereco1" value="<?=$client_info['endereco1']?>" placeholder="Insira o endereço de origem" required/><br>
                </div>
                <div class="col-md-12">
                    <span class="fa fa-address-card"></span>&nbsp;<label for="endereco2">Endereço destino: </label>
                    <input class="form-control" type="text" name="endereco2" value="<?=$client_info['endereco2']?>" placeholder="Insira o endereço de destino" required/><br>
                </div>
                <div class="col-md-4">
                    <span class="fa fa-phone-square"></span>&nbsp;<label for="fone">Telefone: </label>
                    <input class="form-control" type="text" id="fone" name="fone" value="<?=$client_info['fone']?>" placeholder="(00) 00000-0000" required /><br>
                </div>
            </div>

            <input type="hidden" name="id" value="<?=$client_info['id']?>"/>

            <?php endforeach; ?>

            <button class="btn btn-warning">Atualiza cliente</button>
            <br>
            <br>
            <a href="../index.php">voltar</a>
        </div>
        </div>   
    </form>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

    <script type="text/javascript">
        $(document).ready(function(){
            $("#fone").mask("(00) 00000-0000")
        });
    </script>

</body>
</html>