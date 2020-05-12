<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>SMPainel - 1.0</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
<link type="text/css" href="css/smoothness/jquery-ui-1.8.18.custom.css" rel="stylesheet">	
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript">
$(function() {
	$( "#data" ).datepicker();
});
function AbreAba(a){
	var b=document.getElementsByTagName('li').length;
	for(var i=1;i<b+1;i++){
		c="div"+i;
		d="td"+i;
		document.getElementById(c).style.display="none";
		document.getElementById(d).style.backgroundColor="";
		document.getElementById(c).className="div";
			if(c==a){
				document.getElementById(a).style.display="block";
				document.getElementById(d).style.backgroundColor="#999";
			}
	}
}
function loading()	{document.getElementById("box").style.visibility="hidden";};
</script>
</head>
<body onload="AbreAba('div1');">
<?php
require_once("funcoes/funcoes.php");
require_once("funcoes/conectar.php");
	@session_start();
	if (isset($_SESSION["nome"])){
	$nome=$_SESSION["nome"];
	$permissao=$_SESSION["permissao"];
		if ($permissao==1){
			$permissao="adiministrador";
		}	else if ($permissao==2){
			$permissao="moderador";
		}	else {
			$permissao="usuario";
		}
?>
<div class="menu">
		<ul>
			<li>
           	  <div id="pai1" ><a href="#" onclick="AbreAba('div1')">NOT&Iacute;CIAS</a></div>
            	<ul>
                	<li id="td1" class="1"><a href="#" onclick="AbreAba('div1')">Nova not&iacute;cia</a></li>
                  	<li id="td2" class="1"><a href="#" onclick="AbreAba('div2')">Editar not&iacute;cia</a></li>
                </ul>
            </li>
            <li>
              <div id="pai2"><a href="#" onclick="AbreAba('div3')">FOTO E V&Iacute;DEO</a></div>
            	<ul>
               	  <li id="td3" class="2"><a href="#" onclick="AbreAba('div3')">FOTOS</a></li>
                  <li id="td4" class="2"><a href="#" onclick="AbreAba('div4')">VIDEOS</a></li>
                </ul>
          </li>
            <li>
              <div id="pai3"><a href="#" onclick="AbreAba('div5')">GALERIA DE PREFEITOS</a></div>
            	<ul>
               	  <li id="td5" class="3"><a href="#" onclick="AbreAba('div5')">PREFEITO ATUAL</a></li>
                  <li id="td6" class="3"><a href="#" onclick="AbreAba('div6')">OUTROS PREFEITOS</a></li>
                </ul>
            </li>
            <li class="sair">
            	<div id="pai4"><a href="#">&nabla;</a></div>
                <ul>
                	<li id="td6" class="4"><a href="#" onclick="AbreAba('div7')">Listar Usu&aacute;rios</a></li>
                    <li id="td7" class="4"><a href="#" onclick="AbreAba('div8')">Editar Usu&aacute;rio</a></li>
                    <li><a href="sair.php">SAIR</a></li>
                </ul>
            </li>
            <div style="visibility:hidden">
                <li id="td8"></li>
                <li id="td9"></li>
                <li id="td10"></li>
                <li id="td11"></li>
                <li id="td12"></li>
            </div>
		</ul>
</div>
<!--*****************************-->
<div class="conteudo">
<div id="div1">
<h1>NOVA NOT&Iacute;CIA</h1>
<form action="eng.php?x=noticia" method="post" target="load">
<input type="text" name="titulo" id="titulo" placeholder="Titulo" />
<input type="text" name="data" id="data" placeholder="Data da noticia" /><br>
<textarea name="resumo" cols="82" rows="15" id="resumo" placeholder="Resumo"></textarea><br>
<input type="text" name="autor" id="autor" placeholder="Autor">
<select name="galeria" id="galeria">
	<option value="nenhuma" selected="selected">Galeria:</option>
    <option value="slide">Topo</option>
    <option value="thumb">Central</option>
    <option value="nenhuma">Nenhuma</option>
</select><br>
<textarea name="mensagem" cols="82" rows="20" id="mensagem" placeholder="Noticia"></textarea><br>
<input type="submit" name="button" id="button" value="Publicar">
<input type="reset" name="button" id="button" value="Apagar tudo">
</form>
</div>
<div id="div2">
<h1>EDITAR NOT&Iacute;CIA</h1>
<?php
$saida=selecionar("*","cpnoticias","","data DESC");
$linha=count($saida);
for($i=0; $i<$linha; $i++){
$imagem=selecionar("*","cpimagens","capa='s' and categoria='noticia' and id='".$saida[$i][0]."'","");
if ($saida[$i][6]=="s"){$link="href='noticia.php?cd=".$saida[$i][0]."'";}
if ($saida[$i][7]="thumb"){$galeria="Top 10";} else
if ($saida[$i][7]="slide"){$galeria="Slider";} else
if ($saida[$i][7]="nenhuma"){$galeria="Nenhuma";}
?>
<div>
<img src='../<?php echo($imagem[3]); ?>' height='150'>
<h5><?php echo($saida[$i][2]); ?></h5>
<b><?php echo(data($saida[$i][1])); ?></b>
<b><?php echo($saida[$i][4]); ?></b>
<b><?php echo($galeria); ?></b>
</div>
<?php
};
?>
</div>
<div id="div9">
<h1>NOT&Iacute;CIA</h1>
</div>
<div id="div3">
<h1>Fotos</h1>
</div>
<div id="div4">
<h1>Video</h1>
</div>
<div id="div5">
<h1>PREFEITO ATUAL</h1>
<?php
$sql="SELECT * FROM prefeito where atual='s'";
$dados=MYSQL_QUERY($sql) or die(mysql_error());
$campo = mysql_fetch_row($dados)
?>
<form action='eng.php?x=prefeito' method='post' name='prefeito'>
<label>Nome: &nbsp;</label><input name='nome' type='text' id='nome' value="<?php echo $campo[1]; ?>">
<label>In&iacute;cio da candidatura: &nbsp;</label><input name='inicio' type='text' id='data' value="<?php echo $campo[2]; ?>">
<label>&uml;Termino da candidatura: &nbsp;</label><input name='fim' type='text' id='data' value="<?php echo $campo[3]; ?>"><br>
<h2>Sobre o prefeito:</h2><br>
<textarea name="txt" cols="100" rows="30" id="txt"><?php echo $campo[4]; ?></textarea><br>
<input type='submit' name='button' id='button' value='Enviar'>
</form>
</div>
<div id="div6">
<h1>TODOS PREFEITOS</h1>
</div>
<div id="div7">
<h1>LISTAR USU&Aacute;RIOS</h1>
<table width='98%' border='1' align='center' cellpadding='1' cellspacing='0' bordercolor='#CCCCCC'>
  <tr class='titulo'>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Codigo</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Tipo de permissao</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Usu&aacute;rio des de</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Nome</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Login</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Email</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Senha</strong></td>
    <td align='left' valign='middle' bgcolor='#FFFFFF'><strong>Deletar</strong></td>
  </tr>
<?php
$sql = "SELECT * FROM cplogin";
$login= MYSQL_QUERY($sql) or die(mysql_error());
while ($campo = mysql_fetch_row($login)){
	
	if (($permissao==1) or $permissao==2){
		$delete="<td align='center'><strong><a href='delete.php?cd=".$campo[0]."&t=cplogin'>X</a></strong></td>";
	}
	else{
		$delete="<td>&nbsp;</td>";
	}

	if ($_SESSION["cd"]==1){
		$senha="<td>".$campo[6]."</td>";
	}else{
		$senha="<td>&nbsp;</td>";
	}
	
echo"<tr>
		<td>".$campo[0]."</td>
		<td>".$campo[1]."</td>
		<td>".$campo[2][8].$campo[2][9]."/".$campo[2][5].$campo[2][6]."/".$campo[2][0].$campo[2][1].$campo[2][2].$campo[2][3]."</td>
		<td>".$campo[3]."</td>
		<td>".$campo[4]."</td>
		<td>".$campo[5]."</td>
		".$senha."
		".$delete."
	  </tr>";
}
?>
  <tr class="titulo">
    <td colspan="8" align='center' valign='middle' bgcolor="#FFFFFF"><a href="addu.php"><font color='#333333'><strong>Adicionar outro usu&aacute;rio</strong></font></a></td>
  </tr>
</table>
</div>
<div id="div8">
<h1>EDITAR USU&Aacute;RIOS</h1>
</div>
<div id="div10">
<h1>ADICIONAR USU&Aacute;RIOS</h1>
</div>
</div>
<?php
}else{
echo'
<div class="box" id="box">
<div class="titulo">SMPainel 1.0
  <div class="close" onClick="loading()">X</div></div>
<div class="box2">
<form action="eng.php?x=login" method="post" target="load">
<input name="nome" type="text" id="nome" placeholder="Nome" size="30" maxlength="30" />
<br />
<input name="senha" type="password" id="senha" placeholder="Senha" size="30" maxlength="10" />
<br />
<input name="Login" type="submit" value="Login" class="btn" onclick="loading();"/>
</form>
</div>
</div>';
}
?>
<iframe name="load" allowtransparency="true" width="0px" height="0px" class="loadframe"></iframe>
</body>
</html>
