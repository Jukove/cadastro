<!doctype html>
<html>
<head>
	<style type="text/css"></style>
<meta charset="utf-8">
<title>Listagem de cliente</title>
</head>

<body>
	<!--Importando Script Jquery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

	<h1>Cadastro de clientes</h1>
	<!--Formulário-->
	<form id="form">
		<label for="nome">Nome</label>
		<br>
		<input name="nome" id="nome" type="text" required>
		<br>
		<label for="email">email</label>
		<br>
		<input name="email" id="email" type="text">
		<br>
		<label for="telefone">Telefone</label>
		<br>
		<input name="telefone" id="telefone" type="text">
		<br>
		<label for="sexo">Sexo</label>
		<br>
		<select name="sexo" id="sexo">
			<option value="M">masculino</option>
			<option value="F">feminino</option>
		</select>
		<br>
		<label for="nasc">nascimento</label>
		<br>
		<input name="nasc" id="nasc" type="text">
		<br>
		<label for="cep">CEP</label>
		<br>
		<input name="cep" id="cep" type="text" required/>
		<br>
		<label for="logradouro">Logradouro</label>
		<br>
		<input name="logradouro" id="logradouro" type="text" required/>
		<br>
		<label for="numero">Número</label>
		<br>
		<input name="num" id="numero" type="text" />
		<br>
		<label for="complemento">Complemento</label>
		<br>
		<input name="complem" id="complemento" type="text"/>
		<br>
		<label for="bairro">Bairro</label>
		<br>
		<input name="bairro" id="bairro" type="text" required/>
		<br>
		<label for="cidade">Cidade</label>
		<br>
		<input name="cidade" id="cidade" type="text" required>
		<br>
		<label for="uf">Estado</label>
		<br>
		<select name="estado" id="uf">
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
		</select>
		<br>
		<label for="pais">país</label>
		<br>
		<input name="pais" id="pais" type="text" required>
		<br>
		<input  type="submit">
	</form>	
	<script src="js/CepPreench.js"></script>
	<script src="js/envDados.js"></script>
</body>
</html>
