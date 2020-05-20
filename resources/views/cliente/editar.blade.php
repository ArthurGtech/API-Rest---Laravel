<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->

</head>
<body>
@include('navbar')
<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100mod">
            <div class="table100">
                <div class="quadro">
                    <form action="{{route('client.update'),['client' => name]}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cpf</label>
                            <input type="text" name="cpf" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu cpf">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">ID de cliente</label>
                            <input type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu cpf">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../js/main.js"></script>
</body>
</html>