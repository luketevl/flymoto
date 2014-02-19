<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
	<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
	<meta name="author" content="Codrops" />
	<title>Title pagina</title>
	<script type="text/javascript" src="<?php echo base_url()?>resources/js/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/css/style_fly.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/css/style.css"> 
	-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/css/default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/css/component.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/css/progressjs.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/css/../favicon.ico">
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!--
		<script type="text/javascript" src="<?php echo base_url()?>resources/js/location.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>resources/js/demo_progress.js"></script>
	-->
	<script type="text/javascript" src="<?php echo base_url()?>resources/js/location_atual.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>resources/js/mapa.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>resources/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>resources/js/progress.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>resources/js/my_functions.js"></script>


</head>
<body>

   <script type="text/javascript" src="<?php echo base_url()?>resources/js/jquery-ui.custom.min.js"></script>

    <!-- Maps API Javascript -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
    <!-- Caixa de informação -->
    <script type="text/javascript" src="<?php echo base_url()?>resources/js/infobox.js"></script>
    
    <!-- Agrupamento dos marcadores -->
   <script type="text/javascript" src="<?php echo base_url()?>resources/js/markerclusterer.js"></script>

    <!-- Arquivo de inicialização do mapa 

    <script type="text/javascript" src="<?php echo base_url()?>resources/js/mapa.js"></script>
    -->
    <script type="text/javascript" src="<?php echo base_url()?>resources/js/mapa_search.js"></script>

<header>
	<nav id="menu" class="nav">					
		<ul>
			<li>
				<a href="#">
					<span class="icon">
						<i aria-hidden="true" class="icon-home"></i>
					</span>
					<span>Inicio</span>
				</a>
			</li>
			<li>
				<a href="#">
				<?php
 					echo form_hidden('url','cadastros/entidades');
				?>
					<span class="icon"> 
						<i aria-hidden="true" class="icon-team"></i>
					</span>
					<span>Cadastrar</span>
				</a>
			</li>
			<li>
				<a href="#">
				<?php
 					echo form_hidden('url','solicitar_motoboy');
				?>
					<span class="icon">
						<i aria-hidden="true" class="icon-portfolio"></i>
					</span>
					<span>Soliciar Motoboy</span>
				</a>
			</li>
			<li>
				<a href="#">
				<?php
 					echo form_hidden('url','opcoes');
				?>
					<span class="icon">
						<i aria-hidden="true" class="icon-blog"></i>
					</span>
					<span>Configurações</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="icon">
						<i aria-hidden="true" class="icon-regulamento"></i>
					</span>
					<span>Regulamento</span>
				</a>
			</li>
			<li>
				<a href="site/landing_page">
					<span class="icon">
						<i aria-hidden="true" class="icon-contact"></i>
					</span>
					<span>Contato</span>
				</a>
			</li>
		</ul>
	</nav>
</header>
<div id="camposEscondidos">
<input type="hidden" name="latitude_cli_entra" />
<input type="hidden" name="longitude_cli_entra" />
</div>
<section id="centro">

<section id="sessao-json">
	<?php

		$this->load->view('localizacao_atual');
	?>
	<section id="troca">
		
	</section>

</section>


		<script>
				//  The function to change the class
				var changeClass = function (r,className1,className2) {
					var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
					if( regex.test(r.className) ) {
						r.className = r.className.replace(regex,' '+className2+' ');
				    }
				    else{
						r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
				    }
				    return r.className;
				};	

				//  Creating our button in JS for smaller screens
				var menuElements = document.getElementById('menu');
				menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

				//  Toggle the class on click to show / hide the menu
				document.getElementById('menutoggle').onclick = function() {
					changeClass(this, 'navtoogle active', 'navtoogle');
				}

				// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
				document.onclick = function(e) {
					var mobileButton = document.getElementById('menutoggle'),
						buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

					if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
						changeClass(mobileButton, 'navtoogle active', 'navtoogle');
					}
				}
			</script>