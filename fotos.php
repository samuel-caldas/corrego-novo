<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
        <title>Prefeitura Municipal de C&oacute;rrego Novo</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="robots" content="index, follow" />
        <!-- Style Sheets -->
        <link rel="stylesheet" href="./css/reset.css" type="text/css" media="screen" />
        <link id="css" rel="stylesheet" href="./css/screen.css" type="text/css" media="screen" />
        <link rel="stylesheet" media="screen" type="text/css" href="./css/colorpicker.css" />
        <!-- Google Fonts --> 
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css' />
		<!--[if IE]>
            <link rel="stylesheet" href="css/ie7.css" type="text/css" media="screen" />
        <![endif]-->
        <!-- Java Scripts -->
        <!-- Menu -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
        <script src="./js/ddsmoothmenu.js" type="text/javascript">     </script>
		<script src="./js/jquery.anythingslider.min.js"></script>
        <script src="./js/colorpicker.js" type="text/javascript"></script>
        <script src="./js/screen.js"></script>
        <!-- pretyphoto -->
        <script src="./js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="./js/jquery.tools.min.js"></script>
<style>
.blogimage{
	text-align: center;
}
</style>
<body>  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    	<!-- DEMO OPTIONS START -->

        <!-- DEMO OPTIONS END -->
   
    	<!-- BODY WRAP START -->

        <div id="bodywrapper">
        
        	<!-- HEADER BG -->
        
            <div id="topheaderline"></div>
            
            <!-- HEADER BG END -->
        
        	<!-- HEADER START -->
        
            <div id="headercontainer">
            
            	<!-- HEADER TEXT LINE -->
               <div id="headertextlineright"><img src="images/slogan.png" alt=""/></div>
            	<!-- HEADER TEXT LINE END -->
                
                <!-- HEADER SOCIAL ICONS -->
                <ul id="headersocial">
					<li><a href="http://www.facebook.com/profile.php?id=100002769931336" data-rel="fadeimg"><img src="./images/social/facebook.png" alt="" title="Facebook"/></a></li>
					<li><a href="#" data-rel="fadeimg"><img src="./images/social/twitter.png" alt="" title="Twitter"/></a></li>
					<li><a href="http://www.youtube.com/results?search_query=corrego+novo&oq=corrego+novo&aq=f&aqi=g2&aql=&gs_sm=e&gs_upl=2533l4543l0l4763l12l8l0l0l0l0l428l927l2-2.0.1l3l0" data-rel="fadeimg"><img src="./images/social/youtube.png" alt="" title="Youtube"/></a></li>
				
			  </ul>
            <!-- HEADER SOCIAL ICONS END -->
                
                <!-- LOGO -->
                
      <a href="./index.php" title="Home"><div id="logo">C&oacute;rrego Novo</div></a>
                
                <!-- LOGO END -->
                <!-- NAVIGATION START -->
    			<div id="menuwrap">
                    <div id="smoothmenu1" class="ddsmoothmenu">
                    <?php require_once("menu.php"); ?>
                        <br style="clear: left" />
                    </div>	
                </div>
                <!-- NAVIGATION END -->	
          </div>
            
          <!-- HEADER END -->
        
        <!-- MAIN CONTENT START-->
        
        <div id="contentcontainer"> 
        
        	<!-- SUBHEADER BACKGROUND -->
        
        	<div class="subheaderbanner">
                <div id="glaretop"></div>
            </div>
            
            <div class="bodybg">
            	<div id="bodytopshadow"></div>
            </div>
            
            <!-- SUBHEADER BACKGROUND END -->
           
            <!-- PAGE TOP BACKGROUND -->
            
            <div class="pagetopbg"><div class="pagetopbgfill"></div></div> 
            
            <!-- PAGE TOP BACKGROUND END -->
            
            <!-- PAGE CONTENT START-->
            
            <div id="contentcolumn" class="full left">

<ul id="portfoliolist3column" class="portfoliofull"> 
<?php
include_once("painel/funcoes/funcoes.php");
include_once("painel/funcoes/conectar.php");
	$saida=selecionar("*","imagens","id='1".$_GET["cd"]."'","");
	$linha=count($saida);
		for($i=0; $i<$linha; $i++){
echo("
<!-- PORTFOLIO ITEM -->
	<li class='portfolio' data-id='id-".$i."'>
		<div class='blogimage'>
		<a href='albuns/".$saida[$i][2]."' data-rel='prettyPhoto[galeriaid".$_GET["cd"]."]'>
		<img height='140px' style='max-width:260px;' src='albuns/".$saida[$i][2]."' />
		</a>
		</div>
		<div class='portfolioshadow'></div>
		<br style='clear: left' />
	</li>
<!-- PORTFOLIO ITEM END -->");
}
?>
</ul>
                <br style="clear: left" />
                
            </div>
            <br style="clear: left" />  
        </div>
        <!-- MAIN CONTENT END-->
	</div>
    
<!-- BODY WRAP END -->
<?php require_once("rodape.php"); ?>