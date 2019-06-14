<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Celke</title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#lista').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "php/listaCliente.php",
					"type": "POST"
				}
			});
		} );
		</script>
	</head>
	<body>
		<h1>Listar de clientes</h1>
		<table id="lista" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Nome</th>
					<th>email</th>
					<th>Telefone</th>
					<th>Sexo</th>
					<th>Nascimento</th>
					<th>CEP</th>
					<th>Logradouro</th>
					<th>Complemento</th>
					<th>Número</th>
					<th>Bairro</th>
					<th>Cidade</th>
					<th>Estado</th>
					<th>País</th>
				</tr>
			</thead>
		</table>		
	</body>
</html>
