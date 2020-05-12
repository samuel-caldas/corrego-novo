<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//caracteres especiais
//	header("Content-Type:text/html; charset=UTF8", true);
#Diversos#
	//data
	function data($data){$data=$data[8].$data[9]."/".$data[5].$data[6]."/".$data[0].$data[1].$data[2].$data[3];
	return $data;
	};
#Fun?�es de navega??o
	//Historico
	function historico($go){echo "<script>history.go(".$go.");</script>";}
	//Redireciona
	function refresh($tempo,$pagina){if($pagina!=""){$pagina="URL=".$pagina;};echo"<meta http-equiv='refresh' content='".$tempo.";".$pagina."' />";};
	//redireciona 2
	function go($pagina){echo("<script language='javascript'>window.location.href='".$pagina."'</script>");};
	//Alerta
	function alerta($msg){echo "<script>alert('".$msg."');</script>";}
	//Eerro
	function myErro($erro){alerta($erro);}
	//Sucesso
	function sucesso($pagina){alerta("Sucesso!");historico("-1");}
?>