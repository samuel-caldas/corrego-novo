<?php
include_once("funcoes/funcoes.php");
include_once("funcoes/conectar.php");
$tipo=$_POST["tipo"];
//--------------------------
if($tipo=="usuario"){inserir("cplogin","'permissao','data','nome','login','email','senha'","'".$_POST["permissao"]."','".date("Y-m-d")."','".$_POST["nome"]."','".$_POST["login"]."','".$_POST["email"]."','".$_POST["senha"]."'","Usuário adicionado com sucesso!");};
//--------------------------
if($tipo=="noticia"){inserir("cpnoticias","'data','titulo','resumo','Autor','noticia','galeria'","'".data($_POST["data"])."','".$_POST["titulo"]."','".$_POST["resumo"]."','".$_POST["autor"]."','".$_POST["noticia"]."','".$_POST["galeria"]."'","Notícia enviada com sucesso!");}
//--------------------------
if($tipo=="comentar"){inserir("cpcomentarios","'id','data','nome','email','site','mensagem'","'".$_POST["id"]."','".date("Y-m-d")."','".$_POST["nome"]."','".$_POST["email"]."','".$_POST["contato"]."','".$_POST["mensagem"]."'","Comentado com sucesso!");};
//--------------------------
if($tipo=="prefeito"){update("prefeito","nome='".$_POST["nome"]."',inicio='".data($_POST["inicio"])."',termino='".data($_POST["fim"])."',mensagem='".$_POST["txt"]."'","atual='s'");}
//--------------------------
if($tipo=="editnoticia"){update("cpnoticias","data='".data($_POST["data"])."',titulo='".$_POST["titulo"]."',resumo='".$_POST["resumo"]."',Autor='".$_POST["autor"]."',noticia='".$_POST["noticia"]."'","cd='".$_POST["cd"]."'");}
//--------------------------
?>





