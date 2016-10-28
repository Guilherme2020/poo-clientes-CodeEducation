<?php 
require_once('Cliente.php'); 




class BancoDeClientes{

	private static $clientes = array();


	public function __construct(){

		self::$clientes = array(

			0 => new Cliente('Guilherme Rodrigues Simeao','06007517322','Rua das Palmeiras n°2290 Colorado'),
			1 => new Cliente('Edvaldo  Simeao','44407517322','Rua das Palmeiras n°2290 Colorado'),
			2 => new Cliente('Victoria Simeao','2133131322','Rua das Palmeiras n°2290 Colorado'),
			3 => new Cliente('Dhara Mendes Custodio Simeao','12123117322','Rua das Palmeiras n°2290 Colorado'),
			4 => new Cliente('Breno do Monte Machado ','212121217322','Rua das Palmeiras n°2290 Colorado'),
			5 => new Cliente('Anderson Miranda','1220112','centro'),
			6 => new Cliente('Bartolomeu Cesar ','1122112','DF'),
			7 => new Cliente('Pedro Alex','122121','PARQUE Centro'),
			8 => new Cliente('Victor Hugor','2212121','Morada Nova'),
			9 => new Cliente('Lucas Miranda','21221212112','Morada Nova'),
			10 => new Cliente('Arcenio Pereira José','Lourival Parente')

		);
	}



	public function getClientes($order = "ASC"){
		if($orden == "DESC"){
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





