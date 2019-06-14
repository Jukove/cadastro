<?php
class Database{

    private $host = "localhost";
    private $db_name = "db_desafio_grts";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConexao(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erro de conexao" . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
