<!DOCTYPE HTML>
<html>
<head>
<meta charset="iso-8859-2">
<title>Video Institucional</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #000;
	overflow: hidden;
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
#toptext{
	position: absolute;
	left: 0px;
	top: 0px;
	right: 0px;
	display: block;
	list-style-type: none;
	margin: 0px;
	padding: 10px;
	z-index: 100;
	color: #FFF;
	border: 1px solid #000;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	background-color:#000000;
background: -moz-linear-gradient(top,  rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.5)), color-stop(100%,rgba(0,0,0,0.5))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%); /* IE10+ */
background: linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80000000', endColorstr='#80000000',GradientType=0 ); /* IE6-9 */
}
#video {
	visibility: hidden;
	z-index: 1;
}
body,td,th {
	color: #FFF;
}
</style>
</head>

<body onLoad="loader();">
<div id="video">
    <object id="flowplayer" width="640" height="480" data="http://releases.flowplayer.org/swf/flowplayer-3.2.8.swf" type="application/x-shockwave-flash">
        <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.8.swf" />
        <param name="allowfullscreen" value="true" />
        <param name="flashvars" value='config={"clip":"http://dados.grupocriarte.com/clientes/corrego%20novo/<?php echo($_GET['link']); ?>"}' />
    </object>
</div>
<script type="text/javascript">
function loader(){
setTimeout(
	function() {
		document.getElementById('video').style.visibility='visible';
	},1000);
setTimeout(
	function() {
		document.getElementById('toptext').style.visibility='hidden';
	},6000);
}
</script>
<div id="toptext">
<?php echo($_GET['titulo']); ?>
</div>
</body>
</html>
