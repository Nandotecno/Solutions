<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>Exemplo de Janela Modal com jQuery</title>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/janela.js"></script>	

		<link href="css/janela.css" rel="stylesheet" type="text/css">	
		
	</head>
	<body>
		
		<a href="#janela" rel="Modal">Abrir Janela Modal</a>

		<div class="window" id="janela">

			<a href="#" class="fechar">X Fechar</a>

			<h4>Primeira Janela Moodal</h4>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis auctor tempus. Lorem ipsum dolor sit amet,</p>
		    <p>Morbi dui lacus, placerat eget pretium vehicula, mollis id ligula. Nulla facilisi. </p>


		</div>

		<div id="mascara"></div>

	</body>
</html>