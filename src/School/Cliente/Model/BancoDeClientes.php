<?php 

namespace School\Cliente\Model;

use School\Cliente\Type\ClientePF,
	School\Cliente\Type\ClientePJ;

class BancoDeClientes extends Cliente{

    private static $clientes = array();


	public function __construct(){

		self::$clientes = array(

			0 => new ClientePF('Guilherme Rodrigues Simeao','06007517322','Rua das Palmeiras n°2290 Colorado'),
			1=> new ClientePF('Dhara mendes Custodio','2121212121','Rua das palmeiras n°2131 Colorado'),
			2=> new ClientePF('Edvaldo Cardoso Simeão','223313131','Rua dos Alfaces n°13113 Dirceu'),
			3=> new ClientePF('Eliane Rodrigues Simeão','11122','Rua do Dirceu n°1231'),		
			4=> new ClientePF('Eduardo Soares da Costa','202001221','Conjunto São PAulo 
				n°22212'),
			5=> new ClientePJ("Victor Hugo Vieira",'221212121','Conjunto Morada nova quadra 10 n°111123'),
			6=> new ClientePJ("Anderson Miranda","000012212-021012021",'Centro de Teresina n°2133131'),
			7=> new ClientePJ("Breno Machado do Monte","12122121",'Bairro Ilhotas'),
			8=> new ClientePJ("Lucas Blante","22222222221","Jundiai  Bairro das oliveiras"),
			9=> new ClientePJ("Arcenio Pereira","2210002121","Lourival Parente"),
		);
	}



	public function getClientes($order = "ASC"){
		if($order == "DESC"){
			rsort(self::$clientes);
			return self::$clientes;
		}
		
		return self::$clientes;
	}

	public function getCliente($id){
		foreach(self::$clientes as $cliente):
			if($cliente->getId()==$id){
				return $cliente;
			}
		endforeach;
		
		return $id;
	}
}





