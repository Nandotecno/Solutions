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
			
			<section class="bgcolor-white">
				<h1 class="fontzero">Gerenciar Contas a Pagar</h1>				
				<p class="text-left font-text-light font-weight-heavy text-margin"><br><a href="bills-to-pay" class="link-bgcolor-red-dark-b color-white close">Voltar</a></p>
				<div class="espaco-min"></div>
				<p class="text-center font-text-hard-two font-weight-heavy">Gerenciar Contas a Pagar</p>
				
				<table>
					<thead>
						<tr>	
							<th class="border-1px-table">Contas</th>
							<th class="border-1px-table">Valor</th>
							<th class="border-1px-table">Data de Vencimento</th>
							<th class="border-1px-table">Status</th>
							<th class="border-1px-table">Editar</th>
							<th class="border-1px-table">Excluir</th>
						</tr>
					</thead>
					
					<tbody>
									</tbody>
					<tr style="background-color: #999; color: #111; text-align:center">
						<td class="border-1px-table">Jeferson Souza</td>
						<td class="border-1px-table">Total: R$ 0,00</td>
						<td class="border-1px-table">26/07/2019</td>
						<td class="border-1px-table">Recebido</td>
						<td class="border-1px-table"><p class="text-center font-text-light font-weight-heavy"><a href="edit-pay-gerent" class="link-bgcolor-green-dark color-white">Editar</a></p></td>
						<td class="border-1px-table"><p class="text-center font-text-light font-weight-heavy"><a href="delete-pay-gerent" class="link-bgcolor-red-dark color-white">Deletar</a></p></td>
					</tr>

				</table>
				
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
