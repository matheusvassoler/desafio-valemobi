<?php require_once 'ger/Controllers/MerchandiseController.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Gerpro</title>
		<link rel="stylesheet" type="text/css" href="public/assets/css/default.css">
		<link rel="stylesheet" type="text/css" href="public/assets/css/table.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="page">
			<div class="header">
				<div class="logo">
					<a href="index" title="Gerpro">
						<img src="public/assets/images/logo.png" alt="Gerpro" />
					</a>
				</div>
				<div class="header_menu">
					<ul>
						<li><a href="add-merchandise" title="Adicionar">Adicionar mercadorias</a></li>
						<li><a href="merchandise-table" title="Ver">Ver mercadorias</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="container">
			  	<h2>Mercadorias cadastradas</h2>
			 	<p>Veja abaixo todas as mercadorias já inseridas na plataforma.</p>            
			  	<table class="table table-hover">
			    	<thead>
				      	<tr>
				        	<th>Código da mercadoria</th>
				        	<th>Tipo da mercadoria</th>
				        	<th>Nome da mercadoria</th>
				        	<th>Quantidade</th>
				        	<th>Preço</th>
				        	<th>Tipo do negócio</th>
				      	</tr>
			    	</thead>
			    	<tbody>
			    		<?php foreach($allMerchandise as $allMerchandiseList) { ?>
				    	<tr>
				        	<td><?php echo $allMerchandiseList['id']; ?></td>
				    		<td><?php echo $allMerchandiseList['merchandise_type']; ?></td>
				        	<td><?php echo $allMerchandiseList['name']; ?></td>
				        	<td><?php echo $allMerchandiseList['quantity']; ?></td>
				        	<td><?php echo 'R$ '. $allMerchandiseList['price']; ?></td>
				        	<td><?php echo $allMerchandiseList['business_type']; ?></td>
				      	</tr>
				      	<?php } ?>
			    	</tbody>
			  </table>
			</div>
		</div>
	</body>
</html>