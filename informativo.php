<script type="text/javascript" src="js/drag.js"></script>
 <!DOCTYPE HTML>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Prefeitura Municipal de C&oacute;rrego Novo</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="robots" content="index, follow" />
        <!-- Style Sheets -->
        <link rel="stylesheet" href="./css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./css/screen.css" type="text/css" media="screen" />
        <link rel="stylesheet" media="screen" type="text/css" href="./css/colorpicker.css" />
        <!-- Google Fonts --> 
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css' />
		<!--[if IE]>
            <link rel="stylesheet" href="css/ie7.css" type="text/css" media="screen" />
        <![endif]-->
    <style type="text/css">
	*{
		overflow:hidden;
	}
	a{
	cursor: default;
	}
    a:link {
	text-decoration: none;
	}
	a:visited {
		text-decoration: none;
	}
	a:hover {
		text-decoration: none;
	}
	a:active {
		text-decoration: none;
	}
    </style>
    <script>
	function loader(){
		var segundos=3;
		var milesegundos=segundos*1000;
		setTimeout(
		function() {
			document.getElementById('load').style.visibility='hidden';
			document.getElementById('window').style.visibility='visible';
			document.getElementById('iframe').className='';
			if(window.innerWidth<1250 || window.innerHeight<800){
				document.body.style.overflow='auto';
			};
		},milesegundos);
		
	}
	</script>
    </head>
<body onLoad="loader();abrir();"> 
<!-- BODY WRAP START -->
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="center" valign="middle">
    <td align="center" valign="middle">
<div class="window" id="janela">
<div class="titulo" onmousedown="startDrag();" onmouseup="stopDrag();" id="barra">Informativo C&oacute;rrego Novo <a href="index.php"><div class="closebtn">X</div></a></div>
<div class="frame">
<iframe id="iframe" class="iframepre" scrolling='no' src="http://www.wix.com/wesleya4/informativo-corrego-novo"></iframe>
</div>
<div class="statusbar">
<p>Clique ou arraste as bordas para passar as paginas</p>
</div></div>
<div class="load" id="load"></div>
</td>
  </tr>
</table>
<!-- BODY WRAP END -->
</body>