

<?php 

	date_default_timezone_set('America/Sao_Paulo');


	class Cliente{


		private $id;
		private $nome;
		private $cpf;
		private $endereco;
		private static $contador=1;



		public function __construct($nome,$cpf,$endereco){

			$this->id = self::$contador++;
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->endereco =$endereco;

		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
			return $this;
		}
		public function getCpf(){

			return $this->cpf
		}
		public function setCpf(){
			$this->cpf = $cpf;
			return $this;
		}	
		public function getEndereco(){
			return $this->endereco;
		}
		public function setEndereco(){
			$this->endereco = $endereco;
			return $this;
		}
		public function getId(){
			return $this->id;
		}


	}







 