<?php
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$minha_conta = new Template("html/dado_usuario.html");

	$minha_conta -> NOME = "Nome";
	$minha_conta -> CPF = "090.872.829-82";

    $minha_conta->show();
	include_once 'html/footer.html';
?>
