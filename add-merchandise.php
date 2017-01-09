<?php require_once 'ger/Controllers/MerchandiseController.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Gerpro</title>
		<link rel="stylesheet" type="text/css" href="public/assets/css/default.css">
		<link rel="stylesheet" type="text/css" href="public/assets/css/register.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src='https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
		<script language="JavaScript" src="public/assets/js/jquery.validate.js" type="text/javascript"></script>
		<script language="JavaScript" src="public/assets/js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="https://raw.githubusercontent.com/danpalmer/jquery.complexify.js/master/jquery.complexify.js"></script>
		<script src="public/assets/js/jquery-rules.js"></script>
	</head>
	<body>
		<div class="page">
			<div class="logo">
				<img src="public/assets/images/grey-logo.png" width="150px" alt="Gerpro" />
			</div>
			<div class="top_texts">
				<h1>Cadastrar mercadoria</h1>
				<p>Cadastrar uma mercadoria no Gerpro é totalmente rápido, basta preencher os campos abaixo e você já poderá ver o produto adicionado.</p>
			</div>
			<div class="register_form">
				<form action="verifications.php" method="post" id="form">
					<div class="control-group rf_input">
						<label class="string" for="code">Código da mercadoria</label>
						<input class="string" type="text" name="code" id="code" />
					</div>
					<div class="control-group rf_input">
						<label class="string" for="merchandiseType">Tipo da mercadoria</label>
						<input class="string" type="text" name="merchandiseType" id="merchandiseType" />
					</div>
					<div class="control-group rf_input">
						<label class="string" for="name">Nome da mercadoria</label>
						<input class="string" type="text" name="name" id="name" />
					</div>
					<div class="control-group rf_input">
						<label class="string" for="quantity">Quantidade</label>
						<input class="string" type="text" name="quantity" id="quantity" />
					</div>
					<div class="control-group rf_input">
						<label class="string" for="price">Preço</label>
						<input class="string" type="text" name="price" id="price" />
					</div>
					<div class="control-group rf_input">
						<label class="string" for="businessType">Tipo do negócio</label>
						<select class="string" name="businessType" id="businessType">
							<option selected="selected" value="">Selecione</option>
							<option value="Compra">Compra</option>
							<option value="Venda">Venda</option>
						</select>
					</div>
					<input type="hidden" name="success" />
					<div class="rf_input submit" id="rf_input_submit">
						<input type="submit" value="Cadastrar" id="submit" name="register" />
					</div>
					<div class="rf_input terms">
						Ao confirmar, a mercadoria irá para uma lista de operações, que poderão ser visualizadas posteriormente
					</div>
				</form>
			</div>
		</div>
	</body>
</html>