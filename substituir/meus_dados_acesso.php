<?php
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$dados_acesso = new Template("html/dado_acesso.html");

	$dados_acesso -> NOME = "Nome";
	$dados_acesso -> LOGIN = "alice.borges";
	$dados_acesso -> SENHA = "senha";

    $dados_acesso ->show();
	include_once 'html/footer.html';
?>
