<?php 
	namespace School\Cliente;

	abstract class ClienteAbstract implements ClienteInterface{


		protected $id;
		protected $nome;
		protected $cpf;
		protected $endereco;
		protected $enderecoCobranca;
		protected static $contador=1;
		protected $tipo;
		protected $grau;

		public function __construct($nome,$cpf,$endereco,$grau = Null){

			$this->id = self::$contador++;
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->endereco = $endereco;
			$this->grau = $grau;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){ 
			$this->nome = $nome;
			return $this;
		}
		public function getCpf(){

			return $this->cpf;
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

		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($tipo){
			$this->tipo =  $tipo;
			return $this;
		}
	
		public function EPessoaFisica(){
        	if($this->tipo == 1){
            	return true;
        	}
        	return false;
    	}

    	public function EPessoaJuridica(){
        	if($this->tipo == 2){
            	return true;
        	}
        	return false;
    	}

    	public function getGrauImportancia(){
        	return $this->grau;
    	}

    	public function setGrauImportancia($grau){
	        $this->grau = $grau;
	        return $this;
	    }

    	public function setEnderecoCobranca($endereco){
	        $this->enderecoCobranca = $endereco;
	        return $this;
	    }

    	public function getEnderecoCobranca($grau){
       		return $this->enderecoCobranca;
    	}		
	}







 