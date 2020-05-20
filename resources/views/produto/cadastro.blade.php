<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produto</title>

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
                    <form action="{{route('product.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição</label>
                        <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Valor</label>
                            <input type="number" name="valor" min="1" step="any" class="form-control" id="exampleFormControlInput1" placeholder="Digite o valor do produto">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Quantidade</label>
                            <input type="number" name="qtd" min="1" step="any" class="form-control" id="exampleFormControlInput1" placeholder="Digite a quantidade do produto">
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