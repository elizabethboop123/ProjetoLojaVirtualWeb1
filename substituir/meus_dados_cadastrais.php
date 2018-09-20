<?php
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$minha_conta = new Template("html/dado_cadastral.html");

	$minha_conta -> NOME = "Nome";
	$minha_conta -> ENDERECO = "Rua Érico Machado, nº 370. Fátima.";

    $minha_conta->show();
	include_once 'html/footer.html';
?>
