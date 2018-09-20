<?php
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$usuario = new Template("html/pagina_usuario.html");

	$usuario -> NOME = "Nome do produto";
	$usuario -> VALOR = "R$5.00";

    $usuario->show();
	include_once 'html/footer.html';
?>
