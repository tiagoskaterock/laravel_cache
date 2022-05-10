<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
</head>
<body>
  
<div class="container">

	<div class="jumbotron">
		<h2>Produtos</h2>
	</div>
  
	<?php 
	
	  foreach ($produtos as $produto) {
		  ?>
		  <p>Produto: <?= $produto->nome ?></p>
		  <p>Preço: <?= $produto->preco ?></p>

		  <p>Categorias: </p>
		  <?php foreach ($produto->categorias as $categoria): ?>
			  <p><?= $categoria->nome ?></p>                
		  <?php endforeach ?>

		  <hr>

		  <?php
    }    	
	
	?>

</div>

<footer>
	
</footer>

</body>
</html>
		