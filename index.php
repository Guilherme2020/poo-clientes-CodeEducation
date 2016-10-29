<?php 
	require_once('BancoClientes.php');
    $banco = new BancoDeClientes();
    if(isset($_GET['order'])){
        $clientes = $banco->getClientes($_GET['order']);
    }else{
        $clientes = $banco->getClientes();
    }
 ?>	



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clientess</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="app.css">

</head>
<body>	

	<div class="container">
		<div class="jumbotron">
			<h1 class="text-info">Gestão de Pessoas Clientes</h1>
			
			<p class="text-info">Exercicio da code.education</p>
			
		</div>


		<div class="btn-group" role="group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="	 dropdown" aria-haspopup="true" aria-expanded="false">
				Ordenar 
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
                <li><a href="?order=ASC">Maior</a></li>
                <li><a href="?order=DESC">Menor</a></li>
        	</ul>
        

			

		</div>


		<table class="table table-striped table-hover">
			<thead>
				<td class="danger">ID</td>

				<td class="default">Nome</td>

				<td class="danger">CPF</td>

				<td>ENDEREÇO</td>
				<td class="danger">Ações</td>
			</thead>
			
			<?php foreach($clientes as $cliente): ?>
	            <tr>
	                <td><?php echo $cliente->getId(); ?></td>
	                <td><?php echo $cliente->getNome(); ?></td>
	                <td><?php echo $cliente->getCPF(); ?></td>
	                <td><?php echo $cliente->getEndereco(); ?></td>
	                <td><a href="cliente.php?id=<?php echo $cliente->getId(); ?>" class="btn btn-primary" title="Visualizar"><span class="glyphicon glyphicon-new-window"></span></a></td>
	            </tr>

       		 <?php endforeach; ?>

		</table>

	</div>
	

</body>
</html>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>