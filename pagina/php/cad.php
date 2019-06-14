<?php 
//header('Content-type: text/html; charset=utf-8');
///**
include __DIR__.'/Dados.php';
include __DIR__.'/database.php';

$db = new Database();
$con = $db->getConexao();
$cad = new Cadastro($con);
//var_dump($_POST);

if(isset($_POST))
{
	$sexo = intval($_POST['sexo']);
	$logradouro = intval($_POST['logradouro']);
	$num = intval($_POST['num']);

	$data = DateTime::createFromFormat('d/m/Y', $_POST['nasc']);
	if($data && $data->format('d/m/Y') === $_POST['nasc']){
   	
	$cad->setDadosCliente($_POST['nome'], $_POST['email'], $_POST['telefone'], $sexo, $_POST['nasc']);
	$cad->setEnderecoCliente($_POST['nome'], $_POST['nasc'], $_POST['cep'], $logradouro, $num, $_POST['complem'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['pais']);
	}	
else{
echo "formato de dada errado <br>";}
}
//var_dump($teste)
?>