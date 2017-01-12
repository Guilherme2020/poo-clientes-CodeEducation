<?php 

	require_once("Cliente.php");

	class ClientePF extends Cliente{

		public function __construct($nome,$cpf,$endereco){
			parent::__construct($nome,$cpf,$endereco);

			$this->tipo = 1;
		}

	}