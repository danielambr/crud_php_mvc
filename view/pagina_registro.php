<!DOCTYPE html>
<html>
	<head>
        <?php 
            include_once 'dependencias.php'; 
        ?>
	</head>
<body>
    <form method="POST" action="../controller/inserir_cliente.php">

        <div class="container">
        <div style="background:#fff !important" class="jumbotron">
            <h2 class="text-center">
                Registro cliente
                <span class="fa fa-user-plus"></span>
            </h2>
            <br>
            <div class="form-row"> 
                <div class="col-md-6">
                <span class="fa fa-user-circle"></span>&nbsp;<label for="nome">Nome: </label>
                    <input class="form-control" type="text" name="nome" placeholder="Insira o nome do cliente" required autofocus/><br>
                </div>
                <div class="col-md-12">
                    <span class="fa fa-address-card"></span>&nbsp;<label for="endereco1">Endereço origem: </label>
                    <input class="form-control" type="text" name="endereco1" placeholder="Insira o endereço de origem" required/><br>
                </div>
                <div class="col-md-12">
                    <span class="fa fa-address-card"></span>&nbsp;<label for="endereco2">Endereço destino: </label>
                    <input class="form-control" type="text" name="endereco2" placeholder="Insira o endereço de destino" required/><br>
                </div>
                <div class="col-md-4">
                    <span class="fa fa-phone-square"></span>&nbsp;<label for="fone">Telefone: </label>
                    <input class="form-control" type="text" id="fone" name="fone" placeholder="(00) 00000-0000" required /><br>
                </div>
            </div>
            <button class="btn btn-primary">Inserir cliente</button>
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