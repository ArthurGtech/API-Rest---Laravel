<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Bem vindo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
@include('navbar')    
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Data</th>
								<th class="column2">Order ID</th>
								<th class="column3">Descrição</th>
								<th class="column4">Valor</th>
								<th class="column5">Quantidade</th>
								<th class="column6"></th>
							</tr>
						</thead>
						<tbody class="linha">
																					
						</tbody>
					</table>
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
    <script src="js/main.js"></script>
    
<script>

var linha = document.querySelector('.linha');

async function fetchAPI(){

    let response =  await  fetch("{{route('product.index')}}");
    let json = await response.json();
	var counter = json.length;
	counter--;
    for (var i = 0; i<=counter; i++){
        console.log(json[i]);
        linha.innerHTML += `
        <tr>
			<td class="column1">${json[i].created_at}</td>
			<td class="column2">${json[i].id}</td>
			<td class="column3">${json[i].desc}</td>
			<td class="column4">R$ ${json[i].valor}0</td>
			<td class="column5">${json[i].qtd}</td>
			<td class="column6">
			<form action="localhost:8000/api/product/${json[i].id}" method="post">
				@csrf
				@method('delete')
				<button type="submit" class="btn btn-outline-danger">Deletar</button>
			</form>			
			</td>
        </tr>	
        `;      
    }
}
fetchAPI()
</script>
</body>
</html>