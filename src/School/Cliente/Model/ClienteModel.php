<?php

	namespace School\Cliente\Model;

	use School\Cliente\ClienteAbstract;
	use School\Cliente\Type\ClientePF;
	use School\Cliente\Type\ClientePJ;

	class ClienteModel{
		private $conn,$pdo;
		
		public function __construct(Array $conn)
		{
			$this->coon = $conn;
			$this->validaConexao();
		}	


		public function conecta(){
			try{
				$this->pdo = new \PDO(
					'mysql:host='. $this->conn['servidor'] . ';dbname=' . $this->conn['banco'],
					$this->conn['usuario'],
					$this->conn['senha']
				);
			}catch(\PDOException $e){
				throw  new \Exception("Erro ao conectar. Código".$e->getCode()."!Mensagem: ".$e->getMessage());
			}
			return  $this->pdo;

		}
		public function validaConexao(){
			if(is_array($this->conn)){
              if(empty($this->conn['servidor']))
                 throw new \Exception('Você não informou o servidor !');

              if(empty($this->conn['banco']))
                 throw new \Exception('Você não informou o banco de dados!');

              if(empty($this->conn['usuario']))
                 throw  new \Exception('Você não informou o usuario!');

              if(!isset($this->conn['senha']))
                 throw new \Exception('Você nao informou a senha!');
            } 
			throw new \Exception("Esta nao e uma configuracao valida");
			
		}

		public function fetchAll($order = "ASC"){
			$array = array();

			$consult = $this->conn->query("SELECT * FROM clientes ORDER BY nome{$order}");

			while($row = $consult->fetch(\PDO::FETCH_ASSOC)){
				if($row['tipo'] == 1){
					$array[$row['id']] = new ClientePF($row['id'],$row['nome'],$row['cpf'],$row['endereco']);
				}else{
					$array[$row['id']] = new ClientePJ($row['id'],$row['nome'],$row['cpf'],$row['endereco']);
				}
			}
			return $array;
		}

		public function insert(ClienteAbstract $cliente){
			$stmt = $this->conn->prepare('INSERT INTO clientes VALUES(:id, :nome, :cpf, :endereco, :enderecoCobranca, :tipo, :grau)');
			$stmt->execute(
					array(
						':id' => null,
						':nome' => $cliente->getNome(),
						':cpf'=> $cliente->getCpf(),
						':endereco' => $cliente->getEndereco(),
						':enderecoCobranca' => $cliente->getEnderecoCobranca(),
						':tipo' => $cliente->getTipo(),
						':grau' => $cliente->getGrauImportancia(),				
			));
		}

		public function find($id){
			$consult = $this->conn->query("SELECT * FROM clientes WHERE id = {$id}");
			$row = $consult->fetch(\PDO::FETCH_ASSOC);
			if($row['tipo'] == 1){
				  return new  ClientePF	($row['id'], $row['nome'], $row['cpf'], $row['endereco']);
			}else{
				  return new ClientePJ ($row['id'], $row['nome'], $row['cpf'], $row['endereco']);
			}
		} 
		public function getConn(){
			return $this->conn;
		}

		public function setConn($conn){
			$this->conn  = $conn;
			return $this;
		}


	}

