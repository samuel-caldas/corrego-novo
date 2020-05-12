<?php
include_once("funcoes/funcoes.php");
include_once("funcoes/conectar.php");
@session_start();
if ($_GET['x']==''){
	myErro("ERRO!");
}else
if ($_GET['x']=='login'){
	$saida=selecionar("*","cplogin","nome='".$_POST["nome"]."' or login='".$_POST["nome"]."' or email='".$_POST["nome"]."' and senha='".$_POST["senha"]."'","");
	$num_linhas=count($saida);
		if($num_linhas==1){
			$_SESSION["permissao"]=$saida[0][1];
			$_SESSION["nome"]=$saida[0][3];
			header("Location: index.php");
		}
		else{myErro("Dados incorretos!");}
	}
else
if (isset($_SESSION["nome"])){
	if($_GET['x']=="usuario"){inserir("cplogin","'permissao','data','nome','login','email','senha'","'".$_POST["permissao"]."','".date("Y-m-d")."','".$_POST["nome"]."','".$_POST["login"]."','".$_POST["email"]."','".$_POST["senha"]."'","Usuário adicionado com sucesso!");}else
	if($_GET['x']=="noticia"){inserir("cpnoticias","'data','titulo','resumo','Autor','noticia','galeria'","'".data($_POST["data"])."','".$_POST["titulo"]."','".$_POST["resumo"]."','".$_POST["autor"]."','".$_POST["noticia"]."','".$_POST["galeria"]."'","Notícia gravada com sucesso!");}else
	if($_GET['x']=="prefeito"){update("prefeito","nome='".$_POST["nome"]."',inicio='".data($_POST["inicio"])."',termino='".data($_POST["fim"])."',mensagem='".$_POST["txt"]."'","atual='s'");}else
	if($_GET['x']=="editnoticia"){update("cpnoticias","data='".data($_POST["data"])."',titulo='".$_POST["titulo"]."',resumo='".$_POST["resumo"]."',Autor='".$_POST["autor"]."',noticia='".$_POST["noticia"]."'","cd='".$_POST["cd"]."'");};
}else{myErro("ERRO FATAL!");};