<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_desafio_grts";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array( 
	0 =>'nome', 
	1 => 'email',
	2 => 'telefone',
	3 => 'sexo',
	4 => 'nascimento'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT c.nome, c.email, c.telefone, c.sexo, (CASE when sexo= 0 THEN 'M' WHEN sexo = 1 THEN 'F'end) as sexo, c.nascimento, en.cep, en.logradouro, en.numero, en.complemento, en.bairro, en.cidade, en.estado, en.pais FROM clientes as c INNER JOIN endereco as en on c.id = en.clientes_id";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

$result_usuarios = "SELECT c.nome, c.email, c.telefone, c.sexo, (CASE when sexo= 0 THEN 'M' WHEN sexo = 1 THEN 'F'end) as sexo, c.nascimento, en.cep, en.logradouro, en.numero, en.complemento, en.bairro, en.cidade, en.estado, en.pais FROM clientes as c  INNER JOIN endereco as en on c.id = en.clientes_id where 1=1";

if( !empty($requestData['search']['value']) ) {   
	$result_usuarios.=" AND ( nome LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR sexo LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR nascimento LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);

$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_usuarios["nome"];
	$dado[] = $row_usuarios["email"];
	$dado[] = $row_usuarios["telefone"];
	$dado[] = $row_usuarios["sexo"];
	$dado[] = $row_usuarios["nascimento"];
	$dado[] = $row_usuarios["cep"];
	$dado[] = $row_usuarios["logradouro"];
	$dado[] = $row_usuarios["complemento"];
	$dado[] = $row_usuarios["numero"];
	$dado[] = $row_usuarios["bairro"];
	$dado[] = $row_usuarios["cidade"];	
	$dado[] = $row_usuarios["estado"];	
	$dado[] = $row_usuarios["pais"];	

	$dados[] = $dado;
}


$json_data = array(
	"draw" => intval( $requestData['draw'] ),
	"recordsTotal" => intval( $qnt_linhas ),  
	"recordsFiltered" => intval( $totalFiltered ), 
	"data" => $dados   
);

echo json_encode($json_data); 
