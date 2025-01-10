<?php
	ob_start();
	session_start();
	$pages = "index";
	include "includes/config.php";
?>
<!doctype html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">
	<head>
		<meta charset="utf-8">		
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="robots" content="index, follow"/>
		<title><?= TITLE_SITE ?></title>
		
		<link rel="stylesheet" href="<?= URL ?>css/style.css">
		<link rel="stylesheet" href="<?= URL ?>css/framework.css">
		<link href="https://fonts.googleapis.com/css?family=<?= FONT_GOOGLE ?>" rel="stylesheet">

	</head>
	
	<body>
		<main>
			<section class="bgcolor-green-dark">
				<header>
					<h1 class="fontzero">Menu de Navegação</h1>
					
					<p class="text-center link-bgcolor-green-dark font-text-light-extra font-weight-heavy">
						<a href="index" class="color-white">HOME</a>
						<a href="open-cash" class="color-white">ABERTURA</a>
						<a href="bills-to-pay" class="color-white">CONTAS A PAGAR</a>
						<a href="bills-to-receive" class="color-white">CONTAS A RECEBER</a>
						<a href="payments-cash" class="color-white">PAGAMENTO CAIXA</a>
						<a href="reports" class="color-white">RELATÓRIOS</a>
					</p>
					<div class="clear"></div>
				</header>
			</section>

			<section class="bgcolor-white section_main">
				<h1 class="fontzero">Conteúdo do Site</h1>
				<div class="espaco"></div>
				
				<p class="text-center font-text-hard-two font-weight-heavy">Quanto há de dinheiro para a abertura do caixa?</p>
				
				<form method="post">
					<input type="text" name="cash" required class="border-1px">
					<button class="link-bgcolor-green-dark-b color-white font-weight-heavy" name="btn_open">Abrir Caixa</button>
				</form>
				
				<div class="espaco-min"></div>
			
		</section>
		</main>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="<?= URL ?>js/maskinput.js"></script>
		<script src="<?= URL ?>js/function.js"></script>
		<script src="<?= URL ?>js/jquery-money.js"></script>
		
	</body>
	
</html>
<?php 
		ob_end_flush(); 
	?>
