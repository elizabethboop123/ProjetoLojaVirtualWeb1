<?php
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$categoria = new Template("html/categoria.html");
	$categoria->nome_categoria		= "Smartphones";
	for($i=0; $i<9; $i++){
		$categoria->numero_produto		= $i;
		$categoria->nome_produto		= "Iphone 7 32GB";
		$categoria->valor_produto		= 'R$2987,52';
		$categoria->descricao_produto 	= "Descrição";
		$categoria->minidesc_produto	= "Mini descrição produto";
		$categoria->link_produto		= "categoria.php";
		$categoria->texto_motivacional	= "texto motivacional";
		$categoria->block("BLOCK_PRODUTOS");
		$categoria->block("BLOCK_MINIATURAS");
	}
    $categoria->show();
	include_once 'html/footer.html';
?>
