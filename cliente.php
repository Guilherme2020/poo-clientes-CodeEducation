<?php 

	require_once('autoload.php');
	$banco = new \School\Cliente\Model\BancoDeClientes();
	$cliente = $banco->getCliente($_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clientee</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/app.css">

</head>
<body>
	<div class="container">
		<img src="img/cliente.jpg" alt="">

		<div class="jumb">
			<h1>Gestão de Clientess</h1>
			<p>Exercicio da Code.Education</p>
		</div>
	
		<div class="panel panel-primary">
			<div class="panel-heading"> <span class="glyphicon glyphicon-user"></span> 		<?php echo $cliente->getNome()?> </div>

			
			<div class="panel-body">
				<?php 
				  echo "<b>Nome: </b>".$cliente->getNome()."<br>";
              	  echo "<b>Endereço: </b>".$cliente->getEndereco()."<br>";
                  echo "<b>CPF: </b>".$cliente->getCPF()."<br>";
				?>
			</div>

			<div class="panel-footer">
				<a href="index.php" class="btn btn-default">Voltar</a>	
			</div>

		</div>


	</div>



</body>
</html>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script  src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
