<?php
/**
 * 
 */ 
class Cadastro
{
	public $con;

	function __construct($db)
	{
		$this->con = $db;


	}

	public function setDadosCliente(string $nome, string $email, string $telefone, int $sexo, string $nasc)
	{
		try
		{
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO clientes (nome, email, telefone, sexo, nascimento) VALUES (:nome, email, :telefone, :sexo, :nasc)";
			$stmt = $this->con->prepare("INSERT INTO clientes (nome, email, telefone, sexo, nascimento) VALUES (:nome, :email, :telefone, :sexo, :nasc)");

			$stmt->bindParam(':nome',$nome);
			$stmt->bindParam(':email',$email);
			$stmt->bindParam(':telefone',$telefone);
			$stmt->bindParam(':sexo',$sexo);
			$stmt->bindParam(':nasc',$nasc);
			$stmt->execute();
		}

		catch(PDOException $exception)
		{
			echo "Erro de conexao" . $exception->getMessage();
		}

	}

	private function getEnderecoCliente(string $nome, string $nascimento)
	{
		try
		{
			$sql = "SELECT id FROM clientes where clientes.nome = '$nome' and clientes.nascimento = '$nascimento'";
			$stmt = $this->con->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$resulta = $result['id'];
			return $resulta;
		}
		catch(PDOException $exception)
		{
			echo "Erro de conexao" . $exception->getMessage();
		}
	}

	public function setEnderecoCliente(string $nome, string $nascimento, string $cep, int $logradouro, int $num, string $complemento, string $bairro, string $cidade, string $estado, string $pais)
	{
		try
		{
			$id = $this->getEnderecoCliente($nome, $nascimento);
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql  = "INSERT INTO clientes (nome, email, telefone, sexo, nascimento) VALUES (:nome, email, :telefone, :sexo, :nasc)";
			$stmt = $this->con->prepare("INSERT INTO endereco (cep, logradouro, numero, complemento, bairro, cidade, estado, pais, clientes_id) VALUES (:cep, :logradouro, :num, :complemento, :bairro, :cidade, :estado, :pais, :id)");

			$stmt->bindParam(':cep', $cep);
			$stmt->bindParam(':logradouro', $logradouro);
			$stmt->bindParam(':num', $num);
			$stmt->bindParam(':complemento', $complemento);
			$stmt->bindParam(':bairro', $bairro);
			$stmt->bindParam(':cidade', $cidade);
			$stmt->bindParam(':estado', $estado);
			$stmt->bindParam(':pais', $pais);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
		}
		catch(PDOException $exception)
		{
			echo "Erro de conexao" . $exception->getMessage();
		}
	}
}



